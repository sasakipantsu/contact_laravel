@extends('layouts.default')

@section('title', '管理システム')

@section('search')

    {{-- 検索一覧 --}}

    @foreach ($items as $item)
    <tr>
        <td>
            {{ $item->id }}
        </td>
        <td>
            {{ $item->fullname }}
        </td>
        <td>
            {{ $item->gender }}
        </td>
        <td>
            {{ $item->email }}
        </td>
        <td>
            {{ $item->opinion }}
        </td>

        {{-- 削除 --}}

        <form action="/management/delete" method="POST">
            @csrf
            <div class="text-center">
                <input type="hidden" name="id" value="{{ $item->id }}">
                <button type="submit" class="shadow-lg px-10 py-1 bg-black text-lg text-white font-semibold rounded  hover:bg-gray-800 hover:shadow-sm hover:translate-y-0.5 transform transition">削除</button>
        </form>
    </tr>

    @endforeach

@endsection
