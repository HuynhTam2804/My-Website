export const ProductCartComponent = () => {
    return (
        <>
            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item col-12">
                    <div class="product__item__pic set-bg" data-setbg="" >
                        <img style={{ objectFit: "cover", height: "100%" }} src="/image_product/pic1.jpg" />
                        <div class="label sale">Sale</div>
                        <ul class="product__hover">
                            <li><a href="img/product/product-1.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Buttons tweed blazer</a></h6>
                        <div class="rating">
                            <i class="fa fa-star mx-1"></i>
                            <i class="fa fa-star mx-1"></i>
                            <i class="fa fa-star mx-1"></i>
                            <i class="fa fa-star mx-1"></i>
                            <i class="fa fa-star mx-1"></i>
                        </div>
                        <div class="product__price">$ 59.0</div>
                    </div>
                </div>

            </div>
        </>
    )
}