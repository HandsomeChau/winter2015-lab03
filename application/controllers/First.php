<?php

/**
 * Created by PhpStorm.
 * User: Edwin
 * Date: 15-01-21
 * Time: 10:13 AM
 */
class First extends Application
{

    // Constructor
    function __construct()
    {
        parent::__construct();
    }

    // Retrieve and display the quote for "first" link on nav bar
    function index()
    {
        $this->data['pagebody'] = 'justone';

        $source = $this->quotes->first();

        $this->data = array_merge($this->data, $source);

        $this->render();
    }

    // Retrieve and display the quote for "zzz" link
    function zzz()
    {
        $this->data['pagebody'] = 'justone';

        $source = $this->quotes->get(1);

        $this->data = array_merge($this->data, $source);

        $this->render();
    }

    // Retrieve and display the quote for "lock/em/up" link
    function gimme()
    {
        $this->data['pagebody'] = 'justone';

        $source = $this->quotes->get(3);

        $this->data = array_merge($this->data, $source);

        $this->render();
    }
}