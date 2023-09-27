<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name'=>$this->name,
            'desc'=>$this->detail,
            'price'=>$this->price,
            'discount'=>$this->discount,
            'total_price'=>(1-($this->discount/100)) *$this->price ,
            'stock'=>$this->stock ==0 ?"Out of stock" :$this->stock ,
            'rating'=>$this->reviews->count() >0 ?round($this->reviews->sum('star')/$this->reviews->count()) : '',
            'href'=>[
                'reviews'=>route('reviews.index', $this->id)
            ],
        ] ;
    }
}
