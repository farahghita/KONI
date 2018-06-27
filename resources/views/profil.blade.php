@extends('layouts.app')

@section('content')

<div class="column col-sm-12 ">
    <div class="profile clearfix">
        <div class="image">
            <img src="cover/cover.png" class="img">
        </div>
        <div class="user clearfix">
            <div class="avatar">
                <img src="cover/joko.jpg" class="img-thumbnail img-profile">
            </div>
            <h2>{{ Auth::user()->name }}</h2>
            <div class="actions">
                <div class="btn-group">
                    <button class="btn btn-default btn-sm tip btn-responsive" title="" data-original-title="Add to friends"><span class="glyphicon glyphicon-plus glyphicon glyphicon-white"></span> Tambah Teman</button>
                    <button class="btn btn-default btn-sm tip btn-responsive" title="" data-original-title="Send message"><span class="glyphicon glyphicon-envelope glyphicon glyphicon-white"></span> Kirim pesan</button>
                    <a href="{{ route('facebook') }}">
                      <button class="btn btn-default btn-sm tip btn-responsive" title="" data-original-title="Recommend"><span class="glyphicon glyphicon-edit"></span> Edit Profile</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="info">
            <p><span class="glyphicon glyphicon-globe"></span> <span class="title">Alamat:</span>  Sukaraja, Tegal, Jawa Tengah</p>
            <p><span class="glyphicon glyphicon-globe"></span> <span class="title">Pekerjaan:</span>  Petani Tembakau</p>
            <p><span class="glyphicon glyphicon-gift"></span> <span class="title">Tanggal Lahir:</span> 14.02.1989</p>
        </div>
    </div>

      <div class="panel panel-default">
										 <div class="panel-heading"> <img src="/cover/joko.jpg" class="img-circle"> <a href="#" class="pull-centre">Joko Susilo</a> <br/>
                        <h4>Penyakit Hawar Daun Kentang</h4> </div>

                      <div class="panel-body">
											<img src="/img/hawar-daun.jpg" class="img pull-centre">
											<div class="clearfix"></div>


Penyakit hawar daun kentang adalah penyakit yang disebabkan karena cendawan bernama Phytophthora infestans, dimana awal mulanya disebut sebagai Botrytis infestans Mont.

Adapun gejala awal suatu tumbuhan terserang penyakit ini adalah terdapat bercak yang dapat ditemukan dibagain tepi dan ujung pada daun, lama kelamaan bercak tersebut akan membesar dan menjadi berwarna kecoklatan.

Dalam bercak tersebut terdapat massa sporangium yang memiliki warna putih dan kehijauan. Awal mulanya memang menyerang bagian daun saja, akan tetapi lama kelamaan akan menyerang bagian batang bahkan hingga bagian umbi. Biasanya penyakit ini akan berkembang cepat pada suhu sekitar 18-20 derajat Celcius.

Pengendalian

Lakukanlah rotasi tanaman yang bertujuan untuk memotong cadangan makanan bagi virus tersebut.
Lakukan pemberoan lahan yang bertujuan untuk mengosongkan lahan agar penyakit tersebut tidak penyebar.
Lakukan pemotongan dan pembakaran pada bagian yang terinfeksi.
Lakukan pemangkasan pada daun yang terinfeksi dengan cara kimia.
											<hr>
											<ul class="list-unstyled"><li><a href="http://usebootstrap.com/theme/facebook">Komentar</a></li>
										  </div>
									  </div>

<div class="panel panel-default">
										 <div class="panel-heading"><a href="#" class="pull-centre">Penyakit</a> <h4>Cabai tiba - tiba layu</h4></div>
										  <div class="panel-body">
											<div class="clearfix"></div>
                          Jadi kemarin cabai yang saya tanam tiba2 layu semua gan, ada apa ya kira2?
											<hr>
											<ul class="list-unstyled"><li><a href="http://usebootstrap.com/theme/facebook">Komentar</a></li>
										  </div>
									  </div>

</div>



<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>
@endsection
