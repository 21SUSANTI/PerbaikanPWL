<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>raport</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <body style="background-color:#DEB887">
    <div class="container">
      <a class="navbar-brand" href="#">WEBSITE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Title -->
        <h2 class="mt-4">SD NEGERI KAUMAN 1 MALANG</h2>

        <!-- Author -->
        <p class="lead">
          <a href="https://www.google.com/maps/dir/-7.6688224,114.01312/sdn+kauman+1+malang/@-7.7910233,112.76296,9z/am=t/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2dd6281868b63825:0x5e21430c0a38f895!2m2!1d112.629395!2d-7.983541">
          Jl. Kauman No.1, Kauman, Kec. Klojen, Kota Malang, Jawa Timur 65119</a>
        </p>

        <hr>
        <!-- Date/Time -->

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Wali Kelas</th>
                        </tr>  
                    </thead>
                    @foreach( $rapot as $r)
                        <tr> 
                            <td>{{ $r->id }}</td>                         
                            <td>{{ $r->nama}}</td>
                            <td>{{ $r->alamat }}</td>
                            <td>{{ $r->kelas }}</td>
                            <td>{{ $r->semester }}</td>
                            <td>{{ $r->nilai }}</td>
                            <td>{{ $r->walikelas }}</td>
                        </tr>
                        @endforeach
                </table>
                </body>
            </div>
        </div>
    </div> 
 
    
    </body>
    </html>