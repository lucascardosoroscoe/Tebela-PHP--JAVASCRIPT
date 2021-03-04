
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Painel de Controle" />
    <meta name="author" content="Lucas Cardoso Roscoe" />
    <title>Tabela PHP + Javascript</title>
    <link href="<?php echo $HTTP_HOST;?>/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $HTTP_HOST;?>/css/table.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
  </head>
  <body class="sb-nav-fixed">
    <?php
      setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
      include('bancoDados.php');
   ?>
    <!-- Barra Topo do Site -->
      <nav class="sb-topnav navbar navbar-expand " style="background-color: #fff;">
      <!-- navbar-dark bg-dark -->
        <!-- Título Site -->
        
          <a class="navbar-brand" href="<?php echo $HTTP_HOST;?>/index.php"><img src="<?php echo $HTTP_HOST;?>/includes/logo.png" alt="Tabela PHP + Javascript" srcset="" style="height:40px;"></a>
        <!-- Botão do Menu -->
          <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Barra de Pesquisa -->
          <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"> -->
            <!-- <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
              <div class="input-group-append">
                  <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
              </div>
            </div> -->
          <!-- </form> -->
        <!-- Menu de Usuário -->
          <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Configurações</a>
                <a class="dropdown-item" onclick="window.print()">Exportar PDF</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo $HTTP_HOST;?>/login">Sair</a>
              </div>
            </li>
          </ul>
      </nav>
    <!-- Menu Lateral Esquerda -->
      <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
          <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
              <div class="nav">
              <?php
                if($tipoUsuario == 1 || $tipoUsuario == 2 || $tipoUsuario == 3){
                  echo('<div class="sb-sidenav-menu-heading">Principal</div>');

                  echo('<a class="nav-link" href="#"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Painel de Controle</a>');
                  echo('<a class="nav-link" href="#"><div class="sb-nav-link-icon"><i class="fas fa-car"></i></div>Ítem Menu</a>');
                  echo('<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">');
                    echo('<div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>Usuários<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>');
                  echo('</a>');
                  echo('<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion"><nav class="sb-sidenav-menu-nested nav">');
                      echo('<a class="nav-link" href="#">Prefeituras</a>');
                      echo('<a class="nav-link" href="#">Secretarias</a>');
                      echo('<a class="nav-link" href="#">Motoristas</a>');
                  echo('</nav></div>');
                ?>
              </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logado como
                  <?php 
                    if($tipoUsuario == 1){
                      echo " Administrador:";
                    }else if($tipoUsuario == 2){
                      echo " Prefeitura";
                    }else if($tipoUsuario == 3){
                      echo " Secretaria:";
                    }else if($tipoUsuario == 4){
                      echo " Motorista:";
                    }
                  ?>
                </div>
                <?php if($tipoUsuario != ''){echo $usuario;} ?>
            </div>
          </nav>
        </div>


<div id="layoutSidenav_content">
  <main class="fh">