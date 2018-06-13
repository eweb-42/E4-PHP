<div id="ajax-add">
    <div class="container">
        <div class="row">
            <?php
            $products;
            if($this->searched != null)
            {
                $products = $this->products;
            }
            else
            {
                $products = Products::getProductsByCategoryId($this->category_id);
            }
//            var_dump($products);
            for($i=0;$i<count($products);$i++)
            {
                $product = $products[$i];
                ?>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img style="height: 260px;" src="<?php Util::link('img/produits/'.$product['product_image']); ?>" alt="" class="img-responsive">
                        <div class="caption">
                            <h4 class="pull-right"><?php echo ' '.$product['price']; ?>€</h4>
                            <h4><a href="#"><?php echo $product['product_name']; ?></a></h4>
                            <p><?php echo $product['description'] ?></p>
                        </div>
                        <div class="space-ten"></div>
                        <div class="btn-ground text-center">
                            <a href="<?php Util::link('cart/add/'.$product['product_id']); ?>"><button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Ajouter au panier</button></a>
                            <a href="<?php Util::link('product/view/'.$product['product_id']); ?>"><button type="button" class="btn btn-primary" ><i class="fa fa-search"></i> Voir les détails</button></a>
                        </div>
                        <div class="space-ten"></div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>