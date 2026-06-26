@extends('layouts.app')

@section('content')
    <div class="pt-32 pb-20 px-4 sm:px-6 lg:px-8 bg-neutral">
        <div class="max-w-[1280px] mx-auto">
            <div class="text-center mb-16">
                <span class="text-primary font-semibold text-[14px] tracking-[0.05em] uppercase mb-2 block">KARYA KAMI</span>
                <h1 class="font-headline text-[40px] md:text-[48px] font-bold text-ink-black mb-4">Semua Portofolio</h1>
                <p class="text-[18px] text-slate-gray max-w-2xl mx-auto leading-[1.6]">
                    Seluruh solusi digital inovatif yang telah kami implementasikan untuk membantu transformasi klien kami.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @forelse ($portfolios as $portfolio)
                <div class="group cursor-pointer bg-white rounded border border-[#E1E8F0] hover:border-transparent hover:shadow-ambient transition-all duration-300 overflow-hidden transform hover:-translate-y-1">
                    <div class="overflow-hidden bg-deep-navy h-56 relative">
                        @if ($portfolio->gambar)
                            <img src="{{ Storage::url($portfolio->gambar) }}" alt="{{ $portfolio->judul }}" class="w-full h-full object-cover opacity-90 group-hover:scale-105 group-hover:opacity-100 transition-all duration-500" />
                        @else
                            <div class="w-full h-full bg-slate-200 flex items-center justify-center text-slate-gray text-sm font-medium">{{ $portfolio->judul }}</div>
                        @endif
                    </div>
                    <div class="p-8">
                        {{-- Client Information --}}
                        @if ($portfolio->clients->isNotEmpty())
                            <div class="mb-4">
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($portfolio->clients as $client)
                                        <div class="flex items-center gap-1.5 bg-slate-100 px-2.5 py-1 rounded-full border border-slate-200">
                                            @if ($client->logo)
                                                <img src="{{ Storage::url($client->logo) }}" alt="{{ $client->name }}" class="h-4 w-auto object-contain">
                                            @endif
                                            <span class="text-xs font-medium text-slate-600">{{ $client->name }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        {{-- End Client Information --}}

                        @if ($portfolio->teknologi)
                            <span class="inline-block bg-primary/10 text-primary px-3 py-1 rounded-full text-[12px] font-semibold mb-4">{{ explode(',', $portfolio->teknologi)[0] }}</span>
                        @endif
                        <h3 class="font-headline text-[24px] font-semibold text-ink-black mb-2">{{ $portfolio->judul }}</h3>
                        <button onclick="openPortfolioModal({{ json_encode(['judul' => $portfolio->judul, 'deskripsi' => $portfolio->deskripsi, 'gambar' => $portfolio->gambar ? Storage::url($portfolio->gambar) : null, 'link_demo' => $portfolio->link_demo, 'link_github' => $portfolio->link_github, 'teknologi' => $portfolio->teknologi, 'clients' => $portfolio->clients->map(fn($c) => ['name' => $c->name, 'logo' => $c->logo ? Storage::url($c->logo) : null])]) }})" class="text-[14px] font-semibold text-slate-gray group-hover:text-primary flex items-center gap-1 mt-4 transition-colors">
                            Lihat detail <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>
                @empty
                    <div class="text-center col-span-3 text-slate-gray py-20">Belum ada proyek yang ditambahkan.</div>
                @endforelse
            </div>
            
            <div class="text-center mt-16">
                <a href="{{ url('/') }}" class="inline-flex items-center gap-2 border border-slate-gray text-slate-gray hover:bg-slate-gray hover:text-white px-6 py-3 rounded font-medium transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
@endsection
