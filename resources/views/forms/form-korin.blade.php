<div class="container">
    <form method="post" action="{{ route('korin.store') }}" target="_blank">
        @csrf
        <div style="margin-top: 20px;"></div>
        <div class="mb-3 row ">
            <label for="nomor_urut" class="col-sm-3 col-form-label">Nomor Urut</label>
            <div class="col-sm-9">
                <input type="text" class="form-control " name="nomor_urut" placeholder="Nomor Urut.." required>
            </div>
            @error('nomor_urut')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="selected">
            <label class="labelSelected">Unit Kerja Pengolah</label>
            <div class="selec">
            <select name="initial_unit" class="kolomSelected" required>
                <option selected disabled></option>
                <option value="KKSP">KKSP</option>
                <option value="DKM">DIVISI KOMERSIL</option>
                <option value="DKMVU">Unit VARIA USAHA</option>
                <option value="DKMTO">Unit TOSERBA</option>
                <option value="DKMPBM">Unit PBM</option>
                <option value="DKMSUP">Unit SUPPLIER & KONTRAKTOR / DKMSUP</option>
                <option value="DKMKONT">Unit SUPPLIER & KONTRAKTOR / DKMKONT</option>
                <option value="DKMP">Unit PEMBELIAN</option>
                <option value="DKS">DIVISI KEUANGAN & SDM</option>
                <option value="DKSSDM">Unit SDM</option>
                <option value="DKSPBU">Unit SPBU</option>
                <option value="DKSAP">Unit AKUNTANSI & PAJAK</option>
                <option value="DKSKEU">Unit KEUANGAN</option>
                <option value="DKSSP">Unit SIMPAN PINJAM</option>
                <option value="DDT">DIVISI DISTRIBUSI & TRANSPORTASI</option>
                <option value="DDTDR">Unit DISTRIBUSI</option>
                <option value="DDTTR">Unit TRANSPORTASI</option>
                <option value="DOP">DIVISI OPERASIONAL</option>
                <option value="DOPUM">Unit UMUM & LEGAL</option>
                <option value="DOPPKT">Unit PAB.KANTONG</option>
                <option value="DOPGDG">Unit GUDANG</option>
                <option value="DOPK3">Unit SMK3</option>
                <option value="DPI">DIVISI SPI</option>
                <option value="DPIPO">Unit PENGAWAS OPERASIONAL</option>
                <option value="DPIKAD">Unit PENGAWAS KEU & ADM</option>
            </select>
            </div>
            @error('initial_unit')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="letter_date" class="col-sm-3 col-form-label">Tanggal Surat</label>
            <div class="col-sm-9">
                <input type="date"
                    class="form-control @error('letter_date') is-invalid @enderror"
                    value="{{ old('letter_date') }}" name="letter_date" required>
            </div>
            @error('letter_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="yang_dituju" class="col-sm-3 col-form-label">Orang Yang Dituju</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="yang_dituju" placeholder="Orang yang dituju..." required>
            </div>
            @error('yang_dituju')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="tembusan" class="col-sm-3 col-form-label">Tembusan</label>
            <div class="col-sm-9">
                <input class="form-control" name="tembusan" placeholder="Tembusan..." required></input>
            </div>
            @error('tembusan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="mb-3 row ">
            <label for="dari" class="col-sm-3 col-form-label">Dari</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="dari" placeholder="Dari..." required>
            </div>
            @error('dari')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="hal" class="col-sm-3 col-form-label">Hal</label>
            <div class="col-sm-9">
                <input class="form-control" name="hal" placeholder="Hal..." required></input>
            </div>
            @error('hal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="mb-3 row ">
            <label for="sifat" class="col-sm-3 col-form-label">Sifat</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="sifat" placeholder="Sifat..." required>
            </div>
            @error('sifat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="isi_korin" class="col-sm-3 col-form-label">Isi Korin</label>
            <div class="col-sm-9">
                <input class="form-control" name="isi_korin" placeholder="Isi Korin..." required></input>
            </div>
            @error('isi_korin')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="mb-3 row ">
            <label for="yg_ttd" class="col-sm-3 col-form-label">Yang Menandatangani</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="yg_ttd" placeholder="Yang Menandatangani..." required>
            </div>
            @error('tg_ttd')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row ">
            <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="jabatan" placeholder="Jabatan..." required>
            </div>
            @error('jabatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="letter_file" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
                <button class="btn btn-primary" type="submit">Cetak</button>
            </div>
        </div>
    </form>
</div>

@push('addon-style')
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <style>
        .selected {
            display: flex;
            align-items: center;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .selected .labelSelected {
            color: #495057;
            margin-right: 10px;
            flex: 1; /* Memberikan ruang fleksibel pada label untuk menyesuaikan lebar */
        }

        .selected .selec {
            flex: 3; /* Mengubah nilai flex untuk memperpanjang kolom input ke kiri */
        }

        .selected .selec select {
            width: 100%;
            height: 45px;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .selected .selec select:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .selected .invalid-feedback {
            display: block;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 80%;
            color: #dc3545;
        }
    </style>

@endpush

@push('addon-script')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(".selectx").select2({
            theme: "bootstrap-5"
        });
    </script>
@endpush