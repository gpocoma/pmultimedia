<?
    $conn = pg_connect("host=postgres port=5432 dbname=mibasegalo user=galo password=admin");
    if ($conn) {
        echo '<div class="alert alert-success" role="alert">Conectado</div>';
    }
    else {
        echo '<div class="alert alert-danger" role="alert">Conectado</div>';
    }
?>
