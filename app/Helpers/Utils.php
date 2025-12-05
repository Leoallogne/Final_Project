<?php

class Utils {

    public static function base_url($path = "")
    {
        $scriptName = str_replace("/index.php", "", $_SERVER["SCRIPT_NAME"]);
        $base = rtrim($scriptName, "/");

        return $base . ($path ? "/$path" : "");
    }
}
