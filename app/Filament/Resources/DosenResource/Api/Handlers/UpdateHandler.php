<?php
namespace App\Filament\Resources\DosenResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\DosenResource;
use App\Filament\Resources\DosenResource\Api\Requests\UpdateDosenRequest;

class UpdateHandler extends Handlers {
    public static string | null $uri = '/{id}';
    public static string | null $resource = DosenResource::class;
    public static bool $public = true;
    public static function getMethod()
    {
        return Handlers::PUT;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }


    /**
     * Update Dosen
     *
     * @param UpdateDosenRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(UpdateDosenRequest $request)
    {
        $id = $request->route('id');

        $model = static::getModel()::find($id);

        if (!$model) return static::sendNotFoundResponse();

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Update Resource");
    }
}