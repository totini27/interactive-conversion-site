function isValid(){

	var category = document.forms["conversion-rate"]["category"].value;
	var unit = document.forms["conversion-rate"]["unit"].value;
	var rate = document.forms["conversion-rate"]["rate"].value;


	var flag = true;



	if (category == "") {
		document.getElementById('categoryErr').innerHTML = 'Field cannot be empty';
		flag = false;
	}
	else{
		document.getElementById('categoryErr').innerHTML = '';
	}




	if (unit == "") {
		document.getElementById('unitErr').innerHTML = 'Field cannot be empty';
		flag = false;

	}
	else{
		document.getElementById('unitErr').innerHTML = '';

	}

	if (rate == "") {
		document.getElementById('rateErr').innerHTML = 'Field cannot be empty';
		flag = false;

	}
	else{
		document.getElementById('rateErr').innerHTML = '';

	}

	if (flag) {
		var xmlhttp=new XMLHttpRequest();
  		xmlhttp.onload=function() {
    		if (this.status==200) {
      		document.getElementById('message').innerHTML =this.responseText;
      
    		}
 		 }
  		xmlhttp.open("GET","conversion-rate-store.php?category="+category+"&unit="+unit+"&rate="+rate,true);
  		xmlhttp.send();

	}


}