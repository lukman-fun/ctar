<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="text-center">
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>QUESTION</th>
                                <th>FEEDBACK</th>
                                <th>TGL. SUBMIT</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php foreach($data as $i=>$data): ?>
                                <tr>
                                    <td><?= $i+1; ?></td>
                                    <td><?= $data->nama; ?></td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center align-items-center p-2">
                                            <img class="<?= $data->img_post == '' ? 'd-none' : ''; ?>" src="<?= base_url(); ?>files/posting/<?= $data->img_post; ?>" onerror="this.src='<?= base_url(); ?>assets/img/default-image.jpg'" alt="" width="50" height="50">
                                            <span class="ellipse mt-2"><?= $data->artikel_post; ?></span>
                                        </div>
                                    </td>
                                    <td><?= $feedback->valid_feedback($data->id) > 0 ? '<span class="badge badge-success"><i class="fa fa-check mr-2"></i>Sudah</span>' : '<span class="badge badge-danger"><i class="fas fa-close mr-2"></i>Belum</span>'; ?></td>
                                    <td><?= $data->create_at; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?= base_url(); ?>Dashboard/feedback/<?= $data->id; ?>" class="btn btn-sm btn-info shadow">Feedback</a>
                                            <a onclick="return confirm('Apakah anda ingin menghapus postingan ini?')" href="<?= base_url(); ?>Dashboard/hapus/<?= $data->id; ?>" class="btn btn-sm btn-danger shadow">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    
</div>