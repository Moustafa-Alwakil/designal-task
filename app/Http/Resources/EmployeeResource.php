<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Employee */
class EmployeeResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'manger_id' => $this->manger_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'role_id' => $this->role_id,
            'managed_employees' => self::collection($this->whenLoaded('managed_employees')),
            'manager' => new EmployeeResource($this->whenLoaded('manager')),
        ];
    }
}
