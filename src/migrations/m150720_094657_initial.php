<?php

use yii\db\Schema;
use yii\db\Migration;

class m150720_094657_initial extends Migration
{
    public function up()
    {
        $this->insert('{{%wysiwyg}}', [
            'name' => 'CKEditor',
            'class_name' => 'DotPlant\CKEditor\CKEditorWidget',
            'params' => yii\helpers\Json::encode([
                'editorOptions' => [
                    'preset' => 'full',
                ],
            ]),
            'configuration_model' => 'DotPlant\CKEditor\components\ConfigurationModel',
            'configuration_view' => '@ckeditor/views/ckeditor-config.php',
        ]);

        $this->insert(
            '{{%configurable}}',
            [
                'module' => 'WysiwygCKEditor',
                'sort_order' => 99,
                'section_name' => 'CKEditor WYSIWYG',
                'display_in_config' => 0,
            ]
        );
    }

    public function down()
    {
        $this->delete('{{%wysiwyg}}', ['name' => 'CKEditor']);
        $this->delete('{{%configurable}}', ['module' => 'WysiwygCKEditor']);
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
