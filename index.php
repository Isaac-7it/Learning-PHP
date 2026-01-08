<?php
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