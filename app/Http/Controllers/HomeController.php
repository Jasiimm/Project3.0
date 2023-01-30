<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PizzaModel;
use App\Models\Staff;
use App\Models\Order;

class HomeController extends Controller
{
    public function index()
    {
        $data = PizzaModel::all();

        return view("pizzas", compact("data"));
    }

    public function index2()
    {
        $data2 = Staff::all();
        return view("staff", compact('data2'));
    }

//-------------------> Redirects Functies voor de Cart Visueel Optie <--------------------------------//
    public function redirects()
    {

        $data = PizzaModel::all();

        $usertype = Auth::user()->usertype;

        if ($usertype == '1')
        {
            return view('admin.adminhome');
        } 
        else 
        {
            $user_id=Auth::id();

            $count=cart::where('user_id',$user_id)->count();
            return view('pizzas', compact('data', 'count'));
        }
    }

    public function redirects2()
    {

        $data = PizzaModel::all();

        $usertype = Auth::user()->usertype;

        if ($usertype == '1')
        {
            return view('admin.adminhome');
        } 
        else 
        {
            $user_id=Auth::id();

            $count=cart::where('user_id',$user_id)->count();
            return view('pizzas', compact('data', 'count'));
        }
    }


    //-------------------> Redirects Functies voor de Cart Visueel Optie <--------------------------------//

    public function addcart(Request $request, $id)
    {
        if (Auth::id())
        {
            $user_id=Auth::id();

           $foodid=$id;

           $quantity=$request->quantity;

           $cart=new Cart;

           $cart->user_id=$user_id;

           $cart->food_id=$foodid;

           $cart->quantity=$quantity;

           $cart->save();

            return redirect()->back();
        } 
        else 
        {
            return redirect('/login');
        }
    }

    public function showcart(Request $request, $id)
    {
        $count=cart::where('user_id',$id)->count();

        $data2=cart::select('*')->where('user_id', '=' , $id)->get();

        $data=cart::where('user_id', $id)->join('pizza_models' , 'carts.food_id', '=', 'pizza_models.id')->get();

        return view('showcart', compact('count', 'data', 'data2'));
    }

    public function remove($id)
    {
        $data=cart::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function orderconfirm(Request $request)
    {
        foreach($request->foodname as $key => $foodname)
        {
            $data=new order;

            $data->foodname=$foodname;

            $data->price=$request->price[$key];

            $data->quantity=$request->quantity[$key];

            $data->name=$request->name;

            $data->phone=$request->phone;

            $data->address=$request->address;

            $data->save();
        }

        return redirect()->back();
    }

}
