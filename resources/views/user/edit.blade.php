
<html>
 
   <body>
   @if(!empty($user))
      <form action = "{{URL::to('user/update')}}" method = "post">
<!--         <form action = "http://localhost/laravel/public/user/insert" method = "post">-->
             @csrf
             <input type='hidden' name='id' value='{{$user->id}}' />
         <table>
            <tr>
               <td>name</td>
               <td><input type='text' name='stud_name' value='{{$user->name}}' /></td>
            </tr>
            <tr>
               <td>rollno</td>
               <td><input type='number' name='stud_rollno' value='{{$user->rollno}}' /></td>
            </tr>
            <tr>
               <td>gender</td>
               <td><input type='text' name='stud_gen' value='{{$user->gender}}' /></td>
            </tr>
            <tr>
               <td>state</td>
               <td><input type='text' name='stud_state' value='{{$user->state}}' /></td>
            </tr>
            <tr>
               <td>contactno</td>
               <td><input type='number' name='stud_cntno' value='{{$user->contactno}}' /></td>
            </tr>
            <tr>
               <td>email</td>
               <td><input type='text' name='stud_email' value='{{$user->email}}' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update"/>
               </td>
            </tr>
         </table>
      </form>
      @endif
   </body>
</html>

