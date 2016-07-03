<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-sm-16">
        <header class="panel-heading">
<center><h4>Laboratory Request #<?=$requestno?><h4></center>
        </header>
      </div>
        <div class="col-sm-6">
            <section class="panel">
                <header class="panel-heading" style="background-color: #000;"></header>
                <header class="panel-heading">
     <center><h4>PATIENT DETAILS<h4></center>
                </header>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td style="text-align: center;"><b>Name:</b> &ensp;<?php echo $laboratorytopatient->first_name." ".$laboratorytopatient->last_name; ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;"><b>Address:</b> &ensp;<?php echo $laboratorytopatient->present_address; ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;"><b>Number:</b> &ensp;<?php echo $laboratorytopatient->mobile_number." / ".$laboratorytopatient->telephone_number; ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;"><b>Date of Birth:</b> &ensp;<?php echo $laboratorytopatient->birthdate; ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;"><b>Gender:</b> &ensp;<?php echo $laboratorytopatient->gender ?></td>
                    </tr>
                    </thead>
                    <tbody align="center">

                    </tbody>
                </table>
            </section>
        </div>
        <div class="col-sm-6">
            <section class="panel">
                <header class="panel-heading" style="background-color: #000;"></header>
                <header class="panel-heading">
                    <center><h4>REQUESTER DETAILS<h4></center>
                </header>
                <table class="table table-striped">
                    <thead>
                      <tr>
                          <td style="text-align: center;"><b>Name:</b> &ensp;<?php echo $laboratorytouser->first_name." ".$laboratorytouser->last_name; ?></td>
                      </tr>
                      <tr>
                          <td style="text-align: center;"><b>Email:</b> &ensp;<?php echo $laboratorytouser->email; ?></td>
                      </tr>
                      <tr>
                          <td style="text-align: center;"><b>Number:</b> &ensp;<?php echo $laboratorytouser->contact_number; ?></td>
                      </tr>
                      <tr>
                          <td style="text-align: center;"><b>Date of Birth:</b> &ensp;<?php echo $laboratorytouser->birthdate; ?></td>
                      </tr>
                    </thead>
                    <tbody align="center">

                    </tbody>
                </table>
            </section>
        </div>
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading" style="background-color: #000;"></header>
                <header class="panel-heading">
     <center><h4>Urgency and Fasting Details<h4></center>
                </header>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td style="text-align: center;">Urgency: <?php echo $laboratorytolabrequest->urg_name; ?> </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">Fasting: <?php echo $laboratorytolabrequest->fast_name; ?></td>
                    </tr>
                    </thead>
                    <tbody align="center">

                    </tbody>
                </table>
            </section>
        </div>

        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading" style="background-color: #000;"></header>
                <header class="panel-heading">
     <center><h4>Specimen/s Received<h4></center>
                </header>
                <table class="table table-striped">
                    <thead>
                    <?php
                    foreach($laboratorytospecimen as $spec)
                    {
                      echo "<tr>";
                      echo "<td style='text-align: center;'>".$spec['specimen_name']."</td>";
                      echo "</tr>";
                    }
                    ?>
                    </thead>
                    <tbody align="center">

                    </tbody>
                </table>
            </section>
        </div>
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading" style="background-color: #000;"></header>
                <header class="panel-heading">
     <center><h4>EXAMINATION DETAILS<h4></center>
                </header>
                <table class="table table-striped">
                    <thead>
                    <tr>
                      <th style="text-align: center;">Name</th>
                      <th style="text-align: center;">Category</th>
                      <th style="text-align: center;">Description</th>
                    </tr>
                    <tr>
                      <td style="text-align: center;"><?php echo $laboratorytolabrequest->lab_exam_type_name; ?></td>
                      <td style="text-align: center;"><?php echo $laboratorytolabrequest->exam_cat_name; ?></td>
                      <td style="text-align: center;"><?php echo $laboratorytolabrequest->lab_exam_type_description; ?></td>
                    </tr>
                    </thead>
                    <tbody align="center">

                    </tbody>
                </table>
            </section>
        </div>
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading" style="background-color: #000;"></header>
                <header class="panel-heading">
     <center><h4>Additional Remarks<h4></center>
                </header>
                <table class="table table-striped">
                    <thead>
                    <tr>
                      <td style="text-align: center;"><?php echo $laboratorytoremarks->remark; ?></td>
                    </tr>
                    </thead>
                    <tbody align="center">

                    </tbody>
                </table>
            </section>
        </div>
    </div>
  </section>
</section>
