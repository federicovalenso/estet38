<div class="row no-padding">
    <div class="col-lg-8 no-padding">
        <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselCaptions" data-slide-to="0" class=""></li>
                <li data-target="#carouselCaptions" data-slide-to="1" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item">
                <img class="d-block w-100 img-fluid" alt="First slide" src="{{ asset('img/1.jpg') }}" data-holder-rendered="true">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Первый слайд</h5>
                        <p class="text-info">Текст первого слайда.</p>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid" alt="Second slide" src="{{ asset('img/2.jpg') }}" data-holder-rendered="true">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Второй слайд</h5>
                        <p class="text-info">Текст второго слайда.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Пред.</span>
            </a>
            <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">След.</span>
            </a>
        </div>
    </div>
    <div class="col-lg-4 no-padding">
        <div class="front-block align-middle wow zoomInLeft">
            <div class="first px-5">
                "Центр эстетической медицины привествует <span>вас</span>. И еще много различных <span>напыщенных слов</span> и <span>еще некоторый текст</span>."
            </div>
        </div>
        <div class="front-block align-middle wow zoomInRight">
            <div class="second">
                <span>Подпишитесь на наши новости</span>
                <form method="post" action="#" id="mc4wp-form-1" class="form mc4wp-form">
                    <input type="email" id="email" name="email" required="" placeholder="email@server.com">
                    <input type="submit" value="Подписаться!">
                </form>
            </div>
        </div>
    </div>
</div>
