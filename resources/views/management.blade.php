@extends('layouts.default')

<style>
.cp_tooltip {
	position: relative;
	display: inline-block;
	cursor: pointer;
}
.cp_tooltip .cp_tooltiptext {
	position: absolute;
	z-index: 1;
	top: 120%;
	left: 0;
	visibility: hidden;
	width: auto;
	white-space: wrap;
	padding: 1em 1em;
	transition: opacity 1s;
	opacity: 0;
	color: #ffffff;
	border-radius: 6px;
	background-color: black;
}
.cp_tooltip .cp_tooltiptext::after {
	position: absolute;
	bottom: 100%;
	left: 50%;
	margin-left: -5px;
	content: ' ';
	border: 5px solid transparent;
	border-bottom-color: black;
}
.cp_tooltip:hover .cp_tooltiptext {
	visibility: visible;
	opacity: 1;
}
</style>

@section('title', '管理システム')

@section('content')



    <h1 class="text-center text-3xl font-extrabold py-10">管理システム</h1>

    <div class="container p-10 border-2 border-black mx-auto">

        <form action="/management/search" method="get">
            @csrf

            {{-- お名前 --}}

            <div class="flex items-center mb-5">
                <p class="p-2 text-l font-bold w-40">お名前</p>
                <input type="text" name="fullname" class="w-60 p-3 border-solid border-2 border-gray-300 rounded-md">

                {{-- 性別 --}}

                <p class="p-2 text-l font-bold ml-20">性別</p>
                {{-- <input type="radio" name="gender" value="" class="w-10 h-10 mr-5 ml-10 " checked>全て --}}
                <input type="radio" name="gender" value="1" class="w-10 h-10 mx-5 mr-5" checked>男性
                <input type="radio" name="gender" value="2" class="w-10 h-10 mx-5" >女性
            </div>

            {{-- 登録日 --}}

            <div class="flex items-center mb-5">
                <p class="p-2 text-l font-bold w-40">登録日</p>
                <input type="date" name="startDate" class="w-60 p-3 border-solid border-2 border-gray-300 rounded-md">
                <div class="px-5">~</div>
                <input type="date" name="endDate" class="w-60 p-3 border-solid border-2 border-gray-300 rounded-md">
            </div>

            {{-- メールアドレス --}}

            <div class="flex items-center mb-5">
                <p class="p-2 text-l font-bold w-40">メールアドレス</p>
                <input type="text" name="email" class="w-60 p-3 border-solid border-2 border-gray-300 rounded-md">
            </div>

            {{-- ボタン --}}

            <div class="text-center">
                <button type="submit" class="shadow-lg px-14 py-2 bg-black text-lg text-white font-semibold rounded  hover:bg-gray-800 hover:shadow-sm hover:translate-y-0.5 transform transition">検索</button>

                <div class="text-center mt-2">
                    <a href="/management" class="border-b-2 border-black">リセット</a>
                </div>
            </div>
        </form>
    </div>

    {{-- 検索表示 --}}

    <div class="container my-10 mx-auto">
        <table  class="w-full border-b-2 border-black">
            <div>
                <tr class="block mb-3 text-left">
                    <th class="pl-10 w-24">ID</th>
                    <th class="pl-8 w-40">お名前</th>
                    <th class="pl-8 w-28">性別</th>
                    <th class="pl-6 w-72">メールアドレス</th>
                    <th class="pl-6 w-1/2">ご意見</th>
                </tr>
            </div>
        </table>

        {{-- 検索一覧 --}}

        @foreach ($items as $item)

        <table>
            <tr>
                <td class="pl-10 w-24">
                    {{ $item->id }}
                </td>
                <td class="pl-8 w-40">
                    {{ $item->fullname }}
                </td>
                <td class="pl-8 w-24">
                    <?php
                    switch ($item['gender']){
                        case '1':
                        echo "男性";
                        break;
                        case '2':
                        echo "女性";
                        break;
                    }
                    ?>
                </td>
                <td class="pl-10 w-80">
                    {{ $item->email }}
                </td>
                <td class="w-5/12 py-2">
                    <div class="cp_tooltip">{{ Str::limit($item->option), 25 }}<span class="cp_tooltiptext">{{ $item->option }}</span></div>
                </td>

                {{-- 削除 --}}

                <td>
                    <form action="/management/delete" method="POST">
                        @csrf
                        <div class="text-center w-20">
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <button type="submit" class="shadow-lg px-3 py-1 bg-black text-white font-semibold rounded  hover:bg-gray-800 hover:shadow-sm hover:translate-y-0.5 transform transition">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>

        @endforeach

        {{ $items->appends(request()->query())->links() }}

    </div>


@endsection
