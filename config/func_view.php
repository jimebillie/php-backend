<?php
function view($view){
    return require_once(get_path_view($view));
}
