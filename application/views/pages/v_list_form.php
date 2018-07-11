<div class="container">
	<div class="row">
    <div class="col-md-12">
      <h4>Data Form</h4>
      <h5>Untuk Request : <?= $result_request->judul_request ?></h5>
      <div class="table-responsive">
				<table class="table table-stripped table-bordered">
      <thead>
        <tr>
          <th>#</th>
					<th>Username</th>
          <th>Status Terima</th>
					<th>Aksi</th>
        </tr>
      </thead>
      <tbody>
				<?php
						$i = 1;
						foreach($result as $row){
				?>
        <tr>
          <th scope="row"><?= $i++ ?></th>
          <td><?= $row->username ?></td>
					<td><?= $row->status_terima ?></td>
					<td><a href="<?= site_url("request/visitformperson/".$row->id_form."?id_per=".$id_pers) ?>" class="btn btn-xs btn-primary">Lihat</a></td>
        </tr>
				<?php
					}
				?>
      </tbody>
    </table>
    </div>
        <div class="clearfix"></div>
        <ul class="pagination pull-right">
          <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
