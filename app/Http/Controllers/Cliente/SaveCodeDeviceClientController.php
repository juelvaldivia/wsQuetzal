<?php

namespace App\Http\Controllers\Cliente;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// extends
use App\Http\Controllers\Controller;

// responses
use App\Http\Responses\Response as ResponseJson;
// responses
use App\Http\Resources\Auth\VerifyCodePltformResource;

// Facades
use App\Utils\JwtToken;
// Utils

//Models
use Illuminate\Support\Facades\Hash;
// requests
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\Auth\NewCodePlatformRequest;
// resource
use Validator;

class SaveCodeDeviceClientController extends Controller
{

    public function __construct()
    {
        $this->result = new ResponseJson();
    }
    private $message = 'código incorrecto';


        //
    /**
     * Created by Ede Nunez
     *
     * Modify by Ede Nunez
     * Date: 11 Jun 2020
     * Description: Guarda el codigo de activacion de dispositivo de un cliente
     */
    public function __invoke(NewCodePlatformRequest $request)
    {
    
        $code = $request->input('codigo');
        dd($code);

        // se define la respuesta de error
        $result = $this->result->build($this->STATUS_ERROR, $this->NO_RESULT, $this->NO_TOTAL, $this->message);
        if (!$query)
            return response()->json($result, Response::HTTP_UNAUTHORIZED);
        
          
       
        // construye respuesta correcta
        $result = $this->result->build($this->STATUS_OK, $this->NO_RESULT,$this->NO_TOTAL, "Código encontrado");

        // response el resultado con su codigo Http
        return response()->json($result, Response::HTTP_OK);
    }

/**
     * @OA\Post(
     *     path="/admin/cliente/SaveCodeDevice",
     *     tags={"Cliente"},
     *     summary="Guarda codigo en plataforma",
     *     operationId="SaveCodeDevice",
     *     @OA\Response(
     *         response=200,
     *         description="Exito",
     *         @OA\JsonContent(ref="#/components/schemas/SaveCodeDeviceResponse")
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Codigo incorrecto",
     *         @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
     *     ),
     *     @OA\RequestBody(
     *         description="Input data format",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="codigo",
     *                     description="codigo ",
     *                     type="string",
     *                 )
     *             )
     *         )
     *     ),
     *     security={
     *         {"authorization": {}}
     *     }
     * )
     */

    /**
     * @OA\Schema(
     *   schema="SaveCodeDeviceResponse",
     *   @OA\Property(
     *     property="status",
     *     type="boolean"
     *   ),
     *   @OA\Property(
     *     property="message",
     *     type="string"
     *   )
     * )
     */


}