<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "color".
 *
 * @property integer $id
 * @property string $name
 * @property string $hex_value
 * @property integer $position
 */
class Color extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'color';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'hex_value', 'position'], 'required'],
            [['position'], 'integer'],
            [['position'], 'unique'],
            [['name', 'hex_value'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование цвета',
            'hex_value' => 'HEX значение',
            'position' => 'Позиция',
        ];
    }
}
