@props(['articles'])

<section id="blog" class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-5 lg:px-8">
        <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end">
            <div class="max-w-3xl">
                <p class="text-sm font-semibold uppercase tracking-wide text-blue-700">Blog</p>
                <h2 class="mt-4 text-3xl font-bold tracking-normal text-slate-950 sm:text-4xl">Latest insights from Jawara Semesta.</h2>
            </div>
            <a href="#blog" class="inline-flex items-center justify-center rounded-lg border border-slate-200 px-5 py-3 text-sm font-semibold text-slate-900 transition hover:border-blue-200 hover:text-blue-800">
                View All Articles
            </a>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            @forelse ($articles as $article)
                <article class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-xl hover:shadow-slate-900/10">
                    @if ($article->gambar)
                        <img src="{{ asset('storage/'.$article->gambar) }}" alt="{{ $article->judul }}" class="h-52 w-full object-cover">
                    @else
                        <div class="h-52 bg-slate-100"></div>
                    @endif
                    <div class="p-6">
                        <p class="text-sm font-medium text-slate-500">{{ optional($article->tanggal_publikasi)->format('M d, Y') ?? $article->tanggal_publikasi }}</p>
                        <h3 class="mt-3 text-xl font-semibold text-slate-950">{{ $article->judul }}</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">{{ \Illuminate\Support\Str::limit(strip_tags($article->isi), 120) }}</p>
                        <a href="#contact" class="mt-5 inline-flex text-sm font-semibold text-blue-800 hover:text-blue-600">Read More</a>
                    </div>
                </article>
            @empty
                @foreach (['Planning Digital Transformation', 'Choosing the Right Cloud Strategy', 'Building Secure Business Software'] as $article)
                    <article class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
                        <div class="h-52 bg-slate-100"></div>
                        <div class="p-6">
                            <p class="text-sm font-medium text-slate-500">Jawara Semesta</p>
                            <h3 class="mt-3 text-xl font-semibold text-slate-950">{{ $article }}</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Article data will appear here after posts are added from the Filament admin panel.</p>
                            <a href="#contact" class="mt-5 inline-flex text-sm font-semibold text-blue-800">Read More</a>
                        </div>
                    </article>
                @endforeach
            @endforelse
        </div>
    </div>
</section>
