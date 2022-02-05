<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class category extends Controller
{
    // $productlist=[[1,'product1',10,'https://picsum.photos/200/200'],
    // [2,'product2',10,'https://picsum.photos/200/200'],
    // [4,'product3',14,'https://picsum.photos/200/200'],
    // [5,'product4',56,'https://picsum.photos/200/200'],
    // [6,'product5',67,'https://picsum.photos/200/200'],
    // [7,'product6',100,'https://picsum.photos/200/200'],
    // [8,'product7',1000,'https://picsum.photos/200/200'],
    // [9,'product8',10,'https://picsum.photos/200/200'],
    // [10,'product9',1,'https://picsum.photos/200/200'],
    // [11,'product11',123,'https://picsum.photos/200/200'],
    // [12,'product12',10,'https://picsum.photos/200/200'],];
    
    //
    public function getcat(){
      //  $category=[p1->'phone','mobile','electrics','Tvs'];
      $category=['category1','category2','category3','category4'];
        //$category=['mobile','tvs','laps','screens'];
        return view('welcome',['products'=>$category]);
    }
    public function getprod(){
        $productlist=[[1,'product1',10,'https://picsum.photos/200/200'],
        [2,'product2',10,'https://picsum.photos/200/200'],
        [4,'product3',14,'https://picsum.photos/200/200'],
        [5,'product4',56,'https://picsum.photos/200/200'],
        [6,'product5',67,'https://picsum.photos/200/200'],
        [7,'product6',100,'https://picsum.photos/200/200'],
        [8,'product7',1000,'https://picsum.photos/200/200'],
        [9,'product8',10,'https://picsum.photos/200/200'],
        [10,'product9',1,'https://picsum.photos/200/200'],
        [11,'product11',123,'https://picsum.photos/200/200'],
        [12,'product12',10,'https://picsum.photos/200/200'],
        
        
        
                     
    
     ];
        return view('product',['products'=>$productlist]);
    }
    public function back(){
        return view('product');
    }
    public function getone(){
        $productlist=[[1,'product1',10,'https://picsum.photos/200/200'],
        [2,'product2',10,'https://picsum.photos/200/200'],
        [4,'product3',14,'https://picsum.photos/200/200'],
        [5,'product4',56,'https://picsum.photos/200/200'],
        [6,'product5',67,'https://picsum.photos/200/200'],
        [7,'product6',100,'https://picsum.photos/200/200'],
        [8,'product7',1000,'https://picsum.photos/200/200'],
        [9,'product8',10,'https://picsum.photos/200/200'],
        [10,'product9',1,'https://picsum.photos/200/200'],
        [11,'product11',123,'https://picsum.photos/200/200'],
        [12,'product12',10,'https://picsum.photos/200/200'],
        
    ];
        
        return view("details",['products'=>$productlist]);}

}
