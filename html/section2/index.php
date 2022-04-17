<?

$conn = pg_connect("host=postgres port=5432 dbname=mibasegalo user=galo password=admin");
$result = pg_query($conn, "SELECT * FROM pg_catalog.pg_tables");


if ($conn) {
    echo "conectado";
}
else {
    echo "<h1>Imposible Conectar</h1>";
}

while($row = pg_fetch_object($result)){
    echo "<br>".$row->tablename."\t".$row->rowsecurity;
}
pg_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <title></title>
</head>

<body>
    <h1>Hola Seccion2!!!1</h1>
    <h2>Hola Seccion2!!!2</h2>
    <h3>Hola Seccion2!!!3</h3>
</body>

</html>
