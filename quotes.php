<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quotes</title>
    <link rel="icon"
          type="image/png"
          href="favicon.png">

    <!-- Font Awesome Icons -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link href="css/creative.min.css" rel="stylesheet">
    <link href="css/website.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<!-- Masthead -->
<header class="mastheadfotos">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">Quoteboek</h1>
                <hr class="divider my-4">
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 font-weight-light mb-5">Wat zeggen we ook leuke dingen</p>
            </div>
        </div>
    </div>
</header>
<section class="container" id="quoteform">
    <form method="post" action="addquote.php" >
        <div class="form-group">
            <label for="naamselect">Naam</label>
            <select class="form-control" id="naamselect" name="naam" onchange="otherTextBox()">
              <option value="" disabled selected>--- Kies een huisgenoot ---</option>
              <option value="Fia">Fia</option>
              <option value="Thomaas">Thomaas</option>
              <option value="Bart">Bart</option>
              <option value="Job">Job</option>
              <option value="Tjerk">Tjcherque</option>
              <option vlaue="Meike">Meike</option>
              <option value="Rukkie">Rukkie</option>
              <option value="Valou">Valou</option>
              <option value="Marty">Marty</option>
              <option value="Loulou">Loulou</option>
              <option value="Morty">Morty</option>
              <option value="Sop">Sop</option>
              <option value="Yer">Yer</option>
              <option value="Lucille">Lucille</option>
              <option value="Sab">Sab</option>
              <option value="Kian">Kiki do u lo</option>
              <option value="Nik">Nik</option>
              <option value="Anoniem">Anoniem</option>
              <option value="Anders">Anders...</option>
            </select>
        </div>
        <div class="form-group" id="anderenaam" style="display: none">
            <label for="naamtextbox">Naam</label>
            <textarea class="form-control" id="naamtextbox" rows="1" name="naam_anders"></textarea>
        </div>
        <div class="form-group">
            <label for="quotetext">Quote</label>
            <textarea class="form-control" id="quotetext" rows="1" name="quote"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Toevoegen</button>
    </form>
</section>

<section class="container" id="quotelist">
    <?php
    // Create connection
    include('credentials.php');
    $conn = new mysqli($servername, $username, $password, $table);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// create table
echo '<table class="table">';
echo '<thead><tr><td>Wanneer</td><td>Wie</td><td>Wat</td></tr></thead>';
$sql = "SELECT * FROM quotes ORDER BY Tijd DESC";
$result = $conn->query($sql);
echo '<tbody>';
while($row = $result->fetch_assoc()) {
    if($row['Zichtbaar'] == 1) {
        echo '<tr><td>'.$row['Tijd'].'</td><td>'.$row['Naam'].'</td><td>'.$row['Quote'].'</td></tr>';
    }
}
echo '</tbody>';
echo '</table>';
  ?>
</section>


<!-- Footer -->
<footer class="py-5" id="copyright">
    <div class="container">
        <div class="small text-center text-muted">Copyright &copy; 2020 HuizeHigh5</div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/creative.min.js"></script>

<script>
    function otherTextBox() {
        var dropdownvalue = document.getElementById("naamselect");
        var textbox = document.getElementById("anderenaam");
        textbox.style.display = dropdownvalue.value == "Anders" ? "block" : "none";
    }
</script>

</body>

</html>
