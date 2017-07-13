<?php
  include 'db.php';
  session_start();
  $status = $_SESSION['status'];
  $first_name = $_SESSION['first_name'];
  $teacher_id = $_SESSION['teacher_id'];

  $request_code = $_GET['req'];

  if($request_code == 1){
    $semester_value = $_GET['semester'];
    echo "$semester_value";
    $query_to_get_subjects_taught = "SELECT * FROM `subjects` WHERE `teacher_id` = $teacher_id AND `semester` = $semester_value";
    $result = mysqli_query($conn,$query_to_get_subjects_taught);
    while($rows = mysqli_fetch_assoc($result)){
      $subject_code = $rows['subject_code'];
      $subject_name = $rows['name'];
      echo "<option value='$subject_code'>$subject_name</option>";

    }
  }
  elseif ($request_code == 2) {
    # code for displaying table in the webpage
    $subject_code = $_GET['subjectCode'];
    echo "
    <div class='jumbotron' id='class_list_uneditable'>
      <div class='container-fluid'>
        <div class='col-md-2'></div>
        <div class='col-md-8 col-sm-10 col-xs-9'>
          <div class='scrolling'>
            <div class='inner'>
              <table class='table table-striped table-hover table-condensed'>
                <tr>
                  <th>Date </th>
                  <td>Content One</td>
                  <td>Longer Content Two</td>
                  <td>Third Content Contains More</td>
                  <td>Short Four</td>
                  <td>Standard Five</td>
                  <td>Who's Counting</td>
                </tr>
                <tr>
                  <th>lolo</th>
                  <td>12</td>
                  <td>12</td>
                  <td>12</td>
                  <td>12</td>
                  <td>12</td>
                  <td>12</td>
                </tr>
                <tr>
                  <th>lolo</th>
                  <td>12</td>
                  <td>12</td>
                  <td>12</td>
                  <td>12</td>
                  <td>12</td>
                  <td>12</td>
                </tr>
                <tr>
                  <th>lolo</th>
                  <td>12</td>
                  <td>12</td>
                  <td>12</td>
                  <td>12</td>
                  <td>12</td>
                  <td>12</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <form  onsubmit='editable_list(); return false;'>
            <input type='text' id='date_to_edit' placeholder='YYYY-MM-DD' value='' onchange='date_validate(); return false;' required></input>
            <button type='submit' class='btn btn-primary' id='submit_button'>Submit<div class='ripple-container'></div></button>
            
      </form>

    </div>


    ";

  }elseif ($request_code == 3) {
    # code for displaying editable table in the webpage
    $subject_code = $_GET['subjectCode'];
    echo "
    <div class='jumbotron' id='class_list_uneditable'>
      <div class='container-fluid'>
        <div class='col-md-2'></div>
        <div class='col-md-8 col-sm-10 col-xs-9'>
          <div class='scrolling'>
            <div class='inner'>
              <table class='table table-striped table-hover table-condensed'>
                <tr>
                  <th>Roll Number </th>
                  <td>Date</td>
                </tr>
                <tr>
                  <th>lolo</th>
                  <td></td>
                </tr>
                <tr>
                  <th>lolo</th>
                  <td></td>
                </tr>
                <tr>
                  <th>lolo</th>
                  <td></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>



    </div>


    ";

  }
?>
