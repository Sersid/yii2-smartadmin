<?php

namespace sersid\smartadmin;

/**
 * Class ActiveForm
 * @package sersid\smartadmin
 * @method \sersid\smartadmin\ActiveField field($model, $attribute, $options = [])
 */
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
