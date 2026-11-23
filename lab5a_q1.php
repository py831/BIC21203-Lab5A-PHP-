<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5a Q1</title>
        <style>
            table{
                border-collapse:collapse;
                width:420px;
            }
            th,td{
                border:1px solid black;
                padding:8px 12px;
                text-align:left;
            }
        </style>
    </head>
    <body>
        <?php
            $name="Ho Pei Yi";
            $matric_no="AI240161";
            $course="Web Development";
            $year_of_Study="Year 3";
            $address="No 12, Taman Kelisa Jaya";
        ?>

        <table>
            <tr>
                <th>Name</th>
                <td><?php echo "$name"; ?></td>
            </tr>
            <tr>
                <td>Matric No</td>
                <td><?php echo "$matric_no"; ?></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo "$course"; ?></td>
            </tr>
            <tr>
                <td>Year Of Study</td>
                <td><?php echo "$year_of_Study"; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo "$address"; ?></td>
            </tr>
        </table>
    </body>
</html>