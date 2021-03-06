<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pagina Principal
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- row -->
    <div class="row">
      <!-- col-md-8-->
      <div class="col-md-8">
  <!--===============================================================================================================
  Pre vizualizador de email
  ===============================================================================================================-->   
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Pre visualizador de Correspondencia</h3>

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive mailbox-messages">

              <table class="table table-hover table-striped">                
                <?php
                     $pv = new mesaEntrada();
                      echo $pv->bandejaLoad()[0];
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
        <!-- /.box-body -->
          <div class="box-footer clearfix">
            <a href="mesaEntrada" class="btn btn-block btn-info">todos los mail</a>
          </div>
          <!-- /.box-footer -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /col-md-8 -->
      <!-- col-md-4 -->
      <div class="col-md-4">
  <!--===============================================================================================================
  Caja de numeros de mail
  ===============================================================================================================-->
        <!-- Info Boxes Style 2 -->
        <div class="info-box bg-light-blue">
          <span class="info-box-icon"><i class="fa fa-inbox fa-lg"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total de correos</span>

            <span class="info-box-number"><?=$_SESSION['notificaciones']['pendientes']+$_SESSION['notificaciones']['pgestion']; ?></span>

          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="fa fa-university fa-lg"></i></span>
          <div class="info-box-content">

            <span class="info-box-text">Correos internos</span>
            <span class="info-box-number"><?=$_SESSION['notificaciones']['internos']; ?></span>

          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        <div class="info-box bg-yellow">
          <span class="info-box-icon"><i class="fa fa-globe fa-lg"></i></span>
          <div class="info-box-content">

            <span class="info-box-text">Correos externos</span>
            <span class="info-box-number"><?=$_SESSION['notificaciones']['externos']; ?>

          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /col-md-4 -->
      <!-- col-md-8 -->
      <div class="col-md-8">
  <!--===============================================================================================================
  Mensaje Rapido
  ===============================================================================================================-->   
        <div class="box box-info">
          <div class="box-header">
              <i class="fa fa-envelope"></i>
              <h3 class="box-title">Correo Rapido</h3>
            <!-- tools box -->
            <!-- /. tools -->
          </div>
          <div class="box-body">
            <form action="#" method="post">
              <div class="form-group">
                <input type="email" class="form-control" name="emailto" placeholder="Para:">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Asunto:">
              </div>
              <div>
                <textarea class="form-control" placeholder="Mensaje" rows="9"></textarea>
              </div>
            </form>
          </div>
          <div class="box-footer">
            <button type="button" class="pull-right btn btn-default" id="sendEmail">Enviar
              <i class="fa fa-arrow-circle-right"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- /col-md-8 -->
      <!-- col-md-4 -->
      <div class="col-md-4">
  <!--===============================================================================================================
  Trackeo de email
  ===============================================================================================================-->   
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tracking de Correo</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <div class="product-info">
                  <a href="#" class="product-title">Correo 1
                     <span class="label label-warning pull-right">Amarillo</span></a>
                      <span class="product-description">100</span>
                        <div class="progress">
                        <div class="progress-bar" style="width: 20%"></div>
                      </div>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <div class="product-info">
                    <a href="#" class="product-title">Correo 2
                      <span class="label label-success pull-right">Verde</span></a>
                    <span class="product-description">
                          200
                        </span>
                      </span>
                        <div class="progress">
                        <div class="progress-bar" style="width: 20%"></div>
                      </div>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <div class="product-info">
                    <a href="#" class="product-title">Correo 3 
                      <span class="label label-danger pull-right">Rojo</span></a>
                    <span class="product-description">
                          300
                        </span>
                        <div class="progress">
                        <div class="progress-bar" style="width: 20%"></div>
                      </div>
                  </div>
                </li>
                <!-- /.item -->
               
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="#" class="uppercase btn btn-block btn-info">Ver todos los tracking</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
      </div>  
      <!-- /col-md-4 -->
    </div>
    <!-- /row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->