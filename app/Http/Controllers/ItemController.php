<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Type;
use App\Models\Prefecture;
use App\Models\Level;

class ItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 商品一覧
     */
    public function index(Request $request)
    {
        $types = Type::all();
        $prefectures = Prefecture::all();
        $levels = Level::all();

        // $keyword = $request->input('keyword');
        // if(!empty($keyword)){
        //     // 商品一覧表示（キーワード検索）
        //     $items = Item::with('type')
        //         ->whereHas('type', function ($query) use ($keyword) {
        //             return $query->where('type_name', "LIKE", "%".$keyword."%");
        //         })
        //         ->orWhere('name', 'LIKE', "%{$keyword}%")
        //         ->orWhere('address', 'LIKE', "%{$keyword}%")
        //         ->orWhere('detail', 'LIKE', "%{$keyword}%")
        //     ->get();
        // } else {
        //     // 商品一覧表示（全件）
        //     $items = Item::all();
        // }

        //検索フォームに入力された値を取得
        $type_search = $request->input('type');
        $pref_search = $request->input('prefecture');
        $keyword = $request->input('keyword');
        
        if(empty($type_search) && empty($pref_search) && empty($keyword)) {
            $items = Item::all();
        } else {
            $query = Item::query();
            //テーブル結合
            $query->join('types', function ($query) use ($request) {
                $query->on('items.type_id', '=', 'types.id');
                })->join('prefectures', function ($query) use ($request) {
                $query->on('items.prefecture_id', '=', 'prefectures.id');
                });

            if(!empty($type_search)) {
                $query->where('type_name', 'LIKE', $type_search);
            }

            if(!empty($pref_search)) {
                $query->where('pref_name', 'LIKE', $pref_search);
            }

            if(!empty($keyword)) {
                $query->Where('name', 'LIKE', "%{$keyword}%");
            }

            $items = $query->get();
        }
        return view('item.index', compact('items', 'types', 'prefectures', 'levels', 'type_search', 'pref_search', 'keyword'));
    }

    /**
     * 商品登録
     */
    public function add(Request $request)
    {
        // POSTリクエストのとき
        if ($request->isMethod('post')) {
            // バリデーション
            $this->validate($request, [
                'name' => 'required|max:100',
                'type_id' => 'required',
                'prefecture_id' => 'required',
                'city' => 'max:100',
                'level_id' => 'required',
                'url' => 'nullable|url',
                'detail' => 'max:500',
            ]);

            $prefecture = Prefecture::find($request->prefecture_id);

            // 商品登録
            Item::create([
                'user_id' => Auth::user()->id,
                'name' => $request->name,
                'type_id' => $request->type_id,
                'prefecture_id' => $request->prefecture_id,
                'city' => $request->city,
                'address' => $prefecture->pref_name.$request->city,
                'level_id' => $request->level_id,
                'url' => $request->url,
                'detail' => $request->detail,
            ]);

            return redirect('/items');
        }
        $types = Type::all();
        $prefectures = Prefecture::all();
        $levels = Level::all();
        return view('item.add', compact('types', 'prefectures', 'levels'));
    }

    /**
     * 商品詳細
     */
    public function detail(Request $request)
    {
        $items = item::where('id', '=', $request->id)->first();
        $types = Type::all();
        $prefectures = Prefecture::all();
        $levels = Level::all();
        $user = Auth::user();
        return view('item.detail', compact('items', 'types', 'prefectures', 'levels'));
    }    

    /**
     * 商品編集
     */
    public function edit(Request $request)
    {
        // POSTリクエストのとき
        if ($request->isMethod('post')) {
            // バリデーション
            $this->validate($request, [
                'name' => 'required|max:100',
                'type_id' => 'required',
                'prefecture_id' => 'required',
                'city' => 'max:100',
                'level_id' => 'required',
                'url' => 'nullable|url',
                'detail' => 'max:500',
            ]);

            $prefecture = Prefecture::find($request->prefecture_id);

            // 商品編集
            $item = Item::find($request->id);
            $item->update([
                'user_id' => Auth::user()->id,
                'name' => $request->name,
                'type_id' => $request->type_id,
                'prefecture_id' => $request->prefecture_id,
                'city' => $request->city,
                'address' => $prefecture->pref_name.$request->city,
                'level_id' => $request->level_id,
                'url' => $request->url,
                'detail' => $request->detail,
            ]);

            return redirect('/items');
        }
        // GETリクエストのとき
        $items = item::where('id', '=', $request->id)->first();
        $types = Type::all();
        $prefectures = Prefecture::all();
        $levels = Level::all();
        $user = Auth::user();
        // return view('items.edit')->with([
        //     'items' => $items,
        // ]);
        return view('item.edit', compact('items', 'types', 'prefectures', 'levels'));
    }

        /**
     * 商品削除
     */
    public function delete(Request $request)
    {
        // POSTリクエストのとき
        if ($request->isMethod('post')) {
            $item = Item::find($request->id);
            $item->delete();
            return redirect('/items');
        }
    }
}
