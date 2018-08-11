## About Project

Laravel api for generating random strings,floats,integers,arrays and etc.
Just generate what you need with Randomcrap

## Requirements

* [Composer](https://getcomposer.org/)
* [Laravel](https://laravel.com/)

## Installation

Require package:
``` bash
composer require seymuromarov/randomcrap
```

Now add the service provider in config/app.php file:
```  
'providers' => [
    // ...
        Seymuromarov\Randomcrap\RandomcrapServiceProvider::class,
],
```

after this add alias in config/app.php file:

``` 
'aliases' => [
 //...
        'Randomcrap' => Seymuromarov\Randomcrap\Facades\Randomcrap::class,
 ],
```

use command (optional): 
``` 
composer dump-autoload
```
now u can use api like this 
```
use Seymuromarov\Randomcrap\Facades\Randomcrap;
 //...
    Randomcrap::int(); //will return 6 length int value
    Randomcrap::string(); //will return 6 length string
```

Random Int Generators
```
    Randomcrap::int(); //will return 6 length int value
    Randomcrap::int($len); //will return int value with given length
    Randomcrap::intInRange($min,$max); //will return int value between $min and $max values
```

Random Float Generators
```
    Randomcrap::floatInRange($min,$max); //will return float value between $min and $max values with 2 decmials
    Randomcrap::floatInRange($min,$max,$decimals); //will return float value between $min and $max values with given decmials
    Randomcrap::float(); //will return 6 length float value
    Randomcrap::float($len); //will return float value with given length
    Randomcrap::float($len, $decimals = 2); //will return float value with given length and decmials 
```


Random String Generators
```
    $len value is optional default $length is 6
    Randomcrap::string(); //will return 6 length string
    Randomcrap::string($len); //will return string value with given length
    Randomcrap::stringWithNumber($len); //sAs4E2
    Randomcrap::upperCaseStringWithNumber($len); //A4DD2F
    Randomcrap::lowerCaseStringWithNumber($len); //dsa12e
    Randomcrap::upperCaseString($len); //ADVADC
    Randomcrap::lowerCaseString($len); //fsalds   
```

Random Array Generators
```
    Randomcrap::intArray($intLength = 2, $arrayLength = 5); // [49,85,13,48,28]
    Randomcrap::floatArray($floatLength = 2, $arrayLength = 5, $decimals = 2); // [98.99,58.65,86.7,93.79,68.92]
    Randomcrap::stringArray($stringLength = 6, $arrayLength = 5); // ["LKOwRT","gUVKXi","zkFuoa","ayxQCJ","bDNjLP"]
    Randomcrap::stringArrayWithNumber($stringLength = 6, $arrayLength = 5); // ["XA9Fna","sWE9ml","NUG2Zu","7C32IN","xWC1dV"]
    Randomcrap::lowerCaseStringArray($stringLength = 6, $arrayLength = 5); //  ["jskotg","cionzy","obixhe","radypg","nfotkz"]
    Randomcrap::upperCaseStringArray($stringLength = 6, $arrayLength = 5); //  ["NQJERM","GAWOCQ","KBINMS","BDCFHZ","NQGCLO"]
```
