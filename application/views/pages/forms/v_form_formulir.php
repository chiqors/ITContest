<!-- Include the default theme -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sceditor/themes/default.min.css" />

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Pengisian Form</h3>
    </div>
    <div class="panel-body">
      <form class="form" action="<?= site_url("request/do_form") ?>" method="POST">

        <div class="form-group">
      		<label class="control-label">ID Account</label>
      		<input type="text" class="form-control" id="id_account" name="id_account" value="<?= $this->session->userdata('id_account') ?>">
      	</div>

        <div class="form-group">
      		<label class="control-label">ID Perusahaan</label>
      		<input type="text" class="form-control" id="id_perusahaan" name="id_perusahaan" value="<?= $id_pers ?>">
      	</div>

        <div class="form-group">
      		<label class="control-label">ID Request</label>
      		<input type="text" class="form-control" id="id_request" name="id_request" value="<?= $result->id_request ?>">
      	</div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Peraturan dalam pengisian Form</h4>
          </div>
          <div class="panel-body">
            <p><?= $result->prepare ?></p>
          </div>
        </div>

      	<div class="form-group">
      		<label class="control-label">Formulir</label>
      		<textarea class="form-control" id="isi_form" name="isi_form" placeholder="Masukkan Data Informasi Lengkap"></textarea>
      	</div>

        <div class="form-group">
      		<button type="submit" class="btn btn-primary">Submit!</button>
      	</div>

      </form>
    </div>
  </div>
</div>

<!-- Include the editors JS -->
<script src="<?= base_url() ?>assets/plugins/sceditor/sceditor.min.js"></script>
<script src="minified/formats/xhtml.js"></script>
<script>
  var context = document.getElementById('isi_form');
  sceditor.create(context, {
    format: 'xhtml',
    width: 'default',
    height: 'default',
    style: '<?= base_url() ?>assets/plugins/sceditor/themes/content/default.min.css'
  });
</script>
