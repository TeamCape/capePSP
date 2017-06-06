<?php

/**
 * This is the model class for table "product_order".
 *
 * The followings are the available columns in table 'product_order':
 * @property integer $Id
 * @property integer $ProductId
 * @property integer $CustomerId
 * @property string $OrderNote
 * @property string $DeliveryAddress
 * @property string $Status
 * @property string $Date
 */
class ProductOrder extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ProductId, CustomerId, DeliveryAddress', 'required'),
			array('ProductId, CustomerId', 'numerical', 'integerOnly'=>true),
			array('Status', 'length', 'max'=>10),
			array('OrderNote, Date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, ProductId, CustomerId, OrderNote, DeliveryAddress, Status, Date', 'safe', 'on'=>'search'),
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
			'Id' => 'ID',
			'ProductId' => 'Product',
			'CustomerId' => 'Customer',
			'OrderNote' => 'Order Note',
			'DeliveryAddress' => 'Delivery Address',
			'Status' => 'Status',
			'Date' => 'Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Id',$this->Id);
		$criteria->compare('ProductId',$this->ProductId);
		$criteria->compare('CustomerId',$this->CustomerId);
		$criteria->compare('OrderNote',$this->OrderNote,true);
		$criteria->compare('DeliveryAddress',$this->DeliveryAddress,true);
		$criteria->compare('Status',$this->Status,true);
		$criteria->compare('Date',$this->Date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductOrder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
