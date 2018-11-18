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
        <link rel="stylesheet" href="{{asset('css/front.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">


        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/animation.gsap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/2.0.5/velocity.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    </head>
    <body>
        <div id="container" class="main">
            <div class="content" >
                <div class="title m-b-md">
                    Inviton
                </div>
                <div class="content" style="font-weight:bold">
                    Make your Invitation more interesting then before
                </div>
            </div>
        </div>

        <div id="pinContainer">
            <div id="slideContainer">
                <section class="panel bg" style="background-image: url('/img/create.jpg')">
                    <div class="content" >
                        <div class="canvas">
                             Buat undangan mu lebih berkesan dan lebih menarik. 
                        </div>
                    </div>
                </section>
                <section class="panel bg" style="background-image: url('/img/office-tools-2018-PAGE-2017.jpg')">
                    <div class="content">
                        <div class="canvas">
                            Dengan ke cara baru yang lebih modern dan dengan biaya
                        yang relatif lebih murah. Anda tinggal buat sekali lalu sebarkan dan siapapun dapat menerimanya kapanpun dan dimana pun
                        tanpa harus membuang waktu untuk membagikannya.
                        </div>
                    </div>
                </section>
                <section class="panel bg" style="background-image: url('/img/template.png')">
                    <div class="content">
                        <div class="canvas">
                            Dengan template yang kami sediakan dan konten yang lebih beragam di banding undangan pada umumnya. 
                            akan lebih mudah disesuaikan dengan keperluan anda
                        </div>
                    </div>
                </section>
                <section class="panel bg" style="background-image: url('/img/anywhere.jpg')">
                    <div class="content">
                        <div class="canvas">
                            Proses pembuatan yang mudah dan dapat di lakukan kapan saja membuatnya semakin dapat di andalkan untuk segala keperluan anda.
                            Mulailah!
                        </div>
                    </div>
                </section>
            </div>
        </div>

        
        <div id="container" style="background-image: url('/img/night_sky.jpeg');background-size:cover; height:100%;">
            <div id="scene">
                <div class="content"  data-depth="0.2" data-pointer-events="true">
                    <div class="title" id="scroll-to">
                            <a href="{{ route('login') }}">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        
        
        
            {{-- <section class="demo"> --}}
                
                <script>
                    // build scene
                    
                </script>
            {{-- </section> --}}
            <div class="spacer s_viewport"></div>

        <script>

           $(function () { // wait for document ready
                // init
                var controller = new ScrollMagic.Controller();

                // define movement of panels
                var wipeAnimation = new TimelineMax()
                    // animate to second panel
                    .to("#slideContainer", 0.5, {z: -150})		// move back in 3D space
                    .to("#slideContainer", 1,   {x: "-25%"})	// move in to first panel
                    .to("#slideContainer", 0.5, {z: 0})				// move back to origin in 3D space
                    // animate to third panel
                    .to("#slideContainer", 0.5, {z: -150, delay: 1})
                    .to("#slideContainer", 1,   {x: "-50%"})
                    .to("#slideContainer", 0.5, {z: 0})
                    // animate to forth panel
                    .to("#slideContainer", 0.5, {z: -150, delay: 1})
                    .to("#slideContainer", 1,   {x: "-75%"})
                    .to("#slideContainer", 0.5, {z: 0});

                // create scene to pin and link animation
                new ScrollMagic.Scene({
                        triggerElement: "#pinContainer",
                        triggerHook: "onLeave",
                        duration: "500%"
                    })
                    .setPin("#pinContainer")
                    .setTween(wipeAnimation)
                    // .addIndicators() // add indicators (requires plugin)
                    .addTo(controller);

                $(window).scroll(function() {
                var hT = $('#scroll-to').offset().top,
                    hH = $('#scroll-to').outerHeight(),
                    wH = $(window).height(),
                    wS = $(this).scrollTop();
                    console.log((hT-wH) , wS);
                if (wS > (hT+hH-wH)){
                    $('#scroll-to').addClass('animated fadeInDown');
                }
                });

                var scene = document.getElementById('scene');
                var parallaxInstance = new Parallax(scene, {
                    pointerEvents: true
                });
            });
        </script>
    </body>
</html>
