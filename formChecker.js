/*
	author: Austin Irvine
	file      : formChecker.js
	date   : October 5, 2017
	brief   : validates input before submitting, quantities can be blank,
				username must be in email address form, password can be anything but blank,
				shipping option is required
*/
var msg = "";

function checkInput()
{
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var qEggs = document.getElementById("qEggs").value;
	var qMilk = document.getElementById("qMilk").value;
	var qBread = document.getElementById("qBread").value;
	var qSoul = document.getElementById("qSoul").value;
	var shipping = document.getElementById("shipping");

	msg = "Fix the following to place your order: ";
	//username check
	//password check
	//quantity check
	//item check
	//shipping check
	var babyCounter = 0;
	if(userCheck(username))
	{
		babyCounter++;
	}
	if(passCheck(password))
	{
		babyCounter++;
	}
	if(quantityCheck(qEggs, qMilk, qBread, qSoul))
	{
		babyCounter++;
	}


	if(babyCounter == 3)
	{
		//YAY!
		alert("Order Confirmed For: "+username+"!");
		return true;
	}
	else {
		alert(msg + "|");
	}

	return false;
}

/*
 -- Snippet From : https://stackoverflow.com/questions/16424659/check-if-a-string-contains-an-email-address
     User: dave
	 He used a type of regex
*/
function userCheck(username)
{
	var check = false;

	var emailsArray = username.match(/([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9._-]+)/gi);
	if (emailsArray != null && emailsArray.length) {
		check = true;
	}
	else {
		msg += "\nUsername should look like user@domain.com | ";
	}

	return check;
}

function passCheck(password)
{
	var check = false;

	if(password != "")
	{
		check = true;
	}
	else {
		msg += "\nPassword slot must be non-empty | ";
	}

	return check;
}

function quantityCheck(qEggs, qMilk, qBread, qSoul)
{
	var check = false;
	var lengthChecker = 0;

	var qECheck = qEggs.match(/([0-9._-])/gi);
	var qMCheck = qMilk.match(/([0-9._-])/gi);
	var qBCheck = qBread.match(/([0-9._-])/gi);
	var qSCheck = qSoul.match(/([0-9._-])/gi);
	if ((qECheck != null || qEggs.length == 0) && (qMCheck != null || qMilk.length == 0) && (qBCheck != null || qBread.length == 0) && (qSCheck != null || qSoul.length == 0))
	{
		check = true;
	}
	else {
		msg += "\nQuantities of product should be number values or empty | ";
	}

	return check;
}

function Reset()
{
	document.getElementById("form1").reset();
	alert("Order Has Been Reset!");
}
