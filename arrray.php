<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse:collapse;
        }
    </style>
</head>
<body>
    <table style="width: 100%;">
        <tr>
            <th>First Name :</th>
            <th>last Name</th>
            <th>Age</th>
            <th>salary</th>
            <th>address</th>
        </tr>
        <?php
            $data = [
                ['fname' => 'kamal','lname'=> 'singh','age' => 30, 'salary' => '20,000','address' => 'xyz'],
                ['fname' => 'aman','lname'=> 'singh','age' => 30, 'salary' => '20,000','address' => 'xyz'],
            ];
            $html = '';
            foreach($data as $val){
                $html .= '<tr>';
                    $html .= '<td>'.$val['fname'].'</td>';
                    $html .= '<td>'.$val['lname'].'</td>';
                    $html .= '<td>'.$val['age'].'</td>';
                    $html .= '<td>'.$val['salary'].'</td>';
                    $html .= '<td>'.$val['address'].'</td>';
                $html .= '</tr>';
            }
           echo $html;
        ?>
    </table>
</body>
</html>