<style>

@import url('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
@import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);
*,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  background: #f5f5f5;
  padding: 0;
  margin: 0;
  font-family: 'Lato', sans-serif;
}

i.fa {
  font-size: 16px
}

p {
  font-size: 16px;
  line-height: 1.428571429;
}

.header {
    position: fixed;
    z-index: 10;
    top: 0;
    left: 0;
    background: #5bbfc1;
    width: 100%;
    height: 50px;
    line-height: 50px;
    color: #fff;
}

.header #menu-action:hover {
    background: rgba(0, 0, 0, 0.25);
}

.header #menu-action {
    display: block;
    float: left;
    width: 60px;
    height: 50px;
    line-height: 50px;
    margin-right: 15px;
    color: #fff;
    text-decoration: none;
    text-align: center;
    background: rgba(0, 0, 0, 0.15);
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 1px;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.header #menu-action:hover {
    background: rgba(0, 0, 0, 0.25);
}
.header #menu-action i {
    display: inline-block;
    margin: 15px;
}

i.fa {
    font-size: 16px;
}
.header #menu-action.active {
    width: 250px;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.header #menu-action span {
    width: 0px;
    display: none;
    overflow: hidden;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.header #menu-action.active span {
    display: inline;
    width: auto;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.header .logo {
    text-transform: uppercase;
    letter-spacing: 1px;
}

.sidebar {
    position: fixed;
    z-index: 10;
    left: 0;
    top: 50px;
    height: 100%;
    width: 60px;
    background: #fff;
    border-right: 1px solid #ddd;
    text-align: center;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.sidebar ul li {
    display: block;
}

.sidebar ul li a {
    display: block;
    position: relative;
    white-space: nowrap;
    overflow: hidden;
    border-bottom: 1px solid #ddd;
    color: #444;
    text-align: left;
}

.sidebar ul li a i {
    display: inline-block;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    -webkit-animation-duration: 0.7s;
    -moz-animation-duration: 0.7s;
    -o-animation-duration: 0.7s;
    animation-duration: 0.7s;
    -webkit-animation-fill-mode: both;
    -moz-animation-fill-mode: both;
    -o-animation-fill-mode: both;
    animation-fill-mode: both;
}

.sidebar ul li a:hover {
    background-color: #eee;
}


.sidebar:hover, .sidebar.active, .sidebar.hovered {
    width: 250px;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}

.sidebar ul li a:hover i {
    -webkit-animation-name: swing;
    -moz-animation-name: swing;
    -o-animation-name: swing;
    animation-name: swing;
}

.swing {
  -webkit-transform-origin: top center;
  -ms-transform-origin: top center;
  transform-origin: top center;
  -webkit-animation-name: swing;
  animation-name: swing;
}


@-webkit-keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
    transform: rotate3d(0, 0, 1, 15deg);
  }
  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
    transform: rotate3d(0, 0, 1, -10deg);
  }
  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
    transform: rotate3d(0, 0, 1, 5deg);
  }
  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
    transform: rotate3d(0, 0, 1, -5deg);
  }
  100% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
    transform: rotate3d(0, 0, 1, 0deg);
  }
  ;
}

@keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
    -ms-transform: rotate3d(0, 0, 1, 15deg);
    transform: rotate3d(0, 0, 1, 15deg);
  }
  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
    -ms-transform: rotate3d(0, 0, 1, -10deg);
    transform: rotate3d(0, 0, 1, -10deg);
  }
  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
    -ms-transform: rotate3d(0, 0, 1, 5deg);
    transform: rotate3d(0, 0, 1, 5deg);
  }
  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
    -ms-transform: rotate3d(0, 0, 1, -5deg);
    transform: rotate3d(0, 0, 1, -5deg);
  }
  100% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
    -ms-transform: rotate3d(0, 0, 1, 0deg);
    transform: rotate3d(0, 0, 1, 0deg);
  }
  ;
}

.fa-navicon:before, .fa-reorder:before, .fa-bars:before {
    content: "\f0c9";
}

.fa-remove:before, .fa-close:before, .fa-times:before {
    content: "\f00d";
}

.fa-desktop:before {
    content: "\f108";
}

.fa-cloud-upload:before {
    content: "\f0ee";
}

.fa-calendar:before {
    content: "\f073";
}

.fa-envelope-o:before {
    content: "\f003";
}
.fa-table:before {
    content: "\f0ce";
}
.sidebar ul li a span {
    display: inline-block;
    height: 60px;
    line-height: 60px;
}

.main {
    position: relative;
    display: block;
    top: 50px;
    left: 0;
    padding: 15px;
    padding-left: 75px;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}

.main .jumbotron {
    background-color: #fff;
    padding: 30px !important;
    border: 1px solid #dfe8f1;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

.jumbotron {
    padding: 30px 15px;
    margin-bottom: 30px;
    color: inherit;
    background-color: #eee;
}

.main .jumbotron h1 {
    font-size: 24px;
    margin: 0;
    padding: 0;
    margin-bottom: 12px;
    color: #3b8f85;
}

.jumbotron p {
    margin-bottom: 15px;
    font-size: 21px;
    font-weight: 200;
}

.table-bordered {
    border: 1px solid #ddd;
}

.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
}

.row {
    margin-right: -15px;
    margin-left: -15px;
}



</style>


<html>
    <head>
        <title>Product Page</title>
    </head>
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <script>
$('#menu-action').click(function() {
  $('.sidebar').toggleClass('active');
  $('.main').toggleClass('active');
  $(this).toggleClass('active');

  if ($('.sidebar').hasClass('active')) {
    $(this).find('i').addClass('fa-close');
    $(this).find('i').removeClass('fa-bars');
  } else {
    $(this).find('i').addClass('fa-bars');
    $(this).find('i').removeClass('fa-close');
  }
});

// Add hover feedback on menu
$('#menu-action').hover(function() {
    $('.sidebar').toggleClass('hovered');
});
</script>


    <body>
    <div class="header">
    <a href="#" id="menu-action">
        <i class="fa fa-bars"></i>
        <span>Close</span>
    </a>
    <div class="logo">
        Cerys Gibbins - Ecom
    </div>
</div>
<div class="sidebar">
    <ul>
        <li><a href="#"><i class="fa fa-desktop"></i><span>Desktop</span></a></li>
        <li><a href="#"><i class="fa fa-cloud-upload"></i><span>Upload</span></a></li>
        <li><a href="#"><i class="fa fa-calendar"></i><span>Calendar</span></a></li>
        <li><a href="#"><i class="fa fa-envelope-o"></i><span>Messages</span></a></li>
        <li><a href="#"><i class="fa fa-table"></i><span>Data</span></a></li>
</div>

<!-- Content -->
<div class="main">
    <div class="hipsum">
        <div class="jumbotron">
            <h1 id="hello,-world!">Hello, world!<a class="anchorjs-link" href="#hello,-world!"><span class="anchorjs-icon"></span></a></h1>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
            culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
    </div>
</div>    
    </body>
</html>
