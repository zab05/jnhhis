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
            <section class="panel">
                <header class="panel-heading" style="background-color: #000;"></header>
                <header class="panel-heading">
                    <center><h4>PATIENT LIST<h4></center>
                </header>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">Patient No.</th>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Date Registered</th>
                        <th style="text-align: center;">Action</th>
                    </tr>
                    </thead>
                    <tbody align="center">
                      <?php
                        foreach($patients as $patient){
                          echo "<tr>";
                            echo "<td>".$patient['patient_id']."</td>";
                            echo "<td>";
                              if($patient['gender'] == 'M'){
                                echo "Mr. ";
                              }else{
                                echo "Ms. ";
                              }
                              echo $patient['first_name']." ".$patient['middle_name']." ".$patient['last_name'];
                            echo "</td>";
                            echo "<td>".date('F d, Y', strtotime($patient['date_registered']))."</td>";
                            echo "<td>";
                              echo "<div class='btn-group' role='group' aria-label='...'>";
                                echo "<a href='".base_url()."Admin/PatientList/".$patient['patient_id']."' role='button' class='btn btn-default'>Show</a>";
                                echo "<a href='".base_url()."Admin/PatientHistory/".$patient['patient_id']."' role='button' class='btn btn-default'>History</a>";
                                echo "<a href='".base_url()."Admin/EditPatient/".$patient['patient_id']."' role='button' class='btn btn-default'>Edit</a>";
                              echo "</div>";
                            echo "</td>";
                          echo "</tr>";
                        }
                      ?>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
  </section>
</section>
