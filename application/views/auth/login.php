<div class="container-fluid bg-white px-0">

    <div class="col-7">
        <div class="form-row">
            <div class="text text-center">
                <img src="<?= base_url('assets/user/'); ?>img\logo\logo black.svg" alt="">
                <h5>Selamat Datang!</h5>
                <p>Silahkan login kembali ke akun Anda</p>
            </div>

            <form>
                <div class="form-label">
                    <div class="form-group">
                        <label class="select">Select User</label><br>
                    </div>
                    <select class="form-select mb-2" name="role" aria-label="Default select example">
                        <option selected value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>

                    <div class="form-group">
                        <label for="email">Email</label><br>
                        <input type="text" placeholder="Masukan email Anda" name="email" required>
                    </div>
                    <div class="form-group d-grid">
                        <label for="pw">Password</label><br>
                        <input type="password" placeholder="Masukan password" id="password1" name="password1" required>
                        <a class="lupa-pw" href="">Lupa password?</a>
                    </div>
                    <a class="btn" type="submit" href="">Login</a>
                    <p>Belum punya akun? <a href="<?= base_url('auth/registrasi'); ?>">Daftar sekarang</a></p>
                </div>
            </form>
        </div>
    </div>
    <!--Form End-->

    <!--img start-->
    <div class=" col-5">
        <div class="img-bg">
            <img class="foto" src="<?= base_url('assets/user/'); ?>img\Group 48.png" alt="">
        </div>
    </div>
</div>