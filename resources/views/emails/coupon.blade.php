@component('mail::message')
# New Coupon

Your have a new coupon!

Coupon       : <strong>{{ $name }}</strong> <br>
Discount     : <strong>{{ $disc }}</strong> <br>
Expired at   : <strong>{{ $exp }}</strong> <br>

{{--  @component('mail::button', ['url' => $url])
View Order
@endcomponent  --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent