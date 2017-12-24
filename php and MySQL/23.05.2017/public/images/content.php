<?php

    $id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);

    $isofijsodfklsjdf = new Product( $id );

?>
<h1><?= $isofijsodfklsjdf->name ?></h1>


<div>
<img width="150" src="/images/<?= $isofijsodfklsjdf->image_name ?>" >
</div>

<div>
    <?= $isofijsodfklsjdf->description ?>
    
    <br>
    <span>price: <?= $isofijsodfklsjdf->price ?></span>
</div>

<div>
    reviews
</div>