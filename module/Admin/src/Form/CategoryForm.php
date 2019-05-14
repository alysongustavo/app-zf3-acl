<?php
/**
 * Created by PhpStorm.
 * User: Alyson
 * Date: 13/05/2019
 * Time: 22:36
 */

namespace Admin\Form;


use Zend\Form\Form;

class CategoryForm extends Form
{

    public function __construct($name = null, array $options = [])
    {
        parent::__construct($name, $options);
    }

}