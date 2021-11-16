<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contract_execution".
 *
 * @property int $id
 * @property int $contract_id
 * @property int $user_id
 * @property string|null $create_date
 * @property int|null $create_user
 * @property int|null $status
 * @property string|null $info
 * @property string|null $do_date
 * @property int|null $mark
 * @property string|null $rec_date
 * @property int|null $rec_user
 */
class ContractExecution extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contract_execution';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contract_id', 'user_id'], 'required'],
            [['contract_id', 'user_id', 'create_user', 'status', 'mark', 'rec_user'], 'integer'],
            [['create_date', 'do_date', 'rec_date'], 'safe'],
            [['info'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contract_id' => 'Contract ID',
            'user_id' => 'User ID',
            'create_date' => 'Create Date',
            'create_user' => 'Create User',
            'status' => 'Status',
            'info' => 'Info',
            'do_date' => 'Do Date',
            'mark' => 'Mark',
            'rec_date' => 'Rec Date',
            'rec_user' => 'Rec User',
        ];
    }
}
