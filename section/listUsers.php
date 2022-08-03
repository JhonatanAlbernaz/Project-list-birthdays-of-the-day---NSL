<?php
   require_once __DIR__."../../classes/config/Banco.php";
?>

<section class="container-fluid imagem-principal">
 <div class="container">
  <div class="row rw-padding-55px">
  <div class="logo"></div>
  <div class="barra-vertical"></div>
  <div class="nomes">

    <h3>3ºM01EMINF</h3>
    <p>Jhonatan Albernaz, <br> Júlio Amorim e <br> Milleny Soares.</p>

  </div>
   <div class="col-lg-2"></div>
   <div class="col-lg-8">
   <h2 class="title-h2"> Nossos parabéns a: </h2>
    <div class="div-com-conteudo">
    <div class="height-e-widht">
     <div class="div-box-shadow">

        <?php

            $stmt = Banco::getInstance()->prepare("SELECT nome, funcao FROM  Aniversariantes WHERE dataNasc = :dataNasc");
            $data = date("Y-m-d");
            $stmt->bindParam("dataNasc", $data);
            if($stmt->execute()){
                if($stmt->rowCount() > 0){
                    while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                    echo "<h3>$row->nome</h3>";
                    echo "<h4>$row->funcao</h4>";
                    }
            }else {
                $stmt = Banco::getInstance()->prepare("SELECT * FROM Aniversariantes WHERE month(dataNasc) = month(now())");
                if($stmt->execute()){
                    if($stmt->rowCount() > 0){
                        echo "<h1 class=\"h2\">Aniversariantes do mês<h1>";
                        while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                            echo "<h3>$row->nome</h3>";
                            echo "<h4>$row->funcao</h4>";
                            echo "<h4>$row->dataNasc</h4>";
                        }
                    }
                }else{
                    echo "<p>Erro ao executar a consulta</p>";
                }
            }
            }else{
                echo "<p>Erro ao executar a consulta</p>";
            }
        ?>

     </div>
    </div>
    </div>
   </div>
   <div class="col-lg-2">
    <div class="div-data">
     <?php
        $data = date("d/m");

        echo "<h2> $data </h2>";
     ?>
    </div>
   </div>
  </div>   
 </div>
</section>   