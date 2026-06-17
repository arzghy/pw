<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata Diri</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            color: #1a1a1a;
            margin: 40px;
        }

        .judul {
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 30px;
        }

        /* Tabel utama: kolom kiri foto 50%, kolom kanan data 50% */
        .tabel-utama {
            width: 100%;
            border-collapse: collapse;
        }

        .kolom-foto {
            width: 50%;
            vertical-align: top;
            text-align: center;
        }

        .foto-diri {
            width: 180px;
            height: auto;
            border: 1px solid #ccc;
        }

        .kolom-data {
            width: 50%;
            vertical-align: top;
        }

        .item {
            margin-bottom: 18px;
        }

        .label {
            color: #333;
            font-size: 13px;
            margin-bottom: 2px;
        }

        .nilai {
            font-weight: bold;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="judul">Biodata Diri</div>

    <table class="tabel-utama">
        <tr>
            <td class="kolom-foto">
                <img src="{{ public_path('foto.jpg') }}" class="foto-diri" alt="Foto Diri">
            </td>

            <td class="kolom-data">
                <div class="item">
                    <div class="label">Nama</div>
                    <div class="nilai">{{ $biodata->nama }}</div>
                </div>

                <div class="item">
                    <div class="label">NIM</div>
                    <div class="nilai">{{ $biodata->nim }}</div>
                </div>

                <div class="item">
                    <div class="label">Jenis Kelamin</div>
                    <div class="nilai">{{ $biodata->jenis_kelamin }}</div>
                </div>

                <div class="item">
                    <div class="label">Tempat Lahir</div>
                    <div class="nilai">{{ $biodata->tempat_lahir }}</div>
                </div>

                <div class="item">
                    <div class="label">Tanggal Lahir</div>
                    <div class="nilai">{{ $biodata->tanggal_lahir }}</div>
                </div>

                <div class="item">
                    <div class="label">Email</div>
                    <div class="nilai">{{ $biodata->email }}</div>
                </div>

                <div class="item">
                    <div class="label">Telepon</div>
                    <div class="nilai">{{ $biodata->telepon }}</div>
                </div>

                <div class="item">
                    <div class="label">Program Studi</div>
                    <div class="nilai">{{ $biodata->program_studi }}</div>
                </div>
            </td>
        </tr>
    </table>

</body>
</html>