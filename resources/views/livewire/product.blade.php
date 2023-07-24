<section class="w-full px-4">
    <div class="max-w-3xl m-auto py-[120px]">
        <div class="text-center mb-6 border-b border-light py-3">
            <h4 class="text-4xl uppercase mb-3 text-white flex text-5xl 490px:text-2xl justify-center items-center m-auto bebas">{{ $product[0]->name }}</h4>
        </div>
        <div wire:loading wire:target="checkout" class="fixed left-[45%] bottom-3">
            <div class="flex items-center bg-black text-white p-6 rounded-lg"><img src="https://api.iconify.design/svg-spinners:ring-resize.svg?color=%23ffffff" alt="Loading Icon"> <span class="ml-2">Processing...</span></div>
        </div>
        <span class="fixed bg-indigo-600 rounded-lg p-3 bottom-3 z-10 right-3 text-white text-4xl font-semibold"><span class="text-2xl">$</span>{{ $total_price }}</span>
        @foreach ($product as $item)
            <div class="h-full rounded-lg mb-6 overflow-hidden">
                <div class="h-fit w-full mb-6">
                    <img data-src="{{ asset('storage/'.$item->image) }}" class="w-full rounded-lg lazyload" loading="lazy" alt="Buy {{ $item->name }}">
                </div>
                <div class="bg-light p-6 w-full rounded-lg">
                    <h3 class="text-white font-semibold">Dimensions</h3>
                    <select name="category" id="category" wire:model="category" class="w-full mt-2 bg-dark rounded border border-gray-800 focus:border-main focus:ring-4 focus:ring-main-light text-base outline-none text-gray-200 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out mb-6">
                        @foreach ($categories as $category)
                            <option value="{{ $category->name }}">Up to {{ $category->name }} - ${{ $category->price }}</option>
                        @endforeach
                        <option value="custom">CUSTOMIZED</option>
                    </select>
                    @error('category')
                        <p class="text-red-600 mb-2">{{ $message }}</p>
                    @enderror
                    <h3 class="text-white font-semibold">Location *{{ $location }}</h3>
                    <div class="py-3 grid grid-cols-2 gap-4 text-white">
                        @foreach ($locations as $loc)
                            <div wire:click="$set('location', '{{ $loc }}')" class="flex bg-dark mb-4 items-center justify-center p-3 cursor-pointer rounded-md flex-col border @if ($location == $loc) border-indigo-600 @else border-gray-800 @endif">
                                <p class="font-semibold text-center">{{ $loc }}</p>
                            </div>
                        @endforeach
                    </div>
                    @error('location')
                        <p class="text-red-600 mb-2">{{ $message }}</p>
                    @enderror
                    <h3 class="text-white font-semibold">Power Adaptor *{{ $adaptor }}</h3>
                    <div class="mt-1">
                        <select wire:model="adaptor" class="w-full mt-2 bg-dark rounded border border-gray-800 focus:border-indigo-600 focus:ring-4 focus:ring-main-light text-base outline-none text-gray-200 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out mb-3">
                            @foreach ($adaptors as $itemAdapt)
                                @if ($loop->first)
                                    <option value="{{ $itemAdapt }}" selected>{{ $itemAdapt }}</option>
                                @else
                                    <option value="{{ $itemAdapt }}">{{ $itemAdapt }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    @error('adaptor')
                        <p class="text-red-600 mb-2">{{ $message }}</p>
                    @enderror
                    <h3 class="text-white font-semibold">Backboard Style *{{ $shape }}</h3>
                    <div class="py-3">
                        @foreach ($shapes as $item)
                            <div wire:click="$set('shape', '{{ $item->shape }}')" class="flex bg-dark mb-4 p-3 cursor-pointer rounded-md flex-col border @if ($shape ==  $item->shape) border-indigo-600 @else border-gray-800 @endif">
                                <p class="font-semibold mb-2 text-gray-300">{{ $item->shape }} (${{ $item->price }})</p>
                                <span class="text-gray-500 text-sm">{{ $item->description }}</span>
                            </div>
                        @endforeach
                    </div>
                    @error('adaptor')
                        <p class="text-red-600 mb-2">{{ $message }}</p>
                    @enderror
                    <h3 class="text-white font-semibold">Remote and Dimmer *{{ $remote }}</h2>
                    <p class="text-gray-300 text-sm">A remote and dimmer is included free with every sign! (Except for Multicolor Neon Signs, which are controlled by the APP)</p>
                    <div class="py-3 w-full">
                        <select name="remote" id="remote" wire:model="remote" class="bg-dark text-white flex items-center w-full justify-center p-3 cursor-pointer rounded-md flex-col border">
                            @foreach ($remotes as $item)
                                <option value="{{ $item->type }}">{{ $item->type }} - ${{ $item->price }}</option>  
                            @endforeach 
                        </select>
                    </div>
                    @error('remote')
                        <p class="text-red-600 mb-2">{{ $message }}</p>
                    @enderror
                    <div class="py-2 text-white">
                        <h2 class="font-bold text-lg">Installation Kit *{{ $kit }}</h2>
                        <div class="py-3 w-full">
                            <select name="kit" id="kit" wire:model="kit" class="bg-dark flex items-center w-full justify-center p-3 cursor-pointer rounded-md flex-col border">
                                @foreach ($kits as $item)
                                    <option value="{{ $item->name }}">{{ $item->name }} - ${{ $item->price }}</option>  
                                 @endforeach 
                            </select>
                        </div>
                    </div>
                    @error('kit')
                        <p class="text-red-600 mb-2">{{ $message }}</p>
                    @enderror
                    <input type="number" wire:model.debounce.500ms="phone" placeholder="Phone (for shipping purpose)" class="w-full border-none bg-dark mt-2 rounded focus:border-main focus:ring-4 focus:ring-main text-base outline-none text-gray-300 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out mb-3">
                    @error('phone')
                        <p class="text-red-600 mb-2">{{ $message }}</p>
                    @enderror
                    <input type="text" wire:model.debounce.500ms="email" placeholder="Email Address" class="w-full border-none bg-dark mt-2 rounded focus:border-main focus:ring-4 focus:ring-main text-base outline-none text-gray-300 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out mb-3">
                    @error('email')
                        <p class="text-red-600 mb-2">{{ $message }}</p>
                    @enderror
                    <button class="py-3 px-4 w-full text-center justify-center bg-indigo-600 text-white rounded-lg font-semibold flex items-center" wire:click="checkout" type="submit"><span class="mr-2 text-xl">Checkout</span> <img src="{{ asset('assets/images/stripe_small.png') }}" width="50" alt="Stripe Logo"></button>
                </div>
            </div>
        @endforeach
        <div class="p-6 rounded-lg text-white mb-6 text-[13px] leading-6 bg-indigo-600">
            <img src="https://api.iconify.design/cib:stripe.svg?color=%23ffffff" width="120" class="mb-3" alt="Stripe Logo">
            <p class="text-lg">We are delighted to present Stripe as our chosen payment system, offering you a secure and dependable method to facilitate transactions. With Stripe, rest assured that your credit card information remains safeguarded, as we refrain from storing it on our servers. We solely collect your email address for communication purposes and pledge <strong>never to disclose your personal</strong> data to any third parties. Stripe's user-friendly interface ensures a seamless payment process, providing you with peace of mind and a pleasant transaction experience. Thank you for selecting us as your shopping destination!</p>
        </div>
        <main class="main-body">
            {!! $product[0]->body !!}
        </main>
    </div>
    <x-f-a-q />
</section>