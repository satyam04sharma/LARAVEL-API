<?php

namespace App\Http\Resources;
use App\Model\Review;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return Review::all();
        return [
            'customer'=> $this->customer,
            'Body'=> $this->review,
            'star' => $this->star
        ];
    }
}
