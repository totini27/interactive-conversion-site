function isValid(){

	var value = document.forms["home"]["value"].value;
	var converter = document.forms["home"]["converter"].value;

	var flag = true;



	if (value == "") {
		document.getElementById('valueErr').innerHTML = 'Please Enter a value';
		flag = false;
	}
	else{
		document.getElementById('valueErr').innerHTML = '';
	}




	if (converter == "Choose One") {
		document.getElementById('converterErr').innerHTML = 'Please select a conversion';
		flag = false;

	}
	else{
		document.getElementById('converterErr').innerHTML = '';

	}

	if (flag) {
		var xmlhttp=new XMLHttpRequest();
  		xmlhttp.onload=function() {
    		if (this.status==200) {
      		document.forms["home"]["result"].value =this.responseText;
      
    		}
 		 }
  		xmlhttp.open("GET","home-calculation.php?converter="+converter+"&value="+value,true);
  		xmlhttp.send();

	}


}