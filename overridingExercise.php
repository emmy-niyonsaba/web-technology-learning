<?php


 class Animal{
    public function sound(){
        return  "Animal must have sound";
    }
 } 

    class Dog extends Animal{
     public function sound(){
        return "The dog sound";
     }
    }
    class Cat extends Animal{

    }




 $newAnimal = new Animal();
 $newDog = new Dog();
 $newCat = new Cat();
 
 echo $newDog->sound();
 echo $newCat->sound();

// 


?>