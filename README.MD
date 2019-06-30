## Challenge – Backend Developer
Write a program that prints all the numbers from 1 to 100. However, for multiples of 3, instead of the number, print "Linio". For multiples of 5 print "IT". For numbers which are multiples of both 3 and 5, print "Linianos".

But here's the catch: you can use only one `if`. No multiple branches, ternary operators or `else`.

### Requirements
* 1 if
* You can't use `else`, `else if` or ternary
* Unit tests
* Feel free to apply your SOLID knowledge
* You can write the challenge in any language you want. Here at Linio we are big fans of PHP, Kotlin and TypeScript

### Installation

    php composer.phar install
    
### Execute

a basic example controller is included in index.php

    $repository = new InMemoryRepository();
    $app = new Challenge($repository);
    print(json_encode($app(), JSON_PRETTY_PRINT));
    
to run the program execute the following line

    php index.php
    
### Run Unit Test

    php vendor/bin/phpunit test
    
### Candidate

* Mario Hidalgo García