<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jawara Semesta - Mitra Transformasi Digital</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                        },
                        colors: {
                            primary: '#1D4ED8', // blue-700
                            secondary: '#64748B', // slate-500
                            heroBg: '#7C8FA4', // light slate/blueish grey for hero
                            darkBg: '#0B1B3D', // navy blue for footer
                        }
                    }
                }
            }
        </script>
        <style>
            body { font-family: 'Inter', sans-serif; }
            .glass-card {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.05);
            }
        </style>
    @endif
</head>
<body class="antialiased text-gray-800 bg-white selection:bg-primary selection:text-white">

    <!-- Navigation -->
    <nav class="absolute w-full top-0 left-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="#" class="flex items-center gap-2 group">
                        <!-- Placeholder Logo -->
                        <div class="w-12 h-12 bg-white rounded flex items-center justify-center text-primary font-bold text-xl overflow-hidden shadow-sm group-hover:shadow-md transition-all">
                            JS
                        </div>
                        <span class="text-white font-bold text-xl leading-tight">Jawara<br/>Semesta</span>
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="text-white hover:text-gray-200 font-medium transition-colors border-b-2 border-white pb-1">Home</a>
                    <a href="#" class="text-white hover:text-gray-200 font-medium transition-colors">About</a>
                    <a href="#" class="text-white hover:text-gray-200 font-medium transition-colors">Services</a>
                    <a href="#" class="text-white hover:text-gray-200 font-medium transition-colors">Portfolio</a>
                    <a href="#" class="text-white hover:text-gray-200 font-medium transition-colors">Insights</a>
                </div>

                <!-- CTA Button -->
                <div class="hidden md:flex items-center">
                    <a href="#" class="bg-[#8A1A18] hover:bg-red-800 text-white px-6 py-2.5 rounded-full font-medium transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        Hubungi Kami
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden items-center">
                    <button class="text-white hover:text-gray-200 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative bg-heroBg pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="text-left animate-[fadeIn_1s_ease-out]">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6 tracking-tight">
                        Mitra Transformasi<br/>
                        Pengembangan Digital<br/>
                        Bisnis Anda
                    </h1>
                    <p class="mt-4 text-lg text-gray-100 mb-8 max-w-lg leading-relaxed">
                        Kami menyediakan solusi teknologi terdepan untuk membantu instansi pemerintah, perusahaan, dan organisasi meningkatkan efisiensi, produktivitas, serta daya saing melalui inovasi digital yang berkelanjutan.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#" class="bg-primary hover:bg-blue-800 text-white px-8 py-3.5 rounded font-medium text-center transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                            Konsultasi Sekarang
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                        <a href="#" class="bg-white/90 hover:bg-white text-gray-800 px-8 py-3.5 rounded font-medium text-center transition-all shadow-md hover:shadow-lg backdrop-blur-sm">
                            Lihat Portofolio
                        </a>
                    </div>
                </div>
                
                <!-- Hero Image Area -->
                <div class="relative mt-10 lg:mt-0 flex justify-center lg:justify-end">
                    <!-- Base Image Placeholder -->
                    <div class="relative z-0 bg-gray-200 rounded-lg shadow-2xl w-[90%] lg:w-[480px] h-[320px] overflow-hidden transform -rotate-2 hover:rotate-0 transition-transform duration-500">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Team collaborating" class="w-full h-full object-cover opacity-80" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                    <!-- Floating Overlap Image Placeholder -->
                    <div class="absolute z-10 bottom-[-40px] left-0 lg:-left-12 bg-white p-2 rounded-xl shadow-2xl w-[280px] lg:w-[340px] transform rotate-3 hover:scale-105 transition-transform duration-500">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dashboard" class="w-full h-auto rounded-lg" />
                    </div>
                    
                    <!-- Floating Badges -->
                    <div class="absolute top-12 right-0 bg-white/90 backdrop-blur-sm p-4 rounded-lg shadow-xl animate-bounce" style="animation-duration: 3s;">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-primary font-bold">
                                5+
                            </div>
                            <div class="text-sm">
                                <p class="text-gray-500 text-xs">Tahun</p>
                                <p class="font-bold text-gray-800 leading-none">Pengalaman</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="absolute -bottom-6 right-10 bg-white/90 backdrop-blur-sm p-4 rounded-lg shadow-xl animate-bounce" style="animation-duration: 4s;">
                         <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600 font-bold">
                                100+
                            </div>
                            <div class="text-sm">
                                <p class="text-gray-500 text-xs">Proyek</p>
                                <p class="font-bold text-gray-800 leading-none">Sukses</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Decorative Shape Bottom -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-[50px] lg:h-[100px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C71.39,18,143.19,37,215,50.17,250.62,56.68,286.69,59.35,321.39,56.44Z" class="fill-[#F9FAFB]"></path>
            </svg>
        </div>
    </div>

    <!-- Intro Section -->
    <div class="bg-[#F9FAFB] py-20 px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-primary font-semibold text-sm tracking-wider uppercase mb-2 block">TENTANG KAMI</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 max-w-3xl mx-auto leading-tight">10+ Tahun Menghadirkan Inovasi Teknologi Berkelanjutan</h2>
                <p class="text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    PT Jawara Semesta adalah perusahaan penyedia solusi teknologi informasi yang berlokasi di Surabaya, Jawa Timur, dan telah berdiri pada 02 September 2014. Kami berfokus pada pengembangan dan implementasi teknologi digital yang membantu instansi bertransformasi, berinovasi, dan berkembang di tengah dinamika dunia bisnis yang terus berubah.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6 max-w-4xl mx-auto mb-10">
                <div class="flex items-start gap-3">
                    <div class="mt-1 bg-blue-100 text-primary rounded-full p-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <p class="text-gray-800 font-medium">Pengembangan AI & IoT</p>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <div class="mt-1 bg-blue-100 text-primary rounded-full p-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <p class="text-gray-800 font-medium">Infrastruktur IT Tangguh</p>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <div class="mt-1 bg-blue-100 text-primary rounded-full p-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <p class="text-gray-800 font-medium">Aplikasi Web & Mobile</p>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <div class="mt-1 bg-blue-100 text-primary rounded-full p-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <p class="text-gray-800 font-medium">Sistem Informasi Terintegrasi</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <a href="#" class="inline-block border border-gray-300 hover:border-gray-400 text-gray-700 bg-white px-6 py-2.5 rounded font-medium transition-colors shadow-sm hover:shadow">
                    Pelajari Selengkapnya
                </a>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="bg-white py-24 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Layanan Unggulan Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Solusi digital komprehensif untuk mengoptimalkan operasional dan membawa bisnis Anda ke level berikutnya.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="group bg-white rounded-xl shadow-sm hover:shadow-xl border border-gray-100 overflow-hidden transition-all duration-300 transform hover:-translate-y-1">
                    <div class="h-48 overflow-hidden bg-gray-100 relative">
                        <img src="https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Design" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm p-2 rounded shadow-sm text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Perencanaan & Desain</h3>
                        <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                            Analisis kebutuhan, perencanaan strategis, desain sistem, dan UI/UX untuk menghasilkan solusi digital yang tepat sasaran.
                        </p>
                        <a href="#" class="text-primary font-medium text-sm flex items-center gap-1 hover:text-blue-800 transition-colors">
                            Selengkapnya <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="group bg-white rounded-xl shadow-sm hover:shadow-xl border border-gray-100 overflow-hidden transition-all duration-300 transform hover:-translate-y-1">
                    <div class="h-48 overflow-hidden bg-gray-100 relative">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Development" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm p-2 rounded shadow-sm text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Pengembangan Sistem</h3>
                        <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                            Pengembangan aplikasi web, mobile, AI, IoT, dan sistem informasi yang andal, aman, dan scalable untuk bisnis Anda.
                        </p>
                        <a href="#" class="text-primary font-medium text-sm flex items-center gap-1 hover:text-blue-800 transition-colors">
                            Selengkapnya <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="group bg-white rounded-xl shadow-sm hover:shadow-xl border border-gray-100 overflow-hidden transition-all duration-300 transform hover:-translate-y-1">
                    <div class="h-48 overflow-hidden bg-gray-100 relative">
                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Infrastructure" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm p-2 rounded shadow-sm text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Infrastruktur & Cloud</h3>
                        <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                            Penyediaan dan implementasi server jaringan, cloud, keamanan sistem, serta integrasi infrastruktur teknologi informasi.
                        </p>
                        <a href="#" class="text-primary font-medium text-sm flex items-center gap-1 hover:text-blue-800 transition-colors">
                            Selengkapnya <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logos & Stats Section -->
    <div class="bg-gray-50 py-16 border-y border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-widest">DIPERCAYA OLEH INSTANSI & PERUSAHAAN</p>
            </div>
            
            <div class="flex flex-wrap justify-center gap-6 md:gap-10 mb-12 opacity-70 grayscale hover:grayscale-0 transition-all duration-500">
                <!-- Logos Placeholders -->
                <div class="bg-white px-6 py-3 rounded border border-gray-200 shadow-sm flex items-center justify-center min-w-[120px]">
                    <span class="font-bold text-gray-400">LOGO 1</span>
                </div>
                <div class="bg-white px-6 py-3 rounded border border-gray-200 shadow-sm flex items-center justify-center min-w-[120px]">
                    <span class="font-bold text-gray-400">LOGO 2</span>
                </div>
                <div class="bg-white px-6 py-3 rounded border border-gray-200 shadow-sm flex items-center justify-center min-w-[120px]">
                    <span class="font-bold text-gray-400">LOGO 3</span>
                </div>
                <div class="bg-white px-6 py-3 rounded border border-gray-200 shadow-sm flex items-center justify-center min-w-[120px]">
                    <span class="font-bold text-gray-400">LOGO 4</span>
                </div>
                <div class="bg-white px-6 py-3 rounded border border-gray-200 shadow-sm flex items-center justify-center min-w-[120px]">
                    <span class="font-bold text-gray-400">LOGO 5</span>
                </div>
            </div>

            <div class="max-w-4xl mx-auto text-center text-gray-600 text-sm italic">
                "Dedikasi lebih dari 10 tahun telah menjadikan kami dipercaya oleh berbagai instansi pemerintah, perusahaan swasta, dan organisasi nirlaba. Kami terus berkomitmen untuk menghadirkan solusi digital yang inovatif, efektif, dan transformatif."
            </div>
        </div>
    </div>

    <!-- Projects Section -->
    <div class="bg-white py-24 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Proyek Unggulan Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Beberapa solusi digital inovatif yang telah kami implementasikan untuk membantu transformasi klien kami.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="group cursor-pointer">
                    <div class="overflow-hidden rounded-xl bg-gray-900 mb-4 h-56 relative shadow-md">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Project 1" class="w-full h-full object-cover opacity-80 group-hover:scale-105 group-hover:opacity-100 transition-all duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <span class="text-xs font-bold tracking-wider text-primary uppercase mb-2 block">PEMERINTAHAN</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-primary transition-colors">Sistem Informasi Terintegrasi Pemkot</h3>
                    <a href="#" class="text-sm font-medium text-gray-600 group-hover:text-primary flex items-center gap-1 transition-colors">
                        Lihat detail <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>

                <!-- Project 2 -->
                <div class="group cursor-pointer">
                    <div class="overflow-hidden rounded-xl bg-gray-900 mb-4 h-56 relative shadow-md">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Project 2" class="w-full h-full object-cover opacity-80 group-hover:scale-105 group-hover:opacity-100 transition-all duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <span class="text-xs font-bold tracking-wider text-primary uppercase mb-2 block">INDUSTRI</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-primary transition-colors">Smart Monitoring System IoT</h3>
                    <a href="#" class="text-sm font-medium text-gray-600 group-hover:text-primary flex items-center gap-1 transition-colors">
                        Lihat detail <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>

                <!-- Project 3 -->
                <div class="group cursor-pointer">
                    <div class="overflow-hidden rounded-xl bg-gray-900 mb-4 h-56 relative shadow-md">
                        <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Project 3" class="w-full h-full object-cover opacity-80 group-hover:scale-105 group-hover:opacity-100 transition-all duration-500" />
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <span class="text-xs font-bold tracking-wider text-primary uppercase mb-2 block">ENTERPRISE</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-primary transition-colors">AI-Driven Analytics Dashboard</h3>
                    <a href="#" class="text-sm font-medium text-gray-600 group-hover:text-primary flex items-center gap-1 transition-colors">
                        Lihat detail <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Insights Section -->
    <div class="bg-[#F9FAFB] py-24 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Wawasan & Berita Terbaru</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Temukan artikel mendalam tentang tren teknologi terkini dan strategi transformasi digital untuk bisnis Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <article class="bg-white rounded-xl shadow-sm hover:shadow-lg border border-gray-100 overflow-hidden transition-shadow">
                    <div class="h-48 relative overflow-hidden bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="News 1" class="w-full h-full object-cover" />
                        <div class="absolute top-4 left-4">
                            <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full">AI & Automation</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-3 hover:text-primary"><a href="#">Masa Depan AI dalam Efisiensi Operasional Bisnis</a></h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            Bagaimana implementasi kecerdasan buatan dapat membantu perusahaan mengotomatisasi proses rutin dan meningkatkan pengambilan keputusan strategis.
                        </p>
                        <a href="#" class="text-primary text-sm font-medium hover:text-blue-800">Baca Selengkapnya &rarr;</a>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="bg-white rounded-xl shadow-sm hover:shadow-lg border border-gray-100 overflow-hidden transition-shadow">
                    <div class="h-48 relative overflow-hidden bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="News 2" class="w-full h-full object-cover" />
                        <div class="absolute top-4 left-4">
                            <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full">Digital Strategy</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-3 hover:text-primary"><a href="#">Langkah Strategis Memulai Transformasi Digital</a></h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            Panduan lengkap bagi organisasi untuk merencanakan peta jalan transformasi digital yang terukur, aman, dan adaptif terhadap perubahan pasar.
                        </p>
                        <a href="#" class="text-primary text-sm font-medium hover:text-blue-800">Baca Selengkapnya &rarr;</a>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="bg-white rounded-xl shadow-sm hover:shadow-lg border border-gray-100 overflow-hidden transition-shadow">
                    <div class="h-48 relative overflow-hidden bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="News 3" class="w-full h-full object-cover" />
                        <div class="absolute top-4 left-4">
                            <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full">Cyber Security</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-3 hover:text-primary"><a href="#">Menjaga Keamanan Data di Era Cloud Computing</a></h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            Pentingnya infrastruktur keamanan siber yang kuat untuk melindungi aset digital perusahaan dari ancaman ransomware dan kebocoran data.
                        </p>
                        <a href="#" class="text-primary text-sm font-medium hover:text-blue-800">Baca Selengkapnya &rarr;</a>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="relative py-24 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');">
        <div class="absolute inset-0 bg-white/90 backdrop-blur-sm"></div>
        <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Tertarik dengan layanan kami?</h2>
            <p class="text-lg text-gray-700 mb-8 max-w-2xl mx-auto">
                Kami siap membantu mewujudkan solusi teknologi yang tepat untuk mendukung pertumbuhan dan transformasi digital instansi Anda. Konsultasikan kebutuhan Anda bersama tim kami sekarang.
            </p>
            <a href="#" class="inline-block bg-primary hover:bg-blue-800 text-white font-medium px-8 py-3.5 rounded-lg shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1">
                Hubungi Kami
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-darkBg text-white pt-16 pb-8 border-t-4 border-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Brand Info -->
                <div class="lg:col-span-1">
                    <a href="#" class="flex items-center gap-2 mb-6">
                        <!-- Placeholder Logo Footer -->
                        <div class="w-10 h-10 bg-white rounded flex items-center justify-center text-darkBg font-bold text-lg overflow-hidden">
                            JS
                        </div>
                        <span class="font-bold text-xl leading-tight">Jawara<br/>Semesta</span>
                    </a>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Mitra andalan untuk pengembangan digital bisnis. Anda yang berfokus pada inovasi dan kualitas layanan.
                    </p>
                </div>

                <!-- Links 1 -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Need help?</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Support</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Get Started</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Terms of Use</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                    </ul>
                </div>

                <!-- Links 2 -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Learn More</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Services</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Portfolio</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Insights/Blog</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Get in Touch</h4>
                    <ul class="space-y-4 text-sm text-gray-400">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>Surabaya, Jawa Timur, Indonesia</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <span>info@jawarasemesta.com</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <span>+62 811 2345 6789</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright & Socials -->
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-500 text-sm">
                    &copy; {{ date('Y') }} Jawara Semesta. All rights reserved.
                </p>
                <div class="flex items-center gap-4">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
