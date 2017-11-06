<?php

    $url = "http://www.ynet.co.il/Integration/StoryRss1854.xml";

    //  GET RSS as a string
    $rss = file_get_contents( $url );

    //  Convert RSS (which is actually an XML)
    //  to an Object

    $obj = simplexml_load_string($rss);

?>

<h1>Ynet</h1>


<?php 

foreach($obj->channel->item as $item){

?>
<a href="<?= $item->link ?>" target="_blank"><?= $item->title ?></a> 
<hr>
<?php } ?>