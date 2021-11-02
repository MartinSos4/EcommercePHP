<?php
 $item_id = $_GET['item_id']?? 1;
 foreach ($product->getData() as $item):
     if ($item['item_id'] == $item_id):
?>

<section id="product" class="py-3">
    <div class="container">
        <div class="row g-3">
            <div class="col-sm-6 mb-5">
                <img src="<?php echo $item['item_image'] ?>" alt="product" class="img-fluid">
                <div class="row g-2 pt-4 font-size-16 font-baloo">
                    <div class="col"><button type="submit" class="btn btn-danger form-control">Comprar</button></div>
                    <div class="col"><button type="submit" class="btn btn-warning form-control">Agregar al carrito</button></div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?></h5>
                <small>by <?php echo $item['item_brand'] ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rate font-size-14 text-decoration-none">20,534 ratings | 1000+ answered questions</a>
                </div>
                <hr class="m-0">

                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P:</td>
                        <td><strike>$162.00</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-size-20 text-danger">$ <span><?php echo $item['item_price'] ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;incluye IVA</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save:</td>
                        <td>$ <span class="font-size-16 text-danger">10.00</span></td>
                    </tr>
                </table>
                <div class="policy">
                    <div class="d-flex">
                        <div class="return text-center ms-5">
                            <div class="font-size-20 my-2 color-secundary">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rate font-size-12 text-decoration-none">10 dias<br>reembolso</a>
                        </div>
                        <div class="return text-center ms-5">
                            <div class="font-size-20 my-2 color-secundary">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rate font-size-12 text-decoration-none">Delivery</a>
                        </div>
                        <div class="return text-center ms-5">
                            <div class="font-size-20 my-2 color-secundary">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rate font-size-12 text-decoration-none">1 año<br>garantía</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by: Ene 1 - Dic-31</small>
                    <small>Sold by <a href="#"class="text-decoration-none">DHL</a>(4.5 out of 5 | 18,198 ratings) </small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp; Delivery to Customer - 424201</small>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-secundary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Cantidad</h6>
                            <div class="px-4 d-flex font-rale">
                                <button data-id="pro1" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                <input data-id="pro1" type="text" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="size my-3">
                    <h6 class="font-baloo">Memoria:</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">6GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">8GB RAM</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h6>Descripción de producto</h6>
                <hr>
                <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque harum molestias ipsum. Veniam minus aspernatur quia at fugiat dicta rerum alias, beatae, velit exercitationem ipsa, voluptatibus consectetur et doloremque. Labore fuga doloribus cumque atque quisquam, minima in architecto ad autem quae! Itaque corporis unde molestiae, modi porro totam, dolorum deleniti amet ducimus dolore optio voluptatibus! Est iste quibusdam cupiditate perspiciatis alias cum voluptate nobis facere suscipit quidem? Eum cum, sapiente ullam maiores quam laudantium saepe quaerat a quasi aut recusandae quia quae nisi deserunt minima officiis non ex quibusdam facere perferendis accusantium, distinctio iure. Facilis autem in quas maxime rerum.</p>
                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam dolorem consequatur, voluptatum, ut suscipit quam necessitatibus error nostrum est accusamus, aut recusandae deleniti nulla officia adipisci alias delectus ducimus veniam excepturi? Molestiae tempora quos sequi necessitatibus nemo qui aperiam officiis voluptate amet quibusdam. Obcaecati quis excepturi modi maxime, quam possimus magni nobis eaque accusamus laudantium quas ad cumque sint quod earum repellendus similique quisquam voluptatibus autem, adipisci vero laborum optio aut tempore. Exercitationem doloribus harum libero eius praesentium quo, necessitatibus voluptas eum ut nisi, quas voluptatibus commodi architecto? Nemo amet pariatur asperiores consequuntur quam! Mollitia minus sint quos, corrupti expedita ad officiis. Quia expedita deleniti velit, nulla non rem voluptatem iure nostrum voluptas ducimus eligendi impedit rerum minus odio. Itaque libero veniam ullam tempore est nobis laudantium aliquid, nemo numquam, excepturi repellendus, dolore animi eligendi! Eveniet, perferendis repudiandae explicabo atque nisi magnam ab, optio quas doloremque ratione qui, deleniti vero?</p>

            </div>
        </div>
    </div>
</section>
<?php
     endif;
     endforeach;
     ?>