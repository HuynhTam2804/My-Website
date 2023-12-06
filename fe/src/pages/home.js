import Header from "../components/layout/header";
import Footer from "../components/layout/footer";
import { ProductSpadComponent } from "../components/home/productSpadComponent";

function Home() {
    return (
        <>
            <div className="home">
                <Header />
                <ProductSpadComponent/>
                <Footer />
            </div>
        </>
    );
}

export default Home;