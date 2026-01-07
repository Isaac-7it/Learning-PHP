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
$sum = 0;

for ($i = 1; $i < 11; $i++) {
    $sum += $i;
}

echo $sum;

$sum = 0;
$a = 1;
while ($a < 11) {
    $sum += $a;
    $a++;

    echo
    <<<TEXT
    <h1>$sum</h1>
    TEXT;
}