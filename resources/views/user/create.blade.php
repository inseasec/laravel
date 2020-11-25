<html>
 
   <body>
      <form action = "{{URL::to('user/insert')}}" method = "post">
<!--         <form action = "http://localhost/laravel/public/user/insert" method = "post">-->
             @csrf
         <table>
            <tr>
               <td>name</td>
               <td><input type='text' name='stud_name' /></td>
            </tr>
            <tr>
               <td>rollno</td>
               <td><input type='number' name='stud_rollno' /></td>
            </tr>
            <tr>
               <td>gender</td>
               <td><input type='text' name='stud_gen' /></td>
            </tr>
            <tr>
               <td>state</td>
               <td><input type='text' name='stud_state' /></td>
            </tr>
            <tr>
               <td>contactno</td>
               <td><input type='number' name='stud_cntno' /></td>
            </tr>
            <tr>
               <td>email</td>
               <td><input type='text' name='stud_email' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add student"/>
               </td>
            </tr>
         </table>
      </form>
      
   </body>
</html>