<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BISMIT Projects</title>
    <link rel="icon" type="image/ico" href="{{asset('images/project/logoBisMitSmall.png')}}" />
    <!-- CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:700&display=swap" rel="stylesheet">
</head>
<body>
  <section class="location">
    <div class="locationElements container-fluid">
      <div class="row">
        <div class="google-maps locationElement col-12 col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.22750904618!2d106.82649991413908!3d-6.364595564031364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec1ad14fb6cf%3A0xc94e4d829420fa15!2sFaculty%20of%20Computer%20Science%2C%20University%20of%20Indonesia!5e0!3m2!1sen!2sid!4v1572840712779!5m2!1sen!2sid" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
          <div id="locationLabel" class="locationElement col-12 col-md-6 m-0 p-0">
            <div class="header"><h3 id="locationTitle">LOCATION</h3></div>
            <div id="locationDesc" class="flex-column align-items-center d-flex justify-content-center">
              <img class="img-fluid" src="{{asset('images/project/pin.png')}}" alt="">
              <h4>Faculty of Computer Science</br>Universitas Indonesia</h4>
            </div>
          </div>
      </div>
    </div>
  </section>
  <section class="reach-us row">
        <div class="reach-us-in d-flex flex-column justify-content-center align-items-start col-md-8">
            <div class="reach-us-title d-flex justify-content-start align-items-center">
                <h1>REACH US</h1>
                <img src="{{asset('images/footer/bem.png')}}" alt="" srcset="">
                <img src="{{asset('images/footer/bismit.png')}}" alt="" srcset="">
            </div>
            <form method="post" action="send_mail.php" class=""></form>
            <div class="reach-us-email d-flex">
                <input type="text" name="first_name" required class="" placeholder="Name">
                <input type="email" name="email_address" class="" placeholder="Email">
            </div>
            <textarea name="comments" maxlength="500" cols="30" rows="10" placeholder="Type your message here..."></textarea>
            <button class="btn" type="submit">Submit</button>
        </div>
        <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
            <div class="linkBar py-2 d-flex flex-md-column align-content-end">
                <div class="link p-2 m-2"><a href="https://www.facebook.com/BEMFasilkomUI/"><img src="{{asset('images/footer/facebook.svg')}}" alt=""></a></div>
                <div class="link p-2 m-2"><a href="https://wa.me/6287883000166"><img src="{{asset('images/footer/whatsapp.svg')}}" alt=""></a></div>
                <div class="link p-2 m-2"><img src="{{asset('images/footer/mail.svg')}}" alt="" srcset=""></div>
                <div class="link p-2 m-2"><a href="https://twitter.com/bemfasilkomui"><img src="{{asset('images/footer/twitter.svg')}}" alt="" srcset=""></a></div>
                <div class="link p-2 m-2"><a href="https://id.linkedin.com/company/bem-fakultas-ilmu-komputer-universitas-indonesia"><img src="{{asset('images/footer/linkedin.svg')}}" alt="" srcset=""></a></div>
            </div>
        </div>
        </div>
    </section>
    <footer class="footer">Copyright ©
        <script>
            document.write(new Date().getFullYear())
        </script>
        , All Rights Reserved.
        <> with ❤ by Bismit
    </footer>
</body>
<!-- scripts -->
<!-- <script src="{{asset('public/js/project.js')}}"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>