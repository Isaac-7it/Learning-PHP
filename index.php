<!-- <form method="POST" action="order.php">
Braised Noodles with: <select name="noodle">
<option>crab meat</option>
<option>mushroom</option>
<option>barbecued pork</option>
<option>shredded ginger and green onion</option>
</select>
<br/>
Sweet: <select name="sweet[]" multiple>
<option value="puff"> Sesame Seed Puff
<option value="square"> Coconut Milk Gelatin Square
<option value="cake"> Brown Sugar Cake
<option value="ricemeat"> Sweet Rice and Meat
</select>
<br/>
Sweet Quantity: <input type="text" name="sweet_q">
<br/>
<input type="submit" name="submit" value="Order">
</form> -->

<?php
// declare(strict_types = 1);
// $person = ['name' => 'Kylian','occupation' => 'Footballer', 'age' => 35, 'bmi' => 13.5, 'is_active' => true]; //Associated Array

// $he = 'Bob';
// $she = 'Alice';

// $formatted_text = <<<IDENTITY
// Bobby called her a 'dog'
// and she decided to 'curse' him
// IDENTITY;

// echo $formatted_text;

/*
$price = 100;

echo (float) $price, '<br>';

echo True === true, '<br>';

echo (float) 'false', '<br>';
echo var_dump($price), '<br>';

// $x = 1 + 's';

// echo $x, '<br>';

echo 10 % 3, '<br>';

$name = 'Biscuit';
$response = <<< for$formatted_text
"Hey brother!
I'm $name
I belive you are doing good"
for$formatted_text;

echo $response, '<br>';

echo $full_name = 'Harry' . ' ' . 'Potter', '<br>';
echo $full_name, '<br>';

echo var_dump(true || false && false), '<br>';

// $is_admin = false;

// if($is_admin) {
//     $message = 'Welcome, admin!';
// } else {
//     $message = 'You are not an admin! Proceed to the user page';
// }

// echo $message;

// $is_admin = false;

// $is_authenticated = true;

// if ($is_authenticated) {
//     $render = <<< for$formatted_text
//     <h1>Welcome!</h1>
//     <a href="#">LogOut</a>
//     for$formatted_text;
// } else {
//     $render = <<< for$formatted_text
//     <h1>Hello</h1>
//     <a href="#">Login</a>
//     for$formatted_text;
// }

// echo $render;
/*

if (false) {
    echo 'expression1', '<br>';
} elseif (true) {
    echo 'expression2', '<br>';
} elseif (true) {
    echo 'expression3', '<br>';
} else {
    echo 'expression4', '<br>';
}

$x = 10;
$y = 20;

if ($x > $y) :
	echo 'x is greater than y', '<br>';
elseif ($x < $y):
	echo 'x is equal to y', '<br>';
else:
	echo 'x is less than y', '<br>';
endif;

$render = true
? 
<<< for$formatted_text
<h1>Welcome!</h1>
<a href="#">LogOut</a>
for$formatted_text
: 
<<< for$formatted_text
<h1>Hello</h1>
<a href="#">Login</a>
for$formatted_text;
echo $render, '<br>';

$eligible = true;
$has_credit = true;

$message = $eligible ?
                    ($has_credit 
                    ?
                    'Can use the credit'
                    :
                    'Not enough credit')
                    : 'Not eligible to buy!';
echo $message, '<br>';

$message = false ? 'value_if_true1' :
            ( true ? 'value_if_true2' :
                ( true ? 'value_if_true3' :
                    'value_if_false' ) );
echo $message, '<br>';

$role = 'editor';
$message = '';

// if ($role === 'editor') {
//     $message = 'Welcome! You have some pending articles to edit';
// } elseif ($role === 'author') {
//     $message = 'Welcome! Do you want to publish the draft article?';
// } elseif ($role === 'admin') {
//         $message = 'Welcome, admin!';
//     } elseif ($role === 'subscriber') {
//              $message = 'Welcome! Check out some new articles';
// }

/*switch ($role):
    case 'editor':
    case 'author':
        $message = 'Welcome! Do you want to publish the draft article?';
        break;
    case 'admin':
         $message = 'Welcome, admin!';
         break;
    case 'subscriber':
        $message = 'Welcome! Check out some new articles';
         break;
    default:
        $message = 'Unauthorized!';
    endswitch;


echo <<<for$formatted_text
<h1>$message</h1>
for$formatted_text; */

// for (;;) {

//     if (true) {
//         echo 'Infinite loop exited!';
//         break;
//     }
// }
// $sum = 0;

// for ($i = 1; $i < 11; $i++) {
//     $sum += $i;
// }

// echo $sum;

/* $sum = 0;
$a = 1;
do {
    echo
    <<<for$formatted_text
    <h1>$a</h1>
    for$formatted_text;
    $a++;
} while ($a < 1);

for ($i = 0; ; $i++) {    
    if ($i > 5) {
        echo "$i has been found. Exiting right now!!!";
        break;
    }
    echo $i, "<pre>";
} */

/* $command = 'skip';
$i = 1;
while ($i < 6) {
    echo 'Running...';
    switch ($command) {
        case 'stop':
            echo 'Stopping';
            break 2;
        case 'skip':
            echo 'Skipping process...';
            $command = "";
            break;
    }
    $i++;
} */

/*for ($i = 1; $i <= 3; $i++) {
    echo "Outer loop iteration: $i\n";
    for ($j = 1; $j <= 5; $j++) {
        if ($j == 3) {
            break 2; // This will break only the inner loop
        }
        echo "  Inner loop iteration: $j\n";
    }
}

for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo "($i,$j) <br>";
    }
}

echo "<h1>New loop</h1>";

for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 4; $j++) {
        if ($j === 3 || $i === 3) {
            echo "Coordinate containing 3 has been found! Exiting inner loop now...<br>";
            break;
        }

        echo "($i,$j) <br>";
    }
} */

/*
$level1 = 'B';
$level2 = 'A';
switch ($level1) { //A
    case 'A':
        echo "Level 1: A\n";
        switch ($level2) {
            case 'A':
                echo "Level 2: A\n";
                break 2; // This will break out of both switch statements
            case 'B':
                echo "Level 2: B\n";
                break;
            default:
                echo "Level 2: Invalid\n";
        }
        break;
    case 'B':
        echo "Level 1: B\n";
        break;
    default:
        echo "Level 1: Invalid\n";
} */ 
/*
$counter = 1;

function increase (&$value) { 
    $increment = $value + 1;
    return "$increment\n";
}

echo increase($counter);
echo $counter, '<br>';

function concat ($str_1, $str_2, $delimiter = " ") {
    return $str_1 . $delimiter . $str_2;
}

$joined = concat(str_2: 'Admin', str_1: 'Welcome', );
echo $joined, '<br>';

/* function find($needle, $haystack)
{
    return strpos($haystack, $needle);
}

echo find('awesome', 'PHP is awesome!'); */
/*
for ($i = 1; $i < 6; $i++) {
    $sum = 0;
    $sum += $i;
}
echo "<h1>$sum</h1> <br>";

$message = "Hello, Soldier! <br>";

function Invoke() {
    global $message;
    echo $message;
}

Invoke();

function function_call_count() {
    static $calls = 0;
    $calls++;
    return "$calls <br>";
}

echo function_call_count();
echo function_call_count();
echo function_call_count();

$names = ['Lahey', 'Geek', 'Roberto'];

$friends = "";

foreach ($names as $name) {
    $friends .= "$name, ";
}

echo "Hello $friends";

$capitals = [
    "Japan" => "Tokyo",
    "Nigeria" => "Abuja",
    "Ghana" => "Accra",
    "South-Africa" => "Johnesseburg"
];

foreach ($capitals as $country => $capital) {
    echo "<h1>The capital of $country is $capital</h1><br>";
}

function add (int $x, int $y): mixed
{
    return $x + $y;
}

echo add(1, 2.1);

// echo '<pre>';
// echo var_dump($capitals);
// echo '<pre>';
/*
unset($capitals['Japan']);

echo '<br>';
print_r($capitals);
echo '<br>';

array_splice($capitals, 1, 2);

echo '<br>';
print_r($capitals);
echo '<br>';

$numbers = [1, 4, 3];
print_r($numbers);

usort($numbers, function($x, $y) {
    return $x <=> $y;
});

echo '<br>';
print_r($numbers);
echo '<br>';

echo '<br>';
echo array_unshift($numbers, 34, 7);
echo '<br>';

echo '<br>';
print_r($numbers);
echo '<br>';

$person = [
    'name'=> 'Buddy',
    'age'=> 35,
    'occupation' => 'Waiter'
];

$person = $person + ['expenses' => '278 USD'];

echo '<br>';
print_r($person);

echo array_pop($person), '<br>';
echo array_pop($person), '<br>';

echo '<br>';
print_r(array_keys($person));
echo '<br>';

$numbers = [0, 1, 3, '3'];
echo '<br>';
print_r (array_keys($numbers, 3));
echo '<br>';

$device = [
    'on' => true,
    'off' => null
];

var_dump(array_key_exists('off', $device));
var_dump(isset($device['off']));

var_dump(in_array(false, $device));

function smash(array $words): string {
  if (count($words) > 1) {
    $concat = "";
    foreach($words as $word) {
        if (array_search($word, $words) === (count($words) -1)) {
            $concat .= ($word);
        } else {
            $concat .= ($word . " ");
        }
    }

    return $concat;
  } elseif (count($words) === 1) {
    return $words[0];
  } elseif (count($words) === 0) {
    return '';
  }
}

echo '<pre>';
echo smash(['Hello', "World", 'Anticipate']);
echo '<pre>';

function solution($a, $x) {
  foreach($a as $element) {
    if($element == $x) {
        return true;
    }
  }

  return false;
}

echo '<pre>';
echo var_dump(solution([1, 2, 3], 2));
echo '<pre>';

function points(array $games): int {
    $point = 0;
    foreach($games as $score) {
      $x_score = $score[0];
      $y_score = $score[-1];
      
      if($x_score > $y_score) {
        $point += 3;
      } elseif($x_score > $y_score) {
        $point += 0;
      } elseif($x_score == $y_score) {
        $point += 1;
      }
    }
    
  return $point;
}

echo points(["0:1", "0:2", "0:1",]);

$odd_days_hours = [
    'Monday' => 4,
    'Wednesday'=> 2,
    'Friday' => 9
];

$even_days_hours = [
    'Tuesday' => 7,
    'Thursday' => 4
];

print_r(array_merge($odd_days_hours, $even_days_hours));

$even = [2, 4, 6, 8];
$odd = [1, 3, 5, 7];

print_r(array_merge($even, $odd));

$odd_days_hours = [
    'Monday' => 4,
    'Wednesday'=> 2,
    'Friday' => 9
];

$even_days_hours = [
    'Tuesday' => 7,
    'Thursday' => 4,
    'Monday' => 3
];

print_r(($odd_days_hours + $even_days_hours));


function multiply_by_2($n) {
    return $n * 2;
}

echo multiply_by_2(...$even);

function sum($a, $b, $c) {
    return $a + $b + $c;
}
$numbers = [1, 2, 3];
sum(...$numbers);

echo '<pre>';
echo rand(1, 2);
echo '<pre>';

function even_number()
{
    for($i =2; $i < 10; $i+=2){
        yield $i;
    }
}

echo '<pre>';
print_r(even_number());
echo '<pre>';

$even = [...even_number()];

print_r($even);

class RGB implements IteratorAggregate
{
    private $colors = ['red', 'green', 'blue'];

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->colors);
    }
}

$rgb = new RGB();
$colors = [...$rgb];

print_r($colors);

function format_name(string $first, string $middle, string $last): string
{
    return $middle ?
        "$first $middle $last" :
        "$first $last";
}

echo format_name(
    middle: 'V.',
    first: 'John',
    last: 'Doe'
);

echo format_name(...[
    'middle' => 'Oluwamayowa',
    'first' => 'Isaac',
    'last' => 'Aladegbehingbe'
]);

$nums = [1, 2, 3];
list($a) = $nums;

echo '<br>';
var_dump($a);
echo '<br>';

$prices = [100, 0.1, 0.05];

list($buy_price, $discount) = $prices;
echo "The price is $buy_price with the discount of $discount";

$person = [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'age' => 25
];

list(
    'first_name' => $first,
    'last_name' => $last,
    'age' => $age) = $person;

echo '<br>';
var_dump($first, $last, $age);
echo '<br>';


/* $numbers = [2, 1, 3];

function sorted(array $arr): array 
{
    $maximum = $arr[0];
    $sorted_arr = [];
    foreach($arr as $element) {
        if ($element >= $maximum) {
            $sorted_arr[] = $element;
            $maximum = $element;
            array
        } else {

        }
    }

    return $sorted_arr;
} 

print_r(sorted($numbers));
*/

/*

$fruits = ['apple', 'Banana', 'orange'];
sort($fruits, SORT_STRING);

print_r($fruits);

$ranks = ['A-1', 'A-2', 'A-12', 'A-11'];
sort($ranks, SORT_STRING | SORT_NATURAL);

print_r($ranks);


$numbers = [2, 4, 36, 43, 9, 2, 0];

usort($numbers, function ($x, $y) {
    if($x === $y) {
        return 0;
    }

    return $x < $y ? -1 : 1;
});

print_r($numbers);

$person = [
    'person_1' => null,
    'person_2' => 'Gabriel',
    'person_3' => 'Peter'
];

arsort($person);

print_r($person);

$is_key_null = isset($person['person_1']);

var_dump($is_key_null);

$x = "0";

var_dump(isset($x));
var_dump(empty($x));

$data = ['name' => null];
var_dump(is_null($data['name']));

function arrayDiff($a, $b) {
  // your code here
  
  foreach($a as $element_a) {
    array_unique($a);
    array_unique($b);
    foreach($b as $element_b) {
      if($element_a === $element_b) {
        unset($a[array_search($element_a, $a)]);
        unset($b[array_search($element_b, $b)]);
      }
    }
  }
  
  return (array_merge($a, $b));
}

$nums_1 = [1, 2, 2, 2, 3];
$nums_2 = [2];


function unique(array $arr) : array
{
    $new_arr = [];
    foreach($arr as $element) {
        if (!in_array($element, $new_arr)) {
            $new_arr[] = $element;
        }
    }

    return $new_arr;
}

print_r(unique($nums_1));
print_r(unique($nums_2));

function difference(array $a,array $b) : array
{
    $unique_a = unique($a);
    $unique_b = unique($b);
    foreach($unique_a as $element_a) {
        foreach($unique_b as $element_b) {
            if($element_a === $element_b) {
                unset($unique_a[array_search($element_a, $unique_a)]);
                unset($unique_b[array_search($element_b, $unique_b)]);
            }
        }
    }

    return array_merge($unique_a, $unique_b);
}

print_r(difference($nums_1, $nums_2)); */
/*
$mixed = [10, '5', 3.14, 'apple', 2, '20', 'banana', true, .5];
sort($mixed, SORT_NUMERIC);
print_r($mixed);

$numbers = [1932, 1003, 3428, 253, 901];

echo '<br>';
print_r($numbers);
echo '<br>';
/*
function sort_by_size($x, $y) {
    return $x <=> $y;
}

usort($numbers, 'sort_by_size');

echo '<br>';
print_r($numbers);
echo '<br>';*/
/*
usort($numbers, fn ($x, $y) => $x <=> $y);

echo '<pre>';
print_r($numbers);
echo '<pre>';

$fruits = ['grapes', 'avocada', 'StrAWberry', 'orangEE'];

usort($fruits, function($x, $y) {
    if($x === $y) {
        return 0;
    }

    return $x < $y ? 1 : -1;
});

echo '<pre>';
print_r($fruits);
echo '<pre>';

$evens = [2, 4, 6];

echo '<pre>';
echo call_user_func_array(fn ($x, $y, $z) => $x + $y, $evens);
echo '<pre>';
*/

/*
$lengths = [10, 20, 30];
$areas = [];

foreach ($lengths as $length) {
    $areas[] = $length ** 2;
}

echo '<br>';
print_r($areas);
echo '<br>';


class User {
    public $username;

    public $email;

    public $id;

    public function __construct (int $id, string $username, string $email) {
        $this -> id = $id;
        $this -> username = $username;
        $this -> email = $email;
    }
};

$users = [
    new User(2, 'Harray Matthews', 'harraymat@gmail.com'),
    new User(1, 'John Doe', 'johndoe@gmail.com'),
    new User(3, 'Collins Fox', 'collfox@gmail.com')
];
*/

/* 
Assume the first object has the highest ID
Loop through the array

If the assumed is less than or equal the next, the assume is not more considered t be the highest. It gets moved to a new array
The next element that made it fail becomes the highest.
This process continues to the last
*/
/*
usort($users, fn($x, $y) => $x -> id <=> $y -> id);

echo '<br>';
print_r($users);
echo '<br>';
*/
/*
$users = [
    ['Hello', 'John Doe', 'johndoe@gmail.com'],
    ['Hello', 'Harray Matthews', 'harraymat@gmail.com'],
    ['Hello', 'Collins Fox', 'collfox@gmail.com']
];

$usernames = array_map(function ($user) {
    usort($user, fn ($x, $y) => $x <=> $y);
    return $user;
} , $users);

echo '<br>';
print_r($usernames);
echo '<br>';
*/
/*
class Square {
    public $length;

    public static function area($length) {
        return $length ** 2;
    }
};

$lengths = [2, 3, 4];

$areas = array_map('Square::area', $lengths);

echo '<br>';
print_r($areas);
echo '<br>';

$codes = ['#$288IF1', '#$102OJ9', '#$504XD0', '#$192PL0', '#$453ND4', '#$548DA6'];

// $codes = [1, 2, 3, 4, 5, 6];

$filtered_codes = array_filter($codes, fn ($x) => $x % 2 === 0 ? true : false, ARRAY_FILTER_USE_KEY);

echo '<br>';
print_r($filtered_codes);
echo '<br>';

$indexes = [1, 2, 3, 4, 5, 6]; */

/*
class Odd {
    public function isOdd($x) {
        return !($x % 2 === 0);
    }
}

$filtered_indexes = array_filter($indexes, [new Odd, 'isOdd']);
*/

/*
class Odd {
    public static function isOdd($x) {
        return !($x % 2 === 0);
    }
}

$filtered_indexes = array_filter($indexes, ['Odd', 'isOdd']);

echo '<pr>';
print_r($filtered_indexes);
echo '<pr>';


$mixed_numbers = [-2, -4, 5, -2, 5, 5, 3];

class Positive {
    public function __invoke($number) {
        return $number > 0;
    }
}

$filtered_numbers = array_unique(array_filter($mixed_numbers, new Positive()));

echo '<pre>';
print_r($filtered_numbers);
echo '<pre>';

$words = ['Sage', 'The', 'Warrior'];

$smashed_words = array_reduce($words, fn ($previous, $current) => $previous . $current);

echo '<br>';
echo $smashed_words;
echo '<br>';

$carts = [
    ['item' => 'A', 'qty' => 2, 'price' => 10],
    ['item' => 'B', 'qty' => 3, 'price' => 20],
    ['item' => 'C', 'qty' => 5, 'price' => 30]
];

$total_item = array_reduce($carts, fn($x, $y) => $x + $y['qty']);

echo '<br>';
echo $total_item;
echo '<br>';

__DIR__ */
/*
function toCamelCase(string $text)
{
    $formatted_text = $text . '_';
    $accumulator = "";
    $words = [];
    $camel_words = [];
    $i = 0;
    
    if($formatted_text !== ucfirst($formatted_text)) {
      while ($i < strlen($formatted_text)) {
        if($formatted_text[$i] === '_' || $formatted_text[$i] === '-') {
            $words[] = $accumulator;
            $accumulator = "";
        } else {
            $accumulator .= $formatted_text[$i];
        }

        $i++;
    }
    
    foreach($words as $word) {
        if($word === $words[0]) {
            $camel_words[] = strtolower($word);
        } else {
            $camel_words[] = ucfirst($word);
        }
    }

    $camel_case = "";

    foreach($camel_words as $word) {
        $camel_case .= $word;
    }

    return $words;
   } else {
      while ($i < strlen($formatted_text)) {
        if($formatted_text[$i] === '_' || $formatted_text[$i] === '-') {
            $words[] = $accumulator;
            $accumulator = "";
        } else {
            $accumulator .= $formatted_text[$i];
        }

        $i++;
    }

    $camel_case = "";

    foreach($camel_words as $word) {
        $camel_case .= $word;
    }

    return $words;
    }
}

echo '<br>';
var_dump(toCamelCase("The_Stealth-Warrior"));
echo '<br>';

echo */

// $person = [
//     'name' => 'Geek',
//     'age' => 18
// ];

// unset($person['age']);

// echo '<br>';
// print_r($person);
// echo '<br>';

/*const TIME = 60;

$returning_user = false;

if (isset($_COOKIE['return'])) {
    $returning_user = true;
    $name = 'User';
} else {
    setcookie('return', '1', time() + TIME);
    $name = 'Guest';
}

echo $returning_user ? "Welcome back!
$name" : "Welcome to my website $name";*/
/*
const PAGE_TITLE = 'Animal Category';

if(defined('PAGE_TITLE')) {
    echo 'Constant defined';
} else {
    echo 'Constant is not defined';
} */

// E CODE!!!
/*if(!defined('PAYMENT_STATUS')) {
    const PAYMENT_STATUS = 'paid';
}
*/
///////////////////////////////////////
/*
if(!defined('PAYMENT_STATUS')) {
    define('PAYMENT_STATUS', 'paid');
}

echo PAYMENT_STATUS . '<br>';

function heyy() {
    echo __FUNCTION__;
}



echo __NAMESPACE__ . '<br>';

function sum(int $x, int $y) {
    var_dump($x, $y);
    return $x + $y;
}

// echo sum(10, 2.2);

echo var_dump(is_bool(false)) . '<br>';

echo (PHP_INT_MAX + PHP_INT_MIN) . '<br>';

echo (int) '0' . '<br>';

echo (int) '1_000.99' . '<br>';

echo PHP_FLOAT_DIG . '<br>';

$result = floor((0.1 + 0.7) * 10);
echo $result . '<br>';

$name = 'IsaaC';

$name[6] = 's';

echo $name;

$message = <<<TEXT
<h1>Welcome!</h1>
<p>It's great you are here</p>
TEXT;

echo nl2br($message);

$even_indexed_array = [
        2 => 2,
        4 => 4
];

echo '<pre>';
print_r($even_indexed_array);
echo '<pre>';

$assoc_array = [
  "1" => "Apple", // This key is treated as integer 1
  2 => "Banana", // This key is an integer
  "three" => "Orange" // This key is a string
];

echo '<pre>';
print_r( $assoc_array );
echo '<pre>';

$arr = [1, 2, 'def' => 6, 0];

echo '<pre>';
print_r($arr);
echo '<pre>';

$even = [2, 40 => 4, 6];
unset($even[0], $even[40], $even[41]);
print_r($even);

$even[] = 83;
array_push($even, 84);

print_r($even);

echo 10.0 / 2, '<br>';

$x = $y = 10;

echo $x, '<br>', $y, '<br>';

echo '<br>';
var_dump(0 == '0hello');
echo '<br>';

$y = 1 ?? 'Guest';

echo '<br>';
echo $y;
echo '<br>';

$x = 3;
echo ++$x, '<br>';
echo $x, '<br>';

$price = '99';

$price++;

echo $price, '<br>';

echo $x, '<br>';

$even_keys = ['1' => 1, 3 => 2, 5 => 3];
$odd_keys = [1 => '1', 3 => 2, 5 => 3];

var_dump($even_keys == $odd_keys);

$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f'];

$z = $x + $y;

echo '<pre>';
print_r($z);
echo '<pre>';

$names = ['John', 'Isaac', 'Gabriel'];

foreach($names as $name) {
    echo $name;
}

echo $name; */

// $name = 'Michael';

// echo '<pre>';
// print_r($names);
// echo '<pre>';
/*
function x() {
    sleep(3);
    echo 'Done';
    return 4;
}

if(x() === 1) {
    echo 1;
} elseif(x() === 2) {
    echo 2;
} elseif(x() === 3) {
    echo 3;
} else {
    echo 4;
}
*/

/*
declare(ticks = 1);

function tick_handler() {
    print "Executed! \n";
}

register_tick_function('tick_handler');

$age = 19;

$message = match($age) {
            18 => 'Diamond',
            40 => 'Saphaire',
            50 => 'Golden',
            60 => 'Silver',
            default => "You age isn't special!"
        };

echo '<br>';
echo $message;
echo '<br>'; */

/*
echo '<br>';
echo include_once 'index.view.php';
echo '<br>';

$sum = include_once 'sum.php';

echo $sum; */
/*
ob_start();
include 'nav.php';
$content = ob_get_clean();

echo $content;
*/

/* $nums = [1,3, 'even' => [2, 4]];

$sum = array_sum($nums);

echo $sum; */
/*
function getValue() {
    $value = someHeavyFunction();

    echo $value;
}

function someHeavyFunction() {
    sleep(2);

    return 10;
}

getValue();

getValue();

getValue();*/

// Callable
/*
function multiply(callable $callback, $x) {
    return $callback($x);
}

function double($y) {
    return $y * 2;
}

function triple($y) {
    return $y * 3;
}

function quad($y) {
    return $y * 4;
}

echo multiply('double', 4), '<br>';
echo multiply('triple', 4), '<br>';
echo multiply('quad', 4), '<br>'; */

/*
function multiply(Closure $callback, $x) {
    return $callback($x);
}

function double($y) {
    return $y * 2;
}

echo multiply('double', 4), '<br>';
echo multiply(fn ($y) => $y * 3, 4), '<br>';
echo multiply(fn ($y) => $y * 4, 4), '<br>';

$timestamp = time() - (22 * 24 * 60 * 60);

date_default_timezone_set('UTC');
echo date('jS / M / o H : iA', $timestamp), '<br>';


echo date('jS / M / o H : iA', strtotime('first day of november')), '<br>';

$codes = ['#$88IF1', '#$102OJ9', '#$504XD0', '#$192L0', '#$453ND4', '#$548DA6'];

echo '<br>';
print_r($codes);
echo '<br>';

$filtered_codes = array_filter($codes, fn ($x, $y) => strlen($x) > 7, ARRAY_FILTER_USE_BOTH);
echo '<br>';
print_r($filtered_codes);
echo '<br>'; 

$evens = [2, 4];
$odds = [1, 3, 5];

// echo '<br>';
// print_r(array_map(fn($x, $y) => $x * $y, $evens, $odds));
// echo '<br>';

echo '<br>';
print_r(array_map(null, $evens, $odds));
echo '<br>';

$fruits = [
    "a" => "Apple",
    "b" => "Banana",
    "c" => "Orange",
    "d" => "Banana"
];
$key = array_search("Banana", $fruits);
echo $key; // Output: 1 */
/*
$array1 = [ "a" => "Apple", "b" => "Banana", "c" => "Cherry", "d" => "Date" ];
$array2 = [ "b" => "Banana", "c" => "Date" ];
$difference = array_diff_key( $array1, $array2 );
print_r( $difference ); // Output: Array ( [a] => Apple [d] => Date )

echo ini_get('memory_limit'), '<br>';
function customEHandler(int $type, string $msg, ?string $file = null, ?int $line = null) {
    echo "<b>E Detected</b>: $msg in $file on $line also $type";

    exit;
}

set_e_handler('customEHandler', E_ALL); 

echo $z;
$dir = scandir(__DIR__);

$dir_list = array_filter($dir, fn ($x) => is_dir($x));

echo '<br>';
print_r($dir_list);
echo '<br>';

// mkdir('User/names', 0755, true);
// rmdir('User/names');
// rmdir('User');

/*
echo filesize('note'), '<br>';

file_put_contents('note', 'New file');
file_put_contents('note.txt', 'New file');

clearstatcache();
echo filesize('note'), '<br>';

file_put_contents('note', 'New file');
echo filesize('note'), '<br>';

file_put_contents('note', 'New Content. Send a mail if found');
clearstatcache();
echo filesize('note'), '<br>'; 

if(file_exists('note')) {
    $file = fopen('note', 'r');

    while(($line = fgets($file)) !== false) {
        echo $line, '<br>';
    }

    // fwrite($file, 'Okay!');
}

echo number_format(1111111111111); */

/*
class robot {
    public $name;
    public $age;

    public function Invoke($name) {
        return "Hello, I'm $name";
    }
}

$axle = new robot('Isaac', 18);
echo $axle.Invoke();
*/

/*
class Entree {
    public $name;
    public $ingredients = [];

    public function hasIngredient($ingredient) {
        return in_array($ingredient, $this->ingredients);
    }
}

$first_entree = new Entree;
*/

/*
class Agent {
    public $name;
    public $model;
    public $co_agents;
    public $is_available;

    public function __construct($agent_name, $agent_model, $co_agents, $is_available, $user='Guest') {
        if (!is_string($agent_name) || !is_string($user)) {
            throw new Exception('Name must be a string');
        }

        $this -> name = $agent_name;
        $this -> model = $agent_model;
        $this -> co_agents = $co_agents;
        $this -> agentInvoke($user);
        $this -> is_available = $is_available;
    }

    public function agentInvoke ($username) {
        echo '<pre>';
        echo "Hey there, I'm {$this -> name}. Nice to meet you $username";
        echo '<pre>';
    }

    public function modelRequest() {
        return "Currently, I'm {$this -> name}{$this -> model}";
    }

    public function hasCoAgent($agent_name) {
        if (in_array($agent_name, $this -> co_agents)) {
            return "Yes! I provide services alongside $agent_name";
        } elseif (!in_array($agent_name, $this -> co_agents)) {
            return "Currently, I haven't been integrated into $agent_name";
        }
    }

    public function serviceRequest() {
        return "I have been integrated into" ." " . implode(', ', $this -> co_agents);
    }
}

try {
$adigun = new Agent('Adigun', '4.0', ['Gemini', 'Claude'], true);
$milito = new Agent('Milito', '3.65', ['ChatGPT', 'Claude'], true);

} catch (Exception $e) {
    echo '<pre>';
    echo "Couldn't create agent: {$e->getMessage()}";
    echo '<pre>';
}
class AdvancedAgent extends Agent{
    public function __construct() {

    }
}
*/

// class Entree {
//     protected $name;

//     protected $ingredients = array();
//     /* Since $name is private, this provides a way to read it */
//     public function getName() {
//         return $this->name;
//     }
//     public function __construct($name, $ingredients) {
//         if (! is_array($ingredients)) {
//             throw new Exception('$ingredients must be an array');
//         }
//         $this->name = $name;
//         $this->ingredients = $ingredients;
//     }

//     public function hasIngredient($ingredient) {
//         return in_array($ingredient, $this->ingredients);
//     }
// }

// $soup = new Entree('soup', ['chicken', 'pasta']);

// // $soup -> name = 'Veggies';

// echo $soup -> name;

/*
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    class Agent {
        public $name;
        public $model;
        public $co_agents;
        public $is_available;

        public function __construct($agent_name, $agent_model, $co_agents, $is_available) {
            if (!is_string($agent_name)) {
                throw new Exception('Name must be a string');
            }

            $this -> name = $agent_name;
            $this -> model = $agent_model;
            $this -> co_agents = $co_agents;
            $this -> agentInvoke();
            $this -> is_available = $is_available;
        }

        public function agentInvoke () {
            echo '<pre>';
            echo "Hey there {$_POST['user_name']}! I'm {$this -> name}. I will be your personal AI assistant for this session";
            echo '<pre>';
        }

        public function modelRequest() {
            return "Currently, I'm {$this -> name}{$this -> model}";
        }

        public function hasCoAgent($agent_name) {
            if (in_array($agent_name, $this -> co_agents)) {
                return "Yes! I provide services alongside $agent_name";
            } elseif (!in_array($agent_name, $this -> co_agents)) {
                return "Currently, I haven't been integrated into $agent_name";
            }
        }

        public function serviceRequest() {
            return "I have been integrated into" ." " . implode(', ', $this -> co_agents);
        }
    }

    try {
    if (18 <= $_POST['age']) {
        $adigun = new Agent('Adigun', '4.0', ['Gemini', 'Claude'], true);
    } else {
        $milito = new Agent('Milito', '3.65', ['ChatGPT', 'Claude'], true);
    }

    echo $_SERVER['REMOTE_HOST'];
    } catch (Exception $e) {
        echo '<pre>';
        echo "Couldn't create agent: {$e->getMessage()}";
        echo '<pre>';
    }

} else {
    echo <<<HTML
    <form action="$_SERVER[PHP_SELF]" method="POST">
        <label for="user_name">Name</label>
        <input type="text" id="name" name="user_name"><br>
        <label for="age">Age</label>
        <input type="text" id="age" name="age"><br>
        <button type="submit">Submit</button>
    </form>
    HTML;
}
?>*/

// DATABASES
include_once './pdo.php';
