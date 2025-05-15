<?php
namespace App\Filament\Resources\PegawaiResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\PegawaiResource;
use Illuminate\Routing\Router;


class PegawaiApiService extends ApiService
{
    protected static string | null $resource = PegawaiResource::class;

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
