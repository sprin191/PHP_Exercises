<html>
    <p>
	  <?php
    // Create an array and push on the names of your closest family and friends.
	  $family = array();
    array_push($family, "Nona");
    array_push($family, "Brad");
    array_push($family, "Hannah");
    array_push($family, "Hayley");
    array_push($family, "Helena");
    array_push($family, "Sam");

	  // Sort the list
    sort($family);

    // Randomly select a winner!
    $total = count($family) - 1;
    $winner = rand(0, $total);

	  // Print the winner's name in ALL CAPS
    print strtoupper($family[$winner]);
	?>
	</p>

  <p>
  <?php

  //Write a function called aboutMe. It takes two parameters $name and $age. It should echo out "Hello! My name is $name, and I am $age years old.". Call your function and check out the results panel to see if it works!
  function aboutMe($name, $age) {
      echo "Hello! My name is " . $name . ", and I am " . $age . " years old.";
  }

  print aboutMe("Hannah", 24);

  ?>
</p>

//Create a class called Cat. Add two public properties to this class: $isAlive ought to store the value true and $numLegsshould contain the value 4. Add a public $name property, which gets its value via the __construct()or. Add a public method called meow(), which returns "Meow meow". Create an instance of the Cat class, which has the $name "CodeCat". Call the meow() method on this Cat and echo the result.

<p>
        <?php
        class Cat {
            public $isAlive = true;
            public $numLegs = 4;
            public $name;
            public function __construct($name) {
            $this->name = $name;
            }
            public function meow() {
            return "Meow meow!"
            }
        }

        $cat1 = new Cat("CodeCat");

        echo $cat1->meow();

        ?>
</p>
</html>
