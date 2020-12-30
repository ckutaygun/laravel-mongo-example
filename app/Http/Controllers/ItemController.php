<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




use App\Item;

use Session;

class ItemController extends Controller
{
    public  function  index(){

        $items = Item::orderBy('created_at','desc')->get();
        return view('item.item',['allItem'=>$items]);
    }
    public function ItemSave(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'type' => 'required',
            'qty' => 'required',
        ]);
        $item = new Item();

         $item->name = $request->name;
         $item->type = $request->type;
         $item->qty = $request->qty;

        $item->save();
        return redirect('/item')->with('toast_success','Ürün Basarıyla Eklendi.');


    }
    public function Edit($id){
        $item= Item::find($id);
        return view('item.itemEdit',['singleItem'=>$item]);
    }
    public function Update(Request $request)
    {
        $item = Item::find($request->id);

        $item->name = $request->name;
        $item->type = $request->type;
        $item->qty = $request->qty;

        $item->Update();
        return redirect('/item')->with('toast_success','Ürün Basarıyla Güncellendi.');

    }

    public function Delete($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('/item')->with('toast_success','Ürün Basarıyla Silindi.');

    }
}
