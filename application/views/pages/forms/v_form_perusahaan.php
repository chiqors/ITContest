<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Isi Perusahaan</h3>
    </div>
    <div class="panel-body">
      <form class="form" action="<?= site_url("perusahaan/register/".$this->session->userdata('id_account')) ?>" method="POST">

      	<div class="form-group">
      		<label class="control-label">Nama Perusahaan</label>
      		<input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Lengkap Perusahaan">
      	</div>
        <div class="form-group hidden">
      		<label class="control-label">ID Perusahaan</label>
      		<input type="text" class="form-control" id="id_account" name="id_account" value="<?= $this->session->userdata('id_account') ?>">
      	</div>

      	<div class="form-group"> <!-- Submit Button -->
      		<button type="submit" class="btn btn-primary">Lanjutkan</button>
      	</div>

      </form>
    </div>
  </div>
</div>
