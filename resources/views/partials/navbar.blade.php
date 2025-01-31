<nav x-cloak x-data="{ menu: false }" class="sticky top-0 bg-goodlife-bronze z-[100]">
    <div class="max-w-screen-lg mx-auto w-full flex justify-between text-white items-center gap-14 max-h-20 px-6 sm:px-10 md:px-0 md:justify-center">
        <a href="#about-us" class="relative font-medium hidden md:block">ABOUT US</a>
        <a href="#menu-book" class="font-medium hidden md:block">MENU BOOK</a>
        <a href="#" class="motion-preset-slide-down motion-duration-1500 min-h-48 flex justify-center items-end bg-goodlife-sand rounded-b-full px-3 pb-7">
            <img class="motion-preset-expand motion-delay-700 transition-all duration-300 ease-in-out w-14 aspect-square hover:scale-110 md:w-20" src="{{ asset('img/logo-transparent.svg') }}" alt="Good Life Culinary">
        </a>
        <a href="#social-media" class="font-medium hidden md:block">SOCIAL MEDIA</a>
        <a href="#contact-us" class="font-medium hidden md:block">CONTACT US</a>
        <button @click="menu = !menu" type="button" class="relative block w-8 h-8 z-[110] md:hidden">
            <img :class="menu ? 'scale-0' : 'scale-100'" class="transition-all duration-300 ease-in-out absolute inset-0 w-8 h-8 stroke-white" src="{{ asset('img/icon/bars-3.svg') }}" alt="Open">
            <img :class="menu ? 'scale-100' : 'scale-0'" class="transition-all duration-300 ease-in-out absolute inset-0 w-8 h-8 stroke-white" src="{{ asset('img/icon/x-mark.svg') }}" alt="Close">
        </button>
        <div :class="menu ? 'top-0 right-0' : 'top-0 -right-full'" class="transition-all duration-300 ease-in-out fixed block w-1/2 h-dvh bg-goodlife-peanut md:hidden">
            <div class="flex flex-col gap-4 p-6 mt-20">
                <a href="#about-us" class="font-medium text-white">ABOUT US</a>
                <a href="#menu-book" class="font-medium text-white">MENU BOOK</a>
                <a href="#social-media" class="font-medium text-white">SOCIAL MEDIA</a>
                <a href="#contact-us" class="font-medium text-white">CONTACT US</a>
            </div>
        </div>
    </div>
</nav>
