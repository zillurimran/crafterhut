@foreach ($banners as $item)
  <li data-transition='slideleft' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img1.jpg'>
    <img src='{{ asset('uploads/banners') }}/{{ $item->image }}' alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat'/>
    <div class="info">
      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;white-space:nowrap;'>
        <span>{{ $item->subtitle }}</span>
      </div>
      <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;white-space:nowrap;'>
        <span>{{ $item->title }}</span> 
      </div>
      <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'>
        {{ $item->short_description }}
      </div>
      <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;white-space:nowrap;'>
        <a href='#' class="buy-btn">Shop Now</a>
      </div>
    </div>
  </li>
@endforeach


