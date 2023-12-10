<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Type;
use app\Models\Prefecture;
use app\Models\Level;

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
    public function index()
    {
        // 商品一覧取得
        $items = Item::all();
        $types = Type::all();
        $prefectures = Prefecture::all();
        $levels = Level::all();

        return view('item.index', compact('items', 'types', 'prefectures', 'levels'));
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
}
