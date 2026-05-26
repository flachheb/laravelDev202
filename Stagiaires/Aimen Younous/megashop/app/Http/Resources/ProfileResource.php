<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $values = parent::toArray($request);
        unset($values['deleted_at']);
        return $values;
    }
    public static function collection($resource)
    {
        $values = parent::collection($resource)->additional([
            'count'=>$resource->count()
        ]);
        return $values ;
    }
}
