<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <h1>Report Card Generator</h1>
    </div>

    <?php 

        // variables
        $Name = $_GET["name"];


        // subjects array
        $Subjects = array('Dhivehi' => $_GET["Dhivehi"],
                    'Islam' => $_GET["Islam"], 
                    'English' => $_GET["English"],
                    'Mathematics' => $_GET["Mathematics"],
                    'Chemistry' => $_GET["Chemistry"],
                    'Biology' => $_GET["Biology"],
                    'Physics' => $_GET["Physics"] );

        // average calculation
        $avgmarks = round(array_sum($Subjects)/count($Subjects));



        // grade calculation
        if($avgmarks >= 95){
            $grade = "A+";
            $msg = $Name." has achieved a perfect grade :)";
        }
        elseif ($avgmarks >= 80) {
            $grade = "A";
            $msg = $Name." has achieved an excellent grade :)";
        }
        elseif ($avgmarks >= 75) {
            $grade = "B";
            $msg = $Name." has achieved a good grade :)";
        }
        elseif ($avgmarks >= 65) {
            $grade = "C";
            $msg = $Name." has achieved a fair grade";
        }
        elseif ($avgmarks >= 50) {
            $grade = "D";
            $msg = $Name." has achieved a poor grade :(";
        }
        else{
            $grade = "F";
            $msg = $Name." has failed this course :(";
        }


    ?>


    
    <div class="container">
        <div class="row">
            <div class="col-auto mx-auto">
            <div class="container bg-light p-3 shadow">
                    <h3><?php echo $Name; ?></h3>
            
                    <div class="text-center">
                        <table class="table table-bordered table-striped">
                            <tr class="table-primary">
                                <th>Subject</th>
                                <th>Marks</th>
                            </tr>
                            <tr>
                                <td>Dhivehi</td>
                                <td><?php echo $Subjects['Dhivehi']; ?></td>
                            </tr>
                            <tr>
                                <td>Islam</td>
                                <td><?php echo $Subjects['Islam']; ?></td>
                            </tr>
                            <tr>
                                <td>English</td>
                                <td><?php echo $Subjects['English']; ?></td>
                            </tr>
                            <tr>
                                <td>Mathematics</td>
                                <td><?php echo $Subjects['Mathematics']; ?></td>
                            </tr>
                            <tr>
                                <td>Chemistry</td>
                                <td><?php echo $Subjects['Chemistry']; ?></td>
                            </tr>
                            <tr>
                                <td>Biology</td>
                                <td><?php echo $Subjects['Biology']; ?></td>
                            </tr>
                            <tr>
                                <td>Physics</td>
                                <td><?php echo $Subjects['Physics']; ?></td>
                            </tr>
                        </table>
                        <table class="table table-bordered table-striped">
                            <tr class="table-primary">
                                <th>Total Marks</th>
                                <th>Average Marks</th>
                                <th>Grade</th>
                            </tr>
                            <tr>
                                <td> <?php echo array_sum($Subjects); ?> </td>
                                <td> <?php echo $avgmarks; ?> </td>
                                <td> <?php echo $grade; ?> </td>
                            </tr>
                        </table>
                        <h6> <?php echo $msg; ?> </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</html>