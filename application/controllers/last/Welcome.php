<?php

/**
 * Created by PhpStorm.
 * User: Edwin
 * Date: 15-01-21
 * Time: 10:56 AM
 */
class Welcome extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->data['pagebody'] = 'justone';

        $source = $this->quotes->last();

        $this->data = array_merge( $this->data, $source );

        $this->render();
    }
}

/* End of file Welcome.php */
/* Location: application/controllers/last/Welcome.php */