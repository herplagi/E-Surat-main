<!-- resources/views/pages/admin/letter/buat-surat.blade.php -->

@extends('layouts.admin')

@section('title')
    Buat Surat
@endsection

@section('container')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-fluid px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="file-text"></i></div>
                                Buat Surat
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="jenisSuratTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="beritaAcara-tab" data-bs-toggle="tab" href="#beritaAcara" role="tab"
                                aria-controls="beritaAcara" aria-selected="true">Berita Acara</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="korin-tab" data-bs-toggle="tab" href="#korin" role="tab"
                                aria-controls="korin" aria-selected="false">Korin</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="kre-tab" data-bs-toggle="tab" href="#kre" role="tab"
                                aria-controls="kre" aria-selected="false">KRE</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pengumuman-tab" data-bs-toggle="tab" href="#pengumuman" role="tab"
                                aria-controls="pengumuman" aria-selected="false">Pengumuman</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="keterangan-tab" data-bs-toggle="tab" href="#keterangan" role="tab"
                                aria-controls="keterangan" aria-selected="false">Keterangan</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="undanganRapat-tab" data-bs-toggle="tab" href="#undanganRapat" role="tab"
                                aria-controls="undanganRapat" aria-selected="false">Undangan Rapat</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="jenisSuratTabsContent">
                        <div class="tab-pane fade show active" id="beritaAcara" role="tabpanel" aria-labelledby="beritaAcara-tab">
                            <!-- Isi untuk Jenis Surat Berita Acara -->
                            @include('forms.form-berita-acara')
                        </div>
                        <div class="tab-pane fade" id="korin" role="tabpanel" aria-labelledby="korin-tab">
                            <!-- Isi untuk Jenis Surat Instruksi -->
                            @include('forms.form-korin')
                        </div>
                        <!-- Tambahkan tab pane untuk jenis surat yang lain -->
                        <!-- ... -->
                        <div class="tab-pane fade" id="kre" role="tabpanel" aria-labelledby="kre-tab">
                            <!-- Isi untuk Jenis Surat Instruksi -->
                            @include('forms.form-kre')
                        </div>
                        <div class="tab-pane fade" id="pengumuman" role="tabpanel" aria-labelledby="pengumuman-tab">
                            <!-- Isi untuk Jenis Surat Instruksi -->
                            @include('forms.form-pengumuman')
                        </div>
                        <div class="tab-pane fade" id="keterangan" role="tabpanel" aria-labelledby="keterangan-tab">
                            <!-- Isi untuk Jenis Surat Instruksi -->
                            @include('forms.form-keterangan')
                        </div>
                        <div class="tab-pane fade" id="undanganRapat" role="tabpanel" aria-labelledby="undanganRapat-tab">
                            <!-- Isi untuk Jenis Surat Undangan Rapat -->
                            @include('forms.form-undangan-rapat')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('addon-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="path/to/your/custom/style.css" />
    <!-- Tambahkan link style tambahan jika diperlukan -->
    <!-- ... -->
@endpush

@push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="path/to/your/custom/script.js"></script>
    <!-- Tambahkan script tambahan jika diperlukan -->
    <!-- ... -->
@endpush
