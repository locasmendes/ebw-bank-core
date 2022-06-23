<div class="border-2 input-wrapper relative pt-3 pr-3 pb-2 pl-2 mb-3">
    <label for="{{ $attributes->get('name') }}" class="block font-medium text-lg text-black pl-1">
        {{ $slot }}
    </label>
    <textarea  {{ $attributes }} id="{{ $attributes->get('name') }}" aria-placeholder="{{ $attributes->get('placeholder') }}" class="w-full py-1 pl-1 focus:outline-none focus:bg-ebw-red  focus:bg-opacity-10 transition-colors duration-150 placeholder-black" tabindex="0"></textarea>
    <div class="error-message absolute top-1 left-1/3 text-sm text-ebw-red font-medium "></div>
</div>
