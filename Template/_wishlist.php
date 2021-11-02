<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['delete-wish-submit'])){
        $deletedrecord = $Cart->deleteWish($_POST['item_id']);
    }
    if(isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['item_id'],'cart','wishlist');
    }
}

?>

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Lista de Deseados</h5>
        <div class="row">
            <div class="col-sm-9">
                <?php

                foreach ($product->getData('wishlist') as $item) :
                    $cart = $product->getProduct($item['item_id']);
                    $subTotal[]=array_map(function ($item){
                        ?>
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image']?>" alt="cart1" style="height: 120px;" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name']?></h5>
                                <small>By <?php echo $item['item_brand']?></small>
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="text-decoration-none px-2 font-rale font-size-14">20,543 ratings</a>
                                </div>
                                <div class="qty d-flex pt-2">

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'];?>" name="item_id">
                                        <button type="submit" name="delete-wish-submit" class="btn font-baloo text-danger ps-0 pe-3 border-end">Borrar</button>
                                    </form>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'];?>" name="item_id">
                                        <button type="submit" name="cart-submit" class="btn font-baloo text-danger px-3">Añadir al carrito</button>
                                    </form>


                                </div>
                            </div>
                            <div class="col-sm-2 text-end">
                                <div class="font-size-20 text-danger font-baloo">
                                    $ <span class="product_price" data-id="<?php echo $item['item_id'];?>" ><?php echo $item['item_price']?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                        return $item['item_price'];
                    }, $cart);
                endforeach;
                ?>
            </div>
        </div>
    </div>
</section>

