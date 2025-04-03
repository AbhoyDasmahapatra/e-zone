<?php
include('header_link.php');
include('menubar.php');
include('db_connection.php');
if(isset($_SESSION['id']))
{
$id=$_SESSION['id'];
}
?>

<!-- home content -->
<section class="home">
    <div class="content">
        <h1> <span>Electronic Products</span>
            <br>
            Up To <span id="span2">40%</span> Off
        </h1>
        <p> Electronic product up to 40% off. &
            <br> cash on delivery.
        </p>
        <div class="btn"><button>Shop Now</button></div>

    </div>
    <div class="img">
        <img src="assets/images/index2.png" alt="" style="background-color: transparent;">
    </div>
</section>
<!-- home content -->


<!-- product cards -->

<!-- Menu Section Start -->
<section class="menu" style="margin-top: 70px;" id="product">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="menu_filter d-flex flex-wrap">
                    <button class=" active" data-filter="*">ALL PRODUCT</button>

                </div>
            </div>
        </div>
        <div class="row grid">

           <?php

           $sql = "SELECT * FROM products";
            $query=mysqli_query($conn,$sql);
             
            if(mysqli_num_rows($query)>0){
            foreach($query as $val){
           ?>

            
            <div class="col-md-3 abc">
                <div class="menu_item">
                    <div class="menu_item_img">
                        <img src="upload/<?php echo $val['pimg'];?>" alt="menu" class="img-fluid w-100">
                    </div>
                    <div class="menu_item_text">
                
                        <P><?php echo $val['pname'];?></P>
                        <p class="rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            <i class="far fa-star" aria-hidden="true"></i>
                            <span>24</span>
                        </p>
                        <h5 class="price"> <?php echo $val['pdprs'];?><del><?php echo $val['ppis'];?></del></h5><br>
                        <a class="add_to_cart" href="cart_action.php?u_id=<?php echo $id;?>&p_id=<?php echo $val['p_id']; ?>">add
                            to cart</a>
                        
                    </div>
                </div>
            </div>
            <?php 
            }
        }
            ?>
 
        </div>
    </div>
</section>








<!-- offer -->
<div class="container" id="offer">
    <div class="row">
        <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-cart-shopping"></i>
            <h3>Free Shipping</h3>
            <p>On order over ₹100000</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-rotate-left"></i>
            <h3>Free Returns</h3>
            <p>Within 30 days</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-truck"></i>
            <h3>Fast Delivery</h3>
            <p>World Wide</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
            <i class="fa-solid fa-thumbs-up"></i>
            <h3>Big choice</h3>
            <p>Of products</p>
        </div>
    </div>
</div>
<!-- offer -->
<!--carousel-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
            aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
            aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/carousel1.webp" class="d-block w-100" alt="..." st>
            <div class="carousel-caption d-none d-md-block">
                <h5> </h5>
                <p> </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/carousel2.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5> </h5>
                <p> </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/carousel3.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5> </h5>
                <p> </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/carasol.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5> </h5>
                <p> </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/carasol11.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5> </h5>
                <p> </p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!--carousel End-->

<!--  new Start -->
<!--clint-->
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div class>
                <!-- <h5 class="text-primary"
                    style="font-weight: 800; font-size: 25px;">Testimonial</h5> -->
                <h1 id="Explore" style="text-align: center;">Our User Say!!!</h1>
            </div>
        </div>
    </div>
</div>
<!--clint end-->

<!-- Review Section Start -->

<div class="container mt-2">
    <div class="owl-carousel owl-theme">
        <!-- <div class="container">
            <div class="row"> -->

        <!-- <div class="col-md-3"> -->
        <div class="item">
            <div class="testimonial_item">
                <div class="testimonial_img">
                    <img src=" assets/images/pass1.jpeg">
                </div>

                <p class="review">Excelent
                    Morning
                    buffet and Service. Very Friendly
                    service
                    from
                    Ms.Alona Congrats.I can only recomended
                    The
                    Meydan
                    Hotel and the Farriers.
                </p>

                <!-- <i class="fas fa-quote-right"></i> -->

                <span class="clint">Client Name</span>

            </div>

        </div>
        <!-- </div> -->

        <!-- <div class="col-md-3"> -->
        <div class="item">
            <div class="testimonial_item">
                <div class="testimonial_img">
                    <img src="assets/images/pass2.webp">
                </div>
                <p class="review">Excelent
                    Morning
                    buffet and Service. Very Friendly
                    service
                    from
                    Ms.Alona Congrats.I can only recomended
                    The
                    Meydan
                    Hotel and the Farriers.</p>
                <span class="clint">Client Name</span>

            </div>

        </div>
        <!-- </div> -->

        <!-- <div class="col-md-3"> -->
        <div class="item">
            <div class="testimonial_item">
                <div class="testimonial_img">
                    <img src="assets/images/pass3.jpeg">
                </div>
                <p class="review">Excelent
                    Morning
                    buffet and Service. Very Friendly
                    service
                    from
                    Ms.Alona Congrats.I can only recomended
                    The
                    Meydan
                    Hotel and the Farriers.</p>
                <span class="clint">Client Name</span>

            </div>

        </div>
        <!-- </div> -->

        <!-- <div class="col-md-3"> -->
        <div class="item">
            <div class="testimonial_item">
                <div class="testimonial_img">
                    <img src="assets/images/pass4.jpg">
                </div>
                <p class="review ">Excelent
                    Morning
                    buffet and Service. Very Friendly
                    service
                    from
                    Ms.Alona Congrats.I can only recomended
                    The
                    Meydan
                    Hotel and the Farriers.</p>
                <span class="clint">Client Name</span>

            </div>

        </div>
        <!-- </div> -->

        <!-- <div class="col-md-3"> -->
        <div class="item">
            <div class="testimonial_item">
                <div class="testimonial_img">
                    <img src="assets/images/pass1.jpeg">
                </div>
                <p class="review">Excelent
                    Morning
                    buffet and Service. Very Friendly
                    service
                    from
                    Ms.Alona Congrats.I can only recomended
                    The
                    Meydan
                    Hotel and the Farriers.</p>
                <span class="clint">Client Name</span>

            </div>

        </div>
        <!-- </div> -->

        <!-- <div class="col-md-3"> -->
        <div class="item">
            <div class="testimonial_item">
                <div class="testimonial_img">
                    <img src="assets/images/pass2.webp">
                </div>
                <p class="review">Excelent
                    Morning
                    buffet and Service. Very Friendly
                    service
                    from
                    Ms.Alona Congrats.I can only recomended
                    The
                    Meydan
                    Hotel and the Farriers.</p>
                <span class="clint">Client Name</span>

            </div>

        </div>
        <!-- </div> -->

        <!-- <div class="col-md-3"> -->
        <div class="item">
            <div class="testimonial_item">
                <div class="testimonial_img">
                    <img src="assets/images/pass3.jpeg">
                </div>
                <p class="review">Excelent
                    Morning
                    buffet and Service. Very Friendly
                    service
                    from
                    Ms.Alona Congrats.I can only recomended
                    The
                    Meydan
                    Hotel and the Farriers.</p>
                <span class="clint">Client Name</span>

            </div>

        </div>
        <!-- </div> -->

        <!-- <div class="col-md-3"> -->
        <div class="item">
            <div class="testimonial_item">
                <div class="testimonial_img">
                    <img src="assets/images/pass4.jpg">
                </div>
                <p class="review">Excelent
                    Morning
                    buffet and Service. Very Friendly
                    service
                    from
                    Ms.Alona Congrats.I can only recomended
                    The
                    Meydan
                    Hotel and the Farriers.</p>
                <span class="clint">Client Name</span>

            </div>
        </div>
        <!-- </div> -->

        <!-- <div class="col-md-3"> -->
        <div class="item">
            <div class="testimonial_item">
                <div class="testimonial_img">
                    <img src="assets/images/pass1.jpeg">
                </div>
                <p class="review">Excelent
                    Morning
                    buffet and Service. Very Friendly
                    service
                    from
                    Ms.Alona Congrats.I can only recomended
                    The
                    Meydan
                    Hotel and the Farriers.</p>
                <span class="clint">Client Name</span>

            </div>
        </div>
        <!-- </div> -->

        <!-- <div class="col-md-3"> -->
        <div class="item">
            <div class="testimonial_item">
                <div class="testimonial_img">
                    <img src="images/pass2.webp">
                </div>
                <p class="review">Excelent
                    Morning
                    buffet and Service. Very Friendly
                    service
                    from
                    Ms.Alona Congrats.I can only recomended
                    The
                    Meydan
                    Hotel and the Farriers.</p>
                <span class="clint">Client Name</span>

            </div>
        </div>
        <!-- </div> -->

        <!-- <div class="col-md-3"> -->
        <div class="item">
            <div class="testimonial_item">
                <div class="testimonial_img">
                    <img src="images/pass3.jpeg">
                </div>
                <p class="review">Excelent
                    Morning
                    buffet and Service. Very Friendly
                    service
                    from
                    Ms.Alona Congrats.I can only recomended
                    The
                    Meydan
                    Hotel and the Farriers.</p>
                <span class="clint">Client Name</span>

            </div>
        </div>
        <!-- </div> -->

        <!-- <div class="col-md-3"> -->
        <div class="item">
            <div class="testimonial_item">
                <div class="testimonial_img">
                    <img src="images/pass4.jpg">
                </div>
                <p class="review ">Excelent
                    Morning
                    buffet and Service. Very Friendly
                    service
                    from
                    Ms.Alona Congrats.I can only recomended
                    The
                    Meydan
                    Hotel and the
                    Farriers.</p>
                <span class="clint">Client Name</span>

            </div>

        </div>
        <!-- </div> -->

        <!-- </div> -->
        <!-- </div> -->

    </div>
</div>

<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 15,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 3
            },
            1000: {
                items: 3
            }

        }
    })
</script>

<!-- Review Section End -->








<!--   Start -->

<a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>

<?php
include('footer_link.php');
include('footer.php');
?>