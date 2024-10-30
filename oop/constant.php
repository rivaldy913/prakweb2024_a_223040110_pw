<?php
// define('NAMA', 'Rivaldy Novyan Dwi Putra');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;


// class Coba {
//   const NAMA = 'Rivaldy';
// }

// echo COBA::NAMA;


//echo __FILE__;

// function coba() {
//     return __FUNCTION__;
// }

// // echo coba();

class Coba {
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>