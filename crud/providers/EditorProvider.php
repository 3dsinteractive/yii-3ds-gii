<?php
/**
 * Created by Sublime Text 2.
 * User: untinosz
 * Date: 19.02.15
 * Time: 11:50
 */

namespace yii3ds\gii\crud\providers;

use yii\db\ColumnSchema;

class EditorProvider extends \yii3ds\gii\base\Provider
{
    public function activeField(ColumnSchema $attribute)
    {
        if (!isset($this->generator->getTableSchema()->columns[$attribute->name])) {
            return null;
        }
        $column = $this->generator->getTableSchema()->columns[$attribute->name];
        switch (true) {
            case (in_array($column->name, $this->columnNames)):
                $this->generator->requires[] = '2amigos/yii2-ckeditor-widget';
                return <<<EOS
\$form->field(\$model, '{$attribute->name}')->widget(
    \dosamigos\ckeditor\CKEditor::className(),
    [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]
)
EOS;
            default:
                return null;
        }
    }
} 