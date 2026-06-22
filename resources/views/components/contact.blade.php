<section id="contact" class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-5 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr]">
            <div>
                <p class="text-sm font-semibold uppercase tracking-wide text-blue-700">Contact</p>
                <h2 class="mt-4 text-3xl font-bold tracking-normal text-slate-950 sm:text-4xl">Let’s discuss your next digital initiative.</h2>
                <p class="mt-5 text-base leading-8 text-slate-600">Talk with our team about software, cloud, consulting, or digital transformation needs.</p>

                <div class="mt-8 grid gap-4">
                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                        <p class="text-sm font-semibold text-slate-500">Email</p>
                        <p class="mt-1 font-semibold text-slate-950">hello@jawarasemesta.id</p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                        <p class="text-sm font-semibold text-slate-500">Phone</p>
                        <p class="mt-1 font-semibold text-slate-950">+62 812 3456 7890</p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                        <p class="text-sm font-semibold text-slate-500">Address</p>
                        <p class="mt-1 font-semibold text-slate-950">Jakarta, Indonesia</p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                        <p class="text-sm font-semibold text-slate-500">WhatsApp</p>
                        <p class="mt-1 font-semibold text-slate-950">+62 812 3456 7890</p>
                    </div>
                </div>
            </div>

            <form action="{{ route('contact.submit') }}" method="POST" class="rounded-2xl border border-slate-200 bg-white p-6 shadow-xl shadow-slate-900/10 lg:p-8">
                @csrf
                @if (session('contact_success'))
                    <div class="mb-5 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-semibold text-emerald-700">
                        {{ session('contact_success') }}
                    </div>
                @endif
                <div class="grid gap-5">
                    <div>
                        <label for="name" class="text-sm font-semibold text-slate-700">Name</label>
                        <input id="name" name="name" type="text" class="mt-2 w-full rounded-lg border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" placeholder="Your name">
                    </div>
                    <div>
                        <label for="email" class="text-sm font-semibold text-slate-700">Email</label>
                        <input id="email" name="email" type="email" class="mt-2 w-full rounded-lg border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" placeholder="you@example.com">
                    </div>
                    <div>
                        <label for="message" class="text-sm font-semibold text-slate-700">Message</label>
                        <textarea id="message" name="message" rows="6" class="mt-2 w-full rounded-lg border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-100" placeholder="Tell us about your project"></textarea>
                    </div>
                    <button type="submit" class="rounded-lg bg-blue-900 px-6 py-4 text-sm font-semibold text-white shadow-lg shadow-blue-900/15 transition hover:bg-blue-800">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
