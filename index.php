<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORM</title>
</head>
<body>
<style>
        table{
            margin-left: 31%;
            margin-top: 50px;
        }
        caption{
            font-size: 24px;
            color: red;
        }
        .note{
            margin-left: 28%;
        }
    </style>
</head>
    <form action="index.php" method="post">
    <table>
        <caption>Employmlent Registration Form</caption>
        <thead>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="" id="">Mr.
                    <input type="radio" name="" id="">Mrs.
                    <input type="radio" name="" id="">Ms.
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>First Name</td>
                <td>
                    <input type="text" placeholder="First Name">
                </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>
                    <input type="text" name="" id="" placeholder="Last Name">
                </td>
            </tr>
            <tr>
                <td>Mail Address1</td>
                <td>
                    <input type="text" name="" id="">
                </td>
            </tr>
            <tr>
                <td>Mail Address2</td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                <td>city</td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                <td>Zip</td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                <td>upload photo</td>
                <td>
                    <input type="file">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="" id="">
                </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>
                    <input type="text" placeholder="+91">
                </td>
            </tr>
             <tr>
                <td>language known</td>
                <td>
                    <input type="checkbox" name="" id="" checked>Gujarati
                </td>
             </tr> 
             <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="" id="" checked>Hindi
                </td>
             </tr>
             <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="" id="" checked>English
                </td>
             </tr>
             <tr>
                <td></td>
                <td>
                    <input type="checkbox" name="" id="">Marathi
                </td>
             </tr>
             <tr>
                <td></td>
                <td rowspan="3">
                    <textarea name="" id="" cols="" rows="3" placeholder="optional"></textarea>
                </td>
             </tr>
             <tr>
                <td>Additional Information</td>
                <td></td>
             </tr>
             <tr>
                <td></td>
                <td></td>
             </tr>
             <tr>
                <td></td>
                <td>
                    <input type="submit" value="submit">
                    <input type="reset" value="reset">
                </td>
             </tr>
             
        </tbody>
    </table>
    <p class="note "><b>Note:</b></p>
</form>
</body>
</html>
<?php
?>