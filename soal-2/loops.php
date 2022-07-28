<!-- tier 2 -->
<?php 

class Utils{
    function atm($jumlahTarik){
        $lembarSeratus = 0; $lembarLimaPuluh = 0; $lembarDuaPuluh = 0;

        if($jumlahTarik >= 20000 && $jumlahTarik <= 10000000){
            if($jumlahTarik % 20000 == 0 && $jumlahTarik < 100000){
                $lembarDuaPuluh = $jumlahTarik / 20000;
            }else{
                $nomimal1 = $jumlahTarik % 100000;
                $nomimal2 = $nomimal1 % 50000;
                $nomimal3 = $nomimal2 % 20000;

                $lembarSeratus = ($jumlahTarik - $nomimal1) / 100000;
                
                $lembarLimaPuluh = ($nomimal1 - $nomimal2) / 50000;

                $lembarDuaPuluh = ($nomimal2 - $nomimal3) / 20000;
            }

            echo 'Jumlah Tarik (Rp.'.$jumlahTarik.') = ';
            if ($lembarSeratus != 0){
                echo $lembarSeratus.' lembar 100.000 ';
            }
            if ($lembarLimaPuluh != 0){
                echo $lembarLimaPuluh.' lembar 50.000 ';
            }
            if ($lembarDuaPuluh != 0){
                echo $lembarDuaPuluh.' lembar 20.000 ';
            }
            echo '</br>';

        }else{
            echo 'nilai tidak boleh kurang dari 20000 dan tidak boleh lebih dari 10000000';
        }
    }

    function investasiKu($saldo, $bunga, $jumlahTahun){
        $saldoAkhir = $saldo;
        for($i = 1; $i<=$jumlahTahun; $i++){
            $hasilBunga = (($bunga/100) * $saldoAkhir);

            $saldoAkhir += $hasilBunga;
        }

        echo '<br>'.$saldoAkhir;
    }
}

$utils = new Utils;

$utils->atm(70000);
$utils->atm(60000);
$utils->atm(270000);
$utils->atm(7000000);
$utils->atm(51200);
$utils->atm(120000);
$utils->investasiKu(10000, 10, 3);