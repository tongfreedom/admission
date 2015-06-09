<?php

/**
 * This is the model class for table "districts".
 *
 * The followings are the available columns in table 'districts':
 * @property integer $id
 * @property integer $provinces_id
 * @property string $district_name
 *
 * The followings are the available model relations:
 * @property Provinces $provinces
 * @property Tambons[] $tambons
 */
class Districts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'districts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('provinces_id', 'required'),
			array('provinces_id', 'numerical', 'integerOnly'=>true),
			array('district_name', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, provinces_id, district_name', 'safe', 'on'=>'search'),
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
			'provinces' => array(self::BELONGS_TO, 'Provinces', 'provinces_id'),
			'tambons' => array(self::HAS_MANY, 'Tambons', 'districts_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'รหัสอำเภอ',
			'provinces_id' => 'รหัสจังหวัด',
			'district_name' => 'ชื่ออำเภอ',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('provinces_id',$this->provinces_id);
		$criteria->compare('district_name',$this->district_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Districts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
