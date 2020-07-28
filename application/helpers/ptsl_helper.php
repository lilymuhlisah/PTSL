<?php

function is_logged_in()
{
    $ci = get_instance();

    if (!$ci->session->userdata('username')) {
        redirect('login');
    }
    // else {
    // $id_role = $ci->session->userdata('id_role');
    // $menu = $ci->uri->segment(1);

    // $queryMenu = $ci->db->get_where('u_menu', ['menu' => $menu])->row_array();

    // $id_menu = $queryMenu['id_menu'];

    // $userAccess = $ci->db->get_where('u_access_menu', [
    //     'id_role' => $id_role,
    //     'id_menu' => $id_menu
    // ]);

    // if ($userAccess->num_rows() < 1) {
    //     redirect('login/blocked');
    // }
    // }
}
