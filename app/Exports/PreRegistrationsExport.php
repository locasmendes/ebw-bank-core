<?php

namespace App\Exports;

use App\Models\PreRegistration;
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

class PreRegistrationsExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{

    public function __construct($startDate, $finalDate)
    {
        $this->startDate = $startDate ? Carbon::createFromDate($startDate) : null;
        $this->finalDate = $finalDate ? Carbon::createFromDate($finalDate) : null;
    }

    /**
     * @return array
     */
    // public function registerEvents(): array
    // {
    //     return [
    //         AfterSheet::class => function (AfterSheet $event) {
    //             foreach ($event->sheet->getColumnIterator('H') as $row) {
    //                 foreach ($row->getCellIterator() as $cell) {
    //                     if (str_contains($cell->getValue(), '://')) {
    //                         $cell->setHyperlink(new Hyperlink($cell->getValue(), 'Ver documento'));
    //                         // Upd: Link styling added
    //                         $event->sheet->getStyle($cell->getCoordinate())->applyFromArray([
    //                             'font' => [
    //                                 'color' => ['rgb' => '0000FF'],
    //                                 'underline' => 'single'
    //                             ]
    //                         ]);
    //                     }
    //                 }
    //             }
    //         },
    //     ];
    // }

    public function query()
    {

        return PreRegistration::query()
            ->tap(function ($query) {
                if (!is_null($this->startDate)) {
                    $query->whereDate('created_at', '>=', $this->startDate);
                }
                if (!is_null($this->finalDate)) {
                    $query->whereDate('created_at', '<=', $this->finalDate);
                }
            });
    }

    public function map($preRegistration): array
    {
        return [
            $preRegistration->id,
            $preRegistration->name,
            $preRegistration->person_type === 'pf' ? 'Pessoa Física' : 'Pessoa Jurídica',
            $preRegistration->phone,
            $preRegistration->email,
            $preRegistration->cpf_cnpj,
            $preRegistration->allow_infomation_whatsapp_sms ? 'Sim' : 'Não',
            $preRegistration->allow_infomation_email ? 'Sim' : 'Não',
            Carbon::createFromDate($preRegistration->created_at)->format('d/m/Y'),
        ];
    }

    public function headings(): array
    {
        return [
            'id',
            'Nome',
            'Tipo de pessoa',
            'Telefone',
            'Email',
            'CPF ou CNPJ',
            'Permite receber informações por Whatsapp ou SMS',
            'Permite receber informações por e-mail',
            'Data do envio'
        ];
    }
}
