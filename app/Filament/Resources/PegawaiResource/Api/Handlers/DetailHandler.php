<?php

namespace App\Filament\Resources\PegawaiResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\PegawaiResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use App\Filament\Resources\PegawaiResource\Api\Transformers\PegawaiTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = PegawaiResource::class;


    /**
     * Show Pegawai
     *
     * @param Request $request
     * @return PegawaiTransformer
     */
    public function handler(Request $request)
    {
        $id = $request->route('id');
        
        $query = static::getEloquentQuery();

        $query = QueryBuilder::for(
            $query->where(static::getKeyName(), $id)
        )
            ->first();

        if (!$query) return static::sendNotFoundResponse();

        return new PegawaiTransformer($query);
    }
}
