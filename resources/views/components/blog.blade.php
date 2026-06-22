@props(['articles'])

<section id="blog" class="bg-white py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end">
            <div class="max-w-2xl">
                <p class="text-xs font-semibold uppercase tracking-widest text-slate-500">Blog</p>
                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 sm:text-4xl">Latest insights from Jawara Semesta.</h2>
            </div>
            <a href="#blog" class="inline-flex h-10 items-center justify-center rounded border border-slate-200 px-4 text-sm font-medium text-slate-900 transition hover:bg-slate-50 hover:text-slate-900">
                View All Articles
            </a>
        </div>

        <div class="mt-16 grid gap-x-8 gap-y-12 lg:grid-cols-3">
            @forelse ($articles as $article)
                <article class="group relative flex flex-col items-start justify-between">
                    <div class="relative w-full overflow-hidden rounded bg-slate-100">
                        @if ($article->gambar)
                            <img src="{{ asset('storage/'.$article->gambar) }}" alt="{{ $article->judul }}" class="aspect-[16/9] w-full object-cover transition duration-500 group-hover:scale-105">
                        @else
                            <div class="aspect-[16/9] w-full bg-slate-200"></div>
                        @endif
                    </div>
                    <div class="mt-6 flex items-center gap-x-4 text-xs">
                        <time datetime="{{ $article->tanggal_publikasi }}" class="text-slate-500">{{ optional($article->tanggal_publikasi)->format('M d, Y') ?? $article->tanggal_publikasi }}</time>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-slate-900 group-hover:text-slate-600">
                            <a href="#blog">
                                <span class="absolute inset-0"></span>
                                {{ $article->judul }}
                            </a>
                        </h3>
                        <p class="mt-3 line-clamp-3 text-sm leading-relaxed text-slate-600">{{ \Illuminate\Support\Str::limit(strip_tags($article->isi), 120) }}</p>
                    </div>
                </article>
            @empty
                @foreach (['Planning Digital Transformation', 'Choosing the Right Cloud Strategy', 'Building Secure Business Software'] as $article)
                    <article class="group relative flex flex-col items-start justify-between">
                        <div class="relative w-full overflow-hidden rounded bg-slate-200 aspect-[16/9]"></div>
                        <div class="mt-6 flex items-center gap-x-4 text-xs">
                            <time class="text-slate-500">Today</time>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-slate-900">
                                <a href="#blog">
                                    <span class="absolute inset-0"></span>
                                    {{ $article }}
                                </a>
                            </h3>
                            <p class="mt-3 line-clamp-3 text-sm leading-relaxed text-slate-600">Article data will appear here after posts are added from the Filament admin panel.</p>
                        </div>
                    </article>
                @endforeach
            @endforelse
        </div>
    </div>
</section>
