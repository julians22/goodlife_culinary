@extends('layouts.app')

@section('content')

{{-- Banner Section --}}
<section class="max-w-[1920px] mx-auto">
    <div class="slide-show relative overflow-x-hidden h-full">
        <div class="swiper-wrapper">
            @foreach($banner->banners as $b)
                @switch($b['type'])
                    @case('Image')
                        <div class="swiper-slide">
                            <img class="w-full aspect-[2.5/1] object-cover object-center" src="{{ $b['data']['image'] }}" alt="{{ $b['data']['alt_image'] }}">
                        </div>
                        @break
                    @case('Video')
                        <div class="swiper-slide">
                            <video class="w-full aspect-[2.5/1] object-cover object-center" poster="{{ $b['data']['poster'] }}" loop muted playsinline>
                                <source src="{{ $b['data']['video'] }}" type="video/mp4">
                            </video>
                        </div>
                        @break
                @endswitch
            @endforeach
        </div>
        <div class="swiper-button-prev absolute top-1/2 -translate-y-1/2 left-6 bg-goodlife-bronze w-8 cursor-pointer aspect-square rounded-full p-1.5 z-10">
            <img class="w-8 aspect-square" src="{{ asset('img/icon/chevron-left.svg') }}" alt="Previous">
        </div>
        <div class="swiper-button-next absolute top-1/2 -translate-y-1/2 right-6 bg-goodlife-bronze w-8 cursor-pointer aspect-square rounded-full p-1.5 z-10">
            <img class="w-8 aspect-square" src="{{ asset('img/icon/chevron-right.svg') }}" alt="Next">
        </div>
    </div>
</section>
{{-- End Banner Section --}}

{{-- About Section --}}
<section id="about-us" class="scroll-mt-20">
    <div class="py-10 lg:pt-24">
        <div class="flex flex-col gap-14 lg:gap-20">
            <div class="container flex flex-col items-center gap-6 lg:gap-12 lg:flex-row">
                <div class="flex-1 space-y-4">
                    <h3 class="text-3xl font-bold motion-duration-1000 intersect-once intersect:motion-preset-slide-right intersect:motion-preset-blur-right">{{ $about->about_title }}</h3>
                    <p class="leading-loose motion-duration-1000 motion-delay-200 intersect-once intersect:motion-preset-slide-right intersect:motion-preset-blur-right">{!! $about->about_description !!}</p>
                </div>
                <a href="{{ $about->about_video }}" target="_blank" class="group relative flex-1 aspect-video rounded-3xl outline-none overflow-hidden scale-0 opacity-0 intersect-once intersect:scale-100 intersect:opacity-100 transition duration-300 ease-in-out delay-300">
                    <div class="absolute flex justify-center items-center inset-0 w-full h-full bg-goodlife-bronze/70">
                        <img class="transition-all duration-300 ease-in-out absolute w-14 top-1/2 left-[52%] -translate-y-1/2 -translate-x-1/2 group-hover:scale-110 sm:w-20 md:w-24" src="{{ asset('img/play-button.png') }}" alt="Play">
                        <img class="w-28 aspect-square sm:w-32 md:w-48" src="{{ asset('img/logo.png') }}" alt="Good Life Culinary">
                    </div>
                    <img src="{{ $about->about_video_thumbnail }}" alt="{{ $about->about_alt_video_thumbnail }}">
                </a>
            </div>
            <div class="flex flex-col gap-12 md:container">
                <div class="hidden justify-center gap-6 md:flex lg:gap-10">
                    {{-- Desktop --}}
                    @foreach($about->about_provide as $provide)
                        <div class="group relative aspect-3-4 flex-1 max-w-xs rounded-3xl outline-none overflow-hidden transition duration-300 ease-in-out scale-0 opacity-0 intersect-once intersect:scale-100 intersect:opacity-100">
                            <div class="absolute transition-all duration-300 ease-in-out flex justify-center items-end left-0 bottom-0 w-full h-1/2 bg-gradient-to-t from-goodlife-bronze to-transparent group-hover:h-3/4">
                                <p class="text-2xl text-white font-bold cursor-default pb-10 md:text-3xl lg:text-4xl">{{ $provide['title'] }}</p>
                            </div>
                            <img class="w-full h-full object-cover object-center" src="{{ $provide['image'] }}" alt="{{ $provide['alt_image'] }}">
                        </div>
                    @endforeach
                </div>
                {{-- Mobile --}}
                <div class="provide-slider max-w-full overflow-x-hidden block transition duration-500 ease-in-out opacity-0 intersect-once intersect:opacity-100 md:!hidden">
                    <div class="swiper-wrapper">
                        @for($i = 1; $i <= 2; $i++)
                            @foreach($about->about_provide as $provide)
                                <div class="swiper-slide">
                                    <div class="group relative aspect-3-4 flex-1 max-w-xs rounded-3xl outline-none overflow-hidden">
                                        <div class="absolute transition-all duration-300 ease-in-out flex justify-center items-end left-0 bottom-0 w-full h-1/2 bg-gradient-to-t from-goodlife-bronze to-transparent group-hover:h-3/4">
                                            <p class="text-2xl text-white font-bold pb-10 md:text-3xl lg:text-4xl">{{ $provide['title'] }}</p>
                                        </div>
                                        <img class="w-full h-full object-cover object-center" src="{{ $provide['image'] }}" alt="{{ $provide['alt_image'] }}">
                                    </div>
                                </div>
                            @endforeach
                        @endfor
                    </div>
                </div>
                <p class="leading-relaxed text-center px-6 motion-duration-1000 intersect-once intersect:motion-preset-slide-down intersect:motion-preset-blur-down sm:px-10">{!! $about->about_provide_description !!}</p>
            </div>
        </div>
    </div>
    {{-- Gallery Section --}}
    {{-- Desktop --}}
    <div class="max-w-[1920px] mx-auto hidden grid-cols-3 gap-5 p-5 md:grid">
        @foreach($gallery->galleries as $g)
            <a href="{{ $g['link'] ?? 'https://www.instagram.com/goodlifeculinary.official' }}" target="_blank" class="transition duration-300 ease-in-out scale-0 opacity-0 intersect-once intersect:scale-100 intersect:opacity-100">
                <img class="aspect-video w-full object-cover object-center" src="{{ $g['image'] }}" alt="{{ $g['alt_image'] }}">
            </a>
        @endforeach
    </div>
    {{-- Mobile --}}
    <div class="max-w-full galleries-slider overflow-x-hidden block mb-12 transition duration-500 ease-in-out opacity-0 intersect-once intersect:opacity-100 md:hidden">
        <div class="swiper-wrapper">
            @foreach($gallery->galleries as $g)
                <div class="swiper-slide">
                    <a href="{{ $g['link'] }}" target="_blank">
                        <img class="w-full aspect-video object-cover object-center" src="{{ $g['image'] }}" alt="{{ $g['alt_image'] }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    {{-- End Gallery --}}
</section>
{{-- End About Section --}}

{{-- Menu Section --}}
<section id="menu-book" class="scroll-mt-20">
    <div class="relative bg-goodlife-bronze flex items-center py-14 overflow-hidden md:py-28">
        <div class="container">
            <div class="relative max-w-xl flex flex-col gap-4 z-40">
                <h3 class="text-3xl font-bold text-white motion-duration-1000 intersect-once intersect:motion-preset-slide-right intersect:motion-preset-blur-right">{{ $menu->menu_title }}</h3>
                <p class="leading-relaxed text-white motion-duration-1000 motion-delay-200 intersect-once intersect:motion-preset-slide-right intersect:motion-preset-blur-right">{!! $menu->menu_description !!}</p>
                <a href="{{ $menu->menu_link_button }}" target="_blank" class="group relative transition-all duration-300 ease-in-out max-w-max font-semibold bg-white text-goodlife-orange rounded-xl px-6 py-2 hover:rotate-[2deg] hover:scale-110 hover:bg-goodlife-orange hover:text-white motion-duration-1000 motion-delay-300 intersect-once intersect:motion-preset-expand intersect:motion-preset-blur-right">
                    {{ $menu->menu_name_button }}
                </a>
            </div>
        </div>
        <div class="absolute inset-0 w-full h-full bg-black/60 z-30 xl:hidden"></div>
        <img class="max-w-screen-xl absolute top-1/2 -translate-y-1/2 -right-[390px] xl:-right-[500px] z-20 motion-duration-2000 intersect-once intersect:motion-preset-slide-down-left 2xl:-right-[390px]" src="{{ asset('img/menu-image.png') }}" alt="Menu Image">
    </div>
</section>
{{-- End Menu Section --}}

{{-- Social Media Section --}}
<section id="social-media" class="scroll-mt-20 px-6 py-10 md:py-20 md:px-12">
    <div class="space-y-6">
        <div class="max-w-screen-md mx-auto flex flex-col gap-6 text-center">
            <h3 class="text-3xl font-bold motion-duration-1000 intersect-once intersect:motion-preset-slide-down intersect:motion-preset-blur-down">
                {{ $socmed->socmed_title_1 }} <span class="text-goodlife-orange">{{ $socmed->socmed_title_2 }}</span>
            </h3>
            <p class="leading-relaxed motion-duration-1000 motion-delay-200 intersect-once intersect:motion-preset-slide-down intersect:motion-preset-blur-down">{!! $socmed->socmed_description !!}</p>
        </div>
        <div class="flex justify-center gap-4 md:gap-8">
            @foreach($socmed->socmed_links as $s)
                <a href="{{ $s['link'] }}" target="_blank" class="group max-w-64 max-h-max transition duration-300 ease-in-out scale-0 opacity-0 intersect-once intersect:scale-100 intersect:opacity-100 md:flex-1">
                    {{-- Desktop --}}
                    <div class="hidden relative rounded-3xl h-full overflow-hidden md:flex">
                        <img class="transition-all duration-300 ease-in-out scale-150 w-full group-hover:rotate-12" src="{{ $s['background'] }}" alt="{{ $s['alt_background'] }}">
                        <div class="absolute inset-0 w-full h-full flex justify-center items-center bg-goodlife-bronze/70">
                            <div class="transition-all duration-300 ease-in-out flex justify-center items-center w-20 h-20 bg-white rounded-full group-hover:scale-110">
                                <img class="w-10 group-hover:motion-preset-shake" src="{{ $s['icon'] }}" alt="{{ $s['alt_icon'] }}">
                            </div>
                        </div>
                    </div>
                    {{-- Mobile --}}
                    <div class="w-full h-full flex justify-center items-center md:hidden">
                        <div class="flex justify-center items-center w-14 h-14 bg-goodlife-sand rounded-full group-hover:scale-110 sm:w-20 sm:h-20">
                            <img class="w-7 group-hover:motion-preset-shake sm:w-10" src="{{ $s['icon'] }}" alt="{{ $s['alt_icon'] }}">
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
{{-- End Social Media Section --}}

@endsection
