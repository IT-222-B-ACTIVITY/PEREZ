<?php

class Car {
 
    public $tank;
    
    // Add gallons of fuel to the tank when we fill it.
    public function fill($float)
    {
      $this-> tank += $float;
   
      return $this;
    }
    
    // Substract gallons of fuel from the tank as we ride the car.
    public function ride($float)
    {
      $miles = $float;
      $gallons = $miles/50;
      $gallons = $kg/2.56;
      $this-> tank -= ($gallons);
   
      return $this;
    }
  }
// Create a new object from the Car class.
$bmw = new Car();
 
// Add gallons of fuel, then ride miles, 
// and get the number of gallons in the tank. 
$tank = $bmw -> fill(20) -> ride(40) -> tank;
 
// Print the results to the screen.
echo "The number of gallons left in the tank: " . $tank . " gal.";
?>
