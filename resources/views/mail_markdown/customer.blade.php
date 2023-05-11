@component('mail::message')
<h3>Hi, {{ ucfirst($name) }}</h3>
<p>{{ $subject }}</p>


{{-- @component('mail::button', ['url' => $url])
View Order
@endcomponent --}} 

{{ config('app.name') }}
@endcomponent