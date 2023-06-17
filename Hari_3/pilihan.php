<?php
  if(isset($_POST['language'])){
    $selectedLanguage = $_POST['language'];
    echo "kamu memilih: " . $selectedLanguage;
  }
?>