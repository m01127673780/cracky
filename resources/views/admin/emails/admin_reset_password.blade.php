@component('mail::message')
# Reset Acount
Welcom{{$data['data']->name}}<br>
The body of your message.

@component('mail::button', ['url' => aurl('reset/password/'.$data['token'])])
    Click Here To Reset Your Password
Button Text
@endcomponent
OR<br>
Copy this Link
<a href="{{aurl('reset/password/'.$data['token'])}}">{{aurl('reset/password/'.$data['token'])}}</a>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
