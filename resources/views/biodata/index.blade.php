<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>UAS Praktikum Web</title>
    <style>
        body { font-family: Arial; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f9; }
        .btn { padding: 12px 24px; text-decoration: none; border-radius: 5px; color: white; margin: 10px; font-weight: bold; }
        .btn-pdf { background-color: #3b82f6; } /* Warna Biru */
        .btn-excel { background-color: #10b981; } /* Warna Hijau */
    </style>
</head>
<body>
    <div>
        <a href="{{ route('biodata.pdf') }}" target="_blank" class="btn btn-pdf">Lihat PDF</a>
        <a href="{{ route('biodata.excel') }}" class="btn btn-excel">Unduh Excel</a>
    </div>
</body>
</html>