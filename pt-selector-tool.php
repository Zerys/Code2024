<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="Selector2.css">

  <title>Pedrollo Distribution | PowerTank Selector Tool</title>
  <!-- /////////////// -->
  <!-- Page Refresh Section - Warn that Page Refresh will lose data -->
  <script>
    window.addEventListener('beforeunload', (event) => {
      // Cancel the event as stated by the standard.
      event.preventDefault();
      // Chrome requires returnValue to be set.
      event.returnValue = '';
    });
  </script>
  <!-- Page Refresh Section - Warn that Page Refresh will lose data -->
  <!-- /////////////// -->
</head>

<body>
  <h1 style="text-align:center">PowerTank Selector Tool</h1>
  <!-- /////////////// -->
  <!-- Back Buttons - These take you to a previous page on the app -->
  <button type="Button" onclick="BackBtnStart()" style="display: none;text-align:left;" id="btnbackstage2a">Back</button>
  <button type="Button" onclick="BackBtnStart2()" style="display: none;text-align:left;" id="btnbackstage3a">Back</button>
  <button type="Button" onclick="BackBtnStart3()" style="display: none;text-align:left;" id="btnbackstage4a">Back</button>
  <button type="Button" onclick="BackBtnStart4()" style="display: none;text-align:left;" id="btnbackstage5a">Back</button>

  <!-- Back Buttons - These take you to a previous page on the app -->
  <!-- /////////////// -->

  <!-- Modal Section - The modal is a popup window. This popup occurs when a user clicks on the information button. -->

  <!-- Modal Combination Boiler -->
  <div class="modal fade bd-example-modal-lg combidesktop" id="modalCombinationBoiler" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- ///////// -->
        <div class="modal-padding-desktop">
          <table>
            <thead>
              <tr>
                <td style="width: 50%;">
                  <h2 style="margin-bottom: 0rem;">What is a Gravity fed system?</h2>
                  <p style="font-size: x-large;">These systems are generally found in older properties. You can tell whether you have this system as you'll have a cold water tank in the loft and a hot water cylinder elsewhere (most likely in an airing cupboard). This means you have a low-pressure water system and you'll need to choose taps designed to work with lower water pressures.</p>
                </td>
                <td>
                  <img class="Modal-Image" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/GravityFedSystem.svg" />
                </td>
              </tr>
            </thead>
          </table>
        </div>
        <!-- ///////////////// -->

        <div class="modal-padding-mobile">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLongTitle">What type of water system do you have?</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <h2 class="modal-title" style="margin-bottom: 0rem;">What is a combination boiler?</h2>
          <p class="modal-font">A combi boiler, also known as a combination boiler, is the most popular kind of boiler and one that's found in most homes. As the name suggests, this boiler does a 'combination' of heating. It heats both your hot water and your central heating all from the same unit.</p>
          <div class="modal-image-container">
            <img class="modal-image" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/CombinationBoiler.svg" />
          </div>
        </div>
        <div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>
      </div>
    </div>
  </div>

  <!-- Modal Combination Boiler Desktop/Tablet -->

  <!-- Modal Gravity Fed System -->
  <div class="modal fade bd-example-modal-lg" id="modalGravityFed" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLongTitle">What type of water system do you have?</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-content">
          <div class="Modal-Padding">
            <table>
              <thead>
                <tr>
                  <td style="width: 50%;">
                    <h2 style="margin-bottom: 0rem;">What is a Gravity fed system?</h2>
                    <p style="font-size: x-large;">These systems are generally found in older properties. You can tell whether you have this system as you'll have a cold water tank in the loft and a hot water cylinder elsewhere (most likely in an airing cupboard). This means you have a low-pressure water system and you'll need to choose taps designed to work with lower water pressures.</p>
                  </td>
                  <td>
                    <img class="Modal-Image" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/GravityFedSystem.svg" />
                  </td>
                </tr>
              </thead>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Gravity Fed System -->



  <!-- Modal Section - The modal is a popup window. This popup occurs when a user clicks on the information button. -->

  <!-- /////////////// -->

  <!-- Title Section - These are all of the titles for each of the stages of the application -->
  <h2 style="text-align:center" id="titlestage1a">What type of system do you have?</h2>
  <h2 style="display: none;text-align:center;" id="titlestage2a">What is your incoming flow rate?</h2>
  <h2 style="display: none;text-align:center;" id="titlestage3a">Do you have 0.5 Bar or more of pressure Coming in?</h2>
  <h2 style="display: none;text-align:center;" id="titlestage4a">How many Baths & Showers do you have?</h2>
  <h2 style="display: none;text-align:center;" id="titlestage5a">How many people live in your house?</h2>
  <!-- Title Section - These are all of the titles for each of the stages of the application -->

  <!-- /////////////// -->

  <!-- Container Section - This contains contents of the cards that users can click on -->

  <!-- Container Start #1 -->
  <div class="card-deck">
    <div class="card">
      <div class="image">
        <img class="card-img-top" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Card-Images/Stage-One/PowerTank-Selector-Combi-Boiler.webp" alt="Card image cap">
      </div>
      <div class="card-body">
        <div class="inline-title-icon">
          <h4 class="card-title">Combination Boiler</h4>
          <img data-toggle="modal" data-target="#modalCombinationBoiler" class="wiggle" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/help-circle-blue.svg" alt="Help Icon">
        </div>
        <p class="card-text">Combi boilers are simple units, which are usually mounted on a wall and found in an airing or kitchen cupboard. This boiler does a 'combination' of heating both hot water & your central heating from the same unit.</p>
        <button class="btn btn-primary btn-lg btn-block">Next</button>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Card-Images/Stage-One/PowerTank-Selector-Gravity-Fed.webp" alt="Card image cap">
      <div class="card-body">
        <div class="inline-title-icon">
          <h4 class="card-title">Gravity Fed System</h4>
          <img data-toggle="modal" data-target="#modalGravityFed" class="wiggle" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/help-circle-blue.svg" alt="Help Icon">
        </div>
        <p class="card-text">Gravity fed system. These systems are generally found in older properties. You can tell whether you have this system as you'll have a cold water tank in the loft and a hot water cylinder elsewhere (most likely in an airing cupboard).</p>
        <button class="btn btn-primary btn-lg btn-block">Next</button>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Card-Images/Stage-One/PowerTank-Selector-Unvented-Hotwater.webp" alt="Card image cap">
      <div class="card-body">
        <div class="inline-title-icon">
          <h4 class="card-title">Unvented Cylinder</h4>
          <img data-toggle="modal" data-target="#exampleModalCenter" class="wiggle" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Modal/help-circle-blue.svg" alt="Help Icon">
        </div>
        <p class="card-text">Unvented cylinders, also known as pressurised cylinders they are water storage systems that provide high-pressure, hot water all throughout your home. They can be anywhere in the home (but are most likely in an airing cupboard).</p>
        <button class="btn btn-primary btn-lg btn-block">Next</button>
      </div>
    </div>

    <!-- Stage #2 Start -->
    <div style="display: none;" class="card" id="cardstage2a" onclick="CardOnClick2a()">
      <img class="icon-image" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Icons/Selector-Tool-Combi-Boiler-Icon.png"></img>
      <h1>Less than 12 Liters a Minute</h1>
    </div>

    <div style="display: none;" class="card" id="cardstage2b" onclick="CardOnClick2b()">
      <img class="icon-image" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Icons/Selector-Tool-Combi-Boiler-Icon.png"></img>
      <h1>Unsure</h1>
    </div>

    <div style="display: none;" class="card" id="cardstage2c" onclick="CardOnClick2c()">
      <img class="icon-image" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Icons/Selector-Tool-Combi-Boiler-Icon.png"></img>
      <h1>More than 12 Liters a minute</h1>
    </div>
    <!-- Stage #2 End -->

    <!-- Stage #3 Start -->
    <div style="display: none;" class="card" id="cardstage3a" onclick="CardOnClick3a()">
      <img class="icon-image" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Icons/Selector-Tool-Combi-Boiler-Icon.png"></img>
      <h1>Yes</h1>
    </div>

    <div style="display: none;" class="card" id="cardstage3b" onclick="CardOnClick3b()">
      <img class="icon-image" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Icons/Selector-Tool-Combi-Boiler-Icon.png"></img>
      <h1>No</h1>
    </div>
    <!-- Stage #3 End -->

    <!-- Stage #4 Start -->
    <div style="display: none;" class="card" id="cardstage4a">
      <img class="icon-image" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Icons/Selector-Tool-Combi-Boiler-Icon.png"></img>
      <h1>How many standalone Showers Do you have?</h1>
    </div>

    <div style="display: none;" class="card" id="cardstage4b">
      <img class="icon-image" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Icons/Selector-Tool-Combi-Boiler-Icon.png"></img>
      <h1>How many standalone baths do you have?</h1>
    </div>
    <!-- Stage #4 End -->

    <!-- Stage #5 Start -->
    <div style="display: none;" class="card" id="cardstage5a">
      <img class="icon-image" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Icons/Selector-Tool-Combi-Boiler-Icon.png"></img>
      <h1>How many adults live in your house?</h1>
    </div>

    <div style="display: none;" class="card" id="cardstage5b">
      <img class="icon-image" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Icons/Selector-Tool-Combi-Boiler-Icon.png"></img>
      <h1>How many teenagers live in your house?</h1>
    </div>
    <!-- Stage #5 End -->
    </section>

</body>
