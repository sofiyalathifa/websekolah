<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'];?></title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <h3>Data Guru</h3>
                <?php foreach ($data['blog'] as $blog) : ?> 
                    <ul>
                        <li><?= $blog['nama']; ?></li>
                        <li><?= $blog['matpel']; ?></li>
                        <li><?= $blog['kode']; ?></li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
