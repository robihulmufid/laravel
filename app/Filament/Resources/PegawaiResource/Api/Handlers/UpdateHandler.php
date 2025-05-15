<?php
namespace App\Filament\Resources\PegawaiResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\PegawaiResource;
use App\Filament\Resources\PegawaiResource\Api\Requests\UpdatePegawaiRequest;

class UpdateHandler extends Handlers {
    public static string | null $uri = '/{id}';
    public static string | null $resource = PegawaiResource::class;

    public static function getMethod()
    {
        return Handlers::PUT;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }


    /**
     * Update Pegawai
     *
     * @param UpdatePegawaiRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(UpdatePegawaiRequest $request)
    {
        $id = $request->route('id');

        $model = static::getModel()::find($id);

        if (!$model) return static::sendNotFoundResponse();

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Update Resource");
    }
}