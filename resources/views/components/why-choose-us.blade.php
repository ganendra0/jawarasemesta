@php
    $features = [
        'Professional Team',
        'Modern Technology',
        'Secure System',
        'Fast Development',
        'Reliable Support',
        'Scalable Solution',
    ];
@endphp

<section id="why-choose-us" class="bg-slate-50 py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-16 lg:grid-cols-[0.8fr_1.2fr] lg:items-start">
            <div class="max-w-xl">
                <p class="text-xs font-semibold uppercase tracking-widest text-slate-500">Why Choose Us</p>
                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 sm:text-4xl">A practical partner for serious digital work.</h2>
                <p class="mt-6 text-lg leading-relaxed text-slate-600">We combine business understanding with technical execution, helping teams move from idea to reliable implementation with less friction.</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ($features as $feature)
                    <div class="flex items-center gap-4 rounded bg-white p-5">
                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-100 text-slate-900">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="m5 12 4 4L19 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="font-medium text-slate-900">{{ $feature }}</h3>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-20 grid gap-8 rounded bg-slate-900 px-8 py-12 text-white sm:grid-cols-3 lg:px-12 lg:py-16">
            <div>
                <p class="text-4xl font-semibold tracking-tight">50+</p>
                <p class="mt-2 text-sm font-medium text-slate-400">Projects Completed</p>
            </div>
            <div>
                <p class="text-4xl font-semibold tracking-tight">20+</p>
                <p class="mt-2 text-sm font-medium text-slate-400">Clients Served</p>
            </div>
            <div>
                <p class="text-4xl font-semibold tracking-tight">5+</p>
                <p class="mt-2 text-sm font-medium text-slate-400">Years Experience</p>
            </div>
        </div>
    </div>
</section>
