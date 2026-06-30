@extends('layouts.app')

@section('content')
    <div class="pt-32 pb-20 px-4 sm:px-6 lg:px-8 bg-neutral">
        <div class="max-w-[1280px] mx-auto">
            <div class="text-center mb-16">
                <span class="text-primary font-semibold text-[14px] tracking-[0.05em] uppercase mb-2 block">ARTIKEL</span>
                <h1 class="font-headline text-[40px] md:text-[48px] font-bold text-ink-black mb-4">Semua Wawasan & Berita</h1>
                <p class="text-[18px] text-slate-gray max-w-2xl mx-auto leading-[1.6]">
                    Kumpulan artikel mendalam tentang tren teknologi terkini dan strategi transformasi digital untuk bisnis Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @forelse ($articles as $article)
                <article class="group cursor-pointer bg-white rounded border border-[#E1E8F0] overflow-hidden transition-all duration-300 hover:border-transparent hover:shadow-ambient transform hover:-translate-y-1" onclick="openArticleModal({{ json_encode(['judul' => $article->judul, 'isi' => $article->isi, 'gambar' => $article->gambar ? Storage::url($article->gambar) : null, 'tanggal' => optional($article->tanggal_publikasi)->format('M d, Y') ?? 'Artikel']) }})">
                    <div class="h-48 relative overflow-hidden bg-neutral">
                        @if ($article->gambar)
                            <img src="{{ Storage::url($article->gambar) }}" alt="{{ $article->judul }}" class="w-full h-full object-cover" />
                        @else
                            <div class="w-full h-full bg-slate-200"></div>
                        @endif
                        <div class="absolute top-4 left-4">
                            <span class="bg-primary text-white text-[12px] font-semibold px-3 py-1 rounded-full">{{ optional($article->tanggal_publikasi)->format('M d, Y') ?? 'Artikel' }}</span>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="font-headline text-[24px] font-semibold text-ink-black mb-3 group-hover:text-primary transition-colors">
                            {{ $article->judul }}
                        </h3>
                        <p class="text-slate-gray text-[16px] mb-6 line-clamp-3 leading-[1.6]">
                            {{ \Illuminate\Support\Str::limit(strip_tags($article->isi), 120) }}
                        </p>
                        <span class="text-primary text-[14px] font-semibold group-hover:text-secondary flex items-center gap-1 transition-colors">Baca Selengkapnya &rarr;</span>
                    </div>
                </article>
                @empty
                    <div class="text-center col-span-3 text-slate-gray py-20">Belum ada artikel berita yang ditambahkan.</div>
                @endforelse
            </div>
            
            <div class="text-center mt-16">
                <a href="{{ url('/#insights') }}" class="inline-flex items-center gap-2 border border-slate-gray text-slate-gray hover:bg-slate-gray hover:text-white px-6 py-3 rounded font-medium transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
@endsection
