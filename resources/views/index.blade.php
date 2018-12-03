@extends('_layouts._layout')

@section('content')


<!-- start banner Area -->
<section class="banner-area relative" id="home">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row fullscreen d-flex align-items-center justify-content-center">
      <div class="banner-content col-lg-9 col-md-12">
        <h6>Siksok Etkinliğimize Davetlisiniz</h6>
        <h1 class="text-white">
          BÜYÜK SİKSOK ETKİNLİĞİ
        </h1>
        <h4><span class="lnr lnr-calendar-full"></span>  9 Şubat, 2018</h4>
        <h4><span class="lnr lnr-map"></span>  Kongre Merkezi, Sakarya Üniversitesi</h4>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->

<!-- Start home-video Area -->
<section class="home-video-area">
  <div class="container-fluid">
    <div class="whole-wrap">
				<div class="container">
					<div class="section-top-border text-right">
						<h3 class="mb-30" style="text-align:center;">Büyük Siksok Etkinliği Detayları</h3>
						<div class="row">
							<div class="col-md-9">
								<p class="text-left">Over time, even the most sophisticated, memory packed computer can begin to run slow if we don’t do something to prevent it. The reason why has less to do with how computers are made and how they age and more to do with the way we use them. You see, all of the daily tasks that we do on our PC from running programs to downloading and deleting software can make our computer sluggish. To keep this from happening, you need to understand the reasons why your PC is getting slower and do something to keep your PC running at its best. You can do this through regular maintenance and PC performance optimization programs</p>
								<p class="text-right">Before we discuss all of the things that could be affecting your PC’s performance, let’s talk a little about what symptoms</p>
							</div>
							<div class="col-md-3">
								<img src="img/elements/d.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
  </div>
</section>
<!-- End home-aboutus Area -->

<!-- Start spekers Area -->
<section class="spekers-area pb-100" id="speakers">
  <div class="container-fluid">
    <div class="row no-padding">
      <div class="active-speaker-carusel col-lg-12 no-padding">
        <div class="single-speaker item">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6 speaker-img no-padding">
                <img src="img/s1.jpg" alt="">
              </div>
              <div class="col-md-6 speaker-info no-padding">
                <h6 class="text-uppercase">Helvacıoğlu CEO</h6>
                <h1 class="text-white">Ahmet Çolakgil</h1>
                <p>
                  Sex ve aşk üzerine.
                </p>
                <p><span class="lnr lnr-location"></span>iamspeaker@gmail.com</p>
                <ul>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End spekers Area -->


<!-- Start schedule Area -->
<section class="schedule-area pb-100" id="schedule">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-70 col-lg-8">
        <div class="title text-center">
          <h1 class="mb-10">Etkinlik Programı</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="table-wrap col-lg-12">
        <table class="schdule-table table table-bordered">
            <thead class="thead-light">
              <tr>
                <th class="head" scope="col">#</th>
                <th class="head" scope="col">Konu</th>
                <th class="head" scope="col">Konuşmacı</th>
                <th class="head" scope="col">Mekan</th>
                <th class="head" scope="col">Zaman</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="name" scope="row">01</th>
                <td>Reception & Taling Seats</td>
                <td>Isabelle Cooper</td>
                <td>3rd Hall Room</td>
                <td>02.00</td>
              </tr>
              <tr>
                <th class="name" scope="row">02</th>
                <td>Breakfast and rest</td>
                <td>N/A</td>
                <td>4th Hall Room</td>
                <td>02.00</td>
              </tr>
              <tr>
                <th class="name" scope="row">03</th>
                <td>Reception & Taling Seats</td>
                <td>Jane Daniel</td>
                <td>2nd Hall Room</td>
                <td>02.00</td>
              </tr>
              <tr>
                <th class="name" scope="row">04</th>
                <td>Next generation speech</td>
                <td>Billy Barton</td>
                <td>1st Hall Room</td>
                <td>02.00</td>
              </tr>
              <tr>
                <th class="name" scope="row">05</th>
                <td>Sppech for young people</td>
                <td>Flora Gonzales</td>
                <td>4rd Hall Room</td>
                <td>02.00</td>
              </tr>
              <tr>
                <th class="name" scope="row">06</th>
                <td>Lunch Break</td>
                <td>N/A</td>
                <td>3rd Hall Room</td>
                <td>02.00</td>
              </tr>
              <tr>
                <th class="name" scope="row">07</th>
                <td>Sppech for Middle aged people</td>
                <td>Francisco Barrett</td>
                <td>1st Hall Room</td>
                <td>02.00</td>
              </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<!-- End schedule Area -->

<!-- Start price Area -->
<section class="price-area section-gap">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-70 col-lg-8">
        <div class="title text-center">
          <h1 class="mb-10">Sizleride aramızda görmek isteriz</h1>
          <p>Etkinlik hesabı oluşturarak etkinliklerimize katılabilir ve katılım belgesi alabilirsiniz</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-6 single-price">
        <div class="bottom-part">
          <h1>Etkinliğe Katıl</h1>
          <a class="price-btn text-uppercase col-lg-4" href="#">Daha önce etkinliğe katıldım</a>
          <a class="price-btn text-uppercase col-lg-4" href="#">Katılacağım ilk etkinlik</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End price Area -->

<!-- Start brand Area -->
<section class="brand-area section-gap">
  <div class="container">
    <div class="row logo-wrap">
      <a class="col single-img" href="#">
        <img class="d-block mx-auto" src="img/l1.png" alt="">
      </a>
      <a class="col single-img" href="#">
        <img class="d-block mx-auto" src="img/l2.png" alt="">
      </a>
      <a class="col single-img" href="#">
        <img class="d-block mx-auto" src="img/l3.png" alt="">
      </a>
      <a class="col single-img" href="#">
        <img class="d-block mx-auto" src="img/l4.png" alt="">
      </a>
      <a class="col single-img" href="#">
        <img class="d-block mx-auto" src="img/l5.png" alt="">
      </a>
    </div>
  </div>
</section>
<!-- End brand Area -->



@endsection
