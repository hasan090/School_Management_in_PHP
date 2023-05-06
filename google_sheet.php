<?php include 'sidebar.php';?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>

  <!-- <link rel="stylesheet" href="styles.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="numbers.css">

</head>

<body>

       <div class="counter_boxes">

        <div class="col-md-3 col-sm-6">
          <div class="counter pink">
            <div class="counter-icon">
              <i class="bx bx-menu"></i>
            </div>
            <h3>Number Tasks:</h3>
            
                <br>
                    <iframe  class="counter-value" style="width: 100px; height: 80px; border:none;     border: 2px solid #ff5d94;
    border-radius: 5px; " scrolling="no" src="https://script.google.com/macros/s/AKfycbxGU1JchU9RgeTd7buB89nAFV-KWafT2AH3bT5m0kLTfVBcRvzoSqCdDwmGLI8Oo3mFMw/exec" ></iframe>
            </div>
            <!-- <a href="display_sheet.php">
            <button class="btn btn-primary">Display Sheet</button>
            </a> -->
            
          </div>
          <!-- <iframe   style="width: 1350px; height: 800px;" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTeXH3bTB1yecz6dDMUaQNLjoDIAtJ9w8rGNA469wgrfQF17egNTYSh-6Tm2MgyDjrUtvw95u96EDhU/pubhtml?gid=1219098959&amp;single=true&amp;widget=true&amp;headers=false"></iframe> -->
            <iframe style="width: 1000px; height: 600px;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTeXH3bTB1yecz6dDMUaQNLjoDIAtJ9w8rGNA469wgrfQF17egNTYSh-6Tm2MgyDjrUtvw95u96EDhU/pubhtml?gid=708016645&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
            
        
          <script src="style.js"></script>
  


</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js">
</script>
<script>
    $(document).ready(function () {
    $('.counter-value').each(function () {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: 3500,
        easing: 'swing',
        step: function (now) {
          $(this).text(Math.ceil(now));
        }
      });
    });
  });
</script>

</html>


