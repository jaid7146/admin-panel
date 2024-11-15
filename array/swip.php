<?php
function canArrange($arr, $k) {
    $n = count($arr);
    
    // Frequency array to count occurrences of each remainder
    $remainderCount = array_fill(0, $k, 0);
    
    // Count remainders when arr[i] is divided by k
    foreach ($arr as $num) {
        $remainder = $num % $k;
        // Ensure remainder is positive
        if ($remainder < 0) {
            $remainder += $k;
        }
        $remainderCount[$remainder]++;
    }
    
    // Check for valid pairings
    for ($i = 0; $i <= $k / 2; $i++) {
        if ($i == 0) {
            // Elements with remainder 0 must form pairs with themselves, so count must be even
            if ($remainderCount[$i] % 2 != 0) {
                return false;
            }
        } else {
            // Elements with remainder i must be paired with elements with remainder k - i
            if ($remainderCount[$i] != $remainderCount[$k - $i]) {
                return false;
            }
        }
    }
    
    return true;
}

// Example usage:
$arr = [1, 2, 3, 4, 5, 10, 6, 7, 8, 9];
$k = 4;
$result = canArrange($arr, $k);
echo $result ? "True" : "False";  // Output: True
?>