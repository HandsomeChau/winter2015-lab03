<?php

/**
 * Created by PhpStorm.
 * User: Edwin
 * Date: 15-01-21
 * Time: 12:24 PM
 */
class Guess extends Application
{

    // Constructor
    function __construct()
    {
        parent::__construct();
    }

    // Retrieve and display the quote for "dunno" link
    function index()
    {
        $this->data['pagebody'] = 'justone';

        $source = $this->quotes->get(4);

        $this->data = array_merge($this->data, $source);

        $this->render();
    }
}