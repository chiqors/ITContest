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
            <form action='' method="POST">
              <!-- Username -->
              <label>Username</label>
              <input type="text" id="username" name="username" placeholder="Username atau Email" class="form-control">
              <!-- Password-->
              <label>Password</label>
              <input type="password" id="password" name="password" placeholder="Passwod" class="form-control">
              <!-- Button -->
              <div class=""> <button class="btn btn-success">Masuk</button> </div>
						</form>
					</div>

          <div class="tab-pane fade" id="create">
						<!-- Nested Tabs -->
						<div class="well">
		          <ul class="nav nav-tabs">
		            <li class="active"><a href="#user" data-toggle="tab">Pencari Kerja</a></li>
		            <li><a href="#perusahaan" data-toggle="tab">Perusahaan</a></li>
		          </ul>

		          <div id="myTabContent2" class="tab-content">
		            <div class="tab-pane active in" id="user">
		              <form action='' method="POST">
										<!-- NIK -->
										<label>NIK</label>
										<input type="number" name="nik" placeholder="Nomor Induk Kependudukan" class="form-control">
										<!-- Username -->
										<label>Username</label>
										<input type="number" name="username" placeholder="Username" class="form-control">
	                   <!-- Email -->
	                   <label>Email</label>
	                   <input type="email" name="email" placeholder="Email" class="form-control">
	                   <!-- Passwod -->
	                   <label>Password</label>
	                   <input type="password" id="password" name="password" placeholder="Kata Sandi" class="form-control">
	                   <!-- RepeatPasswod -->
	                   <label>Repeat Password</label>
	                   <input type="password" id="password" name="password" placeholder="Ulangi Kata Sandi" class="form-control">
	                   <!-- Button -->
	                   <div class=""><button class="btn btn-success">Daftar</button></div>
									</form>
								</div>

		            <div class="tab-pane fade" id="perusahaan">
		              <form id="tab">
										<!-- Nomor SIUP -->
										<label>No. SIUP</label>
										<input type="number" name="no_siup" placeholder="Nomor Surat Izin Usaha" class="form-control">
										<!-- Username -->
										<label>Username</label>
										<input type="number" name="username" placeholder="Username" class="form-control">
									 	<!-- Email -->
									 	<label>Email</label>
									 	<input type="email" name="email" placeholder="Email" class="form-control">
									 	<!-- Passwod -->
									 	<label>Password</label>
									 	<input type="password" id="password" name="password" placeholder="Kata Sandi" class="form-control">
									 	<!-- RepeatPasswod -->
									 	<label>Repeat Password</label>
									 	<input type="password" id="password" name="password" placeholder="Ulangi Kata Sandi" class="form-control">
									 	<!-- Button -->
									 	<div class=""> <button class="btn btn-primary">Daftar</button> </div>
		              </form>
		            </div>
		        </div>
					</div>
        	<!-- END of Nested Tabs -->
          </div>
        </div>
      </div>
    </div>
</div>
