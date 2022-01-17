<?php

    require_once "connect.php";

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($polaczenie->connect_errno!=0)
    {
        echo "<br /><br /><br /><br />Error: ".$polaczenie->connect_errno;
    }
    else
    {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];     
        
        $sql = "SELECT * FROM uzytkownik WHERE login='$login' AND haslo='$haslo'";

        if ($rezultat = @$polaczenie->query($sql))
        {
            $ilu_userow = $rezultat->num_rows;
            if($ilu_userow>0)
            {
                $wiersz = $rezultat->fetch_assoc();
                $login = $wiersz['login'];
                $id = $wiersz['id'];
                $imie = $wiersz['imie'];

                $rezultat->free_result();

                echo "Login: <br />";
                echo $login;
                echo "<br /><br /> Id: <br />";
                echo $id;
                echo "<br /><br /> Imie: <br />";
                echo $imie;

            } else {

            }
        }



        else { 
            echo "blad przy sprawdzaniu czy rezultat rowna sie polaczenie->query";
        }

        $polaczenie->close();
    }


?>