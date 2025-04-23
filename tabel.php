<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 Tabel</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h2>Daftar Nilai Mahasiswa</h2>
        <table border="2">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NPM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Nilai</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'logika2.php'; ?>
            </tbody>
        </table>
    </div>
</body>
</html>