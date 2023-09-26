<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="Selector2.css">
  <link rel="stylesheet" href="Selector2Animations.css">


  <title>Pedrollo Distribution | PowerTank Selector Tool</title>
  <!-- /////////////// -->
  <!-- Page Refresh Section - Warn that Page Refresh will lose data -->
  <!-- <script>
    window.addEventListener('beforeunload', (event) => {
      // Cancel the event as stated by the standard.
      event.preventDefault();
      // Chrome requires returnValue to be set.
      event.returnValue = '';
    });
  </script> -->
  <!-- Page Refresh Section - Warn that Page Refresh will lose data -->
  <!-- /////////////// -->
</head>

<body>
  <h1 class="maintitle" style="text-align:center">PowerTank Selector Tool</h1>
  <!-- /////////////// -->
  <!-- Back Buttons - These take you to a previous page on the app -->
  <button type="Button" onclick="BackBtnStart()" style="display: none;text-align:left;"
    id="btnbackstage2a">Back</button>
  <button type="Button" onclick="BackBtnStart2()" style="display: none;text-align:left;"
    id="btnbackstage3a">Back</button>
  <button type="Button" onclick="BackBtnStart3()" style="display: none;text-align:left;"
    id="btnbackstage4a">Back</button>
  <button type="Button" onclick="BackBtnStart4()" style="display: none;text-align:left;"
    id="btnbackstage5a">Back</button>
  <!-- Back Buttons - These take you to a previous page on the app -->
  <!-- /////////////// -->

  <!-- Modal Section - The modal is a popup window. This popup occurs when a user clicks on the ? button. -->
  <!-- Modal Combination Boiler  -->
  <div class="modal fade bd-example-modal-lg combidesktop" id="modalCombinationBoiler" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-padding-desktop">
          <table>
            <thead>
              <tr>
                <td style="width: 50%;">
                  <h2 class="table-modal-title-desktop">What is a combination boiler?</h2>
                  <p class="table-modal-text-desktop">A combi boiler, also known as a combination boiler, is the most
                    popular kind of boiler and one that's found in most homes. As the name suggests, this boiler does a
                    'combination' of heating. It heats both your hot water and your central heating all from the same
                    unit.</p>
                </td>
                <td class="table-modal-image-desktop">
                  <img class="modal-image-desktop"
                    src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/CombinationBoiler.svg" />
                </td>
              </tr>
            </thead>
          </table>
        </div>
        <!-- ///////////////// -->
        <div class="modal-padding-mobile">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <h2 class="modal-title" style="margin-bottom: 0rem;">What is a combination boiler?</h2>
          <p class="modal-font">A combi boiler, also known as a combination boiler, is the most popular kind of boiler
            and one that's found in most homes. As the name suggests, this boiler does a 'combination' of heating. It
            heats both your hot water and your central heating all from the same unit.</p>
          <div class="modal-image-container">
            <img class="modal-image"
              src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/CombinationBoiler.svg" />
          </div>
        </div>
        <div onClick="" class="modal-footer"><button type="button" class="btn btn-secondary"
            data-dismiss="modal">Close</button></div>
      </div>
    </div>
  </div>
  <!-- Modal Combination Boiler -->

  <!-- Modal Gravity Fed System -->
  <div class="modal fade bd-example-modal-lg combidesktop" id="modalGravityFed" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-padding-desktop">
          <table>
            <thead>
              <tr>
                <td style="width: 50%;">
                  <h2 class="table-modal-title-desktop">What is a Gravity fed system?</h2>
                  <p class="table-modal-text-desktop">These systems are generally found in older properties. You can
                    tell whether you have this system as you'll have a cold water tank in the loft and a hot water
                    cylinder elsewhere (most likely in an airing cupboard). This means you have a low-pressure water
                    system and you'll need to choose taps designed to work with lower water pressures.</p>
                </td>
                <td class="table-modal-image-desktop">
                  <img style="padding-top: 30%;" class="modal-image-desktop"
                    src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/GravityFedSystem.svg" />
                </td>
              </tr>
            </thead>
          </table>
        </div>
        <!-- ///////////////// -->
        <div class="modal-padding-mobile">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <h2 class="modal-title" style="margin-bottom: 0rem;">What is a Gravity fed system?</h2>
          <p class="modal-font">These systems are generally found in older properties. You can tell whether you have
            this system as you'll have a cold water tank in the loft and a hot water cylinder elsewhere (most likely in
            an airing cupboard). This means you have a low-pressure water system and you'll need to choose taps designed
            to work with lower water pressures.</p>
          <div class="modal-image-container">
            <img class="modal-image"
              src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/GravityFedSystem.svg" />
          </div>
        </div>
        <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Gravity Fed System -->

  <!-- Modal Unvented System -->
  <div class="modal fade bd-example-modal-lg combidesktop" id="modalUnventedSystem" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-padding-desktop">
          <table>
            <thead>
              <tr>
                <td style="width: 50%;">
                  <h2 class="table-modal-title-desktop">What is a Unvented System?</h2>
                  <p class="table-modal-text-desktop">Unvented cylinders, also known as pressurised cylinders they are
                    water storage systems that provide high-pressure, hot water all throughout your home. They can be
                    anywhere in the home (but are most likely in an airing cupboard).</p>
                </td>
                <td class="table-modal-image-desktop">
                  <img class="modal-image-desktop"
                    src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/UnventedSystem.svg" />
                </td>
              </tr>
            </thead>
          </table>
        </div>
        <!-- ///////////////// -->
        <div class="modal-padding-mobile">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <h2 class="modal-title" style="margin-bottom: 0rem;">What is a Unvented System?</h2>
          <p class="modal-font">Unvented cylinders, also known as pressurised cylinders they are water storage systems
            that provide high-pressure, hot water all throughout your home. They can be anywhere in the home (but are
            most likely in an airing cupboard).</p>
          <div class="modal-image-container">
            <img class="modal-image"
              src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/UnventedSystem.svg" />
          </div>
        </div>
        <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Unvented System -->

  <!-- Modal Incoming Flow Rate -->
  <div class="modal fade bd-example-modal-lg combidesktop" id="modalincomingflowrate" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-padding-desktop">
          <table>
            <thead>
              <tr>
                <td style="width: 100%;">
                  <h2 class="table-modal-title-desktop">What's your Incoming Flow Rate</h2>
                  <p class="table-modal-text-desktop">Maybe a video?</p>
                </td>
              </tr>
            </thead>
          </table>
        </div>
        <!-- ///////////////// -->
        <div class="modal-padding-mobile">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <h2 class="modal-title" style="margin-bottom: 0rem;">What's your Incoming Flow Rate</h2>
          <p class="modal-font">Maybe a video?</p>
          <div class="modal-image-container">
            <img class="modal-image"
              src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/UnventedSystem.svg" />
          </div>
        </div>
        <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Incoming Flow Rate -->

  <!-- Modal How many People -->
  <div class="modal fade bd-example-modal-lg combidesktop" id="modalHowManyPeople" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-padding-desktop">
          <table>
            <thead>
              <tr>
                <td style="width: 100%;">
                  <h2 class="table-modal-title-desktop">How many people?</h2>
                  <p class="table-modal-text-desktop">How many people live in your household? Do not include guests or
                    people who won't be living at the property continually</p>
                </td>
              </tr>
            </thead>
          </table>
        </div>
        <!-- ///////////////// -->
        <div class="modal-padding-mobile">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <h2 class="modal-title" style="margin-bottom: 0rem;">What's your Incoming Flow Rate</h2>
          <p class="modal-font">Maybe a video?</p>
          <div class="modal-image-container">
            <img class="modal-image"
              src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/UnventedSystem.svg" />
          </div>
        </div>
        <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal How many People -->

  <!-- Modal How many People -->
  <div class="modal fade bd-example-modal-lg combidesktop" id="modalHowManyFloors" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-padding-desktop">
          <table>
            <thead>
              <tr>
                <td style="width: 100%;">
                  <h2 class="table-modal-title-desktop">How many floors does your property have?</h2>
                  <p class="table-modal-text-desktop">Example: A single story or floor would typically be a bungalow,
                    two floors would be a
                    typical household. Three stories includes taller properties. If you live in an apartment or flat
                    for example on the 12th floor you would put down only a single story unless your apartment/flat has
                    multiple floors within the overall property.</p>
                </td>
              </tr>
            </thead>
          </table>
        </div>
        <!-- ///////////////// -->
        <div class="modal-padding-mobile">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <h2 class="modal-title" style="margin-bottom: 0rem;">How many floors does your property have?</h2>
          <p class="modal-font">Example: A single story or floor would typically be a bungalow, two floors would be a
            typical household. Three stories includes taller properties. If you live in an apartment or flat
            for example on the 12th floor you would put down only a single story unless your apartment/flat has multiple
            floors within the overall property.</p>
          <div class="modal-image-container"></div>
        </div>
        <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal How many People -->



  <!-- Modal Section - The modal is a popup window. This popup occurs when a user clicks on the ? button. -->

  <!-- /////////////// -->

  <!-- Title Section - These are all of the titles for each of the stages of the application -->
  <h2 style="display: none; text-align:center" id="titlestage1a">What type of system do you have?</h2>
  <!-- <h2 style="display: block; text-align:center;" id="titlestage2a">What is your incoming flow rate?</h2> -->
  <h2 style="display: none; text-align:center;" id="titlestage3a">Do you have 0.5 Bar or more of pressure Coming in?
  </h2>
  <h2 style="display: none; text-align:center;" id="titlestage4a">How many Baths & Showers do you have?</h2>
  <h2 style="display: none; text-align:center;" id="titlestage5a">How many people live in your house?</h2>
  <!-- Title Section - These are all of the titles for each of the stages of the application -->

  <!-- /////////////// -->

  <!-- Container Section - This contains contents of the cards that users can click on -->
  <!-- First Set of Cards -->
  <div id="SectionOne" style="display:flex" class="card-deck card-deck-one SectionOne">
    <div class="card">
      <div class="image">
        <img class="card-img-top"
          src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Card-Images/Stage-One/PowerTank-Selector-Combi-Boiler.webp"
          alt="Card image cap">
      </div>
      <div class="card-body">
        <div class="inline-title-icon">
          <h4 class="card-title">Combination Boiler</h4>
          <img data-toggle="modal" data-target="#modalCombinationBoiler" class="wiggle"
            src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/help-circle-blue.svg"
            alt="Help Icon">
        </div>
        <p class="card-text">Combi boilers are simple units, which are usually mounted on a wall and found in an airing
          or kitchen cupboard. This boiler does a 'combination' of heating both hot water & your central heating from
          the same unit.</p>
        <button id="SectionOneBtn1" onclick="Proceed1Combi()"
          class="btn btn-primary btn-lg btn-block continueButton card1">Continue</button>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top"
        src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Card-Images/Stage-One/PowerTank-Selector-Gravity-Fed.webp"
        alt="Card image cap">
      <div class="card-body">
        <div class="inline-title-icon">
          <h4 class="card-title">Gravity Fed System</h4>
          <img data-toggle="modal" data-target="#modalGravityFed" class="wiggle"
            src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/help-circle-blue.svg"
            alt="Help Icon">
        </div>
        <p class="card-text">Gravity fed system. These systems are generally found in older properties. You can tell
          whether you have this system as you'll have a cold water tank in the loft and a hot water cylinder elsewhere
          (most likely in an airing cupboard).</p>
        <button id="SectionOneBtn2" onclick="Proceed1Gravity()"
          class="btn btn-primary btn-lg btn-block continueButton card2">Continue</button>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top"
        src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Card-Images/Stage-One/PowerTank-Selector-Unvented-Hotwater.webp"
        alt="Card image cap">
      <div class="card-body">
        <div class="inline-title-icon">
          <h4 class="card-title">Unvented Cylinder</h4>
          <img data-toggle="modal" data-target="#modalUnventedSystem" class="wiggle"
            src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/help-circle-blue.svg"
            alt="Help Icon">
        </div>
        <p class="card-text">Unvented cylinders, also known as pressurised cylinders they are water storage systems that
          provide high-pressure, hot water all throughout your home. They can be anywhere in the home (but are most
          likely in an airing cupboard).</p>
        <button id="SectionOneBtn3" onclick="Proceed1Unvented()" id="Proceed1Unvented"
          class="btn btn-primary btn-lg btn-block continueButton card3">Continue</button>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function () {

      // Continue Buttons \\

      // #1 Continue Button Section One > Section Two \\
      $("#SectionOneBtn1").click(function() {
        $("#SectionOne").fadeOut("fast");
        $("#SectionTwo").delay(220).fadeIn("fast, linear");
      });
      // ---------------------------------------- \\

      // #2 Continue Button Section One > Section Two \\
      $("#SectionOneBtn2").click(function() {
        $("#SectionOne").fadeOut("fast");
        $("#SectionTwo").delay(220).fadeIn("fast, linear");
      });
      // ---------------------------------------- \\

      // #3 Continue Button Section One > Section Two \\
      $("#SectionOneBtn3").click(function() {
        $("#SectionOne").fadeOut("fast");
        $("#SectionTwo").delay(220).fadeIn("fast, linear");
      });
      // ---------------------------------------- \\

      // Continue Button Section Two > Section Three \\
      $("#StageTwoContinueBtn").click(function() {
        $("#SectionTwo").fadeOut("fast");
        $("#SectionThree").delay(220).fadeIn("fast, linear");
      });
      // ---------------------------------------- \\

      // Continue Button Section Three > Section Four \\
      $("#StageThreeContinueBtn").click(function() {
        $("#SectionThree").fadeOut("fast");
        $("#SectionFour").delay(220).fadeIn("fast, linear");
      });
      // ---------------------------------------- \\

      // Continue Button Section four > Section five \\
      $("#StageFourContinueBtn").click(function() {
        $("#SectionFour").fadeOut("fast");
        $("#SectionFive").delay(220).fadeIn("fast, linear");
      });
      // ---------------------------------------- \\

      // Continue Button Section Five > Section Results \\
      $("#StageFiveContinueBtn").click(function() {
        $("#SectionFive").fadeOut("fast");
        $("#SectionResults").delay(220).fadeIn("fast, linear");
      });
      // ---------------------------------------- \\

      // Back Buttons \\

      // Back Button Section Two > Section One \\
      $("#SectionTwoBackBtn").click(function() {
        $("#SectionTwo").fadeOut("fast");
        $("#SectionOne").delay(220).fadeIn("fast, linear");
      });
      // ---------------------------------------- \\

      // Back Button Section Three > Section Two \\
      $("#SectionThreeBackBtn").click(function() {
        $("#SectionThree").fadeOut("fast");
        $("#SectionTwo").delay(220).fadeIn("fast, linear");
      });
      // ---------------------------------------- \\

      // Back Button Section Four > Section Three \\
      $("#SectionThreeBackBtn").click(function() {
        $("#SectionThree").fadeOut("fast");
        $("#SectionTwo").delay(220).fadeIn("fast, linear");
      });
      // ---------------------------------------- \\

      // Back Button Section Four > Section Three \\
      $("#SectionThreeBackBtn").click(function() {
        $("#SectionThree").fadeOut("fast");
        $("#SectionTwo").delay(220).fadeIn("fast, linear");
      });
      // ---------------------------------------- \\

    });
  </script>
  <!-- First Set of Cards -->

  <!-- Second Set of Cards -->
  <div id="SectionTwo" style="display:none" class="card-deck card-deck-one">
    <div class="card">
      <div class="card-body card-deck-body-two">
        <button id="SectionTwoBackBtn" class="btn btn-default backBtn" style="align-self: flex-start;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;"><span class="fa-solid fa-arrow-left"></span></button>
        <div class="inline-title-icon">
          <h4 class="card-title">What is your incoming flow rate? Litres Per Minute</h4>
          <img data-toggle="modal" data-target="#modalincomingflowrate" class="wiggle"
            src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/help-circle-blue.svg"
            alt="Help Icon">
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-btn">
              <button id="down" class="btn btn-default" onclick="LitersDown('0')"><span
                  class="fa-solid fa-minus"></span></span></button>
            </div>
            <input type="text" id="Number-Litres" class="form-control input-number" value="0" />
            <div class="input-group-btn">
              <button id="up" class="btn btn-default" onclick="LitersUp('10')"><span
                  class="fa-solid fa-plus"></span></button>
            </div>
          </div>
        </div>
        <button id="StageTwoContinueBtn" style="display: none" class="btn btn-default continueButton" onclick="Proceed2()">Continue</button>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    // var ContinueBtn = document.getElementById("Number-Litres");
    var StageTwoContinueBtn = document.getElementById("StageTwoContinueBtn");
    checkMinusValueStageTwo();

    // Shower Count
    function LitersUp(max) {
      document.getElementById("Number-Litres").value = parseInt(document.getElementById("Number-Litres").value) + 1;
      checkPlusValueStageTwo();
      if (document.getElementById("Number-Litres").value >= parseInt(max)) {
        document.getElementById("Number-Litres").value = max;
      }
    }

    function LitersDown(min) {
      document.getElementById("Number-Litres").value = parseInt(document.getElementById("Number-Litres").value) - 1;
      checkMinusValueStageTwo();
      if (document.getElementById("Number-Litres").value <= parseInt(min)) {
        document.getElementById("Number-Litres").value = min;
      }
    }

    function checkPlusValueStageTwo() {
      var NumberCheck = document.getElementById("Number-Litres").value;

      if (NumberCheck >= 1) {
        StageTwoContinueBtn.style.display = "grid";
      }
    }

    function checkMinusValueStageTwo() {
      var NumberCheck = document.getElementById("Number-Litres").value;

      if (NumberCheck == 0) {
        StageTwoContinueBtn.style.display = "none";
      }
    }
  </script>
  <!-- Second Set of Cards -->

  <!-- Third Set of Cards -->
  <div id="SectionThree" style="display:none" class="card-deck card-deck-one">
    <div class="card">
      <div class="card-body card-deck-body-two">
        <button id="SectionThreeBackBtn" class="btn btn-default backBtn" style="align-self: flex-start;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;"><span class="fa-solid fa-arrow-left"></span></button>
        <div class="inline-title-icon">
          <h4 class="card-title">How many people live in this property?</h4>
          <img data-toggle="modal" data-target="#modalHowManyPeople" class="wiggle"
            src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/help-circle-blue.svg"
            alt="Help Icon">
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-btn">
              <button id="down" class="btn btn-default" onclick="PeopleDown('0')"><span
                  class="fa-solid fa-minus"></span></span></button>
            </div>
            <input type="text" id="NumberPeople" class="form-control input-number" value="0" />
            <div class="input-group-btn">
              <button id="up" class="btn btn-default" onclick="PeopleUp('10')"><span
                  class="fa-solid fa-plus"></span></button>
            </div>
          </div>
        </div>
        <button style="display: none" id="StageThreeContinueBtn" class="btn btn-default continueButton"
          onclick="Proceed3()">Continue</button>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    var PeopleContinueBtn = document.getElementById("NumberPeople");
    var StageThreeContinueBtn = document.getElementById("StageThreeContinueBtn");
    checkMinusValueStageThree();

    // Shower Count
    function PeopleUp(max) {
      document.getElementById("NumberPeople").value = parseInt(document.getElementById("NumberPeople").value) + 1;
      checkPlusValueStageThree();
      if (document.getElementById("NumberPeople").value >= parseInt(max)) {
        document.getElementById("NumberPeople").value = max;
      }
    }

    function PeopleDown(min) {
      document.getElementById("NumberPeople").value = parseInt(document.getElementById("NumberPeople").value) - 1;
      checkMinusValueStageThree();
      if (document.getElementById("NumberPeople").value <= parseInt(min)) {
        document.getElementById("NumberPeople").value = min;
      }
    }

    function checkPlusValueStageThree() {
      var NumberCheck = document.getElementById("NumberPeople").value;
      if (NumberCheck >= 1) {
        StageThreeContinueBtn.style.display = "grid";
      }
    }

    function checkMinusValueStageThree() {
      var NumberCheck = document.getElementById("NumberPeople").value;
      if (NumberCheck == 0) {
        StageThreeContinueBtn.style.display = "none";
      }
    }
  </script>
  <!-- Third Set of Cards -->

  <!-- Fourth Set of Cards -->
  <div id="SectionFour" style="display:none" class="card-deck card-deck-one">
    <div class="card">
      <div class="card-body card-deck-body-two">
        <button id="SectionFourBackBtn" class="btn btn-default backBtn" style="align-self: flex-start;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;"><span class="fa-solid fa-arrow-left"></span></button>
        <div class="inline-title-icon">
          <h4 class="card-title">How many floors does your property have?</h4>
          <img data-toggle="modal" data-target="#modalHowManyFloors" class="wiggle"
            src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/help-circle-blue.svg"
            alt="Help Icon">
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-btn">
              <button id="down" class="btn btn-default" onclick="FloorsDown('0')"><span
                  class="fa-solid fa-minus"></span></span></button>
            </div>
            <input type="text" id="NumberFloors" class="form-control input-number" value="0" />
            <div class="input-group-btn">
              <button id="up" class="btn btn-default" onclick="FloorsUp('10')"><span
                  class="fa-solid fa-plus"></span></button>
            </div>
          </div>
        </div>
        <button style="display: block" id="StageFourContinueBtn" class="btn btn-default continueButton"
          onclick="Proceed4()">Continue</button>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    // var PeopleContinueBtn = document.getElementById("NumberFloors");
    var StageFourContinueBtn = document.getElementById("StageFourContinueBtn");
    checkMinusValueStageFour();

    // Showers
    function FloorsUp(max) {
      document.getElementById("NumberFloors").value = parseInt(document.getElementById("NumberFloors").value) + 1;
      checkPlusValueStageFour();
      if (document.getElementById("NumberFloors").value >= parseInt(max)) {
        document.getElementById("NumberFloors").value = max;
      }
    }

    function FloorsDown(min) {
      document.getElementById("NumberFloors").value = parseInt(document.getElementById("NumberFloors").value) - 1;
      checkMinusValueStageFour();
      if (document.getElementById("NumberFloors").value <= parseInt(min)) {
        document.getElementById("NumberFloors").value = min;
      }
    }
    // Showers

    function checkPlusValueStageFour() {
      var NumberCheck1 = document.getElementById("NumberFloors").value;
      if (NumberCheck1 >= 1 || NumberCheck2 >= 1 || NumberCheck3 >= 1) {
        StageFourContinueBtn.style.display = "block";
      }
    }

    function checkMinusValueStageFour() {
      var NumberCheck1 = document.getElementById("NumberFloors").value;
      if (NumberCheck1 == 0) {
        StageFourContinueBtn.style.display = "none";
      }
    }
  </script>
  <!-- Fourth Set of Cards -->

  <!-- Fifth Set of Cards -->
  <div id="SectionFive"style="display:none" class="card-deck card-deck-one">
    <div class="card">
      <div class="card-body card-deck-body-two">
        <button id="SectionFiveBackBtn" class="btn btn-default backBtn" style="align-self: flex-start;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;"><span class="fa-solid fa-arrow-left"></span></button>
        <div class="inline-title-icon">
          <h4 class="card-title">How many separate showers, baths and on-suites does the property have?</h4>
          <img data-toggle="modal" data-target="#modalHowManyFloors" class="wiggle"
            src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/help-circle-blue.svg"
            alt="Help Icon">
        </div>
        <div class="horizontal-container-incrementor">
          <!--  -->
          <div class="form-group-stage-five">
            <h3>Showers</h3>
            <div class="input-group">
              <div class="input-group-btn">
                <button id="down" class="btn btn-default" onclick="ShowersDown('0')"><span
                    class="fa-solid fa-minus"></span></span></button>
              </div>
              <input type="text" id="NumberShowers" class="form-control input-number" value="0" />
              <div class="input-group-btn">
                <button id="up" class="btn btn-default" onclick="ShowersUp('10')"><span
                    class="fa-solid fa-plus"></span></button>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="form-group-stage-five">
            <h3>Bath's</h3>
            <div class="input-group">
              <div class="input-group-btn">
                <button id="down" class="btn btn-default" onclick="BathsDown('0')"><span
                    class="fa-solid fa-minus"></span></span></button>
              </div>
              <input type="text" id="NumberBaths" class="form-control input-number" value="0" />
              <div class="input-group-btn">
                <button id="up" class="btn btn-default" onclick="BathsUp('10')"><span
                    class="fa-solid fa-plus"></span></button>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="form-group-stage-five">
            <h3>On-Suites</h3>
            <div class="input-group">
              <div class="input-group-btn">
                <button id="down" class="btn btn-default" onclick="OnsuitesDown('0')"><span
                    class="fa-solid fa-minus"></span></span></button>
              </div>
              <input type="text" id="NumberOnsuites" class="form-control input-number" value="0" />
              <div class="input-group-btn">
                <button id="up" class="btn btn-default" onclick="OnsuitesUp('10')"><span
                    class="fa-solid fa-plus"></span></button>
              </div>
            </div>
          </div>
          <!--  -->
        </div>

        <button style="display: flex" id="StageFiveContinueBtn" class="btn btn-default continueButton"
          onclick="Proceed5()">Continue</button>
      </div>

    </div>
  </div>

  <script type="text/javascript">
    // var PeopleContinueBtn = document.getElementById("NumberFloors");
    var StageFiveContinueBtn = document.getElementById("StageFiveContinueBtn");
    checkMinusValueStageFive();

    // Showers
    function ShowersUp(max) {
      document.getElementById("NumberShowers").value = parseInt(document.getElementById("NumberShowers").value) + 1;
      checkPlusValueStageFive();
      if (document.getElementById("NumberShowers").value >= parseInt(max)) {
        document.getElementById("NumberShowers").value = max;
      }
    }

    function ShowersDown(min) {
      document.getElementById("NumberShowers").value = parseInt(document.getElementById("NumberShowers").value) - 1;
      checkMinusValueStageFive();
      if (document.getElementById("NumberShowers").value <= parseInt(min)) {
        document.getElementById("NumberShowers").value = min;
      }
    }
    // Showers

    // Bath's
    function BathsUp(max) {
      document.getElementById("NumberBaths").value = parseInt(document.getElementById("NumberBaths").value) + 1;
      checkPlusValueStageFive();
      if (document.getElementById("NumberBaths").value >= parseInt(max)) {
        document.getElementById("NumberBaths").value = max;
      }
    }

    function BathsDown(min) {
      document.getElementById("NumberBaths").value = parseInt(document.getElementById("NumberBaths").value) - 1;
      checkMinusValueStageFive();
      if (document.getElementById("NumberBaths").value <= parseInt(min)) {
        document.getElementById("NumberBaths").value = min;
      }
    }
    // Bath's

    // Onsuites
    function OnsuitesUp(max) {
      document.getElementById("NumberOnsuites").value = parseInt(document.getElementById("NumberOnsuites").value) + 1;
      checkPlusValueStageFive();
      if (document.getElementById("NumberOnsuites").value >= parseInt(max)) {
        document.getElementById("NumberOnsuites").value = max;
      }
    }

    function OnsuitesDown(min) {
      document.getElementById("NumberOnsuites").value = parseInt(document.getElementById("NumberOnsuites").value) - 1;
      checkMinusValueStageFive();
      if (document.getElementById("NumberOnsuites").value <= parseInt(min)) {
        document.getElementById("NumberOnsuites").value = min;
      }
    }
    // Onsuites

    function checkPlusValueStageFive() {
      var NumberCheck1 = document.getElementById("NumberShowers").value;
      var NumberCheck2 = document.getElementById("NumberBaths").value;
      var NumberCheck3 = document.getElementById("NumberOnsuites").value;
      if (NumberCheck1 >= 1 || NumberCheck2 >= 1 || NumberCheck3 >= 1) {
        StageFiveContinueBtn.style.display = "block";
      }
    }

    function checkMinusValueStageFive() {
      var NumberCheck1 = document.getElementById("NumberShowers").value;
      var NumberCheck2 = document.getElementById("NumberBaths").value;
      var NumberCheck3 = document.getElementById("NumberOnsuites").value;

      if (NumberCheck1 == 0 && NumberCheck2 == 0 && NumberCheck3 == 0) {
        StageFiveContinueBtn.style.display = "none";
      }
      else {
        StageFiveContinueBtn.style.display = "block";
      }
    }
  </script>
  <!-- Fifth Set of Cards -->

</body>
