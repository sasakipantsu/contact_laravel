@extends('layouts.default')

@section('title', 'お問い合わせ - 完了 -')

@section('content')

    <div class="container w-1/2 mt-40 mx-auto">

        <h1 class="text-center text-xl font-extrabold pb-10">ご意見いただきありがとうございました。</h1>

        {{-- ボタン --}}

        <div class="text-center">
            <button class="shadow-lg px-10 py-2 bg-black text-lg text-white font-semibold rounded  hover:bg-gray-800 hover:shadow-sm hover:translate-y-0.5 transform transition">
                <a href="/contact">トップページへ</a>
            </button>
        </div>

    </div>


@endsection

