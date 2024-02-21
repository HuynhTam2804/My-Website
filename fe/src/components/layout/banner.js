import React from 'react';
import { Link } from 'react-router-dom';

const BannerItem = ({ image, title, info, link }) => (
    <div className="col-md-6 col-xl-4 p-b-30 m-lr-auto">
        <div className="block1 wrap-pic-w">
            <img src={image} alt="IMG-BANNER" />
            <Link
                to={link}
                className="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3"
            >
                <div className="block1-txt-child1 flex-col-l">
                    <span className="block1-name ltext-102 trans-04 p-b-8">{title}</span>
                    <span className="block1-info stext-102 trans-04">{info}</span>
                </div>
                <div className="block1-txt-child2 p-b-4 trans-05">
                    <div className="block1-link stext-101 cl0 trans-09">Shop Now</div>
                </div>
            </Link>
        </div>
    </div>
);

const BannerSection = () => {
    const banners = [
        {
            image: 'images/banner-01.jpg',
            title: 'Women',
            info: 'Spring 2018',
            link: '/product',
        },
        {
            image: 'images/banner-02.jpg',
            title: 'Men',
            info: 'Spring 2018',
            link: '/product',
        },
        {
            image: 'images/banner-03.jpg',
            title: 'Accessories',
            info: 'New Trend',
            link: '/product',
        },
    ];

    return (
        <div className="sec-banner bg0 p-t-80 p-b-50">
            <div className="container">
                <div className="row">
                    {banners.map((banner) => (
                        <BannerItem key={banner.image} {...banner} />
                    ))}
                </div>
            </div>
        </div>
    );
};

export default BannerSection;

