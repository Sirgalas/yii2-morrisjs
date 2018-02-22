I was able to use the extension in the extension, Morris.Donut.
So, besides the code specified [here](https://github.com/antishov/yii2-morrisjs), шn order for you to use Morris.Donut,
use the following code:
```php
use sirgalas\Morris;


echo Morris\Donut::widget([
    'resize' => true,
    'element' => 'donutChart',
    'data' => [
        [ 'label'=>'Download Sales', 'value'=>12 ],
        [ 'label'=> 'In-Store Sales', 'value'=> 30 ],
        ['label'=>'Mail-Order Sales', 'value'=> 20 ]
    ],
    'donutColor' => ['#3c8dbc', '#f56954', '#00a65a'],
]);
```