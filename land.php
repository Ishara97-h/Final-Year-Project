<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  font-family: 'Waiting for the Sunrise', cursive; 
  font-size:30px; 
  margin: 80px 600px; 
  letter-spacing: 6px; 
  font-weight: bold;
  color:blue;
}
    </style>
    <script type="text/javascript" src="moveobj.js"> </script>
<script type="text/javascript">

/***********************************************
* Floating image script- By Virtual_Max (http://www.geocities.com/siliconvalley/lakes/8620)
* Modified by Dynamic Drive for various improvements
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

//Step 1: Define unique variable names depending on number of flying images (ie:3):
var flyimage1, flyimage2, flyimage3

function pagestart(){
//Step 2: Using the same variable names as 1), add or delete more of the below lines (60=width, height=80 of image):
 flyimage1=new Chip("flyimage1",47,68);
 flyimage2=new Chip("flyimage2",47,68);
 flyimage3=new Chip("flyimage3",47,68);


//Step 3: Using the same variable names as 1), add or delete more of the below lines:
movechip("flyimage1");
movechip("flyimage2");
movechip("flyimage3");

}

if (window.addEventListener)
window.addEventListener("load", pagestart, false)
else if (window.attachEvent)
window.attachEvent("onload", pagestart)
else if (document.getElementById)
window.onload=pagestart

</script>
</head>
<body>
<div id="typedtext"></div>
<script>
    var aText = new Array(
"ANESCARE"
);
var iSpeed = 100; // time delay of print out
var iIndex = 0; // start printing array at this posision
var iArrLength = aText[0].length; // the length of the text array
var iScrollAt = 20; // start scrolling up at this many lines
 
var iTextPos = 0; // initialise text position
var sContents = ''; // initialise contents variable
var iRow; // initialise current row
 
function typewriter()
{
 sContents =  ' ';
 iRow = Math.max(0, iIndex-iScrollAt);
 var destination = document.getElementById("typedtext");
 
 while ( iRow < iIndex ) {
  sContents += aText[iRow++] + '<br />';
 }
 destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "";
 if ( iTextPos++ == iArrLength ) {
  iTextPos = 0;
  iIndex++;
  if ( iIndex != aText.length ) {
   iArrLength = aText[iIndex].length;
   setTimeout("typewriter()", 500);
  }
 } else {
  setTimeout("typewriter()", iSpeed);
 }
}



typewriter();
</script>

<!-- Step 4: Define your flying images. For each image's ID tag, use the same variable names as 1) above -->

<DIV ID="flyimage1" STYLE="position:absolute; left: -500px; width:47; height:68;">
<A HREF="http://dynamicdrive.com"><IMG SRC="test.gif" BORDER=0></a>
</DIV>

<DIV ID="flyimage2" STYLE="position:absolute; left: -500px; width:47; height:68;">
<A HREF="http://dynamicdrive.com"><IMG SRC="test.gif" BORDER=0></a>
</DIV>

<DIV ID="flyimage3" STYLE="position:absolute; left: -500px; width:47; height:68;">
<A HREF="http://dynamicdrive.com"><IMG SRC="test.gif" BORDER=0></a>
</DIV>
</body>
</html>