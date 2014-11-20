<?php
namespace sersid\smartadmin;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
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
    public $editbox = '<input class="form-control" type="text"><span class="note"><i class="fa fa-check text-success"></i> Change title to update and save instantly!</span>';

    /**
     * Editbox options
     * @var array
     */
    public $editboxOptions = [];

    /**
     * @var string
     */
    public $addon;

    /**
     * @var bool
     */
    private $_headerBeginning = false;

    /**
     * @var bool
     */
    private $_iconBeginning = false;

    /**
     * @var bool
     */
    private $_toolbarBeginning = false;

    /**
     * @var array
     */
    private $_toolbarLastOptions = [];

    /**
     * @var bool
     */
    private $_addonBeginning = false;

    /**
     * @var bool
     */
    private $_editboxBeginning = false;

    /**
     * @var bool
     */
    private $_bodyToolbarBeginning = false;

    /**
     * @var array
     */
    private $_bodyToolbarLastOptions = [];

    /**
     * @var bool
     */
    private $_footerBeginning = false;

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

    public function beginHeader()
    {
        if($this->_headerBeginning == true) {
            throw new Exception("Header was NOT beginning.");
        }
        $this->_headerBeginning = true;
        ob_start();
    }

    public function endHeader()
    {
        if($this->_headerBeginning == false) {
            return;
        }
        $header = ob_get_clean();
        $this->header = trim($header);
        $this->_headerBeginning = false;
    }

    public function beginIcon($options = [])
    {
        if($this->_iconBeginning == true) {
            throw new Exception("Icon was beginning.");
        }
        $this->_iconBeginning = true;
        $this->iconOptions = ArrayHelper::merge($this->iconOptions, $options);
        ob_start();
    }

    public function endIcon()
    {
        if($this->_iconBeginning == false) {
            throw new Exception("Icon was NOT beginning.");
        }
        $icon = ob_get_clean();
        $this->icon = trim($icon);
        $this->_iconBeginning = false;
    }

    public function beginToolbar($options = [])
    {
        if($this->_toolbarBeginning == true) {
            throw new Exception("Toolbar was beginning.");
        }
        $this->_toolbarBeginning = true;
        $this->_toolbarLastOptions = $options;
        ob_start();
    }

    public function endToolbar()
    {
        if($this->_toolbarBeginning == false) {
            throw new Exception("Toolbar was NOT beginning.");
        }
        $toolbar = ob_get_clean();
        $toolbar = trim($toolbar);
        if($this->toolbar !== null && !is_array($this->toolbar)) {
            $this->toolbar = [$this->toolbar];
        }
        $this->toolbar[] = [
            'body' => $toolbar,
            'options' => $this->_toolbarLastOptions,
        ];
        $this->_toolbarLastOptions = [];
        $this->_toolbarBeginning = false;
    }

    public function beginAddon()
    {
        if($this->_addonBeginning == true) {
            throw new Exception("Addon was beginning.");
        }
        $this->_addonBeginning = true;
        ob_start();
    }

    public function endAddon()
    {
        if($this->_addonBeginning == false) {
            throw new Exception("Addon was NOT beginning.");
        }
        $addon = ob_get_clean();
        $this->addon = trim($addon);
        $this->_addonBeginning = false;
    }

    public function beginEditbox($options = [])
    {
        if($this->_editboxBeginning == true) {
            throw new Exception("Editbox was beginning.");
        }
        $this->_editboxBeginning = true;
        $this->editboxOptions = ArrayHelper::merge($this->editboxOptions, $options);
        ob_start();
    }

    public function endEditbox()
    {
        if($this->_editboxBeginning == false) {
            throw new Exception("Editbox was NOT beginning.");
        }
        $editbox = ob_get_clean();
        $this->editbox = trim($editbox);
        $this->_editboxBeginning = false;
    }

    public function beginBodyToolbar($options = [])
    {
        if($this->_bodyToolbarBeginning == true) {
            throw new Exception("Toolbar was beginning.");
        }
        $this->_bodyToolbarBeginning = true;
        $this->_bodyToolbarLastOptions = $options;
        ob_start();
    }

    public function endBodyToolbar()
    {
        if($this->_bodyToolbarBeginning == false) {
            throw new Exception("Body toolbar was NOT beginning.");
        }
        $toolbar = ob_get_clean();
        $toolbar = trim($toolbar);
        if($this->bodyToolbar !== null && !is_array($this->bodyToolbar)) {
            $this->bodyToolbar = [$this->bodyToolbar];
        }
        $this->bodyToolbar[] = [
            'body' => $toolbar,
            'options' => $this->_bodyToolbarLastOptions,
        ];
        $this->_bodyToolbarLastOptions = [];
        $this->_bodyToolbarBeginning = false;
    }

    public function beginFooter($options = [])
    {
        if($this->_footerBeginning == true) {
            throw new Exception("Footer was beginning.");
        }
        $this->_footerBeginning = true;
        $this->footerOptions = ArrayHelper::merge($this->footerOptions, $options);
        ob_start();
    }

    public function endFooter()
    {
        if($this->_footerBeginning == false) {
            throw new Exception("Footer was NOT beginning.");
        }
        $footer = ob_get_clean();
        $this->footer = trim($footer);
        $this->_footerBeginning = false;
    }

    /**
     * Set data-widget-* boolean
     */
    protected function _setDataWidgetBool()
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
    protected function _setColor()
    {
        if($this->color !== null) {
            Html::addCssClass($this->options, $this->color);
        }
    }

    /**
     * Get icon
     */
    protected function _getIcon()
    {
        if($this->icon !== null) {
            Html::addCssClass($this->iconOptions, 'widget-icon');
            echo Html::tag('span', $this->icon, $this->iconOptions);
        }
    }

    /**
     * Get toolbar
     */
    protected function _getToolbar()
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
        if($this->editbutton !== null || isset($this->options['data-widget-editbutton'])) {
            Html::addCssClass($this->editboxOptions, 'jarviswidget-editbox');
            echo Html::tag('div', $this->editbox, $this->editboxOptions);
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
}