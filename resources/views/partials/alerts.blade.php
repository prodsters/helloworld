@if(session("error"))
	<p style="color: darkred;">{{session("error")}}</p>
@elseif(session("status"))	
	<p style="color:blue;">{{session("status")}}</p>
@endif