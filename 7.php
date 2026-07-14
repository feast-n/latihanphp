<?php

function salam()
{
    return "Assalamualaikum";
}
echo salam();
echo "<br>";
if (function_exists('salam')) {
    echo "Walaikumussalam, pak haji.";
}
echo salam();
