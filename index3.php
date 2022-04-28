
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora simples em php</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="center">
    <h1 class="page-header text-center">Simples Calculadora de Aniversário</h1>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form method="POST">
                <div class="form-group">
                    <label>Aniversário:</label>
                    <input type="date" name="birthday" class="form-control" required>
                </div>
                <button type="submit" name="calculate" class="btn btn-primary">Calcular</button>
            </form>
 
            <?php
                if(isset($_POST['calculate'])){
                    $bday = $_POST['birthday'];
                    $today = date('Y-m-d');
                    $diff = date_diff(date_create($bday), date_create($today));
                    ?>
                    <div class="alert alert-info text-center" style="margin-top:40px;">
                        <?php echo '<b>'.$diff->format('%y').'</b>'. ' Anos <b>'; ?>
                    </div>
                    <?php
                }
 
            ?>
        </div>
    </div>
</div>
</body>
</html>






