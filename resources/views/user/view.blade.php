    @if(!empty($usersArrr))
<table border="2">
    <thead>
        <tr>
        
            <th>Name</th>
        <th>Roll No</th>
        <th>Gender</th> 
        <th>State</th>
        <th>Contact Number</th>
        <th>Email_Id</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        
    </thead>
    <tbody>
        @foreach($usersArrr as $userArr)
        <tr>
            
            <td>{{ $userArr['name'] }}</td>
            <td>{{$userArr['rollno']}}</td>
            <td>{{$userArr['gender']}}</td>
            <td>{{$userArr['state']}}</td>
            <td>{{$userArr['contactno']}}</td>
            <td>{{$userArr['email']}}</td>
            <td><a href ="edit/{{ $userArr['id'] }}">Edit</a></td>
            <td><a href = "delete/{{ $userArr['id'] }}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
    
    </table>
@endif

