<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $name
 * @property string $authors
 * @property int $status
 * @property int|null $read_count
 * @property int $price
 * @property int $year
 * @property string|null $ISBN
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'authors', 'price', 'year'], 'required'],
            [['status', 'read_count', 'price', 'year', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name', 'authors'], 'string', 'max' => 128],
            [['ISBN'], 'string', 'max' => 14],
            [['ISBN'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'authors' => Yii::t('app', 'Authors'),
            'status' => Yii::t('app', 'Status'),
            'read_count' => Yii::t('app', 'Read Count'),
            'price' => Yii::t('app', 'Price'),
            'year' => Yii::t('app', 'Year'),
            'ISBN' => Yii::t('app', 'Isbn'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
}
