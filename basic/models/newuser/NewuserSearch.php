<?php
/**
 * Created by PhpStorm.
 * User: lipeng
 * Date: 2016/1/7
 * Time: 13:33
 */

namespace app\models\newuser;

use Yii;
use yii\data\ActiveDataProvider;

class NewuserSearch extends Newuser
{
    public function rules(){
        return [
            ['id','integer'],
            [[
                'username',
                'email',
            ],'safe']
        ];
    }
    public function scenarios()
    {
        return parent::scenarios(); // TODO: Change the autogenerated stub
    }
    public function search($params){
        $query = Newuser::find();

        //数据提供
        $dataProvider = new ActiveDataProvider([
            'query'=>$query,
        ]);
        $this->load($params);
        if(!$this->validate()){
            return $dataProvider;
        }
        $query->andFilterWhere([
            'id'=>$this->id,
        ]);
        return $dataProvider;
    }
}