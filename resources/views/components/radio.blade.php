<div class="talent-radio mb-2 hover:bg-ebw-red hover:bg-opacity-10 rounded-lg">
    <input type="radio" {{ $attributes }} id="{{ $attributes->get('name') }}_{{ str($attributes->get('value'))->slug() }}" >
    <label class="cursor-pointer w-full py-1 " for="{{ $attributes->get('name') }}_{{ str($attributes->get('value'))->slug() }}">{{ $attributes->get('value') }}</label>
</div>
