<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
        /* 
            SOAL NO 1
            Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam kalimat tersebut! 

            Contoh: 
            $string = "PHP is never old";
            Output:
            Panjang string: 16, 
            Jumlah kata: 4 
        */
        

            $string = "PHP is never old";
            echo "Hitung kalimat berikut : " . $string . "<br>";

            // Menghitung panjang string
            $panjangString = strlen($string);

            // Menghitung jumlah kata
            $jumlahKata = str_word_count($string);

            // Menampilkan hasil
            echo "Panjang string: " . $panjangString . "<br>";
            echo "Jumlah kata: " . $jumlahKata;

        


        $first_sentence = "Hello PHP!" ; // Panjang string 10, jumlah kata: 2
        $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5
        
        echo "<h3> Soal No 2</h3>";
        /* 
            SOAL NO 2
            Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
            
            
        */
        $string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        // Lanjutkan di bawah ini
        // Mencari posisi spasi pertama
        $posSpasi1 = strpos($string2, " ");

        // Mencari posisi spasi kedua
        $posSpasi2 = strpos($string2, " ", $posSpasi1 + 1);

        echo "Kata kedua: " . substr($string2, $posSpasi1 + 1, $posSpasi2 - $posSpasi1 - 1) . "<br>";
        echo "Kata ketiga: " . substr($string2, $posSpasi2 + 1) . "<br>";


        echo "<h3> Soal No 3 </h3>";
        /*
            SOAL NO 3
            Mengubah karakter atau kata yang ada di dalam sebuah string.
        */
        $string3 = "PHP is old but sexy!";
        $string3 = str_replace("sexy", "awesome", $string3);
        echo "String: \"$string3\" "; 
        // OUTPUT : "PHP is old but awesome"

    ?>
</body>
</html>