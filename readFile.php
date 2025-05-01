<?php
$fname = $_POST['namaFile'] . '.html';
$tagName = $_POST['namaTag'];
$newTagName = $_POST['nTagBaru'];
$type = $_POST['tipe'];

if (file_exists($fname)) {
    $content = file_get_contents($fname);
    $content = str_replace("<$tagName>", "<$newTagName>", $content);
    $content = str_replace("</$tagName>", "</$newTagName>", $content);

    if(strtoupper($type) === 'O'){
        $output_file = $fname;
    }else if(strtoupper($type) === 'N'){
        $pathinfo = pathinfo($fname);
        $output_file = $pathinfo['filename'] . '-new.' . $pathinfo['extension'];
        
        //apabila file -new sudah ada
        $counter = 1;
        while(file_exists($output_file)){
            $output_file = $pathinfo['filename'] . '-new' . "($counter)." . $pathinfo['extension'];
            $counter++;
        };
    }else{
        die('Jenis Tipe Keluaran Tidak Valid');
    };
    file_put_contents($output_file, $content);

    //menampilkan file HTML setelah penggantian tag
    header("Location: $output_file");

}else {    
    die('Nama file tidak ditemukan.');
 }    

?>