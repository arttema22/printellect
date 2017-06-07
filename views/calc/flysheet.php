<?php
/* @var $this yii\web\View */

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\bootstrap\Alert;

$this->title = 'Листовки';
?>

<script type="text/javascript">

    function calc() {

        //получаем ссылку на элемент Select (Плотность)
        var density = document.getElementById("density");
        var density_val = density.options[density.selectedIndex].value;

        //получаем ссылку на элемент Select (Количество)
        var quantity = document.getElementById("quantity");
        var quantity_val = quantity.options[quantity.selectedIndex].value;

        //получаем ссылку на элемент Select (Формат)
        var format = document.getElementById("format");
        var format_val = format.options[format.selectedIndex].value;

        //получаем ссылку на элемент Select (Печать)
        var print = document.getElementById("print");
        var print_val = print.options[print.selectedIndex].value;

        //получаем ссылку на элемент span, в него будем писать стоимость
        var result = document.getElementById("result");

        var price = 0;
        price = parseFloat(flysheet[density_val][quantity_val]);
//
//        if (rounding_corners.checked)
//        {
//            price = price + parseFloat(bcard_pp[0][val]);
//        }
//        ;
//
//        document.getElementById('price_all').value = price;
//
//        document.getElementById('round_corners').value = rounding_corners.checked;

        result.innerHTML = price;
    }

    function calc_order(id) {
//        display = document.getElementById(id).style.display;
//        if (display == 'none') {
        document.getElementById(id).style.display = 'block';
//        } else {
//            document.getElementById(id).style.display = 'none';
//        }
        document.getElementById('btn_order').style.display = 'none';
    }

</script>


<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
    <div class="block-calc" id="bcard">
        <?=
        Alert::widget([
            'options' => [
                'class' => 'alert-success',
            ],
            'body' => 'Здравствуйте.<br>'
            . 'Благодарим за выбор компании printellect.<br>'
            . 'Заявка принята в обработку. Менеджер свяжется с Вами в самое ближайшее время.',
        ]);
        ?>
    </div>
<?php endif; ?>
<div class="block-calc" id="bcard">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#calc" data-toggle="tab">Калькулятор</a></li>
        <li><a href="#price" data-toggle="tab">Прайс</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="calc">
            <div class="row calc">
                <?php $form = ActiveForm::begin(['id' => 'calc-order-form']); ?>
                <div class="col-md-12">
                    <h1><?= $this->title ?></h1>
                    <p>Укажите необходимые параметры, получите стоимость сразу и нажмите кнопку "Заказать" чтобы отправить заказ в типографию.</p>
                </div>
                <div class="col-md-6">
                    <?php //=
//                            $form->field($model, 'density')
//                            ->dropdownList(\app\models\CalcFlysheet::find()->select(['density', 'id'])
//                                    ->indexBy('id')->column(),  [
//                                'id' => 'density',
//                                'onchange' => 'calc()'
//                                    ]
//                    );
                    ?>
                    <?=
                            $form->field($model, 'density')
                            ->dropDownList([
                                '120' => '120 г/м.кв.',
                                '170' => '170 г/м.кв.',
                                '290' => '290 г/м.кв.',
                                    ], [
                                'id' => 'density',
                                'onchange' => 'calc()'
                    ]);
                    ?>
                    <?=
                            $form->field($model, 'quantity')
                            ->dropDownList([
                                'p50' => '50 экз.',
                                'p100' => '100 экз.',
                                'p200' => '200 экз.',
                                'p300' => '300 экз.',
                                'p400' => '400 экз.',
                                'p500' => '500 экз.',
                                'p1000' => '1000 экз.',
                                'p2000' => '2000 экз.',
                                'p3000' => '3000 экз.',
                                'p4000' => '4000 экз.',
                                'p5000' => '5000 экз.',
                                'p8000' => '8000 экз.',
                                'p10000' => '10000 экз.',
                                    ], [
                                'id' => 'quantity',
                                'onchange' => 'calc()']);
                    ?>
                </div>
                <div class="col-md-6">
                    <?=
                            $form->field($model, 'format')
                            ->dropDownList([
                                'A3' => 'A3',
                                'A4' => 'A4',
                                'A5' => 'A5',
                                'A6' => 'A6',
                                '210x200' => '210x200',
                                '120x120' => '120x120 для CD',
                                '210x98' => '210x98',
                                '150x70' => '150x70',
                                '100x70' => '100x70',
                                'кон' => 'конверт',
                                    ], [
                                'id' => 'format',
                                'onchange' => 'calc()'
                    ]);
                    ?>
                    <?=
                            $form->field($model, 'print4or0')
                            ->dropDownList([
                                '1' => 'С двух сторон',
                                '0' => 'С одной стороны',
                                    ], [
                                'id' => 'print',
                                'onchange' => 'calc()']);
                    ?>
                </div>
                <div class="col-md-12">
                    <?=
                    $form->field($model, 'rounding_corners')->checkbox([
                        'id' => 'rounding_corners',
                        'name' => 'rounding_corners',
                        'onchange' => 'calc()',
                    ]);
                    ?>
                </div>
                <div class="col-md-12">
                    <h1><span id="result">0</span> руб.</h1>
                    <div id="calc_order" style="display: none;">
                        <div class="form-group">
                            <p>Пожалуйста, укажите Ваши контактные данные.</p>   
                        </div>
                        <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Ваше имя']) ?>
                        <?= $form->field($model, 'email')->input('email') ?>
                        <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Ваш номер телефона']) ?>
                        <?= $form->field($model, 'comment')->textarea(['rows' => 3]) ?>
                        <?= $form->field($model, 'round_corners')->textInput(['id' => 'round_corners', 'type' => 'hidden'])->label(false) ?>
                        <?= $form->field($model, 'price')->textInput(['id' => 'price_all', 'type' => 'hidden'])->label(false) ?>
                        <?=
                        $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ])
                        ?>
                        <div class="form-group">
                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-default btn-block', 'name' => 'order-button']) ?>
                        </div>
                    </div>
                    <a href="#" onclick="calc_order('calc_order'); return false" class="btn btn-default btn-block" id="btn_order">Заказать</a>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <div class="tab-pane" id="price">
            <!-- Nav pills -->
            <ul class="nav nav-pills navbar-right">
                <li class="active"><a href="#table1" data-toggle="tab">Тираж 1-1000</a></li>
                <li><a href="#table2" data-toggle="tab">Тираж 2000-10000</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="table1">
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <tr>
                                <th class="col-left"><span>Плотность</span></th>
                                <th class="col-left"><span>Формат</span></th>
                                <th class="col-left"><span>Печать</span></th>
                                <th><span>50 шт.</span></th>
                                <th><span>100 шт.</span></th>
                                <th><span>200 шт.</span></th>
                                <th><span>300 шт.</span></th>
                                <th><span>400 шт.</span></th>
                                <th><span>500 шт.</span></th>
                                <th><span>1000 шт.</span></th>
                            </tr>
                            <?php foreach ($flysheet as $uprice) { ?>
                                <tr>
                                    <th><?= $uprice['density']; ?></th>
                                    <th><?= $uprice['format']; ?></th>
                                    <th><?= $uprice['print']; ?></th>
                                    <td><?= $uprice['p50']; ?> р.</td>
                                    <td><?= $uprice['p100']; ?> р.</td>
                                    <td><?= $uprice['p200']; ?> р.</td>
                                    <td><?= $uprice['p300']; ?> р.</td>
                                    <td><?= $uprice['p400']; ?> р.</td>
                                    <td><?= $uprice['p500']; ?> р.</td>
                                    <td><?= $uprice['p1000']; ?> р.</td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <th colspan="10"><span>Постпечать</span></th>
                            </tr>
                            <?php foreach ($flysheet_pp as $uprice) { ?>
                                <tr>
                                    <th colspan="3"><?= $uprice['name']; ?></th>
                                    <td><?= $uprice['p50']; ?> р.</td>
                                    <td><?= $uprice['p100']; ?> р.</td>
                                    <td><?= $uprice['p200']; ?> р.</td>
                                    <td><?= $uprice['p300']; ?> р.</td>
                                    <td><?= $uprice['p400']; ?> р.</td>
                                    <td><?= $uprice['p500']; ?> р.</td>
                                    <td><?= $uprice['p1000']; ?> р.</td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="table2">
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <tr>
                                <th class="col-left"><span>Плотность</span></th>
                                <th class="col-left"><span>Формат</span></th>
                                <th class="col-left"><span>Печать</span></th>
                                <th><span>2000 шт.</span></th>
                                <th><span>3000 шт.</span></th>
                                <th><span>4000 шт.</span></th>
                                <th><span>5000 шт.</span></th>
                                <th><span>8000 шт.</span></th>
                                <th><span>10000 шт.</span></th>
                            </tr>
                            <?php foreach ($flysheet as $uprice) { ?>
                                <tr>
                                    <th><?= $uprice['density']; ?></th>
                                    <th><?= $uprice['format']; ?></th>
                                    <th><?= $uprice['print']; ?></th>
                                    <td><?= $uprice['p2000']; ?> р.</td>
                                    <td><?= $uprice['p3000']; ?> р.</td>
                                    <td><?= $uprice['p4000']; ?> р.</td>
                                    <td><?= $uprice['p5000']; ?> р.</td>
                                    <td><?= $uprice['p8000']; ?> р.</td>
                                    <td><?= $uprice['p10000']; ?> р.</td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <th colspan="9"><span>Постпечать</span></th>
                            </tr>
                            <?php foreach ($flysheet_pp as $uprice) { ?>
                                <tr>
                                    <th colspan="3"><?= $uprice['name']; ?></th>
                                    <td><?= $uprice['p2000']; ?> р.</td>
                                    <td><?= $uprice['p3000']; ?> р.</td>
                                    <td><?= $uprice['p4000']; ?> р.</td>
                                    <td><?= $uprice['p5000']; ?> р.</td>
                                    <td><?= $uprice['p8000']; ?> р.</td>
                                    <td><?= $uprice['p10000']; ?> р.</td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    calc();
</script>