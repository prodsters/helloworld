<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello World - People</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 600;
                height: 100vh;
                margin: 0;
            }

            strong {
              font-weight: 700;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th {
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref">

            <div class="content">
                <br>
                <div class="title m-b-md">
                    People List 
                </div>
                <br>
                <div>
                <p style="float: left;"> <a href="{{route('people.index')}}"> << Back</a> </p>
                  <table>
                      <thead>
                          <tr>
                              <th></th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td><strong>Name: </strong></td>
                              <td>{{$person->name}}</td>
                          </tr>
                          <tr>
                              <td><strong>Email: </strong></td>    
                              <td>{{$person->email}}</td>
                          </tr>
                          <tr>
                              <td><strong>Phone: </strong></td>    
                              <td>{{$person->phone}}</td>
                          </tr>
                           <tr>
                              <td><strong>Registered On: </strong></td>     
                              <td>{{$person->created_at}}</td>   
                          </tr>
                      </tbody>
                  </table>
                </div>

            </div>
        </div>
    </body>
</html>
