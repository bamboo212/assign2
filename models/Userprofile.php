<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userprofile".
 *
 * @property integer $pid
 * @property string $fname
 * @property string $lname
 * @property string $dob
 * @property string $gender
 * @property integer $yearsOfExperience
 * @property string $industry
 * @property string $loc
 * @property string $aboutMe
 * @property string $picName
 * @property resource $picture
 * @property string $professionalTitle
 * @property string $careerLevel
 * @property string $commLevel
 * @property string $OrgLevel
 * @property string $jobRelLevel
 * @property string $address
 * @property string $phone
 * @property string $website
 * @property string $email
 */
class Userprofile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userprofile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fname', 'lname', 'dob', 'gender', 'industry', 'loc', 'aboutMe', 'picName', 'picture', 'professionalTitle', 'careerLevel', 'commLevel', 'OrgLevel', 'jobRelLevel', 'address', 'phone', 'website', 'email'], 'required'],
            [['yearsOfExperience'], 'integer'],
            [['picture'], 'string'],
            [['fname', 'lname', 'loc', 'website'], 'string', 'max' => 35],
            [['dob'], 'string', 'max' => 14],
            [['gender'], 'string', 'max' => 8],
            [['industry'], 'string', 'max' => 65],
            [['aboutMe', 'address'], 'string', 'max' => 255],
            [['picName'], 'string', 'max' => 100],
            [['professionalTitle'], 'string', 'max' => 12],
            [['careerLevel', 'commLevel', 'OrgLevel'], 'string', 'max' => 20],
            [['jobRelLevel'], 'string', 'max' => 25],
            [['phone'], 'string', 'max' => 24],
            [['email'], 'string', 'max' => 55],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pid' => 'Pid',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'dob' => 'Dob',
            'gender' => 'Gender',
            'yearsOfExperience' => 'Years Of Experience',
            'industry' => 'Industry',
            'loc' => 'Loc',
            'aboutMe' => 'About Me',
            'picName' => 'Pic Name',
            'picture' => 'Picture',
            'professionalTitle' => 'Professional Title',
            'careerLevel' => 'Career Level',
            'commLevel' => 'Comm Level',
            'OrgLevel' => 'Org Level',
            'jobRelLevel' => 'Job Rel Level',
            'address' => 'Address',
            'phone' => 'Phone',
            'website' => 'Website',
            'email' => 'Email',
        ];
    }
}
