@props(['portfolios'])

<section id="portfolio" class="bg-slate-50 py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end">
            <div class="max-w-2xl">
                <p class="text-xs font-semibold uppercase tracking-widest text-slate-500">Portfolio</p>
                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 sm:text-4xl">Selected work from our digital delivery.</h2>
            </div>
            <a href="#contact" class="inline-flex h-10 items-center justify-center rounded border border-slate-200 px-4 text-sm font-medium text-slate-900 transition hover:bg-white hover:text-slate-900">
                View All Projects
            </a>
        </div>

        <div class="mt-16 grid gap-x-8 gap-y-12 lg:grid-cols-3">
            @forelse ($portfolios as $portfolio)
                <article class="group relative">
                    <div class="overflow-hidden rounded bg-slate-100">
                        @if ($portfolio->gambar)
                            <img src="{{ asset('storage/'.$portfolio->gambar) }}" alt="{{ $portfolio->judul }}" class="h-64 w-full object-cover transition duration-500 group-hover:scale-105">
                        @else
                            <div class="flex h-64 items-center justify-center bg-slate-200">
                                <span class="text-sm font-medium text-slate-500">{{ $portfolio->judul }}</span>
                            </div>
                        @endif
                    </div>
                    <div class="mt-6">
                        @if ($portfolio->clients->isNotEmpty())
                            <div class="mb-3">
                                <div class="flex flex-wrap items-center gap-2">
                                    @foreach ($portfolio->clients as $client)
                                        <div class="flex items-center gap-1.5 rounded bg-slate-100 px-2.5 py-1 border border-slate-200">
                                            @if ($client->logo)
                                                <img src="{{ asset('storage/'.$client->logo) }}" alt="{{ $client->name }}" class="h-4 w-auto object-contain">
                                            @endif
                                            <span class="text-xs font-medium text-slate-600">{{ $client->name }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <h3 class="text-xl font-semibold text-slate-900">{{ $portfolio->judul }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ \Illuminate\Support\Str::limit($portfolio->deskripsi, 130) }}</p>
                        @if ($portfolio->teknologi)
                            <div class="mt-4 flex flex-wrap gap-2">
                                @foreach (explode(',', $portfolio->teknologi) as $technology)
                                    <span class="rounded bg-slate-100 px-2.5 py-1 text-xs font-medium text-slate-700">{{ trim($technology) }}</span>
                                @endforeach
                            </div>
                        @endif
                        <div class="mt-4 flex gap-4">
                            @if ($portfolio->link_demo)
                                <a href="{{ $portfolio->link_demo }}" target="_blank" class="text-sm font-medium text-slate-900 hover:text-slate-600">
                                    View Demo →
                                </a>
                            @endif
                            @if ($portfolio->link_github)
                                <a href="{{ $portfolio->link_github }}" target="_blank" class="text-sm font-medium text-slate-600 hover:text-slate-900">
                                    GitHub →
                                </a>
                            @endif
                        </div>
                    </div>
                </article>
            @empty
                @foreach (['Enterprise Website', 'Cloud Migration', 'Operations Dashboard'] as $project)
                    <article class="group relative">
                        <div class="overflow-hidden rounded bg-slate-200 h-64"></div>
                        <div class="mt-6">
                            <h3 class="text-xl font-semibold text-slate-900">{{ $project }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-slate-600">Portfolio data will appear here after projects are added from the Filament admin panel.</p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="rounded bg-slate-100 px-2.5 py-1 text-xs font-medium text-slate-700">Laravel</span>
                                <span class="rounded bg-slate-100 px-2.5 py-1 text-xs font-medium text-slate-700">Cloud</span>
                            </div>
                        </div>
                    </article>
                @endforeach
            @endforelse
        </div>
    </div>
</section>
