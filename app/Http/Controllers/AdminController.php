<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PizzaModel;
use App\Models\Reservation;
use App\Models\Staff;
use App\Models\Order;

class AdminController extends Controller
{
    public function user()
    {

        $data = user::all();

        return view("admin.user", compact("data"));
    }

    public function deleteuser($id)
    {

        $data = user::find($id);
        $data->delete();
        return redirect()->back();
        return view("admin.user", compact("data"));
    }

    public function deletepizza($id)
    {

        $data = PizzaModel::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function pizzamenu()
    {

        $data = PizzaModel::all();
        return view("admin.pizzamenu", compact("data"));
    }

    public function updateview($id)
    {

        $data = PizzaModel::find($id);
        return view("admin.updateview", compact("data"));
    }

    public function update(Request $request, $id)
    {

        $data = PizzaModel::find($id);

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('pizzaimage', $imagename);

        $data->image = $imagename;

        $data->title = $request->title;

        $data->price = $request->price;

        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }

    public function upload(Request $request)
    {

        $data = new PizzaModel;

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('pizzaimage', $imagename);

        $data->image = $imagename;

        $data->title = $request->title;

        $data->price = $request->price;

        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }


    public function reservation(Request $request)
    {

        $data = new Reservation;



        $data->name = $request->name;

        $data->email = $request->email;

        $data->phone = $request->phone;

        $data->guest = $request->guest;

        $data->date = $request->date;

        $data->time = $request->time;

        $data->message = $request->message;

        $data->save();

        return redirect()->back();
    }


    public function viewreservation()
    {

        $data = reservation::all();

        return view("admin.adminreservation", compact("data"));
    }

    public function viewstaff()
    {

        $data = Staff::all();
        return view("admin.adminstaff", compact("data"));
    }

    public function uploadstaff(Request $request)
    {

        $data = new Staff;

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('staffimage', $imagename);

        $data->image = $imagename;

        $data->name = $request->name;

        $data->speciality = $request->speciality;

        $data->save();

        return redirect()->back();
    }

    public function updatestaff($id)
    {

        $data = Staff::find($id);
        return view("admin.updatestaff", compact("data"));
    }

    public function updatestaffmember(Request $request, $id)
    {

        $data = Staff::find($id);

        $image = $request->image;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('staffimage', $imagename);

            $data->image = $imagename;
        }

        $data->name = $request->name;

        $data->speciality = $request->speciality;

        $data->save();

        return redirect()->back();
    }

    public function deletestaff($id)
    {

        $data = Staff::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function orders()
    {
        $data=order::all();

        return view('admin.orders',compact('data'));
    }
}
