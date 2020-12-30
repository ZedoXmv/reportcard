<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container bg-light p-4 shadow">
        <div class="container text-center">
            <h1>Report Card Generator</h1>
        </div>
        <form action="reportcard.php" method="GET">
            <div class="form-floating mb-5">
                <input type="text" class="form-control" id="uname" placeholder="name" name="name">
                <label for="uname">Enter your name...</label>
            </div>

            <div class="row">
                <div class="col-auto">
                    <label for="Dhivehi" class="form-label">Dhivehi</label>
                    <input type="number" class="form-control mb-3" id="Dhivehi" name="Dhivehi" min="0" max="100" placeholder="Marks.." required>
                </div>
                <div class="col-auto">
                    <label for="Islam" class="form-label">Islam</label>
                    <input type="number" class="form-control mb-3" id="Islam" name="Islam" min="0" max="100" placeholder="Marks.." required>
                </div>
    
                <div class="col-auto"> 
                    <label for="English" class="form-label">English</label>
                    <input type="number" class="form-control mb-3" id="English" name="English" min="0" max="100" placeholder="Marks.." required>
                </div>
                <div class="col-auto">
                    <label for="Mathematics" class="form-label">Mathematics</label>
                    <input type="number" class="form-control mb-3" id="Mathematics" name="Mathematics" min="0" max="100" placeholder="Marks.." required>
                </div>
                <div class="col-auto">
                    <label for="Chemistry" class="form-label">Chemistry</label>
                    <input type="number" class="form-control mb-3" id="Chemistry" name="Chemistry" min="0" max="100" placeholder="Marks.." required>
                </div>
                <div class="col-auto">
                    <label for="Biology" class="form-label">Biology</label>
                    <input type="number" class="form-control mb-3" id="Biology" name="Biology" min="0" max="100" placeholder="Marks.." required>
                </div>
                <div class="col-auto">
                    <label for="Physics" class="form-label">Physics</label>
                    <input type="number" class="form-control mb-3" id="Physics" name="Physics" min="0" max="100" placeholder="Marks.." required>
                </div>
    
    
                
                <div>
                    <button class="btn btn-warning" type="submit">Submit form</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</html>