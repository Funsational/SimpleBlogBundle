<?php

namespace Funsational\SimpleBlogBundle\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\TextareaField;

class PostForm extends Form
{
    public function __construct($title, array $options = array())
    {
        $this->addOption('theme');

        parent::__construct($title, $options);
    }

    public function configure()
    {
    	$this->setDataClass('Funsational\\SimpleBlogBundle\\Model\\Post');
    	$this->add('title');
        $this->add(new TextareaField('message'));
    }
}
