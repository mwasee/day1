<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>multiply form</title>
    </head>
    <body>
        <form action="multiply.php" method="request">
        <table>
            <tr>
                <td>
                    no.1
                </td>
                <td>
                    <input type="text" name="no1">
                </td>
            </tr>
            <tr>
                <td>
                    no.2
                </td>
                <td>
                    <input type="text" name="no2">
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                    <input type="submit" class="btn btn-success" value="multiply">
                </td>
            </tr>
            <tr>
                <td>Class</td>
   <td><select name="class">
  <option>first</option>
<option >second</option>
       <option >third</option>
       <option >fourth</option>
          </select>
                    </td>             
                </td>
            </tr>
        </table>

        </form>
        
    </body>
</html>
