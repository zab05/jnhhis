<section id="main-content">
  <section class="wrapper">
    <?php
      $name = $patient->first_name." ".$patient->last_name;
    ?>
    <center>
      <h1><?=$name?>'s Pharmacy History</h1>
      <h5><?=$patient->patient_id?></h5>
    </center>

    <table class="table">
      <tr id="tblheader">
        <th>#</th>
        <th>TYPE</th>
        <th>Check-In No.</th>
        <th>Height</th>
        <th>Date Added</th>
        <th>Action</th>
      <tr>
    </table>
  </section>
</section>
