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
            </ul>
            <br>
            <div class="tab-content">
              <div class="tab-pane active" id="home">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad">
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
                  <div class="panel panel-info">
                    <div class="panel-heading">
                      <h3 class="panel-title"><i class="fas fa-user"></i> Informasi Profil</h3>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                          <?php
                            if(!empty($result_pemilik)) {
                          ?>
                          <a href="<?= site_url("profilperusahaan/edit/".$result->id_perusahaan) ?>" class="btn btn-warning">Update Info</a>
                          <a href="<?= site_url("profilperusahaan/delete/".$result->id_perusahaan) ?>" class="btn btn-danger">Hapus Info</a>
                          <?php
                            }
                          ?>
                          <table class="table table-user-information">
                            <tbody>
                              <tr>
                                <td>Nama Perusahaan</td>
                                <td><?= @$result->nama_perusahaan ?></td>
                              </tr>
                              <tr>
                                <td>Deskripsi</td>
                                <td><?= @$result->deskripsi ?></td>
                              </tr>
                              <tr>
                                <td>Owner</td>
                                <td><?= @$result->owner ?></td>
                              </tr>
                              <tr>
                                <td>Kategori</td>
                                <td><?= @$result->kategori ?></td>
                              </tr>
                              <tr>
                                <td>Alamat</td>
                                <td><?= @$result->alamat ?></td>
                              </tr>
                            </tbody>
                          </table>
                          <?php
                            if(!empty($result_pemilik)) {
                          ?>
                          <a href="<?= site_url("request/index/".@$result->id_perusahaan) ?>" class="btn btn-primary">Lihat Request</a>
                          <?php
                            } else {
                          ?>
                          <a href="<?= site_url("request/index/".@$result->id_perusahaan) ?>" class="btn btn-primary">Lamar Kerja</a>
                          <?php
                            }
                          ?>
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
                  <form class="form" action="<?= site_url("profile/do_edit/". @$results->id_account) ?>" method="post" id="registrationForm">
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
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Isi Tanggal Lahir" title="" value="<?= @$results->tanggal_lahir ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-6">
                        <label for="mobile">
                        <h4>No HP.</h4></label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Isi No. Handphone" title="" value="<?= @$results->no_hp ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-6">
                        <label for="email">
                        <h4>Jenis Kelamin</h4></label>
                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" value="<?= @$results->jenis_kelamin ?>">
                          <option value="l">Laki-Laki</option>
                          <option value="p">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-6">
                        <label for="email">
                        <h4>Alamat</h4></label>
                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Isi Alamat" title=""><?= @$results->alamat ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-6">
                        <label for="email">
                        <h4>Tampil Email</h4></label>
                        <select id="show_email" name="show_email" class="form-control" value="<?= @$results->show_email ?>">
                          <option value="y">Ya</option>
                          <option value="n">Tidak</option>
                        </select>
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
