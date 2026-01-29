<?php
namespace Agents;

class Agent {
    public $name;

    public function __construct($name) {
        $this -> name = $name;

        echo '<pre>';
        echo "{$this -> name} initiated";
        echo '<pre>';
    }
}

namespace Model;
class Agent {
    public $name;

    public function __construct($name) {
        $this -> name = $name;

        echo '<pre>';
        echo "{$this -> name} configured";
        echo '<pre>';
   }
}