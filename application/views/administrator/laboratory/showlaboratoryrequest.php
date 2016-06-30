<section id="main-content">
  <section class="wrapper">
    <div class="row">
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
     <center><h4>SAMPLE DETAILS<h4></center>
                </header>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>Urgency: Urgent</td>
                        <td>Blood</td>
                    </tr>
                    <tr>
                        <td>Fasting: Non-Fasting</td>
                        <td>Faeces</td>
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
                      <td style="text-align: center;">Dummy</td>
                      <td style="text-align: center;">Dummy</td>
                      <td style="text-align: center;">Dummy</td>
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
                      <td style="text-align: center;">Remarks</td>
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
