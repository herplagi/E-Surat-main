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
                    <div class="text-center">
                        <table>
                            <tr class="block">
                                <td style="padding-right: 25px;"><img src="{{ asset('images/logo.png') }}" alt="Logo" width="90px" height="90px"></td>
                                <td class="judul">
                                    <h5>KOPERASI KELUARGA BESAR SEMEN PADANG</h5>
                                    <p style="margin-top: 1px; margin-bottom: 1px;">Kompleks PT. SEMEN PADANG Indarung - 25237</p>
                                    <p style="margin-top: 1px; margin-bottom: 1px;">Telp. (0751) 777987 - 202532 - 202766 Fax. (0751) 777903
                                </td>
                                <td class="banker" >
                                    <h6 style="margin-bottom: 1px;">BANKER :</h6>
                                    <p style="margin-top: 1px; margin-bottom: 1px;">&nbsp;-&nbsp;MANDIRI Cabang Indarung</p>
                                    <p style="margin-top: 1px; margin-bottom: 1px;">&nbsp;-&nbsp;NAGARI Padang-Indarung</p>
                                    <p style="margin-top: 1px; margin-bottom: 1px;">&nbsp;-&nbsp;BNI 46 Padang</p>
                                    <p style="margin-top: 1px; margin-bottom: 1px;">&nbsp;-&nbsp;BUKOPIN Padang</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <h4 class="text-center" style="text-decoration: underline; margin-top: 20px;">KETERANGAN</h4>
                    <p style="text-align: center;">{{ 'No ' . $keterangan->nomor_urut. '/' . $keterangan->initial_unit . '/' . 'KET' . '/' .  \Carbon\Carbon::parse($keterangan->letter_date)->format('m/Y') }}</p>
                    <br>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Saya yang bertanda tangan di bawah ini :</p>
                    <p style="margin-top: 1px; margin-bottom: 1px; margin-left:15px;">Nama<span style="margin-left:37px;">: </span>{{$keterangan->nama_yang_bertandatangan}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px; margin-left:15px;">Jabatan<span style="margin-left:27px;">: </span>{{$keterangan->jabatan}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px; margin-left:15px;">Perusahaan<span style="margin-left:5px;">: </span>{{$keterangan->perusahaan}}</p>
                    <br>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Dengan ini menerangkan bahwa :</p>
                    <p style="margin-top: 1px; margin-bottom: 1px; margin-left:15px;">Nama<span style="margin-left:37px;">: </span>{{$keterangan->nama_yang_diterangka}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px; margin-left:15px;">Nip<span style="margin-left:51px;">: </span>{{$keterangan->nip}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px; margin-left:15px;">Alamat<span style="margin-left:32px;">: </span>{{$keterangan->alamat}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px; margin-left:15px;">Unit Kerja<span style="margin-left:16px;">: </span>{{$keterangan->unit_kerja}}</p>
                    <br>
                    <p style="margin-top: 1px; margin-bottom: 1px;">{{$keterangan->isi_keterangan}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Surat keterangan ini dibuat untuk dapat digunakan seperlunya.</p>
                    <br>
                    <p style="margin-top: 1px; margin-bottom: 1px;">{{'Padang, ' . \Carbon\Carbon::parse($keterangan->letter_date)->format('d l Y')}}.</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Koperasi Keluarga Besar Seemen Padang</p>
                    <br>
                    <br>
                    <p style="margin-top: 1px; margin-bottom: 1px; font-weight: bold; text-decoration: underline;">{{$keterangan->nama_yang_bertandatangan}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px; ">{{$keterangan->jabatan}}</p>
                    <br>
                    <br>
                    <p>{{'FRL/FAZ/RAF/RI/' . $keterangan->initial_pimpinan . '/' . $keterangan->initial_pengetik . '/' . $keterangan->kode_klasifikasi}}</P>
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
        .text-center table {
            width: 100%;
            border-bottom: 1px solid #000;
        }

        .text-center td {
            padding: 10px; /* Atur sesuai kebutuhan jarak antar sel */
        }

        .text-center h5, .text-center p {
            margin: 5px 0; /* Atur sesuai kebutuhan baris antar paragraf */
        }
        .text-center h5{
            font-size: 16px;
            margin-bottom: 10px;
        }
        .text-center h6{
            font-size: 8px;
            font-weight: bold;
            text-align: justify;
        }
        .text-center p {
            font-size: 8px;/* Atur sesuai kebutuhan baris antar paragraf */
        }
        .text-center .block .judul p {
            text-align: center;
        }
        .text-center .block .banker p {
            text-align: left;
            white-space: nowrap;
        }
        .text-center .block .banker{
            padding-top: 26px;
        }


    </style>
    
</body>

</html>
