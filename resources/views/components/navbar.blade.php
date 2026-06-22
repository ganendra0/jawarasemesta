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

<header class="sticky top-0 z-50 border-b border-slate-100 bg-white/80 backdrop-blur-md transition-all duration-300">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8" aria-label="Main navigation">
        <a href="#home" class="flex items-center gap-2" aria-label="Jawara Semesta home">
            <span class="flex h-8 w-8 items-center justify-center rounded bg-slate-900 text-xs font-bold text-white">JS</span>
            <span class="text-base font-semibold tracking-tight text-slate-900">Jawara Semesta</span>
        </a>

        <div class="hidden items-center gap-8 lg:flex">
            @foreach ($links as $link)
                <a data-nav-link href="{{ $link['href'] }}" class="text-sm font-medium text-slate-600 transition hover:text-slate-900">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>

        <div class="hidden items-center gap-4 lg:flex">
            <a href="#contact" class="inline-flex h-9 items-center justify-center rounded bg-slate-900 px-4 text-sm font-medium text-white transition hover:bg-slate-800">
                Consultation
            </a>
        </div>

        <button data-mobile-menu-button type="button" class="inline-flex h-10 w-10 items-center justify-center text-slate-700 lg:hidden" aria-label="Open menu" aria-expanded="false">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
            </svg>
        </button>
    </nav>

    <div data-mobile-menu class="hidden border-t border-slate-100 bg-white px-6 py-4 lg:hidden">
        <div class="mx-auto grid max-w-7xl gap-2">
            @foreach ($links as $link)
                <a data-nav-link href="{{ $link['href'] }}" class="rounded-md px-3 py-2 text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900">
                    {{ $link['label'] }}
                </a>
            @endforeach
            <a href="#contact" class="mt-4 rounded bg-slate-900 px-4 py-2.5 text-center text-sm font-medium text-white">
                Consultation
            </a>
        </div>
    </div>
</header>
