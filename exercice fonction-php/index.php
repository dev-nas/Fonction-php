En utilisant la boucle for, imprimez uniquement les nombres pairs entre 0 et 10.

($i=0; $i<=10;$i++) {






function

<?php
    function sayHello() {
        echo "Hello!";
    }

    sayHello(); //call the function

?>
               ------

<?php
    function multiplyByTwo($number) {
        $answer = $number * 2;
        echo $answer;
    }
    multiplyByTwo(3);
?>


               ------

<?php
    function multiply($num1, $num2) {
        echo $num1 * $num2;
    }
    multiply(3, 6);//résult Counter is 42 
                          //Counter is 10
?>

       
              ------
<?php
    function setCounter($num=10) {
        echo "Counter is ".$num."<br />";
    }
    setCounter(42);  //Counter is 42
    setCounter();  //Counter is 10
?>



<?php
    function mult($num1, $num2) {
        $res = $num1 * $num2;
        return $res;
    }

    echo mult(8, 3); //result 24
?>