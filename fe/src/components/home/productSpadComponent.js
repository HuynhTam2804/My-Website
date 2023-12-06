import { ProductCartComponent } from "./productCartComponent";

export const ProductSpadComponent = () => {
    return (
        <>
            <section class="product spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="section-title">
                                <h4>product</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row property__gallery" id="MixItUpB95417">
                        <ProductCartComponent />
                        <ProductCartComponent />
                        <ProductCartComponent />
                        <ProductCartComponent />
                        <ProductCartComponent />
                    </div>
                </div>
            </section>
        </>
    );
}
