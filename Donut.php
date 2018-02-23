<?php
namespace sirgalas\Morris;

use yii\helpers\ArrayHelper;

class Donut extends Base
{
    public $donutColor;
    public $formatter;
    protected $type = 'Donut';
    protected function getViewOptions()
    {
        $viewOptions = parent::getViewOptions();
        $viewOptions = ArrayHelper::merge($viewOptions, [
            'donutColor' => $this->donutColor,
            'formatter'   => $this->formatter
        ]);
        return $viewOptions;
    }
}
