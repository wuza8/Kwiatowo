@extends('layouts.app')

@section('content')

<style>
    .login-screen-shadow{
        box-shadow: 0px 0px 10px #ccc;
    }
</style>

<div class="ml-auto mr-auto w-[400px] login-screen-shadow">
    <form method="POST" action="{{ route('try-login') }}">
        @csrf
        <h1 class="w-full text-center text-2xl pt-5">Zaloguj się</h1>
        <input name="login" class="m-5 w-[358px]" type="text" placeholder="login"/>
        <input name="password" class="ml-5 w-[358px]" type="password" placeholder="hasło"/>
        @if ($errors->any())
        <br>
            <div class="bg-red-200 text-red-800 p-3 rounded m-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="w-full text-center pb-5"><input type="submit" class="mt-5 btn-primary" value="Zaloguj"/> </div>
    </form>
</div>


@endsection