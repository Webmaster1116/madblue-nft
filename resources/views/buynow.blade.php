<!DOCTYPE html>
<html>
    <head>
        <title>Stripe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link rel="stylesheet" href="css/stripe.css" />
        <link
            href="https://fonts.googleapis.com/css?family=Barlow Semi Condensed"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Barlow Condensed"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Barlow"
            rel="stylesheet"
        />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <div class="header-body">
                <div class="header-left">
                    <a href="/"> <img src="img/header-logo.png" /></a>
                </div>
                <div class="header-right">
                    <div>
                        <img src="img/font.png" />
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row main-body">
                <div class="col-md-6 nft-img col-sm-12">
                    <!-- <img src="img/nft.png" /> -->
                    <video
                        autoplay="autoplay"
                        controls=""
                        controlslist="nodownload"
                        loop=""
                        style="width: 100%"
                    >
                        <source
                            src="https://openseauserdata.com/files/79b2a70f7707d9a12bd8d92c13c5394c.mp4#t=0.001"
                            type="video/mp4"
                        />
                    </video>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="panel panel-default credit-card-box">
                        <div class="panel-heading">
                            <div class="nft-price">
                                <h3>Metaverso NFT - MadBlue</h3>
                                <div class="nft-logo">
                                    <div>
                                        <img src="img/nft-logo.png" />
                                    </div>
                                    <span>@madblue_summit</span>
                                </div>
                                <h5>
                                    <span class="main-content"
                                        >Each NFT pack contains your wearable
                                        for the metaverse, and outfit so your
                                        avatar can also wear laagam. <br />
                                        <br />A 3D art of our iconic outfit and
                                        an exclusive</span
                                    >
                                    <a class="content-more">...more</a>
                                    <span class="hide-content">
                                        access to our IG filter to show-off your
                                        digital lewk (make sure you tag us).<br /><br />Also,
                                        you’ll download a Digital Club Pass®
                                        with which its holders will be able to
                                        get an exclusive access through raffles
                                        to future LAAGAM events throughout 2022
                                        and beyond.<br /><br />Your pass to the
                                        guest list, basically.<br /><br
                                    /></span>
                                    <a class="content-less">less</a>
                                </h5>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="nft-left">
                                <div>
                                    <p>Limited Edition</p>
                                    <span>€50</span>
                                </div>
                                <div>
                                    <p>Editions left</p>
                                    <span>
                                        <span class="token-amount">
                                            {{ $number }}
                                        </span>
                                        of 50
                                    </span>
                                </div>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('buynow.post') }}">
                            @csrf
                            <div class="form-row row">
                                <div
                                    class="col-xs-12 col-md-12 form-group nft-quantity required"
                                >
                                    <label class="control-label"
                                        >Quantity</label
                                    >
                                    <select
                                        class="form-control"
                                        name="quantity"
                                    >
                                        @if ($number > 3 )
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        @elseif ($number == 2)
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-xs-12 pay-button">
                                    @if ($number > 2 )
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-lg btn-block btn-pay"
                                    >
                                        Buy Now
                                    </button>
                                    @endif
                                </div>
                            </div>
                        </form>
                        <div class="details-body">
                            <p><span>Details</span></p>
                            <div class="details">
                                <div class="detail-type">Contract Address</div>
                                <div>0x6770...9974</div>
                            </div>
                            <div class="details">
                                <div class="detail-type">Token Standard</div>
                                <div>ERC-721</div>
                            </div>
                            <div class="details">
                                <div class="detail-type">Network</div>
                                <div>Ethereum</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer-body">
                <div class="footer-left">
                    <img src="img/footer-logo.png" />
                    <div>© 2022 MADBLUE - Piel de Atún.org</div>
                </div>
                <div class="footer-right">
                    <div class="social-icons">
                        <div class="social-icon">
                            <span class="fa fa-instagram"></span>
                        </div>
                        <div class="social-icon">
                            <span class="fa fa-twitter"></span>
                        </div>
                        <div class="social-icon">
                            <span class="fa fa-facebook"></span>
                        </div>
                        <div class="social-icon">
                            <span class="fa fa-linkedin"></span>
                        </div>
                    </div>
                    <div>
                        <a class="terms" href="javascript:void(0)"
                            >Términos y condiciones</a
                        >
                        |
                        <a class="privacy" href="javascript:void(0)"
                            >Privacidad</a
                        >
                    </div>
                </div>
            </div>
        </footer>
    </body>
    <script>
        $(".content-more").click(function () {
            $(".content-more").css("display", "none");
            $(".hide-content").css("display", "block");
            $(".content-less").css("display", "block");
        });
        $(".content-less").click(function () {
            $(".content-more").css("display", "block");
            $(".hide-content").css("display", "none");
            $(".content-less").css("display", "none");
        });
    </script>
</html>
