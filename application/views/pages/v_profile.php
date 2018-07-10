<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10">
            <h1><?= @$results->username ?></h1></div>
        <div class="col-sm-2">
            <a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                <?php
                  if($this->session->userdata('username') == @$results->username) {
                ?>
                <li><a href="#messages" data-toggle="tab">Messages</a></li>
                <li><a href="#settings" data-toggle="tab">Settings</a></li>
                <?php
                  }
                ?>
            </ul>
            <br>
            <div class="tab-content">
              <div class="tab-pane active" id="home">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad">
                  <div class="panel panel-info">
                    <div class="panel-heading">
                      <h3 class="panel-title"><i class="fas fa-user"></i> Informasi Profil</h3>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                          <table class="table table-user-information">
                            <tbody>
                              <tr>
                                <td>Nama Lengkap:</td>
                                <td><?= @$results->nama_lengkap ?></td>
                              </tr>
                              <tr>
                                <td>Tanggal Lahir:</td>
                                <td><?= @$results->tanggal_lahir ?></td>
                              </tr>
                              <tr>
                                <td>Jenis Kelamin</td>
                                <td><?= @$results->jenis_kelamin ?></td>
                              </tr>
                              <tr>
                                <td>No HP</td>
                                <td><?= @$results->no_hp ?></td>
                              </tr>
                              <tr>
                                <td>Alamat</td>
                                <td><?= @$results->Alamat ?></td>
                              </tr>
                              <tr>
                                <td>Email</td>
                                <td><a href="mailto:<?= @$results->email ?>"><?= @$results->email ?></a></td>
                              </tr>
                            </tbody>
                          </table>
                          <a href="#" class="btn btn-primary"><i class="fas fa-graduation-cap"></i> Pendidikan</a>
                          <a href="#" class="btn btn-primary"><i class="fas fa-info"></i> Pengalaman</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-info">
                    <div class="panel-heading">
                      <h3 class="panel-title"><i class="fas fa-graduation-cap"></i> Informasi Pendidikan</h3>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                          <?php
                            if($this->session->userdata('username') == @$results->username) {
                          ?>
                          <a href="<?= site_url("profile/creatependidikan") ?>" class="btn btn-warning"><i class="fas fa-plus"></i> Tambah</a>
                          <?php
                            }
                          ?>
                          <table class="table table-stripped table-bordered table-user-information">
                            <tbody>
                              <tr>
                                <th>#</th>
                                <th>Jenjang</th>
                                <th>Lulusan</th>
                                <?php
                                  if($this->session->userdata('username') == @$results->username) {
                                ?>
                                <th>Aksi</th>
                                <?php
                                  }
                                ?>
                              </tr>
                              <?php
                                $i = 1;
                                foreach($results_pendidikan as $row_pendidikan){
                              ?>
                              <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row_pendidikan->nama_jenjang ?></td>
                                <td><?= $row_pendidikan->nama_lulusan ?></td>
                                <?php
                                  if($this->session->userdata('username') == @$results->username) {
                                ?>
                                <td><a href="<?= site_url("profile/editpendidikan/".$row_pengalaman->id_pengalaman) ?>" class="btn btn-warning">Edit</a> <a href="<?= site_url("profile/deletependidikan/".$row_pengalaman->id_pengalaman) ?>" class="btn btn-danger">Delete</a></td>
                                <?php
                                  }
                                ?>
                              </tr>
                              <?php
                                }
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-info">
                    <div class="panel-heading">
                      <h3 class="panel-title"><i class="fas fa-info"></i> Informasi Pengalaman</h3>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                          <?php
                            if($this->session->userdata('username') == @$results->username) {
                          ?>
                          <a href="<?= site_url("profile/createpengalaman") ?>" class="btn btn-warning"><i class="fas fa-plus"></i> Tambah</a>
                          <?php
                            }
                          ?>
                          <table class="table table-stripped table-bordered table-user-information">
                            <tbody>
                              <tr>
                                <th>#</th>
                                <th>Nama Pekerjaan</th>
                                <th>Jangka Waktu</th>
                                <th>Tempat Kerja</th>
                                <?php
                                  if($this->session->userdata('username') == @$results->username) {
                                ?>
                                <th>Aksi</th>
                                <?php
                                  }
                                ?>
                              </tr>
                              <?php
                                $i = 1;
                                foreach($results_pengalaman as $row_pengalaman){
                              ?>
                              <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row_pengalaman->nama_pekerjaan ?></td>
                                <td><?= $row_pengalaman->jangka_waktu ?></td>
                                <td><?= $row_pengalaman->tempat_kerja ?></td>
                                <?php
                                  if($this->session->userdata('username') == @$results->username) {
                                ?>
                                <td><a href="<?= site_url("profile/editpengalaman/".$row_pengalaman->id_pengalaman) ?>" class="btn btn-warning">Edit</a> <a href="<?= site_url("profile/deletepengalaman/".$row_pengalaman->id_pengalaman) ?>" class="btn btn-danger">Delete</a></td>
                                <?php
                                  }
                                ?>
                              </tr>
                              <?php
                                }
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                <?php
                  if($this->session->userdata('username') == @$results->username) {
                ?>
                <!--/tab-pane-->
                <div class="tab-pane" id="messages">
                    <h2></h2>
                    <ul class="list-group">
                        <li class="list-group-item text-muted"><i class="fas fa-inbox"></i> Inbox</li>
                        <?php
                          foreach($results2 as $row) {
                        ?>
                        <li class="list-group-item text-right"><a href="#" class="pull-left"><?= @$row->pesan ?></a> <?php @$row->tgl_waktu ?></li>
                        <?php
                          }
                        ?>
                    </ul>
                </div>
                <!--/tab-pane-->
                <div class="tab-pane" id="settings">
                  <form class="form" action="##" method="post" id="registrationForm">
                    <div class="form-group">
                      <div class="col-xs-6">
                        <label for="first_name">
                        <h4>Nama Lengkap</h4></label>
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Isi Nama Lengkap" title="" value="<?= @$results->nama_lengkap ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-6">
                        <label for="phone">
                        <h4>Tanggal Lahir</h4></label>
                        <input type="text" class="form-control" name="tanggal_lahir" id="phone" placeholder="Isi Tanggal Lahir" title="" value="<?= @$results->tanggal_lahir ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-6">
                        <label for="mobile">
                        <h4>No HP.</h4></label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Isi No. Handphone" title="" <?= @$results->no_hp ?>>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-6">
                        <label for="email">
                        <h4>Email</h4></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="" value="<?= @$results->email ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-6">
                        <label for="email">
                        <h4>Jenis Kelamin</h4></label>
                        <select class="form-control" value="<?= @$results->jenis_kelamin ?>">
                          <option value="l">Laki-Laki</option>
                          <option value="p">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-6">
                        <label for="email">
                        <h4>Alamat</h4></label>
                        <input type="email" class="form-control" id="alamat" placeholder="Isi Alamat" title="">
                      </div>
                    </div>
                  <div class="form-group">
                    <div class="col-xs-6">
                      <label for="password">
                      <h4>Password</h4></label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Isi Password" title="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-6">
                      <label for="password2">
                      <h4>Pastikan Password</h4></label>
                      <input type="password" class="form-control" name="password2" id="password2" placeholder="Isi Ulang Password" title="">
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="col-xs-12">
                    <br>
                    <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Simpan</button>
                  </div>
                </div>
              </form>
            </div>
            <?php
              }
            ?>
          </div>
          <!--/tab-pane-->
        </div>
        <!--/tab-content-->
      </div>
      <!--/col-9-->
    </div>
    <!--/row-->
