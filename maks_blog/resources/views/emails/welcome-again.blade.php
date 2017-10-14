@component('mail::message')
# Introduction

Now you're registered as {{ $user->name }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
