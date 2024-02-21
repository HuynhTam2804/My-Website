import React from 'react'
import Header from '../components/layout/header'
import ProductCart from '../components/productCart/productCart'
import Footer from '../components/layout/footer'

export default function Cart() {
    return (
        <div className="Cart">
            <Header />
            <ProductCart />
            <Footer />
        </div>
    )
}
