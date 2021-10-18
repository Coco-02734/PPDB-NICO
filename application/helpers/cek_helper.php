<?php

function is_logged_in()
{
    $meong = get_instance();
    if (!$meong->session->userdata('username')) {
        redirect('awal');
    }
}
