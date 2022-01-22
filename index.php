<!DOCTYPE html>
<?php //include("submit.php") 
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title> PATEL SAMAJ'S SPORTS DAY </title>
  <link rel="stylesheet" href="style.css">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" media="screen" href="jquery-ui.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="jquery.js"></script>
  <script src="jquery-ui.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      var age = "";
      $('#dob').datepicker({

        changeMonth: true,
        changeYear: true,
        yearRange: "-100:+0"
      })
    })
  </script>

  <!--<script>
    $("input:checkbox").click(function() {
      var bol = $("input:checkbox:checked").length >= 2;
      $("input:checkbox").not(":checked").attr("disabled", bol);
    });
  </script>-->


  <style>
    .game-box {
      background-color: #f0f1f8;
    }

    .games_each {
      border-bottom: #cacff5 solid 1px;
    }
  </style>

</head>

<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">VENUE</div>
          <div class="text-one">KISUMU SENIOR ACADEMY</div>
          <div class="text-two">29th and 30th of January 2022</div>
          <div class="text-two">Saturday: 5PM onwards</div>
          <div class="text-two">Sunday: 9AM onwards</div>

          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">PHONE</div>
            <div class="text-one">Incase of any inquiries</div>
            <div class="text-two">Krina +254 713 904 907</div>
            <div class="text-two">Aman +254 756 777 777 </div>
            <div class="text-two">Shirali +254 719 138 747 </div>
            <div class="text-two">Ashish +254 734 677 890 </div>
          </div>

          <div class="email details">
            <div class="text-one" style="color: blue !important;">Event Hosted by Patel Samaj Youth Kisumu</div>
          </div>
          <div>
            <?php
            require('config.php');
            $sql = "SELECT * FROM `reg`";
            $result = mysqli_query($con, $sql);
            $rowcount = mysqli_num_rows($result);
            echo "<h5 style='font-size: 8px;'>Total Registered Participants: " . $rowcount . "</h5>";

            ?>
          </div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text" style="text-align: center;">PATEL SAMAJ SPORTS DAY</div>
        <p><strong>Please note:</strong></p>
        <ul>
          <li>The deadline for submission is 24th January 2022.</li>
          <li>Select A maximum of 3 individual games.</li>
          <li>Team games do not need to be selected.</li>
          <li>Team games Include *** KHO, Kabadi, Dodge ball, Tug of war, Satadyu, Scavenger hunt and Car Overload.***</li>
          <li>Participants Under 12 have a seperate set of games that do not need to be selected.</li>
          <li> <strong>Minimum AGE requirement is 5 and ABOVE</strong> </li>
        </ul>
        </p>

        <form action="submit.php" method="POST">
          <div style="width:100%;">
            <div class="dispInline">
              <div class="input-box">
                <label class="label">First Name:</label>
                <input type="text" name="Fname" placeholder="First name" required>
              </div>
            </div>

            <div class="dispInline">
              <div class="input-box">
                <label class="label">Middle Name:</label>
                <input type="text" name="Mname" placeholder="Middle name" required>
              </div>
            </div>

            <div class="dispInline">
              <div class="input-box">
                <label class="label">Last Name:</label>
                <!--<input type="text" name="Lname" placeholder="Last name" required>-->
                <select style="background-color: #f0f1f8; border-radius: 5px;padding: 0 15px; height: 100%;width: 100%;margin: 1px 0;margin-bottom: 40px !important;" name="Lname" id="Lnamw" required>
                  <option value="" disabled selected>Select your Last Name</option>
                  <option value="Patel">Patel</option>
                  <option value="Desai">Desai</option>
                  <option value="Amin">Amin</option>
                </select>
              </div>
            </div>
          </div>


          <div class="input-box">
            <label class="label">Phone No:</label>
            <input type="number" name="phone" placeholder="Enter your phone number" required>
          </div>

          <!--  <div class="input-box">
            <label class="label">Email:</label>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div> -->

          <!-- gender -->
          <div>
            <label class="label">Gender:</label>
            <select style="background-color: #f0f1f8; border-radius: 5px;" class="input-box" name="gender" id="gender" required>
              <option value="" disabled selected>Select your gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>



          <div class="input-box" style="margin-bottom: 40px;">
            <label class="label">Date Of Birth:</label>
            <input type="text" id="dob" placeholder="Enter your D.O.B" name="dob" autocomplete="off" required>
          </div>

          <div class="input-box">
            <label class="label">Age:</label>
            <input type="number" class="agee" id="age" name="age" placeholder="Enter Your AGE" required>
          </div>

          <!-- games -->
          <div id="selectGame" style="display: none;">
            <label class="label">Select Games(Max. 3):</label>
          </div>
          <div class="game-box">

            <div id="game_6" style="display: none;">
              <!-- game 1 -->
              <div class="games_each">
                <input type="checkbox" class="chk" name="techno[]" value="Track Events">
                <label for="">Track Events</label>
              </div>
              <!-- game 2 -->
              <div class="games_each">
                <input type="checkbox" class="chk" name="techno[]" value="Slip & Slide">
                <label for="">Slip & Slide (Walking on soap water)</label>
              </div>
              <!-- game 3 -->
              <div class="games_each">
                <input type="checkbox" class="chk" name="techno[]" value="Obstacle Race">
                <label for="">Obstacle Race (Pass through all obstacles to win) </label>
              </div>
              <!-- game 4 -->
              <div class="games_each">
                <input type="checkbox" class="chk" name="techno[]" value="Frozen Tshirt">
                <label for="">Frozen T-Shirt (Unfreeze the Tshirt)</label>
              </div>
              <!-- game 5 -->
              <div class="games_each">
                <input type="checkbox" class="chk" name="techno[]" value="Khaudra Gali">
                <label for="">Khaudra Gali</label>
              </div>
              <!-- game 6 -->
              <div class="games_each">
                <input type="checkbox" class="chk" name="techno[]" value="Sponge Run">
                <label for="">Sponge Run</label>
              </div>
              <!-- game 7 -->
              <div class="games_each">
                <input type="checkbox" class="chk" name="techno[]" value="Carrom">
                <label for="">Carrom</label>
              </div>
              <!-- game 8 -->
              <div class="games_each">
                <input type="checkbox" class="chk" name="techno[]" value="Bulls Eye">
                <label for="">Bulls Eye (Throw coins in the glass in bucket filled with water)</label>
              </div>
              <!-- game 9 -->
              <div class="games_each">
                <input type="checkbox" class="chk" name="techno[]" value="Tip Tip Barsa Pani">
                <label for="">Tip Tip Barsa Pani (Pass wet sponge and fill bucket) </label>
              </div>
              <!-- game 10 -->
              <div class="games_each">
                <input type="checkbox" class="chk" name="techno[]" value="I Got Your Back">
                <label for="">I Got Your Back (Balance bucket on backs of two people and fill another bucket)</label>
              </div>
            </div>

          </div>
          <div class="submit-area">
            <div class="button">
              <input id="subbtn" type="submit" value="Submit" name="submit_now">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

<script>
  $(document).ready(function() {
    $("#dob").change(function() {
      var dob = $("#dob").val();

      if (dob == null || dob == "") {

      } else {
        $("#age").val(getAge(dob)).trigger("keyup");;
      }

    });

    function getAge(birth) {
      ageMS = Date.parse(Date()) - Date.parse(birth);
      age = new Date();
      age.setTime(ageMS);
      ageYear = age.getFullYear() - 1970;

      return ageYear;
    }
  });
</script>


<script>
  $('input[name=age]').keyup(function() {
    //for age group 5-10
    if ($(this).val() >= 0 && $(this).val() <= 11) {
      //$('#game_5').show();
      $('#selectGame').hide();
      $('#game-box').hide();
      $('#game_6').hide();

    } else {
      $('#selectGame').show();
      $('#game-box').show();
      $('#game_6').show();
      $('input[type=checkbox]').prop('checked', false);
    }

    //for age group 11-15
    if ($(this).val() >= 12 && $(this).val() <= 99) {
      $('#selectGame').show();
      $('#game-box').show();
      $('#game_6').show();


    } else {
      $('#selectGame').hide();
      $('#game-box').hide();
      $('#game_6').hide();
      $('input[type=checkbox]').prop('checked', false);
    }
  });
</script>

<!-- <script>
 var limit = 3;
$('input.chk').on('change', function(evt) {
   if($(this).siblings(':checked').length >= limit) {
       this.checked = false;
   }
});
  </script>-->

<script>
  var checks = document.querySelectorAll(".chk");
  var max = 3;
  for (var i = 0; i < checks.length; i++)
    checks[i].onclick = selectiveCheck;

  function selectiveCheck(event) {
    var checkedChecks = document.querySelectorAll(".chk:checked");
    if (checkedChecks.length >= max + 1) {
      alert("You can select only " + max + " games");
      return false;
    }
  }
</script>

<script>
  $(document).ready(function() {
    $('#age').on('keyup', function() {
      if ($(this).val() >= 5) {
        $('#subbtn').prop('disabled', false);
      } else {
        $('#subbtn').prop('disabled', true);
        alert("Minimum age should be 5 years and above");
      }
    });
  });
</script>






</html>