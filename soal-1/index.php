<?php 

class Hitung{
    public function intro(){
        echo 'Ini soal pertama, semoga saya sukses! </br>';
    }

    public function ganjil(int $angkaku){
        if($angkaku % 2 != 0){
            echo 'Angka Ganjil</br>';
        }else{
            echo 'Angka bukan Ganjil</br>';
        }
    }

    public function sisaBagi(int $angkaku){
        $value = $angkaku % 2;

        echo 'Sisa bagi '.$value.'</br>';
    }

    public function akreditasi($ipk){
        if($ipk >= 0.00 && $ipk <= 4.00){
            if($ipk >= 0.00 && $ipk <= 2.00){
                echo 'Masih kurang, jangan mau nasakom!</br>';
            }else if($ipk >= 2.00 && $ipk <= 3.00){
                echo '“Harus berjuang lebih di semester berikutnya!</br>';
            }else if($ipk >= 3.00 && $ipk <= 3.50){
                echo 'Cukup, tapi bisa lebih baik dari ini!</br>';
            }
            if($ipk >= 3.50){
                echo 'Yes!! Tinggal berjuang Cumlaude nih!!</br>';
            }
        }else{
            echo 'Angka tidak valid</br>';
        }

    }
}

$hitung = new Hitung();
$hitung->intro();
$hitung->ganjil(5);
$hitung->ganjil(6);
$hitung->sisaBagi(7);
$hitung->akreditasi(3.25);
$hitung->akreditasi(3.75);