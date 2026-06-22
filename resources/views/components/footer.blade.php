@php
    $quickLinks = ['Home' => '#home', 'About' => '#about', 'Portfolio' => '#portfolio', 'Blog' => '#blog', 'Contact' => '#contact'];
    $services = ['Website Development', 'Mobile App Development', 'IT Consulting', 'Cloud Solutions'];
@endphp

<footer class="bg-slate-950 text-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-5 py-14 sm:grid-cols-2 lg:grid-cols-4 lg:px-8">
        <div>
            <div class="flex items-center gap-3">
                <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-white text-sm font-bold text-blue-900">JS</span>
                <span class="text-lg font-semibold">Jawara Semesta</span>
            </div>
            <p class="mt-5 text-sm leading-7 text-slate-300">Smart digital solutions for modern businesses through software, cloud, and IT consulting services.</p>
        </div>

        <div>
            <h2 class="text-sm font-semibold uppercase tracking-wide text-slate-400">Quick Links</h2>
            <div class="mt-5 grid gap-3">
                @foreach ($quickLinks as $label => $href)
                    <a href="{{ $href }}" class="text-sm text-slate-300 transition hover:text-white">{{ $label }}</a>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-sm font-semibold uppercase tracking-wide text-slate-400">Services</h2>
            <div class="mt-5 grid gap-3">
                @foreach ($services as $service)
                    <a href="#services" class="text-sm text-slate-300 transition hover:text-white">{{ $service }}</a>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-sm font-semibold uppercase tracking-wide text-slate-400">Social Media</h2>
            <div class="mt-5 flex gap-3">
                @foreach (['in' => 'LinkedIn', 'ig' => 'Instagram', 'x' => 'X'] as $icon => $label)
                    <a href="#contact" class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-700 text-xs font-bold text-slate-300 transition hover:border-white hover:text-white" aria-label="{{ $label }}">
                        {{ $icon }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="border-t border-slate-800 px-5 py-6">
        <p class="mx-auto max-w-7xl text-sm text-slate-400">© {{ date('Y') }} Jawara Semesta. All rights reserved.</p>
    </div>
</footer>
