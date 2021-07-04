<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SLIP GAJI</title>
    <style>
        *{
            margin-left: auto;
            margin-right: auto;
            font-family: sans-serif;
        }
    
        table{
            border-collapse: collapse;
        }
    
        table tr td{
            padding:10px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td colspan="3" align="center"><h3>Slip Gaji Karyawan<br></h3><?= $slip->nm_karyawan ?></td>
        </tr>
        <tr>
            <td width="200">Nama Karyawan</td>
            <td>:</td>
            <td>
               <?= $slip->nm_karyawan ?>
            </td>
        </tr>
        <tr>
            <td width="200">Nomor Induk Karyawan</td>
            <td>:</td>
            <td>
                <?= $slip->nik ?>
            </td>
        </tr>
        <tr>
            <td width="200">Jabatan</td>
            <td>:</td>
            <td>
                <?php
                echo $slip->jabatan
                ?>
            </td>
        </tr>
    </table>
    <table border="1" class="table_detail">
        <tr>
            <td align="center">No</td>
            <td width="160" align="center">Keterangan</td>
            <td width="150" align="center">Nominal</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Gaji Pokok</td>
            <td align="right"><?= number_format($slip->gapok); ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jumlah Jam Lembur</td>
            <td align="right"><?= number_format($slip->jam_lembur); ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Uang Lembur</td>
            <td align="right"><?= number_format($slip->uang_lembur); ?> (<?= $slip->jam_lembur ?> Jam)</td>
        </tr>
        <tr>
            <td colspan="2"><strong>TOTAL GAJI</strong></td>
            <td align="right" style="color:green;font-weight:bold">
                @php
                    if($slip->total_gaji == 0){
                        $total_gaji = $slip->gapok;
                    } else $total_gaji = $slip->total_gaji;
                @endphp
                <?= number_format($total_gaji) ?>
            </td>
        </tr>
    </table>
</body>
</html>