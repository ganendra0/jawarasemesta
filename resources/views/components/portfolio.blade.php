@props(['portfolios'])

<section id="portfolio" class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-5 lg:px-8">
        <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end">
            <div class="max-w-3xl">
                <p class="text-sm font-semibold uppercase tracking-wide text-blue-700">Portfolio</p>
                <h2 class="mt-4 text-3xl font-bold tracking-normal text-slate-950 sm:text-4xl">Selected work from our digital delivery.</h2>
            </div>
            <a href="#contact" class="inline-flex items-center justify-center rounded-lg border border-slate-200 px-5 py-3 text-sm font-semibold text-slate-900 transition hover:border-blue-200 hover:text-blue-800">
                View All Projects
            </a>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            @forelse ($portfolios as $portfolio)
                <article class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-xl hover:shadow-slate-900/10">
                    @if ($portfolio->gambar)
                        <img src="{{ asset('storage/'.$portfolio->gambar) }}" alt="{{ $portfolio->judul }}" class="h-56 w-full object-cover">
                    @else
                        <div class="flex h-56 items-center justify-center bg-slate-100">
                            <span class="text-sm font-semibold text-slate-500">{{ $portfolio->judul }}</span>
                        </div>
                    @endif
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-slate-950">{{ $portfolio->judul }}</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">{{ \Illuminate\Support\Str::limit($portfolio->deskripsi, 130) }}</p>
                        @if ($portfolio->teknologi)
                            <div class="mt-5 flex flex-wrap gap-2">
                                @foreach (explode(',', $portfolio->teknologi) as $technology)
                                    <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-800">{{ trim($technology) }}</span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </article>
            @empty
                @foreach (['Enterprise Website', 'Cloud Migration', 'Operations Dashboard'] as $project)
                    <article class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
                        <div class="h-56 bg-slate-100"></div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-slate-950">{{ $project }}</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Portfolio data will appear here after projects are added from the Filament admin panel.</p>
                            <div class="mt-5 flex flex-wrap gap-2">
                                <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-800">Laravel</span>
                                <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-800">Cloud</span>
                            </div>
                        </div>
                    </article>
                @endforeach
            @endforelse
        </div>
    </div>
</section>
