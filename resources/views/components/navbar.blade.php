@section("navbar")
<div class="container custom-navbar">
    <div class="logo">
        <img class="logo-img" src="{{ asset('images/vikant_logo.jpg') }}" alt="" srcset="">
    </div>
    <div class="links">
        <a href="#" id="current-page">HOME</a>
        <a href="#">PRODUCTS</a>
        <a href="#">ABOUT US</a>
        <a href="#">CONTACT US</a>
    </div>
    <div class="icons-list">
        <div class="query">
            <!-- <i class="fas fa-search search-button"></i> -->
            <img src="{{ asset('images/magnifying-glass.svg') }}" class="my-auto" alt="Search Button" srcset="">
        </div>
        <div class="vertical-separator">&nbsp;</div>
        <div class="buttons">
            <a href="#" ><i class="fas fa-user"></i>&nbsp;&nbsp;Login</a>
            <a href="#"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Cart</a>
        </div>
    </div>
    <div class="options">
        <div class="option">
            <i class="fas fa-bars option-button"></i>
        </div>
        <div class="dropdown-links" id="dropdown-nav-menu" style="display:none">
            <a href="#" id="current-page">HOME</a>
            <a href="#">PRODUCTS</a>
            <a href="#">ABOUT US</a>
            <a href="#">CART</a>
            <a href="#">CONTACT US</a>
        </div>
    </div>
</div>
<script>
    var dropdownIcon = document.querySelector("body > div.container.custom-navbar > div.options > div.option > i");
    //start not displaying dropdown
    dropdownIcon.addEventListener("click",showDropdownMenu);
    function showDropdownMenu(){
        var menu = document.querySelector("#dropdown-nav-menu");
        if(menu.offsetParent == null){
            menu.style.display="block";
        }
        else{
            menu.style.display="none";
        }
    }
</script>
@endsection