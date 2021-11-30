@extends('layouts.default')

@section('title', 'お問い合わせ')

@section('content')

    <div class="container w-1/2 my-10 mx-auto">

        <h1 class="text-center text-3xl font-extrabold pb-10">お問い合わせ</h1>

        <form action="/contact/confirm" method="POST">
            @csrf

            {{-- お名前 --}}

            <div class="flex justify-between items-center">
                <p class="p-2 text-l font-bold">お名前<span class="ml-2 text-red-500 font-thin">&#8251;</span></p>
                <div class="w-3/4 flex justify-between">
                    <input type="text" name="fullname" autocomplete="fullname" class="w-full p-3 border-solid border-2 border-gray-300 rounded-md" value="{{ old('fullname') }}">


                    {{-- 姓 --}}
                    {{-- <input type="text" name="lastname" autocomplete="lastname" class="w-64 p-3 border-solid border-2 border-gray-300 rounded-md" value="{{ old('lastname') }}"> --}}
                    {{-- 名 --}}
                    {{-- <input type="text" name="firstname" autocomplete="firstname" class="w-64 ml-5 p-3 border-solid border-2 border-gray-300 rounded-md" value="{{ old('firstname') }}"> --}}
                </div>
            </div>
            <div class="w-3/4 ml-auto flex mb-5">
                <p class="text-gray-400 w-64 pl-4 pt-2">例)　山田 太郎</p>
                {{-- <p class="text-gray-400 w-64 pl-4 ml-7 pt-2">例)　太郎</p> --}}
            </div>

            {{-- バリデーション --}}

            <div class="mb-10">
                @if ($errors->has('fullname'))
                <p class="p-2 bg-red-200 rounded-md">{{ $errors->first('fullname') }}</p>
                @endif
            </div>

            {{-- 性別 --}}

            <div class="flex justify-between items-center mb-10">
                <p class="p-2 text-l font-bold">性別<span class="ml-2 text-red-500 font-thin">&#8251;</span></p>
                <div class="w-3/4 flex items-center">
                    <input type="radio" name="gender" value="1" class="w-10 h-10 mr-5" value="{{ old('gender') }}" checked>男性
                    <input type="radio" name="gender" value="2" class="w-10 h-10 mx-5" value="{{ old('gender') }}">女性
                </div>
            </div>

            {{-- メールアドレス --}}

            <div class="flex justify-between items-center">
                <p class="p-2 text-l font-bold">メールアドレス<span class="ml-2 text-red-500 font-thin">&#8251;</span></p>
                <div class="w-3/4">
                    <input type="text" name="email" autocomplete="email" class="w-full p-3 border-solid border-2 border-gray-300 rounded-md" value="{{ old('email') }}">
                </div>
            </div>
            <div class="w-3/4 ml-auto flex mb-5">
                <p class="text-gray-400 w-64 pl-4 pt-2">例)　test@example.com</p>
            </div>

            {{-- バリデーション --}}

            <div class="mb-10">
                @if ($errors->has('email'))
                <p class="p-2 bg-red-200 rounded-md">{{ $errors->first('email') }}</p>
                @endif
            </div>

            {{-- 郵便番号 --}}

            <div class="flex justify-between items-center">
                <p class="p-2 text-l font-bold">郵便番号<span class="ml-2 text-red-500 font-thin">&#8251;</span></p>
                <div class="w-3/4 flex justify-between items-center">
                    <span class="font-bold pl-3">&#12306;</span>
                    <input type="text" name="postal_code" autocomplete="postal_code" class="w-11/12 p-3 border-solid border-2 border-gray-300 rounded-md" value="{{ old('postal_code') }}">
                </div>
            </div>
            <div class="w-3/4 ml-auto flex mb-5">
                <p class="text-gray-400 w-11/12 ml-auto pl-4 pt-2">例)　123-4567</p>
            </div>

            {{-- バリデーション --}}

            <div class="mb-10">
                @if ($errors->has('postal_code'))
                <p class="p-2 bg-red-200 rounded-md">{{ $errors->first('postal_code') }}</p>
                @endif
            </div>

            {{-- 住所 --}}

            <div class="flex justify-between items-center">
                <p class="p-2 text-l font-bold">住所<span class="ml-2 text-red-500 font-thin">&#8251;</span></p>
                <div class="w-3/4">
                    <input type="text" name="address" autocomplete="address" class="w-full p-3 border-solid border-2 border-gray-300 rounded-md" value="{{ old('address') }}">
                </div>
            </div>
            <div class="w-3/4 ml-auto flex mb-5">
                <p class="text-gray-400 w-64 pl-4 pt-2">例)　東京都渋谷区千駄ヶ谷1-2-3</p>
            </div>

            {{-- バリデーション --}}

            <div class="mb-10">
                @if ($errors->has('address'))
                <p class="p-2 bg-red-200 rounded-md">{{ $errors->first('address') }}</p>
                @endif
            </div>

            {{-- 建物名 --}}

            <div class="flex justify-between items-center">
                <p class="p-2 text-l font-bold">建物名</p>
                <div class="w-3/4">
                    <input type="text" name="building_name" class="w-full p-3 border-solid border-2 border-gray-300 rounded-md" value="{{ old('building_name') }}">
                </div>
            </div>
            <div class="w-3/4 ml-auto flex mb-5">
                <p class="text-gray-400 w-64 pl-4 pt-2">例)　千駄ヶ谷マンション101</p>
            </div>

            {{-- ご意見 --}}

            <div class="flex justify-between mb-10">
                <p class="p-2 text-l font-bold">ご意見<span class="ml-2 text-red-500 font-thin">&#8251;</span></p>
                <div class="w-3/4">
                    <textarea 　type="textarea" name="option" rows="5" class="w-full p-2 border-solid border-2 border-gray-300 rounded-md">{{ old('option') }}</textarea>
                </div>
            </div>

            {{-- バリデーション --}}

            <div class="mb-10">
                @if ($errors->has('option'))
                <p class="p-2 bg-red-200 rounded-md">{{ $errors->first('option') }}</p>
                @endif
            </div>

            {{-- ボタン --}}

            <div class="text-center">
                <button type="submit" class="shadow-lg px-14 py-2 bg-black text-lg text-white font-semibold rounded  hover:bg-gray-800 hover:shadow-sm hover:translate-y-0.5 transform transition">確認</button>
            </div>
        </form>
    </div>


@endsection
