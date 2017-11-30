<?php
	include("header.php");
	//var_dump($_POST);
	
		
		include("db_connect.php");

        for($i = 0; $i< count($_POST['medicijn']); $i++){
            $query = "select * from `medicijnen` where id=".$_POST['medicijn'][$i]."";
            $result = mysqli_query($conn, $query);
            $record = mysqli_fetch_assoc($result);
            
            if($record['akb'] > 90){
                $aantal = 100 - $record['voorraad'];
                $bijbestellen = $aantal + $record['voorraad'];
                $query2 = "update `medicijnen` set `voorraad` = ".$bijbestellen." where `id`=".$_POST['medicijn'][$i]."";
                $result2 = mysqli_query($conn, $query2);
            }
            elseif($record['akb'] >80){
                $aantal = 90 - $record['voorraad'];
                $bijbestellen = $aantal + $record['voorraad'];
                $query2 = "update `medicijnen` set `voorraad` = ".$bijbestellen." where `id`=".$_POST['medicijn'][$i]."";
                $result2 = mysqli_query($conn, $query2);
            }
            elseif($record['akb'] >70){
                $aantal = 80 - $record['voorraad'];
                $bijbestellen = $aantal + $record['voorraad'];
                $query2 = "update `medicijnen` set `voorraad` = ".$bijbestellen." where `id`=".$_POST['medicijn'][$i]."";
                $result2 = mysqli_query($conn, $query2);
            }
            elseif($record['akb'] >60){
                $aantal = 70 - $record['voorraad'];
                $bijbestellen = $aantal + $record['voorraad'];
                $query2 = "update `medicijnen` set `voorraad` = ".$bijbestellen." where `id`=".$_POST['medicijn'][$i]."";
                $result2 = mysqli_query($conn, $query2);
            }
            elseif($record['akb'] >50){
                $aantal = 60 - $record['voorraad'];
                $bijbestellen = $aantal + $record['voorraad'];
                $query2 = "update `medicijnen` set `voorraad` = ".$bijbestellen." where `id`=".$_POST['medicijn'][$i]."";
                $result2 = mysqli_query($conn, $query2);
            }
            elseif($record['akb'] >40){
                $aantal = 50 - $record['voorraad'];
                $bijbestellen = $aantal + $record['voorraad'];
                $query2 = "update `medicijnen` set `voorraad` = ".$bijbestellen." where `id`=".$_POST['medicijn'][$i]."";
                $result2 = mysqli_query($conn, $query2);
            }
            elseif($record['akb'] >30){
                $aantal = 40 - $record['voorraad'];
                $bijbestellen = $aantal + $record['voorraad'];
                $query2 = "update `medicijnen` set `voorraad` = ".$bijbestellen." where `id`=".$_POST['medicijn'][$i]."";
                $result2 = mysqli_query($conn, $query2);
            }
            elseif($record['akb'] >20){
                $aantal = 30 - $record['voorraad'];
                $bijbestellen = $aantal + $record['voorraad'];
                $query2 = "update `medicijnen` set `voorraad` = ".$bijbestellen." where `id`=".$_POST['medicijn'][$i]."";
                $result2 = mysqli_query($conn, $query2);
            }
            elseif($record['akb'] >10){
                $aantal = 20 - $record['voorraad'];
                $bijbestellen = $aantal + $record['voorraad'];
                $query2 = "update `medicijnen` set `voorraad` = ".$bijbestellen." where `id`=".$_POST['medicijn'][$i]."";
                $result2 = mysqli_query($conn, $query2);
            }
            else{
                $aantal = 10 - $record['voorraad'];
                $bijbestellen = $aantal + $record['voorraad'];
                $query2 = "update `medicijnen` set `voorraad` = ".$bijbestellen." where `id`=".$_POST['medicijn'][$i]."";
                $result2 = mysqli_query($conn, $query2);
            }
        }

        if($result){
            echo "Succesvol bijbesteld";
            header("refresh:2; url=voorraad_overzicht.php");
        }
        else{
            echo "Niet succesvol bijbesteld";
            header("refresh:2; url=voorraad_overzicht.php");
        }