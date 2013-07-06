<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $color
 * @property string $size
 * @property string $condition
 * @property string $material
 * @property string $brand
 * @property string $type
 * @property double $priceBuy
 * @property double $priceSell
 * @property string $timeBuy
 * @property string $timeSell
 * @property string $timeCreate
 * @property string $timeUpdate
 * @property string $timeAvailable
 * @property integer $categoryId
 * @property string $status
 * @property string $statusEbay
 * @property string $transactionIdEbay
 * @property string $statusFacebook
 * @property integer $supplierId
 * @property integer $isCommentable
 * @property integer $viewCount
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('categoryId, supplierId, isCommentable, viewCount', 'numerical', 'integerOnly'=>true),
			array('priceBuy, priceSell', 'numerical'),
			array('name, condition, type', 'length', 'max'=>500),
			array('description', 'length', 'max'=>5000),
			array('color, size, material, brand', 'length', 'max'=>200),
			array('status, statusEbay', 'length', 'max'=>50),
			array('transactionIdEbay', 'length', 'max'=>100),
			array('statusFacebook', 'length', 'max'=>20),
			array('timeBuy, timeSell, timeCreate, timeUpdate, timeAvailable', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, description, color, size, condition, material, brand, type, priceBuy, priceSell, timeBuy, timeSell, timeCreate, timeUpdate, timeAvailable, categoryId, status, statusEbay, transactionIdEbay, statusFacebook, supplierId, isCommentable, viewCount', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'description' => 'Description',
			'color' => 'Color',
			'size' => 'Size',
			'condition' => 'Condition',
			'material' => 'Material',
			'brand' => 'Brand',
			'type' => 'Type',
			'priceBuy' => 'Price Buy',
			'priceSell' => 'Price Sell',
			'timeBuy' => 'Time Buy',
			'timeSell' => 'Time Sell',
			'timeCreate' => 'Time Create',
			'timeUpdate' => 'Time Update',
			'timeAvailable' => 'Time Available',
			'categoryId' => 'Category',
			'status' => 'Status',
			'statusEbay' => 'Status Ebay',
			'transactionIdEbay' => 'Transaction Id Ebay',
			'statusFacebook' => 'Status Facebook',
			'supplierId' => 'Supplier',
			'isCommentable' => 'Is Commentable',
			'viewCount' => 'View Count',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('condition',$this->condition,true);
		$criteria->compare('material',$this->material,true);
		$criteria->compare('brand',$this->brand,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('priceBuy',$this->priceBuy);
		$criteria->compare('priceSell',$this->priceSell);
		$criteria->compare('timeBuy',$this->timeBuy,true);
		$criteria->compare('timeSell',$this->timeSell,true);
		$criteria->compare('timeCreate',$this->timeCreate,true);
		$criteria->compare('timeUpdate',$this->timeUpdate,true);
		$criteria->compare('timeAvailable',$this->timeAvailable,true);
		$criteria->compare('categoryId',$this->categoryId);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('statusEbay',$this->statusEbay,true);
		$criteria->compare('transactionIdEbay',$this->transactionIdEbay,true);
		$criteria->compare('statusFacebook',$this->statusFacebook,true);
		$criteria->compare('supplierId',$this->supplierId);
		$criteria->compare('isCommentable',$this->isCommentable);
		$criteria->compare('viewCount',$this->viewCount);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}