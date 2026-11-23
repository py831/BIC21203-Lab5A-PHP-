<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5a Q2</title>
        <style>
            table{
                width:350px;
            }
            th,td{
                border:1px solid black;
                padding:5px 9px;
                text-align:left;
            }
        </style>
    </head>
    <body>
        <?php
            $students=[
                [
                    'name'=>'Alice',
                    'program'=>'BIP',
                    'age'=>21
                ],
                [
                    'name'=>'Bob',
                    'program'=>'BIS',
                    'age'=>20
                ],
                [
                    'name'=>'Raju',
                    'program'=>'BIT',
                    'age'=>22
                ],
            ]
        ?>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Program</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student):?>
                    <tr>
                        <td><?php echo htmlspecialchars($student['name']); ?></td>
                        <td><?php echo htmlspecialchars($student['program']); ?></td>
                        <td><?php echo htmlspecialchars($student['age']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
