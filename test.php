<?php

/**
 * Created by Jose Alain Diaz C.
 * Date: 26/06/2020
 */


 //Here you can modify the expected values to check the exit of the program

function test() {
    $testValue = "1,2,Falabella,4,IT,Falabella,7,8,Falabella,IT,11,Falabella,13,14,Linio,16,17,Falabella,19,IT,Falabella,22,23,Falabella,IT,26,Falabella,28,29,Linio,31,32,Falabella,34,IT,Falabella,37,38,Falabella,IT,41,Falabella,43,44,Linio,46,47,Falabella,49,IT,Falabella,52,53,Falabella,IT,56,Falabella,58,59,Linio,61,62,Falabella,64,IT,Falabella,67,68,Falabella,IT,71,Falabella,73,74,Linio,76,77,Falabella,79,IT,Falabella,82,83,Falabella,IT,86,Falabella,88,89,Linio,91,92,Falabella,94,IT,Falabella,97,98,Falabella,IT,";
    return (main(1,100) == $testValue);
  }
