<?php
namespace App\Filament\Resources\DosenResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Dosen;

/**
 * @property Dosen $resource
 */
class DosenTransformer extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->resource->toArray();
    }
}
