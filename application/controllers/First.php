<?php

/**
 * Created by PhpStorm.
 * User: Edwin
 * Date: 15-01-21
 * Time: 10:13 AM
 */
class First extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->data['pagebody'] = 'justone';

        $source = $this->quotes->first();

        $this->data = array_merge($this->data, $source);

        $this->render();
    }

    function zzz()
    {
        $this->data['pagebody'] = 'justone';

        $source = $this->quotes->get(1);

        $this->data = array_merge($this->data, $source);

        $this->render();
    }
}