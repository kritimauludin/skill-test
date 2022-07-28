
Tidak ada yang dipilih 

Lewatkan ke konten
Menggunakan Gmail dengan pembaca layar
in:sent 
Meet
Rapat baru
Gabung ke rapat
Hangout

Percakapan
7,8 GB dari 15 GB telah digunakan
Persyaratan · Privasi · Kebijakan Program
Aktivitas akun terakhir: 1 jam yang lalu
Detail

<!-- tier 2 -->
<?php 

class Utils{
    function atm($jumlahTarik){
        if($jumlahTarik >= 20000 && $jumlahTarik <= 10000000){
            $nomimal1 = $jumlahTarik % 100000;
            $nomimal2 = $nomimal1 % 50000;
            $nomimal3 = $nomimal2 % 20000;

            $lembarSeratus = ($jumlahTarik - $nomimal1) / 100000;
            
            $lembarLimaPuluh = ($nomimal1 - $nomimal2) / 50000;

            $lembarDuaPuluh = ($nomimal2 - $nomimal3) / 20000;

            if ($lembarSeratus != 0){
                echo $lembarSeratus.' lembar 100.000';
            }else if ($lembarLimaPuluh != 0){
                echo $lembarLimaPuluh.' lembar 50.000';
            }else if ($lembarDuaPuluh != 0){
                echo $lembarDuaPuluh.' lembar 20.000';
            }

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

$utils->atm(51200);
$utils->investasiKu(10000, 10, 3);