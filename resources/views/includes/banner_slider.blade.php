
@section('css')
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

  <section id="banner_section" style="margin-bottom: 40px">
    <div class="container">
          <div class="banner_slick_slider">
            @foreach ($banners as $item)
            <div class="banner_item" style="background: url('{{  asset('uploads/banners')  }}/{{ $item->image }}')">
              <div class="banner_slick_content">
                <h4 data-aos="fade-down" data-aos-duration="1000">{{ $item->subtitle }}</h4>
                <h1 data-aos="fade-right" data-aos-duration="1500">{{ $item->title }}</h1>
                <p data-aos="fade-down" data-aos-duration="1000">{{ $item->short_description }}</p>
                <a data-aos="fade-up" data-aos-duration="1500" href="{{ $item->button_url }}" class="buy-btn">Buy Now</a>
              </div>
            </div>
            @endforeach
          </div>
    </div>
  </section>

  <style>

      .banner_item {
        position: relative;
        background-repeat: no-repeat !important;
        background-size: cover !important;
        background-position: center !important;
        z-index: 1;
        padding: 120px 80px;
      }

      .banner_item:after {
          position: absolute;
          content: '';
          top: 0;
          right: 0;
          left: 0;
          bottom: 0;
          background: rgba(0, 0, 0, 0.05);
          z-index: -1;
      }

      .banner_item h4 {
        font-size: 15px;
          color: #ffffff;
          border-top: #EEE double;
          border-bottom: #EEE double;
          display: inline-block;
          letter-spacing: 10px;
          text-transform: uppercase;
          padding: 10px 0;
      }

      .banner_item h1 {
          font-size: 60px;
          color: #ffffff;
          font-weight: 700;
          line-height: 1.4;
          display: block;
          text-transform: uppercase;
      }

      .banner_item p {
          color: #ffffff;
      }

      .banner_item .buy-btn {
          line-height: 17px;
          border-width: 1px;
          margin: 30px 0px 0px;
          padding: 10px 15px;
          font-size: 12px;
          text-decoration: none;
      }

      .banner_item .buy-btn:focus {
         outline: 0
      }

      .banner_item.slick-slide:hover .next_arrow{
       
      }


      .nxt_arrow {
            color: #ffffff;
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            font-size: 16px;
            font-weight: normal;
            height: 45px;
            width: 40px;
            text-align: center;
            line-height: 44px;
            background: rgba(0, 0, 0, 0.3);
            z-index: 999;
            cursor: pointer;
            transition: all linear .3s;
            -webkit-transition: all linear .3s;
            -moz-transition: all linear .3s;
            -os-transition: all linear .3s;
            -ms-transition: all linear .3s;
        }

        .pre_arrow {
            color: #ffffff;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            font-size: 16px;
            font-weight: normal;
            height: 45px;
            width: 40px;
            text-align: center;
            line-height: 44px;
            background: rgba(0, 0, 0, 0.3);
            z-index: 999;
            cursor: pointer;
            transition: all linear .3s;
            -webkit-transition: all linear .3s;
            -moz-transition: all linear .3s;
            -os-transition: all linear .3s;
            -ms-transition: all linear .3s;
        }


        .pre_arrow:hover, .nxt_arrow:hover {
          background: {{ colorSettings()->brand_color }};
        }


      @media only screen and (max-width: 991px) {
           .banner_item h4 {
                font-size: 12px;
                padding: 5px 0;
            }

            .banner_item h1 {
                font-size: 40px;
            }

        }

      @media only screen and (max-width: 650px) {

            #banner_section .container {
              width: 100%;
              padding: 0;
              margin: 0;
            }

            .banner_item {
              padding: 50px 15px
            }
           .banner_item h4 {
                font-size: 12px;
                padding: 5px 0;
            }

            .banner_item h1 {
                font-size: 28px;
            }

            .banner_item .buy-btn {
                line-height: 17px;
                border-width: 1px;
                margin: 5px 0px 0px;
                padding: 10px 15px;
                font-size: 10px;
                text-decoration: none;
            }

            .pre_arrow, .nxt_arrow {
              display: none !important;
            }

        }


  </style>


@section('js')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  
  <script>
    
    $('.banner_slick_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: '<i class="fa fa-arrow-right nxt_arrow" aria-hidden="true"></i>',
        prevArrow: '<i class="fa fa-arrow-left pre_arrow" aria-hidden="true"></i>',
  });
  </script>

<script>
  AOS.init();
</script>
@endsection


