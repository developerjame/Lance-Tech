<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/a70663aaec.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
    
    <title>LanceTech/services</title>
    
    <script type="text/javascript" src="{{ URL::asset('js/template.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/section.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/section.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/template.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" />
</head>
<body>
    <div class="section">
        <my-header></my-header>
        <!-- <div id="engine-image"></div> -->
        <div class="sect-wrd">
            <h1>Get paid with accounts and AI model training, and <br>we offer expert guidance for seamless account usage.</h1>
        </div>
        <div class="sect">
            <div class="Eng-check">
                <div id="im-eng">
                    
                    <h3>Writing Accounts</h3>
                </div>
                <div class="pb">
                    <p>We offer all quality academic<br> writing accounts that pay you <br>handsomely.
                    </p>
                        <a href="/admin/writingaccount"><button id="btn-estimate">VIEW</button></a>

                </div>
            </div>
            <div class="Eng-check">
                <div id="im-eng">
                    <h3>Chat Moderation</h3>
                </div>
                <div class="pb">
                    <p>We give you accounts for chatting with <br>lonely foreigners and you get paid for it, it mostly involves love messages.
                    </p>
                    
                        <a href="/admin/moderation"><button id="btn-estimate">VIEW</button></a>
                    
                </div>
            </div>
            <div class="Eng-check">
                <div id="im-eng">
                    <h3>AI Training Models</h3>
                </div>
                <div class="pb">
                    <p>This involves companies that are training their AI models in various fields, like medicine, programming, History etc.
                    </p>
                    
                        <a href="/admin/aimodel"><button id="btn-estimate">VIEW</button></a>
                    
                </div>
            </div>
            <div class="Eng-check">
                <div id="im-eng">
                    <h3>Training</h3>
                </div>
                <div class="pb">
                    <p> We offer training for the usage of all the listed accounts and how they operate. We also offer academic writing services to newbies.
                    
                        <a href="/admin/account"><button id="btn-estimate">VIEW</button></a>
                    
                </div>
            </div>

        </div>

    </div>
    <!-- popup content 
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
    -->
    <my-footer></my-footer>
</body>
<script src="{{ URL::asset('js/estimate.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>