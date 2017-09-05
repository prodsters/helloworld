@extends("layouts.people")
@section("content")
        <div class="flex-center position-ref">

            <div class="content">
                <br>
                <div class="title m-b-md">
                    People List
                </div>
                <br>
                @include("partials.alerts")
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
                 <br>
                 <p style="float: left;"> <a href="{{route('people.add')}}"> Add New Person</a> </p>
                  <table>
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th></th>
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
                              <td><a href="{{ route('people.update', ['id' => $person->id]) }}">Update</a></td>
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
@endsection