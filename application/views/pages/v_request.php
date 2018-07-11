<div class="container">
  <h2>Request / Permintaan</h2>
    <div id="daftar" class="tab-pane fade in active">
      Di bawah ini berisi semua daftar request kerja yang Anda ajukan
      <a href="<?= site_url("request/tambah/".$result_id_per->id_perusahaan) ?>" class="btn btn-primary">
      <i class="fa fa-plus"></i> Tambah
      </a>
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
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Judul Request</th>
            <th>Status</th>
            <th>Tanggal Publish</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
              foreach($result as $row){
          ?>
          <tr>
            <td><?= $row->judul_request ?></td>
            <td><?= $row->status ?></td>
            <td><?= $row->tgl_publish ?></td>
            <td>
              <a class="btn btn-warning" href="<?= site_url("request/edit/".$row->id_request."?id_per=".$result_id_per->id_perusahaan) ?>">
                  <i class="fas fa-pencil"></i> Edit
              </a>
              <a class="btn btn-danger" href="<?= site_url("request/delete/".$row->id_request."?id_per=".$result_id_per->id_perusahaan) ?>">
                  <i class="fas fa-trash-o"></i> Delete
              </a>
            </td>
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
  </div>
</div>
