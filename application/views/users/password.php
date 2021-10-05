<?php include("menu.php"); ?>

<!-- Content -->
<div class="container my-4">
    <div class="row d-flex justify-content-center">
        <!-- Input Post -->
        <div class="col-12 col-md-8">
            <div class="card" style="border-radius: 10px; box-shadow: 1px 1px 10px #DDDDDD; outline: none; border: none;">
                <div class="card-body">
                    <h5>Pengaturan Password</h5>
                    <hr>
                    <form action="<?= base_url(); ?>Profile/updatepassword" method="POST" enctype="multipart/form-data" class="mt-4">
                        <div class="form-group">
                            <label for="">Password Lama</label>
                            <input type="text" name="password_lama" id="" class="form-control" placeholder="Password Lama">
                        </div>
                        <div class="form-group">
                            <label for="">Password Baru</label>
                            <input type="text" name="password_baru" id="" class="form-control" placeholder="Password Baru">
                        </div>
                        <div class="form-group">
                            <label for="">Password Konfirmasi</label>
                            <input type="text" name="password_konfirmasi" id="" class="form-control" placeholder="Password Konfirmasi">
                        </div>
                        <div class="form-group text-center mt-4">
                            <input type="submit" value="Update" class="btn btn-primary" style="padding-left: 2rem; padding-right: 2rem; box-shadow: 0px 1px 8px 2px #7386D5;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
</script>
</body>
</html>