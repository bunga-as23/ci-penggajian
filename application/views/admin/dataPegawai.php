<div class="container-fluid" style="margin-bottom: 100px;">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>


    <a class="btn btn-sm btn-success mb-3 mt-3" href="<?= base_url('admin/dataPegawai/tambahData') ?>"><i class="fas fa-plus"></i> Tambah Pegawai</a>

    <?= $this->session->flashdata('pesan'); ?>


    <table class="table table-bordered table-striped">
        <tr>
            <th class="text-center">Nomor</th>
            <th class="text-center">NIK</th>
            <th class="text-center">Nama Pegawai</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Jabatan</th>
            <th class="text-center">Tanggal Masuk</th>
            <th class="text-center">Status</th>
            <th class="text-center">Photo</th>
            <th class="text-center">Hak Akses</th>
            <th class="text-center">Action</th>
        </tr>
        <?php $no = 1;
        foreach ($pegawai as $p) : ?>
            <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td class="text-center"><?= $p->nik ?></td>
                <td class="text-center"><?= $p->nama_pegawai ?></td>
                <td class="text-center"><?= $p->jenis_kelamin ?></td>
                <td class="text-center"><?= $p->jabatan ?></td>
                <td class="text-center"><?= $p->tanggal_masuk ?></td>
                <td class="text-center"><?= $p->status ?></td>
                <td class="text-center"><img src="<?= base_url() . 'assets/photo/' . $p->photo ?>" width="75px"></td>
                <?php if ($p->hak_akses == '1') { ?>
                    <td class="text-center">Admin</td>
                <?php } else {  ?>
                    <td class="text-center">Pegawai</td>
                <?php } ?>


                <td class="text-center">
                    <a class="btn btn-sm btn-primary" href="<?= base_url('admin/dataPegawai/updateData/' . $p->id_pegawai) ?>"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/dataPegawai/deleteData/' . $p->id_pegawai) ?>"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>