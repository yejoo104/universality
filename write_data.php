<?php
//if(!empty($_POST['data'])){
$data = $_POST['data'];
$fname = str_replace("\'", "" , $_POST['filename']);
// echo '<script>alert('.$fname.')</script>';
echo '<script>alert('.$data.')</script>';
echo '<script>alert2('.$fname.')</script>';
file_put_contents('data/'.$fname.'.csv',$data);
//fwrite($fname,$data);
//fclose($fname)
//}
?>
