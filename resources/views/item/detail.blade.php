@extends('adminlte::page')

@section('title', '商品編集')

@section('content_header')
    <h1>商品詳細</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card card-primary">

                <div class="card-body">
                    <div class="form-group">
                        <h3>名前</h3>
                        <p>{{ $items->name }}</p>
                    </div>

                    <div class="form-group">
                        <h3>種別</h3>
                        <p>ここに種別を表示</p>
                        </select>
                    </div>

                    <div class="form-group">
                        <h3>都道府県</h3>
                        <p>ここに都道府県を表示</p>
                    </div>

                    <div class="form-group">
                        <h3>市町村区以降</h3>
                        <p>{{ $items->city }}</p>
                    </div>

                    <div class="form-group">
                        <h3>興味</h3>
                        <p>ここに興味を表示</p>
                    </div>

                    <div class="form-group">
                        <h3>URL</h3>
                        <p>{{ $items->url }}</p>
                    </div>

                    <div class="form-group">
                        <h3>詳細</h3>
                        <p>{{ $items->detail }}</p>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="button" onclick="location.href='{{ route('edit', ['id' => $items->id]) }}'" class="btn btn-default">編集する</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
