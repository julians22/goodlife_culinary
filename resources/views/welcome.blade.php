@extends('layouts.app')

@section('content')

{{-- Banner Section --}}
<section class="max-w-[1920px] mx-auto">
    <div class="slide-show overflow-x-hidden h-full">
        <div class="swiper-wrapper">
            @for($i = 1; $i <= 3; $i++)
                <div class="swiper-slide">
                    <video class="w-full aspect-[4/3] object-cover object-center sm:aspect-[12/5]" loop muted>
                        <source src="{{ asset('videos/gl' . $i . '-short.mp4') }}" type="video/mp4">
                    </video>
                </div>
            @endfor
        </div>
        <div class="swiper-pagination"></div>
    </div>
    {{-- <div class="embla">
        <div class="embla__container">
            @for($i = 1; $i <= 3; $i++)
                <div class="embla__slide">
                    <video class="w-full aspect-[4/3] object-cover object-center sm:aspect-[12/5]" loop muted>
                        <source src="{{ asset('videos/gl' . $i . '-short.mp4') }}" type="video/mp4">
                    </video>
                </div>
            @endfor
        </div>
    </div> --}}
</section>
{{-- End Banner Section --}}

{{-- About Section --}}
<section id="about-us" class="scroll-mt-20">
    <div class="py-10 lg:pt-24">
        <div class="flex flex-col gap-14 lg:gap-20">
            <div class="container flex flex-col items-center gap-6 lg:gap-12 lg:flex-row">
                <div class="flex-1 space-y-4">
                    <h3 class="text-3xl font-bold motion-duration-1000 intersect:motion-preset-slide-right intersect:motion-preset-blur-right">About Us</h3>
                    <p class="leading-loose motion-duration-1000 motion-delay-200 intersect:motion-preset-slide-right intersect:motion-preset-blur-right"><strong>Good Life Culinary</strong> is Tangerang's #1 café and restaurant for birthdays and events, featuring a beautiful glass rooftop. Since 2019, we’ve been serving a mix of Western and Asian dishes at affordable prices. Perfect for celebrations like birthdays, sweet seventeens, and sangjit ceremonies.</p>
                </div>
                <button class="group relative flex-1 aspect-video rounded-3xl outline-none overflow-hidden scale-0 opacity-0 intersect:scale-100 intersect:opacity-100 transition duration-300 ease-in-out delay-300">
                    <div class="absolute flex justify-center items-center inset-0 w-full h-full bg-goodlife-bronze/70">
                        <img class="transition-all duration-300 ease-in-out absolute w-20 top-1/2 left-[52%] -translate-y-1/2 -translate-x-1/2 group-hover:scale-110 md:w-24" src="{{ asset('img/play-button.png') }}" alt="Play">
                        <img class="w-28 aspect-square sm:w-32 md:w-48" src="{{ asset('img/logo.png') }}" alt="Good Life Culinary">
                    </div>
                    <img src="{{ asset('img/thumbnail.png') }}" alt="Thumbnail Video">
                </button>
            </div>
            <div class="flex flex-col gap-12 md:container">
                <div class="hidden justify-center gap-6 md:flex lg:gap-10">
                    @php
                        $items = ['Birthdays', 'Ceremonies', 'Gatherings'];
                    @endphp
                    {{-- Desktop --}}
                    @foreach($items as $key => $item)
                        <div class="group relative aspect-3-4 flex-1 max-w-xs rounded-3xl outline-none overflow-hidden scale-0 opacity-0 intersect:scale-100 intersect:opacity-100 transition duration-300 ease-in-out">
                            <div class="absolute transition-all duration-300 ease-in-out flex justify-center items-end left-0 bottom-0 w-full h-1/2 bg-gradient-to-t from-goodlife-bronze to-transparent group-hover:h-3/4">
                                <p class="text-2xl text-white font-bold cursor-default pb-10 md:text-3xl lg:text-4xl">{{ $item }}</p>
                            </div>
                            <img class="w-full h-full object-cover object-center" src="{{ asset('img/provide-' . $key + 1 . '.png') }}" alt="Provide Background">
                        </div>
                    @endforeach
                </div>
                {{-- Mobile --}}
                <div class="provide-slider max-w-full overflow-x-hidden block md:!hidden">
                    <div class="swiper-wrapper">
                        @for($i = 1; $i <= 2; $i++)
                            @foreach($items as $key => $item)
                                <div class="swiper-slide">
                                    <div class="relative aspect-3-4 flex-1 max-w-xs rounded-3xl outline-none overflow-hidden">
                                        <div class="absolute flex justify-center items-end left-0 bottom-0 w-full h-1/2 bg-gradient-to-t from-goodlife-bronze to-transparent">
                                            <p class="text-2xl text-white font-bold pb-10 md:text-3xl lg:text-4xl">{{ $item }}</p>
                                        </div>
                                        <img class="w-full h-full object-cover object-center" src="{{ asset('img/provide-' . $key + 1 . '.png') }}" alt="Provide Background">
                                    </div>
                                </div>
                            @endforeach
                        @endfor
                    </div>
                </div>
                <p class="leading-relaxed text-center px-6 sm:px-10"><b>Good Life Culinary Cafe</b> is the perfect destination for celebrating special events and creating unforgettable moments with your loved ones. We offer customizable an flexible event packages tailored to your needs, including services such as MC, sound system, karaoke, backdrop decoration, screen projector, and more. Enjoy premium service and high-quality food at an affordable price ensuring a memorable experience for you and your guests. Whether it’s a birthday, anniversary, or gathering, we make every occasion truly special.</p>
            </div>
        </div>
    </div>
    <div class="hidden grid-cols-3 gap-5 p-5 md:grid">
        @for($i = 1; $i <= 9; $i++)
            <img src="{{ asset('img/gallery-' . $i . '.png') }}" alt="Gallery">
        @endfor
    </div>
    <div class="max-w-full galleries-slider overflow-x-hidden block mb-12 md:hidden">
        <div class="swiper-wrapper">
            @for($i = 1; $i <= 9; $i++)
                <div class="swiper-slide">
                    <img class="w-full aspect-video" src="{{ asset('img/gallery-' . $i . '.png') }}" alt="Gallery">
                </div>
            @endfor
        </div>
    </div>
</section>
{{-- End About Section --}}

{{-- Menu Section --}}
<section id="menu-book" class="scroll-mt-20">
    <div class="relative bg-goodlife-bronze flex items-center py-14 overflow-hidden md:py-28">
        <div class="container">
            <div class="relative max-w-xl flex flex-col gap-4 z-40">
                <h3 class="text-3xl font-bold text-white">Menu Book</h3>
                <p class="leading-relaxed text-white">Explore our menu filled with mouthwatering dishes that blend the best of Western and Asian cuisines. From appetizers to desserts, we have something to satisfy every craving. Whether it’s a casual meal or a grand event, our menu is designed to impress.</p>
                <button class="group relative transition-all duration-300 ease-in-out max-w-max font-semibold bg-white text-goodlife-orange rounded-xl px-6 py-2 hover:rotate-[2deg] hover:scale-110 hover:bg-goodlife-orange hover:text-white">
                    <span>CLICK HERE!</span>
                </button>
            </div>
        </div>
        <div class="absolute inset-0 w-full h-full bg-black/60 z-30 xl:hidden"></div>
        <img class="motion-preset-slide-down-left motion-duration-2000 max-w-screen-xl absolute top-1/2 -translate-y-1/2 -right-[390px] xl:-right-[500px] z-20 2xl:-right-[390px]" src="{{ asset('img/menu-image.png') }}" alt="Menu Image">
    </div>
</section>
{{-- End Menu Section --}}

{{-- Social Media Section --}}
<section id="social-media" class="scroll-mt-20 px-6 py-10 md:py-20 md:px-12">
    <div class="space-y-6">
        <div class="max-w-screen-md mx-auto flex flex-col gap-6 text-center">
            <h3 class="text-3xl font-bold">
                Follow Us On <span class="text-goodlife-orange">Social Media</span>
            </h3>
            <p class="leading-relaxed">Stay connected with Good Life Culinary and never miss an update! Follow us on Instagram and Tiktok for our latest promotions, event highlights, and behind-the-scenes moments. Join our community and be inspired by how we make every event unforgettable.</p>
        </div>
        <div class="flex justify-center gap-4 md:gap-8">
            @for($i = 1; $i <= 3; $i++)
                <a href="#" target="_blank" class="group max-w-64 max-h-max md:flex-1">
                    {{-- Desktop --}}
                    <div class="hidden relative rounded-3xl h-full overflow-hidden md:flex">
                        <img class="transition-all duration-300 ease-in-out scale-150 w-full group-hover:rotate-12" src="{{ asset('img/socmed-' . $i . '.png') }}" alt="{{ $i }}">
                        <div class="absolute inset-0 w-full h-full flex justify-center items-center bg-goodlife-bronze/70">
                            <div class="transition-all duration-300 ease-in-out flex justify-center items-center w-20 h-20 bg-white rounded-full group-hover:scale-110">
                                <img class="w-10 group-hover:motion-preset-shake" src="{{ asset('img/icon-socmed' . $i . '.png') }}" alt="Social Media Icon">
                            </div>
                        </div>
                    </div>
                    {{-- Mobile --}}
                    <div class="w-full h-full flex justify-center items-center md:hidden">
                        <div class="flex justify-center items-center w-14 h-14 bg-goodlife-sand rounded-full group-hover:scale-110 sm:w-20 sm:h-20">
                            <img class="w-7 group-hover:motion-preset-shake sm:w-10" src="{{ asset('img/icon-socmed' . $i . '.png') }}" alt="Social Media Icon">
                        </div>
                    </div>
                </a>
            @endfor
        </div>
    </div>
</section>
{{-- End Social Media Section --}}

@endsection
