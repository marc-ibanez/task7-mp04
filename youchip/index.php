<?php
  session_start();

  require 'login-register/database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youchip Coin's</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

    <!-- custom icon -->
    <link rel="shortcut icon" href="assets/img/logo-youchip.png" type="image/x-icon">
</head>

<body>


    <!-- header section start -->
    <header>
        <a href="#" class="logo"><i class="fas fa-infinity"></i> Youchip Coin's.</a>

        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a href="#crypto">crypto</a>
            <a href="#about">about</a>
            <a href="#service">service</a>
            <a href="#review">review</a>
            <a href="#">products</a>
        </nav>
        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <a href="login-register/login.php" class="fas fa-sign-in-alt"></a>
            <a href="login-register/signup.php" class="fas fa-registered"></a>
        </div>
    </header>

    <!-- header section ends -->

    <!-- home section start -->
    <section class="home" id="home">
        <div class="swiper mySwiper home-slider">
            <div class=" swiper-wrapper wrapper">
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our crypto offer</span>
                        <h3>Bitcoin Mining</h3>
                        <p>Bitcoin mining is the <b>process of creating new bitcoin</b> by solving a computational
                            puzzle.</p>
                        <a href="#" class="btn">start now</a>
                    </div>
                    <div class="img">
                        <img src="assets/img/Bitcoin_Mining.png">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our crypto offer</span>
                        <h3>Cryptocurrency Analytic</h3>
                        <p>We will be in charge of analyzing and predicting trends, prices, demand and trading volumes
                            of any number of cryptocurrencies currently available.</p>
                        <a href="#" class="btn">start now</a>
                    </div>
                    <div class="img">
                        <img src="assets/img/Cryptocurrency_Analytic.png">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our crypto offer</span>
                        <h3>Cryptocurrency Investment</h3>
                        <p>We will investigate which is the best investment for you. Let us help you, you won't regret
                            it!</p>
                        <a href="#" class="btn">start now</a>
                    </div>
                    <div class="img">
                        <img src="assets/img/Cryptocurrency_Investment.png">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- home section ends -->

    <!-- crypto section starts -->

    <section class="crypto" id="crypto">
        <h3 class="sub-heading"> Our crypto</h3>
        <h3 class="heading"> popular crypto</h3>
        <div class="box-container">

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="assets/img/btc.png">
                <h3>BitCoin</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$46.159,50</span>
                <a href="https://coinmarketcap.com/es/currencies/bitcoin/" target="_BLANK" class="btn">More Info</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="assets/img/eth.png">
                <h3>Etherum Coin</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$3.786,62</span>
                <a href="https://coinmarketcap.com/es/currencies/ethereum/" target="_BLANK" class="btn">More Info</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="assets/img/dot.png">
                <h3>Polkadot Coin</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$29.33</span>
                <a href="https://coinmarketcap.com/es/currencies/polkadot-new/" target="_BLANK" class="btn">More
                    Info</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="assets/img/sol.png">
                <h3>Solana Coin</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$177.74</span>
                <a href="https://coinmarketcap.com/es/currencies/solana/" target="_BLANK" class="btn">More Info</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="assets/img/doge.png">
                <h3>DogeCoin</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$0.17</span>
                <a href="https://coinmarketcap.com/es/currencies/dogecoin/" target="_BLANK" class="btn">More Info</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="assets/img/bnb.png">
                <h3>Binance Coin</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$510</span>
                <a href="https://coinmarketcap.com/es/currencies/binance-coin/" target="_BLANK" class="btn">More
                    Info</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="assets/img/usd.png">
                <h3>USD Coin</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$1</span>
                <a href="https://coinmarketcap.com/es/currencies/usd-coin/" target="_BLANK" class="btn">More Info</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="assets/img/xrp.png">
                <h3>XRP Coin</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$0.8276</span>
                <a href="https://coinmarketcap.com/es/currencies/xrp/" target="_BLANK" class="btn">More Info</a>
            </div>
        </div>
    </section>

    <!-- crypto section ends -->

    <!-- about section start -->

    <section class="about" id="about">
        <h3 class="sub-heading"> about us</h3>
        <h3 class="heading"> why choose us?</h3>

        <div class="row">
            <div class="img">
                <img src="assets/img/Secure_Cryptocurrency.png">
            </div>

            <div class="content">
                <h3>best security in the cryptocurrency</h3>
                <p>We are a company that from a very young age we love cryptocurrencies, we have been learning from the
                    best in this world, traveling around the world.

                    Because at the end of the day the most beautiful thing in this world is to be able to teach others
                    what you like the most. So if you are willing to learn do not hesitate to contact us because you
                    will not regret it!</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-user-secret"></i>
                        <span>free security</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="#service" class="btn">learn more</a>
            </div>
        </div>
    </section>
    <!-- about section ends -->

    <!-- service section starts -->

    <section class="service" id="service">
        <h3 class="sub-heading"> our service</h3>
        <h3 class="heading"> today's special service</h3>

        <div class="box-container">

            <div class="box">
                <div class="img">
                    <img src="assets/img/Cryptocurrency_ MiningServer.png">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Cryptocurrency Mining Server</h3>
                    <p>Maximize ROI with fully integrated servers for GPU mining (Ethereum, Ethereum Classic, Monero,
                        etc.) and storage protocols (Filecoin).</p>
                    <a href="#" class="btn">add to service</a>
                    <span class="price">$699</span>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <img src="assets/img/Cryptocurrency_Exchange.png">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Cryptocurrency Exchange</h3>
                    <p>is a business that allows customers to trade cryptocurrencies or digital currencies for other
                        assets, such as conventional fiat money or other digital currencies. Exchanges may accept credit
                        card payments, wire transfers or other forms of payment in exchange for digital currencies or
                        cryptocurrencies</p>
                    <a href="#" class="btn">add to service</a>
                    <span class="price">$298.99</span>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <img src="assets/img/Cryptocurrency_Mining.png">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Cryptocurrency Mining</h3>
                    <p>Bitcoin mining is the process by which new bitcoins are entered into circulation; it is also the
                        way that new transactions are confirmed by the network and a critical component of the
                        maintenance and development of the blockchain ledger.</p>
                    <a href="#" class="btn">add to service</a>
                    <span class="price">$430,99</span>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <img src="assets/img/Cryptocurrency_TradingBot.png">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h3>Cryptocurrency Trading Bot</h3>
                    <p>We have created through artificial intelligence a bot that is in charge of trading. </p>
                    <a href="#" class="btn">add to service</a>
                    <span class="price">$400</span>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <img src="assets/img/Cryptocurrency_Wallet.png">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Cryptocurrency Wallet</h3>
                    <p>A crypto wallet is a technological device where we store cryptocurrencies.
                        Developed by ourselves!</p>
                    <a href="#" class="btn">add to service</a>
                    <span class="price">$189,99</span>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <img src="assets/img/Peopledoing CryptoTradingCourse.png">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>People doing Crypto Trading</h3>
                    <p>Together with our most experienced workers you will learn from them, they will always guide you
                        in all your movements. So that you can earn as much profit as possible. </p>
                    <a href="#" class="btn">add to service</a>
                    <span class="price">$150.68</span>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <img src="assets/img/Manlooking_Cryptocurrency_Tradingdesk.png">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Man looking at Cryptocurrency</h3>
                    <p>Our experts are constantly analyzing and studying the cryptocurrency market, so that all our
                        clients can earn the highest possible profit.</p>
                    <a href="#" class="btn">add to service</a>
                    <span class="price">$56.99</span>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <img src="assets/img/Cryptocurrency_Statistics.png">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Cryptocurrency Statistics</h3>
                    <p>This plan is very good because for only $79 you can have statistics of all the cryptocurrencies
                        you select.
                        In this plan enter a total of 3 cryptocurrencies to have a statistic, if you need more you can
                        contact us!</p>
                    <a href="#" class="btn">add to service</a>
                    <span class="price">$79</span>
                </div>
            </div>


        </div>
    </section>
    <!-- service section ends -->

    <!-- review section start -->

    <section class="review" id="review">
        <h3 class="sub-heading"> customer's review</h3>
        <h3 class="heading"> what they say</h3>

        <div class="swiper mySwiper review-slider">
            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="assets/img/kendra-rose.jpg">
                        <div class="user-info">
                            <h3>Kendra Rose</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"Great customer service, I contacted them to receive information about some services and they convinced me.
                        I know I am in the hands of true professionals in the industry.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="assets/img/guillem-carrion.jpg">
                        <div class="user-info">
                            <h3>Guillem Carrion</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>"Em sembla espectacular com està avançant el món. Però ens hem d'adequar a les noves tecnologies i sobretot a les noves maneres de guanyar-se la vida.
                        Penso que aquestes accions em beneficiaran en un futur. Moltes gràcies!</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="assets/img/elena-maria.jpg">
                        <div class="user-info">
                            <h3>Elena Maria Guirao</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>"Muy contenta con el servicio, empecé con esto hará menos de un año y por el momento he generado
                        algunos ingresos gracias a esta empresa, muy agradecida por los servicios y sobre todo por el
                        trato personal</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="assets/img/pablo-mcdonough.jpg">
                        <div class="user-info">
                            <h3>Pablo McDonough</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>"I did not expect these magnificent results in only five months, very happy and glad to have hired your services.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- review section ends -->

    <!-- footer section starts -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>location</h3>
                <a href="#">USA</a>
                <a href="#">japan</a>
                <a href="#">India</a>
                <a href="#">russia</a>
                <a href="#">catalonia</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#crypto">crypto</a>
                <a href="#about">about</a>
                <a href="#service">services</a>
                <a href="#review">review</a>
                <a href="#">products</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">+34 693489716</a>
                <a href="mailto:">support@youchip.es</a>
                <a href="https://www.santfruitos.cat/">Sant Fruitos de Bages, Barcelona - 08272</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#">meta</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linkedin</a>

            </div>
        </div>
        <div class="credit">Copyright @ 2022 by <a href="https://es.linkedin.com/in/marc-iba%C3%B1ez-tapias-968b29218"
                target="_BLANK"><span>Marc Ibañez</span></a></div>
    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>

</html>