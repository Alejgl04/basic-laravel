@extends('layouts.template')

@section('title','Cursos')
    
@section('content')
  <div>
    <h1 class="text-3xl font-bold text-clifford">Bienvenido a la página principal de cursos</h1>
  </div>
  @if(session()->has('message'))
    <div class="mt-4 text-slate-50 bg-green-700">
        {{ session()->get('message') }}
    </div>
  @endif
  <br>
  <a class="text-sky-400 font-bold py-8 underline" href="{{route('courses.create')}}">Crear curso</a>
  <br>
  <ul class="list-group ">
    @foreach ($courses as $course)
      <li>
        - <a href="{{route('courses.show',$course->id)}}" class="underline"> {{ $course->name }}</a>
      </li>
    @endforeach
  </ul>
  <div class="py-8">
    {{$courses->links()}}
  </div>
@endsection
