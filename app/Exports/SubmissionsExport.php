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

class SubmissionsExport implements FromQuery, WithHeadings, WithMapping
{

    public function __construct($startDate, $finalDate)
    {
        $this->startDate = $startDate ? Carbon::createFromDate($startDate) : null;
        $this->finalDate = $finalDate ? Carbon::createFromDate($finalDate) : null;
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
            $submission->phone,
            $submission->email,
            $submission->cpf_cnpj,
            $submission->allow_infomation_whatsapp_sms ? 'Sim' : 'Não',
            $submission->allow_infomation_email ? 'Sim' : 'Não',
            Carbon::createFromDate($submission->created_at)->format('d/m/Y'),
        ];
    }
    public function headings(): array
    {
        return [
            'id',
            'Nome',
            'Telefone',
            'Email',
            'CPF ou CNPJ',
            'Permite receber informações por Whatsapp ou SMS',
            'Permite receber informações por e-mail',
            'Data do envio'
        ];
    }
}
