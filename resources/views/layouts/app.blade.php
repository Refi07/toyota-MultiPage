<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Landing Page Sales')</title>
    <meta name="description" content="@yield('description', 'Landing page penjualan mobil')">

    {{-- Tailwind CDN (ganti ke Vite build untuk production) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Barlow+Condensed:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Alpine.js for lightweight interactivity (mobile menu, FAQ accordion, carousel) --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        :root {
            --brand-primary: {{ $brandColor ?? '#C8102E' }};
            --brand-primary-dark: {{ $brandColorDark ?? '#9c0c23' }};
            --brand-dark: {{ $brandDark ?? '#101010' }};
            --brand-accent: {{ $brandAccent ?? '#00C2CB' }};
        }
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: '{{ $displayFont ?? 'Poppins' }}', sans-serif; }
        .text-brand { color: var(--brand-primary); }
        .bg-brand { background-color: var(--brand-primary); }
        .bg-brand-dark { background-color: var(--brand-dark); }
        .border-brand { border-color: var(--brand-primary); }
        .hover\:bg-brand-dark:hover { background-color: var(--brand-primary-dark); }
        [x-cloak] { display: none !important; }
        html { scroll-padding-top: 88px; }
    </style>

    @stack('styles')
</head>
<body class="bg-white text-slate-800 antialiased">

    @include('partials.navbar', ['brand' => $brand])

    <main>
        @yield('content')
    </main>

    @include('partials.footer', ['brand' => $brand])
    @include('partials.whatsapp-float', ['brand' => $brand])

    @stack('scripts')
</body>
</html>