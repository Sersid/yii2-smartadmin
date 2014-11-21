<?php
namespace sersid\smartadmin;

use yii\helpers\ArrayHelper;
use yii\base\Exception;

class Jarvis extends \yii\base\Widget
{
    /**
     * @var array the HTML attributes (name-value pairs) for the form tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];

    /**
     * Use a icon in the widgets header (see icons section for all list of icons).
     * @var string
     */
    public $icon;

    /**
     * Icon options
     * @var array
     */
    public $iconOptions = [];

    /**
     * Prevent a widget from being sortable (can only be used with the value 'false').
     * @var bool
     */
    public $sortable;

    /**
     * Prevent a widget from having a toggle button (can only be used with the value 'false').
     * @var bool
     */
    public $togglebutton;

    /**
     * Prevent a widget from having a delete button (can only be used with the value 'false').
     * @var bool
     */
    public $deletebutton;

    /**
     * Prevent a widget from having a edit button (can only be used with the value 'false').
     * @var bool
     */
    public $editbutton;

    /**
     * Prevent a widget from having a fullscreen button (can only be used with the value 'false').
     * @var bool
     */
    public $fullscreenbutton;

    /**
     * The file that is loaded with ajax.
     * @var string/array
     */
    public $load;

    /**
     * Seconds to refresh a ajax file (see 'data-widget-load').
     * @var integer
     */
    public $refresh;

    /**
     * Prevent a ajax widget from showing a refresh button (can only be used with the value 'false').
     * @var bool
     */
    public $refreshbutton;

    /**
     * Hide a widget at load (can only be used with the value 'true').
     * @var bool
     */
    public $hidden;

    /**
     * This is active by default, set it to false to hide.
     * @var bool
     */
    public $colorbutton;

    /**
     * @var bool
     */
    public $custombutton;

    /**
     * Collapse a widget upon load (can only be used with the value 'true'). This will allways be collapsed every page load.
     * @var bool
     */
    public $collapsed;

    /**
     * You can exclude grids from being a sortable/droppable area, this means that all widgets in this area will work, but cant be sortable/droppable and that all other widgets cant be dropped in this area. Add this attribute (can only be used with the value 'false') to a grid element.
     * @var bool
     */
    public $grid;

    /**
     * Removes all padding inside widget body
     * @var bool
     */
    public $noPadding;

    /**
     * Header
     * @var string
     */
    public $header;

    /**
     * Header options
     * @var array
     */
    public $headerOptions = [];

    /**
     * header > h2 options
     * @var array
     */
    public $headerH2Options = [];

    /**
     * Body
     * @var string
     */
    public $body;

    /**
     * .widget-body options
     * @var array
     */
    public $bodyOptions = [];

    /**
     * Color widget
     * @var string
     */
    public $color;

    /**
     * Toolbar header
     * @var string/array
     */
    public $toolbar;

    /**
     * Toolbar options
     * @var array
     */
    public $toolbarOptions = [];

    /**
     * Body toolbar
     * @var string/array
     */
    public $bodyToolbar;

    /**
     * Body toolbar options
     * @var array
     */
    public $bodyToolbarOptions = [];

    /**
     * Footer
     * @var string/array
     */
    public $footer;

    /**
     * Footer options
     * @var array
     */
    public $footerOptions = [];

    /**
     * Edit box
     * @var string
     */
    public $editBox = '<input class="form-control" type="text"><span class="note"><i class="fa fa-check text-success"></i> Change title to update and save instantly!</span>';

    /**
     * Editbox options
     * @var array
     */
    public $editBoxOptions = [];

    /**
     * @var string
     */
    public $addon;

    /**
     * @var bool
     */
    private $_beginning = false;

    /**
     * @var array
     */
    private $_toolbarLastOptions = [];

    /**
     * @var array
     */
    private $_bodyToolbarLastOptions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        ob_start();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->_setBeginning(true);

        $body = ob_get_clean();

        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        Html::addCssClass($this->options, 'jarviswidget');
        $this->_setColor();
        $this->_setDataWidgetBool();
        $this->_setLoad();
        $this->_setRefresh();
        echo Html::beginTag('div', $this->options); // main div
        echo Html::beginTag('header', $this->headerOptions);
        $this->_getIcon();
        if($this->header !== null) {
            echo Html::tag('h2', $this->header, $this->headerH2Options);
        }
        $this->_getToolbar();
        $this->_getAddOn();
        echo Html::endTag('header');
        echo Html::beginTag('div');
        $this->_getEditbox();

        // widget body
        Html::addCssClass($this->bodyOptions, 'widget-body');
        $this->_setNoPadding();
        echo Html::beginTag('div', $this->bodyOptions);
        $this->_getBodyToolbar();
        echo $this->body !== null ? $this->body : $body;
        $this->_getFooter();
        echo Html::endTag('div');
        echo Html::endTag('div');
        echo Html::endTag('div');
    }

    /**
     * Begin header
     * [[beginHeader]]
     * your data
     * [[endHeader]]
     * @throws Exception
     */
    public function beginHeader()
    {
        $this->_setBeginning(true);
        ob_start();
    }

    /**
     * End header
     * @throws Exception
     */
    public function endHeader()
    {
        $this->_setBeginning(false);
        $this->header = trim(ob_get_clean());
    }

    /**
     * Begin icon
     * [[beginIcon]]
     * your data
     * [[endIcon]]
     * @param array $options Icon options
     * @throws Exception
     */
    public function beginIcon($options = [])
    {
        $this->_setBeginning(true);
        $this->iconOptions = ArrayHelper::merge($this->iconOptions, $options);
        ob_start();
    }

    /**
     * End icon
     * @throws Exception
     */
    public function endIcon()
    {
        $this->_setBeginning(false);
        $this->icon = trim(ob_get_clean());
    }

    /**
     * Begin toolbar
     * [[beginToolbar]]
     * your data
     * [[endToolbar]]
     * @param array $options Toolbar options
     * @throws Exception
     */
    public function beginToolbar($options = [])
    {
        $this->_setBeginning(true);
        $this->_toolbarLastOptions = $options;
        ob_start();
    }

    /**
     * End toolbar
     * @throws Exception
     */
    public function endToolbar()
    {
        $this->_setBeginning(false);
        $toolbar = trim(ob_get_clean());
        if(is_string($this->toolbar)) {
            $this->toolbar = [$this->toolbar];
        }
        $this->toolbar[] = [
            'body' => $toolbar,
            'options' => $this->_toolbarLastOptions,
        ];
        $this->_toolbarLastOptions = [];
    }

    /**
     * Begin addon
     * [[beginAddon]]
     * your data
     * [[endAddon]]
     * @throws Exception
     */
    public function beginAddon()
    {
        $this->_setBeginning(true);
        ob_start();
    }

    /**
     * End addon
     * @throws Exception
     */
    public function endAddon()
    {
        $this->_setBeginning(false);
        $this->addon = trim(ob_get_clean());
    }

    /**
     * Begin Edit Box
     * [[beginEditbox]]
     * your data
     * [[endEditbox]]
     * @param array $options Editbox options
     * @throws Exception
     */
    public function beginEditBox($options = [])
    {
        $this->_setBeginning(true);
        $this->editBoxOptions = ArrayHelper::merge($this->editBoxOptions, $options);
        ob_start();
    }

    /**
     * End Edit box
     * @throws Exception
     */
    public function endEditBox()
    {
        $this->_setBeginning(false);
        $this->editBox = trim(ob_get_clean());
    }

    /**
     * Begin Body Toolbar
     * [[beginBodyToolbar]]
     * your data
     * [[endBodyToolbar]]
     * @param array $options
     * @throws Exception
     */
    public function beginBodyToolbar($options = [])
    {
        $this->_setBeginning(true);
        $this->_bodyToolbarLastOptions = $options;
        ob_start();
    }

    /**
     * End Body Toolbar
     * @throws Exception
     */
    public function endBodyToolbar()
    {
        $this->_setBeginning(false);
        $toolbar = trim(ob_get_clean());
        if(is_string($this->bodyToolbar)) {
            $this->bodyToolbar = [$this->bodyToolbar];
        }
        $this->bodyToolbar[] = [
            'body' => $toolbar,
            'options' => $this->_bodyToolbarLastOptions,
        ];
        $this->_bodyToolbarLastOptions = [];
    }

    /**
     * Begin Footer
     * [[beginFooter]]
     * your data
     * [[endFooter]]
     * @param array $options
     * @throws Exception
     */
    public function beginFooter($options = [])
    {
        $this->_setBeginning(true);
        $this->footerOptions = ArrayHelper::merge($this->footerOptions, $options);
        ob_start();
    }

    /**
     * End footer
     * @throws Exception
     */
    public function endFooter()
    {
        $this->_setBeginning(false);
        $this->footer = trim(ob_get_clean());
    }

    /**
     * Set data-widget-* boolean
     */
    private function _setDataWidgetBool()
    {
        $attributes = [
            'colorbutton',
            'editbutton',
            'togglebutton',
            'deletebutton',
            'fullscreenbutton',
            'custombutton',
            'collapsed',
            'sortable',
            'refreshbutton',
            'hidden',
        ];
        foreach($attributes as $attribute) {
            if($this->$attribute !== null && !array_key_exists('data-widget-'.$attribute, $this->options)) {
                $this->options['data-widget-'.$attribute] = $this->$attribute ? 'true' : 'false';
            }
        }
    }

    /**
     * Set color
     */
    private function _setColor()
    {
        if($this->color !== null) {
            Html::addCssClass($this->options, $this->color);
        }
    }

    /**
     * Get icon
     */
    private function _getIcon()
    {
        if($this->icon !== null) {
            Html::addCssClass($this->iconOptions, 'widget-icon');
            echo Html::tag('span', $this->icon, $this->iconOptions);
        }
    }

    /**
     * Get toolbar
     */
    private function _getToolbar()
    {
        if($this->toolbar !== null) {
            Html::addCssClass($this->toolbarOptions, 'widget-toolbar');
            $toolbars = is_string($this->toolbar) ? [$this->toolbar] : $this->toolbar;
            foreach($toolbars as $toolbar) {
                if(is_array($toolbar)) {
                    $body = isset($toolbar['body']) ? $toolbar['body'] : null;
                    $options = isset($toolbar['options']) ? $toolbar['options'] : [];
                    Html::addCssClass($options, 'widget-toolbar');
                    echo Html::tag('div', $body, $options);
                } else {
                    echo Html::tag('div', $toolbar, $this->toolbarOptions);
                }
            }
        }
    }

    /**
     * Get body toolbar
     */
    private function _getBodyToolbar()
    {
        if($this->bodyToolbar !== null) {
            Html::addCssClass($this->bodyToolbarOptions, 'widget-body-toolbar');
            $toolbars = is_string($this->bodyToolbar) ? [$this->bodyToolbar] : $this->bodyToolbar;
            foreach($toolbars as $toolbar) {
                if(is_array($toolbar)) {
                    $body = isset($toolbar['body']) ? $toolbar['body'] : null;
                    $options = isset($toolbar['options']) ? $toolbar['options'] : [];
                    Html::addCssClass($options, 'widget-body-toolbar');
                    echo Html::tag('div', $body, $options);
                } else {
                    echo Html::tag('div', $toolbar, $this->bodyToolbarOptions);
                }
            }
        }
    }

    /**
     * Get footer
     */
    private function _getFooter()
    {
        if($this->footer !== null) {
            Html::addCssClass($this->footerOptions, 'widget-footer');
            $footers = is_string($this->footer) ? [$this->footer] : $this->footer;
            foreach($footers as $footer) {
                if(is_array($footer)) {
                    $body = isset($footer['body']) ? $footer['body'] : null;
                    $options = isset($footer['options']) ? $footer['options'] : [];
                    Html::addCssClass($options, 'widget-footer');
                    echo Html::tag('div', $body, $options);
                } else {
                    echo Html::tag('div', $footer, $this->footerOptions);
                }
            }
        }
    }

    /**
     * Get edit box
     */
    private function _getEditbox()
    {
        if($this->editbutton === null || $this->editbutton == true || (isset($this->options['data-widget-editbutton']) && $this->options['data-widget-editbutton'] == 'true' )) {
            Html::addCssClass($this->editBoxOptions, 'jarviswidget-editbox');
            echo Html::tag('div', $this->editBox, $this->editBoxOptions);
        }
    }

    /**
     * Get addon
     */
    private function _getAddOn()
    {
        if($this->addon !== null) {
            echo $this->addon;
        }
    }

    /**
     * Set load
     */
    private function _setLoad()
    {
        if($this->load !== null && !array_key_exists('data-widget-load', $this->options)) {
            $this->options['data-widget-load'] = \yii\helpers\Url::to($this->load);
        }
    }

    /**
     * Set refresh
     */
    private function _setRefresh()
    {
        if($this->refresh !== null && !array_key_exists('data-widget-refresh', $this->options)) {
            $this->options['data-widget-refresh'] = $this->refresh;
        }
    }

    /**
     * Set no padding
     */
    private function _setNoPadding()
    {
        if($this->noPadding !== null) {
            Html::addCssClass($this->bodyOptions, 'no-padding');
        }
    }

    /**
     * Set beginning
     * @param $bool
     * @throws Exception
     */
    private function _setBeginning($bool)
    {
        if(!is_bool($bool)) {
            throw new Exception('$bool in not boolean');
        }
        if($this->_beginning === $bool) {
            throw new Exception("Error begin or end.");
        }
        $this->_beginning = $bool;
    }
}