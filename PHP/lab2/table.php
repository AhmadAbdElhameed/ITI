<?php 
/****************** */
/// Question 5
/***********************/

$students = [
    ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
    ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
    ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
    ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
    ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
];




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2 Question 5</title>
    <!-- CSS only -->
    <style>
        table{
            margin-left:auto;
            margin-right:auto;
            margin-top:200px;
            font-size: 2rem;
        }
        table tr td{
            border: 1px solid white;
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $key => $value){ ?>
                <tr>
                    <?php if($value['status'] == 'PHP'){ ?>
                        <td style="color:red"><?php echo $value['name'];?></td>
                        <td style="color:red"><?php echo $value['email'];?></td>
                        <td style="color:red"><?php echo $value['status'];?></td>
                    <?php }else {?>
                        <td><?php echo $value['name'];?></td>
                        <td><?php echo $value['email'];?></td>
                        <td><?php echo $value['status'];?></td>
                        <?php } ?>                                            
                </tr>
            <?php }?>  

        </tbody>
    </table>

</body>
</html>