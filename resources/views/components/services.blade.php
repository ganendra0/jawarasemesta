@php
    $services = [
        ['title' => 'Website Development', 'description' => 'Fast, responsive, and maintainable websites built for business growth.', 'icon' => 'M4 6h16M4 10h16M7 14h4m-7 4h16'],
        ['title' => 'Mobile App Development', 'description' => 'Mobile experiences designed for performance, usability, and scale.', 'icon' => 'M9 3h6a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Zm3 15h.01'],
        ['title' => 'IT Consulting', 'description' => 'Clear technical guidance for digital planning, audits, and execution.', 'icon' => 'M12 6v6l4 2m4-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z'],
        ['title' => 'Cloud Solutions', 'description' => 'Cloud infrastructure that is secure, observable, and ready to scale.', 'icon' => 'M7 18h10a4 4 0 0 0 .7-7.94A6 6 0 0 0 6.1 8.1 4.5 4.5 0 0 0 7 18Z'],
        ['title' => 'IoT Solutions', 'description' => 'Connected systems for monitoring, automation, and smarter operations.', 'icon' => 'M12 8v8m-4-4h8M5 5l3 3m11-3-3 3M5 19l3-3m11 3-3-3'],
        ['title' => 'UI/UX Design', 'description' => 'Clean interfaces shaped around real workflows and user needs.', 'icon' => 'M4 7h16M4 12h10M4 17h7'],
    ];
@endphp

<section id="services" class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-5 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-sm font-semibold uppercase tracking-wide text-blue-700">Services</p>
            <h2 class="mt-4 text-3xl font-bold tracking-normal text-slate-950 sm:text-4xl">Technology services for every stage of digital growth.</h2>
        </div>

        <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($services as $service)
                <article class="group rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-xl hover:shadow-slate-900/10">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50 text-blue-800">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="{{ $service['icon'] }}" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="mt-6 text-lg font-semibold text-slate-950">{{ $service['title'] }}</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-600">{{ $service['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
