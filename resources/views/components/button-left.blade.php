<button {{ $attributes->class(['sm:mx-4 mx-2 text-white bg-ebw-red md:py-4 py-3 md:px-10 sm:px-6 px-4 rounded-full hover:bg-opacity-80 transition-opacity duration-200']) }}>
    <i class="fas fa-chevron-left text-white sm:text-lg text-sm sm:mr-2 mr-1"></i>
    <span class="font-bold sm:text-xl text-sm uppercase tracking-wide">
        {{ $slot }}
    </span>
</button>
