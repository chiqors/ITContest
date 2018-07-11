<div class="container ">
	<div class="col-md-6 col-md-offset-3">
    <h3>Belum Memiliki Akun?</h3>
      <div class="well">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#login" data-toggle="tab">Masuk</a></li>
          <li><a href="#create" data-toggle="tab">Buat Akun Baru</a></li>
        </ul>

        <div id="myTabContent" class="tab-content">
          <div class="tab-pane active in" id="login">
						<?php
                if(!empty($success)){
            ?>
            <div class="alert alert-success">
                <?php echo $success?>
            </div>
            <?php } ?>
            <?php
                if(!empty($error)){
            ?>
            <div class="alert alert-danger">
                <?php echo $error?>
            </div>
            <?php } ?>
            <form action='<?= site_url("sign/do_sign")?>' method="POST">
              <!-- Username -->
							<div class="form-group">
              	<label>Username</label>
              	<input type="text" id="username" name="username" placeholder="Username atau Email" class="form-control">
							</div>
              <!-- Password-->
							<div class="form-group">
              	<label>Password</label>
              	<input type="password" id="password" name="password" placeholder="Password" class="form-control">
							</div>
              <!-- Button -->
              <div class=""> <button type="submit" class="btn btn-success"><i class="fas fa-key"></i> Masuk</button> </div>
						</form>
					</div>

          <div class="tab-pane fade" id="create">
						<!-- Nested Tabs -->
						<div class="well">
            	<form action='<?= site_url("sign/do_insert") ?>' method="POST">
								<!-- NIK -->
								<div class="form-group">
									<label>NIK</label>
									<input type="text" name="nik" placeholder="Nomor Induk Kependudukan" minlength="1" maxlength="11" class="form-control" required>
								</div>
								<!-- Username -->
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" placeholder="Username" minlength="5" maxlength="30" class="form-control" required>
								</div>
                 <!-- Email -->
								 <div class="form-group">
                 	<label>Email</label>
                 	<input type="email" name="email" placeholder="Email" minlength="5" maxlength="30" class="form-control" required>
								 </div>
                 <!-- Passwod -->
								 <div class="form-group">
                 	<label>Kata Sandi</label>
                 	<input type="password" id="password" name="password" placeholder="Kata Sandi" minlength="5" maxlength="50" class="form-control" required>
								 </div>
                 <!-- RepeatPasswod -->
								 <div class="form-group">
                 	<label>Ulangi Kata Sandi</label>
                 	<!-- <input type="password" id="password" name="password" placeholder="Ulangi Kata Sandi" class="form-control"> -->
									<!-- <input type="password" id="confirm_password" placeholder="Ulangi Kata Sandi" minlength="5" maxlength="50" class="form-control" required> -->
								 </div>
								 <h4 class="text-center">Daftar Sebagai</h4>
						     <div class="row">
						     	<div class="col-xs-6 col-sm-6 col-md-6">
						       <button type="submit" name="level" value="1" class="btn btn-primary btn-block">Pengguna</button>
						      </div>
						      <div class="col-xs-6 col-sm-6 col-md-6">
						       <button type="submit" name="level" value="2" class="btn btn-info btn-block">HRD / Manager</button>
						      </div>
						     </div>
							</form>
						</div>
        		<!-- END of Nested Tabs -->
        	</div>
        </div>
      </div>
    </div>
</div>
