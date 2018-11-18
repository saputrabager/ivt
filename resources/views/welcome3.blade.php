<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inviton</title>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/default.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}

        {{-- script --}}
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}
        {{-- <script src="https://rawgit.com/bassjobsen/affix/master/assets/js/affix.js"></script> --}}
    </head>
    <body>
        <div class="carousel slide carousel-fade" data-ride="carousel" id="header">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ asset('img/pexels-photo-296115.jpeg') }}"  height="800" alt="Los Angeles" style="
                        display:block;
                        width:100%; object-fit: cover;
                      ">
                    <div class="carousel-caption" style="top:200px">
                        <h1 class="display-3">Hey, there.</h1>
                        <p>Some perfectly centered content goes here</p>
                        <p class="lead">
                            <a class="btn btn-outline-secondary btn-lg" href="#" role="button">Learn more</a>
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('img/office-tools-2018-PAGE-2017.jpg') }}"  height="800" alt="Los Angeles" style="
                        display:block;
                        width:100%; object-fit: cover;
                      ">
                    <div class="carousel-caption" style="top:200px">
                        <h1 class="display-3">Hey, there.</h1>
                        <p>Some perfectly centered content goes here</p>
                        <p class="lead">
                            <a class="btn btn-outline-secondary btn-lg" href="#" role="button">Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-light navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">Inviton</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="nav-link active">About</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#modal1" data-toggle="modal" class="nav-link">Modal</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container h-10" id="content">
        </div>
    </body>
    </html>