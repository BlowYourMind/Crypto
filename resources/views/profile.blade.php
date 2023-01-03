<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" rel="stylesheet"/>
</head>
<body>
<div class=" pl-10 pr-10 pt-6 h-120">
    <nav class="navbar w-full bg-blue-300 h-14 shadow-lg ">
        <div class="container-lg px-0 ">
            <div class="flex w-full items-center ">
                <a class="mr-auto ml-0 text-xl text-white" href="/home">Crypto Market</a>
            </div>
            <div class="mr-4">
                <div class="bg-sky-500 hover:bg-sky-700 rounded-lg">
                    <a class="nav-link" aria-current="page" href="/profile">
                        <span class="text-sm text-white">Profile</span>
                    </a>
                </div>
            </div>
            <div class="">
                <div class="bg-sky-500 hover:bg-sky-700 rounded-lg">
                    <a class="nav-link" aria-current="page" href="/logout">
                        <span class="text-sm text-white">Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>
</div>
<div class="wrapper">
    <div class="tabs">
        <div class="tab">
            <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
            <label for="tab-1" class="tab-label">Profile</label>
            <div class="tab-content">
                <div class=""><h1>Hello, {{(auth()->user()['name'])}}!</h1></div>
                <br><br>
                <!-- The form -->
                <div>
                    <form action="/changeEmail" class="form-container">
                        @csrf
                        <label for="email"><b>Change your Email</b></label>
                        <input type="text" placeholder="{{(auth()->user()['email'])}}" name="email" id="email">

                        <button type="submit" class="btn">Change</button>
                    </form>

                    <form action="/changePassword" class="form-container">
                        @csrf
                        <label for="psw"><b>Change your Password</b></label>
                        <input placeholder="Enter Password" name="password" type="password" id="password">
                        <button type="submit" class="btn">Change</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
            <label for="tab-2" class="tab-label">Payment</label>
            <div class="tab-content">
                <h1>Give us your money!!</h1>
                <form action="/addMoney" class="form-container">
                    @csrf
                    <label for="email"><b>Enter Amount</b></label>
                    <input type="text" placeholder="Enter Amount" name="money" id="money">
                    <div class="paymentTypes">
                        <h4 class="paymentNames">Select payment type:</h4><br>
                        <div>
                            <input type="radio" id="Visa" name="paymentType" value="Visa"
                                   checked>
                            <label for="Visa">Visa</label>
                        </div>

                        <div>
                            <input type="radio" id="Paypal" name="paymentType" value="Paypal">
                            <label for="Paypal">Paypal</label>
                        </div>

                        <div>
                            <input type="radio" id="MasterCard" name="paymentType" value="MasterCard">
                            <label for="MasterCard">Master Card</label>
                        </div>
                    </div>
                    <button type="submit" class="btn">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
