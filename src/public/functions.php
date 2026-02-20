<?php

function getBlogs(){

  $blogs = [];

  // dataフォルダのjson全部取得
  $files = glob(__DIR__ . "/data/*.json");

  foreach($files as $file){

    $json = file_get_contents($file);
    $data = json_decode($json, true);

    $blogs[] = $data;
  }

  return $blogs;
}