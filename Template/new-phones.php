<?php
shuffle($product_shuffle);
if ($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['new_phones_submit'])){
        $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    }

}
?>

<Section id="new-phones">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Nuevos celulares</h4>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item){?>
                <div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s', 'product.php', $item['item_id'])?>"><img src="<?php echo $item['item_image']?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name']?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo $item['item_price']?></span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'];?>">
                                <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                <?php
                                if (in_array($item['item_id'], $Cart ->getCartid($product->getData('cart'))??[])){
                                    echo '<button type="submit" disabled name="new_phones_submit" class="btn btn-success font-size-12">Añadido</button>';
                                }else {
                                    echo '<button type="submit" name="new_phones_submit" class="btn btn-warning font-size-12">Añadir al carrito</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>

</Section>
