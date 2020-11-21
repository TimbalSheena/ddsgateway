<?php

    namespace App\Http\Controllers;
   // use App\Models\User;  // <-- your model
    use Illuminate\Http\Response;
    use App\Traits\ApiResponser;  // <-- use to standardized our code for api response
   use Illuminate\Http\Request; 
  // use App\Http\Requests\Request;
  use App\Services\User2Service;


  Class User2Controller extends Controller {
    use ApiResponser;
    
    //private $request;

            /**
         * The service to consume the User1 Microservice
         * @var User2Service
         */
        public $user2Service;
        /**
         * Create a new controller instance
         * @return void
         */
        public function __construct(User2Service $user2Service){
          $this->user2Service = $user2Service;
     }


// Display all the users
     public function index()
     {
     //
     return $this->successResponse($this->user2Service->obtainUsers2());
     }

     public function add(Request $request )
     {
         return $this->successResponse($this->user2Service->createUser2($request->all(),Response::HTTP_CREATED));
     }

     public function show($id)
     {
     return $this->successResponse($this->user2Service->obtainUser2($id));
     }
     public function update(Request $request,$id)
     {
     return $this->successResponse($this->user2Service->editUser2($request->all(),$id));
     }
     public function delet($id)
     {
     return $this->successResponse($this->user2Service->deleteUser2($id));
     }
}
