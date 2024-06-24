// resources/views/meta.blade.php
<meta name="title" content="{{ $meta['title'] }}">
<meta name="description" content="{{ $meta['description'] }}">
<meta name="keywords" content="{{ $meta['keywords'] }}">

<!-- Open Graph -->
<meta property="og:title" content="{{ $openGraph['title'] }}">
<meta property="og:description" content="{{ $openGraph['description'] }}">
<meta property="og:url" content="{{ $openGraph['url'] }}">
<meta property="og:type" content="{{ $openGraph['type'] }}">
<meta property="og:image" content="{{ $openGraph['image'] }}">

<!-- Twitter Card -->
<meta name="twitter:card" content="{{ $twitterCard['card'] }}">
<meta name="twitter:site" content="{{ $twitterCard['site'] }}">
<meta name="twitter:title" content="{{ $twitterCard['title'] }}">
<meta name="twitter:description" content="{{ $twitterCard['description'] }}">
<meta name="twitter:image" content="{{ $twitterCard['image'] }}">
