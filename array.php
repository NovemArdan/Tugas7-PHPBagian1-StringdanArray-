<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = array(
            "Mike",
            "Dustin",
            "Will",
            "Lucas",
            "Max",
            "Eleven"
          );
          
          $adults = array(
            "Hopper",
            "Nancy",
            "Joyce",
            "Jonathan",
            "Murray"
          );

          echo "Kids: ";
          echo implode(", ", $kids); // Print array elements separated by comma and space
          echo "<br>";
          echo "\nAdults: ";
          echo implode(", ", $adults);

    echo "<h3> Soal 2</h3>";
    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: ";
    echo "<br>";

    // Menghitung panjang array kids
    $totalKids = count($kids);

    echo "Total Kids: $totalKids"; // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    // Menampilkan isi array kids
    for ($i = 0; $i < $totalKids; $i++) {
        echo "<li>$kids[$i]</li>";
    }
    // Lanjutkan

    echo "</ol>";
    $totalAdults = count($adults);
    echo "Total Adults: $totalAdults "; // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    
    // Menampilkan isi array adults
    for ($i = 0; $i < $totalAdults; $i++) {
        echo "<li>$adults[$i]</li>";
    }
    // Lanjutkan

    echo "</ol>";

    /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"


            Output:
            Array
                (
                    [0] => Array
                        (
                            [Name] => Will Byers
                            [Age] => 12
                            [Aliases] => Will the Wise
                            [Status] => Alive
                        )

                    [1] => Array
                        (
                            [Name] => Mike Wheeler
                            [Age] => 12
                            [Aliases] => Dugeon Master
                            [Status] => Alive
                        )

                    [2] => Array
                        (
                            [Name] => Jim Hooper
                            [Age] => 43
                            [Aliases] => Chief Hopper
                            [Status] => Deceased
                        )

                    [3] => Array
                        (
                            [Name] => Eleven
                            [Age] => 12
                            [Aliases] => El
                            [Status] => Alive
                        )

                )
            
        */

        $characters = array(
            array(
              "Name" => "Will Byers",
              "Age" => 12,
              "Aliases" => "Will the Wise",
              "Status" => "Alive"
            ),
            array(
              "Name" => "Mike Wheeler",
              "Age" => 12,
              "Aliases" => "Dungeon Master",
              "Status" => "Alive"
            ),
            array(
              "Name" => "Jim Hopper",
              "Age" => 43,
              "Aliases" => "Chief Hopper",
              "Status" => "Deceased"
            ),
            array(
              "Name" => "Eleven",
              "Age" => 12,
              "Aliases" => "El",
              "Status" => "Alive"
            )
          );
          
          // Menampilkan isi array multidimensi asosiatif
          echo "<h3>Output:</h3>";
          echo "<pre>";
          print_r($characters);
          echo "</pre>";
          
    ?>
</body>

</html>