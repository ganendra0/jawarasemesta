<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jawara Semesta - Mitra Transformasi Digital</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">

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
                            headline: ['"Plus Jakarta Sans"', 'sans-serif'],
                            body: ['Inter', 'sans-serif'],
                        },
                        colors: {
                            primary: '#114B98',
                            secondary: '#3A72D3',
                            tertiary: '#E63946',
                            neutral: '#F5F7FA',
                            deepNavy: '#0A2D5C',
                            inkBlack: '#1A1A1A',
                            slateGray: '#404040',
                        },
                        boxShadow: {
                            ambient: '0 8px 30px rgba(17, 75, 152, 0.12)',
                        }
                    }
                }
            }
        </script>
        <style>
            html { scroll-behavior: smooth; }
        </style>
    @endif
</head>
<body class="antialiased font-body text-ink-black bg-neutral selection:bg-primary selection:text-white">

    <!-- Navigation -->
    <nav class="fixed w-full top-0 left-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center gap-2 group">
                        <div class="h-10 flex items-center justify-center overflow-hidden transition-all">
                            <img src="{{ Storage::url('logo.png') }}" onerror="this.onerror=null; this.src='{{ asset('build/assets/logo.png') }}';" alt="Jawara Semesta Logo" class="h-full object-contain">
                        </div>
                        <span class="text-ink-black font-headline font-bold text-lg leading-tight">Jawara<br/>Semesta</span>
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ url('/#home') }}" class="text-slate-gray hover:text-primary font-medium transition-colors">Home</a>
                    <a href="{{ url('/#about') }}" class="text-slate-gray hover:text-primary font-medium transition-colors">About</a>
                    <a href="{{ url('/#services') }}" class="text-slate-gray hover:text-primary font-medium transition-colors">Services</a>
                    <a href="{{ url('/#portfolio') }}" class="text-slate-gray hover:text-primary font-medium transition-colors">Portfolio</a>
                    <a href="{{ url('/#insights') }}" class="text-slate-gray hover:text-primary font-medium transition-colors">Insights</a>
                    <a href="{{ url('/produk') }}" class="text-slate-gray hover:text-primary font-medium transition-colors">Produk</a>
                </div>

                <!-- CTA Button -->
                <div class="hidden md:flex items-center">
                    <a href="{{ url('/#contact') }}" class="bg-primary hover:bg-secondary text-white px-5 py-2.5 rounded font-medium transition-all shadow hover:shadow-md transform hover:-translate-y-0.5 text-sm">
                        Hubungi Kami
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden items-center">
                    <button id="mobileMenuBtn" onclick="toggleMobileMenu()" class="text-slate-gray hover:text-primary focus:outline-none">
                        <svg id="menuIcon" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="closeIcon" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-gray-100">
            <div class="px-4 py-4 space-y-3">
                <a href="{{ url('/#home') }}" class="block text-slate-gray hover:text-primary font-medium transition-colors py-2">Home</a>
                <a href="{{ url('/#about') }}" class="block text-slate-gray hover:text-primary font-medium transition-colors py-2">About</a>
                <a href="{{ url('/#services') }}" class="block text-slate-gray hover:text-primary font-medium transition-colors py-2">Services</a>
                <a href="{{ url('/#portfolio') }}" class="block text-slate-gray hover:text-primary font-medium transition-colors py-2">Portfolio</a>
                <a href="{{ url('/#insights') }}" class="block text-slate-gray hover:text-primary font-medium transition-colors py-2">Insights</a>
                <a href="{{ url('/produk') }}" class="block text-slate-gray hover:text-primary font-medium transition-colors py-2">Produk</a>
                <a href="{{ url('/#contact') }}" class="block bg-primary hover:bg-secondary text-white text-center px-5 py-2.5 rounded font-medium transition-all mt-2">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const menuIcon = document.getElementById('menuIcon');
            const closeIcon = document.getElementById('closeIcon');
            menu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        }
        // Close mobile menu when clicking a link
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobileMenu').classList.add('hidden');
                document.getElementById('menuIcon').classList.remove('hidden');
                document.getElementById('closeIcon').classList.add('hidden');
            });
        });
    </script>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-deep-navy text-white pt-16 pb-8 border-t-4 border-primary">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Brand Info -->
                <div class="lg:col-span-1">
                    <a href="{{ url('/') }}" class="flex items-center gap-2 mb-6">
                        <div class="h-10 flex items-center justify-center overflow-hidden bg-white/10 p-1 rounded">
                            <img src="{{ Storage::url('logo.png') }}" onerror="this.onerror=null; this.src='{{ asset('build/assets/logo.png') }}';" alt="Jawara Semesta Logo" class="h-full object-contain filter brightness-0 invert">
                        </div>
                        <span class="font-headline font-bold text-xl leading-tight text-white">Jawara<br/>Semesta</span>
                    </a>
                    <p class="text-neutral/70 text-[16px] leading-[1.6] mb-6">
                        Mitra andalan untuk pengembangan digital bisnis. Anda yang berfokus pada inovasi dan kualitas layanan.
                    </p>
                </div>

                <!-- Links 1 -->
                <div>
                    <h4 class="font-headline text-[18px] font-bold mb-6 text-white">Need help?</h4>
                    <ul class="space-y-4 text-[16px] text-neutral/70">
                        <li><a href="{{ url('/#contact') }}" class="hover:text-white transition-colors">Support</a></li>
                        <li><a href="{{ url('/#contact') }}" class="hover:text-white transition-colors">Get Started</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Terms of Use</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                    </ul>
                </div>

                <!-- Links 2 -->
                <div>
                    <h4 class="font-headline text-[18px] font-bold mb-6 text-white">Learn More</h4>
                    <ul class="space-y-4 text-[16px] text-neutral/70">
                        <li><a href="{{ url('/#about') }}" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="{{ url('/#services') }}" class="hover:text-white transition-colors">Services</a></li>
                        <li><a href="{{ url('/portofolio') }}" class="hover:text-white transition-colors">Portfolio</a></li>
                        <li><a href="{{ url('/produk') }}" class="hover:text-white transition-colors">Produk</a></li>
                        <li><a href="{{ url('/berita') }}" class="hover:text-white transition-colors">Insights/Blog</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="font-headline text-[18px] font-bold mb-6 text-white">Get in Touch</h4>
                    <ul class="space-y-4 text-[16px] text-neutral/70">
                        <a href="https://maps.app.goo.gl/XmhNT3RqwUjy4rsR8"><li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-secondary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>Jl. Tenggilis Lama IV B No.50, Tenggilis Mejoyo, Kec. Tenggilis Mejoyo, Surabaya, Jawa Timur 60292</span>
                        </li></a>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-secondary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <span>kurniawan@jawarasemesta.com</span>
                        </li>
                        <a href="https://wa.me/6281234590339"><li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-secondary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <span>+62 812 3459 0339</span>
                        </li></a>
                    </ul>
                </div>
            </div>

            <!-- Copyright & Socials -->
            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-neutral/50 text-[14px]">
                    &copy; {{ date('Y') }} Jawara Semesta. All rights reserved.
                </p>
                <div class="flex items-center gap-4">
                    <a href="#" class="text-neutral/50 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-neutral/50 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modal -->
    <div id="portfolioModal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-deep-navy/80 backdrop-blur-sm" onclick="closePortfolioModal()"></div>
        <div class="relative bg-white rounded-lg w-full max-w-4xl max-h-[90vh] overflow-y-auto shadow-2xl animate-[fadeIn_0.3s_ease-out]">
            <button onclick="closePortfolioModal()" class="absolute top-4 right-4 bg-neutral p-2 rounded-full text-slate-gray hover:text-tertiary hover:bg-tertiary/10 transition-colors z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/2 bg-neutral min-h-[300px] relative">
                    <img id="modalImg" src="" alt="Portfolio Image" class="w-full h-full object-cover hidden">
                    <div id="modalImgPlaceholder" class="w-full h-full flex items-center justify-center text-slate-gray font-medium">No Image</div>
                </div>
                <div class="w-full md:w-1/2 p-8">
                    <div id="modalClients" class="flex flex-wrap gap-2 mb-4"></div>
                    <div id="modalTech" class="flex flex-wrap gap-2 mb-4"></div>
                    <h3 id="modalTitle" class="font-headline text-[28px] font-bold text-ink-black mb-4 leading-[1.2]"></h3>
                    <p id="modalDesc" class="text-slate-gray text-[16px] leading-[1.6] mb-8"></p>
                    
                    <div class="space-y-3">
                        <a id="modalDemo" href="#" target="_blank" class="hidden items-center justify-center gap-2 w-full bg-primary hover:bg-secondary text-white font-medium px-6 py-3 rounded transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            Live Demo
                        </a>
                        <a id="modalGithub" href="#" target="_blank" class="hidden items-center justify-center gap-2 w-full bg-neutral hover:bg-gray-200 text-ink-black font-medium px-6 py-3 rounded transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                            Source Code
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openPortfolioModal(data) {
            const modal = document.getElementById('portfolioModal');
            
            // Set image
            const img = document.getElementById('modalImg');
            const placeholder = document.getElementById('modalImgPlaceholder');
            if (data.gambar) {
                img.src = data.gambar;
                img.classList.remove('hidden');
                placeholder.classList.add('hidden');
            } else {
                img.classList.add('hidden');
                placeholder.classList.remove('hidden');
            }

            // Set texts
            document.getElementById('modalTitle').textContent = data.judul;
            document.getElementById('modalDesc').textContent = data.deskripsi || 'Tidak ada deskripsi.';

            // Set clients
            const clientContainer = document.getElementById('modalClients');
            clientContainer.innerHTML = '';
            if (data.clients && data.clients.length > 0) {
                data.clients.forEach(client => {
                    const div = document.createElement('div');
                    div.className = 'flex items-center gap-1.5 bg-slate-100 px-2.5 py-1 rounded-full border border-slate-200';
                    let inner = '';
                    if (client.logo) {
                        inner += '<img src="' + client.logo + '" alt="' + client.name + '" class="h-4 w-auto object-contain">';
                    }
                    inner += '<span class="text-xs font-medium text-slate-600">' + client.name + '</span>';
                    div.innerHTML = inner;
                    clientContainer.appendChild(div);
                });
            }

            // Set technologies
            const techContainer = document.getElementById('modalTech');
            techContainer.innerHTML = '';
            if (data.teknologi) {
                const techs = data.teknologi.split(',').map(t => t.trim()).filter(t => t);
                techs.forEach(tech => {
                    const span = document.createElement('span');
                    span.className = 'inline-block bg-primary/10 text-primary px-3 py-1 rounded-full text-[12px] font-semibold';
                    span.textContent = tech;
                    techContainer.appendChild(span);
                });
            }

            // Set links
            const btnDemo = document.getElementById('modalDemo');
            if (data.link_demo) {
                btnDemo.href = data.link_demo;
                btnDemo.classList.remove('hidden');
                btnDemo.classList.add('flex');
            } else {
                btnDemo.classList.add('hidden');
                btnDemo.classList.remove('flex');
            }

            const btnGithub = document.getElementById('modalGithub');
            if (data.link_github) {
                btnGithub.href = data.link_github;
                btnGithub.classList.remove('hidden');
                btnGithub.classList.add('flex');
            } else {
                btnGithub.classList.add('hidden');
                btnGithub.classList.remove('flex');
            }

            // Show modal
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closePortfolioModal() {
            const modal = document.getElementById('portfolioModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
        }
    </script>
    <!-- Article Modal -->
    <div id="articleModal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-deep-navy/80 backdrop-blur-sm" onclick="closeArticleModal()"></div>
        <div class="relative bg-white rounded-lg w-full max-w-3xl max-h-[90vh] flex flex-col shadow-2xl animate-[fadeIn_0.3s_ease-out]">
            <button onclick="closeArticleModal()" class="absolute top-4 right-4 bg-white/80 backdrop-blur p-2 rounded-full text-slate-gray hover:text-tertiary shadow-sm transition-colors z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
            <div class="w-full h-64 bg-neutral relative shrink-0 rounded-t-lg overflow-hidden">
                <img id="articleModalImg" src="" alt="Article Image" class="w-full h-full object-cover hidden">
                <div id="articleModalImgPlaceholder" class="w-full h-full flex items-center justify-center text-slate-gray font-medium">No Image</div>
            </div>
            <div class="p-8 overflow-y-auto">
                <div class="mb-4">
                    <span id="articleModalDate" class="bg-primary/10 text-primary text-[12px] font-semibold px-3 py-1 rounded-full"></span>
                </div>
                <h3 id="articleModalTitle" class="font-headline text-[32px] font-bold text-ink-black mb-6 leading-[1.3]"></h3>
                <div id="articleModalContent" class="text-slate-gray text-[16px] leading-[1.8] max-w-none [&>p]:mb-4 [&>ul]:list-disc [&>ul]:pl-5 [&>ul]:mb-4 [&>ol]:list-decimal [&>ol]:pl-5 [&>ol]:mb-4 [&>h1]:text-2xl [&>h1]:font-bold [&>h1]:mb-4 [&>h1]:text-ink-black [&>h2]:text-xl [&>h2]:font-bold [&>h2]:mb-3 [&>h2]:text-ink-black [&>h3]:text-lg [&>h3]:font-bold [&>h3]:mb-3 [&>h3]:text-ink-black [&>a]:text-primary [&>a]:underline [&>strong]:text-ink-black"></div>
            </div>
        </div>
    </div>

    <script>
        function openArticleModal(data) {
            const modal = document.getElementById('articleModal');
            const img = document.getElementById('articleModalImg');
            const placeholder = document.getElementById('articleModalImgPlaceholder');
            
            if (data.gambar) {
                img.src = data.gambar;
                img.classList.remove('hidden');
                placeholder.classList.add('hidden');
            } else {
                img.classList.add('hidden');
                placeholder.classList.remove('hidden');
            }

            document.getElementById('articleModalTitle').textContent = data.judul;
            document.getElementById('articleModalDate').textContent = data.tanggal;
            document.getElementById('articleModalContent').innerHTML = data.isi || 'Tidak ada konten.';

            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeArticleModal() {
            const modal = document.getElementById('articleModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
        }
    </script>

    <!-- Product Modal -->
    <div id="productModal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-deep-navy/80 backdrop-blur-sm" onclick="closeProductModal()"></div>
        <div class="relative bg-white rounded-lg w-full max-w-4xl max-h-[90vh] overflow-y-auto shadow-2xl animate-[fadeIn_0.3s_ease-out]">
            <button onclick="closeProductModal()" class="absolute top-4 right-4 bg-neutral p-2 rounded-full text-slate-gray hover:text-tertiary hover:bg-tertiary/10 transition-colors z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/2 bg-neutral min-h-[300px] relative">
                    <img id="productModalImg" src="" alt="Product Image" class="w-full h-full object-cover hidden">
                    <div id="productModalImgPlaceholder" class="w-full h-full flex items-center justify-center text-slate-gray font-medium">No Image</div>
                    <div id="productModalThumbs" class="flex gap-2 p-3 overflow-x-auto bg-white/80 backdrop-blur"></div>
                </div>
                <div class="w-full md:w-1/2 p-8">
                    <h3 id="productModalTitle" class="font-headline text-[28px] font-bold text-ink-black mb-4 leading-[1.2]"></h3>
                    <div id="productModalDesc" class="text-slate-gray text-[16px] leading-[1.8] max-w-none [&>p]:mb-4 [&>ul]:list-disc [&>ul]:pl-5 [&>ul]:mb-4 [&>ol]:list-decimal [&>ol]:pl-5 [&>ol]:mb-4 [&>h1]:text-2xl [&>h1]:font-bold [&>h1]:mb-4 [&>h1]:text-ink-black [&>h2]:text-xl [&>h2]:font-bold [&>h2]:mb-3 [&>h2]:text-ink-black [&>h3]:text-lg [&>h3]:font-bold [&>h3]:mb-3 [&>h3]:text-ink-black [&>a]:text-primary [&>a]:underline [&>strong]:text-ink-black"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let productImages = [];

        function openProductModal(data) {
            const modal = document.getElementById('productModal');
            const img = document.getElementById('productModalImg');
            const placeholder = document.getElementById('productModalImgPlaceholder');
            const thumbsContainer = document.getElementById('productModalThumbs');

            productImages = data.images || [];

            document.getElementById('productModalTitle').textContent = data.nama;
            document.getElementById('productModalDesc').innerHTML = data.deskripsi || 'Tidak ada deskripsi.';

            thumbsContainer.innerHTML = '';

            if (productImages.length > 0) {
                img.src = productImages[0];
                img.classList.remove('hidden');
                placeholder.classList.add('hidden');

                if (productImages.length > 1) {
                    productImages.forEach((src, i) => {
                        const thumb = document.createElement('button');
                        thumb.className = 'flex-shrink-0 w-14 h-14 rounded overflow-hidden border-2 transition-colors' + (i === 0 ? ' border-primary' : ' border-transparent');
                        thumb.innerHTML = '<img src="' + src + '" class="w-full h-full object-cover">';
                        thumb.onclick = function() { swapProductImage(i); };
                        thumbsContainer.appendChild(thumb);
                    });
                    thumbsContainer.classList.remove('hidden');
                } else {
                    thumbsContainer.classList.add('hidden');
                }
            } else {
                img.classList.add('hidden');
                placeholder.classList.remove('hidden');
                thumbsContainer.classList.add('hidden');
            }

            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function swapProductImage(index) {
            const img = document.getElementById('productModalImg');
            img.src = productImages[index];
            const thumbs = document.querySelectorAll('#productModalThumbs button');
            thumbs.forEach((t, i) => {
                t.className = 'flex-shrink-0 w-14 h-14 rounded overflow-hidden border-2 transition-colors' + (i === index ? ' border-primary' : ' border-transparent');
            });
        }

        function closeProductModal() {
            const modal = document.getElementById('productModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = '';
        }
    </script>
</body>
</html>
