<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello World - People</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
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
                <form action="{{route('people.delete')}}" method="post" id="delForm">
                  {{csrf_field()}}
                  <input type="hidden" name="id" value="" />
                </form>

                 @if(session("error"))
                 <p style="darkred;">{{session("error")}}</p>
                 @elseif(session("status"))
                 <p style="blue;">{{session("status")}}</p>
                 @endif

                  <table>
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th></th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                         @foreach($people as $person)
                          <tr>
                              <td>{{$person->name}}</td>
                              <td>{{$person->email}}</td>
                              <td><a href="{{ route('people.view', ['id' => $person->id]) }}">View</a></td>
                              <td><a class="del" data-id="{{$person->id}}" href="#">Delete</a></td>
                          </tr>
                         @endforeach 
                      </tbody>
                  </table>
                </div>

            </div>
        </div>
        <script type="text/javascript">

        $().ready(function() {

          $(".del").on("click", function() {
            var id = $(this).attr("data-id");
            console.log("id = " + id);

            if(window.confirm("Are you sure you wanna delete this person?")) {
              $("input[name='id']").val(id);
              console.log("form id = " + $("input[name='id']").val() );
              document.getElementById("delForm").submit();
            }
          });

        });

        </script>
    </body>
</html>
