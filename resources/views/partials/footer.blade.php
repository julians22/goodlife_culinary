<footer id="contact-us" class="scroll-mt-20">
    <div class="flex">
        <div class="flex-1 bg-goodlife-bronze w-1/2 py-24 hidden lg:block">
            <div class="max-[1920px]:container min-[1920px]:px-24">
                <div class="max-w-xl ms-auto flex flex-col gap-3 text-white">
                    <h3 class="text-3xl font-bold">{{ $contact->contact_title }}</h3>
                    <p class="leading-relaxed">{!! $contact->contact_description !!}</p>
                    <div class="flex items-center gap-5">
                        @foreach($contact->contact_links as $c)
                            <a href="{{ $c['link'] }}" class="transition-all duration-300 ease-in-out hover:scale-110">
                                <img class="w-10" src="{{ $c['icon'] }}" alt="{{ $c['alt_icon'] }}">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-5 flex-1 w-full text-white bg-goodlife-bronze px-6 py-12 sm:px-10 lg:w-1/2 lg:px-0 lg:py-0">
            <h3 class="text-2xl font-bold block sm:text-3xl lg:hidden">{{ $contact->contact_title }}</h3>
            <iframe class="min-h-80 lg:min-h-full" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Good%20Life%20Culinary%20-%20Kelapa%20Dua%20-%20Gading%20Serpong+(My%20Business%20Name)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <p class="leading-relaxed block lg:hidden">{!! $contact->contact_description !!}</p>
            <div class="flex items-center gap-5 lg:hidden">
                @foreach($contact->contact_links as $c)
                    <a href="#" class="transition-all duration-300 ease-in-out hover:scale-110">
                        <img class="w-10" src="{{ $c['icon'] }}" alt="{{ $c['alt_icon'] }}">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="text-center w-full bg-goodlife-peanut">
        <p class="px-2 py-5 font-bold text-white tracking-wider">WEBSITE DESIGN + DEVELOPMENT BY <a class="text-[#1a3b69]" href="https://designcub3.com/">DESIGNCUB3.COM</a></p>
    </div>
</footer>
