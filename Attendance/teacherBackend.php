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
?>
