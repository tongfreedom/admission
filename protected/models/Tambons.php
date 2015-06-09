<?php

/**
 * This is the model class for table "tambons".
 *
 * The followings are the available columns in table 'tambons':
 * @property integer $id
 * @property integer $districts_id
 * @property integer $provinces_id
 * @property string $tambon_name
 *
 * The followings are the available model relations:
 * @property Students[] $students
 * @property Districts $districts
 * @property Provinces $provinces
 */
class Tambons extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tambons';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('districts_id, provinces_id', 'required'),
			array('districts_id, provinces_id', 'numerical', 'integerOnly'=>true),
			array('tambon_name', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, districts_id, provinces_id, tambon_name', 'safe', 'on'=>'search'),
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
			'students' => array(self::HAS_MANY, 'Students', 'tambons_id'),
			'districts' => array(self::BELONGS_TO, 'Districts', 'districts_id'),
			'provinces' => array(self::BELONGS_TO, 'Provinces', 'provinces_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'รหัสตำบล',
			'districts_id' => 'รหัสอำเภอ',
			'provinces_id' => 'รหัสจังหวัด',
			'tambon_name' => 'ชื่อตำบล',
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
		$criteria->compare('districts_id',$this->districts_id);
		$criteria->compare('provinces_id',$this->provinces_id);
		$criteria->compare('tambon_name',$this->tambon_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tambons the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
