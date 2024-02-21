import React from 'react';
import SlickSlider from 'react-slick';

const Slide = ({ image, title1, title2, link }) => (
    <div className="item-slick1" style={{ backgroundImage: `url(${image})` }}>
        <div className="container h-full">
            <div className="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                <div className="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                    <span className="ltext-101 cl2 respon2">{title1}</span>
                </div>
                <div className="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                    <h2 className="ltext-201 cl2 p-t-19 p-b-43 respon1">{title2}</h2>
                </div>
                <div className="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                    <a href={link} className="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
);

const SlideSection = () => {
    const slides = [
        {
            image: 'images/slide-01.jpg',
            title1: 'Women Collection 2018',
            title2: 'NEW SEASON',
            link: '/product',
        },
        {
            image: 'images/slide-02.jpg',
            title1: 'Men New-Season',
            title2: 'Jackets & Coats',
            link: '/product',
        },
        {
            image: 'images/slide-03.jpg',
            title1: 'Men Collection 2018',
            title2: 'New arrivals',
            link: '/product',
        },
    ];

    const settings = {
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    };

    return (
        <section className="section-slide">
            <SlickSlider {...settings}>
                {slides.map((slide) => (
                    <Slide key={slide.image} {...slide} />
                ))}
            </SlickSlider>
        </section>
    );
};

export default SlideSection;
