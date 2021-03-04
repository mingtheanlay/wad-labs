<html>

<head>
  <title>លិខិតសុំច្បាប់</title>
</head>

<body>
  <?php
  $name = $_GET['name'];
  $year = $_GET['year_of_study'];
  $class = $_GET['class'];
  $amount_of_date = $_GET['amout_of_date'];
  $s1 = $_GET['session1'];
  $s2 = $_GET['session2'];
  $from_day = $_GET['from_day'];
  $from_month = $_GET['from_month'];
  $from_year = $_GET['from_year'];
  $until_day = $_GET['until_day'];
  $until_month = $_GET['until_month'];
  $until_year = $_GET['until_year'];
  $reason = $_GET['reason'];
  $done_in_day = $_GET['done_in_day'];
  $done_in_month = $_GET['done_in_month'];
  $done_in_year = $_GET['done_in_year'];
  $verify_day = $_GET['verify_day'];
  $verify_month = $_GET['verify_month'];
  $verify_year = $_GET['verify_year'];
  $reason = $_GET['reason'];
  ?>
  <table border="0" align="center" width="80%">
    <tr>
      <td>
        <h4>
          សាកលវិទ្យាល័យភូមិន្ទភ្នំពេញ <br />
          ដេប៉ាតឺម៉ង់ព័ត៌មានវិទ្យា
        </h4>
      </td>
      <td align="right">
        <h4>
          ព្រះរាជាណាចក្រកម្ពុជា <br />
          ជាតិ សាសនា ព្រះមហាក្សត្រ
        </h4>
      </td>
    </tr>
  </table>
  <h2 align="center"><u>លិខិតសុំច្បាប់</u></h2>
  <form align="center" width="80%" method="post">
    <p>
      ខ្ញុំបាទ/នាងខ្ញុំឈ្មាះ
      <?php echo $name; ?>
      ជានិស្សិតរៀន
      <?php echo $year; ?>
      ថ្នាក់
      <?php echo $class; ?>
      ផ្នែកពត័មានវិទ្យានៃសាកលវិទ្យាល័យភូមិន្ទភ្នំពេញ។
    </p>
    <h3>
      សូមគេារពជូន<br />
      លេាកប្រធានដេប៉ាតឺម៉ង់ពត័មានវិទ្យា
    </h3>
    <p>
      <strong><u>កម្មវត្ថុ:</u></strong>
      សំណើសុំច្បាប់ឈប់សម្រាកចំនួន
      <?php echo $amount_of_date ?>
      ថ្ងៃ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      if ($s1 == "first_session") {
        echo "ម៉េាងទី១";
      } else if ($s2 == "second_session") {
        echo "ម៉េាងទី២";
      }
      ?>
    </p>
    <p>
      នៅថ្ងៃទី
      <?php echo $from_day; ?>
      ខែ
      <?php echo $from_month; ?>
      ឆ្នាំ
      <?php echo $from_year; ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ដល់ថ្ងៃទី
      <?php echo $until_day; ?>
      ខែ
      <?php echo $until_month; ?>
      ឆ្នាំ
      <?php echo $until_year; ?>
    </p>
    <p>
      <strong> <u>មូលហេតុ:</u> </strong>
      <br />
      <?php echo $reason; ?>
    </p>
    <p>
      អាស្រ័យហេតុខាងលើសូមលោកប្រធានមេត្តាអនុញ្ញតិដល់ខ្ញុំបាទ/នាងខ្ញុំដេាយសេក្តីអនុគ្រេាះ។
      <br />
      សូមលេាកប្រធានទទួលនូវការគេារពដ័ខ្ពង់ខ្ពស់អំពីខ្ញុំ។
    </p>
    <br />
    <table border="0" width="80%" align="center">
      <tr>
        <td width="40%" align="center">បានឃើញនិងឯកភាព</td>
        <td width="40%" align="center">
          ធ្វើនៅភ្នំពេញ
          <br>
          ថ្ងៃទី
          <?php echo $done_in_day; ?>
          ខែ
          <?php echo $done_in_month; ?>
          ឆ្នាំ
          <?php echo $done_in_year; ?>
        </td>
      </tr>
      <tr>
        <td align="center">
          ព.ម.វ ថ្ងៃទី
          <?php echo $verify_day; ?>
          ខែ
          <?php echo $verify_month; ?>
          ឆ្នាំ
          <?php echo $verify_year; ?>
        </td>
        <td align="center">ហត្ថលេខា និង ឈ្មោះ : <?php echo $name; ?></td>
      </tr>
    </table>
    <br />
  </form>
</body>

</html>