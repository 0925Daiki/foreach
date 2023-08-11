<?php
    $ranking = [
        '1位' => 'きりはら',
        '2位' => 'ひなの',
        '3位' => 'ゆうた',
        '4位' => 'ゆうや',
        '5位' => 'よっしー',
        '6位' => 'りょうま',
        '7位' => 'がくと',
        'ID' => 'データベースから取得してきたランキング'
    ];

?>

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 <table style="border:1px black solid; text-align:center;"> 
  <caption>67期ランキング</caption> 
  <tr style="background-color:#CCFFFF;"> 
   <th style="width: 80px;">位</th> 
   <th style="width: 200px;">名前</th> 
  </tr>
  <?php foreach ($ranking as $number => $name){ ?> 
   <tr>
    <td>
     <?= $number ?> 
    </td>
    <td>
     <?= $name ?> 
    </td>
   </tr>
  <?php } ?> 
 </table>
 </body>
 </html>