<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a70663aaec.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <script type="text/javascript" src="{{ URL::asset('js/template.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/about-us.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/template.css') }}" />
  <title>LanceTech/about us</title>
</head>
<body>
  <div class="hero-container">
    <my-header></my-header>
    <h1>About Us</h1>
  </div>

  <!--About Us Section-->
  <div class="about-us">
    <div class="about-us-text">
      <h3>About Us</h3>
      <p>Welcome to LanceTech, your trusted platform for purchasing accounts, 
        chat moderation services, AI model training, and specialized writing accounts. 
        We cater to diverse needs by offering personalized training programs, 
        whether you're looking to enhance your AI account usage or improve 
        your academic writing skills. Our expert team ensures a seamless experience, 
        from account management to tailored learning solutions. At LanceTech 
        we prioritize customer satisfaction, security, and innovation, helping 
        you thrive in the digital world with confidence and expertise. Let us 
        guide you towards success with our comprehensive services.</p>
    </div>
    <img src="{{ URL::asset('images/aboutpic.png') }}" alt="LanceTech">
  </div>

  <!--Our Team Section-->
  
  <my-footer></my-footer> 
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>