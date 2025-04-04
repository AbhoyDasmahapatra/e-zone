<?php
include('header_link.php');
include('menubar.php');
include('db_connection.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>amazon | Product Page</title>
    <link href="style.css" rel="stylesheet"/>
      <style>
        body {
    font-family: sans-serif;
}

header {
    height: 15vh;
    width: 100%;
    background: lightgray;
    margin-bottom: 50px;
}

#product-info {
    display: flex;
    width: 95%;
    margin: 0 auto
}

.item-image-parent {
    order: 1;
    width: 50%;
    display: flex;
}

.item-info-parent {
    order: 2;
    width: 50%;
}

.item-list-vertical {
    order: 1;
    width: 10%;
    overflow-y: auto;
    margin-top: 50px;
}

.item-image-main {
    order: 2;
    width: 90%;
    height: 100%;
}

/* sectioning completed */


.thumb-box {
    width: 75%;
    margin: 10px auto;
    background: white;
    border: 1px solid gray;
}
.thumb-box img {
    width: 100%;
    height: 100%;
}

.item-image-main img {
    width: 100%;
    height: auto;
}

.thumb-box:hover {
    cursor: pointer;
    border-color: #e77600;;
    box-shadow: 0px 1px 5px 1px #e77600;
}

/* Item Info */
.main-info h4{
    font-size: 21px;
    margin-bottom: 0;
    font-weight: 400
}

.star-rating {
    width: 70%;
    color: gray;
    font-size: 24px;
    border-bottom: 0.4px solid rgba(194, 194, 194, 0.829);
}

.star-rating span {
    color: gold;
}

.main-info p {
    font-size: 15px;
    color: gray;
    margin-bottom: 30px;
}

#price {
    color: rgb(168, 14, 14);
    font-size: 21px;
}

/* Select Items */

.change-color {
    margin-bottom: 10px;
}

.change-color .thumb-box{
    margin: 10px 10px 10px 0;
    width: 40px;
    display: inline-block;
}

.change-size select {
    padding: 5px 10px;
    border-radius: 4px;
    border-color: rgb(189, 189, 189);
    margin-top: 10px;
}

.description ul {
    padding-left: 17px;
    font-size: 15px;
    line-height: 1.3rem;
}
      </style>


</head>
<body>
    <header>
        <!-- replace this header with yours....... -->
    </header>

    <section id="product-info">

        <div class="item-image-parent">
            <div class="item-list-vertical">
                <div class="thumb-box">
                    <img src="https://i.ibb.co/VJf6fXm/thumb1.jpg" alt="thumbnail" />
                </div>
                <div class="thumb-box">
                    <img src="https://i.ibb.co/Jt5zc58/thumb2.jpg" alt="thumbnail" />
                </div>
                <div class="thumb-box">
                    <img src="https://i.ibb.co/Yf9LMpy/thumb3.jpg" alt="thumbnail" />
                </div>
                <div class="thumb-box">
                    <img src="https://i.ibb.co/60hPGy2/thumb4.jpg" alt="thumbnail" />
                </div>

            </div>
            <div class="item-image-main">
                <img src="https://i.ibb.co/xYpFY0T/item1.jpg" alt="default" />
            </div>
        </div>

        <div class="item-info-parent">
            <!-- main info -->
            <div class="main-info">
                <h4>EYEBOGLER Regular Fit Men's Cotton T-Shirt</h4>
                <div class="star-rating">
                    <span>★★★★</span>★            
                </div>
                <p>Price: <span id="price">₹ 449.00</span></p>
            </div>
            <!-- Choose -->
            <div class="select-items">
                
                <div class="change-color">
                    <label><b>Colour:</b> Black</label><br>
                    <div class="thumb-box">
                        <img src="https://i.ibb.co/QjkJJk3/select1.jpg" alt="thumbnail" />
                    </div>
                    <div class="thumb-box">
                        <img src="https://i.ibb.co/C297yD0/select2.jpg" alt="thumbnail" />
                    </div>
                </div>
                
                <div class="change-size">
                    <label><b>Size:</b></label><br>
                    <select>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                        <option>2XL</option>
                    </select>
                </div>

                <div class="description">
                    <ul>
                        <li>Care Instructions: Machine Wash</li>
                        <li>Fit Type: Classic Fit</li>
                        <li>Color name: Black-White</li>
                        <li>Material: Cotton</li>
                        <li>Pattern: Solid</li>
                    </ul>
                </div>
            </div>
            <!-- Description -->
        </div>
    </section>
</body>
</html>

<?php
include('footer_link.php');
include('footer.php');
?>
