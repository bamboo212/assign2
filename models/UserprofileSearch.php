<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Userprofile;

/**
 * UserprofileSearch represents the model behind the search form about `app\models\Userprofile`.
 */
class UserprofileSearch extends Userprofile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'yearsOfExperience'], 'integer'],
            [['fname', 'lname', 'dob', 'gender', 'industry', 'loc', 'aboutMe', 'picName', 'picture', 'professionalTitle', 'careerLevel', 'commLevel', 'OrgLevel', 'jobRelLevel', 'address', 'phone', 'website', 'email'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Userprofile::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'pid' => $this->pid,
            'yearsOfExperience' => $this->yearsOfExperience,
        ]);

        $query->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'dob', $this->dob])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'industry', $this->industry])
            ->andFilterWhere(['like', 'loc', $this->loc])
            ->andFilterWhere(['like', 'aboutMe', $this->aboutMe])
            ->andFilterWhere(['like', 'picName', $this->picName])
            ->andFilterWhere(['like', 'picture', $this->picture])
            ->andFilterWhere(['like', 'professionalTitle', $this->professionalTitle])
            ->andFilterWhere(['like', 'careerLevel', $this->careerLevel])
            ->andFilterWhere(['like', 'commLevel', $this->commLevel])
            ->andFilterWhere(['like', 'OrgLevel', $this->OrgLevel])
            ->andFilterWhere(['like', 'jobRelLevel', $this->jobRelLevel])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
