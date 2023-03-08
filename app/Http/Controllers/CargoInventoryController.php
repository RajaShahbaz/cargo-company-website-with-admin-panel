<?php

namespace App\Http\Controllers;

use App\Models\CargoInventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CargoInventoryController extends Controller
{
    public function index(){
        $user = Auth::user();
        if ($user->role_id==1) {
            $inventories = CargoInventory::latest()->get();
        }else{
            $inventories = CargoInventory::where('branch_id',$user->branch_id)->latest()->get();
        }
        return view('admin.cargoinventory',compact('inventories'));
    }
    public function databybranch($name){
        $user = Auth::user();
        if($user->role_id!=1){
            return redirect(route('admin.cargoinventory'));
        }
            $inventories = CargoInventory::where('branch_id',$name)->latest()->get();
        return view('admin.cargoinventory',compact('inventories'));
    }
    public function create(Request $request){
        $inventory="";
        $requesttype = 'create';
        return view('admin.add-inventory',compact('inventory','requesttype'));
    }
    public function show($id,Request $request){
        $inventory=CargoInventory::where('id',$id)->first();
        $requesttype = 'show';
        return view('admin.add-inventory',compact('inventory','requesttype'));
    }
    public function edit($id,Request $request){
        $inventory=CargoInventory::where('id',$id)->first();
        $requesttype = 'edit';
        return view('admin.add-inventory',compact('inventory','requesttype'));
    }
    public function delete($id,Request $request){
        $inventory=CargoInventory::where('id',$id)->first();
        $inventory->delete();
        $requesttype = 'edit';
        return redirect()->back()->with('message','Record deleted Successfully');
    }
    public function search(Request $request){
        $inventory=CargoInventory::where('consignment',$request->consignment)->first();
        $requesttype = 'create';
        session()->flash('message', 'data found');
        return view('admin.add-inventory',compact('inventory','requesttype'));
    }

    public function store(Request $request){
        $user = Auth::user();
        $inventory = new CargoInventory();
        $inventory->consignment = $request->consignment;
        $inventory->sh_phone = $request->sh_phone;
        // $inventory->sh_phone = $request->sh_phone;
        $inventory->sh_name = $request->sh_name;
        $inventory->sh_address = $request->sh_address;
        $inventory->destination = $request->destination;

        $inventory->re_address = $request->re_address;
        $inventory->re_name = $request->re_name;
        $inventory->re_phone = $request->re_phone;
        $inventory->no_of_peices = $request->no_of_peices;
        $inventory->weight = $request->weight;

        $inventory->total_amout = $request->total_amout;
        $inventory->package_type = $request->package_type;
        $inventory->status = $request->status;
        $inventory->order_date = $request->booking_date;
        $inventory->expected_delivery_date = $request->delivery_date;
        $inventory->branch_id = $user->branch_id;
        $inventory->save();
        return view('admin.invoice',compact('inventory'));
    }
}
