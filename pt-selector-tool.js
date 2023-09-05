<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">

  <title>Pedrollo Distribution | PowerTank Selector Tool</title>

  <!-- Warn that Page Refresh will lose data -->
  <script>
      window.addEventListener('beforeunload', (event) => {
        // Cancel the event as stated by the standard.
        event.preventDefault();
        // Chrome requires returnValue to be set.
        event.returnValue = '';
      });
  </script>

  <!-- Javascript Start -->
  <style>
    body {
      margin: 0 auto;
      max-width: 1200px;
    }

    *,
    *:before,
    *:after {
      box-sizing: border-box;
      /* padding: 4px; */
    }

    /* Create a responsive, centered, three-column grid. */
    .card-container {
      align-items: center;
      display: grid;
      grid-gap: 20px;
      grid-template-columns: repeat(auto-fit, 350px);
      justify-content: center;
      margin-bottom: 3%;
      align-content: center;
      justify-items: center;
    }

    .incrementor-container {
      align-items: center;
      display: grid;
      grid-gap: 20px;
      grid-template-columns: repeat(auto-fit, 350px);
      justify-content: center;
      /* margin-top: 2%; */
      align-content: center;
      justify-items: center;
    }

    
    #ContinueBtn4 {
      display: block;
      margin-bottom: 5%;
      margin-top: 5%;
      color: rgb(255, 255, 255);
      background-color: rgb(204, 23, 29);
      padding-left: 10vw;
      padding-right: 10vw;
    }

    #ContinueBtn5 {
      display: block;
      margin-bottom: 5%;
      margin-top: 5%;
      color: rgb(255, 255, 255);
      background-color: rgb(204, 23, 29);
      padding-left: 10vw;
      padding-right: 10vw;
    }

    header {
      text-align: center;
    }

    h1 {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }

    h2 {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }

    footer {
      text-align: center;
    }

    .card {
      background-color: black;
      /* border-radius: 15px; */
      color: white;
      text-align: center;
      text-shadow: 1px 1px 0 #555;
      position: relative;
      width: 350px;
      height: 350px;
    }

    .fas {
      font-size: 50px;
    }

    .icon-image {
      width: 20%;
      Height: 20%;
      margin-top: 3rem;
    }

    .info-icon {
      width: 10%;
      Height: 10%;
    }

    @media (prefers-color-scheme: dark) {
      html {
        background-color: #fff;
        color: black;
      }
    }

    .card h1 {
      transition: 0.2s;
      margin: 10%;
    }

    .card .info-icon {
      transition: 0.2s;
      opacity: 0;
      visibility: hidden;
    }

    .card:before {
      content: '';
      position: absolute;
      top: 5%;
      right: 5%;
      bottom: 5%;
      left: 5%;
      border-top: solid 2px;
      border-bottom: solid 2px;
      transition: 0.2s;
      transform: scaleX(0);
    }

    .card:after {
      content: '';
      position: absolute;
      top: 5%;
      right: 5%;
      bottom: 5%;
      left: 5%;
      border-left: solid 2px;
      border-right: solid 2px;
      transition: 0.2s;
      transform: scaleY(0);
    }

    .card:hover:before,
    .card:hover:after {
      transform: scale(1);
    }

    .card:hover h1,
    .card:hover .info-icon {
      transform: translateY(0);
      opacity: 1;
      visibility: visible;
    }

    /* Info Popup */

    /* The Modal (background) */
    .modal0 {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
      box-shadow: 0 0.2rem 0.5rem rgba(48,55,66,.3);
      border-radius: .3rem;
    }
    #UnventedSystemImg {
      width: 100%;
      height: 100%;
    }
    #unventedgridmodal{
      display: grid;
      grid-gap: 20px;
      grid-template-columns: repeat(auto-fit, 350px);
      justify-content: center;
      align-items: center;
    }

    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 50vw;
      Height: 50vh;
      overflow-y: scroll
    }

    /* The Close Button */
    .close {
      color: black;
      float: right;
      font-size: 5vh;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    /* Absolute Center Spinner */
.loading {
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: visible;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  /* position: fixed; */
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 1500ms infinite linear;
  -moz-animation: spinner 1500ms infinite linear;
  -ms-animation: spinner 1500ms infinite linear;
  -o-animation: spinner 1500ms infinite linear;
  animation: spinner 1500ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
  box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;

}

#dataTable
  {
    /* position: relative; */
    /* top: 50%; */
    /* left: 50%; */
    /* margin-top: -5rem; */
    /* margin-left: -10rem; */
    /* margin-bottom: 5rem; */
    padding: 10px;
  }

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

    /* info popup end */
  </style>
</head>

<body>
  <!-- Body Top -->
  <!-- Title Start -->
  <h1 style="text-align:center">PowerTank Selector Tool</h1>

  <!-- Back Buttons -->
  <button type="Button" onclick="BackBtnStart()" style="display: none;text-align:left;" id="btnbackstage2a">Back</button>
  <button type="Button" onclick="BackBtnStart2()" style="display: none;text-align:left;" id="btnbackstage3a">Back</button>
  <button type="Button" onclick="BackBtnStart3()" style="display: none;text-align:left;" id="btnbackstage4a">Back</button>
  <button type="Button" onclick="BackBtnStart4()" style="display: none;text-align:left;" id="btnbackstage5a">Back</button>

  

  <section class="card-container">
    <!-- Trigger/Open The Modal -->
    <!-- The Modal #1 -->
    <div id="myModal0" class="modal0">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2> What is a combi boiler?</h2>
        <p>A combi boiler, also known as a combination boiler, is the most popular kind of boiler and one that's found in most homes. As the name suggests, this boiler does a 'combination' of heating. It heats both your hot water and your central heating all from the same unit.</p>
        <br>
        <h2>What is a Gravity fed system?</h2>
        <p>These systems are generally found in older properties. You can tell whether you have this system as you'll have a cold water tank in the loft and a hot water cylinder elsewhere (most likely in an airing cupboard). This means you have a low-pressure water system and you’ll need to choose taps designed to work with lower water pressures.</p>
        <br>
        <div id="unventedgridmodal">
          <!-- <h2>What is a Unvented System?</h2> -->
          <p>An unvented hot water system is a pressurized hot water tank that is fed directly from the mains water supply. It is also known as a Megaflo. The system has no cold water feed tank and uses mains pressure. The cold water is fed into the hot water tank directly from the mains, with no requirement for a cold water tank. </p>
          <img id="UnventedSystemImg" src="https://buyplumbingonline.co.uk/media/wysiwyg/Unvented_System.png"/>
        </div>
      </div>
    </div>

    <script>
        // Get the modals
        var modal0 = document.getElementById("myModal0");

        // Get the buttons that opens the modal
        var btnstage1a = document.getElementById("btnstage1a");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        function stage1popup() {
          modal0.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal0.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal0) {
            modal0.style.display = "none";
          }
        }
    </script>
  </section>

  <style>
    .form-group .glyphicon {
      color: #95d7fc;
    }

    .header,
    .footer {
      -webkit-box-flex: 0;
      -webkit-flex: 0 0 auto;
      -moz-box-flex: 0;
      -ms-flex: 0 0 auto;
      flex: 0 0 auto;
    }
  </style>

  <h2 style="text-align:center" id="titlestage1a">What type of system do you have?<button style="margin: 0% 0% 0% 5%" type="button" onclick="stage1popup();" title="Title" id="btnstage1a"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24" fill="currentColor">
        <path d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-13a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V6a1 1 0 0 1 1-1zm0 10a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path>
      </svg></button></h2>

  <h2 style="display: none;text-align:center;" id="titlestage2a">What is your incoming flow rate?<button type="button" title="Title" id="btnstage2a"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24" fill="currentColor">
        <path d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-13a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V6a1 1 0 0 1 1-1zm0 10a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path>
      </svg></button></h2>

  <h2 style="display: none;text-align:center;" id="titlestage3a">Do you have 0.5 Bar or more of pressure Coming in?<button type="button" title="Title" id="btnstage3a"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24" fill="currentColor">
        <path d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-13a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V6a1 1 0 0 1 1-1zm0 10a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path>
      </svg></button></h2>

  <h2 style="display: none;text-align:center;" id="titlestage4a">How many Baths & Showers do you have? <br> (Don't count combined ones twice)<button type="button" title="Title" id="btnstage4a"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24" fill="currentColor">
        <path d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-13a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V6a1 1 0 0 1 1-1zm0 10a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path>
      </svg></button></h2>

  <h2 style="display: none;text-align:center;" id="titlestage5a">How many people live in your house?<button type="button" title="Title" id="btnstage5a"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24" fill="currentColor">
        <path d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-13a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V6a1 1 0 0 1 1-1zm0 10a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path>
      </svg></button></h2>

  <!-- Container Start #1 -->
  <section class="card-container">
    <!-- Stage #1 Start -->
    <div class="card" id="cardstage1a" onclick="CardOnClick1a()">
      <img class="icon-image" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Icons/Selector-Tool-Combi-Boiler-Icon.png"></img>
      <h1>Combi-Boiler System</h1>
    </div>
    <div class="card" id="cardstage1b" onclick="CardOnClick1b()">
      <img class="icon-image" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Icons/Selector-Tool-Combi-Boiler-Icon.png"></img>
      <h1>Gravity Fed System</h1>
    </div>
    <div class="card" id="cardstage1c" onclick="CardOnClick1c()">
      <img class="icon-image" src="https://cdn241.s3.eu-west-2.amazonaws.com/PedrolloDistribution/Images/SelectorTool/Images/Icons/Selector-Tool-Combi-Boiler-Icon.png"></img>
      <h1>Unvented System</h1>
    </div>
    <!-- Stage #1 End -->

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

  <!-- Incrementor #1 Start -->

  <section style="display:none" class="incrementor-container" id="incrementor-container">
      <!-- Number Incrementor -->
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-btn">
            <button id="down" class="btn btn-default" onclick=" ShowerDown('0')"><span class="glyphicon glyphicon-minus"></span></button>
          </div>
          <input type="text" id="Number-Shower" class="form-control input-number" value="0" />
          <div class="input-group-btn">
            <button id="up" class="btn btn-default" onclick="ShowerUp('10')"><span class="glyphicon glyphicon-plus"></span></button>
          </div>
        </div>
      </div>

      <!-- Number Incrementor -->
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-btn">
            <button id="down" class="btn btn-default" onclick=" BathDown('0')"><span class="glyphicon glyphicon-minus"></span></button>
          </div>
          <input type="text" id="Number-Bath" class="form-control input-number" value="0" />
          <div class="input-group-btn">
            <button id="up" class="btn btn-default" onclick="BathUp('10')"><span class="glyphicon glyphicon-plus"></span></button>
          </div>
        </div>
      </div>
  </section>

  <section class="incrementor-container">
    <div>
      <button style="display:none" id="ContinueBtn4" class="btn btn-default" onclick="ContinueBtnClick4()">Continue</button>
    </div>
  </section>

  <script type="text/javascript">
    var ContinueBtn = document.getElementById("Number-Shower");
    var ContinueBtn2 = document.getElementById("ContinueBtn4");
    checkMinusValue();

    // Shower Count
    function ShowerUp(max) {
      document.getElementById("Number-Shower").value = parseInt(document.getElementById("Number-Shower").value) + 1;
      checkPlusValue();
      if (document.getElementById("Number-Shower").value >= parseInt(max)) {
        document.getElementById("Number-Shower").value = max;
      }
    }

    function ShowerDown(min) {
      document.getElementById("Number-Shower").value = parseInt(document.getElementById("Number-Shower").value) - 1;
      checkMinusValue();
      if (document.getElementById("Number-Shower").value <= parseInt(min)) {
        document.getElementById("Number-Shower").value = min;
      }
    }

    // Bath Count
    function BathUp(max) {
      document.getElementById("Number-Bath").value = parseInt(document.getElementById("Number-Bath").value) + 1;
      checkPlusValue();
      if (document.getElementById("Number-Bath").value >= parseInt(max)) {
        document.getElementById("Number-Bath").value = max;
      }
    }

    function BathDown(min) {
      document.getElementById("Number-Bath").value = parseInt(document.getElementById("Number-Bath").value) - 1;
      checkMinusValue();
      if (document.getElementById("Number-Bath").value <= parseInt(min)) {
        document.getElementById("Number-Bath").value = min;
      }
    }

    function checkPlusValue() {
      var ShowerCheck = document.getElementById("Number-Shower").value;
      var BathCheck = document.getElementById("Number-Bath").value;

      if (ShowerCheck >= 1 || BathCheck >= 1) {
        ContinueBtn2.style.display = "grid";
      }
    }

    function checkMinusValue() {
      var ShowerCheck = document.getElementById("Number-Shower").value;
      var BathCheck = document.getElementById("Number-Bath").value;

      if (ShowerCheck == 0 && BathCheck == 0) {
        if (ShowerCheck <= 1 || BathCheck <= 1) {
          ContinueBtn2.style.display = "none";
        }
      }
    }
  </script>
  <!-- // End Stage #1 Incrementor  -->


  <!-- Incrementor #2 Start -->

  <section style="display:none" class="incrementor-container" id="incrementor-container2">
      <!-- Number Incrementor -->
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-btn">
            <button id="down2" class="btn btn-default" onclick=" AdultDown('0')"><span class="glyphicon glyphicon-minus"></span></button>
          </div>
          <input type="text" id="Number-Adult" class="form-control input-number" value="0" />
          <div class="input-group-btn">
            <button id="up2" class="btn btn-default" onclick="AdultUp('10')"><span class="glyphicon glyphicon-plus"></span></button>
          </div>
        </div>
      </div>

      <!-- Number Incrementor -->
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-btn">
            <button id="down2" class="btn btn-default" onclick=" TeenagerDown('0')"><span class="glyphicon glyphicon-minus"></span></button>
          </div>
          <input type="text" id="Number-Teenager" class="form-control input-number" value="0" />
          <div class="input-group-btn">
            <button id="up2" class="btn btn-default" onclick="TeenagerUp('10')"><span class="glyphicon glyphicon-plus"></span></button>
          </div>
        </div>
      </div>
  </section>

  <section class="incrementor-container" >
    <div>
      <button style="display:none" id="ContinueBtn5" class="btn btn-default" onclick="ContinueBtnClick5()">Continue</button>
    </div>

  </section>

  <!-- Loading Wheel Start -->
  <div id="loading-container">
  <br>
  <br>
  <div class="loading" id="LoadingAnimation" style="display: none;">Loading&#8230;</div>
  <br>
  <br>
  </div>
  <!-- Loading Wheel End -->

  <!-- Dynamically Generated Table #Start# -->
  <!-- <table id="dataTable" style="display: none;">
  <thead>
    <tr id="table-header"> -->
      <!-- Table header will be populated here -->
    <!-- </tr>
  </thead>
  <tbody> -->
    <!-- Table rows will be populated here -->
  <!-- </tbody>
</table> -->
<!-- Dynamically Generated Table #End# -->

<table id="dataTable" style="display: none;" class="table table-striped country">
      <thead>
          <tr><th></th><th>Question</th><th>Your Answer</th>
      </thead>
      <tbody></tbody>
  </table>


  <script type="text/javascript">
    var ContinueBtn3 = document.getElementById("Number-Adult");
    var ContinueBtn6 = document.getElementById("ContinueBtn5");
    checkMinusValue1();

    // Shower Count
    function AdultUp(max) {
      document.getElementById("Number-Adult").value = parseInt(document.getElementById("Number-Adult").value) + 1;
      checkPlusValue1();
      if (document.getElementById("Number-Adult").value >= parseInt(max)) {
        document.getElementById("Number-Adult").value = max;
      }
    }

    function AdultDown(min) {
      document.getElementById("Number-Adult").value = parseInt(document.getElementById("Number-Adult").value) - 1;
      checkMinusValue1();
      if (document.getElementById("Number-Adult").value <= parseInt(min)) {
        document.getElementById("Number-Adult").value = min;
      }
    }

    // Bath Count
    function TeenagerUp(max) {
      document.getElementById("Number-Teenager").value = parseInt(document.getElementById("Number-Teenager").value) + 1;
      checkPlusValue1();
      if (document.getElementById("Number-Teenager").value >= parseInt(max)) {
        document.getElementById("Number-Teenager").value = max;
      }
    }

    function TeenagerDown(min) {
      document.getElementById("Number-Teenager").value = parseInt(document.getElementById("Number-Teenager").value) - 1;
      checkMinusValue1();
      if (document.getElementById("Number-Teenager").value <= parseInt(min)) {
        document.getElementById("Number-Teenager").value = min;
      }
    }

    function checkPlusValue1() {
      var AdultCheck = document.getElementById("Number-Adult").value;
      var TeenagerCheck = document.getElementById("Number-Teenager").value;

      if (AdultCheck >= 1 || TeenagerCheck >= 1) {
        ContinueBtn6.style.display = "grid";
      }
    }

    function checkMinusValue1() {
      var AdultCheck = document.getElementById("Number-Adult").value;
      var TeenagerCheck = document.getElementById("Number-Teenager").value;

      if (AdultCheck == 0 && TeenagerCheck == 0) {
        if (AdultCheck <= 1 || TeenagerCheck <= 1) {
          ContinueBtn6.style.display = "none";
        }
      }
    }
  </script>
  <!-- // End Stage 4 Incrementor  -->


  <!-- New Script -->
  <script>
    // Declare Global Variables //

    // Cards //
    var cardstage1a = document.getElementById("cardstage1a");
    var cardstage1b = document.getElementById("cardstage1b"); // Stage #1
    var cardstage1c = document.getElementById("cardstage1c");

    var cardstage2a = document.getElementById("cardstage2a");
    var cardstage2b = document.getElementById("cardstage2b"); // Stage #2
    var cardstage2c = document.getElementById("cardstage2c");

    var cardstage3a = document.getElementById("cardstage3a");
    var cardstage3b = document.getElementById("cardstage3b"); // Stage #3
    var cardstage3c = document.getElementById("cardstage3c");

    var cardstage4a = document.getElementById("cardstage4a");
    var cardstage4b = document.getElementById("cardstage4b"); // Stage #4

    var cardstage5a = document.getElementById("cardstage5a");
    var cardstage5b = document.getElementById("cardstage5b"); // Stage #5

    // Buttons //
    var btnstage1a = document.getElementById("btnstage1a"); // Stage #1

    var btnstage2a = document.getElementById("btnstage2a"); // Stage #2

    var btnstage3a = document.getElementById("btnstage3a"); // Stage #3

    var btnstage4a = document.getElementById("btnstage4a"); // Stage #4

    var btnstage5a = document.getElementById("btnstage5a"); // Stage #5

    // Back Button
    var btnbackstage2a = document.getElementById("btnbackstage2a"); // Stage #2

    var btnbackstage3a = document.getElementById("btnbackstage3a"); // Stage #3

    var btnbackstage4a = document.getElementById("btnbackstage4a"); // Stage #4

    var btnbackstage5a = document.getElementById("btnbackstage5a"); // Stage #5

    // Titles //
    var titlestage1a = document.getElementById("titlestage1a"); // Stage #1

    var titlestage2a = document.getElementById("titlestage2a"); // Stage #2

    var titlestage3a = document.getElementById("titlestage3a"); // Stage #3

    var titlestage4a = document.getElementById("titlestage4a"); // Stage #4

    var titlestage5a = document.getElementById("titlestage5a"); // Stage #5

    // Incrementor

    var incrementorcontainer = document.getElementById("incrementor-container"); // Stage 4
    var incrementorcontainer2 = document.getElementById("incrementor-container2"); // Stage 5

    var ShowerCheck = document.getElementById("Number-Shower").value; // Stage #4
    var BathCheck = document.getElementById("Number-Bath").value; // Stage #4

    var AdultCheck = document.getElementById("Number-Adult").value; // Stage #5
    var TeenagerCheck = document.getElementById("Number-Teenager").value; // Stage #5


    // Continue Button

    var ContinueBtn2 = document.getElementById("ContinueBtn4"); // Stage #4

    var ContinueBtn4 = document.getElementById("ContinueBtn5"); // Stage #5 

    // Initialize array
    var UserChoices = [];


    // Stage #1 - Call functions //

    // Stage #1 - User Clicks on a card //

    // Card #1 - Combiboiler
    function CardOnClick1a() {
      HideStage1Title();
      HideStage1Btn();
      HideCardsOnClick1();
      ShowStage2Cards();
      ShowStage2Btn();
      ShowStage2Title();
      AddUserInputStage1a();
    }

    // Card #2 - Gravity Fed

    function CardOnClick1b() {
      AddUserInputStage1b();
    }

    // Card #3 - Unvented System

    function CardOnClick1c() {
      HideStage1Title();
      HideStage1Btn();
      HideCardsOnClick1();
      ShowStage2Cards();
      ShowStage2Btn();
      ShowStage2Title();
      AddUserInputStage1c();
    }

    // Stage #1 Ends - User Clicks on a card //

    // Stage #2 - User Clicks on a card //

    // Card #1 - Less Than 12 Liters a minute
    function CardOnClick2a() {
      HideStage2Title();
      HideStage2Btn();
      HideStage2Cards();
      ///
      ShowStage3Cards();
      ShowStage3Btn();
      ShowStage3Title();
      ///
      AddUserInputStage2a();
    }

    // Card #2 - Unsure

    function CardOnClick2b() {
      AddUserInputStage2b();
    }

    // Card #3 - More Than 12 Liters a minute

    function CardOnClick2c() {
      HideStage2Title();
      HideStage2Btn();
      HideStage2Cards();
      ///
      ShowStage3Cards();
      ShowStage3Btn();
      ShowStage3Title();
      ///
      AddUserInputStage2c();
    }

    // Stage #2 Ends - User Clicks on a card //


    // Stage #3 Starts - User Clicks on a card //

    // Card #1 - "Yes" More than 0.5 Bar a minute
    function CardOnClick3a() {
      HideStage3Title();
      HideStage3Btn();
      HideStage3Cards();
      ///
      ShowStage4Cards();
      ShowStage4Btn();
      ShowStage4Title();
      ShowIncrementor();
      ///
      AddUserInputStage3a();
    }

    // Card #2 - "No" Less than 0.5 Bar a minute

    function CardOnClick3b() {
      HideStage3Title();
      HideStage3Btn();
      HideStage3Cards();
      ///
      ShowStage4Cards();
      ShowStage4Btn();
      ShowStage4Title();
      ShowIncrementor();
      ///
      AddUserInputStage3b();
    }

    // Stage #3 Ends - User Clicks on a card //


    // Stage #4 Starts - User sets input boxes how many bath + Showers they have and hits continue btn //

    function ContinueBtnClick4() {
      HideStage4Title();
      HideStage4Btn();
      HideStage4Cards();
      ///
      ShowStage5Cards();
      ShowStage5Btn();
      ShowStage5Title();
      ShowIncrementor2();
      ///
      AddUserInputStage4a();
      HideIncrementor();
      hideContinueBtn();
      resetIncrementorValues();
    }

    // Stage #4 Ends - User Clicks on a card //

    // Stage #5 Starts - User sets input boxes how many adults + teenagers they have and hits continue btn //

    function ContinueBtnClick5() {
      //
      HideStage5Title();
      HideStage5Btn();
      HideStage5Cards();
      ///

      // ShowStage6Cards();
      // ShowStage6Btn();
      // ShowStage6Title();

      ///
      AddUserInputStage5a();
      HideIncrementor2();
      hideContinueBtn();
      resetIncrementorValues();

      ShowLoadingAnimation();
      // animation code
    }

    //  Simple Javascript Timer for removing the loading animation before generating the table.
    function ShowLoadingAnimation(){
      // declare vars
      var LoadingAnimation = document.getElementById("LoadingAnimation");
      var loadingcontainer = document.getElementById("loading-container");
      // Display loading circle
      LoadingAnimation.style.display = "block";
        var sec = 0.3;
        var timer = setInterval(function(){
              sec--;
              if (sec < 0) {
                  // Remove loading circle container
                  loadingcontainer.style.display = "none";
                  dataTable.style.display = "table";
              }
          }, 1000);

      // simulation of a JSON file or stream containing the data to be loaded into the given table
      // var tableHeaders = ["Name", "Age", "City", "Contacted"];
      // var tableData = [
      //     { "Name": "John", "Age": 25, "City": "New York", "Contacted": false },
      //     { "Name": "Alice", "Age": 30, "City": "Los Angeles", "Contacted": false },
      //     { "Name": "Bob", "Age": 20, "City": "London", "Contacted": true },
      //     { "Name": "Debbie", "Age": 16, "City": "Paris", "Contacted": false }
      // ];

//       var tableHeaders = ["Choice ID", "Selected Option", "City", "Contacted"];
//       // UserChoices


// var tableHeaderRow = document.getElementById('table-header');
// for (var i = 0; i < tableHeaders.length; i++) {
//     var th = document.createElement('th');
//     th.textContent = tableHeaders[i];
//     tableHeaderRow.appendChild(th);
// }

// var table = document.getElementById('dataTable').getElementsByTagName('tbody')[0];

// for (var i = 0; i < UserChoices.length; i++) {
//     var row = table.insertRow(i);

//     for (var j = 0; j < tableHeaders.length; j++) {
//         var cell = row.insertCell(j);
//         var header = tableHeaders[j];

//         if (UserChoices[i].hasOwnProperty(header)) {
//             cell.textContent = UserChoices[i][header];
//         } else {
//             cell.textContent = 'N/A';
//         }
//     }
// }

$(document).ready(function(){
    var country = ["1", "2", "3", "4", "5"];
    var capital = ["Oslo", "Stockholm" , "Copenhagen"];
    UserQuestions = ["What type of water system do you have?", "What is your incoming flow rate?", "Do you have 0.5 bar or more pressure coming in to your home?", "How many bathrooms and en-suites do you have in your home?", "How many people live in your home?"];
    UserChoiceID = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    var bodyString = '';
    $.each(country, function(index, country) {
        // bodyString += ('<tr><td>'+country+'</td><td>'+JSON.stringify([UserQuestions[index]], null, 4)+JSON.stringify([UserChoices[index]], null, 4)+'</td></tr>');
        bodyString += ('<tr> <th>'+country+'</th>'+'<th>'+UserQuestions[index]+'</th>'+'<th>' +JSON.stringify(UserChoices[index], null, 4)+'</th> </tr>');
    });
    $('.country tbody').html(bodyString);
    
    });

    }  // Code end

    // Stage #5 Ends

<br><br>

    // Stage #1 - User Clicks on Info buttons above cards to popup help window.
    function HelpOnClick1() {
      //call
    }


    // Stage #1 Start //

    function ShowStage1Cards() {
      cardstage1a.style.display = "block";
      cardstage1b.style.display = "block";
      cardstage1c.style.display = "block";
    }

    function HideCardsOnClick1() {
      cardstage1a.style.display = "none";
      cardstage1b.style.display = "none";
      cardstage1c.style.display = "none";
    }

    function ShowStage1Btn() {
      btnstage1a.style.display = "inline-block";
      btnstage1a.style.margin = "0% 0% 0% 5%";
    }

    function HideStage1Btn() {
      btnstage1a.style.display = "none";
    }

    function HideStage1Title() {
      titlestage1a.style.display = "none";
    }

    function ShowStage1Title() {
      titlestage1a.style.display = "block";
    }

    // Stage #1 End //

    // Stage #2 Start //

    function ShowStage2Cards() {
      cardstage2a.style.display = "block";
      cardstage2b.style.display = "block";
      cardstage2c.style.display = "block";
    }

    function HideStage2Cards() {
      cardstage2a.style.display = "none";
      cardstage2b.style.display = "none";
      cardstage2c.style.display = "none";
    }

    function ShowStage2Btn() {
      btnstage2a.style.display = "inline-block";
      btnstage2a.style.margin = "0% 0% 0% 5%";
      btnbackstage2a.style.display = "inline-block";
    }

    function HideStage2Btn() {
      btnstage2a.style.display = "none";
      btnbackstage2a.style.display = "none";
    }

    function ShowStage2Title() {
      titlestage2a.style.display = "block";
    }

    function HideStage2Title() {
      titlestage2a.style.display = "none";
    }

    // Stage #2 End //

    // Stage #3 Start //

    function ShowStage3Cards() {
      cardstage3a.style.display = "block";
      cardstage3b.style.display = "block";
    }

    function HideStage3Cards() {
      cardstage3a.style.display = "none";
      cardstage3b.style.display = "none";
    }

    function ShowStage3Btn() {
      btnstage3a.style.display = "inline-block";
      btnstage3a.style.margin = "0% 0% 0% 5%";
      btnbackstage3a.style.display = "inline-block";
    }

    function HideStage3Btn() {
      btnstage3a.style.display = "none";
      btnbackstage3a.style.display = "none";
    }

    function ShowStage3Title() {
      titlestage3a.style.display = "block";
    }

    function HideStage3Title() {
      titlestage3a.style.display = "none";
    }

    // Stage #3 End //

    // Stage #4 Start //

    function ShowStage4Cards() {
      cardstage4a.style.display = "block";
      cardstage4b.style.display = "block";
    }

    function HideStage4Cards() {
      cardstage4a.style.display = "none";
      cardstage4b.style.display = "none";
    }

    function ShowStage4Btn() {
      btnstage4a.style.display = "inline-block";
      btnstage4a.style.margin = "0% 0% 0% 1%";
      btnbackstage4a.style.display = "block";
    }

    function HideStage4Btn() {
      btnstage4a.style.display = "none";
      btnbackstage4a.style.display = "none";
    }

    function ShowStage4Title() {
      titlestage4a.style.display = "block";
    }

    function HideStage4Title() {
      titlestage4a.style.display = "none";
    }

    function ShowIncrementor() {
      incrementorcontainer.style.display = "grid";
    }

    function HideIncrementor() {
      incrementorcontainer.style.display = "none";
    }

    function ShowIncrementor2() {
      incrementorcontainer2.style.display = "grid";
    }

    function HideIncrementor2() {
      incrementorcontainer2.style.display = "none";
    }

    function resetIncrementorValues() {
      document.getElementById('Number-Shower').value = '0';
      document.getElementById('Number-Bath').value = '0';
      document.getElementById('Number-Adult').value = '0';
      document.getElementById('Number-Teenager').value = '0';
    }

    function ShowContinueBtn() {
      ContinueBtn2.style.display = "grid";
    }

    function hideContinueBtn() {
      ContinueBtn2.style.display = "none";
      ContinueBtn4.style.display = "none";
      ContinueBtn5.style.display = "none";
    }
    // Stage #4 End //



    // Stage #5 Start //

    function ShowStage5Cards() {
      cardstage5a.style.display = "block";
      cardstage5b.style.display = "block";
    }

    function HideStage5Cards() {
      cardstage5a.style.display = "none";
      cardstage5b.style.display = "none";
    }

    function ShowStage5Btn() {
      btnstage5a.style.display = "inline-block";
      btnstage5a.style.margin = "0% 0% 0% 1%";
      btnbackstage5a.style.display = "block";
    }

    function HideStage5Btn() {
      btnstage5a.style.display = "none";
      btnbackstage5a.style.display = "none";
    }

    function ShowStage5Title() {
      titlestage5a.style.display = "block";
    }

    function HideStage5Title() {
      titlestage5a.style.display = "none";
    }

    function ShowIncrementor2() {
      incrementorcontainer2.style.display = "grid";
    }

    function HideIncrementor2() {
      incrementorcontainer2.style.display = "none";
    }

    // Stage #5 End //

    // Back Button Start //

    // Stage #2 - Back Button //

    function BackBtnStart() {
      HideStage2Btn();
      HideStage2Title();
      HideStage2Cards();
      RemoveLastUserChoiceFromArray();
      ShowStage1Cards();
      ShowStage1Btn();
      ShowStage1Title();
    }

    // Stage #3 - Back Button //

    function BackBtnStart2() {
      HideStage3Btn();
      HideStage3Title();
      HideStage3Cards();
      RemoveLastUserChoiceFromArray();
      ShowStage2Cards();
      ShowStage2Btn();
      ShowStage2Title();
      hideContinueBtn();
      resetIncrementorValues();
    }

    function BackBtnStart3() {
      //
      HideStage4Btn();
      HideStage4Title();
      HideStage4Cards();
      //
      RemoveLastUserChoiceFromArray();
      //
      ShowStage3Cards();
      ShowStage3Btn();
      ShowStage3Title();
      //
      hideContinueBtn();
      resetIncrementorValues();
      HideIncrementor();
    }

    function BackBtnStart4() {
      //
      HideStage5Btn();
      HideStage5Title();
      HideStage5Cards();
      //
      RemoveLastUserChoiceFromArray();
      //
      ShowStage4Cards();
      ShowStage4Btn();
      ShowStage4Title();
      //
      hideContinueBtn();
      HideIncrementor2();
      resetIncrementorValues();
      ShowIncrementor();
    }


    // Back Button End //

    //  Add User Input to local Array

    // Array Stage #1 Starts//
    function AddUserInputStage1a() {
      // Create object and add the object to the end of the array
      UserChoices.push('I have a combi-boiler system.');
      console.log(UserChoices);
    }

    function AddUserInputStage1b() {
      UserChoices.push('A gravity fed system.');
      console.log(UserChoices);
    }

    function AddUserInputStage1c() {
      UserChoices.push('A unvented system.');
      console.log(UserChoices);
    }
    // Array Stage #1 Ends //

    // Array Stage #2 Starts //
    function AddUserInputStage2a() {
      // Create object and add the object to the end of the array
      UserChoices.push('I have less than 12 liters a minute in water flow.');
      console.log(UserChoices);
    }

    function AddUserInputStage2b() {
      // UserChoices.push('Unsure');
      console.log(UserChoices);
    }

    function AddUserInputStage2c() {
      UserChoices.push('I have more than 12 liters a minute in water flow.');
      console.log(UserChoices);
    }
    // Array Stage #2 Ends //

    // Array Stage #3 Starts //
    function AddUserInputStage3a() {
      // Create object and add the object to the end of the array
      UserChoices.push('I have greater than 0.5 Bar in water pressure.');
      console.log(UserChoices);
    }

    function AddUserInputStage3b() {
      UserChoices.push('I have less than 0.5 Bar in water pressure.');
      console.log(UserChoices);
    }
    // Array Stage #3 Ends //

    // Array Stage #4 Starts //
    function AddUserInputStage4a() {
      var aShowers = document.getElementById('Number-Shower').value;
      var aBaths = document.getElementById('Number-Bath').value;
      UserChoices.push("There is " + aShowers + " shower(s) and " + " " + aBaths + " bath(s) in my home.");
      console.log(UserChoices);
    }

    // Array Stage #4 Ends //

    // Array Stage #5 Starts //

    function AddUserInputStage5a() {
      var aAdults = document.getElementById('Number-Adult').value;
      var aTeenagers = document.getElementById('Number-Teenager').value;
      UserChoices.push(aAdults + " adult(s) and " + " " + aTeenagers + " teenager(s).");
      console.log(UserChoices);
    }

    // Array Stage #5 Ends //

    // Stage #2 or later array removal options. 

    function RemoveLastUserChoiceFromArray() {
      console.log(UserChoices.pop());
      console.log(UserChoices);
    }

    //  Array End //
  </script>

  <!-- End of New Script -->


  </section>

  <footer>
    <p><em><small>Footer Marking</small></em></p>
  </footer>
  <!-- Container End #1 -->

</body>

</html>
