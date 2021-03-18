<?php


namespace App\Services;


use Intervention\Image\Facades\Image;

class FileService
{
    /**
     * @param $file
     * @param string $path
     * @param null $size
     * @return string|null
     */
    public function upload($file, $path = '/images/', $size = null)
    {

        if ($file) {

            $fileName = md5(time()) . '.' . $file->clientExtension();
            $path =  public_path("$path");

            if ($size){
                $img = Image::make($file->getRealPath());
                $img->resize($size['w'], $size['h']);
                $img->save($path.$fileName);
            }else{
                $file->move($path, $fileName);
            }
            return $fileName;
        }

        return null;
    }

    /**
     * @param $files
     * @param string $path
     * @param string $keyName
     * @return array
     */
    public function multipleUpload($files, $path = '/images',$keyName= 'image')
    {
        $images = [];
        if (count($files) > 0) {
            foreach ($files as $file) {
                $fileName = md5(uniqid()) . '.' . $file->clientExtension();
                $file->move(public_path("$path"), $fileName);
                $images[]["$keyName"] = $fileName;
            }
        }
        return $images;
    }

    /**
     * @param $fileName
     * @param string $path
     * @return bool|null
     */
    public function remove($fileName, $path = '/images/')
    {
        $file = public_path("$path") . $fileName;
        if (file_exists($file)) {
            unlink($file);
            return true;
        }
        return null;
    }

    public function applyFilter(Image $image)
    {
        return $image->resize(220, 220, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
    }


}
