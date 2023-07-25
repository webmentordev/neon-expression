@extends('layouts.apps')
@section('content')
    <section id="max-h-[675px] overflow-hidden relative h-fit" class="w-full" aria-label="Beautiful Images">
        <div class="border-l-[5px] border-yellow-500 py-5 px-5 absolute top-[44%] left-[5%] 1530px:top-[35%] 1330px:hidden">
            <h4 class="bebas text-white text-5xl mb-2">VISIT our Socials</h4>
            <div class="flex items-center">
                <ul class="flex">
                    <a class="mr-2" href="#" target="_blank" rel="nofollow"><img src="https://api.iconify.design/logos:facebook.svg?color=%23d83013" width="25" alt="Facebook"></a>
                    <a class="mr-2" href="#" target="_blank" rel="nofollow"><img src="https://api.iconify.design/skill-icons:instagram.svg?color=%23f72696" width="25" alt="Instagram"></a>
                    <a class="mr-2" href="#" target="_blank" rel="nofollow"><img src="https://api.iconify.design/logos:pinterest.svg?color=%23f72696" width="25" alt="Pinterest"></a>
                </ul>
                <p class="text-white code">/neonexpression</p>
            </div>
        </div>
        <img src="{{ asset('assets/banner_expression.png') }}" class="w-full" alt="Slider 01">
    </section>


    {{-- <section id="image-carousel max-h-[675px] overflow-hidden" class="splide w-full" aria-label="Beautiful Images">
        <div class="splide__track w-full">
            <ul class="splide__list w-full">
                <li class="splide__slide w-full">
                    <a href="{{ route('create-design') }}"><img src="{{ asset('assets/slides/BANNER.gif') }}" class="w-full" alt="Slider 01"></a>
                </li>
            </ul>
        </div>
    </section> --}}

    <section class="w-full px-4 pt-[50px] hidden 1330px:block">
        <h3 class="bebas text-4xl text-white mb-3 text-center">VISIT Our SOCIALS</h3>
        <div class="max-w-4xl m-auto grid grid-cols-3 gap-6 850px:grid-cols-2 850px:max-w-xl 575px:grid-cols-1 575px:max-w-[300px]">
            <a href="#" class="flex justify-center items-center bg-light border border-white/10 rounded-lg p-6">
                <div class="flex items-center">
                    <img src="https://api.iconify.design/logos:facebook.svg?color=%23d83013" width="40" alt="Package Icon">
                    <span class="text-gray-300 font-semibold ml-3">FACEBOOK</span>
                </div>
            </a>
            <a href="#" class="flex justify-center items-center bg-light border border-white/10 rounded-lg p-6">
                <div class="flex items-center">
                    <img src="https://api.iconify.design/skill-icons:instagram.svg?color=%23f72696" width="40" alt="Package Icon">
                    <span class="text-gray-300 font-semibold ml-3">INSTAGRAM</span>
                </div>
            </a>
            <a href="#" class="flex justify-center items-center bg-light border border-white/10 rounded-lg p-6">
                <div class="flex items-center">
                    <img src="https://api.iconify.design/logos:pinterest.svg?color=%23f72696" width="40" alt="Package Icon">
                    <span class="text-gray-300 font-semibold ml-3">PINTEREST</span>
                </div>
            </a>
        </div>
    </section>
    
    <section class="w-full px-4 py-[60px] mt-12">
        <div class="max-w-4xl m-auto rounded-full py-6 flex justify-between bg-light border border-white/10">
            <div class="flex justify-center items-center p-6">
                <div class="flex items-center">
                    <img src="https://api.iconify.design/noto:heart-on-fire.svg?color=%234F46E5" width="40" alt="Package Icon">
                    <span class="text-gray-300 font-semibold ml-3">PREMIUM QUALITY</span>
                </div>
            </div>
            <div class="flex justify-center items-center p-6 px-12 border-x border-white/10">
                <div class="flex items-center">
                    <img src="https://api.iconify.design/fluent-emoji-flat:globe-showing-americas.svg?color=%234F46E5" width="40" alt="Package Icon">
                    <span class="text-gray-300 font-semibold ml-3">GLOBAL SHIPPING</span>
                </div>
            </div>
            <div class="flex justify-center items-center p-6">
                <div class="flex items-center">
                    <img src="https://api.iconify.design/openmoji:contacts.svg?color=%234F46E5" width="40" alt="Package Icon">
                    <span class="text-gray-300 font-semibold ml-3">24/7 SUPPORT</span>
                </div>
            </div>
        </div>
    </section>

    <x-listing />
    
    <section class="bg-light">
        <div class="max-w-7xl m-auto py-[120px] px-4">
            <div class="text-center mb-6 border-b border-light py-3">
                <h4 class="text-6xl uppercase mb-3 text-white flex text-5xl justify-center items-center m-auto bebas">WHY CHOOSE US</h4>
            </div>
            <div class="grid grid-cols-4 gap-6 mb-6 600px:grid-cols-1 600px:max-w-lg m-auto">
                <div class="p-3 py-12 text-center rounded-lg bg-dark hover:bg-white group transition-all">
                    <img data-src="https://api.iconify.design/emojione:airplane.svg?color=%234bcc14" class="m-auto mb-3 lazyload" loading="lazy" width="60" alt="Delivery Icon">
                    <h2 class="mb-3 font-semibold text-white group-hover:text-gray-700">Fast & Free Delivery</h2>
                    <p class="text-sm leading-6 text-gray-200 group-hover:text-gray-500">We offer worldwide free shipping for all orders. Shipments are handled by DHL, FedEx or UPS.</p>
                </div>
                <div class="p-3 py-12 text-center rounded-lg bg-dark hover:bg-white group transition-all">
                    <img data-src="https://api.iconify.design/fxemoji:fourleafclover.svg?color=%234bcc14" class="m-auto mb-3 lazyload" loading="lazy" width="60" alt="Delivery Icon">
                    <h2 class="mb-3 font-semibold text-white group-hover:text-gray-700">High Efficiency</h2>
                    <p class="text-sm leading-6 text-gray-200 group-hover:text-gray-500">Our LED neon signs can sustain 100,000+ hours of usage while consuming 80% less power than traditional pieces.</p>
                </div>
                <div class="p-3 py-12 text-center rounded-lg bg-dark hover:bg-white group transition-all">
                    <img data-src="https://api.iconify.design/noto-v1:shield.svg?color=%234bcc14" class="m-auto mb-3 lazyload" loading="lazy" width="60" alt="Delivery Icon">
                    <h2 class="mb-3 font-semibold text-white group-hover:text-gray-700">2-Year Guarantee</h2>
                    <p class="text-sm leading-6 text-gray-200 group-hover:text-gray-500">Every product comes with a 2-year warranty on electrical components when used properly.</p>
                </div>
                <div class="p-3 py-12 text-center rounded-lg bg-dark hover:bg-white group transition-all">
                    <img data-src="https://api.iconify.design/flat-color-icons:shipped.svg?color=%234bcc14" class="m-auto mb-3 lazyload" loading="lazy" width="60" alt="Delivery Icon">
                    <h2 class="mb-3 font-semibold text-white group-hover:text-gray-700">Easy Installation</h2>
                    <p class="text-sm leading-6 text-gray-200 group-hover:text-gray-500">Every neon sign comes with screws and hanging kit for free.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full">
        <div class="max-w-6xl m-auto py-[120px] relative z-10 overflow-x-hidden px-4">
            <h4 class="text-5xl text-center uppercase text-main mb-12 bebas 475px:text-2xl">Light of Neon - Power of Will</h4>
            <div class="absolute w-full top-1/2 left-1/3 max-w-lg 1045px:left-1/4">
                <div class="absolute top-0 -left-4 w-72 h-72 bg-green-400 rounded-full mix-blend-multiply filter blur-3xl opacity-80"></div>
                <div class="absolute top-0 -right-4 w-72 h-72 bg-indigo-400 rounded-full mix-blend-multiply filter blur-3xl opacity-80"></div>
            </div>
            <div class="grid grid-cols-2 1045px:grid-cols-1 1045px:max-w-xl m-auto gap-6 bg-light bg-opacity-80 backdrop-blur-lg p-12 600px:p-3 rounded-lg shadow-md text-white" x-data="{ placeholder: 'Type here...', text: 'Your Text' }">
                <div class="w-full bg-cover 1045px:h-[300px] rounded-lg overflow-hidden bg-center flex items-center justify-center lazyload" loading="lazy" style="background-image: url({{ asset('assets/images/background-card.png') }})">
                    <span class="neonText text-7xl font-semibold text-white 475px:text-4xl" x-text="text"></span>
                </div>
                <div class="p-6 flex flex-col my-6 600px:p-2">
                    <h3 class="text-7xl uppercase mb-3 leading-[80px] text-parrot rubik 600px:text-3xl bebas">CREATE YOUR OWN <br> NEON SIGN</h3>
                    <i><p class="mb-3 leading-7">Design your unique neon sign with our online custom tool in less than 5 minutes and enjoy 20% OFF + Free Shipping worldwide! 
                        <p class="mb-3 leading-7">Our online tool simplifies the process of designing a custom neon sign and provides a visual preview so you can see how it will appear before placing an order.</p>
                        <p class="mb-3 leading-7">Whether you're looking for a text neon sign for your home, business, party, wedding, or event, our custom sign will make your special occasion stand out.<br>Now it's time to bring your ideas to life!</p></i>
                    <input type="text" class="bg-light py-3 rounded-lg text-gray-200" x-model="text" :placeholder="placeholder">
                    <p class="mt-2 text-red-600">"It is just a quick custom neon preview"</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="max-w-3xl m-auto py-[120px]">
            <div class="text-center mb-6 border-b border-light py-3">
                <h4 class="text-[34.5px] uppercase mb-3 text-white font-bold text-5xl m-auto">About Us<span class="text-5xl ml-2">❗</span></h4>
            </div>
            <p class="leading-9 text-white text-center p1 px-4"><i><span class="text-3xl">"</span>NeonExpression stands as a distinguished online store, specializing in the sale of top-notch neon signs. Our inventory boasts an extensive range of products, complete with customizable text lines and size options to cater to your unique requirements. We take pride in offering a diverse selection of backboard styles that flawlessly complement your neon sign, ensuring it stands out in any environment. To guarantee smooth and efficient operation, we provide a reliable power adapter for your neon sign. Moreover, with our remote and dimmer, you have full control over the brightness, allowing you to create the perfect ambiance. At NeonExpression, our unwavering commitment revolves around delivering neon signs of unparalleled quality that are both functional and aesthetically captivating<span class="text-3xl inline-block">"</span></i></p>
        </div>
    </section>

    <x-f-a-q />

    <script>
        var splide = new Splide('.splide', {
            type   : 'loop',
            autoplay: true,
            interval: 5000,
            pauseOnHover: true
        });
        splide.mount();
    </script>
@endsection