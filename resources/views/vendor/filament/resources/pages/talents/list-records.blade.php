<div>
    <form action="{{ route('talent.export') }}" method="post">
        @csrf
        <h3 style="font-weight:bold;font-size:20px;">Exportar Banco de Talentos</h3>

        <div style="margin-bottom:20px;">
            <div>
                <small>Escolha de datas é opcional</small>
            </div>
            <label for="start_date">
                Data Inicial
                <input type="date" id="start_date" name="start_date"

                 {{-- max="{{ now()->format('Y-m-d')}}"> --}}
            </label>
            <label for="final_date">
                Data Final
                <input type="date" id="final_date" name="final_date"

                 {{-- max="{{ now()->format('Y-m-d')}}"> --}}
            </label>
        </div>
        @if (session('invalid-date'))
            <h3>Período Inválido</h3>

        @endif

        <button type="submit" class="inline-flex items-center justify-center font-medium tracking-tight rounded-lg focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 h-9 px-4 text-white shadow focus:ring-white">Exportar</button>
    </form>
    <x-filament::page class="filament-resources-list-records-page">
        {{ $this->table }}
    </x-filament::page>
</div>
