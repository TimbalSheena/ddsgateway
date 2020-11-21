<?php

    namespace App\Traits;
    use Illuminate\Http\Response;
    Trait ApiResponser{

        public function successResponse($data, $code = Response::HTTP_OK)
        {
        //return response () -> json(['data' => $data],$code);
        // old code
        // return response()->json(['data' => $data, 'site' => 1], $code);
        // this code is changes since the message to return is already formatted by API responser of each site
            return response($data, $code)->header('Content-Type', 'application/json');
        }

        public function validResponse($data, $code = Response::HTTP_OK)
        {
            return response () -> json(['data' => $data],$code);
        }


        public function errorResponse($message,$code)
        {
           // return response()->json(['error'=>$message,'code'=>$code],$code);
           return response()->json(['error' => $message, 'code' => $code], $code);
        }

        public function errorMessage($message, $code)
            {
            return response($message, $code)->header('Content-Type', 'application/json');
            }
    }
?>