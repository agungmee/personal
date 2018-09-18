<html>
<style>
.navbar {
    background: #444;
    -o-transition: all .6s;
    -moz-transition: all .6s;
    -webkit-transition: all .6s;

    -ms-transition: all .6s;
    transition: all .6s;
    backface-visibility: hidden;
}
 
.navbar.navbar-no-bg {
    background: #444;
    background: rgba(0, 0, 0, 0.2);
}
 
.navbar-dark .navbar-nav {
    font-size: 15px;
    color: #fff;
    text-transform: uppercase;
}
 
.navbar-dark .navbar-nav .nav-link {
    color: #fff;
    color: rgba(255, 255, 255, 0.8);
    border: 0;
}
 
.navbar-dark .navbar-nav .nav-link:hover {
    color: #fff;
}
 
.navbar-dark .navbar-nav .nav-link:focus {
    color: #fff;
    outline: 0;
}
 
.navbar-expand-md .navbar-nav .nav-link {
    padding-left: 1rem;
    padding-right: 1rem;
}
 
.navbar-brand {
    width: 105px;
    background: url(../img/logo.png) left center no-repeat;
    border: 0;
    text-indent: -99999px;
}
</style>

<!-- Top menu -->
<nav class="navbar navbar-dark fixed-top navbar-expand-md navbar-no-bg">
    <div class="container">
        <a class="navbar-brand" href="">Mee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link scroll-link" href="#top-content">Top</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-link" href="#section-1">Item 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-link" href="#section-2">Item 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-link" href="#section-3">Item 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-link" href="#section-4">Item 4</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script>

jQuery(document).ready(function() {
 
 // ...

 // toggle "navbar-no-bg" class
 $('.top-content .text').waypoint(function() {
     $('nav').toggleClass('navbar-no-bg');
 });

 // ...

});

function scroll_to(clicked_link, nav_height) {
    var element_class = clicked_link.attr('href').replace('#', '.');
    var scroll_to = 0;
    if(element_class != '.top-content') {
        element_class += '-container';
        scroll_to = $(element_class).offset().top - nav_height;
    }
    if($(window).scrollTop() != scroll_to) {
        $('html, body').stop().animate({scrollTop: scroll_to}, 1000);
    }
}
 
jQuery(document).ready(function() {
 
    /*
        Navigation
    */
    $('a.scroll-link').on('click', function(e) {
        e.preventDefault();
        scroll_to($(this), $('nav').outerHeight());
    });
 
    // ...
 
});

@media (min-width: 768px) and (max-width: 991px) {
 
 .navbar-expand-md .navbar-nav .nav-link { padding-left: 0.6rem; padding-right: 0.6rem; }

 /* ... */

}

@media (max-width: 767px) {

 .navbar.navbar-no-bg { background: #444; }
 .navbar-dark .navbar-toggler { border-color: #444; }
 .navbar-dark .navbar-toggler:focus { background: #333; outline: 0; }
 .navbar-expand-md .navbar-nav .nav-link { padding-top: 0.3rem; padding-bottom: 0.3rem; }

 /* ... */

}

</script>

</html>