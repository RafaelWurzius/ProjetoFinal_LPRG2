<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "venda".
 *
 * @property int $id
 * @property string|null $data
 * @property int|null $idCliente
 * @property int|null $idAlimento
 *
 * @property Alimento $idAlimento0
 * @property Cliente $idCliente0
 */
class Venda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'venda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data'], 'safe'],
            [['idCliente', 'idAlimento'], 'integer'],
            [['idAlimento'], 'exist', 'skipOnError' => true, 'targetClass' => Alimento::className(), 'targetAttribute' => ['idAlimento' => 'id']],
            [['idCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['idCliente' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data' => 'Data',
            'idCliente' => 'Id Cliente',
            'idAlimento' => 'Id Alimento',
        ];
    }

    /**
     * Gets query for [[IdAlimento0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdAlimento0()
    {
        return $this->hasOne(Alimento::className(), ['id' => 'idAlimento']);
    }

    /**
     * Gets query for [[IdCliente0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdCliente0()
    {
        return $this->hasOne(Cliente::className(), ['id' => 'idCliente']);
    }
}
