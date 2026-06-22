@php
    $links = [
        ['label' => 'Home', 'href' => '#home'],
        ['label' => 'About', 'href' => '#about'],
        ['label' => 'Services', 'href' => '#services'],
        ['label' => 'Portfolio', 'href' => '#portfolio'],
        ['label' => 'Blog', 'href' => '#blog'],
        ['label' => 'Contact', 'href' => '#contact'],
    ];
@endphp

<header class="sticky top-0 z-50 border-b border-slate-200/70 bg-white/90 backdrop-blur-xl">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8" aria-label="Main navigation">
        <a href="#home" class="flex items-center gap-3" aria-label="Jawara Semesta home">
            <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-900 text-sm font-bold text-white shadow-sm">JS</span>
            <span class="text-lg font-semibold tracking-normal text-slate-950">Jawara Semesta</span>
        </a>

        <div class="hidden items-center gap-8 lg:flex">
            @foreach ($links as $link)
                <a data-nav-link href="{{ $link['href'] }}" class="text-sm font-medium text-slate-600 transition hover:text-blue-700">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>

        <div class="hidden items-center gap-3 lg:flex">
            <a href="#contact" class="rounded-lg bg-blue-900 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-800">
                Consultation
            </a>
        </div>

        <button data-mobile-menu-button type="button" class="inline-flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 text-slate-700 lg:hidden" aria-label="Open menu" aria-expanded="false">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
        </button>
    </nav>

    <div data-mobile-menu class="hidden border-t border-slate-200 bg-white px-5 py-4 lg:hidden">
        <div class="mx-auto grid max-w-7xl gap-3">
            @foreach ($links as $link)
                <a data-nav-link href="{{ $link['href'] }}" class="rounded-lg px-3 py-2 text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-blue-700">
                    {{ $link['label'] }}
                </a>
            @endforeach
            <a href="#contact" class="mt-2 rounded-lg bg-blue-900 px-5 py-3 text-center text-sm font-semibold text-white">
                Consultation
            </a>
        </div>
    </div>
</header>
