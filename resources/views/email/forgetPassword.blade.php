
<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SAND | Reset Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

<style>
    @import url(//db.onlinewebfonts.com/c/7d411bb0357d6fd29347455b7d207995?family=JF+Flat);

      *{
        font-family: "HelveticaNeueLT Arabic 75 Bold";

      }
    p
{
  margin: 0;
  padding: 0;
}
.main-color {
  color: #ff6700;
}
img {
  width: 150px;
  display: block;
  margin: 30px auto;
}

#header h2 {
  font-size: 14px;
}

#regards {
  margin-top: 80px;
  text-align: center;
}
#contact
{
  margin: 80px 0 0 0;
  text-align: center;
}
#contact h3
{
  font-size: 14px;
  margin: 0;
}
#contact ul
{
  padding: 0;
  margin: 0;
}
#contact ul li
{
  list-style-type: none;
}
#contact ul li a{
  color: #000;
  text-decoration: underline;
  text-decoration-color: #a2bad8;}
#for_information
{
  text-align: center;
}
#for_information a{
  text-decoration: underline;
  text-decoration-color: #a2bad8;
  color: #000;
}
#password_link
{
  margin: 50px 0 0 0;
}
#password_link
{
  font-weight: 500;
}
#password_link a:hover
{
  color:#ff6700;
  text-decoration: none;
}
</style>

</head>

<body>
    <section id="header" class="text-center">
        <img class="d-xl-flex" src="https://sand.business/assets_sand/images/banner2.png">
        <h2 class="text-center main-color">
            Reset Password
        </h2>
    </section>
    <section id="password_link" class="text-center">
        <p>
            forget password Email
            <br>
            you can reset password from bellow link
        </p>
        <a href="{{ route('reset.password.get', $token) }}" class="main-color">&lt;&lt;Link&gt;&gt;</a>

    </section>
    <section id="regards">
        <p class=" main-color">SAND Team</p>
    </section>
    <section id="contact">
        <h3>للتواصل والاستفسارات
            <br>
            <a href="https://sand.business/contact" class="main-color">Contact us</a>
            <br>
        </h3>
        <br>
        <ul>
            <li><a href="https://twitter.com/sand_hub?s=21">Twitter</a></li>
            <li><a href="http://wa.me/9660502729394">Whatsapp</a></li>
        </ul>
    </section>
    <br><br>
    <section id="for_information">
        <p>لمزيد من المعلومات زوروا موقعنا
            <br>
            <span class="main-color">For further information</span>
        </p>
        <a href="https://sand.business/">sand.business</a>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
