<?php
namespace App\Filament\Resources\DosenResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\DosenResource;
use App\Filament\Resources\DosenResource\Api\Requests\CreateDosenRequest;

class CreateHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = DosenResource::class;
    public static bool $public = true;
    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }

    /**
     * Create Dosen
     *
     * @param CreateDosenRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateDosenRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Create Resource");
    }
}