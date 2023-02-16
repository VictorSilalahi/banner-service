<?php

use Exception\ForbiddenException;
use Exception\NotFoundException;

use Ramsey\Uuid\Uuid;

$app->get("/banners", function ($request, $response, $arguments) {

    $db = getDB();
    $sql="SELECT * FROM banners WHERE module_type ='banner' ORDER BY id ASC";
    $result = pg_query($db, $sql);
    $resource = array();
    while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        array_push($resource, array("id"=>(int)$row["id"], "uuid"=>$row['uuid'], "image_url"=>$row['image_url'], "caption"=>$row['caption'], "launch_url"=>$row['launch_url'], "description"=>$row['description'], "module_type"=>$row['module_type'], "in_apps"=>$row['in_apps']));
    }
    $db = NULL;
    $data["status"]=200;
    $data["error"]=false;
    $data["messsage"]="Ok.";
    $data["data"] = $resource;
  
    return $response->withStatus(200)
        ->withHeader("Content-Type", "application/json")
        ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));

});

$app->get("/banner/{bannerId}", function ($request, $response, $arguments) {

    $db = getDB();
    $uuid = $arguments['bannerId'];
    $sql="SELECT * FROM banners WHERE uuid='".$uuid."' ORDER BY id ASC";
    $result = pg_query($db, $sql);
    while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        $resource[] = $row;
    }
    $db = NULL;
    $data["status"]=200;
    $data["error"]=false;
    $data["messsage"]="Ok.";
    $data["data"] = $resource;
  
    return $response->withStatus(200)
        ->withHeader("Content-Type", "application/json")
        ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));

});

$app->post("/banner", function ($request, $response, $arguments) {

    $temp = Uuid::uuid4();
    $uuid = $temp->toString();

    $body = $request->getParsedBody();

    $image_url = $body['image_url'];
    $caption = $body['caption'];
    $launch_url = $body['launch_url'];
    $description = $body['description'];
    $module_type = $body['module_type'];

    $db = getDB();
    $sql="INSERT INTO banners (uuid, image_url, caption, launch_url, description, module_type) VALUES('$uuid', '$image_url', '$caption', '$launch_url', '$description', '$module_type')";
    pg_query($db, $sql);
    $db = NULL;
    $data["status"]=200;
    $data["error"]=false;
    $data["messsage"]="Ok.";
    $data["data"] = "new banner has been added.";
  
    return $response->withStatus(200)
        ->withHeader("Content-Type", "application/json")
        ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));

});

$app->put("/banner", function ($request, $response, $arguments) {

    $body = $request->getParsedBody();
    $bannerId = body["bannerId"];
    $image_url = $body['image_url'];
    $caption = $body['caption'];
    $launch_url = $body['launch_url'];
    $description = $body['description'];
    $module_type = $body['module_type'];

    $db = getDB();
    $sql="UPDATE banners SET image_url = '$image_url', caption = '$caption', launch_url = '$launch_url', description = '$description', module_type = '$module_type' WHERE uuid = '$bannerId'";
    pg_query($db, $sql);
    $db = NULL;
    $data["status"]=200;
    $data["error"]=false;
    $data["messsage"]="Ok.";
    $data["data"] = "banner has been updated.";
  
    return $response->withStatus(200)
        ->withHeader("Content-Type", "application/json")
        ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));

});

$app->delete("/banner/{bannerId}", function ($request, $response, $arguments) {

    $db = getDB();
    $uuid = $arguments['bannerId'];
    $sql="DELETE FROM banners WHERE uuid='".$uuid."'";
    pg_query($db, $sql);
    $db = NULL;
    $data["status"]=200;
    $data["error"]=false;
    $data["messsage"]="Ok.";
    $data["data"] = "banner has been deleted.";
  
    return $response->withStatus(200)
        ->withHeader("Content-Type", "application/json")
        ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));

});