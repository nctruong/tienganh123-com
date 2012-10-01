<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $fullname
 * @property string $dob
 * @property integer $gender
 * @property string $address
 * @property string $school
 * @property string $country
 * @property integer $premium
 * @property string $created_date
 *
 * The followings are the available model relations:
 * @property LessonsFavorite[] $lessonsFavorites
 * @property LessonsRemember[] $lessonsRemembers
 */
class Users extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Users the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'users';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, password, email, fullname, created_date', 'required'),
            array('gender, premium', 'numerical', 'integerOnly' => true),
            array('username, country', 'length', 'max' => 100),
            array('password', 'length', 'max' => 32),
            array('email', 'length', 'max' => 50),
            array('fullname', 'length', 'max' => 150),
            array('address', 'length', 'max' => 255),
            array('school', 'length', 'max' => 250),
            array('dob', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, username, password, email, fullname, dob, gender, address, school, country, premium, created_date', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'lessonsFavorites' => array(self::HAS_MANY, 'LessonsFavorite', 'user_id'),
            'lessonsRemembers' => array(self::HAS_MANY, 'LessonsRemember', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'fullname' => 'Fullname',
            'dob' => 'Dob',
            'gender' => 'Gender',
            'address' => 'Address',
            'school' => 'School',
            'country' => 'Country',
            'premium' => 'Premium',
            'created_date' => 'Created Date',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('username', $this->username, true);
        //$criteria->compare('password', $this->password, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('fullname', $this->fullname, true);
        $criteria->compare('dob', $this->dob, true);
        $criteria->compare('gender', $this->gender);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('school', $this->school, true);
        //$criteria->compare('country', $this->country, true);
        //$criteria->compare('premium', $this->premium);
        $criteria->compare('created_date', $this->created_date, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'sort' => false
                ));
    }

    public function afterSave() {
        if ($this->isNewRecord) {
            $this->created_date = new CDbExpression('NOW()');
        }
        parent::afterSave();
    }

}