<nav class="w-full py-2 fixed top-2 left-0 z-50 ">
    <div class="flex items-center justify-between max-w-7xl m-auto w-full px-2 bg-dark text-white bg-opacity-80 backdrop-blur-lg rounded-full border border-white/10">
        <a href="{{ route('home') }}" class="text-3xl font-semibold py-1 ml-2 flex items-center">
            <img src="{{ asset('assets/expression_logo_2.png') }}" width="50px" alt="Vital Neon">
            <h6 class="ml-3 outfit">Expression</h6>
        </a>
        <ul class="flex items-center uppercase 1090px:hidden">
            <a class="mx-4" href="{{ route('home') }}">Home</a>
            <a class="mx-4" href="{{ route('create-design') }}">Design Your Own</a>
            <a class="mx-4" href="{{ route('upload-design') }}">Upload Design</a>
            <a class="mx-4" href="{{ route('products') }}">Products</a>
            
            @auth
                <a class="mx-4" href="{{ route('design.quote') }}">Quote</a>
            @endauth

            <div class="mx-4 relative group">
                <span class="category flex items-center">Categories <img src="https://api.iconify.design/ic:outline-arrow-drop-down.svg?color=%23ffffff" width="28" alt="Carret Down Logo"></span>
                <div class="hidden group-hover:block absolute top-7 right-0 max-w-[300px] w-full p-2 rounded-lg bg-dark bg-opacity-80 backdrop-blur-lg border border-white/10 text-gray-700">
                    <ul class="flex flex-col w-full text-white text-center">
                        @if (count($categories))
                            @foreach ($categories as $item)
                                @if ($loop->last)
                                    <a class="text-[12px] hover:font-semibold container py-1" href="{{ route('category.search', $item->slug) }}">{{ $item->name }}</a>
                                @else
                                    <a class="text-[12px] hover:font-semibold container border-b py-1 border-white/10" href="{{ route('category.search', $item->slug) }}">{{ $item->name }}</a>
                                @endif
                            @endforeach
                        @else
                        <a class="text-[12px] hover:font-semibold container py-1" href="#">None</a>
                        @endif
                    </ul>
                </div>
            </div>
            <a class="px-5 border-r border-gray-600" href="{{ route('support') }}">Support</a>
            <a href="https://wa.me/16476165799" class="ml-5"><img src="https://api.iconify.design/logos:whatsapp-icon.svg?color=%23ffd402" width="36" alt="Whatsapp Icon"></a>
        </ul>
        <div class="hidden 1090px:block" x-data="{open: false}">
            <ul x-on:click="open = true">
                <li class="bg-white my-2 h-[2px] w-[80px]"></li>
                <li class="bg-white my-2 h-[2px] w-[80px]"></li>
                <li class="bg-white my-2 h-[2px] w-[80px]"></li>
            </ul>
            <div class="fixed top-0 left-0 w-full h-screen bg-dark backdrop-blur-lg flex justify-center items-center z-50" x-show="open" x-on:click.self="open = !open">
                <ul class="text-center flex flex-col">
                    <a class="text-2xl mb-3" href="{{ route('home') }}">Home</a>
                    <a class="text-2xl mb-3" href="{{ route('create-design') }}">Design Your Own</a>
                    <a class="text-2xl mb-3" href="{{ route('upload-design') }}">Upload Design</a>
                    <a class="text-2xl mb-3" href="{{ route('products') }}">Products</a>
                    <a class="text-2xl mb-3" href="{{ route('support') }}">Support</a>
                    @auth   
                        <a class="text-2xl mb-3" href="{{ route('design.quote') }}">Quote</a>
                    @endauth
                    <div class="mx-4 relative" x-data="{toggle: false}">
                        <span class="flex items-center category text-3xl p-3 bg-light rounded-lg" x-on:click="toggle = !toggle">Categories <img src="https://api.iconify.design/ic:outline-arrow-drop-down.svg?color=%23ffffff" width="28" alt="Carret Down Logo"></span>
                        <div class="flex flex-col" x-show="toggle">
                            @foreach ($categories as $item)
                                <a class="text-2xl" href="{{ route('category.search', $item->slug) }}">{{ $item->name }}</a>
                            @endforeach
                        </div>
                    </div>
                    <a href="https://wa.me/16476165799" class="text-2xl mb-3 m-auto"><img src="https://api.iconify.design/logos:whatsapp-icon.svg?color=%23ffd402" width="36" alt="Whatsapp Icon"></a>
                </ul>
            </div>
        </div>
    </div>
</nav>