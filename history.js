function showHistory(str) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onload=function() {
    if (this.status==200) {
      document.getElementById("history").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET",str.action+"?category="+str.search.value,true);
  xmlhttp.send();
}