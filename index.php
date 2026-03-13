<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Sistema de Aprovação Escolar</h1>
                <form action="recebaDados1.php" method="POST">
                    <div class="mb-3">
                        <label for="campoNota1" class="form-label">Nota 1:</label>
                        <input type="Number" step="any" class="form-control" id="campoNota1"  name="txtnota1">
                    </div>
                     <div class="mb-3">
                        <label for="campoNota2" class="form-label">Nota 2:</label>
                        <input type="Number" step="any" class="form-control" id="campoNota2"  name="txtnota2">
                    </div>
                    <div class="mb-3">
                        <label for="campoNota3" class="form-label">Nota 3:</label>
                        <input type="Number" step="any" class="form-control" id="campoNota3" name="txtnota3">
                    </div>
                    <div class="mb-3">
                        <label for="campoFrequencia" class="form-label">Frequencia:</label>
                        <input type="Number" step="any" class="form-control" id="campoFrequencia" name="txtfreq">
                    </div>
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>
                </form>
            </div>
            

            </div> 
            
        </div>
    </div>

    







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>