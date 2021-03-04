<?php
// include('./includes/verificarAcesso.php');
// verificarAcesso(4);
include('./includes/header.php');

$dataInicial = $_GET['dataInicial'];
$dataFinal = $_GET['dataFinal'];
if($dataFinal == ""){
    $dataFinal = date('Y-m-d', time() + (24*60*60));
}
if($dataInicial == ""){
    $dataInicial = date('Y-m-d', time() - (30*24*60*60));
}
?>
<div class="container-fluid">
    <br><br>
    <!-- Tabela dos veículos-->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Título da Tabela
            <div class="btn btnAdd" onclick="fnExcelReport('dataTable')" style="margin-left: 2px;"><i class="far fa-file-excel"></i> Exportar Excel</div>
            <a href='adicionar.php'><div class="btn btnAdd"><i class='fas fa-user-plus'></i> Adicionar</div></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-3 col-md-12">
                    <button class="total" onclick="filtrarTabela('')">
                        <h5>Total</h5>
                    </button>
                </div>
                <div class="col-xl-3 col-md-12">
                    <button class="total" onclick="filtrarTabela('planejado')">
                        <h5>Planejadas</h5>
                    </button>
                </div>
                <div class="col-xl-3 col-md-12">
                    <button class="total" onclick="filtrarTabela('executado')">
                        <h5>Executadas</h5>
                    </button>
                </div>
                <div class="col-xl-3 col-md-12">
                    <button class="total" onclick="filtrarTabela('aguardando autorização')">
                        <h5>Aguardando Autorização</h5>
                    </button>
                </div>
            </div>
            <br>
            <div class="col-md-4" style="float:right; margin-top: 5px;">
                <form action="index.php" method="get">
                    <input type="date" name="dataInicial" id="dataInicial" value="<?php echo $dataInicial;?>">
                    <input type="date" name="dataFinal" id="dataFinal" value="<?php echo $dataFinal;?>">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="col-md-8" style="float:left; margin-top: 5px;">
                    <input class="form-control" type="text" placeholder="Buscar..." style="margin-bottom: 5px" id="buscar" onkeyup="buscar()"/>
            </div>
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
                            // $consulta = "SELECT tc_manutencao_programada.id, tc_devices.name AS device, tc_manutencao_programada.name, tc_tipo_manutencao.tipo, 
                            //     tc_manutencao_programada.start, tc_manutencao_programada.status 
                            //     FROM `tc_manutencao_programada` 
                            //     JOIN tc_devices ON tc_devices.id = tc_manutencao_programada.idDevice 
                            //     JOIN tc_tipo_manutencao ON tc_tipo_manutencao.id = tc_manutencao_programada.idTipo 
                            //     WHERE tc_manutencao_programada.start > '$dataInicial' AND tc_manutencao_programada.start <= '$dataFinal' 
                            //     ORDER BY tc_manutencao_programada.id DESC";  

                            for ($i = 0; $i < 9; $i++){
                                echo "<tr>";
                                echo ("<td style='display:none;'>".$i."</td>");
                                echo ("<td>A".$i."</td>");
                                echo ("<td>B0</td>");
                                echo ("<td>C".$i.$i."</td>"); 
                                $j = 10 - $i;
                                echo ("<td>D".$j."</td>");
                                echo ("<td>E".$i."</td>");
                                echo ("<td style='display: flex;'><a href='editar.php?id=".$i."' class='iconeTabela'><i class='fas fa-edit'></i></a><a href='excluir.php?id=".$i."' class='iconeTabela red'><i class='fas fa-trash-alt'></i></a><a href='detalhar.php?id=".$i."' class='iconeTabela'><i class='fas fa-eye'></i></a></td>");  


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
include('./includes/footer.php');
?>