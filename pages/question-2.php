<h3>Question 2</h3>
    
<p><form action="index.php" action='get'>
    <input id="q" name="q" value="2" type="hidden">
    <button type="submit">Try another string</button>
</form></p>

<?php 

$strings = ['hello everyone this string has shingi2009@gmail.com as the email address',
           'the quick brown fox jumped over the lazy dog',
           'the quick john.smith@gmail.com jumped over the energetic dog',
           'i am a string with no email',
           'secret email address at the end bill.gates@gmail.com',
           'hello@gmail.com',
           'amazon',
           'mike@yahoo.com jumped over the car',
           'another string with no email',
           'salesg@gmail.com',
           'i have a secret email mary.jane@microsoft.com can you find it?'];

// get random string
shuffle($strings);
$i = array_rand($strings);
$string = $strings[$i];

// print the chosen string
echo "$string <br><hr size='1' /><br>";

if (strpos($string, '@') !== false) {

    // first split string into two parts
    $parts = explode('@', $string);
    $string1 = $parts[0];
    $string2 = $parts[1];

    // get last part of string 1
    $string1 = explode(' ', $string1);
    $string1 = trim($string1[count($string1) - 1]);

    // get first part of string 2
    $string2 = explode(' ', $string2);
    $string2 = trim($string2[0]);

    // combine the two parts to create the email address
    $email_address = $string1 . '@' . $string2;

    // print the email address
    echo '<div class="green">' . $email_address . '</div>';

} else {
    echo '<div class="red">No email address found</red>';
}