<?php

namespace App\Services;

use App\Models\Image;

use App\Models\Recit;

/**
 * Class ImageService.
 */
class ImageService
{
    public function store($images, Recit $recit)
    {
        foreach ($images as $image) {
            $imageName = $this->moveImage($image);
            Image::create([
                "image" => $imageName,
                "recit_id" => $recit->id
            ]);
        }
    }

    public function moveImage($image)
    {
        $imageName = time() . "." . $image->extension();
        $image->move(public_path('images'), $imageName);
        return $imageName;
    }
}
