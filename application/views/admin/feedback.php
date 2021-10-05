<div class="row d-flex justify-content-center">
    <div class="col-12 col-md-8 mt-4">
        <div class="card" style="border-radius: 10px; box-shadow: 1px 1px 10px #DDDDDD; outline: none; border: none;">
            <img class="card-img-top <?= $data->img_post == '' ? 'd-none' : ''; ?>" style="border-radius: 10px 10px 0px 0px;" src="<?= base_url(); ?>files/posting/<?= $data->img_post; ?>" onerror="this.src='<?= base_url(); ?>assets/img/default-image.jpg'" alt="Card image cap">
            <div class="card-body">
                <div class="d-flex">
                    <img src="<?= base_url(); ?>files/profile/<?= $data->foto; ?>" onerror="this.src='<?= base_url(); ?>assets/img/avatar.png'" width="50" height="50" style="border-radius: 100%;">
                    <div class="ml-3">
                        <span class="font-weight-bold d-block"><?= $data->nama. ' - ' . $data->pendidikan; ?></span>
                        <span style="font-size: .8rem;"><?= $data->create_at; ?></span>
                    </div>
                </div>
                <div class="mt-3">
                    <?= $data->artikel_post; ?>
                </div>
                <hr>
                <?php foreach($komen as $itemKomen): ?>
                    <div class="d-flex my-2">
                        <div style="margin: 0px 10px 0px 0px; flex: l;">
                            <img src="<?= base_url(); ?>files/profile/<?= $itemKomen->foto; ?>" onerror="this.src='<?= base_url(); ?>assets/img/avatar.png'" width="30" height="30" style="border-radius: 100%;">
                        </div>
                        <div class="form-group p-2" style="flex: 9; background-color: rgba(0,0,0,.09); border-radius: 0px 15px 15px 15px;">
                            <span class="d-block font-weight-bold"><?= $itemKomen->nama . ' - ' .$itemKomen->pendidikan; ?></span>
                            <span class="d-block"><?= $itemKomen->teks_komentar; ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
                <form action="<?= base_url(); ?>Dashboard/add_feedback" method="POST" class="d-flex mt-2">
                    <div style="margin: 0px 10px 0px 0px; flex: l;">
                        <img src="<?= base_url(); ?>files/profile/<?= $this->session->foto_admin; ?>" onerror="this.src='<?= base_url(); ?>assets/img/avatar.png'" width="30" height="30" style="border-radius: 100%;">
                    </div>
                    <div class="form-group" style="flex: 8;">
                        <input type="hidden" name="users_id" value="<?= $this->session->id_admin; ?>">
                        <input type="hidden" name="posting_id" value="<?= $data->postingId; ?>">
                        <input type="text" name="teks_komentar" id="" class="form-control" placeholder="Tulis komentar">
                    </div>
                    <div style="margin: 0px 0px 0px 10px; flex: l;">
                        <input type="submit" class="btn btn-primary" value="Komentar">
                    </div>
                </form >
            </div>
        </div>
    </div>
</div>