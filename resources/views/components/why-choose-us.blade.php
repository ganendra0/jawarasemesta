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

<section id="why-choose-us" class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-5 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-start">
            <div>
                <p class="text-sm font-semibold uppercase tracking-wide text-blue-700">Why Choose Us</p>
                <h2 class="mt-4 text-3xl font-bold tracking-normal text-slate-950 sm:text-4xl">A practical partner for serious digital work.</h2>
                <p class="mt-5 text-base leading-8 text-slate-600">We combine business understanding with technical execution, helping teams move from idea to reliable implementation with less friction.</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ($features as $feature)
                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                        <div class="mb-4 flex h-9 w-9 items-center justify-center rounded-lg bg-blue-900 text-white">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="m5 12 4 4L19 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-slate-950">{{ $feature }}</h3>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-14 grid gap-5 rounded-2xl bg-blue-900 p-6 text-white shadow-xl shadow-blue-900/15 sm:grid-cols-3 lg:p-8">
            <div>
                <p class="text-4xl font-bold">50+</p>
                <p class="mt-2 text-sm text-blue-100">Projects Completed</p>
            </div>
            <div>
                <p class="text-4xl font-bold">20+</p>
                <p class="mt-2 text-sm text-blue-100">Clients Served</p>
            </div>
            <div>
                <p class="text-4xl font-bold">5+</p>
                <p class="mt-2 text-sm text-blue-100">Years Experience</p>
            </div>
        </div>
    </div>
</section>
