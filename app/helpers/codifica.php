<?php

 namespace Helpers;

 use Intervention\Image\Facades\Image;

 class Codifica
 {

    public function paginar_coleccion($collection, $per_page = 10){
        $request = request();
        $total=count($collection);
        $current_page = $request->input("page") ?? 1;

        $starting_point = ($current_page * $per_page) - $per_page;

        $array = $collection->slice($starting_point, $per_page);

        $array = new Paginator($array, $total, $per_page, $current_page, [
          'path' => $request->url(),
          'query' => $request->query(),
        ]);

        return $array;

       }
 }
