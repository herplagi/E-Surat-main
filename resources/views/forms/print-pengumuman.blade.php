<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="text-center" style="text-decoration: underline;">PENGUMUMAN</h4>
                    <p style="text-align: center;">{{ 'No ' . $pengumuman->nomor_urut. '/' . $pengumuman->initial_unit . '/' . 'PUM' . '/' .  \Carbon\Carbon::parse($pengumuman->letter_date)->translatedFormat('m/Y') }}</p>
                    <br>
                    <br>
                    <br>
                    <p>{{$pengumuman->isi_pengumuman}}</p>
                    <br>
                    <br>
                    <br>
                    <table class="signature-table">
                        <tr>
                            <td>Dikeluarkan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;Padang</td>
                        </tr>
                        <tr>
                            <td>Pada Tanggal&nbsp;&nbsp;:&nbsp;{{ \Carbon\Carbon::parse($pengumuman->letter_date)->translatedFormat('d F Y')}}</td>
                        </tr>
                        <tr>
                            <td>Koperasi Keluarga Besar Semen Padang</td>
                        </tr>   
                    </table>
                    <br>
                    <br>
                    <br>
                    <br>
                    <table class="signature-table">
                        <tr>
                            <td>{{$pengumuman->nama_terang}}</td>
                        </tr>
                        <tr>
                            <td>{{'Kepala ' . $pengumuman->jabatan}}</td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <br>
                    <p>{{'FRL/FAZ/RAF/RI/' . $pengumuman->initial_pimpinan . '/' . $pengumuman->initial_pengetik . '/' . $pengumuman->kode_klasifikasi}}</P>
                </div>
            </div>
        </div>
    </section>
    <script>
        window.print();
        window.onafterprint = window.close;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        h4, h5 {
            font-size: 14px;
            font-weight: bold;
        }
        @page {
            size: A4; 
            margin-top: 3cm;
            margin-left: 4cm;
            margin-bottom: 3cm;
            margin-right: 3cm; 
        }
        p {
            text-align: justify;
        }
    </style>
    
</body>

</html>
