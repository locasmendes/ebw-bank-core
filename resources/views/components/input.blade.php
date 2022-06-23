<div class="border-2 pt-3 pr-3 pb-3 pl-2 mb-3 input-wrapper relative">
    <label for="{{ $attributes->get('name') }}" class="block font-medium text-lg text-black pl-1">
        {{ $slot }}
    </label>
    <input {{ $attributes }} id="{{ $attributes->get('name') }}" aria-placeholder="{{ $attributes->get('placeholder') }}" aria-required="true" required class="w-full py-1 pl-1 focus:outline-none focus:bg-ebw-red  focus:bg-opacity-10 transition-colors duration-150" tabindex="0">
    <div class="error-message absolute top-2 left-1/3 text-sm text-ebw-red font-medium "></div>
</div>
