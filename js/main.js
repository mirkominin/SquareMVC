var i=0;
var t;
var timer_is_on=0;
<!--Den är min funktion som ska validera alla fälten-->
function validateForm(form)
    {
    	
    	//spara varje värde från fälten i sin egen variabel
		var username = form.user.value;
    	var password = form.password.value;
    	var firstname = form.firstname.value;
    	var lastname= form.lastname.value;
    	var email = form.email.value;
    	
    	//för att få reda på vilken position "@" och "." tecken befinner sig i inom strängen email
    	var atpos =  email.indexOf("@");
    	var dotpos =  email.indexOf(".");
    	//med en if-sats kontrollerar jag om fältet, som måste vara ifyllt, är tomt. Om detta är fallet meddelar jag användare att fältet måste vara ifyllt-->
    	if (username == "" || username == null)
    		{
    			alert("Du måste fylla i användarnamn fältet");
    			return false;
    		}
    	if (password == "" || password == null)
    		{
    			alert("Du måste fylla i password fältet");
    			return false;
    		}
    	if (firstname == "" || firstname == null)
    		{
    			alert("Du måste fylla i Namn fältet");
    			return false;
    		}
    	if (lastname == "" || lastname == null)
    		{
    			alert("Du måste fylla i Efternamn fältet");
    			return false;
    		}
    	
    	if (email == null || email == "")
    		{
    			alert("Du måste fylla i epost adress fältet");
    			return false;
    		}
    	else
    	/*--under emailfältet, efter kontroll om fältet är ifyllt, 
    	kör jag ytteliggare en kontroll. I kontroller ser jag efter att "@" positionen i strängen, 
    	som jag sparade i variabeln atpos, har en index mindre 
    	än 1(vilket skulle betyda att det är först bokstaven). Vidare kontrolleras att "."(dotpos), 
    	som kommer att få domännamnet xxx@DOMANNAMN".", ligger mindre än 2 
    	positioner efter "@" och slutligen kontrolleras att sista delen av adressen, allt som finns 
    	efter punkt i domännamn xxx@DOMANNAMN"."XX ligger minst 2 positioner 
    	innan adressens slut*/
    		{
    		if (atpos < 1 || dotpos < (atpos + 2) || (dotpos + 2) >= email.length)
    			{
    				alert("E post adressen är felaktig\nden ska vara som\ndinnamn@domain.xx");
    				return false;
    			}
    		}
    	return true;
    }
    