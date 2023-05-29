<?php

namespace sadi01\bidashboard\widgets;

use Yii;
use app\models\UserModel;
use sadi01\bidashboard\models\ReportWidget;
use yii\base\Widget;
use yii\helpers\Html;

class ReportModalWidget extends Widget
{
    public $queryParams;
    public $searchModel;
    public $searchRoute;
    public $searchModelFormName;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $model = new ReportWidget();
        return $this->render('ReportModalWidget', [
            'model' => $model,
            'queryParams' => $this->queryParams,
            'searchModel' => $this->searchModel,
            'searchRoute' => $this->searchRoute,
            'searchModelFormName' => $this->searchModelFormName,
        ]);
    }
}