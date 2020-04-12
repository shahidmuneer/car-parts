<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class DashboardController extends Controller
{
    public function index()
    {
        $customer=\App\Customer::where("user_id","=",\Auth::user()->id)->first();

        $ads = \App\Ad::with(["make","model","type","media","parts","parts.part"])
        ->where("seller_id",$customer->id)
        ->paginate(5);
        // dd($ads);

        return view('userdashboard.ads', compact('ads'));
    }

    public function deleteAd($id){
        \App\Ad::where("id",$id)->delete();
        return redirect()->back()->with('success',
         'Item deleted successfully with id '.$id." !"); 
    }
    public function updateAdView($id){
        $customer=\App\Customer::where("user_id","=",\Auth::user()->id)->first();
        $ad = \App\Ad::with(["make","model","type","media","parts","parts.part"])
        ->where("seller_id",$customer->id)
        ->where("id",$id)
        ->first();
        return view("userdashboard.adUpdate")->with(["ad"=>$ad]);
    }
    public function updateAd($id,\App\Http\Requests\UpdateAdsRequest $request){
        
       
        $customer=\App\Customer::where("user_id","=",\Auth::user()->id)->first();

        $request["seller_id"]=$customer->id;
        // \App\Ad::where("id",$id)->update($request->all());
        \App\Ad::where("id",$id)->update([
            "title"=>$request->title,
            "make_id"=>$request->make_id,
            "model_id"=>$request->model_id,
            "type_id"=>$request->type_id,
            "ad_type"=>$request->ad_type,
            "price"=>$request->price,
            "negotiable"=>$request->negotiable,
            "description"=>$request->description
        ]);
        \App\AdPart::where("ad_id",$id)->delete();
        foreach($request->input("parts_ids") as $partid){
            $ad_part=\App\AdPart::create([
                "part_id"=>$partid,
                "ad_id"=>$id
            ]);
        }
        return redirect()->to("/my-ads")->with('success',
         "Ad updated successfully !"); 
    }
}
