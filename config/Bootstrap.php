<?php
namespace Module\config;
class Bootstrap
{

    public static function boot()
    {
        spl_autoload_register([new self, 'autoload']);
    }

    private function autoload(string $className)
    {
        $file   =  str_replace(['\\','Module'],['/','..'],$className).'.php';
        echo $file;
        if (is_file($file)) {
            require_once $file;
        } else {
            throw \Exception("file don t exitst");
        }
    }
}

Bootstrap::boot();