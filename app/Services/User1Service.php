<?php

    namespace App\Services;
    use App\Traits\ConsumesExternalService;
    class User1Service{
    use ConsumesExternalService;
    /**
     * The base uri to consume the User1 Service
     * @var string
     */
    public $baseUri;
    public function __construct()
    {
    $this->baseUri =config('services.users1.base_uri');
    }

    public function obtainUsers1()
    {
    return $this->performRequest('GET','/users'); //<—this code will call the GETlocalhost:8000/users (our site1)
    }
        /**
     * Create one user using the User1 service
     * @return string
     */
    public function createUser1($data)
    {
    return $this->performRequest('POST', '/users', $data);
    }

    public function obtainUser1($id)
    {
        return $this->performRequest('GET', "/users/{$id}");
    }

    public function editUser1($data, $id)
    {
    return $this->performRequest('PUT',"/users/{$id}", $data);
    }
    public function deleteUser1($id)
    {
    return $this->performRequest('DELETE', "/users/{$id}");
    }
}

