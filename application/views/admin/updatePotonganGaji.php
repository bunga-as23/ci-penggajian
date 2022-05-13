<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

    <div class="card">
        <div class="card-body">

            <form action="<?= base_url() . 'admin/potonganGaji/updateDataAksi' ?>" enctype="multipart/form-data" method="post">

                <?php foreach ($pot_gaji as $p) : ?>

                    <div class="form-group">
                        <label>Jenis Potongan</label>
                        <input type="hidden" name="id" class="form-control" value="<?= $p->id ?>">
                        <input type="text" name="potongan" class="form-control" value="<?= $p->potongan ?>">
                        <?= form_error('potongan', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Jumlah Potongan</label>
                        <input type="number" name="jml_potongan" class="form-control" value="<?= $p->jml_potongan ?>">
                        <?= form_error('jml_potongan', '<div class="text-small text-danger"></div>') ?>
                    </div>

                <?php endforeach; ?>

                <button type="submit" class="btn btn-primary">Update</button>

            </form>

        </div>
    </div>

</div>