<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link
        href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
        rel="stylesheet"
    />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<div class="min-h-screen pl-10 pr-10 pt-6 h-120">
    <nav class="navbar w-full bg-blue-300 h-14 shadow-lg ">
        <div class="container-lg px-0 ">
            <div class="flex w-full items-center ">
                <a class="mr-auto ml-0 text-xl text-white" href="/home">Crypto Market</a>
            </div>
            <div class="mr-4">
                <div class="bg-sky-500 hover:bg-sky-700 rounded-lg">
                    <div class="nav-link" aria-current="page">
                        <div class="text-sm text-white"> ${{$balance->balance}}</div>
                    </div>
                </div>
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
    <div class="overflow-x-auto">
        <div
            class="min-w-screen mt-4 flex items-center justify-center  font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded ml-36 mr-36 my-6">
                    <table class="min-w-max w-full  table-auto">
                        <thead>
                        <tr class="bg-blue-300 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-left">Price</th>
                            <th class="py-3 px-6 text-center">1h%</th>
                            <th class="py-3 px-6 text-center">24h%</th>
                            <th class="py-3 px-6 text-center">7d%</th>
                            <th class="py-3 px-6 text-center">Buy</th>
                        </tr>
                        </thead>
                        @foreach ($cryptos as $crypto)
                            <tbody class="text-gray-600 text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="text-lg font-bold pr-2"> {{ $crypto->getName() }} </span><span
                                            class="text-gray-400">{{ $crypto->getSymbol()  }} </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                            <span class="text-green-500">
                                            ${{ $crypto->getPrice()  }}
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    @if( $crypto->getPercentChange1h()<0)
                                        <span class="text-red-500">
                                            {{ $crypto->getPercentChange1h() }}%
                                        </span>
                                    @else
                                        <span class="text-green-500">
                                           {{ $crypto->getPercentChange1h() }}%
                                        </span>
                                    @endif

                                </td>
                                <td class="py-3 px-6 text-center">
                                    @if( $crypto->getPercentChange24h()<0)
                                        <span class="text-red-500">
                                            {{ $crypto->getPercentChange24h() }}%
                                        </span>
                                    @else
                                        <span class="text-green-500">
                                           {{ $crypto->getPercentChange24h() }}%
                                        </span>
                                    @endif
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            @if( $crypto->getPercentChange7d()<0)
                                                <span class="text-red-500">
                                            {{ $crypto->getPercentChange7d() }}%
                                        </span>
                                            @else
                                                <span class="text-green-500">
                                           {{ $crypto->getPercentChange7d() }}%
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <span class="text-black font-bold text-lg">
                                            <button class="open-button1" onclick="openForm()">+</button>
                                        </span>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-popup" id="myForm">
    <form action="/purchaseCrypto" class="form-container">
        <h1>Choose currency</h1>

        <label for="Symbol"><b>Symbol</b></label>
        <input type="text" placeholder="Symbol" name="Symbol" required>

        <label for="Amount"><b>Amount</b></label>
        <input type="text" placeholder="$0.00" name="Amount" required>

        <button type="submit" class="btn">Buy</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
</div>
</body>
</html>
