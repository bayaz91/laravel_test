
<!DOCTYPE html>
@extends('welcome')


@section('title')
<title>LARAVEL</title>
@endsection



@if(isset($titles))
@foreach($titles as $t)
{{ $t->name }}
@endforeach
@endif

@section('footer')

<div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
@endsection 


</htmll>