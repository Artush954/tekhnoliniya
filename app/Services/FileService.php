<?php


namespace App\Services;


class FileService
{
    public function upload($file,$path = '/images')
    {

        if ($file){
            $fileName = md5(time()) . '.' . $file->clientExtension();
            $file->move(public_path("$path"), $fileName);
            return $fileName;
        }

        return null;
    }

    public function remove($fileName,$path = '/images/')
    {
        $file = public_path("$path") .$fileName;
        if (file_exists($file)) {
            unlink($file);
            return true;
        }
        return null;
    }
}
