@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
   @if(count($services) > 0)
   <div class="container">
       <div class="content">
            <ul class="list-unstyled">
            
                @foreach($services as $service)
                <li> <div class="alert alert-info">  {{$service}}</div></li>
                
                @endforeach
            </ul>
        </div>
    </div>
   @endif
@endsection