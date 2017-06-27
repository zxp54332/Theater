$(document).ready(function() {
	$("#cover").click(function fun(e){
			var senderElement = e.target;
			$("#hid").fadeOut(500)
			$(this).fadeOut(500)
			document.getElementById("hid").innerHTML=""
			$("#hid").css("width","50%")
			$("#hid").css("margin","0% 25%")
		});
	$("#hid").click(function fun(e){
			e.stopPropagation()
		});
});
function _video(i)
{
	$("#cover").fadeIn(1000)
	$("#hid").css("top","105px")
	$("#hid").css("width","80%")
	$("#hid").css("margin","0% 10%")
	$("#hid").show(1000)
	if (window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();// code for IE7+, Firefox, Chrome, Opera, Safari
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");// code for IE6, IE5
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("hid").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET","ajax.php?q=1&video="+i,true);
	xmlhttp.send();
}
function _inform(i)
{
	$("#cover").fadeIn(1000)
	$("#hid").css("top","50px")
	$("#hid").css("margin","0% 25%")
	$("#hid").show(1000)
	if (window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();// code for IE7+, Firefox, Chrome, Opera, Safari
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");// code for IE6, IE5
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("hid").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET","ajax.php?q=2&inform="+i,true);
	xmlhttp.send();
}
function _book(i)
{
	$("#cover").fadeIn(1000)
	$("#hid").css("top","50px")
	$("#hid").css("width","80%")
	$("#hid").css("margin","0% 10%")
	$("#hid").show(1000)
	if (window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();// code for IE7+, Firefox, Chrome, Opera, Safari
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");// code for IE6, IE5
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("hid").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET","ajax.php?q=3&book="+i,true);
	xmlhttp.send();
}
var _seat
var seats
function choose_time()
{
	$("#hid").hide()
	$("#hid").css("width","50%")
	$("#hid").css("margin","0% 10%")
	$("#cover").fadeIn(1000)
	$("#hid").css("top","50px")
	$("#hid").css("width","80%")
	$("#hid").css("margin","0% 10%")
	$("#hid").show(1000)
	var i=document.getElementById("_date").value
	if (window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();// code for IE7+, Firefox, Chrome, Opera, Safari
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");// code for IE6, IE5
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("hid").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET","ajax.php?q=4&book="+i,true);
	xmlhttp.send();
	_seat=""
	seats=0;
}
function _choose(i)
{
	var splits = _seat.split(" ")
	var in_array=false
	for(var j=0;j<splits.length;j++)
	{
		if(i==splits[j])
		{
			in_array = true
		}
	}
	if(in_array)
	{
		_seat=" "
		for(var j=0;j<splits.length;j++)
		{
			if(i!=splits[j])
			{
				if(_seat==" ")
				{
					_seat = _seat + splits[j]
				}
				else
				{
					_seat = _seat + " " + splits[j]
				}
			}
		}
		seats--
		document.getElementById("_seat"+i).innerHTML="未選"
		document.getElementById("_seat"+i).style.color="#000"
	}
	else
	{
		if(_seat==" ")
		{
			_seat=_seat +i
		}
		else
		{
			_seat=_seat + ' ' + i
		}
		seats++
		document.getElementById("_seat"+i).innerHTML="預定"
		document.getElementById("_seat"+i).style.color="#FFF"
	}
}
function _seatverify(i)
{
	if(seats>5)
	{
		alert('最多選擇5個位置')
	}
	else if(seats>0)
	{
		$("#cover").fadeIn(1000)
		$("#hid").css("top","50px")
		$("#hid").css("width","80%")
		$("#hid").css("margin","0% 10%")
		$("#hid").show(1000)
		if (window.XMLHttpRequest)
		{
			xmlhttp = new XMLHttpRequest();// code for IE7+, Firefox, Chrome, Opera, Safari
		}
		else
		{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");// code for IE6, IE5
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("hid").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET","ajax.php?q=5&seat="+_seat+"&seats="+seats+"&book="+i,true);
		xmlhttp.send();
	}
	else
	{
		alert('請選擇座位')
	}
}
function _fillinformation(aa,bb,cc)
{
		$("#cover").fadeIn(1000)
		$("#hid").css("top","50px")
		$("#hid").css("width","80%")
		$("#hid").css("margin","0% 10%")
		$("#hid").show(1000)
		if (window.XMLHttpRequest)
		{
			xmlhttp = new XMLHttpRequest();// code for IE7+, Firefox, Chrome, Opera, Safari
		}
		else
		{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");// code for IE6, IE5
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("hid").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET","ajax.php?q=6&seat="+aa+"&seats="+bb+"&book="+cc,true);
		xmlhttp.send();
}
function _searc()
{
	var sear = document.getElementById('_search').value
	$("#cover").fadeIn(1000)
	$("#hid").css("top","50px")
	$("#hid").css("width","80%")
	$("#hid").css("margin","0% 10%")
	$("#hid").show(1000)
	if (window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();// code for IE7+, Firefox, Chrome, Opera, Safari
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");// code for IE6, IE5
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("hid").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET","ajax.php?q=7&_search="+sear,true);
	xmlhttp.send();
}