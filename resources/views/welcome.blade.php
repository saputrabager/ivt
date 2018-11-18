<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inviton - Wedding Invitation Online</title>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/default.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        {{-- script --}}
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://rawgit.com/bassjobsen/affix/master/assets/js/affix.js"></script>
    </head>
    <body>
        <div class="mb-0 d-flex align-items-center flex-column justify-content-center min-100 carousel slide carousel-fade" data-ride="carousel" data-interval="3000" id="header">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/wedding1.jpg') }}"  height="800" alt="Los Angeles" style="
                        display:block;
                        width:100%; object-fit: cover;
                      ">
                    <div class="carousel-caption" style="top:200px">
                        <h1 class="display-3">Hey, there.</h1>
                        <p>Lets make some magic here</p>
                        <p class="lead">
                            <a class="btn btn-outline-secondary btn-lg" href="#" role="button">Learn more</a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/wedding2.jpg') }}"  height="800" alt="Los Angeles" style="
                        display:block;
                        width:100%; object-fit: cover;
                      ">
                    <div class="carousel-caption" style="top:200px">
                        <h1 class="display-3">Hey, there.</h1>
                        <p>Lets make some magic here</p>
                        <p class="lead">
                            <a class="btn btn-outline-secondary btn-lg" href="#" role="button">Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-light navbar-expand-lg grad-nav" id="nav">
            <div class="container">
                <a class="navbar-brand" href="#">Inviton</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#about" class="nav-link active">About</a></li>
                        <li class="nav-item"><a href="#feature" class="nav-link">Our Feature</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link">Contact Us</a></li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#modal1" data-toggle="modal" class="nav-link">Modal</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container h-10" id="content">
            <div class="row h-100 mt-5">
                {{-- <aside class="col-md-2">
                    <div class="mt-5 mb-3" id="sidemenu">
                        <ul class="nav flex-md-column flex-row justify-content-between">
                            <li class="nav-item"><a href="#sec1" class="nav-link active pl-0">One</a></li>
                            <li class="nav-item"><a href="#sec2" class="nav-link pl-0">Two</a></li>
                            <li class="nav-item">
                                <a href="#sec3" class="nav-link pl-0">Three</a>
                                <ul class="nav flex-md-column ml-2 hidden-sm-down">
                                    <li class="nav-item"><a href="#sec3a" class="nav-link">Section A</a></li>
                                    <li class="nav-item"><a href="#sec3b" class="nav-link">Section B</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="#sec4" class="nav-link pl-0">Four</a></li>
                            <li class="nav-item"><a href="#sec5" class="nav-link pl-0">Five</a></li>
                            <li class="nav-item"><a href="#sec6" class="nav-link pl-0">Six</a></li>
                        </ul>
                    </div> --}}
                </aside>
                <main class="col py-5">
                    <div class="row">
                        <div class="col">
                            <div id="about">
                                <h3 class="display-4">About</h3>
                                buat undangan mu jadi lebih menarik dengan semua fiture yang kami sediakan
                            </div>
                            <div id="feature"></div>
                            <div id="contact"></div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="card bg-faded border-0 mb-3">
                                <div class="card-body">
                                    <h3 class="card-title">Card</h3>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-outline-secondary">Outline</a>
                                </div>
                            </div>
                            <div class="card bg-faded border-0 mb-3">
                                <div class="card-body">
                                    <h3 class="card-title">Ad</h3>
                                    <p class="card-text">Display supporters and advertisements here.</p>
                                    <a href="#" class="btn btn-outline-secondary">C-T-A</a>
                                </div>
                            </div>
                            <div class="card bg-faded border-0 mb-3">
                                <div class="card-body">
                                    <h3 class="card-title">Card</h3>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-outline-secondary">Outline</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <footer class="bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 pl-0">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Team</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 pl-0">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a href="#" class="nav-link">More</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Support</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Legal</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 ml-auto text-right">
                        <small class="text-uppercase">Connect on social media</small>
                        <ul class="nav justify-content-end">
                            <li class="nav-item"><a href="#" class="nav-link pr-0"><i class="fa fa-pinterest fa-lg"></i></a></li>
                            <li class="nav-item"><a href="#" class="nav-link pr-0"><i class="fa fa-twitter fa-lg"></i></a></li>
                            <li class="nav-item"><a href="#" class="nav-link pr-0"><i class="fa fa-instagram fa-lg"></i></a></li>
                            <li class="nav-item"><a href="#" class="nav-link pr-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                            <li class="nav-item"><a href="#" class="nav-link pr-0"><i class="fa fa-skype fa-lg"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-12 text-right small">
                        @2017 Company Name
                    </div>
                </div>
            </div>
        </footer>
        
        <div id="modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 id="myModalLabel">Hello.</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
        
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Text</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="Mike McDonald" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-2 col-form-label">Search</label>
                            <div class="col-10">
                                <input class="form-control" type="search" value="How to responsive design" id="example-search-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-2 col-form-label">Email</label>
                            <div class="col-10">
                                <input class="form-control" type="email" value="email@example.com" id="example-email-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-url-input" class="col-2 col-form-label">URL</label>
                            <div class="col-10">
                                <input class="form-control" type="url" value="http://codeply.com" id="example-url-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="col-2 col-form-label">Phone</label>
                            <div class="col-10">
                                <input class="form-control" type="tel" value="1-(202)-555-5555" id="example-tel-input">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                        <button class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function (){
                var hh = $('#header').outerHeight();
                var fh = $('footer').outerHeight();

                // using https://rawgit.com/bassjobsen/affix/master/assets/js/affix.js
                $('.navbar').affix({
                    offset:{
                        top: hh,
                        bottom: fh - 200
                    }
                });

                $('#sidemenu').affix({
                    offset:{
                        top: hh,
                        bottom: fh + 30
                    }
                });

                //Variables on page load
                var $myCarousel = $("#header"),
                    $firstAnimatingElems = $myCarousel
                    .find(".carousel-item:first");

                //Initialize carousel
                $myCarousel.carousel();

                if ($('#nav').hasClass('affix')){
                    $('#nav').addClass('trans');
                }
            })
        </script>
    </body>
</html>