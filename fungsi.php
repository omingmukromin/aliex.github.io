<?php
function RandomString($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function getID(){
    $dir 		= scandir('sitemap/aliexpress-sitemap/');
    $kwtxt 		= file_get_contents('sitemap/aliexpress-sitemap/'.$dir[rand(2,count($dir)-1)]);
    $kwArr 		= preg_split('/\r\n|\r|\n/', $kwtxt);
    $indexRand 	= array_rand($kwArr,10);
    $newArr = array();
    foreach ($indexRand as $idx){
        array_push($newArr,$kwArr[$idx]);
    }
    return $newArr;
}
$ID1 = getID();
$ID2 = getID();
$ID3 = getID();
?>