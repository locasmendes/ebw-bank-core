@extends('mail.base')

@section('main')
    <tr>
        <td>
            <p>
                <b>Nome:</b> {{ $talent->name }}
            </p>
            <p>
                <b>E-mail:</b> {{ $talent->email }}
            </p>
            <p>
                <b>Telefone:</b> {{ $talent->phone }}
            </p>
            <p>
                <b>CPF:</b> {{ $talent->document_cpf }}
            </p>
            <p>
                <b>RG:</b> {{ $talent->document_rg }}
            </p>
            <p>
                <b>Estado:</b> {{ $talent->state }}
            </p>
            <p>
                <b>Cidade:</b> {{ $talent->city }}
            </p>
            <p>
                <b>CEP:</b> {{ $talent->cep }}
            </p>
            <p>
                <b>Experiência: Nome da Empresa 1:</b> {{ $talent->company_1 }}
            </p>
            <p>
                <b>Experiência: Função na Empresa 1:</b> {{ $talent->function_1 }}
            </p>
            <p>
                <b>Experiência: Nome da Empresa 2:</b> {{ $talent->company_2 }}
            </p>
            <p>
                <b>Experiência: Função na Empresa 2:</b> {{ $talent->function_2 }}
            </p>
            <p>
                <b>Experiência: Nome da Empresa 3:</b> {{ $talent->company_3 }}
            </p>
            <p>
                <b>Experiência: Função na Empresa 3:</b> {{ $talent->function_3 }}
            </p>
            <p>
                <b>Maior realização profissional ou desafio:</b> <br/> {{ $talent->maior_realizacao }}
            </p>
            <p>
                <b>Situação em que exerceu liderança:</b><br/> {{ $talent->exerceu_lideranca }}
            </p>
            <p>
                <b>Ambiente de trabalho preferido:</b> <br/>{{ $talent->tipo_ambiente }}
            </p>
            <p>
                <b>Escolaridade:</b> {{ $talent->escolaridade }}
            </p>
            <p>
                <b>Conhecimento em informática:</b> {{  implode(', ', $talent->conhecimento_informatica) }}
            </p>
            <p>
                <b>Conhecimento em outras linguas:</b><br/> {{ $talent->conhecimento_linguas }}
            </p>
            <p>
                <b>Área de trabalho desejada:</b> {{ $talent->area_trabalho }}
            </p>
            <p>
                <b>Data do envio:</b> {{ \Illuminate\Support\Carbon::createFromDate($talent->created_at)->format('d/m/Y') }}
            </p>
            @if ($talent->curriculo)
                <p>
                    <b>Currículo:</b> <a href="{{ route('talent.curriculo', ['hash' => Crypt::encryptString($talent->curriculo)]) }}" target="_blank">Link do curríco</a>
                </p>
            @else
                <p>
                    <b>Currículo:</b> Currículo não foi enviado
                </p>
            @endif
        </td>
    </tr>
@endsection
