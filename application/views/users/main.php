    <?php include("menu.php"); ?>
    <!-- Content -->
    <div class="container my-4">
        <div class="row d-flex justify-content-center">
            <!-- Input Post -->
            <div class="col-12 col-md-8">
                <div class="card" style="border-radius: 10px; box-shadow: 1px 1px 10px #DDDDDD; outline: none; border: none;">
                    <div class="card-body">
                        <form action="<?= base_url(); ?>Main/add_artikel" method="POST" enctype="multipart/form-data" class="d-flex" style="margin-bottom: -15px;">
                            <div style="margin: 5px 10px 0px 0px; flex: l;">
                                <img src="<?= base_url(); ?>files/profile/<?= $this->session->foto; ?>" onerror="this.src='<?= base_url(); ?>assets/img/avatar.png'" width="50" height="50" style="border-radius: 100%;">
                            </div>
                            <div class="input-group mb-3" style="flex: 8;">
                                <div class="input-group-prepend">
                                    <img class="image-post" src="" onerror="this.src='<?= base_url(); ?>assets/img/default-image.jpg'">
                                    <input type="file" name="img_post" id="file-image-post" hidden>
                                </div>
                                <textarea class="form-control" name="artikel_post" placeholder="Tulis disini"></textarea>
                            </div>
                            <div style="margin: 10px 0px 0px 10px; flex: l;">
                                <input type="submit" class="btn btn-primary" value="Publish">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- List Post -->
            <?php foreach($data as $data): ?>
                <div class="col-12 col-md-8 mt-4">
                    <div class="card" style="border-radius: 10px; box-shadow: 1px 1px 10px #DDDDDD; outline: none; border: none;">
                        <img class="card-img-top <?= $data->img_post == '' ? 'd-none' : ''; ?>" style="border-radius: 10px 10px 0px 0px;" src="<?= base_url(); ?>files/posting/<?= $data->img_post; ?>" onerror="this.src='<?= base_url(); ?>assets/img/default-image.jpg'" alt="Card image cap">
                        <div class="card-body">
                            <div class="d-flex">
                                <img src="<?= base_url(); ?>files/profile/<?= $data->foto; ?>" onerror="this.src='<?= base_url(); ?>assets/img/avatar.png'" width="50" height="50" style="border-radius: 100%;">
                                <div class="ml-3">
                                    <span class="font-weight-bold d-block"><?= $data->nama. ' - ' . $data->pendidikan; ?></span>
                                    <span style="font-size: .8rem;"><?= $data->create_at; ?></span>
                                    <?php if($data->usersId == $this->session->id): ?>
                                        <a onclick="return confirm('Apakah anda ingin menghapus postingan ini?')" href="<?= base_url(); ?>Main/hapus/<?= $data->postingId; ?>">Hapus</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="mt-3">
                                <?= $data->artikel_post; ?>
                            </div>
                            <hr>
                            <?php foreach($data->komentar as $itemKomen): ?>
                                <div class="d-flex">
                                    <div style="margin: 0px 10px 0px 0px; flex: l;">
                                        <img src="<?= base_url(); ?>files/profile/<?= $itemKomen->foto; ?>" onerror="this.src='<?= base_url(); ?>assets/img/avatar.png'" width="30" height="30" style="border-radius: 100%;">
                                    </div>
                                    <div class="form-group p-2" style="flex: 9; background-color: rgba(0,0,0,.09); border-radius: 0px 15px 15px 15px;">
                                        <span class="d-block font-weight-bold"><?= $itemKomen->nama . ' - ' .$itemKomen->pendidikan; ?></span>
                                        <span class="d-block"><?= $itemKomen->teks_komentar; ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <form action="<?= base_url(); ?>Main/add_komentar" method="POST" class="d-flex">
                                <div style="margin: 0px 10px 0px 0px; flex: l;">
                                    <img src="<?= base_url(); ?>files/profile/<?= $this->session->foto; ?>" onerror="this.src='<?= base_url(); ?>assets/img/avatar.png'" width="30" height="30" style="border-radius: 100%;">
                                </div>
                                <div class="form-group" style="flex: 8;">
                                    <input type="hidden" name="users_id" value="<?= $this->session->id; ?>">
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
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        let isSidebar = false;
        $(".sidebar-room-toggle-button").click(function(e){
            e.preventDefault();
            if(isSidebar){
                $(".sidebar-room").css({"-ms-transform" : "translate(-90%)", "transform" : "translate(-90%)"});
                isSidebar = false;
            }else{
                $(".sidebar-room").css({"-ms-transform" : "translate(0%)", "transform" : "translate(0%)"});
                isSidebar = true;
            }
        })

        $(".image-post").click(function(e){
            e.preventDefault();
            $("#file-image-post").click();
        });

        $("#file-image-post").change(function(e){
            e.preventDefault();
            if (e.target.files && e.target.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (es) {
                    $('.image-post').attr('src', es.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            }
        });
    </script>
  </body>
</html>