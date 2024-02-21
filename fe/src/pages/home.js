import React from 'react'
import Header from '../components/layout/header'
import Footer from '../components/layout/footer'
import SlideSection from '../components/layout/slider'
import BannerSection from '../components/layout/banner'
import ProductHome from '../components/productHome/productHome'

export default function Home() {
    return (
        <div className="Home">
            <Header />
            <SlideSection />
            <BannerSection />
            <ProductHome />
            <Footer />
        </div>
    )
}
