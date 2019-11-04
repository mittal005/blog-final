 <?php
include_once './imageClass.php';
$imageClass=new imageClass();
$listImages=$imageClass->listImages("", "", "");
if(count($listImages)){
    foreach ($listImages as $value) {
    echo '<div class="col-md-3 imagebox">
    <img src="gallery/'.$value["image"].'" width="100%">
    <a href="sample_content.php?edit=1">Edit</a>
</div>';
    }
}
?>