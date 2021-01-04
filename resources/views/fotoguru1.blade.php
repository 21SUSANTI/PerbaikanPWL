@extends('layouts.manage')

@section('title', 'Foto Guru 2020')

@section('container')
<!-- Page Content -->
<div class="container">

<!-- Title -->
<body style="background-color:#8FBC8F">
<br><br>

    <h1 class="mt-4">SD NEGERI KAUMAN 1 MALANG</h1>

    <!-- Author -->
    <p class="lead">
      <a href="https://www.google.com/maps/dir/-7.6688224,114.01312/sdn+kauman+1+malang/@-7.7910233,112.76296,9z/am=t/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2dd6281868b63825:0x5e21430c0a38f895!2m2!1d112.629395!2d-7.983541">
      Jl. Kauman No.1, Kauman, Kec. Klojen, Kota Malang, Jawa Timur 65119</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <h2><marquee>WELCOME TO SD NEGERI KAUMAN 1 MALANG</marquee></h2>
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
</nav>

<h2><center>FOTO GURU SD NEGERI KAUMAN 1 MALANG</center></h2>
<li href="/fotoguru1"></li>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>  
                            <th scope="col">Foto</th>                 
                        </tr>  
                    </thead>
                    @foreach( $fotoguru as $fg)
                        <tr> 
                            <td>{{ $fg->id }}</td>                         
                            <td>{{ $fg->nama}}</td>
                            <td><img width="150px" src="{{ asset('storage/'.$fg->fotourl) }}"></td>
                        </tr>
                        @endforeach
                </table>
                </body>
            </div>
        </div>
    </div> 
 
