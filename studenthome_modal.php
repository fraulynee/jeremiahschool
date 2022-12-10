      <?php



if (isset($_POST['submit'])) {
  $choices_1 = explode(',', $_POST['choices-1']);
  $choices_2 = explode(',', $_POST['choices-2']);
  $choices_3 = explode(',', $_POST['choices-3']);
  $choices_4 = explode(',', $_POST['choices-4']);
  $choices_5 = explode(',', $_POST['choices-5']);
  $choices_6 = explode(',', $_POST['choices-6']);
  $choices_7 = explode(',', $_POST['choices-7']);
  $choices_8 = explode(',', $_POST['choices-8']);
  $choices_9 = explode(',', $_POST['choices-9']);
  $choices_10 = explode(',', $_POST['choices-10']);
  $choices_11 = explode(',', $_POST['choices-11']);
  $choices_12 = explode(',', $_POST['choices-12']);
  $student_id = $_SESSION['IDNO'];
  $sql = "INSERT INTO question (answer,courses,average,student_id,student_id) VALUES ('$choices_1[0]','$choices_1[1]','$choices_1[2]','$student_id')";
  mysqli_query($conn, $sql);

  $sql2 = "INSERT INTO question (answer,courses,average,student_id) VALUES ('$choices_2[0]','$choices_2[1]','$choices_2[2]','$student_id')";
  mysqli_query($conn, $sql2);

  $sql3 = "INSERT INTO question (answer,courses,average,student_id) VALUES ('$choices_3[0]','$choices_3[1]','$choices_3[2]','$student_id')";
  mysqli_query($conn, $sql3);

  $sql4 = "INSERT INTO question (answer,courses,average,student_id) VALUES ('$choices_4[0]','$choices_4[1]','$choices_4[2]','$student_id')";
  mysqli_query($conn, $sql4);

  $sql5 = "INSERT INTO question (answer,courses,average,student_id) VALUES ('$choices_5[0]','$choices_5[1]','$choices_5[2]','$student_id')";
  mysqli_query($conn, $sql5);

  $sql6 = "INSERT INTO question (answer,courses,average,student_id) VALUES ('$choices_6[0]','$choices_6[1]','$choices_6[2]','$student_id')";
  mysqli_query($conn, $sql6);

  $sql7 = "INSERT INTO question (answer,courses,average,student_id) VALUES ('$choices_7[0]','$choices_7[1]','$choices_7[2]','$student_id')";
  mysqli_query($conn, $sql7);

  $sql8 = "INSERT INTO question (answer,courses,average,student_id) VALUES ('$choices_8[0]','$choices_8[1]','$choices_8[2]','$student_id')";
  mysqli_query($conn, $sql8);

  $sql9 = "INSERT INTO question (answer,courses,average,student_id) VALUES ('$choices_9[0]','$choices_9[1]','$choices_9[2]','$student_id')";
  mysqli_query($conn, $sql9);

  $sql10 = "INSERT INTO question (answer,courses,average,student_id) VALUES ('$choices_10[0]','$choices_10[1]','$choices_10[2]','$student_id')";
  mysqli_query($conn, $sql10);

  $sql11 = "INSERT INTO question (answer,courses,average,student_id) VALUES ('$choices_11[0]','$choices_11[1]','$choices_11[2]','$student_id')";
  mysqli_query($conn, $sql11);

  $sql12 = "INSERT INTO question (answer,courses,average,student_id) VALUES ('$choices_12[0]','$choices_12[1]','$choices_12[2]','$student_id')";
  mysqli_query($conn, $sql12);
  
  $IDNO = $_SESSION['IDNO'];
  echo "<script>window.location.href='studenthome.php?question&IDNO=".$IDNO."';</script>";

}


mysqli_close($conn);
?>
 <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <section id="questionaires">
          <form method="POST">
            <h2>Start your Test!</h2>
            <br />
            <div class="container mt-5">
              <div class="content mt-5 mx-auto">
                <?php
                include 'config.php';
                $sql = "SELECT * FROM tblstudent WHERE IDNO = '".$_SESSION['IDNO']."'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                ?>
                <input
                  class="input"
                  id="form-one"
                  type="text"
                  placeholder="Enter your name"
                  required
                  autocomplete="off"
                  value="<?php echo $row['LNAME']." ".$row['FNAME'] ?>"
                />
                <span class="border"></span>
              </div>
            </div>

            <!-- QUESTION 1 STEM -->
            <div class="question-container">
              <p id="question1" class="questions">1. Solve math problems</p>
              <br />
              <div class="choices">
                <input
                  type="radio"
                  id="a-1"
                  name="choices-1"
                  value="Very Interested,STEM,1"
                  required
                />
                <label for="a-1">Very Interested</label><br />

                <input
                  type="radio"
                  id="b-1"
                  name="choices-1"
                  value="Interested,STEM,2"
                />
                <label for="b-1">Interested</label><br />

                <input
                  type="radio"
                  id="c-1"
                  name="choices-1"
                  value="Slightly Interested,STEM,3"
                />
                <label for="c-1">Slightly Interested</label><br />

                <input
                  type="radio"
                  id="d-1"
                  name="choices-1"
                  value="Not Interested,STEM,4"
                />
                <label for="d-1">Not Interested</label>
              </div>
            </div>
            <!-- QUESTION 2 ABM -->
            <div class="question-container">
              <p id="question2">2. Start or run a business</p>
              <br />
              <div class="choices">
                <input
                  type="radio"
                  id="a-2"
                  name="choices-2"
                  value="Very Interested,ABM,1"
                  required
                />
                <label for="a-2">Very Interested</label><br />

                <input
                  type="radio"
                  id="b-2"
                  name="choices-2"
                  value="Interested,ABM,2"
                />
                <label for="b-2">Interested</label><br />

                <input
                  type="radio"
                  id="c-2"
                  name="choices-2"
                  value="Slightly Interested,ABM,3"
                />
                <label for="c-2">Slightly Interested</label><br />

                <input
                  type="radio"
                  id="d-2"
                  name="choices-2"
                  value="Not Interested,ABM,4"
                />
                <label for="d-2">Not Interested</label>
              </div>
            </div>
            <!-- QUESTION 3 STEM-->
            <div class="question-container">
              <p id="question3">3. Learn computer software programs</p>
              <br />
              <div class="choices">
                <input
                  type="radio"
                  id="a-3"
                  name="choices-3"
                  value="Very Interested,STEM,1"
                  required
                />
                <label for="a-3">Very Interested</label><br />

                <input
                  type="radio"
                  id="b-3"
                  name="choices-3"
                  value="Interested,STEM,2"
                />
                <label for="b-3">Interested</label><br />

                <input
                  type="radio"
                  id="c-3"
                  name="choices-3"
                  value="Slightly Interested,STEM,3"
                />
                <label for="c-3">Slightly Interested</label><br />

                <input
                  type="radio"
                  id="d-3"
                  name="choices-3"
                  value="Not Interested,STEM,4"
                />
                <label for="d-3">Not Interested</label>
              </div>
            </div>
            <!-- QUESTION 4 HUMSS -->
            <div class="question-container">
              <p id="question4">4. Learn the legal system</p>
              <br />
              <div class="choices">
                <input
                  type="radio"
                  id="a-4"
                  name="choices-4"
                  value="Very Interested,HUMSS,1"
                  required
                />
                <label for="a-4">Very Interested</label><br />

                <input
                  type="radio"
                  id="b-4"
                  name="choices-4"
                  value="Interested,HUMSS,2"
                />
                <label for="b-4">Interested</label><br />

                <input
                  type="radio"
                  id="c-4"
                  name="choices-4"
                  value="Slightly Interested,HUMSS,3"
                />
                <label for="c-4">Slightly Interested</label><br />

                <input
                  type="radio"
                  id="d-4"
                  name="choices-4"
                  value="Not Interested,HUMSS,4"
                />
                <label for="d-4">Not Interested</label>
              </div>
            </div> 
            <!-- QUESTION 5 HUMSS-->
            <div class="question-container">
              <p id="question5">5. Critique art, music, or performances.</p>
              <br />
              <div class="choices">
                <input
                  type="radio"
                  id="a-5"
                  name="choices-5"
                  value="Very Interested,HUMSS,1"
                  required
                />
                <label for="a-5">Very Interested</label><br />

                <input
                  type="radio"
                  id="b-5"
                  name="choices-5"
                  value="Interested,HUMSS,2"
                />
                <label for="b-5">Interested</label><br />

                <input
                  type="radio"
                  id="c-5"
                  name="choices-5"
                  value="Slightly Interested,HUMSS,3"
                />
                <label for="c-5">Slightly Interested</label><br />

                <input
                  type="radio"
                  id="d-5"
                  name="choices-5"
                  value="Not Interested,HUMSS,4"
                />
                <label for="d-5">Not Interested</label>
              </div>
            </div> 
            <!-- QUESTION 6 ABM-->
            <div class="question-container">
              <p id="question6">6. Learn statistics and accounting</p>
              <br />
              <div class="choices">
                <input
                  type="radio"
                  id="a-6"
                  name="choices-6"
                  value="Very Interested,ABM,1"
                  required
                />
                <label for="a-6">Very Interested</label><br />

                <input
                  type="radio"
                  id="b-6"
                  name="choices-6"
                  value="Interested,ABM,2"
                />
                <label for="b-6">Interested</label><br />

                <input
                  type="radio"
                  id="c-6"
                  name="choices-6"
                  value="Slightly Interested,ABM,3"
                />
                <label for="c-6">Slightly Interested</label><br />

                <input
                  type="radio"
                  id="d-6"
                  name="choices-6"
                  value="Not Interested,ABM,4"
                />
                <label for="d-6">Not Interested</label>
              </div>
            </div> 

            <!-- QUESTION 7 ABM-->
            <div class="question-container">
              <p id="question7">7.Help with business operations</p>
              <br />
              <div class="choices">
                <input
                  type="radio"
                  id="a-7"
                  name="choices-7"
                  value="Very Interested,ABM,1"
                  required
                />
                <label for="a-7">Very Interested</label><br />

                <input
                  type="radio"
                  id="b-7"
                  name="choices-7"
                  value="Interested,ABM,2"
                />
                <label for="b-7">Interested</label><br />

                <input
                  type="radio"
                  id="c-7"
                  name="choices-7"
                  value="Slightly Interested,ABM,3"
                />
                <label for="c-7">Slightly Interested</label><br />

                <input
                  type="radio"
                  id="d-7"
                  name="choices-7"
                  value="Not Interested,ABM,4"
                />
                <label for="d-7">Not Interested</label>
              </div>
            </div> 

            <!-- QUESTION 8 STEM-->
            <div class="question-container">
              <p id="question8">8. Use math, science, and technology.</p>
              <br />
              <div class="choices">
                <input
                  type="radio"
                  id="a-8"
                  name="choices-8"
                  value="Very Interested,STEM,1"
                  required
                />
                <label for="a-8">Very Interested</label><br />

                <input
                  type="radio"
                  id="b-8"
                  name="choices-8"
                  value="Interested,STEM,2"
                />
                <label for="b-8">Interested</label><br />

                <input
                  type="radio"
                  id="c-8"
                  name="choices-8"
                  value="Slightly Interested,STEM,3"
                />
                <label for="c-8">Slightly Interested</label><br />

                <input
                  type="radio"
                  id="d-8"
                  name="choices-8"
                  value="Not Interested,STEM,4"
                />
                <label for="d-8">Not Interested</label>
              </div>
            </div> 

            <!-- QUESTION 9 HUMSS-->
            <div class="question-container">
              <p id="question9">9. Take care of people, even strangers.</p>
              <br />
              <div class="choices">
                <input
                  type="radio"
                  id="a-9"
                  name="choices-9"
                  value="Very Interested,HUMSS,1"
                  required
                />
                <label for="a-9">Very Interested</label><br />

                <input
                  type="radio"
                  id="b-9"
                  name="choices-9"
                  value="Interested,HUMSS,2"
                />
                <label for="b-9">Interested</label><br />

                <input
                  type="radio"
                  id="c-9"
                  name="choices-9"
                  value="Slightly Interested,HUMSS,3"
                />
                <label for="c-9">Slightly Interested</label><br />

                <input
                  type="radio"
                  id="d-9"
                  name="choices-9"
                  value="Not Interested,HUMSS,4"
                />
                <label for="d-9">Not Interested</label>
              </div>
            </div> 

            <!-- QUESTION 10 STEM-->
            <div class="question-container">
              <p id="question10">10. Troubleshoot technology issues</p>
              <br />
              <div class="choices">
                <input
                  type="radio"
                  id="a-10"
                  name="choices-10"
                  value="Very Interested,STEM,1"
                  required
                />
                <label for="a-10">Very Interested</label><br />

                <input
                  type="radio"
                  id="b-10"
                  name="choices-10"
                  value="Interested,STEM,2"
                />
                <label for="b-10">Interested</label><br />

                <input
                  type="radio"
                  id="c-10"
                  name="choices-10"
                  value="Slightly Interested,STEM,3"
                />
                <label for="c-10">Slightly Interested</label><br />

                <input
                  type="radio"
                  id="d-10"
                  name="choices-10"
                  value="Not Interested,STEM,4"
                />
                <label for="d-10">Not Interested</label>
              </div>
            </div> 

            <!-- QUESTION 11 HUMSS-->
            <div class="question-container">
              <p id="question10">11. Understand world events or politics.</p>
              <br />
              <div class="choices">
                <input
                  type="radio"
                  id="a-11"
                  name="choices-11"
                  value="Very Interested,HUMSS,1"
                  required
                />
                <label for="a-11">Very Interested</label><br />

                <input
                  type="radio"
                  id="b-11"
                  name="choices-11"
                  value="Interested,HUMSS,2"
                />
                <label for="b-11">Interested</label><br />

                <input
                  type="radio"
                  id="c-11"
                  name="choices-11"
                  value="Slightly Interested,HUMSS,3"
                />
                <label for="c-11">Slightly Interested</label><br />

                <input
                  type="radio"
                  id="d-11"
                  name="choices-11"
                  value="Not Interested,HUMSS,4"
                />
                <label for="d-11">Not Interested</label>
              </div>
            </div>

            <!-- QUESTION 12 ABM-->
            <div class="question-container">
              <p id="question10">12. Promote or market a brand new product.</p>
              <br />
              <div class="choices">
                <input
                  type="radio"
                  id="a-12"
                  name="choices-12"
                  value="Very Interested,ABM,1"
                  required
                />
                <label for="a-12">Very Interested</label><br />

                <input
                  type="radio"
                  id="b-12"
                  name="choices-12"
                  value="Interested,ABM,2"
                />
                <label for="b-12">Interested</label><br />

                <input
                  type="radio"
                  id="c-12"
                  name="choices-12"
                  value="Slightly Interested,ABM,3"
                />
                <label for="c-12">Slightly Interested</label><br />

                <input
                  type="radio"
                  id="d-12"
                  name="choices-12"
                  value="Not Interested,ABM,4"
                />
                <label for="d-12">Not Interested</label>
              </div>
            </div> 

            
          
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary" id="btn-career">SUBMIT</button>
      </div>
      </form>
    </div>

  </div>
</div>
