<?php

class Base_Controller extends Controller {

    public function __construct()
    {
        //Assets
        Asset::add('jquery', 'js/vendor/jquery-1.9.0.min.js');
        Asset::add('bootstrap-js', 'js/vendor/bootstrap.min.js');
        Asset::add('modernizr', 'js/vendor/modernizr-2.6.2-respond-1.1.0.min.js');
        Asset::add('select2', 'js/vendor/select2.min.js');
        Asset::add('bootstrap-css', 'css/bootstrap.min.css');
        Asset::add('bootstrap-css-responsive', 'css/bootstrap-responsive.min.css', 'bootstrap-css');
        Asset::add('select2-css', 'css/select2.css');
        Asset::add('style', 'css/style.css');
        parent::__construct();
    }

    /**
     * Catch-all method for requests that can't be matched.
     *
     * @param  string    $method
     * @param  array     $parameters
     * @return Response
     */
    public function __call($method, $parameters)
    {
        return Response::error('404');
    }

}
