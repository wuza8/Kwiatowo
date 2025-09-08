@extends('layouts.app')

@section('content')

<h1 class="text-4xl font-bold text-hightext header-shadow"> Twój ulubiony atlas kwiatów... </h1>
<p class="mt-3 text-lighttext">
    Duża różnorodność barw i kształtów, przypominająca o ciepłych i zimnych dniach naszego życia, zawarta w jednej publikacji – tej stronie.
    Pozwól, by każdy kwiat opowiedział Ci swoją historię i odkryj piękno natury na nowo – w jednym miejscu, zawsze pod ręką.
</p>

<div class="mt-5 h-[40px] grid place-items-center">
    <div>
        @foreach ($categories as $category)
            <div onclick="window.location='{{ route('home', ['category' => $category->slug]) }}'" 
                class="btn-category glass-effect"
                style="background-color: {{ $category->color }};">{{$category->name}}</div>
        @endforeach
    </div>
</div>

<div class="mt-7 grid grid-cols-12 gap-4">
    <div class="col-span-9">
        @if ($flowers->count() == 0)
            <div class="w-full text-center text-lighttext">Brak wyników</div>
        @endif
        @foreach ($flowers as $flower)
            <div onclick="window.location='{{ route('flower', ['id' => $flower->id]) }}'" class="w-full h-[200px] rounded-xl card-shadow bg-primary hover:bg-primary-hover hover:cursor-pointer float-left mb-3">
                <img src="{{ asset('storage/' . $flower->image) }}" class="w-[150px] h-[150px] block object-cover float-left border-2 m-6"/>
                <div class="float-left h-[200px] mt-[29px] w-[670px]">
                    <h1 class="text-[#5c2f58] header-shadow text-xl"> {{ $flower->name }} </h1>

                    <p class="mt-3 line-clamp-4">
                        {{ $flower->description }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    
    <div class="col-span-3">
        <div class="rounded-xl card-shadow bg-white p-4">
            <h1 class="text-xl header-shadow">Filtry</h1>
            <form method="GET" action="{{ route('home') }}" >
                <div>
                    <div class="text-sm mt-2">Nazwa</div>
                    <input name="name" value="{{ request('name') }}" class="w-full block" placeholder="Wpisz szukaną nazwę..." type="text" />
                </div>

                <div>
                    <div class="text-sm mt-2">Emocja</div>
                    <select name="category" class="w-full block">
                        <option value="">Dowolna</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->slug }}" {{ request('category') == $category->slug ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-right w-full">
                    <input type="submit" class="btn-primary mt-5" value="Filtruj"/>
                </div>
            </form>
        </div>
    </div>  
</div>

@endsection