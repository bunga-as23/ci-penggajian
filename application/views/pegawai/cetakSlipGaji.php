<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        body {
            font-family: Arial;
            color: black;
        }
    </style>
</head>

<body>

    <center>
        <h1>PT. INDONESIA BANGKIT</h1>
        <h2>Slip Gaji Pegawai</h2>
        <hr style="width: 50%; border-width:5px; color:black">
    </center>


    <?php foreach ($potongan as $p) {
        $potongan = $p->jml_potongan;
    } ?>

    <?php
    foreach ($print_slip as $ps) : ?>

        <?php $potongan_gaji = $ps->alpha * $potongan; ?>

        <table style="width: 100%;">
            <tr>
                <td style="width: 20%;">Nama Pegawai</td>
                <td style="width: 2%;">:</td>
                <td><?= $ps->nama_pegawai ?></td>
            </tr>

            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><?= $ps->nik ?></td>
            </tr>

            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?= $ps->nama_jabatan ?></td>
            </tr>

            <tr>
                <td>Bulan</td>
                <td>:</td>
                <td><?= substr($ps->bulan, 0, 2)  ?></td>
            </tr>

            <tr>
                <td>Tahun</td>
                <td>:</td>
                <td><?= substr($ps->bulan, 2, 4)  ?></td>
            </tr>
        </table>

        <table class="table table-bordered table-striped mt-3">
            <tr>
                <th class="text-center" width="5%">No</th>
                <th class="text-center">Keterangan</th>
                <th class="text-center">Jumlah</th>
            </tr>

            <tr>
                <td class="text-center">1</td>
                <td class="text-center">Gaji Pokok</td>
                <td class="text-center">Rp. <?= number_format($ps->gaji_pokok, 0, ',', '.') ?></td>
            </tr>

            <tr>
                <td class="text-center">2</td>
                <td class="text-center">Tunjangan Transport</td>
                <td class="text-center">Rp. <?= number_format($ps->tj_transport, 0, ',', '.') ?></td>
            </tr>

            <tr>
                <td class="text-center">3</td>
                <td class="text-center">Uang Makan</td>
                <td class="text-center">Rp. <?= number_format($ps->uang_makan, 0, ',', '.') ?></td>
            </tr>

            <tr>
                <td class="text-center">4</td>
                <td class="text-center">Potongan</td>
                <td class="text-center">Rp. <?= number_format($potongan_gaji, 0, ',', '.') ?></td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: right;">Total Gaji</td>
                <td><?= number_format($ps->gaji_pokok + $ps->tj_transport + $ps->uang_makan - $potongan_gaji, 0, ',', '.') ?></td>
            </tr>
        </table>

        <table width="100%">
            <tr>
                <td></td>
                <td>
                    <p>Pegawai</p>
                    <br>
                    <br>
                    <p class="font-weight-bold"><?= $ps->nama_pegawai ?></p>
                </td>

                <td width="200px">
                    <p>Jember, <?= date("d M Y") ?> <br> Finance,</p>
                    <br>
                    <br>
                    <p>____________________</p>
                </td>
            </tr>
        </table>

    <?php endforeach; ?>

</body>

</html>

<script>
    window.print();
</script>