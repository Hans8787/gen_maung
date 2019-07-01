  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-top: 100px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kotak Saran
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="active">Kotak Saran</li>
      </ol>
      <!-- flash data hapus saran -->
      <?php if( $this->session->flashdata('flash') ) : ?>
        <div class="alert alert-success alert-dimissable" role="alert" style="margin: 9px 0 0 0;">
          Satu berita <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
    </section>

    <!-- Main content -->
    <section class="content" style="min-height: 800px;">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Pesan</h3>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <a href="mailbox.php" class="btn btn-default btn-sm" title="Previous"><i class="fa fa-refresh"></i></a>
            </div>
            <div class="table-responsive mailbox-messages" style="margin: 0 5px; border-radius: 3px;">
              <table class="table table-hover table-striped">
                <tbody>
                <?php foreach($kotak_saran as $row) : ?>
                  <tr class="<?php
                              if( $row["status"] == 1 ) {
                                echo "unread";
                              } 
                             ?>">
                    <?php
                      if( $row["status"] == 1 ) {
                        echo '<td class="mailbox-star"><i class="fa fa-star text-yellow"></i></td>';
                      } else {
                        echo '<td class="mailbox-star"><i class="fa fa-star-o text-yellow"></i></td>';
                      }
                    ?>
                    <td class="mailbox-name"><a href="<?= base_url(); ?>kotak_saran/baca/<?= $row["id"] ?>"><?= $row["email"] ?></a></td>
                    <td class="mailbox-subject"><b><?= $row["nama"] ?></b> - <?= substr($row["content"], 0, 20) ?>....
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">
                      <?php 
                        $now = new DateTime;
                        $tanggal = new DateTime($row["tanggal"]);

                        $interval = $now->diff($tanggal);
                        $minuteDiff = ( ( ($interval->days*24) + $interval->h ) *60 ) + $interval->i;
                        $secondDiff = $interval->s/60;
                        $minuteDiff += $secondDiff;

                        if ($minuteDiff <= 10) {
                          echo ceil($minuteDiff) . ' menit yang lalu';
                        } else {
                          echo $row["tanggal"];
                        }

                      ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
              <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
          </div>
          <!-- /.box-body -->
          
          <div class="box-footer no-padding">
            <div class="mailbox-controls">
              <!-- Pull Right -->
              <div class="pull-right" style="margin-right: 20px;">
                <div class="btn-group">
                  <div class="box-tools pull-right">
                    <?= $this->pagination->create_links(); ?>            
                  </div>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.pull-right -->
            </div>
          </div>
        </div>
        <!-- /. box -->
      </div>
      <!-- /.col -->
    </section>
    <!-- /.content -->
  </div>