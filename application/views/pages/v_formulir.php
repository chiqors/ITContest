<div class="container bootstrap snippet">
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Form Request dari "<?= $result->judul_request ?>"</h3>
          </div>
        </div>
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
                      <h3 class="panel-title"><i class="fas fa-user"></i> Informasi Formulir</h3>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                          <table class="table table-user-information">
                            <tbody>
                              <tr>
                                <td>Username</td>
                                <td><a href="<?= site_url("profile/index/".$result_form->id_account) ?>"><?= @$result_form->username ?></a></td>
                              </tr>
                              <tr>
                                <td>Nama Lengkap</td>
                                <td><?= @$result_form->nama_lengkap ?></td>
                              </tr>
                              <tr>
                                <td>Isi Formulir</td>
                                <td><?= @$result_form->isi_form ?></td>
                              </tr>
                              <tr>
                                <td>Status Terima</td>
                                <td><span class="btn btn-xs btn-info"><?= @$result_form->status_terima ?></span></td>
                              </tr>
                            </tbody>
                          </table>
                          <form class="form" action="<?= site_url("request/do_status/".$result_form->id_form) ?>" method="POST">
                            <div class="form-group hidden">
                          		<label class="control-label">ID Perusahaan</label>
                          		<input type="text" class="form-control" id="id_perusahaan" name="id_perusahaan" value="<?= $id_pers ?>">
                          	</div>
                            <div class="form-group hidden">
                          		<label class="control-label">ID Request</label>
                          		<input type="text" class="form-control" id="id_request" name="id_request" value="<?= @$result->id_request ?>">
                          	</div>
                            <div class="form-group">
                          		<label class="control-label">Status Terima</label>
                          		<select class="form-control" id="status_terima" name="status_terima" value="<?= @$result_form->status_terima ?>">
                                <option value="tunggu">Tunggu</option>
                                <option value="terima">Terima</option>
                                <option value="tolak">Tolak</option>
                              </select>
                          	</div>
                            <div class="form-group">
                              <button class="btn btn-primary">Submit</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!--/tab-pane-->
        </div>
        <!--/tab-content-->
      </div>
      <!--/col-9-->
    </div>
    <!--/row-->
