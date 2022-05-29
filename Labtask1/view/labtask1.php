<html>
    
    <body>
       
        <form action="../control/process.php" method="post">
            
           <table>
               <th>
                   <h1>Sample Calculator</h1>
               </th>
               <tr>
                   <td>Number 1 : </td>
                   <td><input type="number" name="num1" value=""></td>
               </tr>
               <tr>
                   <td>Number 2 : </td>
                   <td><input type="number" name="num2" value=""></td>
               </tr>
               <tr>
                   <td></td>
                   <td>
                       <input type="radio" name="operator" value="+">+
                       <input type="radio" name="operator" value="-">-
                       <input type="radio" name="operator" value="*">*
                       <input type="radio" name="operator" value="/">/
                   </td>
               </tr>
               <tr>
                   <td></td>
                   <td><input type="submit" value="Result"></td>
               </tr>
           </table>
            
        </form>       
    </body>
</html> 