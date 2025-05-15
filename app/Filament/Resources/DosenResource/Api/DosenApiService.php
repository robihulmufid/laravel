<?php
namespace App\Filament\Resources\DosenResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\DosenResource;
use Illuminate\Routing\Router;


class DosenApiService extends ApiService
{
    protected static string | null $resource = DosenResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];

    }
}
