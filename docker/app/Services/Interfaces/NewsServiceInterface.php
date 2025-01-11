<?php
namespace App\Services\Interfaces;
use Illuminate\Http\Request;
 interface NewsServiceInterface
 {
     public function getAll();
     public function getById(int $id);


     public function update(Request $request );


     public function create(array $data);


 }
