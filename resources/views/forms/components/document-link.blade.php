<x-forms::field-wrapper
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>
    @php
        $talent = \App\Models\Talent::find($getState());
    @endphp

    <div class="pt-3">
        @if ($getState())
            <a href="{{ route('talent.curriculo', ['hash' => Crypt::encryptString($talent->curriculo)]) }}" target="_blank" class="border rounded-lg bg-white px-10 py-3 mt-2 font-bold shadow-sm hover:bg-ebw-purple-300 hover:bg-opacity-20 transition-all">
                Ver documento enviado
            </a>
        @else
            <div>Não enviou</div>
        @endif

        <a href="{{ route('talent.pdf', ['id' => $getState()]) }}" target="_blank" class="ml-4 border rounded-lg bg-white px-10 py-3 mt-2 font-bold shadow-sm hover:bg-ebw-purple-300 hover:bg-opacity-20 transition-all">
            Gerar PDF
        </a>

    </div>
</x-forms::field-wrapper>
