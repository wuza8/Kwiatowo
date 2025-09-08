@extends('layouts.app')

@section('content')
<a onclick="history.back()" class="hover:text-hightext hover:cursor-pointer" > < Powrót do poprzedniej strony </a>
    <br>
    <img src="{{ asset('storage/' . $flower->image) }}" class="w-[150px] h-[150px] block object-cover float-left border-2 mt-6 mr-6"/>
    <h1 class="text-[#5c2f58] header-shadow text-xl mt-7"> {{ $flower->name }} </h1>
    <p>
        {!! nl2br(e($flower->description)) !!}
    </p>
    


@endsection