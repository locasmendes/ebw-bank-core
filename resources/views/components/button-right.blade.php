<button {{ $attributes->class(['text-white bg-ebw-red md:py-4 py-3 md:px-10 sm:px-6 px-4 rounded-full hover:bg-opacity-80 transition-opacity duration-200']) }}>
    <span class="font-bold sm:text-xl text-sm uppercase tracking-wide">
        {{ $slot }}
    </span>
    <i class="fas fa-chevron-right text-white sm:text-lg text-sm sm:ml-2 ml-1"></i>
</button>
