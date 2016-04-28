<?php
//views/pics/index.php

$this->load->view($this->config->item('theme') . 'header');

?>


<h2><?php echo $title; ?></h2>

<?php
foreach($pics as $pic){
    echo '<div class="well">';
    $size = 'c';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';
    echo "<img class='img-responsive center-block' title='" . $pic->title . "' src='" . $photo_url . "' />";
    echo '</div>';
}




$this->load->view($this->config->item('theme') . 'footer');
?>