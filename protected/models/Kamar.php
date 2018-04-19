<?php

/**
 * This is the model class for table "kamar".
 *
 * The followings are the available columns in table 'kamar':
 * @property string $kode_kamar
 * @property string $nama_kamar
 * @property integer $tarif_normal
 * @property integer $tarif_khusus
 *
 * The followings are the available model relations:
 * @property Transaksi[] $transaksis
 */
class Kamar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kamar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_kamar, nama_kamar, tarif_normal, tarif_khusus', 'required'),
			array('tarif_normal, tarif_khusus', 'numerical', 'integerOnly'=>true),
			array('kode_kamar', 'length', 'max'=>5),
			array('nama_kamar', 'length', 'max'=>35),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kode_kamar, nama_kamar, tarif_normal, tarif_khusus', 'safe', 'on'=>'search'),
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
			'transaksis' => array(self::HAS_MANY, 'Transaksi', 'kode_kamar'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_kamar' => 'Kode Kamar',
			'nama_kamar' => 'Nama Kamar',
			'tarif_normal' => 'Tarif Normal',
			'tarif_khusus' => 'Tarif Khusus',
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

		$criteria->compare('kode_kamar',$this->kode_kamar,true);
		$criteria->compare('nama_kamar',$this->nama_kamar,true);
		$criteria->compare('tarif_normal',$this->tarif_normal);
		$criteria->compare('tarif_khusus',$this->tarif_khusus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kamar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
