<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Trgovina Mješovitom Robom</title>

   
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>

  </head>

  <body>

 
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  


    <header class="">


    <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="background-color: transparent!important">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Početna <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('proizvodi')}}">Proizvodi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('onama')}}">O nama</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://drive.google.com/file/d/1N4rXNCs9hdcgZoEjFqYhH0H2fBcPUzTr/view?usp=sharing">Vizija</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://fpmoz.sum.ba/index.php?lang=hr#">FPMOZ</a>
            </li>
            <li class="nav-item" style="right: 0px!important;position: absolute!important;">
                @if (Route::has('login'))

                    @auth
                    

                    <li class="nav-item">
                    <a class="nav-link" href="{{url('prikazikosaricu')}}"><i class="fab fa-opencart"></i> Košarica</a>
                    </li>
                        <x-app-layout> 

                        </x-app-layout>
                    @else
                    <li><a href="{{ route('login') }}" class="nav-link"><i class="fas fa-user"></i> Prijava</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="nav-link"><i class="fas fa-registered"></i> Registracija</a></li>
                        @endif
                    @endauth
                   
                @endif
            </li>
            </ul>
        </div>
    </nav>  
</header>
<br><br><br><br><br>
<div class="container">
    <div class="row">
    <div class="col-md-4">
            <div class="product-item">
            <center><a href="https://ibb.co/tBsk7f2"><img src="https://i.ibb.co/NxjQ8hN/Emerik.jpg" style="height: 400px; width: 310px" class="img-fluid center-block" alt="Emerik"></a></center>
              <div class="down-content">
                <p>Emerik Jurić rođen 14.09.1997. u Osijeku. Završio sam srednju Strojarsku tehničku školu u Osijeku. U slobodno vrijeme družim se s prijateljima i radim kao freelancer u području izrade videa i 3D animacija.</p> 
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="product-item">
            <center><a href="https://ibb.co/SR5M3s6"><img src="https://i.ibb.co/V2JzqjL/Evelina.jpg" style="height: 400px; width: 270px" class="img-fluid center-block" alt="Evelina"></a></center>
              <div class="down-content">
                <p>Evelina Kopić, rođena 24.03.2000  u Orašju
                    Završena srednja ekonomska škola, financijsko-računovodstveni smjer
                    U slobodno vrijeme čitam knjige, kuham i družim se sa prijateljima.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
            <center><a href="https://ibb.co/sR2d9Lg"><img src="https://i.ibb.co/9gNkHRp/Ivan.png" style="height: 400px; width: 200px" class="img-fluid center-block" alt="Ivan"></a></center>
              <div class="down-content">
                <p>Ivan Dominković rođen 10.02.2000. u Vinkovcima. Osnovnu školu sam završio  u Tolisi, a srednju školu sam išao u Orašju te završio 4 godine opće gimnazije. Slobodno vrijeme provodim najčešće s prijateljima, s kojim uživam u raznim sportskim aktivnostima,društvenim igrama ili igrajući igre na konzoli.</p>
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="product-item">
            <center><a href="https://ibb.co/hdt0CY0"><img src="https://i.ibb.co/WzYCsVC/Josipa.jpg" class="img-fluid center-block" alt="Josipa" style="height: 400px; width: 260px"></a></center>
              <div class="down-content">
                <p>Josipa Dekančić Jurilj rođena 28.02.2001. u Slavonskom Brodu. Srednju školu sam završila u Županji, Opća Gimnazija Županja. Najviše svoje slobodno vrijeme provodim u prirodi, čitam knjige, kuham, vozim bicikl, rolam se i družim se sa prijateljima.</p>
              </div>
            </div>
          </div>
</div>
    <center><h3>Projekt "Trgovina mješvitom robom" osmišljen je kao jednostavan webshop za korisnike različitih dobnih skupina. Smisao ove web aplikacije je brza i jednostavna kupovina i dostava na kućnu adresu.</h3></center>
    <center><a href="https://ibb.co/7WzQHq8"><img src="https://i.ibb.co/mqB0m31/dijagram.png" alt="dijagram" class="img-fluid"></a></center>
</div>



  
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; 
      function clearField(t){                  
      if(! cleared[t.id]){                     
          cleared[t.id] = 1;  
          t.value='';         
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>