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
                <div class="col-md-6 nft-img">
                    <img src="img/nft.png" />
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default credit-card-box">
                        <div class="panel-heading">
                            <div class="nft-price">
                                <h3>Metaverso NFT - MadBlue</h3>
                                <h4>
                                    Total Price - <b>€{{ $total }}</b>
                                </h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a
                                    class="close"
                                    data-dismiss="alert"
                                    aria-label="close"
                                    >×</a
                                >
                                <p>{{ Session::get('success') }}</p>
                                <br />
                            </div>
                            @endif
                            <br />
                            <form
                                role="form"
                                action="{{ route('stripe.post') }}"
                                method="post"
                                class="require-validation"
                                data-cc-on-file="false"
                                data-stripe-publishable-key="{{
                                    env('STRIPE_KEY')
                                }}"
                                id="payment-form"
                            >
                                @csrf
                                <div class="form-row row">
                                    <div
                                        class="col-xs-12 col-md-6 form-group required"
                                    >
                                        <label class="control-label"
                                            >Full Name</label
                                        >
                                        <input
                                            class="form-control fullname"
                                            size="4"
                                            type="text"
                                            placeholder="Full Name"
                                        />
                                    </div>
                                    <div
                                        class="col-xs-12 col-md-6 form-group required"
                                    >
                                        <label class="control-label"
                                            >Email</label
                                        >
                                        <input
                                            class="form-control buyer-email"
                                            size="4"
                                            type="email"
                                            placeholder="Email"
                                        />
                                    </div>
                                    <div
                                        class="col-xs-12 col-md-12 form-group required"
                                    >
                                        <label class="control-label"
                                            >Card Number</label
                                        >
                                        <input
                                            autocomplete="off"
                                            class="form-control card-number"
                                            size="20"
                                            type="text"
                                            placeholder="ex. 4242 4242 4242 4242"
                                        />
                                    </div>
                                </div>
                                <div class="form-row row">
                                    <div
                                        class="col-xs-12 col-md-4 form-group cvc required"
                                    >
                                        <label class="control-label">CVC</label>
                                        <input
                                            autocomplete="off"
                                            class="form-control card-cvc"
                                            placeholder="ex. 311"
                                            size="4"
                                            type="text"
                                        />
                                    </div>
                                    <div
                                        class="col-xs-12 col-md-4 form-group expiration required"
                                    >
                                        <label class="control-label"
                                            >Expiration Month</label
                                        >
                                        <input
                                            class="form-control card-expiry-month"
                                            placeholder="MM"
                                            size="2"
                                            type="text"
                                        />
                                    </div>
                                    <div
                                        class="col-xs-12 col-md-4 form-group expiration required"
                                    >
                                        <label class="control-label"
                                            >Expiration Year</label
                                        >
                                        <input
                                            class="form-control card-expiry-year"
                                            placeholder="YYYY"
                                            size="4"
                                            type="text"
                                        />
                                        <input
                                            class="total-price"
                                            type="hidden"
                                            name="total-price"
                                            value="{{ $total }}"
                                        />
                                    </div>
                                </div>
                                {{--
                                <div class="form-row row">
                                    <div
                                        class="col-md-12 error form-group hide"
                                    >
                                        <div class="alert-danger alert">
                                            Please correct the errors and try
                                            again.
                                        </div>
                                    </div>
                                </div>
                                --}}
                                <div class="form-row row">
                                    <div class="col-xs-12 pay-button">
                                        <button
                                            class="btn btn-primary btn-lg btn-block btn-pay"
                                            type="submit"
                                        >
                                            Pay Now
                                        </button>
                                    </div>
                                </div>
                            </form>
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
</html>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    $(function () {
        var $form = $(".require-validation");
        $("form.require-validation").bind("submit", function (e) {
            var $form = $(".require-validation"),
                inputSelector = [
                    "input[type=email]",
                    "input[type=password]",
                    "input[type=text]",
                    "input[type=file]",
                    "textarea",
                ].join(", "),
                $inputs = $form.find(".required").find(inputSelector),
                $errorMessage = $form.find("div.error"),
                valid = true;
            $errorMessage.addClass("hide");
            $(".has-error").removeClass("has-error");
            $inputs.each(function (i, el) {
                var $input = $(el);
                if ($input.val() === "") {
                    $input.parent().addClass("has-error");
                    $errorMessage.removeClass("hide");
                    e.preventDefault();
                }
            });
            if (!$form.data("cc-on-file")) {
                e.preventDefault();
                Stripe.setPublishableKey(
                    "pk_test_51KJgCnKYgC3ue4Z7vZXDmTUJPOKh6g7JGEN7PGnRFk5FwQpQAFV7j67NC4BMmsga2D06JIeKiPLE5Vj58JiKUDDi00Y8fcb8aH"
                );
                Stripe.createToken(
                    {
                        number: $(".card-number").val(),
                        cvc: $(".card-cvc").val(),
                        exp_month: $(".card-expiry-month").val(),
                        exp_year: $(".card-expiry-year").val(),
                    },
                    stripeResponseHandler
                );
            }
        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $(".error")
                    .removeClass("hide")
                    .find(".alert")
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response["id"];
                var name = $(".fullname").val();
                var email = $(".buyer-email").val();
                var total = $(".total-price").val();
                $form.find("input[type=text]").empty();
                $form.append(
                    "<input type='hidden' name='stripeToken' value='" +
                        token +
                        "'/>"
                );
                $form.append(
                    "<input type='hidden' name='name' value='" + name + "'/>"
                );
                $form.append(
                    "<input type='hidden' name='email' value='" + email + "'/>"
                );
                $form.append(
                    "<input type='hidden' name='total' value='" + total + "'/>"
                );
                $form.get(0).submit();
            }
        }
    });
</script>
