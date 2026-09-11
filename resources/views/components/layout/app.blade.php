@props([
    'title' => 'Dinas Arsip dan Perpustakaan Kota Semarang',
    'description' => 'Website resmi Dinas Arsip dan Perpustakaan Kota Semarang. Menyediakan layanan kearsipan daerah, perpustakaan digital SiBooky, reservasi ruang, dan penelusuran naskah kuno.',
    'image' => asset('asset/LOGO.png')
])
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta Tags -->
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="Dinas Arsip Semarang, Perpustakaan Kota Semarang, SiBooky, Kearsipan, Buku Digital, Semarang Hebat, Arpusda">
    <meta name="author" content="Dinas Arsip dan Perpustakaan Kota Semarang">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- OpenGraph / Social Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ $image }}">
    <meta property="og:site_name" content="Dinas Arsip & Perpustakaan Kota Semarang">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('asset/LOGO.png') }}">

    <!-- Google Fonts Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800;900&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vite CSS & JS Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="site-body">
    <!-- Inline SVG Sprites -->
    <x-layout.svg-icons />

    <!-- Site Header / Navbar -->
    <x-layout.header />

    <!-- Main Content Area -->
    <main id="mainContent" class="main-content">
        {{ $slot }}
    </main>

    <!-- Site Footer -->
    <x-layout.footer />

    @stack('scripts')
</body>
</html>
