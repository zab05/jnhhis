<section id="main-content">
  <section class="wrapper">
      <div class="row">
          <div class="col-sm-3">
            <section class="panel">
                <header class="panel-heading" style="background-color: #000;"></header>
                <table class="table">
                    <tr>
                      <td colspan="2" align="center"><h5><a href="<?=base_url()?>Admin/AddPatient" role="button" class="btn btn-info">+ADD NEW PATIENT</a></h5></td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                      <td>Overall Patients: </td>
                      <td><?=$total_patients_count?></td>
                    </tr>
                    <tr>
                      <td>Patients Admitted: </td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>Patients in ER: </td>
                      <td>1</td>
                    </tr>
                </table>
            </section>
          </div>

          <div class="col-sm-9">
            <section class="panel" style="height: 100%;">
              <header class="panel-heading">
                  <center><h3>PATIENT INFORMATION<h3></center>
              </header>
              <table class="table" style="text-align: center;">
                <tr id="tblheader">
                  <td>
                  <?php
                      echo "<h4>";
                      if($patient->gender == 'M'){
                        echo "Mr. ";
                      }else{
                        echo "Ms. ";
                      }
                      echo $patient->first_name." ".$patient->middle_name." ".$patient->last_name;
                      echo "</h4>";
                    ?>
                </td>
                </tr>
              </table>
              <center>
              <table class="table table-bordered" style="width: 50%; text-align: center;">
                <tr>
                  <td style="width: 50%;"><b>Patient Number:</b></td>
                  <td><?=" ".$patient->patient_id?></td>
                </tr>

                <tr>
                  <td style="width: 50%;"><b>Age:</b></td>
                  <td><?=" ".$patient->age?></td>
                </tr>

                <tr>
                  <td style="width: 50%;"><b>Birthday:</b></td>
                  <td><?=" ".date('F d, Y', strtotime($patient->birthdate))?></td>

                </tr>

                <tr>
                  <td style="width: 50%;"><b>Gender:</b></td>
                  <td>
                    <?php
                     if($patient->gender == 'M'){
                       echo "Male";
                     }else{
                       echo "Female";
                     }
                    ?>
                  </td>
                </tr>

                <tr>
                  <td style="width: 50%;"><b>Mobile Number:</b></td>
                  <td><?=" ".$patient->mobile_number?></td>
                </tr>

                <tr>
                  <td style="width: 50%;"><b>Telephone Number:</b></td>
                  <td><?=" ".$patient->telephone_number?></td>
                </tr>

                <tr>
                  <td style="width: 50%;"><b>Address:</b></td>
                  <td><?=" ".$patient->present_address?></td>
                </tr>

                <tr>
                  <td style="width: 50%;"><b>Nationality:</b></td>
                  <td><?=" ".$patient->nationality?></td>
                </tr>

                <tr>
                  <td colspan="2">
                    <a href="<?=base_url()?>Admin/Billing/<?=$patient->patient_id?>" role="button" class="btn btn-default">Overall Billing</a>
                    <a href="<?=base_url()?>Admin/PatientHistory/<?=$patient->patient_id?>" role="button" class="btn btn-default">Medical History</a>
                    <a href="<?=base_url()?>Admin/VitalSign/<?=$patient->patient_id?>" role="button" class="btn btn-default">Vital Signs</a>
                    <br>
                    <br>
                    <a href="<?=base_url()?>Admin/Pharmacy/<?=$patient->patient_id?>" role="button" class="btn btn-default">Pharmacy</a>
                    <a href="#" role="button" class="btn btn-default">Laboratory</a>
                    <a href="#" role="button" class="btn btn-default">Radiology</a>
                  </td>
                </tr>
              </table>
            </section>
          </div>
      </div>
  </section>
</section>
