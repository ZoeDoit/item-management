@extends('adminlte::page')

@section('title', '観光地編集')

@section('content_header')
    <h1>観光地編集</h1>
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
                <form method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">名前</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="名前" value="{{ $items->name }}">
                        </div>

                        <div class="form-group">
                            <label for="type_id">種別</label>
                            <select class="form-control" id="type_id" name="type_id">
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}" @if ($type->id == $items->type_id) selected @endif>{{ $type->type_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="prefecture_id">都道府県</label>
                            <select class="form-control" id="prefecture_id" name="prefecture_id">
                                @foreach ($prefectures as $prefecture)
                                    <option value="{{ $prefecture->id }}" @if ($prefecture->id == $items->prefecture_id) selected @endif>{{ $prefecture->pref_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="city">市町村区以降</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="市町村区以降" value="{{ $items->city }}">
                        </div>

                        <div class="form-group">
                            <label for="prefecture_id">興味</label>
                            <select class="form-control" id="level_id" name="level_id">
                                @foreach ($levels as $level)
                                    <option value="{{ $level->id }}" @if ($level->id == $items->level_id) selected @endif>{{ $level->level }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="url" class="form-control" id="url" name="url" placeholder="URL" value="{{ $items->url }}">
                        </div>

                        <div class="form-group">
                            <label for="detail">詳細</label>
                            <input type="text" class="form-control" id="detail" name="detail" placeholder="詳細説明" value="{{ $items->detail }}">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">編集</button>
                    </div>
                </form>
                <form action="/items/delete" method="post">
                    @csrf
                    <input type="hidden" value="{{$items->id}}" name="id"> 
                    <div class="card-footer">
                        <button type="submit" class="btn btn-danger">削除</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
