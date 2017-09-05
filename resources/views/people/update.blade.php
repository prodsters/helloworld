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
            <p style="float: left;"> <a href="{{route('people.index')}}"> << Back</a> </p>
              <table>
                  <thead>
                      <tr>
                          <th></th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                  <form action="{{route('people.update')}}" method="POST">
                     {{csrf_field()}}
                     <input type="hidden" name="id" value="{{$person->id}}">
                      <tr>
                          <td><strong>Name: </strong></td>
                          <td><input type="text" name="name" id="name" value="{{$person->name}}" required></td>
                      </tr>
                      <tr>
                          <td><strong>Email: </strong></td>    
                          <td><input type="email" name="email" id="email" value="{{$person->email}}" required></td>
                      </tr>
                      <tr>
                          <td><strong>Phone: </strong></td>    
                          <td><input type="tel" name="phone" id="phone" required value="{{$person->phone}}"></td>
                      </tr>
                       <tr>
                          <td></td>     
                          <td><input type="submit" value="Save"></td>   
                      </tr>
                  </tbody>
              </table>
            </div>

        </div>
    </div>
@endsection
