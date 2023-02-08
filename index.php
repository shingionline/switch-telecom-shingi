<?php include('includes/header.php'); ?>
<h2>Switch Telecom - Shingi</h2>
<?php

include('includes/menu.php');

if (isset($_GET['q']) && is_numeric($_GET['q']) && $_GET['q'] >= 1 && $_GET['q'] <= 4) {
    $q = $_GET['q'];
    include('content/pages/question-' . $q . '.php');
} else {
    echo '<h5>Please choose a question</h5>';
}
include('includes/footer.php');
?>