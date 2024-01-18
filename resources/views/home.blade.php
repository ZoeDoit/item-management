@extends('adminlte::page')

@section('title', 'ホーム')

@section('content_header')
    <h1>ホーム</h1>
@stop

@section('content')
    <p>ようこそ。</p><br>
    <h3>Pick at Random</h3>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-wrap">
            <thead>
                <tr>
                    <th>名前</th>
                    <th>種別</th>
                    <th>都道府県</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($randomItems as $randomItem)
                    <tr>
                        <td><a href="items/detail/{{ $randomItem->id }}">
                            {{$randomItem->name}} 
                        </a></td>
                        <td>{{ $randomItem->type->type_name }}</td>
                        <td>{{ $randomItem->prefecture->pref_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
