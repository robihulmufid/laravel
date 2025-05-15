<?php
namespace App\Filament\Resources\PegawaiResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Pegawai;

/**
 * @property Pegawai $resource
 */
class PegawaiTransformer extends JsonResource
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
