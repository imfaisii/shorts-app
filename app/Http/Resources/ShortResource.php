<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ShortResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->country->name,
            'lat' => $this->country->lat,
            'long' => $this->country->long,
            'quotes' => $this->country->quotes,
            'thumbnail' => request()->root() . Storage::url($this->thumbnail),
            'link' => request()->root() . Storage::url($this->link),
        ];
    }
}
