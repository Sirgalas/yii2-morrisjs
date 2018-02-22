<?php

namespace sirgalas\Morris;

use yii\helpers\ArrayHelper;

class Donut extends Base
{
    public $donutColor;

    protected $type = 'Donut';

    protected function getViewOptions()
    {
        $viewOptions = parent::getViewOptions();

        $viewOptions = ArrayHelper::merge($viewOptions, [
            'donutColor' => $this->donutColor,
        ]);

        return $viewOptions;
    }
}
