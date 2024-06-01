<?php

class AppstoreScreenshoot_ApplicationController extends Application_Controller_Default {

    public function viewAction() {
        $this->loadPartials();
    }

    public function loadAction(){
        $payload = [
            'title' => __('AppstoreScreenshoot'),
            'icon' => 'fa-image',
        ];

        $this->_sendJson($payload);
    }
}