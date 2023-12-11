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
                        <b>名前</b>
                        <p>{{ $items->name }}</p>
                    </div>

                    <div class="form-group">
                        <b>種別</b>
                        <p>{{ $items->type->type_name }}</p>
                        </select>
                    </div>

                    <div class="form-group">
                        <b>所在地</b>
                        <p>{{ $items->address }}</p>
                    </div>

                    <div class="form-group">
                        <b>興味</b>
                        <p>{{ $items->level->level }}</p>
                    </div>

                    <div class="form-group">
                        <b>URL</b>
                        <a href="{{ $items->url }}" target="_blank" rel="noopener noreferrer"><p>{{ $items->url }}</p></a>
                    </div>

                    <div class="form-group">
                        <b>詳細</b>
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
