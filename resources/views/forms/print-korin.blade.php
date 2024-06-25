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
                    <h4 class="text-center" style="text-decoration: underline; margin-top: 1px; margin-bottom: 1px;">KORIN KKSP</h4>
                    <p style="text-align: center; margin-top: 1px; margin-bottom: 1px;">{{ 'No ' . $korin->nomor_urut. '/' . $korin->initial_unit . '/' .  \Carbon\Carbon::parse($korin->letter_date)->translatedFormat('m.Y') }}</p>
                    <br>
                    <br>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Kepada Yth.<span style="margin-left:25px;">: </span>{{$korin->yang_dituju}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px; white-space: pre-wrap;">Tembusan<span style="margin-left:35px;">: </span>{{$korin->tembusan}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Dari<span style="margin-left:68px;">: </span>{{$korin->dari}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px; white-space: pre-wrap;">Hal<span style="margin-left:72px;">: </span>{{$korin->hal}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Sifat<span style="margin-left:66px;">: </span>{{$korin->sifat}}</p>
                    <hr style=" border-bottom: 2px solid black; margin-top: 20px; margin-bottom: 20px;">
                    <p style="margin-top: 1px; margin-bottom: 1px;">Dengan Hormat,</p>
                    <br>
                    <p style="margin-top: 1px; margin-bottom: 1px; white-space: pre-wrap;">{{$korin->isi_korin}}</p>
                    <br>
                    <p style="margin-top: 1px; margin-bottom: 1px;">Demikian disampaikan, atas perhatian dan kerjasamanya diucapkan terimakasih.</p>
                    <br>
                    <p style="margin-top: 1px; margin-bottom: 1px;  font-weight: bold;">{{'Padang, ' . \Carbon\Carbon::parse($korin->letter_date)->translatedFormat('d l Y')}}</p>
                    <br>
                    <br>
                    <p style="margin-top: 1px; margin-bottom: 1px; text-decoration: underline;  font-weight: bold;">{{$korin->yg_ttd}}</p>
                    <p style="margin-top: 1px; margin-bottom: 1px;">{{$korin->jabatan}}</p>
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
        .output-box {
            padding: 5px;
            width: 200px; /* Sesuaikan dengan lebar yang diinginkan */
        }
    </style>
    
</body>

</html>
