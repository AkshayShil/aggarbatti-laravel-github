@extends("basetemplate")

@section("title")
Vikant Industries - Aggarbatti, Dhoop manufacturers
@endsection

@section("navbar")
	@include("components.navbar")
@endsection

@section("body")
<div class="carousel">
	<div class="carousel-container owl-carousel owl-theme">
		<div class="item">
			<div class="product-image">
				<img src="{{ asset('images/amsterdam1.jpg') }}" alt="First Slide">
			</div>
		</div>
		<div class="item">
			<div class="product-image">
				<img src="{{ asset('images/amsterdam2.jpg') }}" alt="Second Slide">
			</div>
		</div>
		<div class="item">
			<div class="product-image">
				<img src="{{ asset('images/amsterdam3.jpg') }}" alt="Third Slide">
			</div>
		</div>
	</div>	
</div>

<div class="product-featured">
	<h4><span style="border-left:3px solid red">&nbsp;</span>Featured&nbsp;<span>Products</span></h4>
	<div class="product-list">
		<div class="product-item">
			<div class="card product-detail" data-id="12">
                <img src="{{ asset('images/mahalaxmi_dhoop.jpg') }}" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Dhoop Cup</h5>
                    <h5 class="card-subtitle">INCENSE</h5>
                    <div class="cart-options">
                        <div class="price">
                            <p class="product-price">	
                                &#8377; 150
                            </p>
                        </div>
                        <div class="button">
                            <a href="#" ><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<div class="product-item">
			<div class="card product-detail">
                <img src="{{ asset('images/mahalaxmi_dhoop.jpg') }}" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Dhoop Cup</h5>
                    <h5 class="card-subtitle">INCENSE</h5>
                    <div class="cart-options">
                        <div class="price">
                            <p class="product-price">	
                                &#8377; 150
                            </p>
                        </div>
                        <div class="button">
                            <a href="#" ><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<div class="product-item ">
			<div class="card product-detail">
                <img src="{{ asset('images/mahalaxmi_dhoop.jpg') }}" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Dhoop Cup</h5>
                    <h5 class="card-subtitle">INCENSE</h5>
                    <div class="cart-options">
                        <div class="price">
                            <p class="product-price">	
                                &#8377; 150
                            </p>
                        </div>
                        <div class="button">
                            <a href="#" ><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<div class="product-item">
			<div class="card product-detail">
                <img src="{{ asset('images/mahalaxmi_dhoop.jpg') }}" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Dhoop Cup</h5>
                    <h5 class="card-subtitle">INCENSE</h5>
                    <div class="cart-options">
                        <div class="price">
                            <p class="product-price">	
                                &#8377; 150
                            </p>
                        </div>
                        <div class="button">
                            <a href="#" ><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	 <div class="more-product-page">
        <div class="button">
            <a href="#" class=" mx-auto">Click here to check more products</a>
        </div>
    </div>
</div>

<div class="about-us">
    <div class="heading-about-us text-center">
       <h4> <span style="border-left: 2px solid green;">&nbsp;</span> ABOUT<span style="color: green;">&nbsp;&nbsp;US</span></h4>
       <div class="message">
           <p>
               About Message.
           </p>
       </div>
       <div class="about-us-button">
           <div class="button">
               <a href="#" >Learn More</a>
           </div>
       </div>
    </div>
</div>

<div class="get-in-touch-banner text-center">
    <h1>Get in Touch with us!</h1>
    <div class="button-white ">
        <a href="#" class="shadow-sm">Contact us</a>
    </div>
</div>

<div class="footer">
    <div class="container-footer">
        <div class="footer-item">
            <h2>About</h2>
            <div class="links">
                <a href="#">Contact Us</a>
                <a href="#">About Us</a>
                <a href="#">info@vikat.com</a>
            </div>
        </div>
        <div class="footer-item">
            <h2>Policy</h2>
            <div class="links">
                <a href="#">Privacy Policy</a>
                <a href="#">Security</a>
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
        <div class="footer-item">
            <h2>Office</h2>
            <div class="links">
                <p>Address fa-rotate-180</p>
                <p>Address 2</p>
                <p>Address 3</p>
            </div>
        </div>
        <div class="footer-item">
            <h2>FOLLOW US</h2>
            <div class="social-media-links">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-snapchat"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection("body")

@section("js")
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

<script>
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3500,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
</script>

@endsection

@section("css")
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display&display=swap');
</style>
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ mix('css/home.css') }}">
@endsection