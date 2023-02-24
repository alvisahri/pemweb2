<?php
$profilearray = [
   [
        "nama" => "Alvi Sahri", 
     "kelas" => "TI06",
     "ipk" => 4,  
     "masih_otw" => true 
    ], [
        "nama" => "Alvi Sahri", 
     "kelas" => "TI07",
     "ipk" => 4,  
     "masih_otw" => true 
    ]
];

foreach($profilearray as $profile) {
    echo $profile['nama']; 
    echo $profile['kelas'];
    echo $profile['ipk'];
    
}