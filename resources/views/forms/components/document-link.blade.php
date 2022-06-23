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
    <div x-data="{ state: $wire.entangle('{{ $getStatePath() }}') }" class="pt-3">
        @if ($getState())
            <a href="{{ route('talent.curriculo', ['hash' => Crypt::encryptString($getState())]) }}" target="_blank" class="border rounded-lg bg-white px-10 py-3 mt-2 font-bold shadow-sm hover:bg-ebw-purple-300 hover:bg-opacity-20 transition-all">
                Ver documento
            </a>
        @else
            <div>não enviou</div>
        @endif

        <!-- Interact with the `state` property in Alpine.js -->
    </div>
</x-forms::field-wrapper>
