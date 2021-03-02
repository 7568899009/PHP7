<?php
namespace Exception\Test\Config;
class ClassAutoLoad
{


    private function autoload(string $className)
    {
        $file = str_replace('\\','/', $className) . '.php';
        $file = '..' . substr($file, '14');
        if (!is_file($file)) {
            throw new \Exception("file don't exists");
        }
        require $file;

    }


    public static function boot()
    {
        spl_autoload_register([new self, 'autoload',]);
    }

}

ClassAutoLoad::boot();