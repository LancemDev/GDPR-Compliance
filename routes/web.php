<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\ConsentManagement;
use App\Livewire\PrivacyPolicy;
use App\Livewire\RiskAssessment;
use App\Livewire\DataMapping;
use App\Livewire\DataSubjectsRequests;
use App\Livewire\IncidentResponse;

use App\Livewire\Home;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/consent-management', ConsentManagement::class)->name('consent-management');
    Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy-policy');
    Route::get('/risk-assessment', RiskAssessment::class)->name('risk-assessment');
    Route::get('/data-mapping', DataMapping::class)->name('data-mapping');
    Route::get('/data-subjects-requests', DataSubjectsRequests::class)->name('data-subjects-requests');
    Route::get('/incident-response', IncidentResponse::class)->name('incident-response');
});

Route::get('/logout', function () {
    auth()->logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout');
