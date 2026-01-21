<?php

function sum(...$x) : int
{
    return array_sum($x);
}
return sum(1, 2, 3);