<?php

namespace App\Http;

class Unlink
{
    public static function file($folder, $filename): void
    {
        $file = public_path('storage/uploaded/' . $folder . '/'. $filename);

        if(file_exists($file) && $filename != '')
        {
            unlink($file);
        }
    }

    public static function multi($folder, $files): void
    {
        if(!is_array($files)) return;

        foreach($files as $file)
        {
            self::file($folder, $file);
        }
    }

    public static function pdf($filename): void
    {
        self::file('files/pdf', $filename);
    }

    public static function multiPdf($files): void
    {
        if(!is_array($files)) return;

        foreach($files as $file)
        {
            self::pdf($file);
        }
    }

    public static function byExtension($path, $extension): array
    {
        $files = glob($path . '/*.' . $extension);

        return array_map('unlink', $files);
    }
}
