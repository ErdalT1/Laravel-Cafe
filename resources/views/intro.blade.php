<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antique Bakery Cafe HTML Template by Tooplate</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&family=Oswald:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('front/css/app.css') }}">
     <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('front/css/all.min.css') }}">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/tailwind.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/tooplate-antique-cafe.css') }}">



</head>
<body>
    <!-- Intro Section -->
    <div id="intro" class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('front/img/antique-cafe-bg-01.jpg') }}">
        <nav id="tm-nav" class="fixed w-full">
            <div class="tm-container mx-auto px-2 md:py-6 text-right">
                <button class="md:hidden py-2 px-2" id="menu-toggle"><i class="fas fa-2x fa-bars tm-text-gold"></i></button>
                <ul class="mb-3 md:mb-0 text-2xl font-normal flex justify-end flex-col md:flex-row">
                    <li class="inline-block mb-4 mx-4"><a href="#intro" class="tm-text-gold py-1 md:py-3 px-4">Intro</a></li>
                    <li class="inline-block mb-4 mx-4"><a href="#menu" class="tm-text-gold py-1 md:py-3 px-4">Menu</a></li>
                    <li class="inline-block mb-4 mx-4"><a href="#about" class="tm-text-gold py-1 md:py-3 px-4">About</a></li>
                    <li class="inline-block mb-4 mx-4"><a href="#contact" class="tm-text-gold py-1 md:py-3 px-4">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="container mx-auto px-2 tm-intro-width">
            <div class="sm:pb-60 sm:pt-48 py-20">
                <div class="bg-black bg-opacity-70 p-12 mb-5 text-center">
                    <h1 class="text-white text-5xl tm-logo-font mb-5">Antique Cafe</h1>
                    <p class="tm-text-gold tm-text-2xl">Your daily energy booster</p>
                </div>
                <div class="bg-black bg-opacity-70 p-10 mb-5">
                    <p class="text-white leading-8 text-sm font-light">
                        This is a coffee shop template named Antique Cafe, which is a parallax HTML5 template with good responsiveness. Feel free to use this layout for your cafe.
                        If you have any question, please <a rel="nofollow" href="https://www.tooplate.com/contact" target="_blank">send us a message</a>.
                    </p>
                </div>
                <div class="text-center">
                    <div class="inline-block">
                        <a href="#menu" class="flex justify-center items-center bg-black bg-opacity-70 py-6 px-8 rounded-lg font-semibold tm-text-2xl tm-text-gold hover:text-gray-200 transition">
                            <i class="fas fa-coffee mr-3"></i>
                            <span>Let's explore...</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- Cafe Menu Section -->
    <div id="menu" class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('front/img/antique-cafe-bg-02.jpg') }}">
        <div class="container mx-auto tm-container py-24 sm:py-48">
            <div class="text-center mb-16">
                <h2 class="bg-white tm-text-brown py-6 px-12 text-4xl font-medium inline-block rounded-md">Menümüz</h2>
            </div>
            <form action="{{ route('save-order') }}" method="POST">
                @csrf
                <!-- İki sütun düzeni için flex container -->
                <div class="flex flex-wrap justify-between">
                    <!-- Sol sütun: Sıcak içecekler -->
                    <div class="menu-column w-full lg:w-1/2 px-4 mb-8">
                        <h3 class="text-3xl text-center mb-6">Sıcak İçecekler</h3>
                        @foreach($menuItems->where('category', 'hot') as $item)
                        <div class="menu-item flex items-center mb-8">
                            <input type="checkbox" name="menu_items[]" value="{{ $item->id }}" class="mr-4">
                            <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="rounded mb-8">
                            <div class="text-left ml-4">
                                <h3 class="tm-text-gold text-2xl mb-4">{{ $item->name }}</h3>
                                <p class="tm-text-green text-xl">{{ $item->price_s ?? $item->price_m }} / {{ $item->price_l }} ₺</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Sağ sütun: Soğuk içecekler -->
                    <div class="menu-column w-full lg:w-1/2 px-4 mb-8">
                        <h3 class="text-3xl text-center mb-6">Soğuk İçecekler</h3>
                        @foreach($menuItems->where('category', 'ice') as $item)
                        <div class="menu-item flex items-center mb-8">
                            <input type="checkbox" name="menu_items[]" value="{{ $item->id }}" class="mr-4">
                            <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="rounded mb-8">
                            <div class="text-left ml-4">
                                <h3 class="tm-text-gold text-2xl mb-4">{{ $item->name }}</h3>
                                <p class="tm-text-green text-xl">{{ $item->price_s ?? $item->price_m }} / {{ $item->price_l }} ₺</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Masa numarası girişi -->
                <div class="mt-4">
                    <label for="table_number" class="block mb-2">Masa Numarası:</label>
                    <input type="text" name="table_number" class="border p-2" required>
                </div>

                <!-- Kaydet butonu -->
                <div class="mt-4">
                    <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded border-2 border-green-700">Kaydet</button>
                </div>
            </form>
        </div>
    </div>

    <!-- About Section -->
    <div id="about" class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('front/img/antique-cafe-bg-03.jpg') }}">
        <div class="container mx-auto tm-container py-24 sm:py-48">
            <div class="tm-item-container sm:ml-auto sm:mr-12 mx-auto sm:px-0 px-4">
                <div class="bg-white bg-opacity-80 p-12 pb-14 rounded-xl mb-5">
                    <h2 class="mb-6 tm-text-green text-4xl font-medium">About our cafe</h2>
                    <p class="mb-6 text-base leading-8">
                        Images are taken from Pexels, a great stock photo website. This template used Tailwind CSS. You may modify Antique Cafe template in any way you prefer and use it for your website.
                    </p>
                    <p class="text-base leading-8">
                        If you wish to <a rel="nofollow" href="https://www.tooplate.com/contact" target="_blank">support us</a>, please make a little donation via PayPal. That would be very helpful. Another way is to tell your friends about Tooplate website. Thank you.
                    </p>
                </div>
                <a href="#contact" class="inline-block tm-bg-green transition text-white text-xl pt-3 pb-4 px-8 rounded-md">
                    <i class="far fa-comments mr-4"></i> Contact
                </a>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="parallax-window relative" data-parallax="scroll" data-image-src="{{ asset('front/img/antique-cafe-bg-04.jpg') }}">
        <div class="container mx-auto tm-container pt-24 pb-48 sm:py-48">
            <div class="flex flex-col lg:flex-row justify-around items-center lg:items-stretch">
                <div class="tm-bg-white-transparent tm-contact-item py-12 px-16 mb-16">
                    <i class="fas fa-2x fa-envelope tm-text-green mb-6"></i>
                    <h2 class="tm-text-green text-4xl font-medium mb-6">Email</h2>
                    <p class="text-xl">
                        <a href="mailto:info@company.com">info@company.com</a>
                    </p>
                </div>
                <div class="tm-bg-white-transparent tm-contact-item py-12 px-16 mb-16">
                    <i class="fas fa-2x fa-phone tm-text-green mb-6"></i>
                    <h2 class="tm-text-green text-4xl font-medium mb-6">Phone</h2>
                    <p class="text-xl">
                        <a href="tel:+1234567890">+123 456 7890</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-6">
        <p class="text-gray-400">Copyright © 2023 Antique Cafe</p>
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('front/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('front/js/parallax.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.singlePageNav.min.js') }}"></script>

</body>
</html>
