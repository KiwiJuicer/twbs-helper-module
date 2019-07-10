<?php

namespace TwbsHelper\Form\View\Helper;

class FormRange extends \Zend\Form\View\Helper\FormRange
{
    use \TwbsHelper\View\Helper\ClassAttributeTrait;

    /**
     * Render a form <input> element from the provided $oElement
     *
     * @param \Zend\Form\ElementInterface $oElement
     * @return string
     */
    public function render(\Zend\Form\ElementInterface $oElement): string
    {
        $oElement->setAttributes($this->setClassesToAttributes(
            $oElement->getAttributes() ?? [],
            ['form-control-range'],
            ['form-control']
        ));
        return parent::render($oElement);
    }
}
