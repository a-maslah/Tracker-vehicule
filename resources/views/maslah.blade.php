<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Abril+Fatface|Josefin+Sans|Josefin+Slab" />
</head>

<body>
<style>
body {
  background-color: #002136;
  margin: 0 auto;
}

.container {
  width: 375px;
  height: 710px;
  margin: 0px auto;
}

.container:hover .circle2 {
  animation: 2s corner forwards;
}

.container:hover .circle {
  transform: scale(0);
}

.container:hover .titles {
  transform: translateY(-80px);
  transition: 1s;
}

.container:hover #bio {
  opacity: 0;
  transition: 1s;
}

.container:hover #bio-expand {
  opacity: 1;
  transition: 2s;
  transform: translateY(-50px);
}

.container:hover .social,
.container:hover .contact {
  transform: translateY(20px);
  transition: 1s;
}

.circle {
  width: 180px;
  height: 180px;
  margin: 100px auto;
  border-radius: 50%;
  overflow: hidden;
  border-radius: 50%;
  border: 5px solid rgba(255, 0, 0, 0.7);
  position: relative;
  z-index: 5;
  opacity: 0;
  
  animation: 2s grande forwards;
  animation-delay: 1.5s;
}

.circle img, .circle2 img {
  width: 150%;
  height: 150%;
  margin-left: -70px;
}

.circle2 {
  width: 150px;
  height: 150px;
  margin: 0px auto;
  border-radius: 50%;
  overflow: hidden;
  border-radius: 50%;
  border: 5px solid rgba(255, 0, 0, 0.7);
  position: relative;
  top: -290px;
  left: 0px;
  z-index: 3;
  opacity: 0;
}

.card {
  width: 375px;
  height: 500px;
  margin: 0 auto;
  padding: 100px 10px 5px 10px;
  outline: 1px dashed #98abb9;
  outline-offset: -5px;
  box-sizing: border-box;
  background:  #726667;
  -webkit-box-shadow: 8px 8px 25px 0px rgba(48, 48, 48, 1);
  -moz-box-shadow: 8px 8px 25px 0px rgba(48, 48, 48, 1);
  box-shadow: 8px 8px 25px 0px rgba(48, 48, 48, 1);
  position: relative;
  top: -375px;
  z-index: 0;
  
  animation: 1s rise forwards;
}

.text {
  opacity: 0;
  animation: 2s appear forwards;
  animation-delay: 3.5s;
}

h1 {
  font-family: "Abril Fatface", cursive;
  font-size: 28px;
  line-height: 28px;
  text-align: center;
  color: coral;
}

h2 {
  font-family: "Josefin Sans", cursive;
  font-size: 17px;
  line-height: 23px;
  text-align: center;
  color: orange;
}

h3 {
  width: 300px;
  margin: 0 auto;
  font-family: "Josefin Slab", serif;
  font-size: 14px;
  line-height: 17px;
  text-align: center;
  color: #8BC34A;
}

#bio {
  font-size: 14px;
  opacity: 1;
}

#bio-expand {
  opacity: 0;
  position: relative;
}

p {
  font-family: "Josefin Slab", cursive;
  font-size: 14px;
  line-height: 17px;
  text-align: center;
  color: coral;
}

.contact {
  margin-top: -25px;
  font-family: "Josefin Slab", cursive;
  font-size: 14px;
  line-height: 18px;
  text-align: center;
  color: coral;
  background-color: transparent;
  text-decoration: none
}

.social {
  width: 363px;
  height: 95px;
  margin: 0px auto;
  font-size: 28px;
  display: inline-block;
  position: relative;
  z-index: 3;
}

.one:hover,
.two:hover,
.three:hover {
  transform: scale(1.5);
  transition: 0.5s;
}

.one {
  width: 118px;
  padding-top: 30px;
  text-align: center;
  float: left;
}

.two {
  width: 118px;
  padding-top: 30px;
  text-align: center;
  float: left;
}

.three {
  width: 118px;
  padding-top: 30px;
  text-align: center;
  float: left;
}

a {
  color: gold;
  background-color: transparent;
  text-decoration: none
}

.social a {
  color: darkslateblue;
}

a:hover {
  color: lightcoral;
  transform: scale(1.5);
}



/* KEYFRAMES */

/* card */
@keyframes rise {
  0% {
    transform: translateY(-800px);
  }
  50% {
    transform: translateY(400px);
  }
  100% {
    transform: translateY(0px);
  }
}

/* text */
@keyframes appear {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

/* circle */
@keyframes grande {
  0% {
    opacity: 0;
  }
  25% {
    opacity: 0.25;
    transform: scale(2);
  }
  50% {
    opacity: 0.5;
    transform: scale(0.5) rotate(180deg);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

/* circle2 */
@keyframes corner {
  0% {opacity: 1; scale(1);}
  100% {opacity: 1; transform: translate(-175px, 10px) scale(0.5);}
}
</style>
  <div class="container">
    <div class="circle"><img src="https://a.top4top.net/p_11433ufnn1.jpg" /></div>
    <div class="circle2"><img src="https://a.top4top.net/p_11433ufnn1.jpg"/></div>
    
    
    <div class="card">
      <div class="text">

        <div class="titles">
          <h1>User Profile </h1>
          <h2></h2>
        </div>

        <br />
        <h3 id="bio">About Me</h3>
        <h3 id="bio-expand">Hello Amine Maslah</h3>
        <br />

        <div class="contact">
         <i class="fa fa-graduation-cap" aria-hidden="true">  <h3> @foreach ($location as $d)
          
          {{$d->Email}}  

@endforeach </h3></i>
          <br />
          <i class="fa fa-map-marker" aria-hidden="true"><h3>  @foreach ($location as $d)
          
          {{$d->Ville}}  


@endforeach </h3> </i>
          <br />
          <i class="fa fa-envelope-o" aria-hidden="true"><h3>  @foreach ($location as $d)
          
          {{$d->Tele}}  


@endforeach</h3></i>  <br />
        </div>

        <br />
        <div class="social">

          <div class="one"><a href="/" target="_blank"><i>Retour</i>

          <div class="two"><a href="" target="_blank"><i class="fa fa-codepen" aria-hidden="true"></i></a></div>

          <div class="three"><a href="" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
        </div>
      </div>
    </div>

  </div>
</body>