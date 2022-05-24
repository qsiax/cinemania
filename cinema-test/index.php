<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Cinema</title>
</head>
<body>

            <div class="screen__item screen-06">
                <div class="screen__item-block" >
                    <ion-icon name="close-outline" id="close-06"></ion-icon>
                    <div class="screen__item-heading">6 место</div>
                    <form class="screen__item-form">
                        <a>ЗАБРОНИРОВАТЬ</a>
                    </form>
                </div>
            </div>

            <div class="screen__item screen-05">
                <div class="screen__item-block" >
                    <ion-icon name="close-outline" id="close-05"></ion-icon>
                    <div class="screen__item-heading">5 место</div>
                    <form class="screen__item-form">
                        <a>ЗАБРОНИРОВАТЬ</a>
                    </form>
                </div>
            </div>

            <div class="screen__item screen-04">
                <div class="screen__item-block" >
                    <ion-icon name="close-outline" id="close-04"></ion-icon>
                    <div class="screen__item-heading">4 место</div>
                    <div class="screen__item-form">
                        <a>ЗАБРОНИРОВАТЬ</a>
                    </div>
                </div>
            </div>

            <div class="screen__item screen-03">
                <div class="screen__item-block" >
                    <ion-icon name="close-outline" id="close-03"></ion-icon>
                    <div class="screen__item-heading">3 место</div>
                    <div class="screen__item-form">
                        <a>ЗАБРОНИРОВАТЬ</a>
                    </div>
                </div>
            </div>

            <div class="screen__item screen-02">
                <div class="screen__item-block" >
                    <ion-icon name="close-outline" id="close-02"></ion-icon>
                    <div class="screen__item-heading">2 место</div>
                    <div class="screen__item-form">
                        <a>ЗАБРОНИРОВАТЬ</a>
                    </div>
                </div>
            </div>

            <div class="screen__item screen-01">
                <div class="screen__item-block" >
                    <ion-icon name="close-outline" id="close-01"></ion-icon>
                    <div class="screen__item-heading">1 место</div>
                    <div class="screen__item-form">
                        <a id="conf-btn-01">ЗАБРОНИРОВАТЬ</a>
                    </div>
                </div>
            </div>
  
            <div class="form__item">
                <div class="form__item-block" >
                    <div class="form__item-heading">подтверждение</div>
                    <div class="form__item-text">После подтверждение вы получити код от вашего место, вам нужно показать этот код кассирше</div>
                    <form class="form__item-form" method="POST" action="telegram.php">
                        <input type="phone" name="phone" placeholder="+7(000)000-00-00">
                        <input type="text" name="code" value="m3f1" class="code">
                        <input type="text" name="place" value="1" class="place">
                        <div class="form__item-form-block">
                            <a id="close-form">Отменить</a>
                            <button type="submit">Подтвердить</button>
                        </div>
                    </form>
                </div>
            </div>
            

    <section class="main">
        <div class="main__body">
            <a class="main__heading" href="conf.index">Система бронирования (тестовый)</a>
            <div class="main__block">
                <div class="main__item item-1">1</div>
                <div class="main__item item-2">2</div>
                <div class="main__item item-3">3</div>
            </div>
            <div class="main__block">
                <div class="main__item item-4">4</div>
                <div class="main__item item-5">5</div>
                <div class="main__item item-6">6</div>
            </div>
        </div>
    </section>    


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/@barba/core"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/app.js"></script>
</body>
</html>