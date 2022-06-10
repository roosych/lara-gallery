<?php


namespace App\Services;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageService {

    function all() {
        $images = DB::table('images')->select('*')->get();
        $myImages = $images->all();

        return $myImages;
    }

    function one ($id) {
        $image = DB::table('images')->where('id', $id)->first();

        return $image;
    }

    function update ($id, $newImage) {
        $image = DB::table('images')->where('id', $id)->first();
        Storage::delete($image->image);

        $filename = $newImage->store('uploads');

        DB::table('images')->where('id', $id) ->update(['image' => $filename]);
    }

    function add ($image) {
        DB::table('images')->insert(
            ['image' => $image->store('uploads')]
        );
    }

    function delete ($id) {
        $image = $this->one($id);
        Storage::delete($image->image);

        DB::table('images')->where('id', $id)->delete();
    }


}