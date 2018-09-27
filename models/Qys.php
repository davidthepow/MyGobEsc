<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "qys".
 *
 * @property int $id
 * @property string $tipo
 * @property string $dependencia
 * @property string $descripcion
 * @property string $estatus
 * @property resource $Imagen
 * @property string $hora
 */
class Qys extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'qys';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo', 'dependencia', 'descripcion', 'estatus', 'Imagen', 'hora'], 'required'],
            [['Imagen'], 'string'],
            [['hora'], 'safe'],
            [['tipo'], 'string', 'max' => 80],
            [['dependencia', 'descripcion', 'estatus'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo' => 'Tipo',
            'dependencia' => 'Dependencia',
            'descripcion' => 'Descripcion',
            'estatus' => 'Estatus',
            'Imagen' => 'Imagen',
            'hora' => 'Hora',
        ];
    }
}
