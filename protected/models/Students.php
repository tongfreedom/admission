<?php

/**
 * This is the model class for table "students".
 *
 * The followings are the available columns in table 'students':
 * @property integer $id
 * @property integer $levels_id
 * @property string $fisrt_name
 * @property string $las_name
 * @property string $email
 * @property string $tel
 * @property integer $prefix_id
 * @property string $parent_first_name
 * @property string $parent_last_name
 * @property string $parent_tel
 * @property string $parent_email
 * @property string $created
 * @property string $address
 * @property integer $tambons_id
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Levels $levels
 * @property Prefixs $prefix
 * @property Tambons $tambons
 */
class Students extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'students';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('levels_id, prefix_id, tambons_id', 'required'),
			array('levels_id, prefix_id, tambons_id', 'numerical', 'integerOnly'=>true),
			array('fisrt_name, las_name, email, parent_first_name, parent_last_name, parent_email', 'length', 'max'=>100),
			array('tel, parent_tel, status', 'length', 'max'=>45),
			array('address', 'length', 'max'=>255),
			array('created', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, levels_id, fisrt_name, las_name, email, tel, prefix_id, parent_first_name, parent_last_name, parent_tel, parent_email, created, address, tambons_id, status', 'safe', 'on'=>'search'),
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
			'levels' => array(self::BELONGS_TO, 'Levels', 'levels_id'),
			'prefix' => array(self::BELONGS_TO, 'Prefixs', 'prefix_id'),
			'tambons' => array(self::BELONGS_TO, 'Tambons', 'tambons_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'รหัสนักเรียน',
			'levels_id' => 'รหัสระดับชั้น',
			'fisrt_name' => 'ชื่อ',
			'las_name' => 'นามสกุล',
			'email' => 'อีเมล์',
			'tel' => 'Tel',
			'prefix_id' => 'รหัสคำนำหน้า',
			'parent_first_name' => 'ชื่อผู้ปกครอง',
			'parent_last_name' => 'นามสกุลผู้ปกครอง',
			'parent_tel' => 'เบอร์โทรศัพท์ผู้ปกครอง',
			'parent_email' => 'อีเมล์ผู้ปกครอง',
			'created' => 'วันที่สร้าง',
			'address' => 'ที่อยู่',
			'tambons_id' => 'รหัสตำบล',
			'status' => 'สถานะ',
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
		$criteria->compare('levels_id',$this->levels_id);
		$criteria->compare('fisrt_name',$this->fisrt_name,true);
		$criteria->compare('las_name',$this->las_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('prefix_id',$this->prefix_id);
		$criteria->compare('parent_first_name',$this->parent_first_name,true);
		$criteria->compare('parent_last_name',$this->parent_last_name,true);
		$criteria->compare('parent_tel',$this->parent_tel,true);
		$criteria->compare('parent_email',$this->parent_email,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('tambons_id',$this->tambons_id);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Students the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
