@php
    $quickLinks = ['Home' => '#home', 'About' => '#about', 'Portfolio' => '#portfolio', 'Blog' => '#blog', 'Contact' => '#contact'];
    $services = ['Website Development', 'Mobile App Development', 'IT Consulting', 'Cloud Solutions'];
@endphp

<footer class="bg-slate-900 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-4 lg:gap-8">
            <div class="lg:col-span-1">
                <a href="#home" class="flex items-center gap-2" aria-label="Jawara Semesta home">
                    <span class="flex h-8 w-8 items-center justify-center rounded bg-white text-xs font-bold text-slate-900">JS</span>
                    <span class="text-lg font-semibold tracking-tight text-white">Jawara Semesta</span>
                </a>
                <p class="mt-6 text-sm leading-relaxed text-slate-400">Smart digital solutions for modern businesses through robust software, cloud, and IT consulting services.</p>
                <div class="mt-8 flex gap-4">
                    @foreach (['in' => 'LinkedIn', 'ig' => 'Instagram', 'x' => 'X'] as $icon => $label)
                        <a href="#contact" class="flex h-8 w-8 items-center justify-center rounded bg-slate-800 text-xs font-medium text-slate-300 transition hover:bg-slate-700 hover:text-white" aria-label="{{ $label }}">
                            {{ $icon }}
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="grid grid-cols-2 gap-8 sm:grid-cols-3 lg:col-span-3 lg:pl-16">
                <div>
                    <h3 class="text-sm font-semibold text-white">Quick Links</h3>
                    <ul role="list" class="mt-6 space-y-4">
                        @foreach ($quickLinks as $label => $href)
                            <li><a href="{{ $href }}" class="text-sm text-slate-400 transition hover:text-white">{{ $label }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-white">Services</h3>
                    <ul role="list" class="mt-6 space-y-4">
                        @foreach ($services as $service)
                            <li><a href="#services" class="text-sm text-slate-400 transition hover:text-white">{{ $service }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <h3 class="text-sm font-semibold text-white">Contact</h3>
                    <ul role="list" class="mt-6 space-y-4">
                        <li class="text-sm text-slate-400">hello@jawarasemesta.id</li>
                        <li class="text-sm text-slate-400">+62 812 3456 7890</li>
                        <li class="text-sm text-slate-400">Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-16 border-t border-slate-800 pt-8 sm:mt-20">
            <p class="text-sm text-slate-400">© {{ date('Y') }} Jawara Semesta. All rights reserved.</p>
        </div>
    </div>
</footer>
