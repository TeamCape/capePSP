<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $Id
 * @property string $Name
 * @property integer $Quantity
 * @property string $UnitsOfMeasure
 * @property integer $CategoryId
 * @property integer $Price
 * @property string $Description
 * @property string $Date
 * @property integer $UserFK
 * @property string $Image
 */
class Product extends CActiveRecord
{
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
			array('Name, Quantity, UnitsOfMeasure, CategoryId, UserFK', 'required'),
			array('Quantity, CategoryId, Price, UserFK', 'numerical', 'integerOnly'=>true),
			array('Name', 'length', 'max'=>150),
			array('UnitsOfMeasure', 'length', 'max'=>50),
			array('Image', 'length', 'max'=>255),
			array('Description, Date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, Name, Quantity, UnitsOfMeasure, CategoryId, Price, Description, Date, UserFK, Image', 'safe', 'on'=>'search'),
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
			'Name' => 'Name',
			'Quantity' => 'Quantity',
			'UnitsOfMeasure' => 'Units Of Measure',
			'CategoryId' => 'Category',
			'Price' => 'Price',
			'Description' => 'Description',
			'Date' => 'Date',
			'UserFK' => 'User Fk',
			'Image' => 'Image',
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
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Quantity',$this->Quantity);
		$criteria->compare('UnitsOfMeasure',$this->UnitsOfMeasure,true);
		$criteria->compare('CategoryId',$this->CategoryId);
		$criteria->compare('Price',$this->Price);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('Date',$this->Date,true);
		$criteria->compare('UserFK',$this->UserFK);
		$criteria->compare('Image',$this->Image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
