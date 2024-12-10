<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VisionPlus - Accueil</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
            *,::after,::before { box-sizing:border-box; }
            body { margin:0; line-height:inherit; font-family:Figtree, ui-sans-serif, system-ui, sans-serif; }
            .text-center { text-align: center; }
            .text-xl { font-size: 1.25rem; line-height: 1.75rem; }
            .font-semibold { font-weight: 600; }
            .py-10 { padding-top: 2.5rem; padding-bottom: 2.5rem; }
        </style>
    @endif
    <title>Centrer une Liste</title>
    <style>
        .liste-centree {
            text-align: center;
        }
        .liste-centree ul {
            display: inline-block;
            padding: 0;
            margin: 0;
        }
        .liste-centree li {
            list-style: none;
            display: inline;
            margin: 0 10px;
        }
    </style>
</head>
<body>
        <div class="liste-centree">
                <ul style="list-style-type: none; padding: 0; display: flex;">
                    <li style="margin-right: 30px;"><a href="{{ route('products') }}">Produits</a></li>
                    <li style="margin-right: 30px;"><a href="{{ route('services') }}">Services</a></li>
                    <li style="margin-right: 30px;"><a href="{{ route('contact') }}">Contact</a></li>
                    <li style="margin-right: 30px;"><a href="{{ route('product.details') }}">Détails produit</a></li>
                </ul>
        </div>
        <div class="py-10">
        <div class="text-center">
            
            <h1 clasds="text-xl font-semibold">Bienvenue chez VisionPlus</h1>
            <p>Découvrez nos lunettes et services sur mesure.</p>
        </div>
    </div>
    
</body>
</html>