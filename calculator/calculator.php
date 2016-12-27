<?php   
//   if (isset($_POST['submit'])) {
//     $aa=$_POST['first'];
//     $ab=$_POST['second'];
//     $ac=$_POST['cal'];
//   } else{
//   echo "no value to operate";
// }
    
 class TestPhp 
          {
        private $a, $b ; 
        function _constructor($a, $b){
            
            $this->$a=$a;
            $this->$b=$b;
        }
        function add($a, $b){
              $result=$a +$b;
            return $result;
        }
        function multiply($a, $b){
            $result=$a*$b;
            return $result;
        }
        function divison ($a,$b){
            $result=$a/$b;
            return $result;

        }
        function subtraction($a , $b){ 
            if ($a>$b) {
              $result=$a-$b;
                return $result;
            }else{ 
                  $result  =$b-$a;
                return  $result ;
            }
            
        }
}
// $TestPhpObj =new TestPhp;
//     $this->$ac=$ac;
//   switch ($ac){
//     case 'add':
//     print $res=$TestPhpObj->add($aa,$ab);
//     break;
//     case 'subtract':
//     print $res=$TestPhpObj-> subtraction($aa,$ab);
//     break;
//     case 'divide':
//     print $res=$TestPhpObj->divison($aa,$ab);
//     break;
//     case 'multiply':
//     print $res=$TestPhpObj->multiply($aa,$ab);
//     break;
  
//     default:
//       echo "why this";
//  }


 // header("Location: index.php?msg=".$res);


?>