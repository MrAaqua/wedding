<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Приглашение на свадьбу</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
{{--    <link href="https://fonts.googleapis.com/css2?family=Montagu+Slab:&display=swap" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css2?family=Montagu+Slab:opsz,wght@16..144,100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
<div class="container mt-5">
    <div class="row align-items-center mb-4">
        <div class="col-md-6 text-block">
            <h1>16·08·24</h1>
            <h2>Александр <br>
                <span class="centered">и</span> <br>
                Анастасия</h2>
            <p>Наша свадьба без вас не будет такой счастливой, уютной и веселой! <br>
                Приглашаем отметить этот день <br> вместе с нами!</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('/photo/aa.jpg') }}" alt="Wedding Photo" class="img-fluid">
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-md-8 text-center">
            <h3>Программа дня</h3>
            <p class="date-time">Пятница, 16 августа 2024</p>
            <div class="timeline">
                <div class="timeline-item">
                    <img src="/photo/icons/arcticons_map.svg" alt="Иконка сбора гостей">
                    <div class="text">
                        <h4>15.30</h4>
                        <p>Сбор гостей</p>
                    </div>
                </div>
                <div class="timeline-item timeline-item-line">
                    <img src="/photo/icons/Line.svg" alt="Иконка линии">
                    <div class="text">
                        <p class="text-line">Не забудьте захватить с собой<br> хорошее настроение</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <img src="/photo/icons/ring.svg" alt="Иконка церемонии">
                    <div class="text">
                        <h4>16.00</h4>
                        <p>Церемония</p>
                    </div>
                </div>
                <div class="timeline-item timeline-item-line">
                    <img src="/photo/icons/Line.svg" alt="Иконка линии">
                    <div class="text">
                        <p>Может быть трогательно,<br> разрешается всплакнуть</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <img src="/photo/icons/dish.svg" alt="Иконка банкета">
                    <div class="text">
                        <h4>17.00</h4>
                        <p>Банкет</p>
                    </div>
                </div>
                <div class="timeline-item timeline-item-line">
                    <img src="/photo/icons/Line.svg" alt="Иконка линии">
                    <div class="text">
                        <p>Вкусная еда, развлечения<br> и танцы</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <img src="/photo/icons/stars.svg" alt="Иконка завершения">
                    <div class="text">
                        <h4>23.00</h4>
                        <p>Завершение торжества</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3>Место проведения</h3>
    <div class="info-address"><p>Центр отдыха «Боярская Станица», Оз. Большой Кременкуль, 1 <br>
            (Свадебный шатер).</p>
    <p>Для вашего удобства мы оставили координаты на карте:</p>
    </div>
    <div class="banner mb-4">
        <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/boyarskaya_stanitsa/20557133104/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Боярская Станица</a><a href="https://yandex.ru/maps/11225/chelyabinsk-oblast/category/resort/184106400/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">База, дом отдыха в Челябинской области</a><iframe src="https://yandex.ru/map-widget/v1/?ll=61.156641%2C55.158194&mode=search&oid=20557133104&ol=biz&z=15.83" width="1160" height="419" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
    </div>

    <h3>Дресс-код</h3>
    <p class="text-color">Мы очень старались сделать праздник красивым и будем рады, если
        <br>в своих нарядах вы поддержите цветовую гамму нашей свадьбы.</p>
    <div class="color-palette">
        <div style="background-color: #ffffff;"></div>
        <div style="background-color: #000;"></div>
        <div style="background-color: #7A6255;"></div>
        <div style="background-color: #CFAF9D;"></div>
    </div>

    <h3 class="no-flowers-title">No flowers</h3>
    <div class="no-flowers">
        <div class="no-flowers-image">
            <img src="/photo/simba.jpg" alt="Cat Image">
        </div>
        <div class="no-flowers-text">
            <p>Просим не дарить нам цветы, так как наш любопытный кот не позволит нам насладиться их красотой в полной мере.
                А вот до бутылочки вина, листового чая или зернового кофе, он вряд ли доберется,
                да и до настольных игр тоже, а мы с вами обязательно сыграем в них при нашей новой встрече! </p>
        </div>
    </div>

    <div class="opros">
    <h3>Ваше присутствие</h3>
        <div class="text-opros">
        <p>
            Будем очень рады видеть Вас! <br>
            Ваши ответы на вопросы очень помогут нам при организации вечера.
        </p>
        </div>
        <form id="guestForm">
            <div class="form-group">
                <label for="name">Фамилия Имя</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label>Предпочтения по алкоголю</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="alcohol" value="Шампанское"> Шампанское
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="alcohol" value="Вино"> Вино
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="alcohol" value="Водка"> Водка
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="alcohol" value="Домашняя настойка"> Самогон
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="alcohol" value="Не пью алкоголь"> Не пью алкоголь
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="allergies">Есть ли у вас особые предпочтения по еде или пищевые аллергии?</label>
                <input type="text" class="form-control" id="allergies" name="allergies">
            </div>
            <div class="form-group">
                <label>Планируете ли Вы остаться с ночевой на территории, где будет проходить наша свадьба? (от 2000 до 3600 рублей с человека в зависимости от категории номера)</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="stay" value="Да" required> Да
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="stay" value="Нет"> Нет
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Если планируете остаться, то какой вариант Вы бы выбрали?</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="stay_option" value="Общий дом на 6-8 человек (2000 р с человека)"> Общий дом на 6-8 человек (2000 р с человека)
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="stay_option" value="Апартаменты на двоих (3600 р с человека)"> Апартаменты на двоих (3600 р с человека)
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Нужен ли вам трансфер до города после свадьбы?</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="transfer" value="До Челябинска" required> До Челябинска
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="transfer" value="До Розы"> До Розы
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="transfer" value="Не нужен"> Не нужен
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Будет ли с вами на празднике ребенок? (Если у вас есть возможность оставить ребенка с бабушками/дедушками/няней, не отказываете себе в удовольствии отходнуть и хорошенько повеселиться на нашей свадьбе)</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="child" value="Да" required> Да
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="child" value="Нет"> Нет
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Отправить ответ</button>
        </form>
    </div>

    <div class="footer mt-4">
        <p>Если у Вас остались какие-то вопросы по нашей свадьбе, то Вы можете связаться в любом мессенджере с нашим организатором Таней 89068920530</p>
        <h3>До встречи через</h3>
        <div id="countdown">
            <p>00 дней | 00 часов | 00 минут</p>
        </div>
    </div>
</div>

<!--<script>
    new Vue({
        el: '#app',
        data: {
            form: {
                name: '',
                alcohol: '',
                allergies: '',
                stay: 'нет',
                stay_option: '',
                transfer: 'нет',
                food_preferences: 'нет',
                child: 'нет',
                child_age: ''
            }
        },
        methods: {
            submitForm() {
                console.log(this.form);
                // Perform your form submission logic here
            }
        }
    });
</script>-->
<script>
    document.getElementById('guestForm').addEventListener('submit', function(e) {
        e.preventDefault();
        var form = e.target;

        var data = new FormData(form);
        var request = new XMLHttpRequest();
        request.open('POST', 'https://script.google.com/macros/s/AKfycbwmR3sInxmThBfZSMblFeTmJq8aLKFEpoLfo2K8QYSp7B9KWzSvbADPJ2BfjkR6NWOD/exec');
        request.onload = function() {
            if (request.status === 200) {
                alert('Ответ отправлен!');
                form.reset();
            } else {
                alert('Произошла ошибка. Попробуйте еще раз.');
            }
        };
        request.send(data);
    });
</script>
</body>
</html>
