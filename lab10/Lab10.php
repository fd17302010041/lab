<?php
//Fill this place

//****** Hint ******
//connect database and fetch data here
$con = mysqli_connect("localhost","root","","travel");
if (!$con)
 {
 die("数据库服务器连接失败");
 }
$sql1 = "SELECT * FROM Continents";
$result1 = $con->query($sql1);
$sql2 = "SELECT * FROM Countries";
$result2 = $con->query($sql2);
$sql3 = "SELECT * FROM ImageDetails";
$result3 = $con->query($sql3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chapter 14</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css" />



    <link rel="stylesheet" href="css/captions.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />

</head>

<body>
    <?php include 'header.inc.php'; ?>



    <!-- Page Content -->
    <main class="container">
        <div class="panel panel-default">
          <div class="panel-heading">Filters</div>
          <div class="panel-body">
            <form action="Lab10.php" method="post" class="form-horizontal">
              <div class="form-inline">
              <select name="continents" class="form-control">
                <option value="0">Select Continent</option>
                <?php
                //Fill this place

                //****** Hint ******
                //display the list of continents
                while( $row = mysqli_fetch_array($result1) )
                {
                    echo '<option value=' . $row['ContinentCode'] . '>' . $row['ContinentName'] . '</option>';
                }
                ?>
              </select>

              <select name="country" class="form-control">
                <option value="0">Select Country</option>
                <?php
                //Fill this place

                //****** Hint ******
                /* display list of countries */
                while( $row = mysqli_fetch_array($result2) )
                {
                    echo '<option value=' . $row['ISO'] . '>' . $row['CountryName'] . '</option>';
                }
                ?>
              </select>
              <input type="text"  placeholder="Search title" class="form-control" name=title>
              <button type="submit" class="btn btn-primary" value="filter">Filter</button>
              </div>
            </form>

          </div>
        </div>


		<ul class="caption-style-2">
            <?php
            //Fill this place

            //****** Hint ******
            /* use while loop to display images that meet requirements ... sample below ... replace ???? with field data

            */
            if(isset($_POST)&&!empty($_POST)){
                $continent = $_POST['continents'];
                $country = $_POST['country'];
                if($continent == "0" && $country == "0"){
                    while( $row = mysqli_fetch_array($result3) ){

                        echo "  <li>
              <a href=\"detail.php?id=".$row['ImageID']."\" class=\"img-responsive\">
                <img src=\"images/square-medium/".$row['Path']."\" alt=\"".$row['Title']."\">
                <div class=\"caption\">
                  <div class=\"blur\"></div>
                  <div class=\"caption-text\">
                    <p>".$row['Title']."</p>
                  </div>
                </div>
              </a>
            </li>        ";
                    }
                }
                if($country!="0" && $continent=="0"){
                        while( $row = mysqli_fetch_array($result3) ){
                            if($row['CountryCodeISO'] == $country){
                                echo "  <li>
              <a href=\"detail.php?id=".$row['ImageID']."\" class=\"img-responsive\">
                <img src=\"images/square-medium/".$row['Path']."\" alt=\"".$row['Title']."\">
                <div class=\"caption\">
                  <div class=\"blur\"></div>
                  <div class=\"caption-text\">
                    <p>".$row['Title']."</p>
                  </div>
                </div>
              </a>
            </li>        ";
                            }
                        }
                }
                if($country=="0" && $continent!="0"){
                        while( $row = mysqli_fetch_array($result3) ){
                            if($row['ContinentCode'] == $continent){
                                echo "  <li>
              <a href=\"detail.php?id=".$row['ImageID']."\" class=\"img-responsive\">
                <img src=\"images/square-medium/".$row['Path']."\" alt=\"".$row['Title']."\">
                <div class=\"caption\">
                  <div class=\"blur\"></div>
                  <div class=\"caption-text\">
                    <p>".$row['Title']."</p>
                  </div>
                </div>
              </a>
            </li>        ";
                            }
                    }
                }
                if($country!="0" && $continent!="0"){
                        while( $row = mysqli_fetch_array($result3) ){
                            if($row['CountryCodeISO'] == $country && $row['ContinentCode'] == $continent){
                                echo "  <li>
              <a href=\"detail.php?id=".$row['ImageID']."\" class=\"img-responsive\">
                <img src=\"images/square-medium/".$row['Path']."\" alt=\"".$row['Title']."\">
                <div class=\"caption\">
                  <div class=\"blur\"></div>
                  <div class=\"caption-text\">
                    <p>".$row['Title']."</p>
                  </div>
                </div>
              </a>
            </li>        ";
                            }
                        }
                }
            }else{
                while( $row = mysqli_fetch_array($result3) ){

                    echo "  <li>
              <a href=\"detail.php?id=".$row['ImageID']."\" class=\"img-responsive\">
                <img src=\"images/square-medium/".$row['Path']."\" alt=\"".$row['Title']."\">
                <div class=\"caption\">
                  <div class=\"blur\"></div>
                  <div class=\"caption-text\">
                    <p>".$row['Title']."</p>
                  </div>
                </div>
              </a>
            </li>        ";
                }
            }
            ?>
       </ul>


    </main>

    <footer>
        <div class="container-fluid">
                    <div class="row final">
                <p>Copyright &copy; 2017 Creative Commons ShareAlike</p>
                <p><a href="#">Home</a> / <a href="#">About</a> / <a href="#">Contact</a> / <a href="#">Browse</a></p>
            </div>
        </div>
    </footer>


        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>