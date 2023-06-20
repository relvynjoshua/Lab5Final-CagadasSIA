<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class siteService {
     use ConsumesExternalService;
     /*
     *@var string

     */
     public $secret;
     public $baseUri;

     public function __construct() {
          $this->baseUri = config('services.site1.base_uri');
          $this->secret = config('services.site1.secret');
     }


     /*
     *@return string
     */

     public function showall() {
          return $this->performRequest('GET', 'api/users');
     }

     public function showUser($id) {
          return $this->performRequest('GET', "api/users/{$id}");
     }


     public function addUser($data) {
          return $this->performRequest('POST', 'api/users/', $data);
     }

     public function updateUser($data, $id) {
          return $this->performRequest('PATCH', "api/users/{$id}", $data);
     }

     public function deleteUser($id) {
          return $this->performRequest('DELETE', "api/users/{$id}");
     }

     public function index() {
          return $this->performRequest('GET', 'api/userjob');
     }

     public function show($id) {
          return $this->performRequest('GET', "api/userjob/{$id}");
     }
}