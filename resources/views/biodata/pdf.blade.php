<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata Diri</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            font-size: 16px;
            color: black;
            margin: 30px;
        }
        
        .judul {
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
        }

        hr {
            border: none;
            border-top: 1px solid black;
            margin-bottom: 25px;
        }

        /* Tabel Utama untuk membagi layout Kiri (Foto) dan Kanan (Data) */
        .tabel-utama {
            width: 100%;
            border-collapse: collapse;
        }

        /* Pengaturan Kolom Kiri (FOTO) */
        .kolom-foto {
            width: 25%;
            vertical-align: top;
            text-align: center;
        }
        
        .foto-diri {
            width: 130px;
            height: 170px;
            object-fit: cover;
            border: 1px solid black; /* Bingkai foto */
        }

        /* Pengaturan Kolom Kanan (DATA) */
        .kolom-data {
            width: 75%;
            vertical-align: top;
        }

        /* Pengaturan Tabel Data Diri agar rapi */
        .tabel-data {
            width: 100%;
            border-collapse: collapse;
        }
        
        .tabel-data td {
            padding: 6px 0;
            vertical-align: top;
        }

        .label {
            width: 30%;
        }
        .titikdua {
            width: 3%;
            text-align: center;
        }
        .nilai {
            width: 67%;
        }
    </style>
</head>
<body>

    <div class="judul">BIODATA MAHASISWA</div>
    <hr>

    <table class="tabel-utama">
        <tr>
            <td class="kolom-foto">
                <img src="{{ public_path('foto.jpg') }}" class="foto-diri" alt="Foto Diri">
            </td>

            <td class="kolom-data">
                <table class="tabel-data">
                    <tr>
                        <td class="label">Nama Lengkap</td>
                        <td class="titikdua">:</td>
                        <td class="nilai">{{ $biodata->nama }}</td>
                    </tr>
                    <tr>
                        <td class="label">NIM</td>
                        <td class="titikdua">:</td>
                        <td class="nilai">{{ $biodata->nim }}</td>
                    </tr>
                    <tr>
                        <td class="label">Jenis Kelamin</td>
                        <td class="titikdua">:</td>
                        <td class="nilai">{{ $biodata->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <td class="label">Tempat Lahir</td>
                        <td class="titikdua">:</td>
                        <td class="nilai">{{ $biodata->tempat_lahir }}</td>
                    </tr>
                    <tr>
                        <td class="label">Tanggal Lahir</td>
                        <td class="titikdua">:</td>
                        <td class="nilai">{{ $biodata->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <td class="label">Program Studi</td>
                        <td class="titikdua">:</td>
                        <td class="nilai">{{ $biodata->program_studi }}</td>
                    </tr>
                    <tr>
                        <td class="label">Email</td>
                        <td class="titikdua">:</td>
                        <td class="nilai">{{ $biodata->email }}</td>
                    </tr>
                    <tr>
                        <td class="label">No. Telepon</td>
                        <td class="titikdua">:</td>
                        <td class="nilai">{{ $biodata->telepon }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</body>
</html>