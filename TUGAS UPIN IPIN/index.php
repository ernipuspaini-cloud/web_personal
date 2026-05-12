<?php
/*
1. buat pengulangan 1 - 50
2. jika bilangan tersebut habis dibagi 3 maka bilangan diganti teks "Ipin"
3. jika bilangan tersebut habis dibagi 5 maka bilangan diganti teks "Upin"
4. jika bilangan tersebut habis dibagi 3 dan 5 maka bilangan diganti teks "Ipin Upin Selamanya"
*/

for ($hit = 1; $hit <= 50; $hit++) {
    // habis dibagi 3 dan 5
    if ($hit % 3 == 0 && $hit % 5 == 0) 
    { echo "Ipin Upin Selamanya <br>"; }

    // jika habis dibagi 3 maka ubah jdi ipin
    elseif ($hit % 3 == 0) 
        {echo "Ipin <br>";}

    // jika habis dibagi 5 maka ubah menjadi upin
    elseif ($hit % 5 == 0) 
        {echo "Upin <br>";}

    // selain dari pada itu tampilkan angka
    else {echo "$hit <br>";}
}
?>