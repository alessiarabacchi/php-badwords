
<?php
$paragraph = $_POST['paragraph'] ?? '';
$badword = $_POST['badword'] ?? '';

// Sostituzione della badword con asterischi e stampa del risultato
$censoredParagraph = str_replace($badword, '***', $paragraph);
echo $censoredParagraph;
?>