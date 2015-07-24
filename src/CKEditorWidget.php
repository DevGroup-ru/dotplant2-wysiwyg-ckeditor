<?php

namespace DotPlant\CKEditor;

use mihaildev\ckeditor\CKEditor;

class CKEditorWidget extends CKEditor
{
    public function run()
    {
        $module = \Yii::$app->getModule('elfinder');
        if ($module) {
            $options = $this->editorOptions;
            $this->editorOptions = \mihaildev\elfinder\ElFinder::ckeditorOptions(['/elfinder/path'], $options);
        }
        return parent::run();
    }
}