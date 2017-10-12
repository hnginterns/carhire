@component('mail::message')
<p>Just a single click to complete your registration!</p>
 <p>Click the link below to verify your email</p>
@component('mail::button', ['url' => url('/verifyemail/'.$email_token)])
Verify Now!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
