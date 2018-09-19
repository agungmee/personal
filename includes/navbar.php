<!-- Code for NavBar -->

<div id="wrapper" class="animate">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <!-- <span class="navbar-toggler-icon leftmenutrigger"></span> -->
      <a class="navbar-brand" href="#">MEE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav animate side-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Article
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul> -->
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="#">Blog
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
    </div>
</nav>


<style>
        body{background:#f9f9f9;}
        #wrapper{padding:90px 15px;}
        .navbar-expand-lg .navbar-nav.side-nav{flex-direction: column;}
        .card{margin-bottom: 15px; border-radius:0; box-shadow: 0 3px 5px rgba(0,0,0,.1); }
        .header-top{box-shadow: 0 3px 5px rgba(0,0,0,.1)}
        .leftmenutrigger{display: none}
    @media(min-width:992px) {
        .leftmenutrigger{display: block;display: block;margin: 7px 20px 4px 0;cursor: pointer;}
        #wrapper{padding: 90px 15px 15px 15px; }
        .navbar-nav.side-nav.open {left:0;}
        .navbar-nav.side-nav{background: #585f66;box-shadow: 2px 1px 2px rgba(0,0,0,.1);position:fixed;top:56px;flex-direction: column!important;left:-220px;width:200px;overflow-y:auto;bottom:0;overflow-x:hidden;padding-bottom:40px}
        }
        .animate{-webkit-transition:all .3s ease-in-out;-moz-transition:all .3s ease-in-out;-o-transition:all .3s ease-in-out;-ms-transition:all .3s ease-in-out;transition:all .3s ease-in-out}
</style>
<script>
$( document ).ready(function() {
     $('.leftmenutrigger').on('click', function(e) {
     $('.side-nav').toggleClass("open");
     e.preventDefault();
    });
});
</script>