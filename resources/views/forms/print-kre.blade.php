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
                                <td style="padding-right: 25px;"><img src="{{ asset('images/logo.png') }}" alt="Logo" width="80px" height="80px"></td>
                                <td class="judul">
                                    <h4>KOPERASI KELUARGA BESAR SEMEN PADANG</h4>
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
                    <div class="pengenal">
                        <table>
                            <tr class="no">
                                <td>
                                    <p style="margin-top: 1px; margin-bottom: 1px;">No<span style="margin-left:35px;">: </span>{{$kre->nomor_urut . '/KRE' . '/' . $kre->initial_unit . '/' . \Carbon\Carbon::parse($kre->letter_date)->translatedFormat('m/Y')}}</p>
                                    <p style="margin-top: 1px; margin-bottom: 1px;">Lampiran<span style="margin-left:3px;">: </span>{{$kre->lampiran}}</p>
                                    <p style="margin-top: 1px; margin-bottom: 1px; ">Hal<span style="margin-left:32.5px;">: </span><span style="font-weight: bold; text-decoration: underline;">{{$kre->hal}}</span><p>
                                </td>
                                <td>
                                    <p style="margin-left:140px; margin-bottom: 55px;">Padang, {{\Carbon\Carbon::parse($kre->tanggal_surat)->translatedFormat('d F Y')}}</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Kepada Yth,</p>
                    <p style="margin-top: 1px; margin-bottom: 1px; font-weight: bold; ">{{$kre->penerima_undangan}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Di</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">{{$kre->alamat_penerima}}</p>
                    <br>
                    <p>Dengan hormat,</p>
                    <p>{{$kre->isi_surat}}, maka dengan ini kami mengharapkan kehadiran Bapak untuk dapat memberikan arahan dan pemahaman kepada kami pada :</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Hari/Tanggal<span style="margin-left:3px;">: </span>{{\Carbon\Carbon::parse($kre->letter_date)->translatedFormat('l/ d F Y')}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Waktu<span style="margin-left:35px;">: </span>{{$kre->waktu}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Tempat<span style="margin-left:30px;">: </span>{{$kre->tempat}}</p>
                    <p style="margin-top: 15px;">Demikianlah undangan ini disampaikan. Atas perhatian dan kerjasama Bapak, kami ucapkan terima kasih.</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Hormat kami,</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Koperasi Keluarga Besar Semen Padang</p>
                    <br>
                    <br>
                    <p style="margin-top: 1px; margin-bottom: 1px; font-weight: bold; text-decoration: underline;">{{$kre->nama_pengirim}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">{{$kre->jabatan_pengirim}}</p>
                    <br>
                    <br>
                    <p>{{'FRL/FAZ/RAF/RI/' . $kre->initial_pimpinan . '/' . $kre->initial_pengetik . '/' . $kre->kode_klasifikasi}}</P>
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
            font-family: 'Times New Roman', Times, serif;
            font-size: 12px;
        }
        h4{
            font-family: Arial, sans-serif;
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
            font-family: Arial, sans-serif;
            width: 100%;
            border-bottom: 1px solid #000;
            border-bottom: 1px solid #000;
        }

        .text-center td {
            padding: 10px; /* Atur sesuai kebutuhan jarak antar sel */
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
        .pengenal{
            text-align: justify;
        }


    </style>
    
</body>

</html>
