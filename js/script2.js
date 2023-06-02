
	// document.getElementById("submit_new_user").disabled = true;   //disabler submit knapp
	
//-----------------------------------------------------------------------------------------------------------------

function submit_new_user(){

	console.log("dette skjer1");

	var firstname 	= document.getElementById("firstname").value;		
	var lastname	= document.getElementById("lastname").value;
	var nickname	= document.getElementById("nickname").value;
	var email		= document.getElementById("email").value;
	var passw		= document.getElementById("passw").value;

	console.log("dette skjer2");

	//Lage objekt vi skal sende til php script.
	var dataObjectNewUser = { 	firstname		:	firstname,
								lastname 		:	lastname,						
								nickname 		:	nickname,
								email 			:	email,
								passw 		    :	passw
								};
		


	postDataNewUser(dataObjectNewUser);

	console.log("dette skjer3");
}
//--------------------------------------------------------------------------------------------------------------------------------------------

function postDataNewUser(dataobj){
			
						
						$.ajax({ type: "POST",
								 								
 								url	: "some_register_new_user2.php",  
								// url		: "dummyblank.php",
								data	: dataobj,				//objektet med variabler vi sender over til php script
								cache	: false,
								success	: function(response)			
								{									
									 console.log(response);   		//Bra � sjekke respons i console n�r man utvikler	  
									 clear_textboxes();	 		 //Kj�r funksjon som blanker tekstbokser	

								}
							});
					
					


					}


	
//--------------------------------------------------------------------------------------------------------------------------------------------


function clear_textboxes(){
		
	document.getElementById("firstname").value  = "";		
	document.getElementById("lastname").value = "";	
	document.getElementById("nickname").value  = "";		
	document.getElementById("email").value = "";	
	document.getElementById("passw").value = "";	


	
}
//------------------------------------------------------------------------------------------------

function login(){
    //a lot of login code
	
	console.log("login skjer");


}

//definer alle input felt


function verifyRegister() {
	if(ting = "") {

	} 
}