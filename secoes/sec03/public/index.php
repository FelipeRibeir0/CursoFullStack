<?php 

require "bootstrap.php";
try{

    $data = router();

    if(isAjax())
    {
        die();
    }
    
    if(!isset($data['data']))
    {
        throw new Exception("O índice data está faltando");
    }

    if(!isset($data['data']['title']))
    {
        throw new Exception("O título está faltando");
    }
    
    if(!isset($data['view']))
    {
        throw new Exception("O índice view está faltando");
    }
    
    if(!file_exists(VIEWS.$data['view'].'.php')){
        throw new Exception("A view {$data['view']} não existe");
    }
    
    $templates = new League\Plates\Engine(VIEWS);

    echo $templates->render($data['view'], $data['data']);

}catch(Exception $e){
var_dump($e->getMessage());
}
