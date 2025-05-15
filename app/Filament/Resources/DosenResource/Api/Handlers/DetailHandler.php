<?php

namespace App\Filament\Resources\DosenResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\DosenResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use App\Filament\Resources\DosenResource\Api\Transformers\DosenTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = DosenResource::class;
    public static bool $public = true;

    /**
     * Show Dosen
     *
     * @param Request $request
     * @return DosenTransformer
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

        return new DosenTransformer($query);
    }
}
