<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alimento".
 *
 * @property int $id
 * @property string|null $nome
 * @property float|null $preço
 */
class Alimento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alimento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['preço'], 'number'],
            [['nome'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'preço' => 'Preço',
        ];
    }
}
