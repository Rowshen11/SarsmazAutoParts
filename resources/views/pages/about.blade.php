@extends('layouts.app')

@section('title', 'О компании — AutoPartStore')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-body p-5">
                    <h1 class="mb-4 text-primary text-center">Dükan barada</h1>
                    <p class="lead text-muted">Biz - 2010-njy ýyldan bäri ýokary hilli awtoşaýlar bilen üpjün edýän öňdebarýan üpjün edijileriň biri bolup durýarys. Biziň maksadymyz - siziň awtoulagyňyzyň ygtybarlygyny üpjün etmek.</p>
                    
                    <hr class="my-4">

                    <div class="row g-4">
                        <div class="col-md-6">
                            <h5><i class="bi bi-person-badge me-2"></i>Ýolbaşçy</h5>
                            <p class="text-secondary mb-0">Esasy ýerine ýetirji:</p>
                            <p class="fw-bold">Rejepow Röwşen Bazarbaýewiç</p>
                        </div>
                        <div class="col-md-6">
                            <h5><i class="bi bi-telephone me-2"></i>Kontaktlar</h5>
                            <p class="text-secondary mb-0">Telefon:</p>
                            <p class="fw-bold">+993 65-65-65-65</p>
                        </div>
                        <div class="col-md-6">
                            <h5><i class="bi bi-envelope me-2"></i>Elektron poçta</h5>
                            <p class="text-secondary mb-0">Soraglar uçin:</p>
                            <a href="mailto:info@autopartstore.ru" class="text-decoration-none fw-bold">sarsmazautoparts@gmail.com</a>
                        </div>
                        <div class="col-md-6">
                            <h5><i class="bi bi-geo-alt me-2"></i>Biziň adresimiz</h5>
                            <p class="text-secondary mb-0">Esasy dükan:</p>
                            <p class="fw-bold">Dükan №14,'Güneş' söwda merkezi, Büzmeýin etr. Aşgabat ş. 42</p>
                        </div>
                    </div>

                    <div class="mt-5 p-3 bg-light rounded">
                        <p class="mb-0 small text-muted">
                            <i class="bi bi-clock me-2"></i>Iş tertibi: Duşenbe-Şenbe  8:00-den 19:00-a çenli, Ýekşenbe — dynç.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection