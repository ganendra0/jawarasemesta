@props(['clients'])

<section id="clients" class="bg-white py-24 border-t border-slate-100">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-lg font-medium text-slate-900">Trusted by teams building better digital operations.</h2>
        </div>

        <div class="mt-12 grid grid-cols-2 gap-x-8 gap-y-10 sm:grid-cols-3 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-4">
            @forelse ($clients as $client)
                <a href="{{ $client->website ?: '#clients' }}" class="group flex items-center justify-center">
                    @if ($client->logo)
                        <img src="{{ asset('storage/'.$client->logo) }}" alt="{{ $client->name }}" class="max-h-12 w-auto object-contain opacity-50 grayscale transition duration-300 group-hover:opacity-100 group-hover:grayscale-0">
                    @else
                        <span class="flex h-12 items-center justify-center text-lg font-bold text-slate-400 transition duration-300 group-hover:text-slate-900">{{ \Illuminate\Support\Str::of($client->name)->substr(0, 2)->upper() }}</span>
                    @endif
                </a>
            @empty
                @foreach (['Aruna Group', 'Nusantara Digital', 'Prima Retail', 'Sagara Finance'] as $client)
                    <div class="flex items-center justify-center">
                        <span class="text-xl font-bold text-slate-300">{{ $client }}</span>
                    </div>
                @endforeach
            @endforelse
        </div>
    </div>
</section>
