<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body onload="window.print()">
    <table style="width: 100%;text-align: center;font-size: xx-large;font-weight: bold;">
    <tr>
        <td>DAFTAR CABANG OLAHRAGA</td>
    </tr>
    </table>
    <table style="width: 100%;" border="1" >
        <tr>
            <td>No</td>
            <td>Cabang Olah Raga</td>
            <td>Jumlah Atlet</td>
        </tr>
        <?php $no = 1;foreach ($cabang as $item): ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$item->nama_cabang_olahraga?></td>
            <td><?=$item->jumlah_atlet?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>
