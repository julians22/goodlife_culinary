@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<section class="container py-6">
    <div class="px-6 relative mx-auto max-w-max space-y-5">
        <div class="block"><span class="text-6xl font-bold rotate-3 inline-block">Tangerangs's</span></div>
        <div class="block"><span class="text-6xl font-bold -rotate-2 inline-block text-goodlife-green">Best Cafe's</span></div>
        <div class="block"><span class="text-6xl font-bold rotate-1 inline-block">for <span class="text-goodlife-orange">Celebrations!</span></span></div>
    </div>
</section>


{{-- about Section --}}
<section class="container py-6">

    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-x-6 items-center">
        <div>
            <h3 class="font-bold text-2xl text-black mb-4">About Us</h3>

            <p><strong>Good Life Culinary</strong> is Tangerang's #1 cafe and
                restaurant for birthdays and events, featuring a
                beautiful glass rooftop. Since 2019, we've been
                serving a mix of Western and Asian dishes at
                affordable prices. Perfect for celebrations like
                birthdays, sweet seventeens, and sangjit ceremonies.</p>
        </div>

        <div>
            <div class="aspect-video w-full">
                <img src="{{ asset('img/video_thumbnail.png') }}" alt="About Us" class="rounded-xl w-full h-full object-cover object-center">
            </div>
        </div>
    </div>

</section>

<section class="container py-4">
    <div class="grid grid-cols-4 gap-x-11">
        <div class="aspect-3-4 w-full rounded-2xl overflow-hidden relative">
            {{-- <img src="{{ asset('img/food1.jpg') }}" alt="Food 1" class="w-full h-full object-cover object-center"> --}}
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <h3 class="text-white text-2xl font-bold">Western Dishes</h3>
            </div>
        </div>
        <div class="aspect-3-4 w-full rounded-2xl overflow-hidden relative">
            {{-- <img src="{{ asset('img/food1.jpg') }}" alt="Food 1" class="w-full h-full object-cover object-center"> --}}
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <h3 class="text-white text-2xl font-bold">Western Dishes</h3>
            </div>
        </div>
        <div class="aspect-3-4 w-full rounded-2xl overflow-hidden relative">
            {{-- <img src="{{ asset('img/food1.jpg') }}" alt="Food 1" class="w-full h-full object-cover object-center"> --}}
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <h3 class="text-white text-2xl font-bold">Western Dishes</h3>
            </div>
        </div>
        <div class="aspect-3-4 w-full rounded-2xl overflow-hidden relative">
            <div class="w-full h-full bg-gradient-to-r from-goodlife-green to-transparent">

            </div>
            <div class="absolute inset-0 flex items-center justify-center">
                <h3 class="text-white text-2xl font-bold">Western Dishes</h3>
            </div>
        </div>
    </div>
</section>

<div class="bg-goodlife-green">
    <section class="container">
        <div class="min-h-[500px] grid grid-cols-1 md:grid-cols-2 md:gap-x-6 items-center">
            <div class="text-white">
                <h3 class="font-bold text-2xl text-white mb-4 ">Menu Book</h3>

                <p class="mb-4">
                    Explore our menu filled with mouthwatering dishes that blend
                    the best of Western and Asian cuisines. From appetizers to
                    desserts, we have something to satisfy every craving.
                    Whether it's a casual meal or a grand event, our menu is
                    designed to impress.</p>

                <a role="button" class="bg-goodlife-orange rounded-lg text-lg font-normal px-4 py-2">CLICK HERE!</a>
            </div>
        </div>
    </section>
</div>

<section class="containter py-6">

    <h3 class="text-4xl font-bold text-center mb-4">Follow Us on <span class="text-goodlife-orange">Social Media</span></h3>

    <div class="flex justify-center space-x-11">
        <div class="aspect-3-4 rounded-lg overflow-hidden relative">
            <img src="{{ asset('img/social-youtubethumbs.png') }}" alt="Goodlive Culinary Youtube" class="w-full h-full object-cover object-center aboslute inset-0">

            <a class="absolute inset-0 bg-goodlife-green/70" href="#" ></a>

        </div>
        <div class="aspect-3-4 rounded-lg overflow-hidden relative">
            <img src="{{ asset('img/social-instathumbs.png') }}" alt="Goodlive Culinary Instagram" class="w-full h-full object-cover object-center aboslute inset-0">
            <a class="absolute inset-0 bg-goodlife-green/70" href="#" ></a>
        </div>
        <div class="aspect-3-4 rounded-lg overflow-hidden relative">
            <img src="{{ asset('img/social-tiktokthumbs.png') }}" alt="Goodlive Culinary Tiktok" class="w-full h-full object-cover object-center aboslute inset-0">
            <a class="absolute inset-0 bg-goodlife-green/70" href="#" ></a>
        </div>
    </div>

</section>

<section class="grid grid-cols-12 bg-goodlife-orange relative" id="footer-hero">

    <div class="col-span-12 grid grid-cols-1 md:grid-cols-2 md:gap-x-6 items-center container min-h-[500px]">

        <div class="contact-wrapper">
            <h3 class="font-bold text-2xl text-white mb-4">Contact Us for Reservation</h3>

            <p class="text-white text-lg">Planning a special occasion or just looking to reserve a
                table? We've made it easy for you! Contact our team via
                WhatsApp to book your spot. Whether it's a birthday party, a
                romantic dinner, or a corporate gathering, we're here to help
                you make it perfect.</p>
        </div>

    </div>

    <div id="map-wrapper" class="absolute inset-y-0"></div>

</section>

@endsection

@push('scripts')
    <script>

        const embedUrl = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2487036033504!2d106.6284342!3d-6.230908299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fdea1fe5cf75%3A0xda5732e3b5187750!2sGood%20Life%20Culinary%20-%20Kelapa%20Dua%20-%20Gading%20Serpong!5e0!3m2!1sen!2sid!4v1735981818692!5m2!1sen!2sid";
        let footerHero = document.querySelector('#footer-hero');
        let contactWrapper = document.querySelector('#footer-hero .contact-wrapper');

        let wrapper = document.querySelector('#map-wrapper');
        let iframeElement = document.createElement('iframe');

        const attrs = {
            loaded: false,
            src: embedUrl,
            style: 'border:0;',
            allowfullscreen: '',
            loading: 'lazy',
            referrerpolicy: 'no-referrer-when-downgrade',
            width: 0,
            height: 0
        }

        // get the footerWrapper height
        let footerHeroHeight = footerHero.offsetHeight;
        // get contactWrapper end horizontal position
        let contactWrapperEnd = contactWrapper.getBoundingClientRect().right;
        // set wrapper map position by contactWrapperEnd
        // wrapper.style.right = `calc(100vw - ${contactWrapperEnd}px)`;
        wrapper.style.left = `${contactWrapperEnd}px`;

        // get wrapper width & height in px
        let wrapperWidth = wrapper.offsetWidth;
        let wrapperHeight = wrapper.offsetHeight;

        // set iframeElement attributes
        for (let key in attrs) {
            iframeElement.setAttribute(key, attrs[key]);
        }

        // set iframeElement width & height
        iframeElement.width = wrapperWidth;
        iframeElement.height = wrapperHeight;

        // append iframeElement to wrapper
        wrapper.appendChild(iframeElement);

        // set iframeElement loaded to true
        attrs.loaded = true;

    </script>
@endpush
