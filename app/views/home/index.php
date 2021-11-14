<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1><?= $data['title']; ?></h1>
</div>
</div>
</div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
<!-- Default box -->
<div class="card">
<div class="card-header">
<h3 class="card-title"><?= $data['tabel'];?></h3>
</div>
<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>3 Item</h3>

                <p name="merek">Honda</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?= base_url; ?>/buku" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>2 Item</h3>

                <p name="merek">Yamaha</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?= base_url; ?>/buku" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>1 Item</h3>

                <p name="merek">Kawasaki</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?= base_url; ?>/buku" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>1 Item</h3>

                <p name="merek">Suzuki</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?= base_url; ?>/buku" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
<!-- /.card-body -->
<div class="card-footer">

</div>
<!-- /.card-footer-->
</div>
<!-- /.card -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->