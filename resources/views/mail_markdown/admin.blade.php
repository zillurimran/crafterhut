@component('mail::message')
<h3>Hi, {{ ucfirst($admin_name) }}</h3>
<p>{{ $admin_subject }}</p>


{{-- @component('mail::button', ['url' => $url])
View Order
@endcomponent --}}

{{-- {{ config('app.name') }} --}}
@endcomponent