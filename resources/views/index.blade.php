<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/Logo 2 1.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/a70663aaec.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
    
    <script type="text/javascript" src="{{ URL::asset('js/template.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/template.css') }}" />
    
    <title>LanceTech</title>
</head>

<body>
    <div class="main">
        <div class="landing">
            <my-header></my-header>
            <!-- homepage content -->
            <div class="home">
                <h1>Welcom to LanceTech</h1>
                <h2>Expert solutions for accounts, AI training, and specialized services.</h2>
            </div>
            <div>
                <button class="apt" data-toggle="modal" data-target="#estimate">
                    Get Started
                </button>
            </div>
            <!-- Middle section -->
            <div class="">
                <div class="second row">
                    <div  class="col-md-4">
                        <div id="col">
                            <i class="fas fa-history fa-7x"></i>
                            <h2>We Make it Easy</h2>
                            <p>
                                
                            </p>
                        </div>
                        
                    </div>
                    <div class=" col-md-4">
                        <div id="col">
                            <i class="fas fa-award fa-7x"></i>
                            <h2>FAIR AND TRANSPARENT PRICING</h2>
                            <p>
                                
                            </p>
                        </div>
                        
                    </div>
                    <div class=" col-md-4">
                        <div id="col">
                            <i class="far fa-smile-beam fa-7x"></i>
                            <h2>HAPPINESS GUARANTEED</h2>
                            <p>
                               
                            </p>
                        </div>
                        
                    </div>
                </div>
            <!-- testimonials -->
            <div class="test">
                <h1>Testimonials</h1>
                <div class="row">
                    <div class=" col-md-4">
                        <div id="test1">
                            <img src="" width="200px" alt="">
                            <p>
                                “ it has been very convenient. 
                                I didn't have to go find him -
                                he came and found me ” 
                                 ~ Joe Mucheru
                            </p>
                        </div>
                        
                    </div>
                    <div class=" col-md-4">
                        <div id="test1">
                            <img src="" width="200px"alt="">
                            <p>
                                “ it has been very convenient. 
                                I didn't have to go find him -  
                                he came and found me ” 
                                 ~ Jane Mucheru
                            </p>
                        </div>
                        
                    </div>
                    <div class=" col-md-4">
                        <div id="test1">
                            <img src="" width="200px"alt="">
                            <p>
                                “ it has been very convenient. 
                                I didn't have to go find him -  
                                he came and found me ” 
                                 ~David Ouma 
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- footer section -->
            <my-footer></my-footer>
        </div>
    </div>
    <!-- popup content -->
    <div id="estimate" class="modal fade" role="">
        <div class="modal-dialog">
            <div id="mdl" class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">GET AN ESTIMATE</h3>
                </div>
                <div class="modal-body">
                    <div class="form">
                        <form name="priceestimate" action="" onsubmit="return serviceprice()" >
                            <label for=""><span>Select Service Below</span></label> <br>
                            <select name="services" id="services">
                                <option value="brake">Brake-pad & Tire replacement</option>
                                <option value="filter">Engine oil/filter</option>
                                <option value="shaft">Axle/Cv Shaft check</option>
                                <option value="transmition">Transmission issues</option>
                                <option value="engine">Engine Check</option>
                            </select> <br>
                            <input class="mnubtn" type="submit" name="submit" value="Get Estimate">
                            <p id="p1"></p>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="mnubtn" type="button" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="{{ URL::asset('js/estimate.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>
