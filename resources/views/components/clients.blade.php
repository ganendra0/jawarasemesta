@props(['clients'])

<section id="clients" class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-5 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold uppercase tracking-wide text-blue-700">Our Clients</p>
            <h2 class="mt-4 text-3xl font-bold tracking-normal text-slate-950 sm:text-4xl">Trusted by teams building better digital operations.</h2>
        </div>

        <div class="mt-12 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4">
            @forelse ($clients as $client)
                <a href="{{ $client->website ?: '#clients' }}" class="flex min-h-36 flex-col items-center justify-center rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm transition hover:-translate-y-1 hover:border-blue-200 hover:shadow-lg">
                    @if ($client->logo)
                        <img src="{{ asset('storage/'.$client->logo) }}" alt="{{ $client->name }}" class="max-h-14 w-auto object-contain">
                    @else
                        <span class="flex h-14 w-14 items-center justify-center rounded-lg bg-blue-50 text-lg font-bold text-blue-900">{{ \Illuminate\Support\Str::of($client->name)->substr(0, 2)->upper() }}</span>
                    @endif
                    <span class="mt-4 text-sm font-semibold text-slate-700">{{ $client->name }}</span>
                </a>
            @empty
                @foreach (['Aruna Group', 'Nusantara Digital', 'Prima Retail', 'Sagara Finance'] as $client)
                    <div class="flex min-h-36 flex-col items-center justify-center rounded-xl border border-slate-200 bg-white p-6 text-center shadow-sm">
                        <span class="flex h-14 w-14 items-center justify-center rounded-lg bg-blue-50 text-lg font-bold text-blue-900">{{ \Illuminate\Support\Str::of($client)->substr(0, 2)->upper() }}</span>
                        <span class="mt-4 text-sm font-semibold text-slate-700">{{ $client }}</span>
                    </div>
                @endforeach
            @endforelse
        </div>
    </div>
</section>
