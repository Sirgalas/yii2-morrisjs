<?php

use yii\helpers\Json;

/**
 * @var array $data
 * @var array $donutColor
 * @var string $element
 * @var string $hideHover
 * @var string $resize
 * @var string $constructor
 */

$dataJson = Json::encode($data);
$donutColorJson = Json::encode($donutColor);
if(!$hideHover)
    $hideHover='auto';
?>

<div id="<?= $element ?>"></div>
<?php $this->registerJs("window.{$element} = Morris.{$constructor}({
    element: '{$element}',
    resize   : '{$resize}',
    colors   : {$donutColorJson},
    data     : {$dataJson},
    hideHover: {$hideHover}
  });");
