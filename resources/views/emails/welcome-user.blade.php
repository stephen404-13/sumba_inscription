@component('mail::message')

<h2>wellcome to sumba apps.</h2>

confirm your inscription ...

@component('mail::button', ['url' => 'http://localhost:8000/home'])
validate
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
