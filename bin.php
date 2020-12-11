<?php
    function GetFiles($path) {
        $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));

        $files = [];

        foreach ($rii as $file) {
            $pathname = ltrim($file->getPathname(), '.');
            $hidden = $pathname[1] === '.' || $file->getFilename()[0] === '.';

            if ($file->isDir()){
                continue;
            }

            if ($hidden && strpos($file, "htaccess") === false) {
                continue;
            }

            $files[$pathname] = date('Y-m-d h:i:s', stat('.' . $pathname)['mtime']);
        }

        return $files;
    }
?>
