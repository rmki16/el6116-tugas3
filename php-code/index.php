<?php
  //including the database connection file
  include_once("config.php");
  //fetching data in descending order (lastest entry first)
  if (isset($_POST["fullname"]) || isset($_POST["joinyear"]) || isset($_POST["noveltype"]) || isset($_POST["editor"])) {
    $fullname = $_POST["fullname"];
    $joinyear = $_POST["joinyear"];
    $noveltype = $_POST["noveltype"];
    $editor = $_POST["editor"];
    $result = mysqli_query($mysqli, "SELECT
              idx,fullname,joinyear,noveltype,editor FROM tugas3.publisher WHERE
              fullname LIKE '$fullname' AND joinyear LIKE '$joinyear' AND noveltype LIKE '$noveltype'
              AND editor LIKE '$editor' ORDER BY idx ASC");
    $statistics = mysqli_query($mysqli, "SELECT AVG(sales2011) as '2011',AVG(sales2012) as '2012',
                  AVG(sales2013) as '2013',AVG(sales2014) as '2014',AVG(sales2015) as '2015',
                  AVG(sales2016) as '2016',AVG(sales2017) as '2017' FROM tugas3.publisher
                  WHERE fullname LIKE '$fullname' AND joinyear LIKE '$joinyear' AND
                  noveltype LIKE '$noveltype' AND editor LIKE '$editor'");
    } else {
      $statistics = mysqli_query($mysqli, "SELECT AVG(sales2011) as '2011',AVG(sales2012) as '2012',
                    AVG(sales2013) as '2013',AVG(sales2014) as '2014',AVG(sales2015) as '2015',
                    AVG(sales2016) as '2016',AVG(sales2017) as '2017'
                    FROM tugas3.publisher ORDER BY idx ASC");
      $result = mysqli_query($mysqli, "SELECT idx,fullname,joinyear,noveltype,editor FROM tugas3.publisher ORDER BY idx ASC");
    }
?>

<html>
  <head>
    <title>Homepage</title>
  </head>

  <body>
    <h1>Publisher</h1>
    <h2><a href="#">Home</a> | <a href="index.php">Database</a></h2>

    <table class="container">
      <thead>
        <tr>
          <th><h1>Full Name</h1></th>
          <th><h1>Join Year</h1></th>
          <th><h1>noveltype</h1></th>
          <th><h1>Direct Report</h1></th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <form action="index.php" method="post">
            <td>
              <div class="select_join">
                <select name="fullname" onchange="this.form.submit()">
                  <option value="%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == '%'): ?> selected="selected"<?php endif; endif; ?>>All</option>
                  <option value="A%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'A%'): ?> selected="selected"<?php endif; endif; ?>>A</option>
                  <option value="B%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'B%'): ?> selected="selected"<?php endif; endif; ?>>B</option>
                  <option value="C%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'C%'): ?> selected="selected"<?php endif; endif; ?>>C</option>
                  <option value="D%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'D%'): ?> selected="selected"<?php endif; endif; ?>>D</option>
                  <option value="E%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'E%'): ?> selected="selected"<?php endif; endif; ?>>E</option>
                  <option value="F%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'F%'): ?> selected="selected"<?php endif; endif; ?>>F</option>
                  <option value="G%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'G%'): ?> selected="selected"<?php endif; endif; ?>>G</option>
                  <option value="H%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'H%'): ?> selected="selected"<?php endif; endif; ?>>H</option>
                  <option value="I%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'I%'): ?> selected="selected"<?php endif; endif; ?>>I</option>
                  <option value="J%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'J%'): ?> selected="selected"<?php endif; endif; ?>>J</option>
                  <option value="K%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'K%'): ?> selected="selected"<?php endif; endif; ?>>K</option>
                  <option value="L%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'L%'): ?> selected="selected"<?php endif; endif; ?>>L</option>
                  <option value="M%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'M%'): ?> selected="selected"<?php endif; endif; ?>>M</option>
                  <option value="N%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'N%'): ?> selected="selected"<?php endif; endif; ?>>N</option>
                  <option value="O%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'O%'): ?> selected="selected"<?php endif; endif; ?>>O</option>
                  <option value="P%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'P%'): ?> selected="selected"<?php endif; endif; ?>>P</option>
                  <option value="Q%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'Q%'): ?> selected="selected"<?php endif; endif; ?>>Q</option>
                  <option value="R%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'R%'): ?> selected="selected"<?php endif; endif; ?>>R</option>
                  <option value="S%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'S%'): ?> selected="selected"<?php endif; endif; ?>>S</option>
                  <option value="T%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'T%'): ?> selected="selected"<?php endif; endif; ?>>T</option>
                  <option value="U%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'U%'): ?> selected="selected"<?php endif; endif; ?>>U</option>
                  <option value="V%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'V%'): ?> selected="selected"<?php endif; endif; ?>>V</option>
                  <option value="W%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'W%'): ?> selected="selected"<?php endif; endif; ?>>W</option>
                  <option value="X%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'X%'): ?> selected="selected"<?php endif; endif; ?>>X</option>
                  <option value="Y%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'Y%'): ?> selected="selected"<?php endif; endif; ?>>Y</option>
                  <option value="Z%" <?php if (isset($_POST["fullname"])): if ($_POST["fullname"] == 'Z%'): ?> selected="selected"<?php endif; endif; ?>>Z</option>
                </select>
              </div>
            </td>

            <td>
            <div class="select_join">
              <select name="joinyear" onchange="this.form.submit()">
                <option value="%" <?php if(isset($_POST["joinyear"])): if($_POST["joinyear"] == '%'): ?> selected="selected"<?php endif; endif; ?>>All</option>
                <option value="2011" <?php if(isset($_POST["joinyear"])): if($_POST["joinyear"] == '2011'): ?> selected="selected"<?php endif; endif; ?>>2011</option>
                <option value="2012" <?php if(isset($_POST["joinyear"])): if($_POST["joinyear"] == '2012'): ?> selected="selected"<?php endif; endif; ?>>2012</option>
                <option value="2013" <?php if(isset($_POST["joinyear"])): if($_POST["joinyear"] == '2013'): ?> selected="selected"<?php endif; endif; ?>>2013</option>
                <option value="2014" <?php if(isset($_POST["joinyear"])): if($_POST["joinyear"] == '2014'): ?> selected="selected"<?php endif; endif; ?>>2014</option>
                <option value="2015" <?php if(isset($_POST["joinyear"])): if($_POST["joinyear"] == '2015'): ?> selected="selected"<?php endif; endif; ?>>2015</option>
                <option value="2016" <?php if(isset($_POST["joinyear"])): if($_POST["joinyear"] == '2016'): ?> selected="selected"<?php endif; endif; ?>>2016</option>
                <option value="2017" <?php if(isset($_POST["joinyear"])): if($_POST["joinyear"] == '2017'): ?> selected="selected"<?php endif; endif; ?>>2017</option>
              </select>
            </div>
            </td>

            <td>
              <div class="select_join">
                <select name="noveltype" onchange="this.form.submit()">
                  <option value="%" <?php if(isset($_POST["noveltype"])): if($_POST["noveltype"] == '%'): ?> selected="selected"<?php endif; endif; ?>>All</option>
                  <option value="Adventure" <?php if(isset($_POST["noveltype"])): if($_POST["noveltype"] == 'Adventure'): ?> selected="selected"<?php endif; endif; ?>>Adventure</option>
                  <option value="Children" <?php if(isset($_POST["noveltype"])): if($_POST["noveltype"] == 'Children'): ?> selected="selected"<?php endif; endif; ?>>Children</option>
                  <option value="Drama" <?php if(isset($_POST["noveltype"])): if($_POST["noveltype"] == 'Drama'): ?> selected="selected"<?php endif; endif; ?>>Drama</option>
                  <option value="Fantasy" <?php if(isset($_POST["noveltype"])): if($_POST["noveltype"] == 'Fantasy'): ?> selected="selected"<?php endif; endif; ?>>Fantasy</option>
                  <option value="Horror" <?php if(isset($_POST["noveltype"])): if($_POST["noveltype"] == 'Horror'): ?> selected="selected"<?php endif; endif; ?>>Horror</option>
                  <option value="Humor" <?php if(isset($_POST["noveltype"])): if($_POST["noveltype"] == 'Humor'): ?> selected="selected"<?php endif; endif; ?>>Humor</option>
                  <option value="Mystery" <?php if(isset($_POST["noveltype"])): if($_POST["noveltype"] == 'Mystery'): ?> selected="selected"<?php endif; endif; ?>>Mystery</option>
                  <option value="Nonfiction" <?php if(isset($_POST["noveltype"])): if($_POST["noveltype"] == 'Nonfiction'): ?> selected="selected"<?php endif; endif; ?>>Nonfiction</option>
                  <option value="Romance" <?php if(isset($_POST["noveltype"])): if($_POST["noveltype"] == 'Romance'): ?> selected="selected"<?php endif; endif; ?>>Romance</option>
                  <option value="Sci-Fi" <?php if(isset($_POST["noveltype"])): if($_POST["noveltype"] == 'Sci-Fi'): ?> selected="selected"<?php endif; endif; ?>>Sci-Fi</option>
                </select>
              </div>
            </td>

            <td>
              <div class="select_join">
                <select name="editor" onchange="this.form.submit()">
                  <option value="%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == '%'): ?> selected="selected"<?php endif; endif; ?>>All</option>
                  <option value="A%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'A%'): ?> selected="selected"<?php endif; endif; ?>>A</option>
                  <option value="B%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'B%'): ?> selected="selected"<?php endif; endif; ?>>B</option>
                  <option value="C%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'C%'): ?> selected="selected"<?php endif; endif; ?>>C</option>
                  <option value="D%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'D%'): ?> selected="selected"<?php endif; endif; ?>>D</option>
                  <option value="E%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'E%'): ?> selected="selected"<?php endif; endif; ?>>E</option>
                  <option value="F%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'F%'): ?> selected="selected"<?php endif; endif; ?>>F</option>
                  <option value="G%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'G%'): ?> selected="selected"<?php endif; endif; ?>>G</option>
                  <option value="H%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'H%'): ?> selected="selected"<?php endif; endif; ?>>H</option>
                  <option value="I%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'I%'): ?> selected="selected"<?php endif; endif; ?>>I</option>
                  <option value="J%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'J%'): ?> selected="selected"<?php endif; endif; ?>>J</option>
                  <option value="K%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'K%'): ?> selected="selected"<?php endif; endif; ?>>K</option>
                  <option value="L%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'L%'): ?> selected="selected"<?php endif; endif; ?>>L</option>
                  <option value="M%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'M%'): ?> selected="selected"<?php endif; endif; ?>>M</option>
                  <option value="N%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'N%'): ?> selected="selected"<?php endif; endif; ?>>N</option>
                  <option value="O%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'O%'): ?> selected="selected"<?php endif; endif; ?>>O</option>
                  <option value="P%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'P%'): ?> selected="selected"<?php endif; endif; ?>>P</option>
                  <option value="Q%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'Q%'): ?> selected="selected"<?php endif; endif; ?>>Q</option>
                  <option value="R%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'R%'): ?> selected="selected"<?php endif; endif; ?>>R</option>
                  <option value="S%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'S%'): ?> selected="selected"<?php endif; endif; ?>>S</option>
                  <option value="T%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'T%'): ?> selected="selected"<?php endif; endif; ?>>T</option>
                  <option value="U%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'U%'): ?> selected="selected"<?php endif; endif; ?>>U</option>
                  <option value="V%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'V%'): ?> selected="selected"<?php endif; endif; ?>>V</option>
                  <option value="W%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'W%'): ?> selected="selected"<?php endif; endif; ?>>W</option>
                  <option value="X%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'X%'): ?> selected="selected"<?php endif; endif; ?>>X</option>
                  <option value="Y%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'Y%'): ?> selected="selected"<?php endif; endif; ?>>Y</option>
                  <option value="Z%" <?php if(isset($_POST["editor"])): if($_POST["editor"] == 'Z%'): ?> selected="selected"<?php endif; endif; ?>>Z</option>
                </select>
              </div>
            </td>
          </form>
        </tr>

        <?php
          while($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$res['fullname']."</td>";
            echo "<td>".$res['joinyear']."</td>";
            echo "<td>".$res['noveltype']."</td>";
            echo "<td>".$res['editor']."</td>";
          }
        ?>

        <tr>
          <td colspan="3" align="right">
            Average Sales per Writer in 2011: </br>
            Average Sales per Writer in 2012: </br>
            Average Sales per Writer in 2013: </br>
            Average Sales per Writer in 2014: </br>
            Average Sales per Writer in 2015: </br>
            Average Sales per Writer in 2016: </br>
            Average Sales per Writer in 2017: </br>
          </td>

          <td align="left">
            <?php
              $stats = mysqli_fetch_array($statistics);
              echo $stats['2011']."</br>";
              echo $stats['2012']."</br>";
              echo $stats['2013']."</br>";
              echo $stats['2014']."</br>";
              echo $stats['2015']."</br>";
              echo $stats['2016']."</br>";
              echo $stats['2017']."</br>";
            ?>
          </td>
        </tr>
      </tbody>

    </table>
  </body>
</html>
