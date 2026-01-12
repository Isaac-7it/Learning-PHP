<?php
// declare(strict_types = 1);
// $person = ['name' => 'Kylian','occupation' => 'Footballer', 'age' => 35, 'bmi' => 13.5, 'is_active' => true]; //Associated Array

// $he = 'Bob';
// $she = 'Alice';

// $text = <<<IDENTITY
// Bobby called her a 'dog'
// and she decided to 'curse' him
// IDENTITY;

// echo $text;

$price = 100;

echo (float) $price, '<br>';

echo True === true, '<br>';

echo (float) 'false', '<br>';
echo var_dump($price), '<br>';

// $x = 1 + 's';

// echo $x, '<br>';

echo 10 % 3, '<br>';

$name = 'Biscuit';
$response = <<< TEXT
"Hey brother!
I'm $name
I belive you are doing good"
TEXT;

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
//     $render = <<< TEXT
//     <h1>Welcome!</h1>
//     <a href="#">LogOut</a>
//     TEXT;
// } else {
//     $render = <<< TEXT
//     <h1>Hello</h1>
//     <a href="#">Login</a>
//     TEXT;
// }

// echo $render;

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
<<< TEXT
<h1>Welcome!</h1>
<a href="#">LogOut</a>
TEXT
: 
<<< TEXT
<h1>Hello</h1>
<a href="#">Login</a>
TEXT;
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


echo <<<TEXT
<h1>$message</h1>
TEXT; */

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
    <<<TEXT
    <h1>$a</h1>
    TEXT;
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

for ($i = 1; $i < 6; $i++) {
    $sum = 0;
    $sum += $i;
}
echo "<h1>$sum</h1> <br>";

$message = "Hello, Soldier! <br>";

function greet() {
    global $message;
    echo $message;
}

greet();

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