<x-mail::message>
# Thanks for your inquiry

<h3> Name: {{ $data['first_name'] }} {{ $data['last_name'] }}</h3>
<h3> Email: {{ $data['email'] }}</h3>
<h3> Company Name: {{ $data['company_name'] }}</h3>
<h3> Message: {{$data['message']}}</h3>

<x-mail::button :url="$url" style="color:#e6e6e5  background-color:#016262">
View More
</x-mail::button>

Thanks,<br>
Restore
</x-mail::message>
