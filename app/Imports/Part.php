<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Part implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        for($i=1;$i<13;$i++){
            foreach($collection as $item){
                // echo "<pre>";
                // print_r(!empty($item[0])?$item[0]:"");
                // echo "</pre>";
                
            \App\Part::create([
                "parent_id"=>$i,
                "name"=>!empty($item[$i-1])?$item[$i-1]:""
                ]);
            }
            // 
            // exit;
        }
    }
}
