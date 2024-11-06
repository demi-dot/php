<?php

function isPalindrome($input) {
   
    $normalized = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $input));
    
   
    $reversed = strrev($normalized);
    
    
    if ($normalized === $reversed) {
        return true;
    } else {
        return false;
    }
}


do {
    
    $input = readline("Enter a number or string: ");
    
    
    if (trim($input) === '') {
        echo " Enter a valid number or string.\n";
        continue;
    }
    
    
    if (isPalindrome($input)) {
        echo "$input is a palindrome.\n";
    } else {
        echo "$input is not a palindrome.\n";
    }
    
    
    $continue = readline("Do you want to look at another input? (yes/no): ");
    
} while (strtolower($continue) === 'yes');

echo "Come back anytime!\n";
?>
