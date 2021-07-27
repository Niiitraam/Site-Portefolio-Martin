@component('mail::message')
Yo Martin,
Tu as recu un mail de {{$data['name']}}.
Son email est le {{$data['email']}}.
Son message est:
    {{$data['message']}}
{{ config('app.name') }}
@endcomponent
