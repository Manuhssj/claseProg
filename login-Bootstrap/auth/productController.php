<?php
session_start();
if(isset($_POST["action"])){
  switch($_POST["action"]){
    case 'create':
      $name=strip_tags($_POST['name']);
      $slug=strip_tags($_POST['slug']);
      $description=strip_tags($_POST['description']);
      $features=strip_tags($_POST['features']);
      $brand_id=strip_tags($_POST['brand_id']);

      $controladorNew = new ProductController();

      $controladorNew -> createProduct($name,$slug,$description,$features,$brand_id);
      break;

  }
}

class ProductController {

    
    public function chargeProducts($token){
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer $token",
            'Cookie: XSRF-TOKEN=eyJpdiI6Imora0ZmRUprRGpzUVNES0w2clZYc0E9PSIsInZhbHVlIjoiZDFYeTVZNldQOTdsRUJyK0NGb0dQNEM1VmlmNjdYc2dpMFhRZS90Ykd3K0IyTEhTcnpTeW0yendDRGVoZDlOdVJ0Z0FRa0NMcVFhenZWTlAwa2dkKzNoLzJWQUlaQnpNWGQvaTZ2dlZlZ3pUQnAxKzIzNEM2cXRjZHVkY1M0NlUiLCJtYWMiOiI3YjNiMTQyNGJhNDZiN2QzZjVlNjA2NWY2YmU3MzkxNzljMzhiMjQxY2YxMjIzMjU0M2U4OWU1NDhjYjM4NWNhIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IndKZi9YYnd4bi9NVDFZWWcxUEJMVHc9PSIsInZhbHVlIjoicVcvcUxUL0JTVk5VRnVsQUFwUisrdHk1Q1EzVDBhdUcrVS9teEkzTjU1VlpmcTRVS2VlT1c1U2lqa3FoTDRKVG5sVGtCUVNUSXN6SVhBL2w5Yi9EVU96NWJGUThzL2JSQWZPODVaeFhVeDE1Snk3RGtxZS9USzdHQVRxWmRveG0iLCJtYWMiOiIxYTgzMTk3MDAyMzIzMGZmMWZmMjA5Y2ZiMjIwNWU5MmZiMDhmYzNjMmNjNjhiOWIxNzhhNTU4ODZlY2FmN2M0IiwidGFnIjoiIn0%3D'
          ),
        ));
        
        $response = curl_exec($curl);
        
        
        curl_close($curl);
        $response = json_decode($response, true);
        
        return $response["data"];

    }


    public function createProduct($name,$slug,$description,$features,$brand_id){

      $curl = curl_init();
      $token = $_SESSION["token"];
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('name' => $name,'slug' => $slug,'description' => $description, 'slug' => $features,'brand_id' => $brand_id,'cover'=> ''),
        CURLOPT_HTTPHEADER => array(
          "Authorization: Bearer $token"
        ),
      ));

      $response = curl_exec($curl);
      curl_close($curl);
      $response= json_decode($response);
      
    }
}



?>