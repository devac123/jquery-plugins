<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname='.$db, $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>