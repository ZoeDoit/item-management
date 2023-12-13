@extends('adminlte::page')

@section('title', '観光地一覧')

@section('content_header')
    <h1>観光地一覧</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    {{-- <h3 class="card-title">商品一覧</h3> --}}

                        <div class="search">
                        {{-- 検索機能ここから --}}
                        {{-- <div>
                            <form action="{{ url('/items') }}" method="GET">
                                <input type="text" name="keyword" value="{{ $keyword }}">
                                <button type="submit" class="btn btn-default">検索</button>
                            </form>
                        </div> --}}
                            <form action="{{ url('/items') }}" method="GET" class="form-inline">
                                @csrf
                    
                                <div class="form-group">
                                    <div>
                                        <label for="">キーワード
                                        <div class="mr-3">
                                            <input type="text" name="keyword" value="{{ $keyword }}">
                                        </div>
                                        </label>
                                    </div>
                    
                                    <div class="mr-3">
                                        <label for="">種別
                                        <div>
                                            <select name="type" data-toggle="select">
                                                <option value="">全て</option>
                                                @foreach ($types as $type)
                                                    <option value="{{ $type->type_name }}" @if($type_search == $type->type_name) selected @endif>{{ $type->type_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        </label>
                                    </div>
                    
                                    <div class="mr-3">
                                        <label for="">都道府県
                                        <div>
                                            <select name="prefecture" data-toggle="select">
                                                <option value="">全て</option>
                                                @foreach ($prefectures as $prefecture)
                                                    <option value="{{ $prefecture->pref_name }}"@if($pref_search== $prefecture->pref_name) selected @endif>{{ $prefecture->pref_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        </label>
                                    </div>
                    
                                    <div>
                                        <input type="submit" class="btn btn-default" value="検索">
                                    </div>
                                </div>
                            </form>
                        </div>
                        {{-- 検索機能ここまで --}}

                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <div class="input-group-append">
                                <a href="{{ url('items/add') }}" class="btn btn-default">新規登録</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>名前</th>
                                <th>種別</th>
                                <th>都道府県</th>
                                <th>興味</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><a href="items/detail/{{ $item->id }}">
                                        @if(mb_strlen( $item->name )  > 8 )
                                        {{mb_substr( $item->name, 0, 8).'……' }}
                                        @else
                                            {{$item->name}} 
                                        @endif
                                    </a></td>
                                    <td>{{ $item->type->type_name }}</td>
                                    <td>{{ $item->prefecture->pref_name }}</td>
                                    <td>{{ $item->level->level }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
