 <?php
   

if (isset($_POST['submit'])) {
    $name = $_POST['navn'];
    $mailFrom = $_POST['epost'];
    $message = $_POST['melding'];
    
    $mailTo = "simonpett@live.no";
    $headers = "From: ".$mailFrom;
    $txt = "Du har mottat en mail fra ".$name.".\n\n".$message;
    
    mail($mailTo, $txt, $headers);
    header("Location: index.php.html?mailsendt")
}
?>
                    