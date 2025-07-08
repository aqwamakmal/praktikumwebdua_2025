<?php
     $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu"];
     // menampilkan buah index ke 1
    echo $ar_buah[1];
    // menampilkan jumlah buah 
    echo "<br/>Jumlah Buah" . count($ar_buah);

    // menampilkan seluruh buah 
    echo "<ol>";
    foreach ($ar_buah as $buah ){
        echo "<li>", $buah . "</li>";
    }
    echo "</ol>";

    // menambahkan buah 
    echo $ar_buah[] = "Apel";

    // menghapus buah index ke 1 
    unset($ar_buah[1]);

    // mengubah index ke 2 menjadi manggis 
    $ar_buah[2] = "manggis";

    // Menampilkan seluruh buah dengan index nya 
    echo "<ul>";
    foreach ($ar_buah as $Buah => $v){
        echo "<li>Buah index - " .$Buah , " adalah " , "</li>";
    }
    echo "</ul>"; 

    echo "<ul>";
    sort($ar_buah);
    foreach ($ar_buah as $Buah => $v){
        echo "<li>Buah index - " .$Buah , " adalah " , "</li>";
    }
    echo "</ul>"; 
?>