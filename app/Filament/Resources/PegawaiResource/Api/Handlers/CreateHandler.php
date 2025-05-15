<?php
namespace App\Filament\Resources\PegawaiResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\PegawaiResource;
use App\Filament\Resources\PegawaiResource\Api\Requests\CreatePegawaiRequest;

class CreateHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = PegawaiResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }

    /**
     * Create Pegawai
     *
     * @param CreatePegawaiRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreatePegawaiRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Create Resource");
    }
}