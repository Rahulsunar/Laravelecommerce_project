<!-- info section -->

<section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="{{$data['setting']->facebook_link}}">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="{{$data['setting']->twitter_link}}">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="{{$data['setting']->instagram_link}}">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="{{$data['setting']->youtube_link}}">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              ABOUT US
            </h6>
            <p>
              {{$data['setting']->about_website}}
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_form ">
              <h5>
                
                Opening Hours
              </h5>
              <h5>
                {{$data['setting']->opening_hours}}
              </h5>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              Our Slogan
            </h6>
            <h5>
              {{$data['setting']->slogan}}
            </h5>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              CONTACT US
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>{{$data['setting']->address}}</span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>{{$data['setting']->mobile_no}}</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>{{$data['setting']->email}}</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; {{date('Y')}} All Rights Reserved By Rahul
          
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>