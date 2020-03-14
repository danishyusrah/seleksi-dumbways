<?php 
echo "--- panjang ---</br>";
cetak_gambar(5);
function cetak_gambar($sisi){
    $from = 0;
    for($x=$from;$x<=$sisi;$x++){
        for($y=$from;$y<=$sisi;$y++){
            if($x==$from or $x==$sisi){
                echo "= ";
            }else{
                if( ($y%3) != 0){
                    echo "* ";
                }else{
                    echo "= ";
                }
            }
           
        }
        echo "</br>";
    }
}
?>