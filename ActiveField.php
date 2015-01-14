<?php
namespace sersid\smartadmin;

use yii\helpers\ArrayHelper;
use yii\helpers\Json;

class ActiveField extends \yii\widgets\ActiveField
{
    /**
     * @inheritdoc
     */
    public $template = "{label}\n{beginWrapper}\n{icon}\n{input}\n{tooltip}\n{endWrapper}\n{hint}\n{error}";

    /**
     * @var string the template for file input in default layout
     */
    public $fileInputTemplate = "{label}\n{beginWrapper}\n{beginButton}{input}{contentButton}{endButton}{placeholder}\n{endWrapper}\n{hint}\n{error}";
    
    /**
     * @var string the template for hidden in default layout
     */
    public $hiddenTemplate = "{input}";
    
    /**
     * @var string the template for checkbox list in default layout
     */
    public $checkboxListTemplate = "{label}\n{input}\n{hint}\n{error}";
    
    /**
     * @var string the template for checkbox list toggles in default layout
     */
    public $checkboxListTogglesTemplate = "{label}\n{input}\n{hint}\n{error}";
    
    /**
     * @var string the template for radio list in default layout
     */
    public $radioListTemplate = "{label}\n{input}\n{hint}\n{error}";
    
    /**
     * @var string the template for radio in default layout
     */
    public $radioTemplate = "{label}\n{input}\n{hint}\n{error}";
    
    /**
     * @var string the template for checkbox in default layout
     */
    public $checkboxTemplate = "{label}\n{input}\n{hint}\n{error}";
    
    /**
     * @var string the template for radio list toggles in default layout
     */
    public $radioListTogglesTemplate = "{label}\n{input}\n{hint}\n{error}";
    
    /**
     * @inheritdoc
     */
    public $inputOptions = [];

    /**
     * @inheritdoc
     */
    public $labelOptions = ['class' => 'label'];

    /**
     * @inheritdoc
     */
    public $hintOptions = ['class' => 'note'];

    /**
     * Wrapper options
     * @var array
     */
    public $wrapperOptions = [];

    /**
     * Icon
     * @var string
     */
    public $icon;

    /**
     * Icon options
     * @var array
     */
    public $iconOptions = [];

    /**
     * Tooltip
     * @var string
     */
    public $tooltip;

    /**
     * Tooltip options
     * @var array
     */
    public $tooltipOptions = [];

    /**
     * @var bool whether to render [[checkboxList()]] and [[radioList()]] inline.
     */
    public $inline = false;

    /**
     * @var bool whether to render [[textarea()]] resizable.
     */
    public $resizable = false;

    /**
     * @var bool whether to render [[textarea()]] expandable.
     */
    public $expandable = false;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->options['tag'] = isset($this->options['tag']) ? $this->options['tag'] : 'section';
    }

    /**
     * @inheritdoc
     */
    public function render($content = null)
    {
        if ($content === null) {
            $this->_renderWrapper();
            $this->_renderIcon();
            $this->_renderTooltip();
            
            if (!isset($this->parts['{input}'])) {
                $this->textInput();
            }
        }

        return parent::render($content);
    }

    /**
     * Render wrapper
     */
    private function _renderWrapper()
    {
        if (!isset($this->parts['{beginWrapper}'])) {
            $options = $this->wrapperOptions;
            $tag = ArrayHelper::remove($options, 'tag', 'label');
            if (!isset($options['class'])) {
                $options['class'] = 'input';
            }
            $this->parts['{beginWrapper}'] = Html::beginTag($tag, $options);
            $this->parts['{endWrapper}'] = Html::endTag($tag);
        }
    }

    /**
     * Render icon
     */
    private function _renderIcon()
    {
        if (!isset($this->parts['{icon}'])) {
            if (empty($this->icon)) {
                $this->parts['{icon}'] = '';
                return;
            }
            $options = $this->iconOptions;
            $position = ArrayHelper::remove($options, 'position', Html::ICON_APPEND);
            if (in_array($position, [Html::ICON_APPEND, Html::ICON_PREPEND])) {
                Html::addCssClass($options, $position);
            }
            $this->parts['{icon}'] = Html::icon($this->icon, $options);
        }
    }

    /**
     * Render icon
     */
    private function _renderTooltip()
    {
        if (!isset($this->parts['{tooltip}'])) {
            if (empty($this->tooltip)) {
                $this->parts['{tooltip}'] = '';
                return;
            }
            $options = $this->tooltipOptions;
            Html::addCssClass($options, 'tooltip');
            $position = ArrayHelper::remove($options, 'position', Html::TOOLTIP_TOP_RIGHT);
            if (in_array($position, [
                Html::TOOLTIP_BOTTOM_LEFT,
                Html::TOOLTIP_BOTTOM_RIGHT,
                Html::TOOLTIP_LEFT,
                Html::TOOLTIP_RIGHT,
                Html::TOOLTIP_TOP_LEFT,
                Html::TOOLTIP_TOP_RIGHT,
            ])) {
                Html::addCssClass($options, $position);
            }
            $tag = ArrayHelper::remove($options, 'tag', 'b');
            $this->parts['{tooltip}'] = Html::tag($tag, $this->tooltip, $options);
        }
    }

    /**
     * Set wrapper options
     * @param array $options
     * @param string $class
     */
    private function _setWrapperOptions(&$options = [], $class = 'input')
    {
        $this->wrapperOptions = array_merge($this->wrapperOptions, ArrayHelper::remove($options, 'wrapperOptions', []));
        Html::addCssClass($this->wrapperOptions, $class);

        $attribute = Html::getAttributeName($this->attribute);
        /*if ($this->model->hasErrors($attribute)) {
            Html::addCssClass($this->wrapperOptions, 'state-error');
        }*/
    }

    /**
     * Set icon
     * @param array $options
     */
    private function _setIconOptions(&$options)
    {
        $this->icon = ArrayHelper::remove($options, 'icon');
        $this->iconOptions = array_merge($this->iconOptions, ArrayHelper::remove($options, 'iconOptions', []));
    }

    /**
     * Set tooltip
     * @param array $options
     */
    private function _setTooltipOptions(&$options)
    {
        $this->tooltip = ArrayHelper::remove($options, 'tooltip');
        $this->tooltipOptions = array_merge($this->tooltipOptions, ArrayHelper::remove($options, 'tooltipOptions', []));
    }

    /**
     * @inheritdoc
     */
    public function input($type, $options = [])
    {
        if($type == 'hidden') {
            return $this->hidden($options);
        }

        $options = array_merge($this->inputOptions, $options);
        $this->_setWrapperOptions($options);
        $this->_setIconOptions($options);
        $this->_setTooltipOptions($options);
        return parent::input($type, $options);
    }

    /**
     * Hidden input
     * @param array $options
     * @return \sersid\smartadmin\ActiveField
     */
    public function hidden($options = [])
    {
        $this->template = $this->hiddenTemplate;
        return parent::input('hidden', $options);
    }

    /**
     * @inheritdoc
     */
    public function textInput($options = [])
    {
        $options = array_merge($this->inputOptions, $options);
        $this->_setWrapperOptions($options);
        $this->_setIconOptions($options);
        $this->_setTooltipOptions($options);
        return parent::textInput($options);
    }

    /**
     * @inheritdoc
     */
    public function passwordInput($options = [])
    {
        $options = array_merge($this->inputOptions, $options);
        $this->_setWrapperOptions($options);
        $this->_setIconOptions($options);
        $this->_setTooltipOptions($options);
        return parent::passwordInput($options);
    }

    /**
     * @inheritdoc
     */
    public function fileInput($options = [])
    {
        $options = array_merge($this->inputOptions, $options);
        $options['wrapperOptions']['tag'] = isset($options['wrapperOptions']) && isset($options['wrapperOptions']['tag']) ? $options['wrapperOptions']['tag'] : 'div';
        $this->_setWrapperOptions($options, 'input input-file');

        // Set template
        $this->template = $this->fileInputTemplate;

        // Button
        $btnOptions = ArrayHelper::remove($options, 'buttonOptions', []);
        $btnTag = ArrayHelper::remove($btnOptions, 'tag', 'span');
        $btnContent = ArrayHelper::remove($btnOptions, 'content', 'Browse');
        Html::addCssClass($btnOptions, 'button');
        $this->parts['{beginButton}'] = Html::beginTag($btnTag, $btnOptions);
        $this->parts['{contentButton}'] = $btnContent;
        $this->parts['{endButton}'] = Html::endTag($btnTag);

        // Placeholder input
        $phrOptions = ArrayHelper::remove($options, 'placeholderOptions', []);
        $phrOptions['readonly'] = 'readonly';
        $placeholder = ArrayHelper::remove($options, 'placeholder');
        if ($placeholder !== null) {
            $phrOptions['placeholder'] = $placeholder;
        }
        $this->parts['{placeholder}'] = Html::input('text', null, null, $phrOptions);

        // Onchange
        $onchange = 'this.parentNode.nextSibling.value = this.value';
        $options['onchange'] = isset($options['onchange']) ? $options['onchange'] : $onchange;

        return parent::fileInput($options);
    }

    /**
     * @inheritdoc
     */
    public function textarea($options = [])
    {
        $options = array_merge($this->inputOptions, $options);
        $this->_setWrapperOptions($options, 'textarea');
        $this->_setIconOptions($options);
        $this->_setTooltipOptions($options);

        if (ArrayHelper::remove($options, 'resizable') || $this->resizable) {
            Html::addCssClass($this->wrapperOptions, 'textarea-resizable');
        }

        if (ArrayHelper::remove($options, 'expandable') || $this->expandable) {
            Html::addCssClass($this->wrapperOptions, 'textarea-expandable');
        }

        Html::addCssClass($options, 'custom-scroll');


        return parent::textarea($options);
    }

    /**
     * @inheritdoc
     */
    public function dropDownList($items, $options = [])
    {
        $options = array_merge($this->inputOptions, $options);
        $this->_setWrapperOptions($options, 'select');
        $this->_setIconOptions($options);
        $this->_setTooltipOptions($options);

        if (isset($options['multiple'])) {
            Html::addCssClass($this->wrapperOptions, 'select-multiple');
            Html::addCssClass($options, 'custom-scroll');
        }

        parent::dropDownList($items, $options);

        $this->parts['{input}'] .= isset($options['multiple']) ? '' : '<i></i>';

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function checkboxList($items, $options = [])
    {
        $this->template = $this->checkboxListTemplate;

        $options = array_merge($this->inputOptions, $options);
        if (ArrayHelper::remove($options, 'inline') || $this->inline) {
            Html::addCssClass($options, 'inline-group');
        }

        $this->adjustLabelFor($options);
        $this->parts['{input}'] = Html::activeCheckboxListSmart($this->model, $this->attribute, $items, $options);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function checkboxListToggles($items, $options = [])
    {
        $this->template = $this->checkboxListTogglesTemplate;

        $options = array_merge($this->inputOptions, $options);
        $options['itemOptions']['iconOptions']['data-swchon-text'] = ArrayHelper::remove($options, 'onText', 'ON');
        $options['itemOptions']['iconOptions']['data-swchoff-text'] = ArrayHelper::remove($options, 'offText', 'OFF');

        $this->adjustLabelFor($options);
        $this->parts['{input}'] = Html::activeCheckboxListSmartToggles($this->model, $this->attribute, $items, $options);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function radioList($items, $options = [])
    {
        $this->template = $this->radioListTemplate;

        $options = array_merge($this->inputOptions, $options);
        if (ArrayHelper::remove($options, 'inline') || $this->inline) {
            Html::addCssClass($options, 'inline-group');
        }

        $this->adjustLabelFor($options);
        $this->parts['{input}'] = Html::activeRadioListSmart($this->model, $this->attribute, $items, $options);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function checkbox($options = [], $enclosedByLabel = true)
    {
        $this->template = $this->checkboxTemplate;
        Html::addCssClass($options['labelOptions'], 'checkbox');

        if ($enclosedByLabel) {
            $this->parts['{input}'] = Html::activeCheckboxSmart($this->model, $this->attribute, $options);
            $this->parts['{label}'] = '';
        } else {
            if (isset($options['label']) && !isset($this->parts['{label}'])) {
                $this->parts['{label}'] = $options['label'];
                if (!empty($options['labelOptions'])) {
                    $this->labelOptions = $options['labelOptions'];
                }
            }
            unset($options['labelOptions']);
            $options['label'] = null;
            $this->parts['{input}'] = Html::activeCheckboxSmart($this->model, $this->attribute, $options);
        }
        $this->adjustLabelFor($options);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function radio($options = [], $enclosedByLabel = true)
    {
        $this->template = $this->radioTemplate;
        Html::addCssClass($options['labelOptions'], 'radio');

        if ($enclosedByLabel) {
            $this->parts['{input}'] = Html::activeRadioSmart($this->model, $this->attribute, $options);
            $this->parts['{label}'] = '';
        } else {
            if (isset($options['label']) && !isset($this->parts['{label}'])) {
                $this->parts['{label}'] = $options['label'];
                if (!empty($options['labelOptions'])) {
                    $this->labelOptions = $options['labelOptions'];
                }
            }
            unset($options['label'], $options['labelOptions']);
            $this->parts['{input}'] = Html::activeRadioSmart($this->model, $this->attribute, $options);
        }
        $this->adjustLabelFor($options);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function radioListToggles($items, $options = [])
    {
        $this->template = $this->radioListTogglesTemplate;

        $options = array_merge($this->inputOptions, $options);
        $options['itemOptions']['iconOptions']['data-swchon-text'] = ArrayHelper::remove($options, 'onText', 'ON');
        $options['itemOptions']['iconOptions']['data-swchoff-text'] = ArrayHelper::remove($options, 'offText', 'OFF');

        $this->adjustLabelFor($options);
        $this->parts['{input}'] = Html::activeRadioListSmartToggles($this->model, $this->attribute, $items, $options);

        return $this;
    }

    /**
     * Datalist input
     * @param array $items
     * @param array $options
     * @return \sersid\smartadmin\ActiveField
     */
    public function datalist($items, $options = [])
    {
        $options = array_merge($this->inputOptions, $options);
        $this->_setWrapperOptions($options);
        $this->_setIconOptions($options);
        $this->_setTooltipOptions($options);
        $this->adjustLabelFor($options);
        if (!array_key_exists('id', $options)) {
            $id = Html::getInputId($this->model, $this->attribute);
        }
        $listId = $id . '-list';
        $options['list'] = $listId;

        $datalistOptions = ArrayHelper::remove($options, 'datalistOptions', []);
        $datalistOptions['id'] = array_key_exists('id', $datalistOptions) ? $datalistOptions['id'] . ' ' . $listId : $listId;

        $this->parts['{input}'] = Html::activeTextInput($this->model, $this->attribute, $options) .
                Html::tag('datalist', Html::renderSelectOptions(null, $items, $datalistOptions), $datalistOptions);

        return $this;
    }

    /**
     * Size of input
     * @param string $size
     * @return \sersid\smartadmin\ActiveField
     */
    public function size($size)
    {
        Html::addCssClass($this->inputOptions, $size);
        return $this;
    }

    /**
     * @param bool $value whether to render a inline list
     * @return static the field object itself
     * Make sure you call this method before [[checkboxList()]] or [[radioList()]] to have any effect.
     */
    public function inline($value = true)
    {
        $this->inline = (bool) $value;
        return $this;
    }

    /**
     * @param bool $value whether to render a resizable textarea
     * @return static the field object itself
     * Make sure you call this method before [[textarea()]] to have any effect.
     */
    public function resizable($value = true)
    {
        $this->resizable = (bool) $value;
        return $this;
    }

    /**
     * @param bool $value whether to render a expandable textarea
     * @return static the field object itself
     * Make sure you call this method before [[textarea()]] to have any effect.
     */
    public function expandable($value = true)
    {
        $this->expandable = (bool) $value;
        return $this;
    }

    /**
     * Alias of hint
     * @see \yii\widgets\ActiveField::hint($content, $options);
     */
    public function note($content, $options = array())
    {
        return parent::hint($content, $options);
    }

    /**
     * Set icon
     * @param string $name
     * @param array $options
     * @return \sersid\smartadmin\ActiveField
     */
    public function icon($name, $options = array())
    {
        $this->icon = $name;
        $this->iconOptions = array_merge($this->iconOptions, $options);
        return $this;
    }

    /**
     * Set tooltip
     * @param string $content
     * @param array $options
     * @return \sersid\smartadmin\ActiveField
     */
    public function tooltip($content, $options = array())
    {
        $this->tooltip = $content;
        $this->tooltipOptions = array_merge($this->tooltipOptions, $options);
        return $this;
    }

    /**
     * Create date picker
     * @param array $options
     * @return $this
     */
    public function datepicker($options = [])
    {
        $view = $this->form->getView();
        if (array_key_exists('id', $options)) {
            $id = $options['id'];
        } else {
            $id = Html::getInputId($this->model, $this->attribute);
        }
        $jsParams = Json::encode($options);
        $view->registerJs("jQuery('#$id').datepicker($jsParams);");
        return $this;
    }
}
