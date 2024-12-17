<?php
    if (isset($_POST['submit'])) {
        $data = $_POST['data'];
        $ilosc_osob = $_POST['ilosc_osob'];
        $nr_tel = $_POST['tel_number'];
        $zgoda = $_POST['dane_osobowe'];
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "baza2";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "INSERT INTO rezerwacje VALUES (NULL, 1, "2017-07-04", 4, "111222333" )";
        echo "Dodano rezerwację do bazy";

        mysqli_close($conn);
    };
?>