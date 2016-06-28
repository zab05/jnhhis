<section id="main-content">
  <section class="wrapper">
    <?php
      $name = $patient->first_name." ".$patient->last_name;
    ?>
    <center>
      <h1><?=$name?>'s Vital Signs</h1>
      <h5><?=$patient->patient_id?></h5>
    </center>

    <table class="table">
      <tr id="tblheader">
        <th>#</th>
        <th>Date Updated</th>
        <th>Weight</th>
        <th>Height</th>
        <th>Blood Pressure</th>
        <th>Temperature</th>
        <th>Heart Rate</th>
        <th>Breathing Rate</th>
      <tr>
    </table>
  </section>
</section>

<div id="page-wrapper">

</div>
