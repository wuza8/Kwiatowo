@extends('layouts.app')

@section('content')

<div class="float-left text-2xl text-hightext font-bold"> Panel administratorski </div> 
<button class="block float-left mt-[1px] ml-2" onclick="window.location='{{ route('edit') }}'">+ dodaj kwiat</button>

<div class="w-full grid grid-cols-12 gap-3 float-left mt-5">
    @foreach ($flowers as $flower)
        <div class="w-full h-[50px] bg-primary hover:bg-primary-hover hover:cursor-pointer rounded-xl text-third font-bold p-3 col-span-3 text-center">
            {{ $flower->name }}
        </div>
    @endforeach
    
</div>

@endsection