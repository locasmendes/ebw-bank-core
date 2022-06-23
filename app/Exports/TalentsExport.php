<?php

namespace App\Exports;

use App\Models\PartnerInvestor;
use App\Models\Talent;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Illuminate\Support\Facades\Crypt;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Cell\Hyperlink;

class TalentsExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize, WithEvents, WithColumnWidths
{

    public function __construct($startDate, $finalDate)
    {
        $this->startDate = $startDate ? Carbon::createFromDate($startDate) : null;
        $this->finalDate = $finalDate ? Carbon::createFromDate($finalDate) : null;
    }

    public function columnWidths(): array
    {
        return [
            'X' => 55,
        ];
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                foreach ($event->sheet->getColumnIterator('X') as $row) {
                    foreach ($row->getCellIterator() as $cell) {
                        if (str_contains($cell->getValue(), '://')) {
                            $cell->getValue();
                            $cell->setHyperlink(new Hyperlink($cell->getValue(), 'Currículo'));
                            // Upd: Link styling added
                            $event->sheet->getStyle($cell->getCoordinate())->applyFromArray([
                                'font' => [
                                    'color' => ['rgb' => '0000FF'],
                                    'underline' => 'single'
                                ]
                            ]);
                        }
                    }
                }
            },
        ];
    }

    public function query()
    {
        return Talent::query()
            ->tap(function ($query) {
                if (!is_null($this->startDate)) {
                    $query->whereDate('created_at', '>=', $this->startDate);
                }
                if (!is_null($this->finalDate)) {
                    $query->whereDate('created_at', '<=', $this->finalDate);
                }
            });
    }

    public function map($talent): array
    {
        return [
            $talent->id,
            $talent->name,
            $talent->email,
            $talent->phone,
            $talent->document_cpf,
            $talent->document_rg,
            $talent->state,
            $talent->city,
            $talent->cep,
            $talent->company_1,
            $talent->function_1,
            $talent->company_2,
            $talent->function_2,
            $talent->company_3,
            $talent->function_3,
            $talent->maior_realizacao,
            $talent->exerceu_lideranca,
            $talent->tipo_ambiente,
            $talent->escolaridade,
            implode(', ', $talent->conhecimento_informatica),
            $talent->conhecimento_linguas,
            $talent->area_trabalho,
            Carbon::createFromDate($talent->created_at)->format('d/m/Y'),
            $talent->curriculo ? route('talent.curriculo', ['hash' => Crypt::encryptString($talent->curriculo)]) : 'Não enviou currículo',
        ];
    }
    public function headings(): array
    {
        return [
            'id',
            'Nome',
            'Email',
            'Telefone',
            'CPF',
            'RG',
            'Estado',
            'Cidade',
            'CEP',
            'Experiência: nome da Empresa 1',
            'Experiência: função na Empresa 1',
            'Experiência: nome da Empresa 2',
            'Experiência: função na Empresa 2',
            'Experiência: nome da Empresa 3',
            'Experiência: função na Empresa 3',
            'Maior realização profissional ou desafio',
            'Situação em que exerceu liderança',
            'Ambiente de trabalho preferido',
            'Escolaridade',
            'Conhecimento em informática',
            'Conhecimento em outras linguas',
            'Área de trabalho desejada',
            'Data do envio',
            'Currículo',
        ];
    }
}
