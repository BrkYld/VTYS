@extends('_layouts._layout')

@section('content')

<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSemWdy-WsjGF_FdBo0032Aw4KACpw6G0t4RENGPvRavAj7W9Q/viewform?embedded=true" width="640" height="1045" frameborder="0" marginheight="0" marginwidth="0">Yükleniyor...</iframe>
  <!-- start banner Area -->
  <section class="generic-banner relative">
  				<div class="container">
  					<div class="row height align-items-center justify-content-center" style="height:150px;"></div>
  				</div>
  </section>
  <!-- End banner Area -->

  <!-- Start home-video Area -->
  <section class="home-video-area">
    <div class="container-fluid">
      <div class="whole-wrap">
  				<div class="container">
            <div class="section-top-border">
						<div class="row" style="padding:20px;background-color:#1D305B;border-radius: 30px;border:3px dashed white;">
              <div class="col-lg-4 col-md-4 mt-sm-30" >
                <img src="img/logo.png" alt="" title="" />
              </div>

							<div class="col-lg-8 col-md-8">
                  <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                      <h3 class="mb-30 text-center" style="color:white;">Etkinliğe Katıl</h3>
    								  <form action="#">
    									<div class="mt-10">
    										<input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="" class="single-input">
    									</div>
    									<div class="mt-10">
    										<input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="" class="single-input">
    									</div>
    									<div class="mt-10">
    										<input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="" class="single-input">
    									</div>
    									<div class="mt-10">
    										<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" class="single-input">
    									</div>
    									<div class="input-group-icon mt-10">
    										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
    										<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required="" class="single-input">
    									</div>
    									<div class="input-group-icon mt-10">
    										<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
    										<div class="form-select" id="default-select" "="">
    											<select style="display: none;">
    												<option value="1">City</option>
    												<option value="1">Dhaka</option>
    												<option value="1">Dilli</option>
    												<option value="1">Newyork</option>
    												<option value="1">Islamabad</option>
    											</select><div class="nice-select" tabindex="0"><span class="current">City</span><ul class="list"><li data-value="1" class="option selected">City</li><li data-value="1" class="option">Dhaka</li><li data-value="1" class="option">Dilli</li><li data-value="1" class="option">Newyork</li><li data-value="1" class="option">Islamabad</li></ul></div>
    										</div>
    									</div>
    									<div class="input-group-icon mt-10">
    										<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
    										<div class="form-select" id="default-select" "="">
    											<select style="display: none;">
    												<option value="1">Country</option>
    												<option value="1">Bangladesh</option>
    												<option value="1">India</option>
    												<option value="1">England</option>
    												<option value="1">Srilanka</option>
    											</select><div class="nice-select" tabindex="0"><span class="current">Country</span><ul class="list"><li data-value="1" class="option selected">Country</li><li data-value="1" class="option">Bangladesh</li><li data-value="1" class="option">India</li><li data-value="1" class="option">England</li><li data-value="1" class="option">Srilanka</li></ul></div>
    										</div>
    									</div>

    									<div class="mt-10">
    										<textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required=""></textarea>
    									</div>
    									<!-- For Gradient Border Use -->
    									<!-- <div class="mt-10">
    										<div class="primary-input">
    											<input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
    											<label for="primary-input"></label>
    										</div>
    									</div> -->
    									<div class="mt-10">
    										<input type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required="" class="single-input-primary">
    									</div>
    									<div class="mt-10">
    										<input type="text" name="first_name" placeholder="Accent color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required="" class="single-input-accent">
    									</div>
    									<div class="mt-10">
    										<input type="text" name="first_name" placeholder="Secondary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'" required="" class="single-input-secondary">
    									</div>
    								</form>
                    </div>
                  </div>
							</div>



						</div>
						</div>
					</div>
  				</div>
  			</div>
    </div>
  </section>
  <!-- End home-aboutus Area -->




@endsection
