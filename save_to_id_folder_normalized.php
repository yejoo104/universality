<?php
$data = $_POST['data'];
$fname = str_replace("\'", "" , $_POST['filename']);
echo '<script>alert('.$data.')</script>';
echo '<script>alert2('.$fname.')</script>';
file_put_contents('id_folder_normalized/'.$fname.'.csv',$data);

?>
