<h1>Helooes i am back</h1>
{{-- <h1>{{$keys}}</h1> --}}
{{-- <h2>city : {{$city}}</h2> --}}

{{--2) ager data java script ka ho  --}}

{{-- <h2>{!!$city!!}</h2> --}}

{{-- 3) method of send data from route to view --}}
{{-- 4) ager user koi value nahi send kry ga route k through to default value show hogi --}}
{{-- <h2>city : {{ !empty($city)? $city:'Not Found'}}</h2> --}}



{{-- 5) Show Single Dimension array  --}}

@foreach ($keys as $item)
    <h1>{{$item}}</h1>
@endforeach