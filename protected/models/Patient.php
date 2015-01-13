<?php

/**
 * This is the model class for table "patient".
 *
 * The followings are the available columns in table 'patient':
 * @property integer $id
 * @property string $cid
 * @property string $prename
 * @property string $fname
 * @property string $lname
 * @property string $sex
 * @property integer $age
 * @property string $disease
 * @property string $reg_date
 * @property string $user
 */
class Patient extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'patient';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('cid, prename, fname, lname, sex, disease','required'),
            array('age', 'numerical', 'integerOnly' => true),
            array('cid, prename, fname, lname, sex, disease, reg_date, user', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, cid, prename, fname, lname, sex, age, disease, reg_date, user', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            
            'mprename'=> array(self::BELONGS_TO,'Mprename','prename'),
            'mdisease'=>array(self::BELONGS_TO,'Mdisease','disease'),
            'msex'=>array(self::BELONGS_TO,'Msex','sex'),
            
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'cid' => 'เลข13หลัก',
            'prename' => 'คำนำ',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'sex' => 'Sex',
            'age' => 'Age',
            'disease' => 'Disease',
            'reg_date' => 'Reg Date',
            'user' => 'User',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;
         $criteria->with = array('mdisease', 'mprename','msex');

        $criteria->compare('t.id', $this->id);
        $criteria->compare('cid', $this->cid, true);
        $criteria->compare('prename', $this->prename, true);
        $criteria->compare('fname', $this->fname, true);
        $criteria->compare('lname', $this->lname, true);
        $criteria->compare('msex.name', $this->sex, true);
        $criteria->compare('age', $this->age);
        $criteria->compare('mdisease.disease', $this->disease, true);
        $criteria->compare('reg_date', $this->reg_date, true);
        $criteria->compare('user', $this->user, true);
       

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Patient the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
