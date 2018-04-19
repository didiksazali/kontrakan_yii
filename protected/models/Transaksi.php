<?php

/**
 * This is the model class for table "transaksi".
 *
 * The followings are the available columns in table 'transaksi':
 * @property integer $id_transaksi
 * @property integer $id_orang
 * @property string $kode_kamar
 * @property integer $lama_inap
 * @property integer $biaya_tambahan
 *
 * The followings are the available model relations:
 * @property Orang $idOrang
 * @property Kamar $kodeKamar
 */
class Transaksi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	 public function biayaKamar()
 	{
 		// $model->idOrang->jenis_kelamin;
 		if ($this->lama_inap<=10) {
 			$biayaKamar = $this->lama_inap * $this->kodeKamar->tarif_normal;
 		} else {
 			$biayaKamar = $this->lama_inap * $this->kodeKamar->tarif_khusus;
 		}
 		// $total=$this->gaji_pokok + $this->tunjangan;
 		return $biayaKamar;
 	}

	public function biayaTotal()
	{
		return $this->biayaKamar() + $this->biaya_tambahan;
	}

	public function tableName()
	{
		return 'transaksi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_orang, kode_kamar, lama_inap, biaya_tambahan', 'required'),
			array('id_orang, lama_inap, biaya_tambahan', 'numerical', 'integerOnly'=>true),
			array('kode_kamar', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_transaksi, id_orang, kode_kamar, lama_inap, biaya_tambahan', 'safe', 'on'=>'search'),
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
			'idOrang' => array(self::BELONGS_TO, 'Orang', 'id_orang'),
			'kodeKamar' => array(self::BELONGS_TO, 'Kamar', 'kode_kamar'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_transaksi' => 'Id Transaksi',
			'id_orang' => 'Id Orang',
			'kode_kamar' => 'Kode Kamar',
			'lama_inap' => 'Lama Inap',
			'biaya_tambahan' => 'Biaya Tambahan',
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

		$criteria->compare('id_transaksi',$this->id_transaksi);
		$criteria->compare('id_orang',$this->id_orang);
		$criteria->compare('kode_kamar',$this->kode_kamar,true);
		$criteria->compare('lama_inap',$this->lama_inap);
		$criteria->compare('biaya_tambahan',$this->biaya_tambahan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transaksi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
