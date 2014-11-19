<?php
namespace sersid\smartadmin;

use yii\helpers\Html;

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
     * Content
     * @var string
     */
    public $content;

    /**
     * .widget-body options
     * @var array
     */
    public $contentOptions = [];

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
     * @inheritdoc
     */
    public function init()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        Html::addCssClass($this->options, 'jarviswidget');
        $this->setColor();
        $this->setDataWidgetBool();
        echo Html::beginTag('div', $this->options); // main div
        $this->getHeader();
        echo Html::beginTag('div');
        $this->getEditbox();

        // widget content
        Html::addCssClass($this->contentOptions, 'widget-body');
        echo Html::beginTag('div', $this->contentOptions);
        $this->getBodyToolbar();
        echo $this->content;
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->getFooter();
        echo Html::endTag('div');
        echo Html::endTag('div');
        echo Html::endTag('div');
    }

    /**
     * Set data-widget-* boolean
     */
    protected function setDataWidgetBool()
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
    protected function setColor()
    {
        if($this->color !== null) {
            Html::addCssClass($this->options, $this->color);
        }
    }

    /**
     * Get header
     */
    protected function getHeader()
    {
        echo Html::beginTag('header', $this->headerOptions);
        $this->getIcon();
        if($this->header !== null) {
            echo Html::tag('h2', $this->header, $this->headerH2Options);
        }
        $this->getToolbar();
        echo Html::endTag('header');
    }

    /**
     * Get icon
     */
    protected function getIcon()
    {
        if($this->icon !== null) {
            Html::addCssClass($this->iconOptions, 'widget-icon');
            echo Html::tag('span', $this->icon, $this->iconOptions);
        }
    }

    /**
     * Get toolbar
     */
    protected function getToolbar()
    {
        if($this->toolbar !== null) {
            Html::addCssClass($this->toolbarOptions, 'widget-toolbar');
            $toolbars = is_string($this->toolbar) ? [$this->toolbar] : $this->toolbar;
            foreach($toolbars as $i => $toolbar) {
                if(is_array($toolbar)) {
                    $content = isset($toolbar['content']) ? $toolbar['content'] : null;
                    $options = isset($toolbar['options']) ? $toolbar['options'] : [];
                    Html::addCssClass($options, 'widget-toolbar');
                    echo Html::tag('div', $content, $options);
                } else {
                    echo Html::tag('div', $toolbar, $this->toolbarOptions);
                }
            }
        }
    }

    /**
     * Get body toolbar
     */
    protected function getBodyToolbar()
    {
        if($this->bodyToolbar !== null) {
            Html::addCssClass($this->bodyToolbarOptions, 'widget-body-toolbar');
            $toolbars = is_string($this->bodyToolbar) ? [$this->bodyToolbar] : $this->bodyToolbar;
            foreach($toolbars as $i => $toolbar) {
                if(is_array($toolbar)) {
                    $content = isset($toolbar['content']) ? $toolbar['content'] : null;
                    $options = isset($toolbar['options']) ? $toolbar['options'] : [];
                    Html::addCssClass($options, 'widget-body-toolbar');
                    echo Html::tag('div', $content, $options);
                } else {
                    echo Html::tag('div', $toolbar, $this->bodyToolbarOptions);
                }
            }
        }
    }

    /**
     * Get footer
     */
    protected function getFooter()
    {
        if($this->footer !== null) {
            Html::addCssClass($this->footerOptions, 'widget-footer');
            $footers = is_string($this->footer) ? [$this->footer] : $this->footer;
            foreach($footers as $i => $footer) {
                if(is_array($footer)) {
                    $content = isset($footer['content']) ? $footer['content'] : null;
                    $options = isset($footer['options']) ? $footer['options'] : [];
                    Html::addCssClass($options, 'widget-footer');
                    echo Html::tag('div', $content, $options);
                } else {
                    echo Html::tag('div', $footer, $this->footerOptions);
                }
            }
        }
    }

    protected function getEditbox()
    {
        if($this->editbutton !== null || isset($this->options['data-widget-editbutton'])) {
            Html::addCssClass($this->editboxOptions, 'jarviswidget-editbox');
            echo Html::tag('div', $this->editbox, $this->editboxOptions);
        }
    }
}