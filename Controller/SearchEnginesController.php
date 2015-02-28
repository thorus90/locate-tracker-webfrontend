<?php

class SearchEnginesController extends AppController
{
    public $helpers = array(
        'Form' => array(
              'className' => 'BootstrapForm'
        )
    );

    public $components = array(
        'Session',
        'Auth',
    );
}
