<?php 
namespace app\controllers;

use app\models\Country;
use yii\data\Pagination;
use yii\web\Controller;


class PostController extends Controller
{

    public function actionIndex()
    {
        // $countrys = Country::find()->all();
        $query = Country::find();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $countrys = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', compact('countrys', 'pages'));
    }

    public function actionView($id)
    {
        var_dump($id);
        die;
    }

}