<?php
  session_start();
  if($_SESSION["loggedin"] != true) {
      echo("Access denied!");
      exit();
  }
  require_once("../db_const.php");
  $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
  if ($conexion->connect_error) {
   die("La conexion falló: " . $conexion->connect_error);
  }
include '../layouts/head.php';
?>

<body class="fixed-sn pink-skin bg-skin-lp">

    <header>
      <?php include '../layouts/sidebar.php';?>
      <!-- Navbar -->
      <nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav">
          <!-- SideNav slide-out button -->
          <div class="float-xs-left">
              <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
          </div>
          <!-- Breadcrumb-->
          <div class="breadcrumb-dn mr-auto">
              <p>Mis aves</p>
          </div>
            <ul class="nav navbar-nav ml-auto flex-row">
              <li class="nav-item active">
                  <a class="nav-link">Registrar Control</a>
              </li>
              <li class="nav-item">
                  <a href="registronota.php" class="nav-link">Registrar Nota</a>
              </li>
                <li class="nav-item">
                    <a  href="../logout.php" class="nav-link"><i class="fa fa-user"></i> <span class="hidden-sm-down">Log out</span></a>
                </li>

            </ul>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->

    <!--Main layout-->
    <main>
    <div class="container-fluid text-center">
      <div class="card card-block">
                <h4 class="card-title">Registrar Control</h4>
                <p class="card-text">Rellene los datos para registar el control de un ave, si desea modificar un control seleccione uno de los de abajo, controles de otros días no pueden ser modificados</p>
        <form  Name ="form1" Method ="POST" ACTION = "send.php">
            <!--Third row-->
            <div class="row">

                <!--First column-->
                <div class="col-md-3">
                    <div class="md-form">
                        <input type="text" id="form41" class="form-control" name="anillo">
                        <label for="form41" class="">Anillo</label>
                    </div>
                </div>

                <!--Second column-->
                <div class="col-md-3">
                    <div class="md-form">
                        <input type="text" id="form51" class="form-control" name="ave">
                        <label for="form51" class="ave">Ave</label>
                    </div>
                </div>

                <!--Third column-->
                <div class="col-md-3">
                    <div class="md-form">
                        <input type="text" id="form61" class="form-control" name="peso">
                        <label for="form61" class="">Peso</label>
                    </div>
                </div>
                <!--Third column-->
                <div class="col-md-3">
                  <div class="md-form">
                  <select class="mdb-select" name="caperuza">
                    <option value="" disabled selected></option>
                    <option value="c">Con</option>
                    <option value="s">Sin</option>
                  </select>
                  <label for="form61" >Caperuza</label>
                  </div>
                </div>
            </div>
            <!--/.Third row-->

            <div class="row">
              <!--Textarea with icon prefix-->
              <div class="col-md-12">
                <div class="md-form">
                    <i class="fa fa-pencil prefix"></i>
                    <textarea type="text" id="form8" class="md-textarea" name="observacion"></textarea>
                    <label for="form8">Observación</label>
                </div>
              </div>
            </div>
            <div class="md-form form-group">
                <button type="submit" href="send.php" class="btn btn-primary btn-lg">Login</a>
            </div>
        </form>



        </div>

</br>


    <div class="card card-block">
      <table class="table table-responsive">
          <thead>
              <tr>
                  <th>#</th>
                  <th></th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <th scope="row">1</th>
                  <td>
                      <fieldset class="form-group">
                          <input type="checkbox" id="checkbox1">
                          <label for="checkbox1"></label>
                      </fieldset>
                  </td>
                  <td>Ashley</td>
                  <td>Lynwood</td>
                  <td>@ashow</td>
                  <td>
                      <a class="blue-text"><i class="fa fa-user"></i></a>
                      <a class="teal-text"><i class="fa fa-pencil"></i></a>
                      <a class="red-text"><i class="fa fa-times"></i></a>
                  </td>
              </tr>
              <tr>
                  <th scope="row">2</th>
                  <td>
                      <fieldset class="form-group">
                          <input type="checkbox" id="checkbox2">
                          <label for="checkbox2"></label>
                      </fieldset>
                  </td>
                  <td>Billy</td>
                  <td>Cullen</td>
                  <td>@cullby</td>
                  <td>
                      <a class="blue-text"><i class="fa fa-user"></i></a>
                      <a class="teal-text"><i class="fa fa-pencil"></i></a>
                      <a class="red-text"><i class="fa fa-times"></i></a>
                  </td>
              </tr>
              <tr>
                  <th scope="row">3</th>
                  <td>
                      <fieldset class="form-group">
                          <input type="checkbox" id="checkbox3">
                          <label for="checkbox3"></label>
                      </fieldset>
                  </td>
                  <td>Ariel</td>
                  <td>Macy</td>
                  <td>@arielsea</td>
                  <td>
                      <a class="blue-text"><i class="fa fa-user"></i></a>
                      <a class="teal-text"><i class="fa fa-pencil"></i></a>
                      <a class="red-text"><i class="fa fa-times"></i></a>
                  </td>
              </tr>

          </tbody>
      </table>
  </div>
        </div>
    </main>
    <!--/Main layout-->
    <?php include '../layouts/footer.php';?>
</body>

</html>