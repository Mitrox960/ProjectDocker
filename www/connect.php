<?php
    $host = "db"; 
    $port = "5432"; 
    $db = "gestion_produits";
    $user = "postgres";
    $password = "root";

    $conn_string = "host={$host} port={$port} dbname={$db} user={$user} password={$password}";

    $dbconn = pg_connect($conn_string);

    if (!$dbconn) {
        die("Erreur de connexion à la base de données PostgreSQL: " . pg_last_error());
    } else {
        echo "Connexion réussie à la base de données PostgreSQL.";
    }

    pg_close($dbconn);
?>
