

//vaild add product 

function validaddp(){

var frm_elementn= document.getElementById('txtpname');
	var frm_elementd= document.getElementById('txtpdes');
	// var frm_elementc= document.getElementById('txtcate');
	var frm_elementp= document.getElementById('txtprice');
	var frm_elementq= document.getElementById('txtqty');
	var frm_elementi= document.getElementById('txtpimg');
	
	
	
if ((frm_elementn.value.length<1) ||
	(frm_elementd.value.length<1) ||
	// (document.form.txtcate.selectedIndex == 0 ) || (document.form.txtcate.selectedIndex == '' ) ||
	(frm_elementp.value.length<1) ||
	(frm_elementq.value.length<1) ||
	(frm_elementi.value.length<1))

{
	alert("Please fill out all the fields.");
		 var submit=false;

}
	
	
else

{

		var submit = true;
		var form = document.forms[0];
		var frm_elementq= document.getElementById('txtqty');
	
		
		var quantity = frm_elementq;
		
		
		var filter = /^[-]?\d*\.?\d*$/;
		if (!filter.test(quantity.value) ) 

	{

	
alert("Please fill only numeric values in quantity fields.");
return false;

}

else {
	var submit=true; }
	
	
	
var submit = true;
		var form = document.forms[0];
		
		var frm_elementp= document.getElementById('txtprice');
		
		
		var price = frm_elementp;
		
		var filter = /^[-]?\d*\.?\d*$/;
		if (!filter.test(price.value) ) 

	{
	
	
	
alert("Please fill only numeric values in price fields.");
return false;

}

else {
	var submit=true; }	
	

}



if (submit) {

return true ;

}

else {return false;} 




}


//vaild add product edit

function editaddp(){

var frm_elementn= document.getElementById('txtpname');
	var frm_elementd= document.getElementById('txtpdes');
	var frm_elementp= document.getElementById('txtprice');
	var frm_elementq= document.getElementById('txtqty');
	
	
	
if ((frm_elementn.value.length<1) ||
	(frm_elementd.value.length<1) ||
	(frm_elementp.value.length<1) ||
	(frm_elementq.value.length<1))

{
	alert("Please fill out all the fields.");
		 var submit=false;

}
	
	
else

{

		var submit = true;
		var form = document.forms[0];
		var frm_elementq= document.getElementById('txtqty');
	
		
		var quantity = frm_elementq;
		
		
		var filter = /^[-]?\d*\.?\d*$/;
		if (!filter.test(quantity.value) ) 

	{

	
alert("Please fill only numeric values in quantity fields.");
return false;

}

else {
	var submit=true; }
	
	
	
var submit = true;
		var form = document.forms[0];
		
		var frm_elementp= document.getElementById('txtprice');
		
		
		var price = frm_elementp;
		
		var filter = /^[-]?\d*\.?\d*$/;
		if (!filter.test(price.value) ) 

	{
	
	
	
alert("Please fill only numeric values in price fields.");
return false;

}

else {
	var submit=true; }	
	

}



if (submit) {

return true ;

}

else {return false;} 




}


//vaild categories & Payment
function validcat(){

var frm_elementn= document.getElementById('name');
	if (frm_elementn.value.length < 1)
	{
		alert("Please fill require field.");
		return false;
	}
	else
	{
		return true;
	}
}

//vaild categories edit

function editcat(){

var frm_elementen= document.getElementById('categoriesname');
	if(frm_elementen.value.length<1){
		alert("Please fill require field.");
		return false;
	}
	else{
		return true;
	}
}

//Admin Customer

function validcus() {

	var frm_elementf= document.getElementById('txtfirstname');
	var frm_elementl= document.getElementById('txtlastname');
	var frm_elemente= document.getElementById('txtemail');
	var frm_elementa= document.getElementById('txtaddress');
	var frm_elementse= document.getElementById('sex');
	var frm_elementc= document.getElementById('txtpostcode');
	var frm_elementci= document.getElementById('txtcity');
	var frm_elementp= document.getElementById('txtphone');
	var frm_elementfa= document.getElementById('txtfax');
	var frm_elementpw= document.getElementById('txtpwd');
	
	
	if ((frm_elementf.value.length < 1 ) ||
	(frm_elementl.value.length < 1) || 
	(frm_elemente.value.length < 1) || 
	(frm_elementa.value.length < 1) ||
	//(frm_elementse.value.length < 0) || 
	(frm_elementse.value.length =='') || 
	//((document.form.sex[0].checked == false ) && ( document.form.sex[1].checked == false )) ||
	(document.form.txtcountry.selectedIndex == 0 ) || (document.form.txtcountry.selectedIndex == '' ) ||
	(frm_elementc.value.length < 1) || 
	(frm_elementci.value.length < 1) || 
	(frm_elementp.value.length < 1) || 
	(frm_elementpw.value.length < 1) || 
	(frm_elementfa.value.length < 1) 
	)
	{				
		alert("Please fill out all the fields.");
		 return false;
	}
	else
	{
		return true;
	}
}

function validorder(){

var frm_elementqty= document.getElementById('txtqty');
var frm_elementtxts= document.getElementById('txtsubtotal');
var frm_elementtxt= document.getElementById('txttax');
var frm_elementship= document.getElementById('txtshipment');
var frm_elementpay= document.getElementById('txtpayment');
var frm_elementsta= document.getElementById('txtstatus');
if ((frm_elementqty.value.length== '') ||
(frm_elementtxts.value.length== '') ||
(frm_elementtxt.value.length== '') ||
(frm_elementship.value.length== '') ||
(frm_elementpay.value.length== '') ||
(frm_elementsta.value.length== '') ){

alert("Please fill require field.");
return false;
}
else{
return true;
}

}

//vaild shipment

function validship(){

var frm_elementn= document.getElementById('name');
var frm_elementr= document.getElementById('rate');
if ((frm_elementn.value.length<1) ||
	(frm_elementr.value.length<1) ){
	alert("Please fill require field.");
	return false;
}
else{
	return true;
}


}