@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div id="home" class="relative pt-28 pb-16 lg:pt-32 lg:pb-24 overflow-hidden bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-deep-navy/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-neutral/20 to-transparent"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 mt-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <!-- Text Content -->
                <div class="text-left animate-[fadeIn_1s_ease-out]">
                    <h1 class="font-headline text-4xl sm:text-5xl lg:text-[48px] font-bold text-white leading-[1.2] tracking-[-0.02em] mb-4">
                        Mitra Transformasi<br/>
                        Pengembangan Digital<br/>
                        Bisnis Anda
                    </h1>
                    <p class="mt-3 text-[18px] text-gray-200 mb-8 max-w-md leading-[1.6]">
                        Kami menyediakan solusi teknologi terdepan untuk membantu instansi pemerintah, perusahaan, dan organisasi meningkatkan efisiensi, produktivitas, serta daya saing melalui inovasi digital yang berkelanjutan.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="bg-primary hover:bg-secondary text-white px-6 py-3 rounded font-medium text-center transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                            Konsultasi Sekarang
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                        <a href="#portfolio" class="bg-transparent hover:bg-primary/10 text-white border border-primary px-6 py-3 rounded font-medium text-center transition-all backdrop-blur-sm">
                            Lihat Portofolio
                        </a>
                    </div>
                </div>
                
                <!-- Hero Image Area -->
                <div class="relative mt-12 lg:mt-0 flex justify-center lg:justify-end">
                    <!-- Base Image Placeholder -->
                    <div class="relative z-0 bg-gray-200 rounded-lg shadow-2xl w-[90%] lg:w-[400px] h-[280px] overflow-hidden transform -rotate-2 hover:rotate-0 transition-transform duration-500">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Team collaborating" class="w-full h-full object-cover opacity-90" />
                        <div class="absolute inset-0 bg-gradient-to-t from-deep-navy/40 to-transparent"></div>
                    </div>
                    <!-- Floating Overlap Image Placeholder -->
                    <div class="absolute z-10 bottom-[-30px] left-0 lg:-left-10 bg-white p-2 rounded-xl shadow-2xl w-[260px] lg:w-[280px] transform rotate-3 hover:scale-105 transition-transform duration-500">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dashboard" class="w-full h-auto rounded-lg" />
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Decorative Shape Bottom -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-20">
            <svg class="relative block w-full h-[40px] lg:h-[80px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C71.39,18,143.19,37,215,50.17,250.62,56.68,286.69,59.35,321.39,56.44Z" class="fill-[#F5F7FA]"></path>
            </svg>
        </div>
    </div>

    <!-- Intro Section -->
    <div id="about" class="py-[120px] px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-[1280px] mx-auto">
            <div class="text-center mb-16">
                <span class="text-primary font-semibold text-[14px] tracking-[0.05em] uppercase mb-2 block">TENTANG KAMI</span>
                <h2 class="font-headline text-[32px] font-bold text-ink-black mb-6 max-w-3xl mx-auto leading-[1.3]">10+ Tahun Menghadirkan Inovasi Teknologi Berkelanjutan</h2>
                <p class="text-[18px] text-slate-gray max-w-4xl mx-auto leading-[1.6]">
                    PT Jawara Semesta adalah perusahaan penyedia solusi teknologi informasi yang berlokasi di Surabaya, Jawa Timur, dan telah berdiri pada 02 September 2014. Kami berfokus pada pengembangan dan implementasi teknologi digital yang membantu instansi bertransformasi, berinovasi, dan berkembang di tengah dinamika dunia bisnis yang terus berubah.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6 max-w-4xl mx-auto mb-10">
                <div class="flex items-start gap-4">
                    <div class="mt-1 bg-primary/10 text-primary rounded-[4px] p-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <p class="text-ink-black font-semibold text-[16px]">Pengembangan AI & IoT</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="mt-1 bg-primary/10 text-primary rounded-[4px] p-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <p class="text-ink-black font-semibold text-[16px]">Infrastruktur IT Tangguh</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="mt-1 bg-primary/10 text-primary rounded-[4px] p-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <p class="text-ink-black font-semibold text-[16px]">Aplikasi Web & Mobile</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="mt-1 bg-primary/10 text-primary rounded-[4px] p-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <p class="text-ink-black font-semibold text-[16px]">Sistem Informasi Terintegrasi</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#services" class="inline-block border border-primary text-primary hover:bg-primary/5 px-6 py-3 rounded font-medium transition-colors">
                    Pelajari Selengkapnya
                </a>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div id="services" class="py-[120px] px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-[1280px] mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-headline text-[32px] font-bold text-ink-black mb-4">Layanan Unggulan Kami</h2>
                <p class="text-[18px] text-slate-gray max-w-2xl mx-auto leading-[1.6]">
                    Solusi digital komprehensif untuk mengoptimalkan operasional dan membawa bisnis Anda ke level berikutnya.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Service 1 -->
                <div class="group bg-white rounded border border-[#E1E8F0] overflow-hidden transition-all duration-300 hover:border-transparent hover:shadow-ambient transform hover:-translate-y-1">
                    <div class="h-48 overflow-hidden bg-neutral relative">
                        <img src="https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Design" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm p-2 rounded shadow-sm text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="font-headline text-[24px] font-semibold text-ink-black mb-3">Perencanaan & Desain</h3>
                        <p class="text-slate-gray text-[16px] leading-[1.6]">
                            Analisis kebutuhan, perencanaan strategis, desain sistem, dan UI/UX untuk menghasilkan solusi digital yang tepat sasaran.
                        </p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="group bg-white rounded border border-[#E1E8F0] overflow-hidden transition-all duration-300 hover:border-transparent hover:shadow-ambient transform hover:-translate-y-1">
                    <div class="h-48 overflow-hidden bg-neutral relative">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Development" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm p-2 rounded shadow-sm text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="font-headline text-[24px] font-semibold text-ink-black mb-3">Pengembangan Sistem</h3>
                        <p class="text-slate-gray text-[16px] leading-[1.6]">
                            Pengembangan aplikasi web, mobile, AI, IoT, dan sistem informasi yang andal, aman, dan scalable untuk bisnis Anda.
                        </p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="group bg-white rounded border border-[#E1E8F0] overflow-hidden transition-all duration-300 hover:border-transparent hover:shadow-ambient transform hover:-translate-y-1">
                    <div class="h-48 overflow-hidden bg-neutral relative">
                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Infrastructure" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm p-2 rounded shadow-sm text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="font-headline text-[24px] font-semibold text-ink-black mb-3">Infrastruktur & Cloud</h3>
                        <p class="text-slate-gray text-[16px] leading-[1.6]">
                            Penyediaan dan implementasi server jaringan, cloud, keamanan sistem, serta integrasi infrastruktur teknologi informasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logos & Stats Section -->
    <div class="py-16 border-y border-[#E1E8F0]">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <p class="text-[14px] font-semibold text-slate-gray uppercase tracking-[0.05em]">DIPERCAYA OLEH INSTANSI & PERUSAHAAN</p>
            </div>
            
            <div class="flex flex-wrap justify-center gap-6 md:gap-10 mb-12 opacity-70 grayscale hover:grayscale-0 transition-all duration-500">
                @forelse ($clients as $client)
                    <div class="bg-white px-6 py-3 rounded border border-[#E1E8F0] shadow-sm flex items-center justify-center min-w-[120px]">
                        @if ($client->logo)
                            <img src="{{ Storage::url($client->logo) }}" alt="{{ $client->name }}" class="max-h-8 w-auto object-contain">
                        @else
                            <span class="font-bold text-slate-gray">{{ $client->name }}</span>
                        @endif
                    </div>
                @empty
                    <div class="bg-white px-6 py-3 rounded border border-[#E1E8F0] shadow-sm flex items-center justify-center min-w-[120px]">
                        <span class="font-bold text-slate-gray">Aruna Group</span>
                    </div>
                    <div class="bg-white px-6 py-3 rounded border border-[#E1E8F0] shadow-sm flex items-center justify-center min-w-[120px]">
                        <span class="font-bold text-slate-gray">Nusantara Digital</span>
                    </div>
                @endforelse
            </div>

            <div class="max-w-4xl mx-auto text-center text-slate-gray text-[16px] italic">
                "Dedikasi lebih dari 10 tahun telah menjadikan kami dipercaya oleh berbagai instansi pemerintah, perusahaan swasta, dan organisasi nirlaba. Kami terus berkomitmen untuk menghadirkan solusi digital yang inovatif, efektif, dan transformatif."
            </div>
        </div>
    </div>

    <!-- Projects Section -->
    <div id="portfolio" class="py-[120px] px-4 sm:px-6 lg:px-8">
        <div class="max-w-[1280px] mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-headline text-[32px] font-bold text-ink-black mb-4">Proyek Unggulan Kami</h2>
                <p class="text-[18px] text-slate-gray max-w-2xl mx-auto leading-[1.6]">
                    Beberapa solusi digital inovatif yang telah kami implementasikan untuk membantu transformasi klien kami.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
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
                        <button onclick="openPortfolioModal({{ json_encode(['judul' => $portfolio->judul, 'deskripsi' => $portfolio->deskripsi, 'gambar' => $portfolio->gambar ? Storage::url($portfolio->gambar) : null, 'link_demo' => $portfolio->link_demo, 'link_github' => $portfolio->link_github, 'teknologi' => $portfolio->teknologi]) }})" class="text-[14px] font-semibold text-slate-gray group-hover:text-primary flex items-center gap-1 mt-4 transition-colors">
                            Lihat detail <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>
                @empty
                    <div class="text-center col-span-3 text-slate-gray">Belum ada proyek yang ditambahkan.</div>
                @endforelse
            </div>
            
            <div class="text-center">
                <a href="{{ url('/portofolio') }}" class="inline-block border border-primary text-primary hover:bg-primary/5 px-6 py-3 rounded font-medium transition-colors">
                    Lihat Semua Portofolio
                </a>
            </div>
        </div>
    </div>

    <!-- Insights Section -->
    <div id="insights" class="py-[120px] px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-[1280px] mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-headline text-[32px] font-bold text-ink-black mb-4">Wawasan & Berita Terbaru</h2>
                <p class="text-[18px] text-slate-gray max-w-2xl mx-auto leading-[1.6]">
                    Temukan artikel mendalam tentang tren teknologi terkini dan strategi transformasi digital untuk bisnis Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                @forelse ($articles as $article)
                <article class="bg-neutral rounded border border-[#E1E8F0] overflow-hidden transition-all duration-300 hover:border-transparent hover:shadow-ambient transform hover:-translate-y-1">
                    <div class="h-48 relative overflow-hidden bg-white">
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
                        <h3 class="font-headline text-[24px] font-semibold text-ink-black mb-3 hover:text-primary cursor-pointer" onclick="openArticleModal({{ json_encode(['judul' => $article->judul, 'isi' => $article->isi, 'gambar' => $article->gambar ? Storage::url($article->gambar) : null, 'tanggal' => optional($article->tanggal_publikasi)->format('M d, Y') ?? 'Artikel']) }})">
                            {{ $article->judul }}
                        </h3>
                        <p class="text-slate-gray text-[16px] mb-6 line-clamp-3 leading-[1.6]">
                            {{ \Illuminate\Support\Str::limit(strip_tags($article->isi), 120) }}
                        </p>
                        <button onclick="openArticleModal({{ json_encode(['judul' => $article->judul, 'isi' => $article->isi, 'gambar' => $article->gambar ? Storage::url($article->gambar) : null, 'tanggal' => optional($article->tanggal_publikasi)->format('M d, Y') ?? 'Artikel']) }})" class="text-primary text-[14px] font-semibold hover:text-secondary flex items-center gap-1">Baca Selengkapnya &rarr;</button>
                    </div>
                </article>
                @empty
                    <div class="text-center col-span-3 text-slate-gray">Belum ada artikel berita yang ditambahkan.</div>
                @endforelse
            </div>
            
            <div class="text-center">
                <a href="{{ url('/berita') }}" class="inline-block border border-primary text-primary hover:bg-primary/5 px-6 py-3 rounded font-medium transition-colors">
                    Lihat Semua Berita
                </a>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div id="contact" class="relative py-[120px] bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');">
        <div class="absolute inset-0 bg-white/90 backdrop-blur-sm"></div>
        <div class="relative z-10 max-w-[1280px] mx-auto px-4 text-center">
            <h2 class="font-headline text-[32px] font-bold text-ink-black mb-6">Tertarik dengan layanan kami?</h2>
            <p class="text-[18px] text-slate-gray mb-8 max-w-2xl mx-auto leading-[1.6]">
                Kami siap membantu mewujudkan solusi teknologi yang tepat untuk mendukung pertumbuhan dan transformasi digital instansi Anda. Konsultasikan kebutuhan Anda bersama tim kami sekarang.
            </p>
            <a href="mailto:info@jawarasemesta.com" class="inline-block bg-primary hover:bg-secondary text-white font-medium px-8 py-3.5 rounded shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1">
                Hubungi Kami Sekarang
            </a>
        </div>
    </div>
@endsection
