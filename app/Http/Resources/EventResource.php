<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'event_name' => $this->event_name,
          'date' => $this->date,
          'artist' => new ArtistResource($this->artist),
          'image' => $this->image
        ];
    }
}
