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

  <body style="background-color:grey">


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
<div style="padding:100px" align="center">
 <table style="background-color: black">
     <tr>
         <td style="padding: 20px; font-size:20px; color:white">Naziv proizvoda</td>
         <td style="padding: 20px; font-size:20px; color:white">Količina</td>
         <td style="padding: 20px; font-size:20px; color:white">Cijena</td>
         <td style="padding: 20px; font-size:20px; color:white">Uredi</td>
     </tr>

     <form action="{{url('narudzba')}}" method="POST">

    @csrf
@foreach($kosarica as $kosarice)
     <tr>
         <td style="padding: 20px; font-size:20px; color:white">
         <input type="text" name="nazivproizvoda[]" value="{{$kosarice->naziv_proizvoda}}" hidden="">{{$kosarice->naziv_proizvoda}}</td>
         <td style="padding: 20px; font-size:20px; color:white">
         <input type="text" name="kolicina[]" value="{{$kosarice->kolicina}}" hidden="">{{$kosarice->kolicina}}</td>
         <td style="padding: 20px; font-size:20px; color:white">
         <input type="text" name="cijena[]" value="{{$kosarice->cijena}}" hidden="">{{$kosarice->cijena}}</td>
         <td style="padding: 20px; font-size:20px; color:white">
         <a class="btn btn-danger" href="{{url('obrisi',$kosarice->id)}}">Obriši</a>
        </td>
     </tr>
     @endforeach
 </table><br>
 <button class="btn btn-success">Potvrdi narudžbu</button>
 </form>
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
