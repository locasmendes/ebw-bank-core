<?php

namespace App\Exports;

use App\Models\Submission;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Illuminate\Support\Facades\Crypt;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Cell\Hyperlink;

class SubmissionsExport implements FromQuery, WithHeadings, WithMapping, WithEvents
{

    public function __construct($startDate, $finalDate)
    {
        $this->startDate = $startDate ? Carbon::createFromDate($startDate) : null;
        $this->finalDate = $finalDate ? Carbon::createFromDate($finalDate) : null;
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                foreach ($event->sheet->getColumnIterator('H') as $row) {
                    foreach ($row->getCellIterator() as $cell) {
                        if (str_contains($cell->getValue(), '://')) {
                            $cell->setHyperlink(new Hyperlink($cell->getValue(), 'Ver documento'));
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

        return Submission::query()
            ->tap(function ($query) {
                if (!is_null($this->startDate)) {
                    $query->whereDate('created_at', '>=', $this->startDate);
                }
                if (!is_null($this->finalDate)) {
                    $query->whereDate('created_at', '<=', $this->finalDate);
                }
            });
    }

    public function map($submission): array
    {
        return [
            $submission->id,
            $submission->name,
            $submission->rg,
            $submission->cpf,
            $submission->email,
            $submission->cep,
            $submission->rua_quadra,
            $submission->numero,
            $submission->bairro,
            $submission->cidade,
            $submission->uf,
            $submission->telefone,
            \route('cadastro-peca-minha-maquininha.documento', ['hash' => encrypt($submission->documento)]),
            Carbon::createFromDate($submission->created_at)->format('d/m/Y'),
        ];
    }
    public function headings(): array
    {
        return ['id', 'Nome', 'RG', 'CPF', 'Email', 'CEP', 'Rua e Quadra', 'Número', 'Bairro', 'Cidade', 'UF', 'Telefone', 'Documento', 'Data da criação'];
    }
}
