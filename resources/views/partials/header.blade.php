<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">MegaShop</div>
            <nav>
    <ul>
        @foreach($navigation as $item)
            <li>
                {{-- Génération d'URL : home, cgv, contact ou catégorie si possible --}}
                @php
                    $href = '#';
                    if (!empty($item['url'])) {
                        // page d'accueil
                        if ($item['url'] === 'index.html') {
                            $href = route('home');
                        }
                        // CGV
                        elseif (strpos($item['url'], 'cgv') !== false) {
                            $href = route('cgv');
                        }
                        // Contact
                        elseif (strpos($item['url'], 'contact') !== false) {
                            $href = route('contact');
                        }
                        // catégories (pages/<slug>.html) -> route('category', slug)
                        elseif (preg_match('#pages/([a-z0-9-]+)\.html#i', $item['url'], $m)) {
                            $slug = $m[1];
                            $href = route('category', ['slug' => $slug]);
                        }
                        else {
                            // fallback vers l'URL fournie
                            $href = url($item['url']);
                        }
                    }
                @endphp

                <a href="{{ $href }}">{{ $item['label'] }}</a>
            </li>
        @endforeach
    </ul>
</nav>
        </div>
    </header>
</body>
</html>