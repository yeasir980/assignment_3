<?php
function generatePassword($length) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';
    $allCharacters = $lowercase . $uppercase . $numbers . $specialChars;

    $poolSize = strlen($allCharacters);

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $poolSize - 1);

        $password .= $allCharacters[$randomIndex];
    }

    return $password;
}

$password = generatePassword(12);

echo $password . "\n";
?>
