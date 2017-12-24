<h1>Products</h1>

<table border=1>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    
    <?php 
        $aProductIds = getProducts(); 
    
        foreach($aProductIds as $id ){ 
                
            $product = new Product( $id );
    ?>
    <tr>
        <td><?= $product->id ?></td>
        <td><a href='../product/?id=<?= $product->id ?>'><?= $product->name ?></a></td>
        <td><?= $product->price ?></td>        
    </tr>
    <?php } ?>
    
</table>