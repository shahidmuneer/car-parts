<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        
        
        // \Maatwebsite\Excel\Facades\Excel::import(new \App\Imports\Part,"excel.xlsx");
        // \Maatwebsite\Excel\Facades\Excel::import(new \App\Imports\Models,"excel2.csv");
    
//    $path=\Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
//    $handler = fopen($path."excel.csv","r"); 
//   $i=0;
//   $p_year=0;
//   $p_model="";
//   $p_make="";
//   $p_make_id="";
//    while($item=fgetcsv($handler,1000,",")) 
//    {
//        $year=$item[0]??0;
//        $make=$item[1]??0;
//        $model=$item[2]??0;
//        if($i>0)
//        {
//                 if($p_make!=$make)
//                 {
//                     echo $make." | ".$year." | ";
//                 $p_make=$make;
//                 $p_make_id=$make=\App\Make::create(["name"=>$make,"year"=>(int)$year]);
//                 }
//                 if($p_model!=$model){
//                     echo $model."<br>";
//                     $p_model=$model;
//                     \App\Models::create(["name"=>$model,"make_id"=>$p_make_id->id]);
//                 }

//        }
//        $i=2;
//    }
        // exit;
        return view('mainTable.index');
    }
    public function navigation(Request $request,$to){

        $data=[
            [
                "id"=>1,
                "title"=>"ANY Used Part For
                ANY Street or Dirt Bike
                ",
                "image"=>"https://autowise.com/wp-content/uploads/2018/03/Street-Legal-Dirt-Bike-KTM.jpg",
                "descriptionForSale"=>"View Parts Offered By Our Users
                <br>Find the parts you need or<br>
                Sell your parts <br>
                Both services are FREE",
                "descriptionForRequest"=>"View Part Requests or post
                 <br>a request for any part you need
                 <br>View requests and sell your parts
                 <br>Both services are FREE"
            ],
            [
                "id"=>2,
                "image"=>"https://www.thetruthaboutcars.com/wp-content/uploads/2014/10/1982-vaz-lada-21033-front-34.jpg",
                "title"=>"Automotive 1982 or Newer",
                "descriptionForSale"=>"View Parts Offered By Our Users
                <br>Find the parts you need or<br>
                Sell your parts <br>
                Both services are FREE",
                "descriptionForRequest"=>"View Part Requests or post
                 <br>a request for any part you need
                 <br>View requests and sell your parts
                 <br>Both services are FREE"
            ],
            [
                "id"=>3,
                "image"=>"https://s25180.pcdn.co/wp-content/uploads/2016/07/iStock_62824630_SMALL.jpg",
                "title"=>" Classic Used Part For
                ANY 1981 & Older Vehicle
                ",
                "descriptionForSale"=>"View Parts Offered By Our Users
                <br>Find the parts you need or<br>
                Sell your parts <br>
                Both services are FREE",
                "descriptionForRequest"=>"View Part Requests or post
                 <br>a request for any part you need<br>View requests and sell your parts
                 <br>Both services are FREE"
            ]
            ,
            [
                "id"=>4,
                "image"=>"/images/atv.png",
                "title"=>"Used Part For
                ANY Street or Dirt Bike                
                ",
                "descriptionForSale"=>"View Parts Offered By Our Users
                <br>Find the parts you need or<br>
                Sell your parts <br>
                Both services are FREE",
                "descriptionForRequest"=>"View Part Requests or post
                 <br>a request for any part you need<br>View requests and sell your parts
                 <br>Both services are FREE"
            ],
            [
                "id"=>5,
                "image"=>"/images/watercraft.png",
                "title"=>"Used Part For
                ANY Watercraft    
                ",
                "descriptionForSale"=>"View Parts Offered By Our Users
                <br>Find the parts you need or<br>
                Sell your parts <br>
                Both services are FREE",
                "descriptionForRequest"=>"View Part Requests or post
                 <br>a request for any part you need<br>View requests and sell your parts
                 <br>Both services are FREE"
            ],
            [
                "id"=>6,
                "image"=>"/images/snowbikes.png",
                "title"=>"Used Part For
                ANY Snowbike    
                ",
                "descriptionForSale"=>"View Parts Offered By Our Users
                <br>Find the parts you need or<br>
                Sell your parts <br>
                Both services are FREE",
                "descriptionForRequest"=>"View Part Requests or post
                 <br>a request for any part you need<br>View requests and sell your parts
                 <br>Both services are FREE"
            ]
        ];
        $item=$data[$to-1]??"";
      if(empty($item)){
          return redirect()->to("/");
      }
        // dd($item);
        return view("mainTable.navigation")->with(["to"=>$to,"data"=>$item]);
    }

    public function table(Request $request)
    { 
        $ads = \App\Ad::with(["make","model","type","media","parts",
        "parts.part"])
        ->paginate(10);
        
        return view('mainTable.search', compact("ads"));
    }

    public function adListTo(Request $request,$to)
    {
        

        return view('mainTable.adList')->with(["vehicle"=>$to]);
    } 
    public function adList(Request $request)
    {
        return view('mainTable.adList');
    }
    // 
    public function store(\App\Http\Requests\StoreAdsRequest $request)
    {
        
        DB::beginTransaction();
        if (!\Auth::check()){
            $request["password"]=bcrypt($request->password);
            $user=\App\User::create($request->all());
            $request["user_id"]=$user->id;
            $customer=\App\Customer::create($request->all());
        }else{
            $customer=\App\Customer::where("user_id","=",\Auth::user()->id)->first();
        }
        $request["seller_id"]=$customer->id;
        $ad=\App\Ad::create($request->all());
        foreach($request->input("parts_ids") as $partid){
            $ad_part=\App\AdPart::create([
                "part_id"=>$partid,
                "ad_id"=>$ad->id
            ]);
        }
        $files = $request->file('files');
        if($request->hasFile('files'))
        {
            foreach ($files as $file) {
                $name=$file->getClientOriginalName();
                $file->move(public_path().'/uploads/', $name);  
                $data[]=[
                    "ad_id"=>$ad->id,
                    "link"=>"/uploads/".$name
                ];
            }
        }
        \App\AdMedia::where("ad_id",$ad->id)->delete();
        if(!empty($data)){
            \App\AdMedia::insert($data);
        }
        DB::commit();
        // $request->session()->put('userData', $customer);
        \Auth::login($user);

        return redirect('/my-ads')->with('success', ['Your ad is live you can check its status here !']); 
    }





    public function requestListTo(Request $request,$to)
    {
        

        return view('mainTable.requestList')->with(["vehicle"=>$to]);
    } 
    public function requestList(Request $request)
    {
        return view('mainTable.requestList');
    }
    // \App\Http\Requests\StoreAdsRequest
    public function storeRequest(Request $request)
    {
        
        \DB::beginTransaction();
        if (!\Auth::check()){
            $request["password"]=bcrypt($request->password);
            $user=\App\User::create($request->all());
            $request["user_id"]=$user->id;
            $customer=\App\Customer::create($request->all());
        }else{
            $customer=\App\Customer::where("user_id","=",\Auth::user()->id)->first();
        }
        $request["seller_id"]=$customer->id;
        $request["type"]="request";
        $ad=\App\Ad::create($request->all());
        foreach($request->input("parts_ids") as $partid){
            $ad_part=\App\AdPart::create([
                "part_id"=>$partid,
                "ad_id"=>$ad->id
            ]);
        }
        $files = $request->file('files');
        if($request->hasFile('files'))
        {
            foreach ($files as $file) {
                $name=$file->getClientOriginalName();
                $file->move(public_path().'/uploads/', $name);  
                $data[]=[
                    "ad_id"=>$ad->id,
                    "link"=>"/uploads/".$name
                ];
            }
        }
        \App\AdMedia::where("ad_id",$ad->id)->delete();
        if(!empty($data)){
            \App\AdMedia::insert($data);
        }
        \DB::commit();
        // $request->session()->put('userData', $customer);
        \Auth::login($user);

        return redirect('/my-ads')->with('success', ['Your ad is live you can check its status here !']); 
    }

    public function category(Category $category)
    {
        $companies = Company::join('category_company', 'companies.id', '=', 'category_company.company_id')
            ->where('category_id', $category->id)
            ->paginate(9);
        return view('mainTable.category', compact('companies', 'category'));
    }

    public function company(Company $company)
    {
        return view('mainTable.company', compact ('company'));
    }
}
