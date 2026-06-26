@extends('layouts.app')

@section('content')
    <div class="pt-32 pb-20 px-4 sm:px-6 lg:px-8 bg-neutral">
        <div class="max-w-[1280px] mx-auto">
            <div class="text-center mb-16">
                <span class="text-primary font-semibold text-[14px] tracking-[0.05em] uppercase mb-2 block">PRODUK KAMI</span>
                <h1 class="font-headline text-[40px] md:text-[48px] font-bold text-ink-black mb-4">Katalog Produk</h1>
                <p class="text-[18px] text-slate-gray max-w-2xl mx-auto leading-[1.6]">
                    Jelajahi koleksi produk berkualitas yang kami sediakan untuk mendukung kebutuhan bisnis dan instansi Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @forelse ($products as $product)
                <div class="group cursor-pointer bg-white rounded border border-[#E1E8F0] hover:border-transparent hover:shadow-ambient transition-all duration-300 overflow-hidden transform hover:-translate-y-1" onclick="openProductModal({{ json_encode(['nama' => $product->nama_barang, 'deskripsi' => $product->deskripsi, 'images' => $product->image_urls]) }})">
                    <!-- Image -->
                    <div class="overflow-hidden h-52 relative bg-slate-100">
                        @if ($product->first_image_url)
                            <img src="{{ $product->first_image_url }}" alt="{{ $product->nama_barang }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                            @if (count($product->image_urls) > 1)
                                <div class="absolute bottom-2 right-2 bg-black/60 text-white text-[11px] font-medium px-2 py-0.5 rounded-full">
                                    +{{ count($product->image_urls) - 1 }} foto
                                </div>
                            @endif
                        @else
                            <div class="w-full h-full flex items-center justify-center text-slate-gray">
                                <svg class="w-12 h-12 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        @endif
                    </div>

                    <!-- Content -->
                    <div class="p-5">
                        <h3 class="font-headline text-[18px] font-semibold text-ink-black mb-2 leading-snug">{{ $product->nama_barang }}</h3>

                        @if ($product->deskripsi)
                            <p class="text-slate-gray text-[14px] leading-[1.6] mb-3 line-clamp-2">
                                {{ strip_tags($product->deskripsi) }}
                            </p>
                        @endif

                        <button class="text-[14px] font-semibold text-slate-gray group-hover:text-primary flex items-center gap-1 mt-2 transition-colors">
                            Lihat detail <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>
                @empty
                    <div class="text-center col-span-full text-slate-gray py-20">
                        <svg class="w-16 h-16 mx-auto text-slate-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                        <p class="text-[16px]">Belum ada produk yang ditambahkan.</p>
                    </div>
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
