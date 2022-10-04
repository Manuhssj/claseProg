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
      $image = $controladorNew->chargeImg($_FILES['uploadedfile']);
      $controladorNew -> createProduct($name,$slug,$description,$features,$brand_id, $image);
      break;

  }
}

class ProductController {

    public function chargeImg($img){
      
      $target_path  = "../img";
      $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
      if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
          echo "El archivo ".  basename( $_FILES['uploadedfile']['name']). 
          " ha sido subido";
      } else{
          echo "Ha ocurrido un error, trate de nuevo!";
      }
      return $target_path;
    }

    public function createProduct($name,$slug,$description,$features,$brand_id, $image){

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
        CURLOPT_POSTFIELDS => array('name' => $name,'slug' => $slug,'description' => $description, 'features' => $features,'brand_id' => $brand_id,'cover'=> new CURLFile($image)),
        CURLOPT_HTTPHEADER => array(
          "Authorization: Bearer $token"
        ),
      ));

      $response = curl_exec($curl);
      curl_close($curl);
      $response= json_decode($response);
      
    }
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
            "Authorization: Bearer $token"
            
          ),
        ));
        
        $response = curl_exec($curl);
        
        
        curl_close($curl);
        $response = json_decode($response, true);
        
        return $response["data"];

    }
    public function chargeBrands(){
      $curl = curl_init();


      $token = $_SESSION["token"];
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
          "Authorization: Bearer $token"
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);


      $response = json_decode($response);
      if( isset($response->code) && $response->code > 0) {
          return $response->data;
      }else{
          return array();
      }

    }


    public function details($slug){
      $curl = curl_init();
      $token = $_SESSION["token"];
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://crud.jonathansoto.mx/api/products/slug/$slug",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
          "Authorization: Bearer $token"
        ),
      ));
      
      $response = curl_exec($curl);
      curl_close($curl);
      $response = json_decode($response);
      return $response -> data;

      
      
      
    }

}



?>