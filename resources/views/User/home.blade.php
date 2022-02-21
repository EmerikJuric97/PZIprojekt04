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
                    <a class="nav-link" href="{{url('prikazikosaricu')}}"><i class="fab fa-opencart"></i> Košarica[{{$count}}]</a>
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

    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Dobrodošli u</h4>
            <h2>Trgovinu Mješovite robe</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Pogledajte ponudu</h4>
            <h2>Svježih i domaćih namirnica</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Pogledajte ponudu</h4>
            <h2>Najnovije tehnologije</h2>
          </div>
        </div>
      </div>
    </div>


    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Najnoviji dodani proizvodi</h2>
              <a href="{{url('proizvodi')}}">Svi proizvodi <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          @foreach($data as $proizvod)
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img height="300" class="img-fluid" src="/productimage/{{$proizvod->slika}}" alt=""></a>
              <div class="down-content">
                <h4>{{ $proizvod->naziv }}</h4>
                <h6><br>{{ $proizvod->cijena }}kn</h6>
                <p>{{ $proizvod->opis }}</p>
                <form action="{{url('dodaj',$proizvod->id)}}" method="POST">
                @csrf
                <input type="number" value="1" min="1" class="form-control"  style="width:100px" name="kolicina">
                <br>

                  <input style="background-color: #2A93D5" class="btn btn-primary" type="submit" value="U košaricu">
              </form>
              </div>
            </div>
          </div>
        @endforeach
         


        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Zašto baš mi?</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Naša trgovina vam sa zadovoljstvom može ponuditi:</h4>
              <ul class="featured-list">
                <li><p>Najniže cijene</p></li>
                <li><p>Svježe namirnice</p></li>
                <li><p>Najnoviju tehnologiju</p></li>
                <li><p>Brzu dostavu</p></li>
                <li><p>Sigurnu i bezbrižnu kupovinu</p></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="https://www.contestwatchers.com/wp-content/uploads/2020/04/The-Best-Brand-Awards-2020-International-Design-Competition-620x380.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Tehonologije koje smo <em> koristili</em></h4>
                </div>
                <div class="col-md-4">
                  <a href="https://laravel.com/" class="btn btn-dark">LARAVEL</a>
                  <a href="https://www.javascript.com/" class="btn btn-primary">JAVASCRIPT</a>
                  <a href="https://www.w3.org/standards/webdesign/htmlcss" class="btn btn-dark">HTML i CSS</a>
                  <a href="https://www.php.net/" class="btn btn-primary">PHP</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">

            </div>
          </div>
        </div>
      </div>
    </footer>


  
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
