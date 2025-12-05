<?php
class View {
    public static function render($view, $data = []) {
        extract($data);
        require "../resources/views/$view.php";
    }
}
