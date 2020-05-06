@extends('layout')

@section('content')
<h1>MOSTAR</h1>
<ul>
@forelse($activo as $activos)
<li>
{{$activos->id}}<br>{{$activos->tipo}}
</li>
@empty
<li>no hay datos</li>
@endforelse
 </ul>

@endsection
