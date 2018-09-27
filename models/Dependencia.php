<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dependencia".
 *
 * @property int $id
 * @property string $dependencia
 */
class Dependencia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dependencia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dependencia'], 'required'],
            [['dependencia'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dependencia' => 'Dependencia',
        ];
    }
}
