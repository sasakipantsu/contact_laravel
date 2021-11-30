@extends('layouts.default')

@section('title', '内容確認')

@section('content')

    <div class="container w-1/2 my-10 mx-auto">

        <h1 class="text-center text-3xl font-extrabold pb-10">内容確認</h1>

        <form action="/contact/create" method="POST">
            @csrf

            {{-- お名前 --}}

            <div class="flex justify-between items-center mb-10">
                <p class="p-2 text-l font-bold">お名前</p>
                <div class="w-3/4 flex justify-between">
                    <p class="w-64 p-3">{{ $items['fullname'] }}</p>
                    <input type="hidden" name="fullname" value="{{ $items['fullname'] }}">
                    
                    {{-- <p class="w-64 ml-5 p-3">{{ $items['laststname'] }}</p> --}}
                    {{-- <input type="text" name="fistname" value="{{ $items['fistname'] }}"> --}}
                </div>
            </div>

            {{-- 性別 --}}

            <div class="flex justify-between items-center mb-10">
                <p class="p-2 text-l font-bold">性別</p>
                <div class="w-3/4 flex items-center">
                    <p class="w-full p-2">
                        <?php
                        switch ($items['gender']){
                            case '1':
                            echo "男性";
                            break;
                            case '2':
                            echo "女性";
                            break;
                        }
                        ?>
                    </p>
                    <input type="hidden" name="gender" value="{{ $items['gender'] }}" checked>
                </div>
            </div>

            {{-- メールアドレス --}}

            <div class="flex justify-between items-center mb-10">
                <p class="p-2 text-l font-bold">メールアドレス</p>
                <div class="w-3/4">
                    <p class="w-full p-2">{{ $items['email'] }}</p>
                </div>
                <input type="hidden" name="email" value="{{ $items['email'] }}">
            </div>

            {{-- 郵便番号 --}}

            <div class="flex justify-between items-center mb-10">
                <p class="p-2 text-l font-bold">郵便番号</p>
                <div class="w-3/4 flex justify-between items-center">
                    <span class="font-bold pl-3">&#12306;</span>
                    <p class="w-full p-2">{{ $items['postal_code'] }}</p>
                <input type="hidden" name="postal_code" value="{{ $items['postal_code'] }}">
                </div>
            </div>

            {{-- 住所 --}}

            <div class="flex justify-between items-center mb-10">
                <p class="p-2 text-l font-bold">住所</p>
                <div class="w-3/4">
                    <p class="w-full p-2">{{ $items['address'] }}</p>
                </div>
                <input type="hidden" name="address" value="{{ $items['address'] }}">
            </div>

            {{-- 建物名 --}}

            <div class="flex justify-between items-center mb-10">
                <p class="p-2 text-l font-bold">建物名</p>
                <div class="w-3/4">
                    <p class="w-full p-2">{{ $items['building_name'] }}</p>
                </div>
                <input type="hidden" name="building_name" value="{{ $items['building_name'] }}">
            </div>

            {{-- ご意見 --}}

            <div class="flex justify-between mb-10">
                <p class="p-2 text-l font-bold">ご意見</p>
                <div class="w-3/4">
                    <p class="w-full p-2">{{ $items['option'] }}</p>
                </div>
                <input type="hidden" name="option" value="{{ $items['option'] }}">
            </div>

            {{-- ボタン --}}

            <div class="text-center mb-5">
                <button type="submit" class="shadow-lg px-14 py-2 bg-black text-lg text-white font-semibold rounded  hover:bg-gray-800 hover:shadow-sm hover:translate-y-0.5 transform transition">送信</button>
            </div>
            <div class="text-center">
                <button name="back" type="submit" class="border-b-2 border-black" value="true">修正する</button>
            </div>
        </form>
    </div>


@endsection
