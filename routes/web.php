<?php

use App\Models\Berita;
use App\Models\Client;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

$getRecords = fn (string $table, string $model, ?string $latestColumn = null, ?int $limit = null) => rescue(function () use ($table, $model, $latestColumn, $limit) {
    if (! Schema::hasTable($table)) {
        return collect();
    }

    $query = $latestColumn ? $model::latest($latestColumn) : $model::latest();

    if ($limit) {
        return $query->take($limit)->get();
    }
    
    return $query->get();
}, collect(), report: false);

Route::get('/', function () use ($getRecords) {
    return view('home', [
        'portfolios' => $getRecords('portofolios', Portofolio::class, null, 3),
        'clients' => $getRecords('clients', Client::class, null, 8),
        'articles' => $getRecords('beritas', Berita::class, 'tanggal_publikasi', 3),
    ]);
});

Route::get('/portofolio', function () use ($getRecords) {
    return view('portofolio', [
        'portfolios' => $getRecords('portofolios', Portofolio::class)
    ]);
});

Route::get('/berita', function () use ($getRecords) {
    return view('berita', [
        'articles' => $getRecords('beritas', Berita::class, 'tanggal_publikasi')
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
