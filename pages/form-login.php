//username pass nama alamat email nohp
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Login Pembeli</h2>
      </div>
    </div><!-- End Breadcrumbs -->
    <br><br>
    <body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="login-brand">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Form Login</h4></div>

              <div class="card-body">
                <form action ="aksi_login.php" method="POST">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="bx bxs-user"></i>
                        </div>
                      </div>
                      <input id="username" type="username" class="form-control" name="username" autofocus placeholder="Masukan Username Anda">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="bx bxs-key"></i>
                        </div>
                      </div>
                      <input id="password" type="password" class="form-control" name="password" autofocus placeholder="Masukan Password Anda">
                    </div>
                  </div>
                  

                  <div class="form-group text-center">
                    <button type="submit" class="btn btn-lg btn-round btn-primary">
                      Login
                    </button>
                    <div class="mt-5 text-center">
                    Don't have an account?
                    <a href="register.php">Create new one</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Dayabaya 2020
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<br><br><br><br>