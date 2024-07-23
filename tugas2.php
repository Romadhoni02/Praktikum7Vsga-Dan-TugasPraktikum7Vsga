<?php 
    echo "<h3>Penjumlahan bilangan genap dari 2 hingga 24</h3>"; 
    $i = 2; 
    $sum = 0; 
    while ($i <= 24) { 
        $sum += $i; 
        $i += 2; 
    } 
    echo "Hasil penjumlahan: " . $sum; 
?>
