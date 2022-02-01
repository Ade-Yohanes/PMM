@component('mail::message')
# Job Order Melalui Webside

@component('mail::table')



    Nama        : {!!$nama!!}<br>
    Perusahaan  : {!!$perusahaan!!}<br>
    Email       : {!!$email!!}<br>
    Phone       : {!!$phone!!}<br>
    Service     : {!!$service!!}<br>
    Pesan       : <br>{!!$pesan!!}

@endcomponent

The body of your message.

@component('mail::button', ['url' => 'https://prajamitramandiri.com/'])
Visit
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
