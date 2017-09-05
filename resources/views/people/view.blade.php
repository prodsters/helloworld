@extends("layouts.people")
@section("content")
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
@endsection