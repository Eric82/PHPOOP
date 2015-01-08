<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Car {
            public $firstName = "default name";
            public $year = "default name";
            public $price = "0";
        
            function getName(){
                return"{$this->firstName}" .
                "{$this->year}";        
            }
        }
        $Car1 = new Car();
        $Car1->firstName = "Honda";
        $Car1->year = "2005";
        
        print"The car's name is {$Car1->getName()}";
        //this will print out to the screen.
        
        class iphone{
            public $firstName = "default name";
            public $type = "default";
            public $price = "0";
            
            function getName(){
                return"{$this->firstName}" .
                "{$this->type}";        
            } 
        }
        $iphone1 = new iphone();
        $iphone1->firstName = "iphone";
        $iphone1->type = "6 plus";
        print"The phone is a {$iphone1->getName()}";
        
        
        class cereal{
            public $firstName = "default name";
            public $type = "default name";
            public $price = "0";
            
            function getName(){
                return"{$this->firstName}" .
                "{$this->type}";        
            }   
        }
        $cereal1 = new cereal();
        $cereal1->firstName = "coco";
        $cereal1->type = "puffs";
        print"The cereal is called {$cereal1->getName()}";
        ?>
    </body>
</html>