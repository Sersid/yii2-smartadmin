<?php

namespace sersid\smartadmin;

class ActiveForm extends \yii\widgets\ActiveForm
{
    /**
     * @inheritdoc
     */
    public $fieldClass = 'sersid\smartadmin\ActiveField';

    /**
     * @inheritdoc
     */
    public function init()
    {
        Html::addCssClass($this->options, 'smart-form');
        
        parent::init();
    }
}