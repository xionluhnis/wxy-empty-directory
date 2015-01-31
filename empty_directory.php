<?php

include_once ROOT_DIR . '/files.php';

class Empty_Directory {

    public function after_404_load_content(&$file, &$content) {
        if(Text::ends_with($file, '/index' . CONTENT_EXT)){
            $dir = str_replace('/index' . CONTENT_EXT, '', $file);
            if(is_dir($dir)){
                $content = "Directory";
                return true;
            }
        } elseif (Text::ends_with($file, CONTENT_EXT)) {
            $dir = substr($file, 0, -strlen(CONTENT_EXT));
            if(is_dir($dir)){
                $content = "Directory";
                return true;
            }
        }
        return false;
    }

}

?>
