<?php

function active_menu($controller){
    $class=get_instance()->uri->segment(1);
    return ($class==$controller) ? 'active' : '';
}

?>