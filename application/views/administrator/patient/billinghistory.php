<section id="main-content">
  <section class="wrapper">
    <?php
      $name = $patient->first_name." ".$patient->last_name;
    ?>
    <center>
      <h1><?=$name?>'s Billing History</h1>
      <h5><?=$patient->patient_id?></h5>
    </center>

    <table class="table">
      <tr id="tblheader">
        <th>#</th>
        <th>Check-In No.</th>
        <th>Type</th>
        <th>Activity</th>
        <th>Bed</th>
        <th>Date</th>
      <tr>
    </table>
  </section>
</section>
