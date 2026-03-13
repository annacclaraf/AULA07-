<?php

$nota1 = $_POST['txtnota1'];
$nota2 = $_POST['txtnota2'];
$nota3 = $_POST['txtnota3'];
$frequencia = $_POST['txtfreq'];
$estado = "";
$alertype = "";

$media = ($nota1 + $nota2 + $nota3) /3;


if($frequencia < 75){
    $estado = "Reprovado por Faltas";
}else{
    if($media >= 7){
         $estado = "Aprovado";
       echo" <div class='alert alert-success' role='alert'>
            $estado;
        </div>";
    }else if($media >= 4 && $media < 7){
         $estado = "Recuperação";
        echo "<div class='alert alert-warning' role='alert'>
            $estado;
        </div>";
    }else{
        $estado = "Reprovado por Nota";
       echo "<div class='alert alert-danger' role='alert'>
            $estado;
</div>";
    
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
        <div class="card">
  <div class="card-header">
    Sistema de Aprovação Escolar
  </div>
  <div class="card-body">
      <blockquote class="blockquote">
         <p><?php echo "  Sistema de Aprovação Escolar: $estado"?></p>
      </blockquote>
  </div>
</div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>