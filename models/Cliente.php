<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $matricula
 * @property string|null $cpf
 *
 * @property Venda[] $vendas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 50],
            [['matricula'], 'string', 'max' => 10],
            [['cpf'], 'string', 'max' => 11],
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
            'matricula' => 'Matricula',
            'cpf' => 'Cpf',
        ];
    }

    /**
     * Gets query for [[Vendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendas()
    {
        return $this->hasMany(Venda::className(), ['idCliente' => 'id']);
    }
}
