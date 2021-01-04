@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
  <body style="background-color:#B0C4DE">
    
      <a class="navbar-brand" href="#">WEBSITE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item {{ Route::is('home1') ? 'active' : '' }}">
          @can('user-home1')
          <a class="nav-link" href="{{url('/home1') }}">Home</a>
          @endcan
          </li>
          <li class="nav-item {{ Route::is('ekstrakulikuler') ? 'active' : '' }}">
          @can('user-ekstrakulikuler')
          <a class="nav-link" href="{{url('/ekstrakulikuler') }}">Ekstrakulikuler</a>
          @endcan
          </li>
          <li class="nav-item {{ Route::is('prestasi') ? 'active' : '' }}">
          @can('user-prestasi')
          <a class="nav-link" href="{{url('/prestasi') }}">Prestasi</a>
          @endcan
          </li>
          <li class="nav-item {{ Route::is('kelas') ? 'active' : '' }}">
          @can('user-kelas')
          <a class="nav-link" href="{{url('/kelas') }}">Kelas</a>
          @endcan
          </li>
          <li class="nav-item {{ Route::is('tunjangan') ? 'active' : '' }}">
          @can('user-tunjangan')
          <a class="nav-link" href="{{url('/tunjangan') }}">Tunjangan</a>
          @endcan
          </li>
          <li class="nav-item {{ Route::is('fotoguru1') ? 'active' : '' }}">
          @can('user-fotoguru1')
          <a class="nav-link" href="{{url('/fotoguru1') }}">Foto Guru</a>
          @endcan
          </li>
          
         <li class="nav-item active">
            <a class="nav-link" href="/home1">Home
              <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ekstrakulikuler">Ekstrakulikuler</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/prestasi">Prestasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kelas">Kelas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tunjangan">Tunjangan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/fotoguru1">Foto Guru</a>
          </li>

          <li class="nav-item {{ Route::is('siswa') ? 'active' : '' }}">
          @can('manage-siswa')
          <a class="nav-link" href="{{url('/siswa') }}">Siswa</a>
          @endcan
          </li>
          <li class="nav-item {{ Route::is('guru') ? 'active' : '' }}">
          @can('manage-guru')
          <a class="nav-link" href="{{url('/guru') }}">Guru</a>
          @endcan
          </li>
          <li class="nav-item {{ Route::is('fotoguru') ? 'active' : '' }}">
          @can('manage-fotoguru')
          <a class="nav-link" href="{{url('/fotoguru') }}">Foto Guru</a>
          @endcan
          </li>
          <li class="nav-item {{ Route::is('rapot') ? 'active' : '' }}">
          @can('manage-rapot')
          <a class="nav-link" href="{{url('/rapot') }}">Raport</a>
          @endcan
          </li>     
          <!-- <li class="nav-item">
            <a class="nav-link" href="/siswa">Data Siswa</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="/guru">Data Guru</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="/fotoguru">Data Foto Guru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/rapot">Raport</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="/home">Dashboard</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
        
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
<!-- Page Content -->
<div class="container">

<div class="row">
<!-- Post Content Column -->
<div class="col-lg-8">

<!-- Title -->
<h1 class="mt-4">SD NEGERI KAUMAN 1 MALANG</h1>

<!-- Author -->
<p class="lead">
  <a href="https://www.google.com/maps/dir/-7.6688224,114.01312/sdn+kauman+1+malang/@-7.7910233,112.76296,9z/am=t/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2dd6281868b63825:0x5e21430c0a38f895!2m2!1d112.629395!2d-7.983541">
  Jl. Kauman No.1, Kauman, Kec. Klojen, Kota Malang, Jawa Timur 65119</a>
</p>

<hr>

<!-- Date/Time -->
<h2><marquee>WELCOME TO SD NEGERI KAUMAN 1 MALANG</marquee></h2>

<hr>

<!-- Preview Image -->
<img style="width:750px;height:350px;" src="{{ ('img//1PROFIL.jpg') }}"> 

<hr>

<!-- Post Content -->
<h5> Sambutan Kepala Sekolah SDN KAUMAN 1 MALANG</h5>
<p> Puji syukur kami panjatkan ke hadirat Tuhan Yang Maha Esa atas karunia dan hidayah-Nya,<br>
    sehingga kita semua dapat membaktikan segala hal yang kita miliki untuk kemajuan dunia pendidikan.<br>
    Apapun bentuk dan sumbangsih yang kita berikan, jika dilandasi niat yang tulus tanpa memandang <br>imbalan 
    apapun akan menghasilkan mahakarya yang agung untuk bekal kita dan generasi setelah kita.<br><br>
    Pendidikan adalah harga mati untuk menjadi pondasi bangsa dan negara dalam menghadapi <br>
    perkembangan zaman. Hal ini seiring dengan penguasaan teknologi untuk dimanfaatkan sebaik <br>
    mungkin, sehingga menciptakan iklim kondusif dalam ranah keilmuan. Dengan konsep yang <br>
    kontekstual dan efektif kami mengejewantahkan nilai-nilai pendidikan yang tertuang dalam visi misi <br>
    SDN Kauman 1 Malang, sebagai panduan hukum dalam menjabarkan tujuan hakiki pendidikan.<br><br>
    Secara pribadi saya mohon maaf, jika pemenuhan tuntutan dan kinerja yang saya lakukan masih ada <br> 
    kelemahan. Oleh karena itu, bantuan dan kerjasama dari berbagai pihak untuk optimalisasi mutu dan <br>
    kualitas pendidikan sangat saya harapkan. Mudah-mudahan dalam tiap langkah dan nafas kita menciptakan 
    nilai jual yang tinggi bagi keilmuan dan nilai hakiki di hadapan Tuhan Yang Maha Esa.<br><br>
    Demikian sambutan ini saya sampaikan, ditutup dengan pesan moral dan keilmuan bagi kita semua.<br><br>

    <p align="right">Kepala SDN Kauman 1 Malang <br><br></p>
    <p align="right"><img style="width:100px;height:50px;" src="{{ ('img//ttd.jpg') }}"></p><br>
    <p align="right">Dra. Susanti, M.Pd</p>
  </p>
  <!-- Comments Form -->
  <div class="card my-3" style="background-color:#6495ED">
          <h5 class="card-header">Tambahkan Komentar Membangun :</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
        <img style="width:50px;height:50px;" src="{{ ('img//koment1.jpeg') }}" alt="">
          <div class="media-body">
            <h5 class="mt-0">Siti Badriyah</h5>
            Website ini sangat membantu saya dalam mencari informasi mengenai sekolah untuk anak saya. Alhamdulillah sekolahnya bagus
            dan juga banyak alumni yang menjadi lulusan terbaik, salah satunya tetangga saya yang sekolah disini.
          </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img style="width:50px;height:50px;" src="{{ ('img//koment2.jpeg') }}" alt="">
          <div class="media-body">
            <h5 class="mt-0">Nazar Alex</h5>
            Semangat terus mengenai update untuk sekolah ini. saya suka memantaunya dan mencari informasi disini karena lengkap. semangat untuk admin dan bapak ibu pengajar.
            semoga para siswanya menjadi penerus dan kebanggaan bangsa indonesia.
            <div class="media mt-4">
            <img style="width:50px;height:50px;" src="{{ ('img//koment3.jpeg') }}" alt="">
              <div class="media-body">
                <h5 class="mt-0">Shiren Sungkar</h5>
                Aamiin.. alhamdulillah saya juga merasakan hal tersebut dan sangat di untungkan dengan adanya webiste ini, semangat terus ya.
              </div>
            </div>

            <div class="media mt-4">
            <img style="width:50px;height:50px;" src="{{ ('img//koment5.jpeg') }}" alt="">
              <div class="media-body">
                <h5 class="mt-0">Agnes Monica</h5>
                Bener banget bund, saya terbantu dan saya sedang mencari informasi mengenai sekolah untuk anak saya. dan alhamdulillah ketemu di website ini.
              </div>
            </div>
          </div>
        </div>
      <!-- Single Comment -->
      <div class="media mb-4">
        <img style="width:50px;height:50px;" src="{{ ('img//koment4.jpeg') }}" alt="">
          <div class="media-body">
            <h5 class="mt-0">Haikal Anam</h5>
            Berkat website ini anak saya jadi masuk sekolah favoritenya. alhamdulillah
          </div>
        </div>
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Categories Widget -->
        <div class="card my-4" style="background-color:#F0E68C">
          <h5 class="card-header">VISI</h5>
          <div class="card-body">
            <div class="row">
                <ul class="list-unstyled mb-0">
                  <P>
                  Terwujudnya Peserta Didik yang Cerdas, Unggul, dan Peduli terhadap Lingkungan
                  </P>
                </ul>
              </div>
            </div>

            <div class="card my-4" style="background-color:#FFB6C1">
          <h5 class="card-header">MISI</h5>
          <div class="card-body">
            <div class="row">
                <ul class="list-unstyled mb-0">
                  <P>
                  1. Meningkatkan keimanan dan ketaqwaan terhadap Tuhan Yang Maha Esa, serta berakhlak mulia (cerdas spiritual/olah hati)<br>
                  2. Meningkatkan kesadaran dan wawasan dalam kehidupan bermasyarakat, berbangsa, bernegara  ( cerdas sosial/olah rasa)<br>
                  3. Menanamkan kebiasaan berfikir dan berperilaku ilmiah yang kritis, kreatif dan mandiri (cerdas intelektual/olah pikir)<br>
                  4. Meningkatkan kemampuan mengekspresikan dan mengapresiasikan keindahan dan harmoni (cerdas emosional)<br>
                  </P>
                </ul>
              </div>
            </div>
          <!-- Side Widget -->
      <div class="card my-4" style="background-color:#90EE90">
          <h5 class="card-header">Fasilitas Sekolah</h5>
          <div class="card-body">
          <h5>Ruang Kelas</h5>
          <img style="width:300px;height:250px;" src="{{ ('img//kls.jpg') }}"><br><br>
          <h5>Perpustakaan</h5>
          <img style="width:300px;height:250px;" src="{{ ('img//perpustakaan.jpg') }}"><br><br>
          <h5>Halaman Sekolah</h5>
          <img style="width:300px;height:250px;" src="{{ ('img//halamansekolah.jpg') }}"><br><br>
          <h5>Kamar Mandi</h5>
          <img style="width:300px;height:250px;" src="{{ ('img//km.jpg') }}">
          </div>
        </div>

  <!-- Footer -->
  <footer class="py-4 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy;</p>
      <p class="m-0 text-center text-white">NOVELYA & SUSANTI</p>
      <p class="m-0 text-center text-white">MI-2E</p>
    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

