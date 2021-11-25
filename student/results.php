<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="static/student.css">
</head>
<style>
  #container {
    margin-left: auto;
    margin-right: auto;
    margin-top: 100px;
    padding: 40px;

    background: #e6e6e6;
    max-width: 1000px;
    box-shadow: 0px 5px 30px -3px rgb(37, 37, 37);
    border-radius: 12px;
  }

  .heading {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -1550%);
  }

  table {
    border-collapse: separate;
    border-spacing: 0 1rem;

  }

  th,
  td {
    text-align: center;
  }

  tr:nth-child(odd) {
    background-color: rgba(144, 216, 238, 0.637);
  }

  tr:nth-child(even) {
    background-color: rgba(223, 223, 223, 0.808);
  }

  tr {
    box-shadow: 0px 5px 20px -15px rgba(37, 37, 37);
  }
</style>

<body>
  <?php include "../partials/navbarStudent.php"  ?>
  <div class="heading">
    <h3>RESULT</h3>
  </div>
  <div id="container">
    <table style="width:100%">
      <tr style="height:60px">
        <th style="width:10%" ;>S. NO.</th>
        <th>SUBJECT</th>
        <th style="width:18%">EXAM CODE</th>
        <th style="width:15%">GRADE AWARDED</th>
      </tr>
      <tr style="height:50px" ;bgcolor="lightblue">
        <td>1.</td>
        <td>DATA STRUCTURES - (15B11CI311)</td>
        <td>2021ODDSEM</td>
        <td>B+</td>
      </tr>
      <tr style="height:50px">
        <td>2.</td>
        <td>DATA STRUCTURES LAB - (15B17CI371)</td>
        <td>2021ODDSEM</td>
        <td>B+</td>
      </tr>
      <tr style="height:50px">
        <td>3.</td>
        <td>DATABASE SYSTEMS AND WEB - (15B11CI312)</td>
        <td>2021ODDSEM</td>
        <td>B+</td>
      </tr>
      <tr style="height:50px">
        <td>4.</td>
        <td>DATABASE SYSTEMS AND WEB LAB - (15B17CI372)</td>
        <td>2021ODDSEM</td>
        <td>B+</td>
      </tr>
      <tr style="height:50px">
        <td>5.</td>
        <td>ECONOMICS - (15B11HS211)</td>
        <td>2021ODDSEM</td>
        <td>B+</td>
      </tr>
      <tr style="height:50px">
        <td>6.</td>
        <td>ELECTRICAL SCIENCE LAB -2 - (15B17EC271)</td>
        <td>2021ODDSEM</td>
        <td>B+</td>
      </tr>
      <tr style="height:50px">
        <td>7.</td>
        <td>ELECTRICAL SCIENCE-2 - (15B11EC211)</td>
        <td>2021ODDSEM</td>
        <td>B+</td>
      </tr>
      <tr style="height:50px">
        <td>8.</td>
        <td>THEORETICAL FOUNDATIONS OF COMPUTER SCIENCE - (15B11CI212)</td>
        <td>2021ODDSEM</td>
        <td>B+</td>
      </tr>

    </table>
  </div>
</body>

</html>