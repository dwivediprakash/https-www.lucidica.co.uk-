var d1, d2, d3, d4, d5, d6, d7, d8, d9, d10, d11, d12, d13, d14, d15, d16, d17, d18, d19, d20, d21, d22, d23, d24, d25=0;
var i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25=0;
var s1, s2, s3, s4, s5, s6, s7, s8, s9, s10, s11, s12, s13, s14, s15, s16, s17, s18, s19, s20, s21, s22, s23, s24, s25=0;
var c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12, c13, c14, c15, c16, c17, c18, c19, c20, c21, c22, c23, c24, c25=0;
document.getElementById("name").maxLength = "30";
document.getElementById("email").maxLength = "30";
document.getElementById("position").maxLength = "30";

// document.getElementById("name").required = true;
// document.getElementById("email").required = true;
// document.getElementById("position").required = true;

// document.getElementById("name").required = true;
// document.getElementById("email").required = true;
// document.getElementById("position").required = true;



function Scoring() {

        if (document.form1.Q1M[0].checked)
                i1=4;
                else i1=0;
        if (document.form1.Q1M[1].checked)
                s1=4;
                else s1=0;
        if (document.form1.Q1M[2].checked)
                c1=4;
                else c1=0;
        if (document.form1.Q1M[3].checked)
                d1=4;
                else d1=0;
                
        if (document.form1.Q2M[0].checked)
                d2=4;
                else d2=0;
        if (document.form1.Q2M[1].checked)
                i2=4;
                else i2=0;
        if (document.form1.Q2M[2].checked)
                s2=4;
                else s2=0;
        if (document.form1.Q2M[3].checked)
                c2=4;
                else c2=0;
                
        if (document.form1.Q3M[0].checked)
                s3=4;
                else s3=0;
        if (document.form1.Q3M[1].checked)
                c3=4;
                else c3=0;
        if (document.form1.Q3M[2].checked)
                d3=4;
                else d3=0;
        if (document.form1.Q3M[3].checked)
                i3=4;
                else i3=0;

        if (document.form1.Q4M[0].checked)
                c4=4;
                else c4=0;
        if (document.form1.Q4M[1].checked)
                d4=4;
                else d4=0;
        if (document.form1.Q4M[2].checked)
                i4=4;
                else i4=0;
        if (document.form1.Q4M[3].checked)
                s4=4;
                else s4=0;
                
        if (document.form1.Q5M[0].checked)
                c5=4;
                else c5=0;
        if (document.form1.Q5M[1].checked)
                d5=4;
                else d5=0;
        if (document.form1.Q5M[2].checked)
                s5=4;
                else s5=0;
        if (document.form1.Q5M[3].checked)
                i5=4;
                else i5=0;

        if (document.form1.Q6M[0].checked)
                s6=4;
                else s6=0;
        if (document.form1.Q6M[1].checked)
                i6=4;
                else i6=0;
        if (document.form1.Q6M[2].checked)
                c6=4;
                else c6=0;
        if (document.form1.Q6M[3].checked)
                d6=4;
                else d6=0;

        if (document.form1.Q7M[0].checked)
                d7=4;
                else d7=0;
        if (document.form1.Q7M[1].checked)
                c7=4;
                else c7=0;
        if (document.form1.Q7M[2].checked)
                s7=4;
                else s7=0;
        if (document.form1.Q7M[3].checked)
                i7=4;
                else i7=0;

        if (document.form1.Q8M[0].checked)
                i8=4;
                else i8=0;
        if (document.form1.Q8M[1].checked)
                s8=4;
                else s8=0;
        if (document.form1.Q8M[2].checked)
                c8=4;
                else c8=0;
        if (document.form1.Q8M[3].checked)
                d8=4;
                else d8=0;

        if (document.form1.Q9M[0].checked)
                s9=4;
                else s9=0;
        if (document.form1.Q9M[1].checked)
                c9=4;
                else c9=0;
        if (document.form1.Q9M[2].checked)
                d9=4;
                else d9=0;
        if (document.form1.Q9M[3].checked)
                i9=4;
                else i9=0;
                
        if (document.form1.Q10M[0].checked)
                c10=4;
                else c10=0;
        if (document.form1.Q10M[1].checked)
                s10=4;
                else s10=0;
        if (document.form1.Q10M[2].checked)
                i10=4;
                else i10=0;
        if (document.form1.Q10M[3].checked)
                d10=4;
                else d10=0;

        if (document.form1.Q11M[0].checked)
                d11=4;
                else d11=0;
        if (document.form1.Q11M[1].checked)
                i11=4;
                else i11=0;
        if (document.form1.Q11M[2].checked)
                s11=4;
                else s11=0;

        if (document.form1.Q11M[3].checked)
                c11=4;
                else c11=0;
                
        if (document.form1.Q12M[0].checked)
                i12=4;
                else i12=0;
        if (document.form1.Q12M[1].checked)
                s12=4;
                else s12=0;
        if (document.form1.Q12M[2].checked)
                c12=4;
                else c12=0;
        if (document.form1.Q12M[3].checked)
                d12=4;
                else d12=0;
                
        if (document.form1.Q13M[0].checked)
                s13=4;
                else s13=0;
        if (document.form1.Q13M[1].checked)
                c13=4;
                else c13=0;
        if (document.form1.Q13M[2].checked)
                d13=4;
                else d13=0;
        if (document.form1.Q13M[3].checked)
                i13=4;
                else i13=0;

        if (document.form1.Q14M[0].checked)
                c14=4;
                else c14=0;
        if (document.form1.Q14M[1].checked)
                d14=4;
                else d14=0;
        if (document.form1.Q14M[2].checked)
                i14=4;
                else i14=0;
        if (document.form1.Q14M[3].checked)
                s14=4;
                else s14=0;

        if (document.form1.Q15M[0].checked)
                d15=4;
                else d15=0;
        if (document.form1.Q15M[1].checked)
                i15=4;
                else i15=0;
        if (document.form1.Q15M[2].checked)
                s15=4;
                else s15=0;
        if (document.form1.Q15M[3].checked)
                c15=4;
                else c15=0;
                
        if (document.form1.Q16M[0].checked)
                c16=4;
                else c16=0;
        if (document.form1.Q16M[1].checked)
                d16=4;
                else d16=0;
        if (document.form1.Q16M[2].checked)
                s16=4;
                else s16=0;
        if (document.form1.Q16M[3].checked)
                i16=4;
                else i16=0;
                
        if (document.form1.Q17M[0].checked)
                i17=4;
                else i17=0;
        if (document.form1.Q17M[1].checked)
                s17=4;
                else s17=0;
        if (document.form1.Q17M[2].checked)
                d17=4;
                else d17=0;
        if (document.form1.Q17M[3].checked)
                c17=4;
                else c17=0;
                
        if (document.form1.Q18M[0].checked)
                s18=4;
                else s18=0;
        if (document.form1.Q18M[1].checked)
                i18=4;
                else i18=0;
        if (document.form1.Q18M[2].checked)
                c18=4;
                else c18=0;
        if (document.form1.Q18M[3].checked)
                d18=4;
                else d18=0;
                
        if (document.form1.Q19M[0].checked)
                d19=4;
                else d19=0;
        if (document.form1.Q19M[1].checked)
                c19=4;
                else c19=0;
        if (document.form1.Q19M[2].checked)
                i19=4;
                else i19=0;
        if (document.form1.Q19M[3].checked)
                s19=4;
                else s19=0;
                
        if (document.form1.Q20M[0].checked)
                s20=4;
                else s20=0;
        if (document.form1.Q20M[1].checked)
                c20=4;
                else c20=0;
        if (document.form1.Q20M[2].checked)
                d20=4;
                else d20=0;
        if (document.form1.Q20M[3].checked)
                i20=4;
                else i20=0;
                
        if (document.form1.Q21M[0].checked)
                i21=4;
                else i21=0;
        if (document.form1.Q21M[1].checked)
                s21=4;
                else s21=0;
        if (document.form1.Q21M[2].checked)
                c21=4;
                else c21=0;
        if (document.form1.Q21M[3].checked)
                d21=4;
                else d21=0;

        if (document.form1.Q22M[0].checked)
                s22=4;
                else s22=0;
        if (document.form1.Q22M[1].checked)
                c22=4;
                else c22=0;
        if (document.form1.Q22M[2].checked)
                d22=4;
                else d22=0;
        if (document.form1.Q22M[3].checked)
                i22=4;
                else i22=0;
                
        if (document.form1.Q23M[0].checked)
                c23=4;
                else c23=0;
        if (document.form1.Q23M[1].checked)
                d23=4;
                else d23=0;
        if (document.form1.Q23M[2].checked)
                i23=4;
                else i23=0;
        if (document.form1.Q23M[3].checked)
                s23=4;
                else s23=0;

        if (document.form1.Q24M[0].checked)
                d24=4;
                else d24=0;
        if (document.form1.Q24M[1].checked)
                i24=4;
                else i24=0;
        if (document.form1.Q24M[2].checked)
                s24=4;
                else s24=0;
        if (document.form1.Q24M[3].checked)
                c24=4;
                else c24=0;

        if (document.form1.Q25M[0].checked)
                c25=4;
                else c25=0;
        if (document.form1.Q25M[1].checked)
                d25=4;
                else d25=0;
        if (document.form1.Q25M[2].checked)
                s25=4;
                else s25=0;
        if (document.form1.Q25M[3].checked)
                i25=4;
                else i25=0;

        Calculate();
        }
        
        
function Calculate() {

var dominance = d1 + d2 + d3 + d4 + d5 + d6 + d7 + d8 + d9 + d10 + d11 + d12 + d13 + d14 + d15 + d16 + d17 + d18 + d19 + d20 + d21 + d22 + d23 + d24 + d25;
var influence = i1 + i2 + i3 + i4 + i5 + i6 + i7 + i8 + i9 + i10 + i11 + i12  + i13 + i14 + i15 + i16 + i17 + i18 + i19 + i20 + i21 + i22 + i23 + i24 + i25;
var steadiness = s1 + s2 + s3 + s4 + s5 + s6 + s7 + s8 + s9 + s10 + s11 + s12 + s13 + s14 + s15 + s16 + s17 + s18 + s19 + s20 + s21 + s22 + s23 + s24 + s25;
var compliance = c1 + c2 + c3 + c4 + c5 + c6 + c7 + c8 + c9 + c10 + c11 + c12 + c13 + c14 + c15 + c16 + c17 + c18 + c19 + c20 + c21 + c22 + c23 + c24 + c25;;

var output = " "
  output = ("DOMINANCE  =  " + dominance +
   "      INFLUENCE  =  "  + influence +  
   "      STEADINESS  =  "  + steadiness +  
   "      COMPLIANCE  =  "  + compliance + "   ");
  dominance=0; influence=0; steadiness=0; compliance=0;
  $( '#hiddenmessage' ).val( output );
}
        

function right(e) {
if (navigator.appName == 'Netscape' && 
(e.which == 3 || e.which == 2))
return false;
else if (navigator.appName == 'Microsoft Internet Explorer' && 
(event.button == 2 || event.button == 3)) {
alert("Sorry, right click has been disabled.");
return false;
}
return true;
}

document.onmousedown=right;
document.onmouseup=right;
if (document.layers) window.captureEvents(Event.MOUSEDOWN);
if (document.layers) window.captureEvents(Event.MOUSEUP);
window.onmousedown=right;
window.onmouseup=right;

function preventNumberInput(e) {
  var keyCode = (e.keyCode ? e.keyCode : e.which);
  if (keyCode > 47 && keyCode < 58) {
    e.preventDefault();
  }
}

function myTrim(x) {
    return x.replace(/^\s+|\s+$/gm,'');
}

$("document").ready(function () {


$('#name').keypress(function(e) {
        preventNumberInput(e);
    });

$('#position').keypress(function(e) {
        preventNumberInput(e);
    });
    
// $("#send_ajax").click(function validate(x) {
//  x = dannie;
//  if(dannie.match(/[`~,<>;':"\/\[\]\|{}()-=_+]/)){
//   dannie.classList.add("invalid");
//   alert("$dannie is not valid");
//   }else{
//   dannie.classList.add("valid");
//   }
// });

  // alert(name);

// if(name.match(/[`~,.<>;':"\/\[\]\|{}()-=_+]/)){
//   document.getElementById("name").classList.add("invalid");
//   alert("Name not valid");
// }else{
//     document.getElementById("name").classList.add("valid");
// }
// else if(email.match(/[`~,<>;':"\/\[\]\|{}()-=_+]/)){
//  document.getElementById("email").classList.add("invalid");
//  alert("Name not valid");
// }
// else if(position.match(/[`~,.<>;':"\/\[\]\|{}()-=_+]/)){
//  document.getElementById("position").classList.add("invalid");
//  alert("Position not valid");
// }



$("#send_ajax").click(function (e) {
    e.preventDefault();
    var dannie = $("form").serialize();

    Scoring();

    var name = document.getElementById("name").value,
      email = document.getElementById("email").value,
      position = document.getElementById("position").value,
      message = document.getElementById("hiddenmessage").value;

    name = myTrim(name);
    email = myTrim(email);
    position = myTrim(position);
    message = myTrim(message);
    

// aw0@ukr.net
if((name === "") || (position === "") || (message === "")){
  alert("Empty values doesn`t allowed");
}else{
  $.ajax({
      method: "POST",
      url: "feedback_ajax.php",
      data: {
        name: name,
        email: email,
        position: position,
        message: message
      }
    })
    .done(function( msg ) {
      document.getElementById("name").value = '';
      document.getElementById("email").value = '';
      document.getElementById("position").value = '';
      document.getElementById("hiddenmessage").value = '';
      // console.log("name,email,position,message");
      // console.log(name);
      // console.log(email);
      // console.log(position);
      // console.log(message);
    });
}

    

  });

});