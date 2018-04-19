<?php

/**
 * This is the model class for table "orang".
 *
 * The followings are the available columns in table 'orang':
 * @property integer $id_orang
 * @property string $nama_orang
 * @property string $jenis_kelamin
 *
 * The followings are the available model relations:
 * @property Transaksi[] $transaksis
 */
class Orang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_orang, jenis_kelamin', 'required'),
			array('nama_orang', 'length', 'max'=>35),
			array('jenis_kelamin', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_orang, nama_orang, jenis_kelamin', 'safe', 'on'=>'search'),
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
			'transaksis' => array(self::HAS_MANY, 'Transaksi', 'id_orang'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_orang' => 'Id Pelanggan',
			'nama_orang' => 'Nama Pelanggan',
			'jenis_kelamin' => 'Jenis Kelamin',
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

		$criteria->compare('id_orang',$this->id_orang);
		$criteria->compare('nama_orang',$this->nama_orang,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Orang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
