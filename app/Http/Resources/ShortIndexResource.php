<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ShortIndexResource extends JsonResource
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
            'description' => $this->description,
            'identify' => $this->uuid,
            'url' => $this->url,
            'creator_identify' => $this->creator_identify,
            'date_created' => Carbon::make($this->created_at)->format('d/m/Y')
        ];
    }
}
