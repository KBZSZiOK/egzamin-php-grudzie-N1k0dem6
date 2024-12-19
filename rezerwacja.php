<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "baza2";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $data = $_POST['data'];
    $ilosc_osob = $_POST['ilosc_osob'];
    $nr_tel = $_POST['tel_number'];
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                }
        
        if (isset($_POST['submit'])) {

          $sql = "INSERT INTO rezerwacje VALUES (NULL, NULL, '$data', $ilosc_osob, $nr_tel )";
          $dodawanie_danych = mysqli_query($conn, $sql);
        
          echo "Dodano rezerwację do bazy";

        mysqli_close($conn);
            };
?>
