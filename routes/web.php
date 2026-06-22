<?php

use App\Models\Berita;
use App\Models\Client;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

Route::get('/', function () {
    $getRecords = fn (string $table, string $model, ?string $latestColumn = null, int $limit = 3) => rescue(function () use ($table, $model, $latestColumn, $limit) {
        if (! Schema::hasTable($table)) {
            return collect();
        }

        $query = $latestColumn ? $model::latest($latestColumn) : $model::latest();

        return $query->take($limit)->get();
    }, collect(), report: false);

    return view('home', [
        'portfolios' => $getRecords('portofolios', Portofolio::class),
        'clients' => $getRecords('clients', Client::class, limit: 8),
        'articles' => $getRecords('beritas', Berita::class, 'tanggal_publikasi'),
    ]);
});

Route::post('/contact', function () {
    request()->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'message' => ['required', 'string', 'max:2000'],
    ]);

    return back()->with('contact_success', 'Thank you. Our team will contact you soon.');
})->name('contact.submit');
