<?php

namespace sersid\smartadmin\tests;

use yii\codeception\TestCase;
use sersid\smartadmin\Jarvis;
use sersid\smartadmin\Html;

class JarvisTest extends TestCase
{
    // tests
    public function testEmpty()
    {
        $str = '<div id="w0" class="jarviswidget"><header></header><div><div class="widget-body"></div></div></div>';
        $this->assertEquals(Jarvis::widget(), $str);
    }

    public function testId()
    {
        $str = '<div id="test-widget" class="jarviswidget"><header></header><div><div class="widget-body"></div></div></div>';
        $this->assertEquals(Jarvis::widget(['id' => 'test-widget']), $str);
    }

    public function testIdClass()
    {
        $str = '<div id="test-widget" class="my-class jarviswidget"><header></header><div><div class="widget-body"></div></div></div>';
        $this->assertEquals(Jarvis::widget([
            'id' => 'test-widget',
            'options' => ['class' => 'my-class'],
        ]), $str);
    }

    public function testDataWidget()
    {
        $str = '<div id="test-widget" class="jarviswidget" data-widget-sortable="true"><header></header><div><div class="widget-body"></div></div></div>';
        $this->assertEquals(Jarvis::widget([
            'id' => 'test-widget',
            'sortable' => true,
        ]), $str);
    }

    public function testDataWidgetFull()
    {
        $str = '<div id="test-widget" class="jarviswidget"' .
            ' data-widget-colorbutton="true"'.
            ' data-widget-editbutton="true"'.
            ' data-widget-togglebutton="true"'.
            ' data-widget-deletebutton="true"'.
            ' data-widget-fullscreenbutton="true"'.
            ' data-widget-custombutton="true"'.
            ' data-widget-collapsed="true"'.
            ' data-widget-sortable="true"'.
            ' data-widget-refreshbutton="true"'.
            ' data-widget-hidden="false">'.
            '<header></header>'.
            '<div>'.
                '<div class="jarviswidget-editbox">'.
                    '<input class="form-control" type="text">'.
                    '<span class="note"><i class="fa fa-check text-success"></i> Change title to update and save instantly!</span>'.
                '</div>'.
                '<div class="widget-body"></div>' .
            '</div>' .
            '</div>';
        $this->assertEquals(Jarvis::widget([
            'id' => 'test-widget',
            'colorbutton' => true,
            'editbutton' => true,
            'togglebutton' => true,
            'deletebutton' => true,
            'fullscreenbutton' => true,
            'custombutton' => true,
            'collapsed' => true,
            'sortable' => true,
            'refreshbutton' => true,
            'hidden' => false,
        ]), $str);
    }

    public function testColor()
    {
        $str = '<div id="test-widget" class="jarviswidget jarviswidget-color-blue"><header></header><div><div class="widget-body"></div></div></div>';
        $this->assertEquals(Jarvis::widget([
            'id' => 'test-widget',
            'color' => Html::JARVISWIDGET_COLOR_BLUE,
        ]), $str);
    }

    public function testColorClass()
    {
        $str = '<div id="test-widget" class="my-class jarviswidget jarviswidget-color-red"><header></header><div><div class="widget-body"></div></div></div>';
        $this->assertEquals(Jarvis::widget([
            'id' => 'test-widget',
            'color' => Html::JARVISWIDGET_COLOR_RED,
            'options' => ['class' => 'my-class'],
        ]), $str);
    }

    public function testHeader()
    {
        $str = '<div id="test-widget" class="jarviswidget"><header class="header-class"><h2 class="h2-class">Header</h2></header><div><div class="widget-body"></div></div></div>';
        $this->assertEquals(Jarvis::widget([
            'id' => 'test-widget',
            'header' => 'Header',
            'headerOptions' => ['class' => 'header-class'],
            'headerH2Options' => ['class' => 'h2-class'],
        ]), $str);
    }

    public function testToolbar()
    {
        $str = '<div id="test-widget" class="jarviswidget"><header><div id="toolbar-id" class="widget-toolbar">Toolbar</div></header><div><div class="widget-body"></div></div></div>';
        $this->assertEquals(Jarvis::widget([
            'id' => 'test-widget',
            'toolbar' => 'Toolbar',
            'toolbarOptions' => ['id' => 'toolbar-id'],
        ]), $str);
    }

    public function testToolbarArray()
    {
        $str = '<div id="test-widget" class="jarviswidget"><header><div class="widget-toolbar">Toolbar1</div><div class="widget-toolbar">Toolbar2</div></header><div><div class="widget-body"></div></div></div>';
        $this->assertEquals(Jarvis::widget([
            'id' => 'test-widget',
            'toolbar' => ['Toolbar1', 'Toolbar2'],
        ]), $str);
    }

    public function testBodyToolbar()
    {
        $str = '<div id="test-widget" class="jarviswidget"><header></header><div><div class="widget-body"><div id="body-toolbar-id" class="widget-body-toolbar">Body toolbar</div></div></div></div>';
        $this->assertEquals(Jarvis::widget([
            'id' => 'test-widget',
            'bodyToolbar' => 'Body toolbar',
            'bodyToolbarOptions' => ['id' => 'body-toolbar-id'],
        ]), $str);
    }

    public function testBodyToolbarArray()
    {
        $str = '<div id="test-widget" class="jarviswidget"><header></header><div><div class="widget-body"><div class="widget-body-toolbar">Body Toolbar1</div><div class="widget-body-toolbar">Body Toolbar2</div></div></div></div>';
        $this->assertEquals(Jarvis::widget([
            'id' => 'test-widget',
            'bodyToolbar' => ['Body Toolbar1', 'Body Toolbar2'],
        ]), $str);
    }

    public function testFullWidget()
    {
        $str = '<div id="test-widget" class="my-class jarviswidget jarviswidget-color-red"'.
            ' data-widget-colorbutton="false"'.
            ' data-widget-editbutton="true"'.
            ' data-widget-togglebutton="true"'.
            ' data-widget-deletebutton="true"'.
            ' data-widget-fullscreenbutton="true"'.
            ' data-widget-custombutton="true"'.
            ' data-widget-collapsed="true"'.
            ' data-widget-sortable="true"'.
            ' data-widget-refreshbutton="true"'.
            ' data-widget-hidden="false"' .
            ' data-widget-load="site/index"' .
            ' data-widget-refresh="12">'.
                '<header class="header-class">'.
                    '<span id="icon-id" class="widget-icon"><i class="fa fa-adjust"></i></span>'.
                    '<h2 class="h2-class">Header</h2>'.
                    '<div class="widget-toolbar">Toolbar1</div>'.
                    '<div id="toolbar-id" class="widget-toolbar">Toolbar2</div>'.
                    'addon'.
                '</header>'.
                '<div>'.
                    '<div class="jarviswidget-editbox">'.
                        '<input class="form-control" type="text">'.
                        '<span class="note"><i class="fa fa-check text-success"></i> Change title to update and save instantly!</span>'.
                    '</div>'.
                    '<div id="content-id" class="widget-body no-padding">'.
                        '<div class="widget-body-toolbar">BodyToolbar1</div>'.
                        '<div id="body-toolbar-id" class="widget-body-toolbar">BodyToolbar2</div>'.
                        '<p>Content</p>'.
                        '<div class="widget-footer">Footer1</div>'.
                        '<div id="footer-id" class="widget-footer">Footer2</div>'.
                    '</div>'.
                '</div>'.
            '</div>';

        $this->assertEquals(Jarvis::widget([
            'id' => 'test-widget',
            'color' => Html::JARVISWIDGET_COLOR_RED,
            'options' => [
                'class' => 'my-class',
                'data-widget-colorbutton' => 'false'
            ],
            'colorbutton' => true,
            'editbutton' => true,
            'togglebutton' => true,
            'deletebutton' => true,
            'fullscreenbutton' => true,
            'custombutton' => true,
            'collapsed' => true,
            'sortable' => true,
            'refreshbutton' => true,
            'icon' => Html::icon(Html::ICON_FA_ADJUST),
            'iconOptions' => ['id' => 'icon-id'],
            'hidden' => false,
            'load' => 'site/index',
            'refresh' => 12,
            'header' => 'Header',
            'headerOptions' => ['class' => 'header-class'],
            'headerH2Options' => ['class' => 'h2-class'],
            'addon' => 'addon',
            'toolbar' => [
                'Toolbar1',
                ['body' => 'Toolbar2', 'options' => ['id' => 'toolbar-id']]
            ],
            'bodyToolbar' => [
                'BodyToolbar1',
                ['body' => 'BodyToolbar2', 'options' => ['id' => 'body-toolbar-id']]
            ],
            'footer' => [
                'Footer1',
                ['body' => 'Footer2', 'options' => ['id' => 'footer-id']]
            ],
            'body' => '<p>Content</p>',
            'noPadding' => true,
            'bodyOptions' => ['id' => 'content-id'],
        ]), $str);
    }

    public function testBeginEndBody()
    {
        ob_start();
        $jarvis = Jarvis::begin([
            'id' => 'begin-end'
        ]);
        echo '<p>Body</p>';
        Jarvis::end();
        $content = ob_get_clean();

        $str = '<div id="begin-end" class="jarviswidget"><header></header><div><div class="widget-body"><p>Body</p></div></div></div>';
        $this->assertEquals($content, $str);
    }

    public function testBeginEndHeader()
    {
        ob_start();
        $jarvis = Jarvis::begin([
            'id' => 'begin-end'
        ]);
        $jarvis->beginHeader();
        echo 'Header';
        $jarvis->endHeader();
        echo '<p>Body</p>';
        Jarvis::end();
        $content = ob_get_clean();

        $str = '<div id="begin-end" class="jarviswidget">' .
                    '<header><h2>Header</h2></header>' .
                    '<div>' .
                        '<div class="widget-body"><p>Body</p></div>' .
                    '</div>' .
                '</div>';
        $this->assertEquals($content, $str);
    }

    public function testBeginEndIcon()
    {
        ob_start();
        $jarvis = Jarvis::begin([
            'id' => 'begin-end',
            'icon' => 'its not print',
        ]);
        echo '<p>Body</p>';
        $jarvis->beginIcon();
        echo Html::icon(Html::ICON_FA_BELL_SLASH);
        $jarvis->endIcon();
        Jarvis::end();
        $content = ob_get_clean();

        $str = '<div id="begin-end" class="jarviswidget">' .
            '<header>' .
                '<span class="widget-icon"><i class="fa fa-bell-slash"></i></span>' .
            '</header>' .
            '<div>' .
            '<div class="widget-body"><p>Body</p></div>' .
            '</div>' .
            '</div>';
        $this->assertEquals($content, $str);
    }

    public function testBeginEndToolbar()
    {
        ob_start();
        $jarvis = Jarvis::begin([
            'id' => 'begin-end',
            'toolbar' => 'its print!',
        ]);
        echo '<p>Body</p>';
        $jarvis->beginToolbar(['class' => 't-one']);
        echo 'Toolbar 1';
        $jarvis->endToolbar();
        $jarvis->beginToolbar(['class' => 't-two']);
        echo 'Toolbar 2';
        $jarvis->endToolbar();
        Jarvis::end();
        $content = ob_get_clean();

        $str = '<div id="begin-end" class="jarviswidget">' .
                '<header>' .
                    '<div class="widget-toolbar">its print!</div>'.
                    '<div class="t-one widget-toolbar">Toolbar 1</div>'.
                    '<div class="t-two widget-toolbar">Toolbar 2</div>'.
                '</header>' .
                '<div>' .
                    '<div class="widget-body"><p>Body</p></div>' .
                '</div>' .
            '</div>';
        $this->assertEquals($content, $str);
    }

    public function testBeginEndAddon()
    {
        ob_start();
        $jarvis = Jarvis::begin([
            'id' => 'begin-end',
        ]);
        echo '<p>Body</p>';
        $jarvis->beginAddon();
        echo 'addon';
        $jarvis->endAddon();
        Jarvis::end();
        $content = ob_get_clean();

        $str = '<div id="begin-end" class="jarviswidget">' .
            '<header>' .
            'addon' .
            '</header>' .
            '<div>' .
            '<div class="widget-body"><p>Body</p></div>' .
            '</div>' .
            '</div>';
        $this->assertEquals($content, $str);
    }

    public function testBeginEndEditbox()
    {
        ob_start();
        $jarvis = Jarvis::begin([
            'id' => 'begin-end',
            'editbutton' => 'true',
        ]);
        echo '<p>Body</p>';
        $jarvis->beginEditBox([
            'id' => 'editbox',
        ]);
        echo 'editbox';
        $jarvis->endEditBox();
        Jarvis::end();
        $content = ob_get_clean();

        $str = '<div id="begin-end" class="jarviswidget" data-widget-editbutton="true">' .
            '<header></header>' .
            '<div>' .
            '<div id="editbox" class="jarviswidget-editbox">editbox</div>'.
            '<div class="widget-body"><p>Body</p></div>' .
            '</div>' .
            '</div>';
        $this->assertEquals($content, $str);
    }

    public function testBeginEndBodyToolbar()
    {
        ob_start();
        $jarvis = Jarvis::begin([
            'id' => 'begin-end',
            'bodyToolbar' => 'its print!',
        ]);
        echo '<p>Body</p>';
        $jarvis->beginBodyToolbar(['class' => 'bt-one']);
        echo 'Toolbar 1';
        $jarvis->endBodyToolbar();
        $jarvis->beginBodyToolbar(['class' => 'bt-two']);
        echo 'Toolbar 2';
        $jarvis->endBodyToolbar();
        Jarvis::end();
        $content = ob_get_clean();

        $str = '<div id="begin-end" class="jarviswidget">' .
                '<header></header>' .
                '<div>' .
                    '<div class="widget-body">' .
                        '<div class="widget-body-toolbar">its print!</div>'.
                        '<div class="bt-one widget-body-toolbar">Toolbar 1</div>'.
                        '<div class="bt-two widget-body-toolbar">Toolbar 2</div>'.
                        '<p>Body</p>' .
                    '</div>' .
                '</div>' .
            '</div>';
        $this->assertEquals($content, $str);
    }


    public function testBeginEndFooter()
    {
        ob_start();
        $jarvis = Jarvis::begin([
            'id' => 'begin-end',
        ]);
        echo '<p>Body</p>';
        $jarvis->beginFooter();
        echo 'Footer';
        $jarvis->endFooter();
        Jarvis::end();
        $content = ob_get_clean();

        $str = '<div id="begin-end" class="jarviswidget">' .
            '<header></header>' .
            '<div>' .
            '<div class="widget-body"><p>Body</p><div class="widget-footer">Footer</div></div>' .
            '</div>' .
            '</div>';
        $this->assertEquals($content, $str);
    }
}