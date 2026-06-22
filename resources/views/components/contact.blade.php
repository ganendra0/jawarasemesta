<section id="contact" class="bg-slate-50 py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-16 lg:grid-cols-2">
            <div>
                <p class="text-xs font-semibold uppercase tracking-widest text-slate-500">Contact</p>
                <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 sm:text-4xl">Let’s discuss your next digital initiative.</h2>
                <p class="mt-6 text-lg leading-relaxed text-slate-600">Talk with our team about software, cloud, consulting, or digital transformation needs.</p>

                <div class="mt-12 space-y-8">
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded bg-white ring-1 ring-slate-200/50">
                            <svg class="h-5 w-5 text-slate-900" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-slate-900">Email</p>
                            <p class="mt-1 text-sm text-slate-600">hello@jawarasemesta.id</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded bg-white ring-1 ring-slate-200/50">
                            <svg class="h-5 w-5 text-slate-900" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.896-1.596-5.265-3.965-6.861-6.86l1.294-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-slate-900">Phone & WhatsApp</p>
                            <p class="mt-1 text-sm text-slate-600">+62 812 3456 7890</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded bg-white ring-1 ring-slate-200/50">
                            <svg class="h-5 w-5 text-slate-900" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-slate-900">Address</p>
                            <p class="mt-1 text-sm text-slate-600">Jakarta, Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>

            <form action="{{ route('contact.submit') }}" method="POST" class="rounded bg-white p-8 ring-1 ring-slate-200/50 sm:p-10">
                @csrf
                @if (session('contact_success'))
                    <div class="mb-6 rounded bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-800">
                        {{ session('contact_success') }}
                    </div>
                @endif
                <div class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-slate-900">Name</label>
                        <div class="mt-2">
                            <input id="name" name="name" type="text" class="block w-full rounded border-0 py-2.5 px-3 text-slate-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-slate-900 sm:text-sm sm:leading-6" placeholder="Your name">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-slate-900">Email</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" class="block w-full rounded border-0 py-2.5 px-3 text-slate-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-slate-900 sm:text-sm sm:leading-6" placeholder="you@example.com">
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium leading-6 text-slate-900">Message</label>
                        <div class="mt-2">
                            <textarea id="message" name="message" rows="4" class="block w-full rounded border-0 py-2.5 px-3 text-slate-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-slate-900 sm:text-sm sm:leading-6" placeholder="Tell us about your project"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="w-full rounded bg-slate-900 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-slate-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-900">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
