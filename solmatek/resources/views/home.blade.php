<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solmatek Makina</title>
    @if (file_exists(public_path('build/manifest.json')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="font-sans antialiased">
<header class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">Solmatek Makina</h1>
        <nav>
            <ul class="flex space-x-4">
                @foreach($categories as $c)
                    <li><a href="#" class="hover:underline">{{ $c->name }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
<main class="container mx-auto p-4">
    <h2 class="text-lg font-semibold mb-4">Ürünler</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @foreach($products as $product)
            <div class="border rounded p-2 text-center">
                @if($product->image)
                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->title }}" class="h-32 mx-auto mb-2">
                @endif
                <h3 class="font-medium">{{ $product->title }}</h3>
                <p class="text-sm text-gray-600">{{ $product->price }} TL</p>
            </div>
        @endforeach
    </div>
</main>
<a href="https://wa.me/905551112233" class="fixed bottom-4 right-4 bg-green-500 text-white p-3 rounded-full shadow-lg" target="_blank" rel="noopener" aria-label="WhatsApp">
    WhatsApp
</a>
</body>
</html>
