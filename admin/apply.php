<!doctype html>
<html lang="en">
  <!-- Finish -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        html,
        body {
        height: 100%;
        }

        body {
        display: flex;
        align-items: center;
        justify-content: center;
        }
    </style>
    <title>Choose Scholarship</title>
  </head>
  <body>
  <div class="card w-50">
  <h5 class="card-header text-center">Scholarships</h5>
  <div class="card-body">
    <form method="POST" name="framework" id="framework">
    <select class="form-select" id="select_sch">
        <option value="1" selected>Choose Scholarship</option>
        <optgroup label="School">
            <option value="2">Academic</option>
            <option value="3">Non-Academic</option>
        </optgroup>
        <optgroup label="Goverment">
            <option value="4">Unifast</option>
            <option value="5">CHED</option>
        </optgroup>
    </select>
    </form>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary" href="index.php" role="button">Back</a>
        <button type="submit" onclick="getval()" class="btn btn-success">Submit</button>
    </div>
    </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>
<script>
function getval() {
  var sel = document.getElementById('select_sch');
  if (sel.value == "2") {
    window.location.href = "academic.php";
  } else if (sel.value == "3") {
    window.location.href = "non-academic.php";
  } else if (sel.value == "4") {
    window.location.href = "unifast.php";
  } else if (sel.value == "5") {
    window.location.href = "ched.php";
  } else {
    alert("Please select scholarship");
  }
}
</script>


