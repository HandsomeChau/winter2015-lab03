<?php

/**
 * Created by PhpStorm.
 * User: Edwin
 * Date: 15-01-21
 * Time: 12:32 PM
 */
class Bingo extends Application
{

    // Constructor
    function __construct()
    {
        parent::__construct();
    }

    // Retrieve and display the quote for "wise/bingo" link
    function index()
    {
        $this->data['pagebody'] = 'justone';

        $source = $this->quotes->get(5);

        $this->data = array_merge($this->data, $source);

        $this->render();
    }

    // Retrieve and display the quote for "comp4711/wisdom" link
    function wisdom()
    {
        $this->data['pagebody'] = 'justone';

        $source = $this->quotes->get(6);

        $this->data = array_merge($this->data, $source);

        $this->render();
    }
}