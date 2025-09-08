@extends('layouts.app')

@section('content')

<h1 class="text-2xl text-hightext font-bold"> Dodaj kwiata </h1>

<form action="{{ route('save-flower') }}" method="POST" enctype="multipart/form-data" >
    @csrf
    <h2 class="mt-3">Nazwa kwiata</h2>
    <input type="text" name="name" />

    <h2 class="mt-3">Emocja</h2>
    <select name="category">
        <option value="happiness">Szczęście</option>
        <option value="neutral">Neutralny</option>
        <option value="nostalgic">Nostalgia</option>
        <option value="love">Miłość</option>
    </select>

    <h2 class="mt-3">Zdjęcie</h2>
    <input type="file" name="image" accept="image/*">

    <h2 class="mt-3">Opis</h2>
    <textarea name="description" cols="100" style="height: 200px !important"></textarea>

    <br>
    @if ($errors->any())
        <br>
        <div class="bg-red-200 text-red-800 p-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <input class="mt-3" type="submit" value="Dodaj">
</form>



@endsection