<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a70663aaec.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>LanceTech/contact</title>
    
    <script type="text/javascript" src="{{ URL::asset('js/template.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/contact.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/template.css') }}" />
</head>

<body>
    <section class="intro">
        <div class="header" style="background-image: url('{{ URL::asset('images/about.png') }}')">
            <my-header></my-header>
            <div class="heading">
                <h1>Contact Us</h1>

            </div>
       
    </section>
    
    <div class="popup">
        <div class="popup-content">
            <img src="{{ URL::asset('images/close.jpeg') }}" alt="close" class="close">
            <input type="text" placeholder="Enter your name" required>
            <input type="text" placeholder="Enter the enquiry subject" required>
            <textarea name="" id="textar" cols="30" rows="10" placeholder="Enter your question" required></textarea><br>
            <a href="#" class="button">Enquire</a>
        </div>
    </div>
    <section class="contact" style="background-image: url('{{ URL::asset('images/contact.png') }}')">
        <h1>Contact Information</h1>
        <div class="columns">
            <div class="description">
                <p>Reach out to learn more about our academic writing accounts, chat moderation, 
                    AI training models, and personalized training services.
                </p>
                <div class="phone">
                    <h4>Phone</h4>
                    <p>0796 954 189</p>
                    <h4>Email</h4>
                    <p>mycomputeruser8@gmail.com</p>
                    <h4>Location</h4>
                    <p>Lumumba Drive</p>
                </div>
            </div>
            <img src="{{ URL::asset('images/map.png') }}" alt="LanceTech">
            <!--<div class="contact-form">
                <form method="POST" action="">
                    @csrf
                    
                    <div class="mb-6">
                        <label for="name" class="inline-block text-lg mb-2"
                            >Name</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="name"
                            value="{{old('name')}}"
                        />
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label
                            for="email"
                            class="inline-block text-lg mb-2"
                        >
                            Email
                        </label>
                        <input
                            type="email"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="email"
                            value="{{old('email')}}"
                        />
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label
                            for="textarea"
                            class="inline-block text-lg mb-2"
                        >
                        Message
                        </label>
                        <textarea
                            class="border border-gray-200 rounded p-2 w-full"
                            name="textarea"
                            rows="10"
                            placeholder=""
                        >{{old('textarea')}}</textarea>
                        @error('textarea')
                           <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                


                    <div class="mb-6">
                        <button
                            type="submit"
                            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                        >
                            Send Message
                        </button>
                    </div>
                </form>
            </div>-->
        </div>
    </section>
    <my-footer></my-footer>

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
    <script src="{{ URL::asset('js/contact.js') }}"></script>
    <script src="{{ URL::asset('js/estimate.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
