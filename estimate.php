<?php
session_start();
include('functions.php');
check_session_id();
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
    
    <form action="estimate_act.php" method="POST">
        <table>

            <th>お問合せの種類</th>
                <td><select name="request_type" id="" >
                  <option value="バルブの更新">バルブの更新</option>
                  <option value="部品の見積">部品の見積</option>
                  <option value="他社からのバルブ更新">他社からのバルブの更新</option>
                </select></td>
            </tr>
            <tr>
                <th>プラント名</th>
                <td><input type="text" name="plant_name"></td>
            </tr>  
            <tr>
                <th>弁番号</th>
                <td><input type="text" name="valve_number"></td>
            </tr>       
            <tr>
                <th>弁名称</th>
                <td><input type="text" name="valve_name"></td>
            </tr>
            <tr>
                <th>Jo.</th>
                <td><input type="text" name="valve_jo"></td>
            </tr>
            <tr>
                <th>PAT</th>
                <td><input type="text" name="valve_pat"></td>
            </tr>
            <tr>
                <th>口径</th>
                <td><input type="text" name="valve_size"></td>
            </tr>
            <tr>
                <th>見積内容</th>
                <td><textarea name="body" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <th>納期</th>
                <td><input type="date" name="deadline"></td>
            </tr>

        </table>
        <div>
        <button>送信</button>
      </div>
      
    </form>
</body>
</html>