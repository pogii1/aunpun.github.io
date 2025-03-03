<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product {
            width: calc(25% - 20px);
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            text-align: center;
            padding: 10px;
        }
        .product img {
            width: 100%;
            height: auto;
        }
        .title {
            font-size: 16px;
            margin: 10px 0;
        }
        .price {
            font-size: 14px;
            color: #b12704;
            margin: 5px 0;
        }
        .rating {
            margin: 5px 0;
            color: #777;
        }
        @media(max-width: 768px) {
            .product {
                width: calc(50% - 20px);
            }
        }
        @media(max-width: 480px) {
            .product {
                width: calc(100% - 20px);
            }
        }
    </style>
</head>
<body>
    <div class="product">
        <img src="https://via.placeholder.com/150" alt="Product 1">
        <div class="title">Love story</div>
        <div class="price">₱108.00</div>
        <div class="rating">★★★★☆(7)</div>
    </div>
    <div class="product">
        <img src="https://via.placeholder.com/150" alt="Product 2">
        <div class="title">BUY 1 TAKE 2</div>
        <div class="price">₱79.00</div>
        <div class="rating">★★★★☆(1718)</div>
    </div>
    <div class="product">
        <img src="https://via.placeholder.com/150" alt="Product 3">
        <div class="title">YH-6605 4 Layer...</div>
        <div class="price">₱99.00</div>
        <div class="rating">★★★★☆(1135)</div>
    </div>
    <div class="product">
        <img src="https://via.placeholder.com/150" alt="Product 4">
        <div class="title">Hi-tech Turbo Fan</div>
        <div class="price">₱58.00</div>
        <div class="rating">★★★★☆(170)</div>
    </div>
    <div class="product">
        <img src="https://via.placeholder.com/150" alt="Product 5">
        <div class="title">Sweet Night Vanilla...</div>
        <div class="price">₱421.14</div>
        <div class="rating">★★★★☆(13020)</div>
    </div>
    <div class="product">
        <img src="https://via.placeholder.com/150" alt="Product 6">
        <div class="title">high waist slit hem...</div>
        <div class="price">₱55.00</div>
        <div class="rating">★★★★☆(26)</div>
    </div>
    <div class="product">
        <img src="https://via.placeholder.com/150" alt="Product 7">
        <div class="title">Mumu 1088 Cute...</div>
        <div class="price">₱69.00</div>
        <div class="rating">★★★★☆(3490)</div>
    </div>
    <div class="product">
        <img src="https://via.placeholder.com/150" alt="Product 8">
        <div class="title">Realme Note 60...</div>
        <div class="price">₱30.00</div>
        <div class="rating">★★★★☆(657)</div>
    </div>