<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page d'aceuill</title>
</head>
<body>
amine maslah 
    
</body>
</html>

@foreach ($location as $d)
{{$d->id}}  
<a href="https://www.google.com/maps/@ {{$d->laptitude }},{{ $d->longitude }},14z">location </a>
@endforeach


+++++
!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Oh snap! We just showed you a modal..</h4>
      <h5>Because we can <i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>Cool huh? Ok, enough teasing around..</p>
      <p>Go to our <a class="w3-text-teal" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal footer</p>
    </footer>
  </div>
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR TEAM</h2>
<p>Meet the team - our office rats:</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="https://www.w3schools.com//w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Johnny Walker</h3>
  <p>Web Designer</p>
</div>

<div class="w3-quarter">
  <img src="https://www.w3schools.com/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Rebecca Flex</h3>
  <p>Support</p>
</div>

<div class="w3-quarter">
  <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Jan Ringo</h3>
  <p>Boss man</p>
</div>

<div class="w3-quarter">
  <img src="https://www.w3schools.com/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Kai Ringo</h3>
  <p>Fixer</p>
</div>

</div>
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>Our Work</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="https://www.w3schools.com/w3images/snow.jpg" alt="Snow" style="width:100%">
  <div class="w3-container">
  <h3>Customer 1</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
  <div class="w3-container">
  <h3>Customer 2</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="https://www.w3schools.com/w3images/mountains.jpg" alt="Mountains" style="width:100%">
  <div class="w3-container">
  <h3>Customer 3</h3>
  <h4>Trade</h4>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  <p>Blablabla</p>
  </div>
  </div>
</div>

</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>

<!-- Pricing Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="pricing">
    <h2>PRICING</h2>
    <p>Choose a pricing plan that fits your needs.</p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Basic</p>
        </li>
        <li class="w3-padding-16"><b>10GB</b> Storage</li>
        <li class="w3-padding-16"><b>10</b> Emails</li>
        <li class="w3-padding-16"><b>10</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">Pro</p>
        </li>
        <li class="w3-padding-16"><b>25GB</b> Storage</li>
        <li class="w3-padding-16"><b>25</b> Emails</li>
        <li class="w3-padding-16"><b>25</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Premium</p>
        </li>
        <li class="w3-padding-16"><b>50GB</b> Storage</li>
        <li class="w3-padding-16"><b>50</b> Emails</li>
        <li class="w3-padding-16"><b>50</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Swing by for a cup of coffee, or whatever.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Chicago, US</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>I Like it!</label>
      <button type="submit" class="w3-button w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>
<script>

    document.querySelector('a[class=navbar-brand]').style.display='none';

</script>


foreach ($location as $d)
{{$d->id}}  
<a href="https://www.google.com/maps/@ {{$d->laptitude }},{{ $d->longitude }},14z">location </a>
@endforeach
<script>
document.querySelector('a[class=navbar-brand]').style.display='none';
 </script


 999

 {
    public function index(){
        $users = DB::select('select * from modification');
        return view('maslah',['modification'=>$users]);
        } 
    
    }
    5555
    public function postForm(Request $request)
	{  $email = new DB;
        $email = $request->input('name');
		$email = $request->input('email');

		$email = $request->input('ville');
		$email->save();
		
		return view('amine');
	}
}




Route::get('insert','abdo@insertform');
Route::post('create','abdo@insert');
Route::get('/abdo', function () {
    
    return view('abdo');
});
----

Route::get('/insription', function () {
    $utilisateur = new App\Utilisateur;
    $utilisateur->name = request('name');
    $utilisateur->email = request('email');
    $utilisateur->tele= request('tele');
    $utilisateur->ville = request('ville');
    $utilisateur->save();



});




++++
<script>


$(document).ready(function() {
    $('#password').keyup(function(){
        $('#result').html(checkStrength($('#password').val()));
        $('#confirmPass').html(confirmPasswordCheck());
    });
    $('#confirm').keyup(function(){
        $('#confirmPass').html(confirmPasswordCheck());
    });
    
    $('#password').popover({ html: true,
    content: function() { 
        return $('#passwordInfo').html();
    },
    placement:"right",
    trigger:"focus"
}); 
});

function checkStrength(password) {
var strength = 0
if (password.length < 6) {
$('#result').removeClass()
$('#result').addClass('short')
return 'Too short'
}
if (password.length > 7) strength += 1
// If password contains both lower and uppercase characters, increase strength value.
if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
// If it has numbers and characters, increase strength value.
if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
// If it has one special character, increase strength value.
if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
// If it has two special characters, increase strength value.
if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
// Calculated strength value, we can return messages
// If value is less than 2
if (strength < 2) {
$('#result').removeClass()
$('#result').addClass('weak')
return 'Weak'
} else if (strength == 2) {
$('#result').removeClass()
$('#result').addClass('good')
return 'Good'
} else {
$('#result').removeClass()
$('#result').addClass('strong')
return 'Strong'
}
}

function confirmPasswordCheck(){
    var password = $('#password');
    var confirm = $('#confirm');
    $('#confirmPass').removeClass();

    if(password.val()!==confirm.val()){
        $('#confirmPass').addClass('short');
        return 'Password does not Match';
    }else{
        $('#confirmPass').addClass('Strong');
         return 'Password confirmed successfully';
    }
}


88888


<!DOCTYPE html>
<html>
<!--
// Author: @agup
//
// EXPERIMENTAL!!
// This is a demonstration app for capturing point locations in the field.
//
-->
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <title>Geodata Test</title>

    <link rel="stylesheet" href="https://js.arcgis.com/3.26/esri/css/esri.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://esri.github.io/bootstrap-map-js/src/css/bootstrapmap.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" >

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        #mapDiv{
            min-height: 300px;
            max-height: 300px;
            width: 100%;
            padding-left: 20px;
            padding-right: 20px;
        }
        /* Override bootstrap progress bar color */
        .progress-bar-warning {
            background-color: yellow;
            color: black;
        }
        .badge {
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <button id="start-geo-btn" type="button" class="btn btn-default" onclick="startGeo()"><span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span></button>
                    <button type="button" class="btn btn-danger" onclick="stopAll()"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></button>
                    <button type="button" class="btn btn-warning" onclick="reset()"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>
                    <button class="btn btn-primary" type="button">
                        <span class="glyphicon glyphicon-time" aria-hidden="true">
                            <span id="elapsed-time" class="badge">00:00:00</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div id="mapDiv"></div>
    </div>

    <div class="panel panel-defaut">
        <div class="panel-body">
            <div class="well">
                <div class="progress">
                    <!-- Make sure you set the max value to the same as the GeolocationHelper.MAX_ARRAY_SIZE -->
                    <div id="progress-bar-main" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                        buffer
                    </div>
                </div>
                <table class="table">
                    <tr class="info">
                        <td>
                            <label>
                                <input id="average-center" type="checkbox" checked onchange="showAverageCenter()"> Use averaged center
                            </label>
                        </td>
                        <td>
                            <label>
                                <input id="show-circle" type="checkbox" checked onchange="showAccuracyCircle()">  Show accuracy circle
                            </label>
                        </td>
                        <td>
                            <label>
                                <input id="show-all-pts" type="checkbox" onchange="showAllPoints()">  Show all points
                            </label>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Processed Location Data</div>
        <div class="well">
            <div class="row">
                <ul class="list-group col-md-6">
                    <div id="avg-lat-lon" class="list-group-item list-group-item-info">Avg. Center (lat, lon): 0, 0</div>
                    <div id="avg-accuracy" class="list-group-item list-group-item-info">Avg. accuracy (m): 0</div>
                </ul>
                <ul class="list-group col-md-6">
                    <div id="avg-dist-lat-lon" class="list-group-item list-group-item-success">Avg. distance between updates (m): 0</div>
                    <div id="avg-time" class="list-group-item list-group-item-success">Avg. time between updates: 0</div>
                </ul>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Raw Location Data</div>
        <div class="well">
            <div class="row">
                <ul class="list-group col-md-6">
                    <li id="lat-lon"  class="list-group-item list-group-item-info">Lat: 0.0, Lon: 0.0</li>
                    <li id="accuracy" class="list-group-item list-group-item-info">Accuracy: 0.0</li>
                    <li id="time-diff" class="list-group-item list-group-item-info">Time since last update: 0</li>
                </ul>
                <ul class="list-group col-md-6">
                    <li id="heading" class="list-group-item list-group-item-success">Heading: 0</li>
                    <li id="altitude" class="list-group-item list-group-item-success">Altitude: 0</li>
                    <li id="speed" class="list-group-item list-group-item-success">Speed: 0</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Set number of points to process:</div>
        <div class="well">
            <div id="btn-chooser-bar" class="btn-toolbar" role="toolbar">
                <button id="btn-choose-15" type="button" class="btn btn-info">15</button>
                <button id="btn-choose-25" type="button" disabled class="btn btn-default">25</button>
                <button id="btn-choose-35" type="button" class="btn btn-info">35</button>
                <button id="btn-choose-45" type="button" class="btn btn-info">45</button>
            </div>
        </div>
    </div>

    <script>
        var locationPath = location.pathname.replace(/\/[^/]+$/, "");
        var dojoConfig = {
            paths: {
                application: locationPath + "/js"
            }
        }
    </script>

    <!--<script src="js/atoll.js"></script>-->
    <script src="js/GeolocationHelper.js"></script>
    <script src="https://js.arcgis.com/3.26/"></script>
    <script>
        //
        // EXPERIMENTAL!!
        // This app demonstrates a very simple
        // algorithm for smoothing out geolocation results to
        // capture a single location.
        //
        var _watchID = null;
        var _zoomStop = 17;
        var __currentTime = null;
        var startDate = new Date();
        var accuracyArray = [];
        var latArray = [];
        var lonArray = [];
        var positionObject = {}, missMapDraw = false;
        var masterTimer = null;
        var map = null, _greenMarkerSymbol = null, _redMarkerSymbol = null, _yellowMarkerSymbol = null;
        var _greenCircleSymbol = null, _redCircleSymbol = null, _yellowCircleSymbol = null, _smallCircleSymbol = null, _lastCircle = null;
        var finalMarkerSymbol = null;
        var finalCircleSymbol = null;
        // User controls
        var drawCircle = true;
        var drawAllPoints = false;
        var useActualLatLon = false;
        // Divs
        var avgTimeDiv = document.getElementById("avg-time");
        var avgAccuracyDiv = document.getElementById("avg-accuracy");
        var accuracyDiv = document.getElementById("accuracy");
        var latLonDiv = document.getElementById("lat-lon");
        var altitudeDiv = document.getElementById("altitude");
        var speedDiv = document.getElementById("speed");
        var headingDiv = document.getElementById("heading");
        var timeDiffDiv = document.getElementById("time-diff");
        var avgDistanceLatLonArrayDiv = document.getElementById("avg-dist-lat-lon");
        var avgLatLonDiv = document.getElementById("avg-lat-lon");
        var elapsedTimeDiv = document.getElementById("elapsed-time");
        var progressBar = document.getElementById("progress-bar-main");
        // Button bar
        var choose15Btn = document.getElementById("btn-choose-15");
        choose15Btn.addEventListener("click",handleChooserBtn);
        var choose25Btn = document.getElementById("btn-choose-25");
        choose25Btn.addEventListener("click",handleChooserBtn);
        var choose35Btn = document.getElementById("btn-choose-35");
        choose35Btn.addEventListener("click",handleChooserBtn);
        var choose45Btn = document.getElementById("btn-choose-45");
        choose45Btn.addEventListener("click",handleChooserBtn);
        var chooserBtnBar = document.getElementById("btn-chooser-bar");
        var startGeoBtn = document.getElementById("start-geo-btn");
        var showCircleCheckBox = document.getElementById("show-circle");
        var showAllPtsCheckBox = document.getElementById("show-all-pts");
        var showAvgCenterCheckBox = document.getElementById("average-center");
        var geolocationHelper = new GeolocationHelper(null /* no filters */);
        // We want to start the geolocation as early as possible in the application.
        startGeo();
        require([
            "esri/map",
            "esri/symbols/PictureMarkerSymbol",
            "esri/symbols/SimpleMarkerSymbol",
            "esri/symbols/SimpleLineSymbol",
            "esri/graphic",
            "esri/geometry/Point",
            "dojo/_base/Color",
            "esri/geometry/Circle", "esri/symbols/SimpleFillSymbol","application/bootstrapmap",
            "dojo/domReady!"],
                function(Map,PictureMarkerSymbol,SimpleMarkerSymbol,SimpleLineSymbol,Graphic,Point,Color,Circle,SimpleFillSymbol,BootstrapMap) {
                    map = BootstrapMap.create("mapDiv",{
                        basemap: "topo",
                        center: [-122.45, 37.75], // longitude, latitude
                        zoom: 11
                    });
                    // If we have geolocation information ready the instant the map loads
                    // let's go ahead and drop a location marker on the map.
                    map.on("load",function(){
                        if(missMapDraw){
                            drawLocationMarker(positionObject.lat,positionObject.lon,positionObject.accuracy);
                            missMapDraw = false;
                        }
                    });
                    map.on("zoom-end",function(evt){
                        _zoomStop = evt.level;
                    });
                    (function() {
                        // Create the marker symbol
                        _greenMarkerSymbol = new PictureMarkerSymbol({
                            "angle":0,
                            "xoffset":0,
                            "yoffset":13,
                            "type":"esriPMS",
                            "url":"images/green-pin.png",
                            "width":35,
                            "height":35
                        });
                        _redMarkerSymbol = new PictureMarkerSymbol({
                            "angle":0,
                            "xoffset":0,
                            "yoffset":13,
                            "type":"esriPMS",
                            "url":"images/red-pin.png",
                            "width":35,
                            "height":35
                        });
                        _yellowMarkerSymbol = new PictureMarkerSymbol({
                            "angle":0,
                            "xoffset":0,
                            "yoffset":13,
                            "type":"esriPMS",
                            "url":"images/yellow-pin.png",
                            "width":35,
                            "height":35
                        });
                        _greenCircleSymbol = new SimpleFillSymbol().setColor(null).outline.setColor("green");
                        _redCircleSymbol = new SimpleFillSymbol(SimpleFillSymbol.STYLE_SOLID,new SimpleLineSymbol(SimpleLineSymbol.STYLE_SOLID,
                                new Color([220,20,60]), 1),new Color([220,20,60,0.25]));
                        _yellowCircleSymbol = new SimpleFillSymbol(SimpleFillSymbol.STYLE_SOLID,new SimpleLineSymbol(SimpleLineSymbol.STYLE_SOLID,
                                new Color([255,255,0]), 1),new Color([255,255,0,0.25]));
                        _smallCircleSymbol = new SimpleMarkerSymbol(
                                SimpleMarkerSymbol.STYLE_CIRCLE,
                                12,
                                new SimpleLineSymbol(
                                        SimpleLineSymbol.STYLE_NULL,
                                        new Color([247, 34, 101, 0.9]),
                                        1
                                ),
                                new Color([207, 34, 171, 0.5])
                        );
                    }());
        });
        function startGeo() {
            reset();
            startMasterTimer();
            var currentDate = new Date();
            __currentTime = currentDate.getTime();
            startDate = new Date();
            _watchID = navigator.geolocation.watchPosition(
                geoResults,
                geoErrors,
                {
                    timeout: 60000,
                    enableHighAccuracy: true,
                    maximumAge: 0
                }
            );
        }
        function geoResults(position){
            positionObject = position;
            var lat = position.coords.latitude;         //Get latitude
            var lon = position.coords.longitude;        //Get longitude
            var timeStamp = position.timestamp;         //Get timestamp
            var accuracy = position.coords.accuracy; 	//Get accuracy in meters
            var heading = position.coords.heading;
            var speed = position.coords.speed;
            var altitude = position.coords.altitude;
            if(lat != null && lon != null) latLonDiv.innerHTML = "Lat: " + lat.toFixed(4).toString() + ", " + "Lon: " + lon.toFixed(4).toString();
//            if(timeStamp != null) timestampDiv.innerHTML = "Timestamp: " + new Date(timeStamp).toUTCString();
            if(accuracy != null) accuracyDiv.innerHTML = "Accuracy (m): " + accuracy.toString();
            if(heading != null) headingDiv.innerHTML = "Heading: " + heading.toString();
            if(speed != null) speedDiv.innerHTML = "Speed (m/s): " + speed.toString();
            if(altitude != null) altitudeDiv.innerHTML = "Altitude: " + altitude.toString();
            geolocationHelper.process(accuracy,lat,lon,timeStamp,function(result){
                console.log("RESULT " + JSON.stringify(result));
                startGeoBtn.className = "btn btn-success";
                avgDistanceLatLonArrayDiv.innerHTML = "Avg. distance between updates (m): " + result.avg_distance.toFixed(5).toString();
                avgTimeDiv.innerHTML = "Avg. time between updates: " + elapsedTime(result.med_time_diff,false).toString();
                avgAccuracyDiv.innerHTML = "Avg. accuracy (m): " + result.avg_accuracy.toFixed(1).toString()
                avgLatLonDiv.innerHTML = "Avg. Center (lat, lon): " + result.center_point.latitude.toFixed(4).toString() +
                ", " + result.center_point.longitude.toFixed(4).toString();
                progressBar.style.width = (result.count / geolocationHelper.MAX_ARRAY_SIZE * 100).toString() + "%";
                progressBar.innerHTML = result.count + " / " + geolocationHelper.MAX_ARRAY_SIZE;
                var date = new Date();
                __currentTime = date.getTime();
                if(useActualLatLon) {
                    drawLocationMarker(lat,lon,accuracy);
                }
                else {
                    drawLocationMarker(result.center_point.latitude,result.center_point.longitude,result.med_accuracy);
                }
            });
        }
        function drawLocationMarker(lat, lon, med_accuracy){
            if(map != null && map.graphics != null){
                require([
                    "esri/graphic",
                    "esri/geometry/Circle",
                    "esri/geometry/Point"],
                        function(Graphic,Circle,Point){
                            // We only want one symbol
                            map.graphics.clear();
                            var geometry = new Point(lon,lat);
                            // Have to wait for map to initialize
                            if(map != null){
                                if(med_accuracy <= 10){
                                    finalMarkerSymbol = _greenMarkerSymbol;
                                    finalCircleSymbol = _greenCircleSymbol;
                                    progressBar.className = "progress-bar progress-bar-success";
                                }
                                if(med_accuracy <= 30){
                                    finalMarkerSymbol = _yellowMarkerSymbol;
                                    finalCircleSymbol = _yellowCircleSymbol;
                                    progressBar.className = "progress-bar progress-bar-warning";
                                }
                                else{
                                    finalMarkerSymbol = _redMarkerSymbol;
                                    finalCircleSymbol = _redCircleSymbol;
                                    progressBar.className = "progress-bar progress-bar-danger";
                                }
                                if(drawCircle){
                                    _lastCircle = new Circle({
                                        center: [lon,lat],
                                        radius: med_accuracy,
                                        geodesic: true
                                    });
                                    _lastCircle._tempType = "circle"; // so we can identify it on the graphicsLayer.
                                    map.graphics.add(new Graphic(_lastCircle, finalCircleSymbol));
                                }
                                if(drawAllPoints){
                                    var ptsArray = geolocationHelper.getLatLonArray();
                                    ptsArray.forEach(function(entry){
                                        var pt = new Point(entry.longitude, entry.latitude);
                                        map.graphics.add(new Graphic(pt, _smallCircleSymbol));
                                    });
                                }
                                map.graphics.add(new Graphic(geometry, finalMarkerSymbol));
                                map.setExtent(_lastCircle.getExtent());
//                                map.centerAndZoom(geometry, _zoomStop);
                            }
                        }
                )
            }
            else{
                missMapDraw = true;
                positionObject = {lat:lat,lon:lon,accuracy:med_accuracy};
            }
        }
        /**
         * Calculate HH:MM:SS:MS from a given Date in millis
         * @param date
         * @param hmsOnly boolean HH:MM:SS only
         * @returns {string}
         * @private
         */
        function elapsedTime(/* Date */ date,hmsOnly){;
            var msec = date;
            var hh = Math.floor(msec / 1000 / 60 / 60);
            msec -= hh * 1000 * 60 * 60;
            var mm = Math.floor(msec / 1000 / 60);
            msec -= mm * 1000 * 60;
            var ss = Math.floor(msec / 1000);
            msec -= ss * 1000;
            hh = hh < 10 ? "0" + hh : hh;
            mm = mm < 10 ? "0" + mm : mm;
            ss = ss < 10 ? "0" + ss : ss;
            msec = msec < 10 ? "0" + msec : msec;
            if(isNaN(hh) || isNaN(mm) || isNaN(ss) || isNaN(msec)) {
                return "00:00:00";
            }
            if(hmsOnly){
                return hh + ":" + mm + ":" + ss;
            }
            else {
                return hh + ":" + mm + ":" + ss + ":" + msec;
            }
        }
        function reset(){
            stopAll();
            accuracyArray = [];
            latArray = [];
            lonArray = [];
            if(map) map.graphics.clear();
            progressBar.style.width = "0%";
            geolocationHelper.reset();
            avgTimeDiv.innerHTML = "Avg. time between updates: 0";
            avgAccuracyDiv.innerHTML = "Avg. accuracy (m): 0";
            accuracyDiv.innerHTML = "Accuracy (m): 0";
            latLonDiv.innerHTML = "Lat: 0.0, Lon: 0.0";
            altitudeDiv.innerHTML = "Altitude: 0";
            speedDiv.innerHTML = "Speed: 0";
            headingDiv.innerHTML = "Heading: 0";
            timeDiffDiv.innerHTML = "Avg. time between updates: 0";
            avgDistanceLatLonArrayDiv.innerHTML = "Avg. distance between updates (m): 0";
            avgLatLonDiv.innerHTML = "Avg. center (lat, lon): 0.0, 0.0";
            elapsedTimeDiv.innerHTML = "00:00:00";
        }
        function showAverageCenter() {
            if(showAvgCenterCheckBox.checked) {
                useActualLatLon = true;
            }
            else {
                useActualLatLon = false;
            }
        }
        function  showAllPoints() {
            if(showAllPtsCheckBox.checked) {
                drawAllPoints = true;
                require(["esri/graphic","esri/geometry/Point"],
                        function(Graphic,Point){
                            var ptsArray = geolocationHelper.getLatLonArray();
                            ptsArray.forEach(function(entry){
                                var pt = new Point(entry.longitude, entry.latitude);
                                pt._tempType = "tempMarker";
                                map.graphics.add(new Graphic(pt, _smallCircleSymbol));
                            });
                        });
            }
            else {
                drawAllPoints = false;
                map.graphics.graphics.forEach(function(graphic){
                    if(graphic.hasOwnProperty("geometry") && graphic.geometry._tempType === "tempMarker") {
                        map.graphics.remove(graphic);
                    }
                });
            }
        }
        function showAccuracyCircle(evt) {
            if(showCircleCheckBox.checked){
                drawCircle = true;
                require(["esri/graphic"],
                        function(Graphic){
                            map.graphics.add(new Graphic(_lastCircle, finalCircleSymbol));
                        });
            }
            else {
                drawCircle = false;
                map.graphics.graphics.forEach(function(graphic) {
                   if(graphic.hasOwnProperty("geometry") && graphic.geometry._tempType === "circle") {
                       map.graphics.remove(graphic);
                   }
                });
            }
        }
        function geoErrors(error) {
            switch(error.code){
                // "PERMISSION_DENIED"
                case 1:
                    alert("Permission denied to get location.");
                    break;
                // "POSITION_UNAVAILABLE"
                case 2:
                    alert("Failed to get a location.");
                    break;
                // "TIMEOUT"
                case 3:
                    //Read more at http://dev.w3.org/geo/api/spec-source.html#timeout
                    alert("Application timed out before getting a valid location.");
                    break;
            }
        }
        function stopAll() {
            stopTimers();
            navigator.geolocation.clearWatch(_watchID);
            _watchID = null;
            startGeoBtn.className = "btn btn-default";
        }
        function restartAll() {
            stopAll();
            startMasterTimer();
        }
        function stopTimers(){
            // Try multiple ways to kill the web worker
            if(masterTimer) {
                masterTimer.postMessage("stop");
                masterTimer.terminate();
            }
            masterTimer = undefined; // Free up memory if not in use
        }
        function startMasterTimer() {
            masterTimer = new Worker("js/background-timer.js");
            masterTimer.onmessage = function(event){
                elapsedTimeDiv.innerHTML = elapsedTime(new Date(Math.abs(event.data - startDate.getTime())),true);
                var endTime = new Date();
                timeDiffDiv.innerHTML = "Time since last update (ms): " + elapsedTime(new Date(Math.abs(endTime.getTime() - __currentTime)),true);
            }
        }
        function handleChooserBtn() {
            var btnArray = [].slice.call(chooserBtnBar.children);
            this.className = "btn btn-default";
            this.disabled = true;
            geolocationHelper.MAX_ARRAY_SIZE = parseInt(this.id.substr(this.id.length - 2));
            btnArray.forEach(function(child) {
                if(child.id !== this.id){
                    child.className = "btn btn-info";
                    child.disabled = false;
                }
            }.bind(this));
            startGeo();
        }
    </script>
    <!-- jQuery (for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Include all  plugins or individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>




+++++
<!DOCTYPE html>
<html>
  <head>
    <!-- This stylesheet contains specific styles for displaying
         the map on this page. Replace it with your own styles as
         described in the documentation:
         https://developers.google.com/maps/documentation/javascript/tutorial
    -->
    <link rel="stylesheet" href="/maps/documentation/javascript/cgc/demos.css">
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap() {
        var myLatLng = {lat: -25.363, lng: 131.044};

        // Create a map object and specify the DOM element
        // for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 4
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          title: 'Hello World!'
        });
      }

    </script>
    <script
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9Z5O7jtg9hLV_RXR8aVh5Kl-NjSy-okM&callback=initMap"

        async defer></script>
  </body>
</html>



https://a.top4top.net/p_1123ed3nu1.png
1111
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<!DOCTYPE html>
<html>
<title>amine</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>


<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="https://a.top4top.net/p_1123ed3nu1.png" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>GPS</b></span> <span class="w3-hide-small w3-text-light-grey">TRACKER</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">
 <i> <center>  hello you are identified  </center> </i>
 



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>to rent his car: <a href="/profile" title="go" target="_blank" class="w3-hover-text-green">click here</a></p>
</footer>

</body>
</html>


        </div>
        <script>

    document.querySelector('a[class=navbar-brand]').style.display='none';

</script>
    </div>
    
</div>
@endsection
2222222222222222
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=date],select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 20px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #4a5aff;
  text-align: center;
  padding:20px;
}



</style>
</head>
<body>

<form action="/loca" method='GET'>
  <div class="container">
    <h1><center><i>Location</i></center></h3>
    <p>Please fill out this form </p>
    <hr>

    <label for="email"><b>Car brand</b></label>
    <input type="text" placeholder="Enter marque" name="marque" required>
    <label for="email"><b>registration number</b></label>
    <input type="text" placeholder="Enter matricule" name="mat" required>
    
    <label for="psw"><b>date</b></label>
    <input type="date" placeholder="Enter date" name="date" required></br>

    <label for="psw-repeat"><b>city</b></label>
    <select name='ville'>
    <option>Casablanca</option>
    <option>Rabat</option>
    <option>Fes</option>
    <option>Marrakech</option>
    <option>El Jadida</option>
</select>  
    <hr>
   

   <center> <button type="submit" class="registerbtn">Get Location</button></center>
  </div>
  
  <div class="container signin">
    <p>back to welcome page? <a href="/">click here</a></p>
  </div>
</form>

</body>
</html>


 444444444444444


 

















<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body{
  margin-top: auto;
    background-color: #f1f1f1;
  }
  .border{
    border-bottom:1px solid #F1F1F1;
    margin-bottom:10px;
  }
  .main-secction{
    box-shadow: 10px 10px 10px;
  }
  .image-section{
    padding: 0px;
  }
  .image-section img{
    width: 100%;
    height:250px;
    position: relative;
  }
  .user-image{
    position: absolute;
    margin-top:-50px;
  }
  .user-left-part{
    margin: 0px;
  }
  .user-image img{
    width:100px;
    height:100px;
  }
  .user-profil-part{
    padding-bottom:30px;
    background-color:#FAFAFA;
  }
  .follow{    
    margin-top:70px;   
  }
  .user-detail-row{
    margin:0px; 
  }
  .user-detail-section2 p{
    font-size:12px;
    padding: 0px;
    margin: 0px;
  }
  .user-detail-section2{
    margin-top:10px;
  }
  .user-detail-section2 span{
    color:#7CBBC3;
    font-size: 20px;
  }
  .user-detail-section2 small{
    font-size:12px;
    color:#D3A86A;
  }
  .profile-right-section{
    padding: 20px 0px 10px 15px;
    background-color: #FFFFFF;  
  }
  .profile-right-section-row{
    margin: 0px;
  }
  .profile-header-section1 h1{
    font-size: 25px;
    margin: 0px;
  }
  .profile-header-section1 h5{
    color: #0062cc;
  }
  .req-btn{
    height:30px;
    font-size:12px;
  }
  .profile-tag{
    padding: 10px;
    border:1px solid #F6F6F6;
  }
  .profile-tag p{
    font-size: 12px;
    color:black;
  }
  .profile-tag i{
    color:#ADADAD;
    font-size: 20px;
  }
  .image-right-part{
    background-color: #FCFCFC;
    margin: 0px;
    padding: 5px;
  }
  .img-main-rightPart{
    background-color: #FCFCFC;
    margin-top: auto;
  }
  .image-right-detail{
    padding: 0px;
  }
  .image-right-detail p{
    font-size: 12px;
  }
  .image-right-detail a:hover{
    text-decoration: none;
  }
  .image-right img{
    width: 100%;
  }
  .image-right-detail-section2{
    margin: 0px;
  }
  .image-right-detail-section2 p{
    color:#38ACDF;
    margin:0px;
  }
  .image-right-detail-section2 span{
    color:#7F7F7F;
  }

  .nav-link{
    font-size: 1.2em;    
  }
  
</style>
<body>
    <div class="container main-secction">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 image-section">
                <img src="https://png.pngtree.com/thumb_back/fw800/back_pic/00/08/57/41562ad4a92b16a.jpg">
            </div>
            <div class="row user-left-part">
                <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                    <div class="row ">
                        <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                            <img src="https://www.jamf.com/jamf-nation/img/default-avatars/generic-user-purple.png" class="rounded-circle">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                           
                            <a href="/" class="btn btn-success btn-block follow">Retour</a>                     
                        </div>
                        
                       
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                    <div class="row profile-right-section-row">
                        <div class="col-md-12 profile-header">
                            <div class="row">
                                <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                    <h1>Amine Maslah</h1>
                                   
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                        <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                  <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><i class="fas fa-user-circle"></i> Profile user</a>
                                                </li>
                                                <li class="nav-item">
                                           
                                                </li>                                                
                                              </ul>
                                              
                                              <!-- Tab panes -->
                                              <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade show active" id="profile">
                                                        <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>ID:</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>
                                                                    @foreach ($location as $d)
          
          {{$d->id}}  


@endforeach       
                                                                    
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Email:</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>
                                                                    @foreach ($location as $d)
          
                                                                    {{$d->Email}}  

@endforeach  </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Nom Complet:</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>
                                                                    @foreach ($location as $d)

{{$d->Name}}  


@endforeach                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Telé:</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>
                                                                    @foreach ($location as $d)
          
                                                                    {{$d->Tele}}  


@endforeach </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label>Ville:</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                @foreach ($location as $d)
          
          {{$d->Ville}}  


@endforeach </p>
                                                                </div>
                                                            </div>
                                                </div>
                                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contact">Contactarme</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group">
                        <label for="txtFullname">Nombre completo</label>
                        <input type="text" id="txtFullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="txtEmail">Email</label>
                        <input type="text" id="txtEmail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="txtPhone">Teléfono</label>
                        <input type="text" id="txtPhone" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" (click)="openModal()" data-dismiss="modal">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</body>






++3+3+3+3+3+5151515

<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700|Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>

<section class="hero image-as-background" style="background-image: url('');">
  <div class="hero-container">
	<body>

    <p  id="demo" class="animate fadeInLeft delay-400">Mazgine cover hero style</p>
    <h1 class="hero-title animate fadeInLeft delay-600">This is a large hero section</h1>
		<button type="button" class="hero-button animate fadeInLeft delay-800" onclick="myFunction()">change here</button>




<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Paragraph changed.";
}
</script>



<p id="demo">This is a large hero section.</p>

 



  </div>





</section>

<style>
// vars
$font-sans-serif : 'Roboto Condensed', sans-serif;
$font-serif      : 'Playfair Display', serif;

.main-content {
  min-height: 1000px; // just for this pen
}

.hero {
	background-position: 50% 50%;
	background-repeat: no-repeat;
	background-size: cover;
  // needed to prevent janky scrolling in Safari
  backface-visibility: hidden;
  //100% height of the viewport
	height: 100vh;
	overflow: hidden;
	position: relative;
	width: 100%;
	
	@media screen and (min-width:640px) {
		background-position: 50% 0;
	}

	// Add a slight overlay on our image
	&:after {
		background-color: rgba(62,92,135,.5);
		bottom: 0;
		content: '';
		left: -2000%;
		position: absolute;
		right: -2000%;
		top: 0;
		z-index: 1;
	}
}

.hero-container {
	box-sizing: border-box;
	height: auto;
	padding: 30px 50px;
	position: relative;
	z-index: 2;
  
  // set our fade for when the JS kicks in on scroll
  -webkit-transition-timing-function: cubic-bezier(0.7,0,0.3,1);
    transition-timing-function: cubic-bezier(0.7,0,0.3,1);
    -webkit-transition-duration: 1.2s;
    transition-duration: 1.2s;
	
	@media screen and (min-width:640px) {
		height: 100%;
	}

	p {
		color: white;
		font-family: $font-sans-serif;
		font-size: 13px;
    font-weight: bold;
		letter-spacing: 6px;
    opacity: 0.8;
    text-transform: uppercase;
    text-align: left;
	}
}

.hero-button {
  background: rgba(255,255,255,0.8);
  color: #44575b;
  font-size: 24px;
  float: left;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-top: 30px;
  padding: 20px 90px;
  text-decoration: none;
}

.hero-title {
	color: white;
	font-family: $font-serif;
  // Respond to viewport width–works well since
  // we're sizing the image according viewport height
	font-size: 17vw; 
	font-weight: 500;
	letter-spacing: 1px;
  line-height: 1.1;
  margin: 5px 0;
  text-align: left;
  width: 85%;
  
  @media screen and (min-width:640px) {
		font-size: 10vw;
	}
}

.main-content {
  height: auto;
	padding: 30px 50px;
	position: relative;
  width: 60%;
}

.main-content p {
  color: #25373D;
  font-family: $font-serif;
  font-size: 18px;
  line-height: 1.5;
}

// Start Animation Tweaks
// Need to refactory and Sassify–just proof-of-concept and testing right now
// Basically tweaking transform, translates inside keyframes and adding delays

@keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-12px, 0, 0);
    //transform: translate3d(-100%, 0, 0);
    transform: translate3d(-12px, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
}

.animate {
    animation-duration: 0.75s;
    animation-fill-mode: both;
    animation-timing-function: cubic-bezier(0.2, 0.3, 0.25, 0.9);
}

.delay {
  animation-delay: 1s;
}

.delay-400 {
  animation-delay: 0.4s;
}

.delay-500 {
  animation-delay: 0.5s;
}

.delay-600 {
  animation-delay: 0.6s;
}

.delay-700 {
  animation-delay: 0.7s;
}

.delay-800 {
  animation-delay: 0.8s;
}
</style>
<script>
/**
 * Hero fade transition
 */
window.HeroFade_Object = {};
( function( window, $, that ) {

	// Constructor.
	that.init = function() {
		that.cache();

		if ( that.meetsRequirements ) {
			that.bindEvents();
		}
	};

	// Cache all the things.
	that.cache = function() {
		that.$c = {
			window: $(window),
			heroSelector: $( '.hero' ),
		};
	};

	// Combine all events.
	that.bindEvents = function() {
		that.$c.window.on( 'load', that.doHero );
	};

	// Do we meet the requirements?
	that.meetsRequirements = function() {
		return that.$c.heroSelector.length;
	};

	// Watch the user scroll position and fade the hero
	that.doHero = function() {
		  $(window).scroll(function(){
          // transition the fade by dividing div height & opacity
          $( ".hero" ).css("opacity", 1 - $(window).scrollTop() / $('.hero').height());
      });
	};

	// Engage!
	$( that.init );

})( window, jQuery, window.HeroFade_Object );

</script>

</div>
</body>
</html>
