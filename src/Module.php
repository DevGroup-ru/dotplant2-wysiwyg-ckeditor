<?php

namespace DotPlant\CKEditor;

use app;
use app\components\ExtensionModule;
use Yii;

class Module extends ExtensionModule
{
    public static $moduleId = 'WysiwygCKEditor';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'configurableModule' => [
                'class' => 'app\modules\config\behaviors\ConfigurableModuleBehavior',
                'configurationView' => '@ckeditor/views/configurable/_config',
                'configurableModel' => 'DotPlant\CKEditor\components\ConfigurationModel',
            ]
        ];
    }
}
