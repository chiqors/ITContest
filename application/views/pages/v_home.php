<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h4>Berita Pekerjaan Terkini</h4>
        </div>
    </div>
    <hr>
    <?php
      foreach($result as $row){
    ?>
    <!-- Begin of rows -->
    <div class="row carousel-row">
        <div class="col-xs-12">
            <div class="">
                <h4><?= $row->judul_request ?></h4>
                <p>
                    <?= $row->syarat ?>
                </p>
            </div>
            <div class="">
                <span class="pull-right buttons">
                    <button class="btn btn-sm btn-default"><i class="fa fa-fw fa-eye"></i> Show</button>
                </span>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
</div>
