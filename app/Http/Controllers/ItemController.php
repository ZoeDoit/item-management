<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

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

        return view('item.index', compact('items'));
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

            // 商品登録
            Item::create([
                'user_id' => Auth::user()->id,
                'name' => $request->name,
                'type' => $request->type,
                'detail' => $request->detail,
            ]);

            return redirect('/items');
        }

        return view('item.add');
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

            // 商品編集
            $item = Item::find($request->id); //エラー発生中SQLSTATE[42S22]: Column not found: 1054 Unknown column '=' in 'field list'
            $item->update([
                'user_id' => Auth::user()->id,
                'name' => $request->name,
                'type' => $request->type,
                'detail' => $request->detail,
            ]);

            return redirect('/items');
        }
        // GETリクエストのとき
        $items = item::where('id', '=', $request->id)->first();
        $user = Auth::user();
        // return view('items.edit')->with([
        //     'items' => $items,
        // ]);
        return view('item.edit', compact('items'));

    }
}
