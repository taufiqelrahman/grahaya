@extends('layouts.master', ['title'	 => 'About'])

@section('content')
<div class="row">
	<div id="about-banner" class="col-xs-12 text-center">
		<h3>Tentang kami</h3>
	</div>
	<div id="about-content" class="">
		<div id="about-intro" class="about col-xs-12">
			<p class="text-center">Sesuai kemampuan yang Allah berikan, kami memulai mencari bentuk amalan apa yg kiranya dapat kami
				laksanakan, dan akhirnya kami menemukan bentuk amalan yang dapat dianalogikan dengan "memerdekakan budak". yaitu:</p>
		</div>
		<div id="about-point" class="about col-xs-12">
			<div class="row">
				<div id="point-1" class="point col-xs-12 col-sm-6">
					<span class="pull-left">1</span>
					<p class="text-center">Ketika masa anak-anak dipelihara, disekolahkan, diperkaya dengan ilmu kehidupan dan
						motivasi hidup pada suasana yang senyaman mungkin.</p>
				</div>
				<div id="point-2" class="point col-xs-12 col-sm-6">
					<span class="pull-left">2</span>
					<p class="text-center">Ketika dewasa diupayakan untuk dapat hidup mandiri (bekerja atau usaha), untuk yang
						mengalami kesulitan/keterbatasan diusahakan lapangan kerja.</p>
				</div>
			</div>
		</div>
		<div id="about-photo" class="about col-xs-12">
			<p class="text-center">Sebagai langkah awal mulai tahun 2011 kami menyiapkan lokasi dan lahan, alhamdulillah pada tanggal
			1 juni 2013 kami memulai pembangunan Panti asuhan "GRAHAYA" yang terdiri dari:</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 photo">
			<img src="{{ asset('/images/about/1.jpg') }}" alt="Grahaya Panti Asuhan" class="img-responsive">
			<div class="photo-desc">
			    <p class="text-center">Kamar anak asuh (rencana 20 kamar, 20 kamar mandi, 20 tempat cuci yang masing masing kamar
			    	dapat menampung maksimal 8 anak asuh)</p>
		    </div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 photo">
			<!-- <img src="http://dummyimage.com/650X350/aaa/fff&text=photo2" alt="" class="img-responsive"> -->
			<img src="{{ asset('/images/about/2.jpg') }}" alt="Grahaya Panti Asuhan" class="img-responsive">
			<div class="photo-desc">
			    <p class="text-center">Rumah ustad penanggung jawab operasional harian panti, terdiri dua kamar tidur, kamar mandi,
			    	ruang tamu dan kantor. (luas total 6x8 meter)</p>
		    </div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 photo">
			<img src="{{ asset('/images/about/3.jpg') }}" alt="Grahaya Panti Asuhan" class="img-responsive">
			<div class="photo-desc">
			    <p class="text-center">Dapur Umum dengan tempat cuci, tempat masak dan penyimpanan peralatan. (luas total 6x7
			    	meter)</p>
		    </div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 photo">
			<img src="{{ asset('/images/about/4.png') }}" alt="Grahaya Panti Asuhan" class="img-responsive">
			<div class="photo-desc">
			    <p class="text-center">Pendopo sebagai sarana sosialisasi anak asuh. (luas 11x13 meter)</p>
		    </div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 photo">
			<img src="{{ asset('/images/about/5.jpg') }}" alt="Grahaya Panti Asuhan" class="img-responsive">
			<div class="photo-desc">
			    <p class="text-center">Masjid sebagai sarana ibadah bersama dengan masyarakat lingkungan (17x24 Mt lantai 1 dan 7 x
			    	11 lantai 2)</p>
		    </div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 photo">
			<img src="{{ asset('/images/about/6.png') }}" alt="Grahaya Panti Asuhan" class="img-responsive">
			<div class="photo-desc">
			    <p class="text-center">Fasilitas lain yang mendukung tumbuh kembang anak asuh dan lingkungan disekitar panti.</p>
		    </div>
		</div>
		<div id="about-outro" class="about col-xs-12">
			<p class="text-center">Grahaya Centre terdiri dari:</p>
		</div>
		<div id="outro-point" class="about col-xs-12">
			<div class="row">
				<div id="point-1-outro" class="point col-xs-12 col-sm-4">
					<span class="pull-left">1</span>
					<p class="text-center">Masjid Baiturrahman al Banjari.</p>
				</div>
				<div id="point-2-outro" class="point col-xs-12 col-sm-4">
					<span class="pull-left">2</span>
					<p class="text-center">Panti asuhan Adar'a (Darrul aitam).</p>
				</div>
				<div id="point-3-outro" class="point col-xs-12 col-sm-4">
					<span class="pull-left">3</span>
					<p class="text-center">Usaha inkubasi "WM" (wibawa mulya).</p>
				</div>
			</div>
		</div>
	</div>
</div>
@stop