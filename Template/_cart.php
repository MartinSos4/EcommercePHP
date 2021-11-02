<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);

    }
    if(isset($_POST['wishlist-submit'])){
        $Cart->saveForLater($_POST['item_id']);
    }
}

?>

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Cartera</h5>
        <div class="row">
            <div class="col-sm-9">
                <?php

                foreach ($product->getData('cart') as $item) :
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
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light" id="<?php echo $item['item_id']??'0';?>" data-id="<?php echo $item['item_id']??'0';?>"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $item['item_id']??'0';?>" id="<?php echo $item['item_id']??'0';?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button id="<?php echo $item['item_id']??'0';?>" data-id="<?php echo $item['item_id']??'0';?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'];?>" name="item_id">
                                <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-end">Borrar</button>
                            </form>
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'];?>" name="item_id">
                                <button type="submit" name="wishlist-submit" class="btn font-baloo text-danger px-3">Añadir a Lista de Deseados</button>
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
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i>Envio sin costo</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal (<?php echo isset($subTotal)?count($subTotal):0; ?> item):&nbsp;<span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal)?$Cart->getSum($subTotal):0?></span></span></h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceder a Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
