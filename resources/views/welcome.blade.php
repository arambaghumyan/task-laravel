<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task Laravel</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .col-md-4 {
                border: 1px solid gray;
                border-radius: 15px;
                padding: 15px;
            }
            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="container">
                <h2 align="center" class="title-home">Show Products ({{count($products)}})</h2>
                <div class="row mb-2">
                    @foreach($products as $product)
                        <div class="col-md-4 text-center">
                          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                @if(!is_null($product->image))
                                    <img src="{{asset('images/'.$product->image)}}" height="150">
                                @endif
                              <h3 class="mb-0"><b>Title: </b>{{$product->title}}</h3>
                              <div class="mb-1 text-muted"><b>Created At: </b>{{$product->created_at}}</div>
                              <p class="card-text mb-auto"><b>Description: </b>{{$product->description}}</p>
                            </div>
                            
                          </div>
                        </div>
                    @endforeach
                  </div>
            </div>
        </div>
    </body>
</html>
