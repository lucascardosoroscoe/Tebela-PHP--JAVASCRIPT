<?php
// include('../includes/verificarAcesso.php');
// verificarAcesso(4);
include('../../includes/header.php');
?>
<div class="container-fluid">
    <br><br>
    <!-- Tabela dos veículos-->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Título da Tabela
            <div class="btn btnAdd" onclick="fnExcelReport('dataTable')" style="margin-left: 2px;"><i class="far fa-file-excel"></i> Exportar Excel</div>
        </div>
        <div class="card-body">
            <div class="table-responsive table-hover">
                <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> -->
                <table id="dataTable" class="table table-hover tablesorter">
                    <thead>
                        <tr>
                            <th style="display:none;">Id</th>
                            <th>Coluna 1</th>
                            <th>Coluna 2</th>
                            <th>Coluna 3</th>
                            <th>Coluna 4</th>
                            <th>Coluna 5</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <?php
                            //CRIAÇÃO DA TABELA A PARTIR DE DADOS DO BANCO
                            // $consulta = "SELECT tc_devices.id, tc_devices.name, tc_devices.limiteVelocidade, 
                            // tc_users.name AS responsavel, tc_devices.lastupdate, tc_groups.name AS groupName 
                            // FROM tc_devices JOIN tc_users ON tc_devices.respoonsavelId = tc_users.id 
                            // JOIN tc_groups ON tc_devices.groupid = tc_groups.id";
                            // addTabela($consulta);

                            for ($i = 0; $i < 9; $i++){
                                echo "<tr>";
                                echo ("<td style='display:none;'>".$i."</td>");
                                echo ("<td>1".$i."</td>");
                                echo ("<td>2".$i."</td>");
                                echo ("<td>3".$i."</td>"); 
                                echo ("<td>4".$i."</td>");
                                echo ("<td>5".$i."</td>");
                                echo ("<td style='display: flex;'><a href='editar.php?id=".$obj['id']."' class='iconeTabela'><i class='fas fa-edit'></i></a><a href='excluir.php?id=".$obj['id']."' class='iconeTabela red'><i class='fas fa-trash-alt'></i></a><a href='detalhar.php?id=".$obj['id']."' class='iconeTabela'><i class='fas fa-eye'></i></a></td>");  


                                echo "</tr>";
                            }
                            
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
// function addTabela($consulta){
//     $veiculos = selecionar($consulta);
//     $size = sizeof($veiculos);
//     $ultimaHora = date('Y-m-d h:i:s', time() - (6*60*60));
//     foreach ($veiculos as $obj){
//         echo "<tr>";
//         echo ("<td style='display:none;'>".$obj['id']."</td>"); 
//         echo ("<td>".$obj['name']."</td>"); 
//         echo ("<td>".$obj['responsavel']."</td>");
//         echo ("<td>".$obj['limiteVelocidade']." kh/h</td>"); 
//         if($obj['lastupdate'] >= $ultimaHora){
//             echo ("<td>Conectado</td>");
//         }else{
//             echo ("<td>Sem sinal</td>");
//         }
//         echo ("<td style='display: flex;'><a href='editar.php?id=".$obj['id']."' class='iconeTabela'><i class='fas fa-edit'></i></a><a href='excluir.php?id=".$obj['id']."' class='iconeTabela red'><i class='fas fa-trash-alt'></i></a><a href='detalhar.php?id=".$obj['id']."' class='iconeTabela'><i class='fas fa-eye'></i></a></td>");  
//         echo "</tr>";
//     }
// }
include('../../includes/footer.php');
?>