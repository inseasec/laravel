<html>
 
   <body>
      <form action = "{{ URL::to('/user/edit') }}/{{ $usersArrr['id']  }}" method = "post">

             @csrf
         <table>
         
            <tr>
               <td>name</td>
               <td><input type='text' name='stud_name' value ="{{ $usersArrr['name'] }}" /></td>
            </tr>
            <tr>
               <td>rollno</td>
               <td><input type='number' name='stud_rollno' value = "{{ $usersArrr['rollno'] }}" /></td>
            </tr>
            <tr>
               <td>gender</td>
               <td><input type='text' name='stud_gen' value = "{{ $usersArrr['gender']}}" /></td>
            </tr>
            <tr>
               <td>state</td>
               <td><input type='text' name='stud_state' value = "{{ $usersArrr['state'] }}" /></td>
            </tr>
            <tr>
               <td>contactno</td>
               <td><input type='number' name='stud_cntno' value = "{{ $usersArrr['contactno'] }}" /></td>
            </tr>
            <tr>
               <td>email</td>
               <td><input type='text' name='stud_email' value = "{{ $usersArrr['email'] }}" /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update student"/>
               </td>
            </tr>
         </table>
      </form>
      
   </body>
</html>