# PHP

- PHP is a server-side and general-purpose scripting language especially suited for web development
- PHP originally stood for Personal Home Page. However, now, it stands for Hypertext Preprocessor.
- PHP was created by Rasmus Lerdorf in 1994

# PHP is a server-side language

When you open a website on your web browser, for example, <https://www.phptutorial.net>

The web browser sends an HTTP request to a web server where phptutorial.net is located. The web server receives the request and responds with an HTML document.

In this example, the web browser is a client, while the web server is the server. The client requests for a page, and the server serves the request.

PHP runs on the web server, processes the request, and returns the HTML document.

# PHP is a general-purpose language

- Programming languages according to purpose can be: domain-specific and general-purpose languages.
- Domain-specific languages are used within specific application domains. For example, SQL is a domain-specific language. It’s used mainly for querying data from relational databases and cannot be used for other purposes.
- On the other hand, PHP is a general-purpose language because PHP can develop various applications.

# PHP is a cross-platform language

- PHP can run on all major operating systems, including Linux, Windows, and macOS.
- PHP can be used with all leading web servers, such as Nginx, OpenBSD, and Apache.
- Some cloud environments, such as Microsoft Azure and Amazon AWS, also support PHP.
- PHP is not just limited to processing HTML. It supports generating PDF, GIF, JPEG, and PNG images.
- One notable feature of PHP is that it supports many databases, including MySQL, PostgreSQL, MS SQL, db2, Oracle Database, and MongoDB.

# What can PHP do

PHP has two main applications:

- Server-side scripting – PHP is well-suited for developing dynamic websites and web applications.
- Command-line scripting: Like Python and Perl, you can run PHP scripts from the command line to perform administrative tasks like sending emails and generating PDF files.

# How PHP works

![How PHP works](What-is-PHP-How-PHP-works.png)
How PHP works:

- First, the web browser sends an HTTP request to the web server, e.g., index.php.
- Second, the PHP preprocessor located on the web server processes PHP code to generate the HTML document.
- Third, the web server returns the HTML document to the web browser.

# Advantages of PHP

- Simple
- Fast
- Stable
- Open-source and Free
- Community Support

# Installing PHP

- Installing PHP on your computer allows you to safely develop and test a web application without affecting the live (deployed) system.
- To work with PHP locally, you need to have the following software:
  - PHP
  - A web server that supports PHP. We’ll use the [Apache webserver](https://httpd.apache.org/)
  - A database server. We’ll use the [MySQL database server](https://www.mysql.com/)
- Basically, installing all this software separately is tricky and not intended for beginners. Rather, we use
  an all-in-one software package that includes PHP, a web server, and a database server. One of the most popular is [XAMPP](https://www.apachefriends.org/)
  which is an easy-to-install Apache distribution that contains PHP, MariaDB, and an Apache webserver. It supports Windows, Linux, and MacOS
- Note that MariaDB is a fork of the most popular relational database management system, MySQL. That is MariaDB is very similar to MySQL.
  - A fork is when developers take the source code of an existing project and start developing it independently as a separate project.

# Download XAMPP

- To install XAMPP on Windows, go to the [XAMPP official website](https://www.apachefriends.org/index.html) and download the appropriate version for your platform.
- While installing, in the selection of components that you want to install, select Apache, MySQL, PHP, and phpMyAdmin, deselect other components, and click the Next button to go to the next step.

# Troubleshooting

- By default, Apache uses port 80. However, if port 80 is used by another service, you’ll get an error like this<pre>`Problem detected!
Port 80 in use by "Unable to open process" with PID 4!
Apache WILL NOT start without the configured ports free!
You need to uninstall/disable/reconfigure the blocking application
or reconfigure Apache and the Control Panel to listen on a different port`</pre>
- In this case, you must change the port from 80 to a free one, e.g., 8080. To do that, you follow these steps:
  - First, click the Config button that aligns with the Apache module:
    ![](Configure-Apache-Step-1.png)
  - Second, find the line that has the text Listen 80 and change the port from 80 to 8080 like this:
    ![](Configure-Apache-Step-2.png)
  - Third, click the Start button to start the Apache service. If the port is free, Apache should start properly, as shown in the following picture:
    ![](Configure-Apache-Step-3.png)

# How to write a PHP Program on the web browser

- First, open the folder `htdocs` under the xampp folder. Typically, it is located at `C:\xampp\htdocs`.
- In that folder, create your project directory
- Create your PHP file(s) with the `.php` extension
- Basically, your code will be in the form

```
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PHP Project</title>
  </head>
  <body>
    <h1><?php echo 'Hello World'; ?></h1>
  </body>
</html>
```

- Notice that the code in our PHP file looks like a regular HTML document except for the part `<?php` and `?>`.
- The code between the opening tag `<?php` and closing tag `?>` is PHP:
- This PHP code prints out the Hello, World message inside the `h1` tag using the `echo` statement (similar to `print()` in Python or `console.log()` in JS:
- Now, to see the output of your PHP code (here, output is Hello World) on the web through the browser, type `localhost/ProjectDirName`
- If you view the source code of the page, you’ll see the following HTML code:

```<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello, World!</title>
</head>
<body>
        <h1>Hello, World!</h1>
</body>
</html>
```

# PHP Hello World on the command line

- First, open Xampp Control Panel
- Second, navigate to the Xampp Shell through that, navigate to `c:\xampp\htdocs\ProjectDirName\`.
- Third, type the following command to execute the index.php file:

```
c:\xampp\htdocs\ProjectDirName>php index.php
```

- You’ll see the HTML output. Since the terminal doesn’t know how to render HTML to the web, it just shows the pure HTML code.
- To fix this, write only the PHP code in the PHP file and delete all HTML
- Now, when you embed PHP code with HTML, you need to have the opening tag <?php and closing tag ?>. However, if the file contains only PHP code, you don’t need to the closing tag ?> like the index.php above.

# PHP Syntax

- If you decide to mix your PHP code with your HTML file, you need to have the opening tag (`<?php`) and the enclosing tag (`?>`)
- For example

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>PHP Syntax</title>
  </head>
  <body>
    <h1><?php echo 'PHP Syntax'; ?></h1>
  </body>
</html>
```

- However, if a file is expected to contain only a PHP code, the enclosing tag is optional

```php
<?php
  echo Hello World
```

# Case Sensitivity

- PHP is partially case-sensitive. For example, if you have a function such as count, you can use it as COUNT. It would work properly
- The following are case-insensitive in PHP:
  - PHP constructs such as if, if-else, if-elseif, switch, while, do-while, etc
  - Keywords such as true and false
  - User-defined function & class names
- On the other hand, variables are case-sensitive. e.g., `$message` and `$MESSAGE` are different variables.

# Statements

- A statement is a piece of code that is executed but doesn't yield a value. Statements includes such as assigning a value to a variable or calling a function.
- A statement usually end with a semi-colon `;`
- Below is a statement that assigns a literal string to the `$message` variable:
-

```php
$message = "Hello";
```

This is a Simple statement

- A Compound statement consists of one or more simple statements. It uses Curly Braces to mark a block of code. Example

```php
if( $is_new_user ) {
    send_welcome_email();
}
```

You don’t need to place the semicolon after the curly brace (`}`)

- Also, the closing tag of a PHP block (`?>`) automatically implies a semicolon (`;`). Therefore, you don’t need to place a semicolon in the last statement in a PHP block.

# Whitespace & line breaks

- Whitespace and line breaks don’t have special meaning in PHP. For Example,

```php
login( $username, $password );
```

and

```php
login(
  $username,
  $password
);
```

are equivalent

# PHP Variables

## Defining a variable

- A variable stores a value of any type, e.g., a string, a number, an array, or an object.
- To define a variable, you use the following syntax:

```php
$variable_name = value;
```

- When defining a variable, you need to follow these rules:
  - The variable name must start with the dollar sign (`$`).
  - The first character after the dollar sign (`$`) must be a letter (a-z) or the underscore (`_`)
  - The remaining characters can be underscores, letters, or numbers.
- To display the values of variables on a webpage, you’ll use the `echo` construct. For example:

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Variables</title>
  </head>
  <body>
    <?php
        $title = 'PHP is awesome!';
    ?>
    <h1><?php echo $title; ?></h1>
  </body>
</html>
```

- Variables are used for runtime data (user input, calculations, loop counters)

* Mixing PHP code with HTML will make the code unmaintainable, especially when the application grows. To avoid this, you can separate the code into separate files. For example
  - `index.php` – store the logic for defining and assigning value to variables.
  - index.view.php – store the code that displays the variables
  - Use the `require` construct to include the code from the `index.view.php` in the `index.php` file.
  - The `require` construct is used to include and evaluate a PHP file. Essentially, it takes the content of the specified file and inserts it at the point where require is called.
    For example suppose you created a different PHP file for storing your variables, say `index.php` and another PHP file that contains the HTML with PHP Embeded code, say `index.view.php`. We can include the `index.php` file
    by simply writing `require 'index.view.php'` in the `index.php` file
    The code `<?= $name ?>` is a shorthand for `<?php echo $name ?>`

# PHP Comments

- Comments are essentially useful information for anyone reading the code. Comments are ignored by the PHP engine.
- PHP supports three types of comments:
  - Single-line comments using `//` or `#`
  - Multi-line comments using `/* */`
- Comments are written at the end of a line or a code block or on a separate line. For example

```php
// This is a single-line comment
# This is also a single-line comment
/* This is a
   multi-line comment */
```

- Comments are useful for:
  - Explaining the purpose of the code
  - Making notes for future reference
  - Temporarily disabling code during debugging
- Comments should be clear and concise to effectively communicate the intended message to anyone reading the code.
- Comments should explain why a code works not what the code does. For example, the following comment is not useful

```php
  $total = $price * $quantity; // Multiply price by quantity to get total
```

- A better comment would be

```php
  // Calculate the total cost of items in the shopping cart
  $total = $price * $quantity;
```

# PHP Constants

- PHP constants are basically a name that holds a value. PHP constants are similar to PHP variables with the exception that
  - Constants by convention don't use the dollar sign (`$`) prefix compare to variables. Also, Constants are defined in uppercase letters. Notice that `SITE_NAME` and `site_name` are different
  - Once the value of a constant is defined, it cannot be changed or undefined
- PHP constants are defined using
  - The `define()` function - This function takes two parameters: first, the name of the constant and and secondits value. Example

````php
  define( 'SITE_NAME', 'My PHP Website' );
  The `define` function cannot be used to define constants within a class.
  + The `const` keyword - This keyword is used to define constants within a class or outside a class. Example
  ```php
  class Config {
      const VERSION = '1.0.0';
  }
````

is a better syntax to define constants within a class. Also

```php
class Config {
  define( 'Config::VERSION', '1.0.0' );
}
```

is an invalid syntax.

- `define()` vs `const`

  - The `define()` function can be used to define constants at runtime, while the `const` keyword is used to define constants at compile time.
  - The `const` keyword can be used to define constants within a class, while the `define()` function cannot.
  - The `const` keyword supports visibility modifiers (public, protected, private) when defining constants within a class, while the `define()` function does not.
  - The define() is a function while the const is a language construct. That is `const` defines a function at run-time (execution time) while `const` defines a constant at compile-time (Compile time is when your code is checked, translated, and prepared before execution). Thus `const` is faster than `define()`.
  - The `define` function allows to name a constant using an expression, while the `const` keyword requires a constant name to be a valid identifier. Example

  ```php
    define( 'SITE_' . 'NAME', 'My PHP Website' ); // Valid
    const SITE_' . 'NAME' = 'My PHP Website'; // Invalid
  ```

* Constants are often used for configuration values (site name, version, database limits)

# PHP `var_dump()` function

- The `var_dump()` function is a built-in PHP function that dumps the value of a variable. It accepts a variable and display its type, value and size. For example, if the data-type of a variable is an string, it will display the type as "string", the value as the string itself, and the size as the number of bytes used to store the string (number of characters). Syntax

```php
var_dump( $variable );
```

- To dump information about multiple variables, you can pass them as a comma-separated list to the `var_dump()` function. Example

```php
$age = 25;
$name = "John Doe";
var_dump( $age, $name );
```

- To have a more intutive output, you can wrap the `var_dump()` function inside HTML `<pre>` tags. Example

```php
$age = 25;
$name = "John Doe";
echo '<pre>';
var_dump( $age);
echo '</pre>';
echo '<pre>';
var_dump($name);
echo '</pre>';
```

- # The dump helper function

- It's always tedious to write the `<pre>` tags whenever you want to use the `var_dump()` function. To avoid this, you can create a helper function that takes in variables as parameters and wraps the `var_dump()` function inside the `<pre>` tags. Example

````php
function dump( $variable ) {
    echo '<pre>';
    var_dump( $variable );
    echo '</pre>';
}```
+ Now, you can use the `dump()` function instead of the `var_dump()` function. Example
```php
dump($age)
dump($name)
````

# Dump and Die using the `var_dump()` function and `die()` function

- Sometimes, while debugging your code, you want to dump the value of a variable and stop the execution of the script immediately. To do that, you can use the `var_dump()` function along with the `die()` function. The `die()` function is used to terminate the current script. Example

```php
$age = 25;
var_dump( $age );
die();
```

Notice that any code after the `die()` function will not be executed

- The `die()` function is similar to be `break` statement in other programming languages. It stops the execution of the script immediately.
- To make it more intutive, you can create a helper function that combines the `var_dump()` function and the `die()` function. Example

```php
function dump_die($variable) {
  echo '<pre>';
  var_dump( $variable );
  echo '</pre>';
  die();
}
```

- Now, you can use the `dump_die()` function to dump the value of a variable and stop the execution of the script

# PHP Data Types

- A type specifies the amount of memory allocated to store a value and the operations that can be performed on that value.
- PHP has 10 primitive data types - four scalars, four compound types, and two special types. They include:
  - String
  - Integer
  - Float (also called double)
  - Boolean
  - Array
  - Object
  - Callable
  - Iterable
  - NULL
  - Resource

![PHP Types](PHP-types.svg)

# Scalar Types

- A variable is scalar when it holds a single value of the type integer, boolean, flot(double), or string.
  - Integers are whole numbers defined from the set of positive and negative numbers including zero (Z). They are without decimal points. The size of an integer depends on the system in which PHP is running. For example, On a 32-bit system, the size of an integer is 4 bytes, while on a 64-bit system, it is 8 bytes. The constant `PHP_INT_SIZE` specifies the size of the integer on a specific platform
  - Floats (or doubles) are numbers that have decimal points or are in exponential form. They are real numbers. PHP uses the [IEEE 754 double-precision](https://en.wikipedia.org/wiki/Double-precision_floating-point_format) format to store float values. The size of a float is platform-dependent, but it is typically 8 bytes (64 bits) on most systems. Floating-point numbers includes:
    - Decimal notation: e.g., 3.14, -0.001, 42.0
    - Exponential notation: e.g., 1.5e3 (which is equivalent to 1.5 \* 10^3 or 1500)
  - Boolean represents a truth value that can be either true or false. In PHP, the boolean values are represented by the keywords `true` and `false`. Boolean values are often used in conditional statements and logical operations. Since booleans are case-insensitive, you can also write them as `TRUE` and `FALSE`.
    When you use other data types in a boolean context, PHP automatically converts them to boolean values using the following rules:
    - The following values are considered false:
      - The boolean value `false`
      - The integer value `0` (zero)
      - The float value `0.0` (zero)
      - An empty string `""` or a string containing only whitespace characters
      - An array with no elements
      - The special type `NULL`
      - The `SimpleXML` objects created from attributeless empty elements
    - All other values are considered true.
  - Strings are sequences of characters surrounded by either single (' ') or double (" ") quotes. Strings can contain letters, numbers, symbols, and whitespace characters.

# Compound Types

- Compound types include values that can hold multiple values or collections of values. The compound types in PHP are arrays and objects. They include:

  - Arrays - An array is an ordered map that associates keys to values. There are three types of arrays in PHP:

    - Indexed arrays - These are arrays where the keys are numeric indices starting from 0. Example

    ```php
    $fruits = array("Apple", "Banana", "Orange"); // $fruits = ["Apple", "Banana", "Orange"];
    ```

    - Associative arrays - These are arrays where the keys are strings. Example

    ```php
    $person = array("name" => "John", "age" => 30, "city" => "New York"); // $person = ["name" => "John", "age" => 30, "city" => "New York"];
    ```

    - Multidimensional arrays - These are arrays that contain other arrays as elements. Example

    ```php
    $matrix = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    ); // $matrix = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    ```

  - Objects - An object is an instance of a class. An object consist of properties (attributes) and methods (functions). Example

  ```php

  ```

# Special Types

- They include
  - NULL - NULL simply represents a variable with no value. It is represented by the `null` keyword
  - Resource - is a specisl variable that references to another source outside of PHP. For example, a database connection is a resource. Resources are created and used by special functions in PHP. When you are done using a resource, you should free it using the appropriate function to avoid memory leaks. Other examples of resources include file handles, image canvases, and network connections.
    ![](php-resources.png)

# PHP Boolean

- A boolean is simply a truth value that can be either true or false. PHP use the `bool` type to represent boolean values.
- The `is_bool()` function can be used to check whether a variable is of boolean type. Example

```php
$is_adult = false;
echo is_bool( $is_adult ); // Output: 1 (true)
```

Now, when you `echo` a boolean value, PHP converts the result to a string by representing `true` as `1` and `false` as an empty string.

# PHP int

- To get the size of an integer on a specific platform, you can use the constant `PHP_INT_SIZE`. Similarly, to get the maximum and minimum values of an integer, you can use the constants `PHP_INT_MAX` and `PHP_INT_MIN`, respectively.
- PHP represnts integers in decimal (base 10), hexadecimal (base 16), octal (base 8), and binary (base 2) notation.

  - Decimal numbers - PHP uses sequences of digits (0-9) to represent decimal numbers. These sequence may begin with a plus (+) or minus (-) sign to indicate positive or negative numbers. If no sign is specified, the number is assumed to be positive. Example

  ```php
  42
  -7
  +15
  -2000
  ```

  From PHP 7.4 onwards, you can use underscores (`_`) as visual separators in numeric literals to improve readability. Example

  ```php
  $largeNumber = 1_000_000;
  ```

  - Octal numbers - PHP uses a leading zero (0) followed by digits (0-7) to represent octal numbers. Similar to decimals, Octal numbers also takes sign - they can be either positive or negative. Example

  ```php
  0755  // Equivalent to decimal 493
  -0123 // Equivalent to decimal -83
  ```

  - Hecadecimal numbers - Hexadecimals consist of leading zeroes (0x) or (0X) followed by digits (0-9) or letters (A-F) to represent values from 10 to 15. Hexadecimal numbers can also be either positive or negative. Example

  ````php
  0x1A3  // Equivalent to decimal 419
  -0X4F  // Equivalent to decimal -79
  Particularly, the leading `0x` or `0X` is what indicates a hexadecimal number in PHP.
  + Binary numbers - begins with `0b` or `0B` followed by a sequence of 0s and 1s. Binary numbers can also be either positive or negative. Example
  ```php
  0b1101  // Equivalent to decimal 13
  -0B1010 // Equivalent to decimal -10
  ````

- The `is_int()` function can be used to check whether a variable is of integer type. It takes a variable as a parameter and returns true if the variable is an integer, otherwise false.

# PHP Float

- Floating-point numbers represents numerical values with decimal points or in exponential form.
- Similar to integers, the range/size of float is dependent on the platform running PHP. Also, you can use underscore (`_`) as visual separators in numeric literals to improve readability. Example

```php
$largeFloat = 3.1415_9265;
+ Floating-point number Accuracy
```

- The computer can not completely represent some floating-point numbers due to their binary representation. Therefore, when performing arithmetic operations with floating-point numbers, you may encounter precision issues. Example, the result of 0.1 + 0.1 + 0.1 is 0.299999999…, not 0.3.
- The Loose comparision operator (`==`) is used to (loosely) compare two values for equality. It allows type juggling. However, when comparing floating-point numbers, it may not yield the expected result due to precision issues. Therefore, it is recommended to use a tolerance value (epsilon) when comparing floating-point numbers. Example

```php
$total = 0.1 + 0.1 + 0.1;
$expected = 0.3;
echo $total == $expected; // Output: (false)
```

Thus, PHP can only represent floating-point numbers approximately not precisely.

- To compare two floating-point numbers for equality, you can use the following approach:

```php
$epsilon = 0.00001; // Define a small tolerance value
if ( abs( $total - $expected ) < $epsilon ) {
    echo "The numbers are equal.";
} else {
    echo "The numbers are not equal.";
}
```

- The `is_float()` function returns true if the variable is of float type, otherwise false

# PHP String

- A string is a sequence of characters enclosed in either single quotes (' ') or double quotes (" "). Notice that you cannot start a string with a single quote and end it with a double quote and vice versa. The quotes must be consistent else, you'll get a syntax error. Example `'Hello, World!'` and `"Hello, World!"` are valid strings, while `'Hello, World!"` is invalid.
- To concatente string in PHP, we use the dot / concatenate (`.`) operator. Example

```php
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName; // Concatenate first
// and last names with a space in between
echo $fullName; // Output: John Doe
```

This also follows for single quotes

- Single vs Double Quotes

  - Single Quotes (' ') - When you enclose a string in single quotes, PHP treats the content literally. That is, it does not interpret any special characters or variables within the string. Example

  ```php
  $name = 'John';
  echo 'Hello, $name\n'; // Output: Hello, $name\n
  ```

  - Double Quotes (" ") - When you enclose a string in double quotes, PHP interprets special characters and variables within the string. Example

  ```php
  $name = 'John';
  echo "Hello, $name\n"; // Output: Hello, John (followed by a new line)
  ```

  Also, with double quotes, variables are parsed and their values are inserted into the string. This feature is known as _Variable Interpolation_. Example

  ````php
  $age = 25;
  echo "I am $age years old."; // Output: I am 25 years old

  An alternative syntax is to wrap the variable in curly braces like this:
  ```php
  $age = 25;
  echo "I am {$age} years old."; // Output: I am 25 years old.
  ````

- Accessing String Characters
  - A string is zero-indexed, meaning the first character is at index 0, the second character is at index 1, and so on. You can access individual characters in a string using square brackets (`[]`) with the index of the character. We use the following syntax:
  ```php
  $string[index] #index ranges from 0 to length-1
  #length is the total number of characters in the string
  ```
  - The built-in `strlen()` function returns the length of a string. Example
  ```php
  $message = "Hello, World!";
  $length = strlen( $message ); // $length will be 13
  ```

* The in built `is_string()` function checks whether a variable is of string type. It returns true if the variable is a string, otherwise false.

# PHP Heredoc

- Heredoc is a syntax for defining multi-line strings in PHP. It allows you to create strings that span multiple lines without the need for concatenation or escape characters.
- Suppose you have a string that contains the double quotes, you escape them using backslashes (`\`). Example

```php
$he = 'Bob'
$she = "Alice"
$message = "He said, \"Hello, $he!\"\nShe replied, \"Hi, $she!\"";
echo $message;
// Output:
// He said, "Hello, Bob!"
// She replied, "Hi, Alice!"
```

Thus for any string that contains both single and double quotes say `"any_str"`, we can escape as follows

```php
$any_str = "\"any_str\""; // Using double quotes
$any_str = '\'any_str\''; // Using single quotes
```

Forward slash => Single quote => Character to be escaped => Single quote => Forward slash

- However, using escape characters can make the string hard to read and maintain. To avoid this, you can use Heredoc syntax as follows

```php
$str = <<<IDENTIFIER
place a string here
it can span multiple lines
and include single quote ' and double quotes "
IDENTIFIER;
```

- How it works
  - The `<<<IDENTIFIER` indicates the start of a Heredoc string. You can use any identifier you like, but it must be a valid label (e.g., it cannot start with a number or contain spaces).
  - The string content follows the opening identifier and can span multiple lines and contain double and single quoted text.
  - The closing identifier (`IDENTIFIER;`) must be on a new line and should not have any leading or trailing whitespace.
  - Variables within the Heredoc string are parsed and their values are inserted into the string, similar to double-quoted strings.
- Asides from the readability advantage, Heredoc syntax is particularly useful to generate large blocks of text, such as HTML templates or SQL queries, where maintaining the original formatting is important. Example - Using Heredoc to generate HTML

```php
$name = John Doe;
$html = <<<HTML
<div>
    <h4>Welcome</h4>
    <h1>$name</h1>
    <p>This is a sample HTML block generated using Heredoc syntax.</p>
</div>
HTML;
```

# PHP Nowdoc Syntax

- It is simlar to Heredoc syntax with the exception that variables within a Nowdoc string are not parsed. That is, they are treated literally. Syntax

````php
$str = <<<'IDENTIFIER'
place a string here
Another line here
and include single quote ' and double quotes "
variables like $name will not be parsed
IDENTIFIER;
Notice that the identifier after the `<<<` operator is enclosed in single quotes (`' '`). Also, the embedded variables like `$name` ar treated as literal text not parsed.

+ Heredoc strings are like double-quoted strings without escaping.
+ Nowdoc strings are like single-quoted strings without escaping.

# Introduction to NULL in PHP
+ The `null` type is a single-value type with one value: `NULL`. A variable of type `null` has no value assigned to it. It is classified as a special type in PHP
+ A variable is considered to be of type `null` if:
  + It has been assigned the constant `NULL`
  + It has not been assigned any value yet
  + It has been unset using the `unset()` function - the `unset()` function is used to destroy a variable. Once a variable is unset, it no longer exists in the current scope and is considered to be of type `null`. Example
```php
$var = "Hello, World!";
var_dump( $var ); // Output: string(13) "Hello, World!"
unset( $var );
var_dump( $var ); // Output: NULL
````

- Since PHP keywords are case-insensitive, you can also use `null`, `Null`, or `NuLL` to represent the `NULL` constant.

* The `is_null()` function checks whether a variable is of type `null`. It returns true if the variable is `null`, otherwise false.
* You can also use the Strict comparison operator (`===`) to check if a variable is `null`. Example

```php
$var = null;
if ( $var === null ) {
    echo "The variable is null.";
} else {
    echo "The variable is not null.";
}
```

# PHP Type Casting

- Type casting is the process of converting a value from one data-type to another. To cast a value to a specific type in PHP, you can use the following syntax:

```php
$variable = (type) $value;
```

Thus for example, to cast a variable to an integer, you can use `(int)`, `(integer)`, to cast to a float, you can use `(float)`, `(double)`, or `(real)`, to cast to a string, you can use `(string)`, to cast to a boolean, you can use `(bool)` or `(boolean)`, and to cast to an array, you can use `(array)`.

- Cast to an integer
  - Suppose you want to cast a string to an integer. If the string is leading numeric, PHP will convert the numeric part to an integer and ignore the rest. Example
  ```php
  $price = "199 USD";
  $price_float = (int) $price; // $price_float will be 199
  ```
  - If the string is not leading numeric, PHP will convert it to 0. Example
  ```php
  $price = "USD 199";
  echo (int) $price; // Output: 0
  ```
- Cast to a float
  - Similar to casting to an integer, when casting a string to a float, if the string is leading numeric, PHP will convert the numeric part to a float and ignore the rest. Example
  ```php
  $price = "199.99 USD";
  $price_float = (float) $price; // $price_float will be 199.99
  ```
  - If the string is not leading numeric, PHP will convert it to 0.0. Example
  ```php
  $price = "USD 199.99";
  echo (float) $price; // Output: 0
  ```
  - Also notice that in Python programming language, when you cast an integer to a float, it adds a decimal point followed by a zero. However, in PHP, it simply converts the integer to a float without adding the decimal point. Example
  ```php
  $num = 42;
  $num_float = (float) $num; // $num_float will be 42 not 42.0
  ```
- Cast to a string
  - When casting a value to a string, PHP converts the value to its string representation. Example
  ```php
  $age = 25;
  $age_str = (string) $age; // $age_str will be "25"
  ```
  - For boolean values, `true` is converted to "1" and `false` is converted to an empty string. Example
  ```php
  $is_adult = true;
  $is_adult_str = (string) $is_adult; // $is_adult_str will be "1"
  ```
  - The `(string)` operator converts an array to the string "Array". Example
  ```php
  $fruits = array("Apple", "Banana", "Orange");
  $fruits_str = (string) $fruits; // $fruits_str will be "Array"
  ```
  - Notice that when concatenating an array with a string, PHP automatically converts the array to the string "Array". Example
  ```php
  $fruits = array("Apple", "Banana", "Orange");
  $message = "Fruits: " . $fruits; // $message will be "Fruits: Array"
  ```
  - Also when concatenating a string with an integer or float, PHP automatically converts the integer or float to its string representation. Example
  ```php
  $age = 25;
  $message = "Age: " . $age; // $message will be "Age: 25"
  ```

# PHP Type Juggling

- PHP is a losely/dynamically typed programming language. That is, you don't need to explicitly declare the data-type of a variable when defining it. PHP automatically determines the data-type of a variable based on the value assigned to it. This feature is known as type juggling. For example, if you assign an integer value to a variable, PHP treats it as an integer. If you later assign a string value to the same variable, PHP treats it as a string. Example

```php
$var = 42; // $var is treated as an integer
echo gettype( $var ); // Output: integer
$var = "Hello, World!"; // $var is now treated as a string
echo gettype( $var ); // Output: string
```

- Type juggling simply mean when converting a data-type to another data-type, PHP automatically convert them to the common most comparable data-type.
  For example
  - when you use the addition operator (`+`) to add an integer and a float, PHP automatically converts the integer to a float before performing the addition. Example
  ```php
  $int_num = 10; // Integer
  $float_num = 5.5; // Float
  $sum = $int_num + $float_num; // $int_num is converted to float
  echo $sum; // Output: 15.5
  ```
- Also, when you use the concatenation operator (`.`) to concatenate a string and an integer, PHP automatically converts the integer to its string representation before performing the concatenation. Example

```php
 $str = "The answer is ";
 $int_num = 42;
 $message = $str . $int_num; // $int_num is converted to string
 echo $message; // Output: The answer is 42
```

- When you compare two values of different data-types using the equality operator (`==`), PHP automatically converts them to a common comparable data-type before performing the comparison. Example

```php
 $int_num = 10; // Integer
 $str_num = "10"; // String
 if ( $int_num == $str_num ) { // $str_num is converted to integer
     echo "The values are equal."; // This will be executed
 } else {
       echo "The values are not equal.";
   }
```

- Comparing string and integer using the equality operator (`==`) results in type juggling, where the string is converted to an integer for comparison.

* Loosely comparing `NULL` with the boolean false using the equality operator (`==`) results in type juggling, where `NULL` and `false` are treated as false for comparison.
* PHP has conversion priorities:
  - Numeric comparison if possible
  - Boolean comparison only when necessary
  - Special loose rules for NULL, "", "0"

# PHP Operators

- PHP provides various operators to perform operations such as addition, subtraction, multiplication, division, modulus and exponenetial on variables and values.
- In PHP, numerical operators require a numerical value (integer or float) on both sides. If one of the operands is not a number, PHP will attempt to convert it to a number using type juggling rules before performing the operation. If the conversion is not possible, PHP will treat the non-numeric operand as 0.
- The following are the arithmetic operators in PHP:
  - Addition (`+`) -
    - The sum of an integer and a float or a float and a float is a float.
    - Computers cannot represent floats precisely. In some cases, the result will not be what you expect. For example:
    ```php
    $result = 0.1 + 0.2;
    echo $result; // Output: 0.30000000000000004
    ```
    An issue will occur if you add floats and then compare the result using the equality operator (`==`) to another float. To avoid this, you can use a tolerance value (epsilon) when comparing floating-point numbers. Example
    ```php
    $total = 0.1 + 0.2;
    $expected = 0.3;
    echo $total == $expected; // Output: (false)
    // Fix
    $epsilon = 0.00001; // Define a small tolerance value
    if ( abs( $total - $expected ) < $epsilon ) {
        echo "The numbers are equal.";
    } else {
        echo "The numbers are not equal.";
    }
    ```
    - Add a number to a string reults in PHP converting the string to a number using type juggling rules before performing the addition to yield a numerical result. If the numerical string contains a non-numeric character, PHP issues a warning and ignores the non-numeric part. Example
    ```php
    $num_str = "100 apples";
    $num = 50;
    $sum = $num_str + $num; // $num_str is converted to
    echo $sum; // Output: 150
    ```
    Warning: A non-numeric value encountered in /path/to/file.php on line X
    - If PHP fails to convert a string to a number, it will result into a fatal error. Example
    ```php
    $num_str = "apples 100";
    $num = 50;
    $sum = $num_str + $num; // Fatal error
    ```
    Notice that the string wasn't converted to a truthy value which is 1. Instead, it resulted into a fatal error.
  - Subtraction (`-`) - subtracts one number from another
    - Subtracting a float from an integer or a float from a float results in a float.
    - Similar to addition, subtracting a float from another float is inaccurate due to the imprecision of float representation in computers.
      Example
    ```php
    $x = 0.3 - 0.1;
    echo $x; // Output: 0.19999999999999998
    // expected output is 0.2
    ```
  - Multiplication (`*`) - multiplies two numbers together
    - Multiplying a float from an integer or a float from a float results in a float.
  - Division (`/`) - divides first number by the second number
    - Dividing a float from an integer or a float from a float results in a float.
    - Dividing by zero results in a fatal error.
    - Basic Division rules still follows
  - Modulus (`%`) - returns the remainder of a division operation
  - Exponentiation (`**`) - raises a number to the power of another number-

* PHP decides how to convert values based on the OPERATOR being used — not just the values themselves.

# PHP Assignment Operators

- The `=` represents the assignment operator in PHP. It is used to assign a value to a variable.
- Basically, it assigns a values or an expression to a variable and returns the assigned value. Syntax

```php
$variable = value;
```

- On the left side of the assignment operator is the variable name while on the right side is the value or expression to be assigned to the variable.
- When evaluating an assignment expression, PHP first evaluates the right side of the assignment operator to obtain the value to be assigned. Then, it assigns that value to the variable on the left side. Example

```php
$first_name = "John";
$last_name = "Doe";
$full_name = $first_name . " " . $last_name; // Concatenate first and last names
echo $full_name; // Output: John Doe
```

Here, the assignemnt operator returns a value which is the value of the expression at the right side of the operator.

- Consider this piece of code

```php
echo $full_name = 'Harry' . ' ' . 'Potter', '<br>';
echo $full_name, '<br>';
```

First, PHP executes code from left to right. Thus, it first evaluates the expression `$full_name = 'Harry' . ' ' . 'Potter'` which results in the value `Harry Potter`. Then, it assigns this value to the variable `$full_name`. Finally, it echoes the value of `$full_name`, which is `Harry Potter`. The second `echo` statement simply outputs the value of `$full_name` again, which is still `Harry Potter`.

## Arithmetic Assignment Operators

- Suppose you want to add a value to an existing variable and update the variable with the new value. You can use the addition assignment operator (`+=`) to achieve this. Example

```php
i = 0
i += 5; // Equivalent to i = i + 5
echo i; // Output: 5
```

Thus for any arithmetic operation, you can use the corresponding arithmetic assignment operator to update the variable with the result of the operation. The following are the arithmetic assignment operators in PHP:

- Addition assignment (`+=`) - adds a value to a variable and assigns the result to the variable
- Subtraction assignment (`-=`) - subtracts a value from a variable and assigns the result to the variable
- Multiplication assignment (`*=`) - multiplies a variable by a value and assigns the result to the variable
- Division assignment (`/=`) - divides a variable by a value and assigns the result to the variable
- Modulus assignment (`%=`) - calculates the modulus of a variable by a value and assigns the result to the variable
- Exponentiation assignment (`**=`) - raises a variable to the power of a value and assigns the result to the variable

* Notice that the arithmetic assignment operators perform the arithmetic operation on the current value of the variable and the specified value, then update the variable with the new result.
* Also, in the syntax, the variable appears at the left side of the operator while the value appears at the right side. Furthermore, for each arithmetic assignment operator, the arithmetic operation is performed and comes first before the assignment operation. Below is more of a general syntax of an arithmetic assignment operator

```php
$variable operator= value;
```

- Where `operator` can be any of the arithmetic operators (+, -, \*, /, %, \*\*)
- The arithmetic assignment operators combine the arithmetic operation and the assignment operation into a single operation, making the code more concise and easier to read.

## Concatenation Assignment Operator

PHP uses `.` for concatenation. To concatenate a string to an existing variable and update the variable with the new value, you can use the concatenation assignment operator (`.=`). Example

```php
$message = "Hello";
$message .= ", World!"; // Equivalent to $message = $message . ", World!"
echo $message; // Output: Hello, World!
```

# PHP Comparison Operators

- PHP comparsion operators are used to compare two values. They return a boolean value (true or false) based on the result of the comparison.
- The following are the comparison operators in PHP:
  - Equal (`==`) - returns true if two values are equal without considering the type (loose comparison => type juggling) else false
  - Identical (`===`) - returns true if two values are equal and of the same type (strict comparison) else false
  - Not equal (`!=` or `<>`) - returns true if two values are not equal (with type juggling - loose comparison) else false
  - Not identical (`!==`) - returns true if two values are not equal or not of the same type (strict comparison) else false
  - Greater than (`>`) - returns true if the left value is greater than the right value else false
  - Less than (`<`) - returns true if the left value is less than the right value else false
  - Greater than or equal to (`>=`) - returns true if the left value is greater than or equal to the right value else false. Note that `>` comes first before `=`. If otherwise, it will be treated as the assignment operator and you will most likely get a syntax error
  - Less than or equal to (`<=`) - returns true if the left value is less than or equal to the right value else false. Similarly, note that `<` comes first before `=`. If otherwise you will most likely get a syntax error

# PHP AND Operator

- The logical AND operator (denoted by `and` or `&&`. Note that by case-insensitivity, And, AND and aNd are also valid but by convention, use `and` or `&&`) is used to combine two boolean expressions. It returns true if both expressions are true, otherwise it returns false.
- The following illustrates the result of the logical AND operator on two boolean values

```
| Expression 1 | Expression 2 | Result  |
|--------------|--------------|---------|
| true         | true         | true    |
| true         | false        | false   |
| false        | true         | false   |
| false        | false        | false   |
```

- `and` and `&&` are the same but they differ in their precedence. The `and` operator has a lower precedence than the `&&` operator. This means that when using `and`, it is evaluated after, while `&&` is evaluated before.

## Short-Circuiting

- When the values of the first boolean operand is false, the second operand is not evaluated because the overall result will be false regardless of the value of the second operand since we know that `false && anything` is always false. This is known as Short-Circuiting. Thus, the `&&` or `and` operator is for Short-Circuiting logical AND operation.

# PHP OR Operator

- The logical OR operator (denoted by `or` or `||`. Note that by case-insensitivity, Or, OR and oR are also valid but by convention, use `or` or `||`) is used to combine two boolean expressions. It returns true if at least one of the expressions is true, otherwise it returns false.
- The following illustrates the result of the logical OR operator on two boolean values

```
| Expression 1 | Expression 2 | Result  |
|--------------|--------------|---------|
| true         | true         | true    |
| true         | false        | true    |
| false        | true         | true    |
| false        | false        | false   |
```

- Similarly, `or` and `||` are the same but they differ in their precedence. The `or` operator has a lower precedence than the `||` operator. This means that when using `or`, it is evaluated after, while `||` is evaluated before.

## Short-Circuiting

- When the values of the first boolean operand is true, the second operand is not evaluated because the overall result will be true regardless of the value of the second operand since we know that `true || anything` is always true. This is known as Short-Circuiting. Thus, the `||` or `or` operator is for Short-Circuiting logical OR operation.
- Practically, the or operator is used in the following pattern

```php
function_name() || die("Error message");
```

Here, if `function_name()` returns false, the `die()` function is executed to terminate the script with an error message. If `function_name()` returns true, the `die()` function is not executed. Also, regardless of the return value, if the function executes successfully without errors, it returns true and the script continues to run.

## The PHP OR gotchas

- Consider the following code snippet

```php
$access_granted = false or true;
var_dump( $access_granted ); // Output: bool(false)
```

Here, the output is `bool(false)` because the assignment operator (`=`) has a higher precedence than the `or` operator. The expression is evaluated as follows

```php
( $access_granted = false ) or true;
```

By this, it assigns the $access_granted variable the value false before the `or` operation is evaluated. Therefore, printing $access_granted outputs false.

- To achieve the expected result, you can use parentheses to explicitly define the order of evaluation as follows

```php
$access_granted = ( false or true );
```

- This logical fuss applies to the `and` operator as well. Thus, always use parentheses when combining assignment with logical operators to avoid confusion. Or to rather play safe, use `&&` and `||` instead of `and` and `or` when combining with assignment.

# PHP NOT Operator

- Unlike the AND and OR operators that are binary operators (require two operands), the NOT operator (denoted by `!`) is a unary operator (requires only one operand). It is used to negate a boolean expression. It returns true if the expression is false, and false if the expression is true.
- The following illustrates the result of the logical NOT operator on a boolean value

```
| Expression | Result  |
|------------|---------|
| true       | false   |
| false      | true    |
```

# PHP Logical Operators Precedence

```
NOT ( ! ) > AND ( && ) > OR ( || ) > AND ( and ) > or ( or )

```

## PHP Operators Precedence

```
Arithmetic Operators (highest):
( ) > ** > * / % > + -
> . > << >> > >>
Comparison Operators:
< <= > >= == != === !== <>
>= <=
Assignment Operators:
= += -= *= /= %= .= **=
Logical Operators (lowest):
and or
```

# PHP If Statement

- The `if` statement is a conditional statement that allows you to execute a block of code only if a specified condition or a logical expression is true. The syntax of the `if` statement in PHP is as follows:

```php
if(expression) {
    // code to be executed if the expression is true
}
```

- Here, the `expression` is a boolean expression that evaluates to either true or false. It is executed first. If the expression is true, the code block inside the curly braces `{}` is executed. If the expression is false, the code block is skipped and the program continues with the next statement after the `if` block.

* The below diagram illustrates the flow of control in an `if` statement
  ![](php-if.png)

- If you want to execute only a single statement when the condition is true, you can omit the curly braces. Example

```php
$age = 18;
if ( $age >= 18 )
    echo "You are an adult.";
```

But still, it’s a good practice to always use curly braces with the if statement even though it has a single statement to execute

## Nesting If Statements

- This can be done as follows:

```php
if ( condition1 ) {
    // code to be executed if condition1 is true
    if ( condition2 ) {
        // code to be executed if condition2 is true
    }
}
```

## Embeded If Statements

- PHP provieds an alternative syntax for embedding `if` statements within HTML code. This syntax is particularly useful when you want to mix PHP code with HTML markup. The syntax for embedded `if` statements is as follows:

```php
<?php if ( expression ): ?>
    <!-- HTML code to be executed if the expression is true -->
<?php endif; ?>
```

- If you require an `else` block, you can use the following syntax:

```php
<?php if ( expression ): ?>
    <!-- HTML code to be executed if the expression is true -->
<?php else: ?>
    <!-- HTML code to be executed if the expression is false -->
<?php endif; ?>
```

- If you require an `elseif` block, you can use the following syntax:

```php
<?php if ( expression1 ): ?>
    <!-- HTML code to be executed if expression1 is true -->
<?php elseif ( expression2 ): ?>
    <!-- HTML code to be executed if expression2 is true -->
<?php else: ?>
    <!-- HTML code to be executed if both expression1 and expression2 are false -->
<?php endif; ?>
```

- Notice that the `if`, `elseif`, `else`, and `endif` keywords are used to define the structure of the embedded `if` statement. Also, they are written in a different <?php ?> element. The colon (`:`) is used to indicate the start of the code block, and the `endif;` keyword is used to close the `if` statement.
- After all conditions have been checked, the `endif;` keyword is used to close the `if` statement.

* Avoid the mistake of using curly braces `{}` with the embedded `if` statement.
* Also, avoid the use of the assignment operator (`=`) in place of the equality operator (`==`) in the expression of an `if` statement.

# PHP If...Else Statement

- Suppose you want to execute a block of code when a condition is true and another block of code when the condition is false. You can use the `if...else` statement to achieve this. The syntax of the `if...else` statement in PHP is as follows:

```php
if ( expression ) {
    // code to be executed if the expression is true
} else {
    // code to be executed if the expression is false
}
```

Here, if the expression is true, PHP executes the if block. Otherwise, it executes the else block.

- The flow of control in an `if...else` statement is illustrated below
  ![](php-if-else.png)

## PHP If...else statement in HTML

- Similar to the embedded `if` statement, you can also embed the `if...else` statement within HTML code using the following syntax:

```php
<?php if (expression): ?>
// HTML code to be executed if expression is true
<?php else:>
// HTML code to be executed if expression is false
<?php endif ?> //super important - ends the conditonal block
```

- Note that you don’t need to place a semicolon (;) after the endif keyword because the endif is the last statement in the PHP block. The enclosing tag ?> automatically implies a semicolon

* An examples is as follows

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta />
    <title>Login</title>
  </head>
  <body>
    <?php $is_authenticated = true ?>
    <?php if ($is_authenticated): ?>
    <h1>Welcome, again!</h1>
    <a href="#">Log out</a>
    <?php else: ?>
    <h1>Welcome! Log in to your account</h1>
    <a href="#">Login</a>
    <?php endif ?>
  </body>
</html>
```

# PHP If elseif statement

- The PHP If elseif statement is particularly useful when you have multiple conditions to check. It allows you to test several conditions sequentially and execute different blocks of code based on which condition is true. The syntax of the `if...elseif...else` statement in PHP is as follows:

```php
if ( expression1 ) {
    // code to be executed if expression1 is true
} elseif ( expression2 ) {
    // code to be executed if expression2 is true
} else {
    // code to be executed if both expression1 and expression2 are false
}
```

This illustrates how the If elseif statement works
![](php-if-elseif.png)

- Here, one a certain if block is executed, the rest are skipped even thought their expression is `true`.

## PHP if elseif alternative syntax

- PHP supposrts an alternative syntax for the `elseif` statement. This involves exempting the curly braces and using colons (`:`) to indicate the start of each code block. The syntax is as follows:

```php
if (expression1):
// code to be executed
elseif (expression2):
// code to be executed
elseif (expression3):
// code to be executed
else:
// code to be executed
endif;
```

- Colons indicates the start of each `if` statements
- Use the `endif` statement followed by a semi-colon to terminate the final conditional block (either the `else` or `elseif` block)
- This is similar to writing `if..else` statements in Python
- Now `elseif` and `else if` are the same in PHP. However, `elseif` is preferred as it is a single word and more concise. Also, if you decide to use the `else if` in the alternative syntax it yields an error. Example

```php
<?php

$x = 10;
$y = 20;

if ($x > $y) :
	echo 'x is greater than y';
else if ($x < $y):
	echo 'x is equal to y';
else:
	echo 'x is less than y';
endif;
```

The above code snipett yields an error. To fix it, use `elseif` instead of `else if` - remove the space between else and if.

- Use the elseif whenever possible to make your code more consistent.

# PHP Ternary Operator

- The ternary operator is a shorthand way of writing an `if...else` statement. It is called the ternary operator because it takes three operands: a condition, a value to return if the condition is true, and a value to return if the condition is false. The syntax of the ternary operator in PHP is similar to that in JavaScript and is as follows:

```php
condition ? value_if_true : value_if_false;
```

- Conside the following example

```php
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
echo $render;
```

Here, if the condition `$render` is true, the value of the first block (the HTML code for welcome message and logout link) is assigned to the variable `$render`. Otherwise, the value of the second block (the HTML code for hello message and login link) is assigned to `$render`. Finally, the value of `$render` is echoed.

- If an unassigned variable is used in the condition, it is treated as null which by type juggling gets converted to `null`.

## The shorthand ternary operator

- From PHP 5.3 onwards, you can use the shorthand ternary operator (also known as the Elvis operator) to simplify the ternary operation when the value to return if the condition is true is the same as the condition itself. The syntax of the shorthand ternary operator is as follows:

```php
$result = condition ?: value_if_false;
```

- Here is `condition` is `false`, the `$result` variable is assigned the `value_if_false`. If it is `true`, the `$result` variable is assigned the value produced by the `condition`
- The following example uses the shorthand ternary operator to assign the value of the `$path` to the `$url` if the $path is not empty. If the `$path` is empty, the ternary operator assigns the literal string ‘`/`’ to the `$url`

```php
$path = "\about"

$url = $path ?: "\"
echo $url; // Output: \about
```

- If `$path` is an empty string, null, false, 0 or not assigned a value, the output will be `\` instead.

## Chaining Ternary Operators

- Tenary operators can be chained together to evaluate multiple conditions in a single expression. This is useful when you have several possible outcomes based on different conditions. In this case, each ternary operators are nested using parentheses `()`. The syntax for chaining (3) ternary operators is as follows:

```php
condition1 ? value_if_true1 :
    ( condition2 ? value_if_true2 :
        ( condition3 ? value_if_true3 :
            value_if_false ) );
```

- Most times, chaining ternary operators can make your code hard to read and maintain. Thus, it is advisable to use `if...elseif...else` statements instead of chaining ternary operators when you have multiple conditions to check.
- However, if you still want to use chained ternary operators, ensure to use parentheses and indentations to clearly define the order of evaluation and improve readability.

# PHP Switch

- The switch statement is particularly useful when the value of a variable needs to be compared against multiple possible values in a boolean expression. It provides a more concise and readable way to handle such scenarios compared to using multiple `if...elseif...else` statements.
- The syntax of the switch statement in PHP is as follows:

```php
switch(expression){
  case value1:
    // code block 1;
    break;
  case value2:
    // code block 2;
    break;
  default:
    // code to be executed when expression don't fit any of the cases
}
```

- It's alternative syntax

```php
switch(expression):
  case value1:
    // code block 1;
    break;
  case value2:
    // code block 2;
    break;
  default:
    // code to be executed when expression don't fit any of the cases
endswitch;
```

is used when embedding PHP in HTML. Do not forget the `endswitch;` statement to terminate the switch block.

- Here, the `expression` is evaluated once and its value is compared against the values specified in each `case`. If a match is found, the corresponding code block is executed. The `break` statement is used to exit the switch statement after executing a case block. If no match is found, the code block under the `default` case is executed (if provided). If the `default` case is omitted and no match is found, no code block is executed.

* The flow of control in a switch statement is illustrated below
  ![](php-switch.png)

- Scenario: Suppose that you’re building a website whose users have many roles like admin, editor, author, and subscriber. You can basically use an if...elseif...else statement to check the user role and display the appropriate content as

```php
$role = 'editor';
$message = '';

if ($role === 'editor') {
    $message = 'Welcome! You have some pending articles to edit';
} elseif ($role === 'author') {
    $message = 'Welcome! Do you want to publish the draft article?';
} elseif ($role === 'admin') {
        $message = 'Welcome, admin!';
    } elseif ($role === 'subscriber') {
             $message = 'Welcome! Check out some new articles';
}

echo <<<TEXT
<h1>$message</h1>
TEXT;
```

- Instead of using the if...elseif...else statement, you can use the switch statement to achieve the same result more concisely as follows:

```php
$role = 'editor';
$message = '';

switch ($role):
    case 'editor':
        $message = 'Welcome! You have some pending articles to edit';
        break;
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
```

or using the standard syntax

```php
$role = 'editor';
$message = '';

switch ($role) {
    case 'editor':
        $message = 'Welcome! You have some pending articles to edit';
        break;
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
}
```

## Combining cases

- Since PHP executes a certain case block when a match is found till it encounters a break statement, you can combine multiple cases that share the same code block. Example: Suppose both the editor and author roles share the same welcome message. You can combine their cases as follows:

````php
switch ($role):
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

# PHP for
+ The `for` statement allows you to execute a block of code repeatedly for a specified number of times. It is commonly used when the number of iterations is known beforehand. The syntax of the `for` statement in PHP is as follows:

```php
for (start; condition; increment) {

}
````

- `start` statement is executed when the loop starts
- `condition` is mostly a boolean expression or value. If its `true`, the code in the block gets executed
- the `increment` expression is expressed at each iteration
- In PHP, you can multiply multiple `start`, `condition` and `increment` expressions by separating them with commas. Example

```php
for ( $i = 0, $j = 10; $i < 10, $j > 0; $i++, $j-- ) {
    echo "i: $i, j: $j\n";
}
```

This is mostly when you want to control multiple variables in a single `for` loop.

- The following illustrates the flow of control in a `for` loop
  ![](php-for.png)
- Also, you can leave any of the three expressions (`start`, `condition`, `increment`) empty. If this happens, use the `break` statement to exit or terminate the loop at some point Example

```php
for(;;) {
    // infinite loop
    // use break statement to exit the loop
    if ( some_condition ) {
        break;
    }
}
```

- Notice that even though `condition`, `start` and `increment` expressions are optional, the semicolons (`;`) separating them are mandatory.
- Also, don't forget to use the `break` statement to exit the loop when the `condition` expression is omitted; otherwise, it will result in an infinite loop.
- The increment operator `++` can be used rather than explicitly adding 1 to a variable. Example

```php
for ( $i = 0; $i < 10; $i++ ) {
    echo "i: $i\n";
}
```

instead of

```php
for ( $i = 0; $i < 10; $i += 1 ) {
    echo "i: $i\n";
}
```

# PHP while
+  The `while`statement executes a block of code as long as a specified condition (a boolean) is true. It is commonly used when the number of iterations is not known beforehand and depends on a certain condition being met. The syntax of the `while` statement in PHP is as follows:

```php
while ( condition ) {
    // code to be executed
}
``` 
+ How it works
  + The `condition` is evaluated first. If it is true, the code block inside the curly braces `{}` is executed. After executing the code block, the `condition` is evaluated again. This process continues until the `condition` evaluates to false. When the `condition` is false, the loop terminates, and the program continues with the next statement after the `while` block.
+ Since PHP evaluaates `condition` before executing the code block, the `while` loop is known as an Pretest loop.
+ The `while` loop doesn't require curly braces `{}` if it contains only a single statement. Example

```php
while (condition)
    // single statement to be executed
```
However, it's a good practice to always use curly braces `{}` with the `while` loop, even if it has a single statement to execute, to improve code readability and maintainability.
+ The following illustrates the flow of control in a `while` loop
  ![](php-while.png)
## An alternative syntax for `while` loop
+ An alternative syntax for the `while` loop is provided in PHP, which is particularly useful when embedding PHP code within HTML. This syntax uses a colon (`:`) to indicate the start of the loop block and the `endwhile;` statement to terminate the loop. The syntax is as follows:

```php
while ( condition ):
    // code to be executed
endwhile;
```


# PHP do...while
+ The `do...while` statement is similar to the `while` statement, but with a key difference: the code block is executed at least once before the condition is evaluated. This means that the code block will always run at least one time, regardless of whether the condition is true or false. The syntax of the `do...while` statement in PHP is as follows:

```php
do {
  // code to be executed
} while(expression)
```
Here, the code is executed first before the `expression` is evaluated. If the `expression` evaluates to true, the code block is executed again. This process continues until the `expression` evaluates to false. When the `expression` is false, the loop terminates, and the program continues with the next statement after the `do...while` block.
+ The illustration of the flow of control in a `do...while` loop is as follows
  ![](php-do-while.png)

## do...while vs while
+ PHP executes the code in the `do...while` loop at least once, even if the condition is false from the beginning. In contrast, the `while` loop may not execute the code block at all if the condition is false initially.
+ The expression is evaluted at the end of each iteration in the `do...while` loop, while it is evaluated at the beginning of each iteration in the `while` loop.