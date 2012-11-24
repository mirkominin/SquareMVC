<?php

//skapa redovising klass
// redovisning klass ska visa mina redovisningar text

class Redovisning_Model
{
	private $redovisningar = array(
	//först redovisning
	'redovisning1' => array(
					'title' => 'Kurs Moment 1',
					'content' => '<p>För att skapa "me-sidan" har jag använt mig av den LAMP utvecklingsmiljö som finns på Blekinges server. Jag har arbetat i operativsystemet windows7 och använt WinSCP som FTP-Client samt notepad++ för att skriva koden. Vidare har jag använt mig av html5 och css3, som ingår i HTML5Boileplate ramverket.</p>

<p>Jag tycker att HTML5Boilerplate är ett användbart verktyg som tar hand om problem som dyker upp under utvecklingen i syfte att få sidan att se likadan ut i olika webbläsare. Jag har tidigare haft vissa problem med utseendet av mina sidor, speciellt med den gamla versionen av IE, och uppskattar väldigt mycket HTML5Boilerplate.</p>

<p>Det gick ganska smidigt att skapa "me sidan". I början hade jag lite problem med att komma åt min mapp på Blekinge servern men hittade hjälp med detta i forumet och på chatten.</p>

<p>Det som är mest intressant med HTML5Boilerplate är den organiserade strukturen för att få ordning på mapparna samtidigt som man har kontroll över hela projektet och utseendet.</p>'),
	//andra
	'redovisning2' => array(
					'title' => 'Kurs Moment 2',
					'content' => '<p>Momentet har varit betydligt svårare och mer tidskrävande än det första momentet. Efter läsningen av boken trodde jag att jag hade ett allmänt begrepp över ämnet. Vid första lidya tutorial insåg jag att jag var långt borta från att kunna implementera ett ramverk. När jag nodde fram till skapandet av klassen CRequest, tappade jag kontrollen över strukturen. Jag försökte att hitta en lösning, på egen hand och på forumet, men utan att lyckas.</p>
					
					<p>Då beslutade jag mig att jag behövde något enklare till att börja med. Jag tittade på några video och tutorial  online för att få en bättre förståelse av grunderna bakom MVC. Jag tittade först på de förslag som fanns för momentet "instruktioner" och därefter letade jag upp information på eget hand. Jag märkte ganska snabbt att det inte fanns ett sätt att ställa upp ett ramverk utan ett oräkneligt antal sätt där alla nådde samma resultat. Det var väldigt förvirrade och det har varit svårt att välja vilken procedur som var lämpligast för mitt syfte. Då tänkte jag att "man skulle lära sig att gå innan man springa", och valde därför den enklaste, eller den som jag förtstod strukturen bäst i, <a href="http://johnsquibb.com/tutorials/">tutorial</a>.</p> 
					
					<p>Som sagt har jag tittat på flera video och tutorial bl.a:</p><br />
					<ul>
					<li><a href="http://www.youtube.com/watch?v=ZbBf4jfwWko&feature=related" target ="_blank">(Video) Creating an MVC from Scratch with PHP - Part 1</a><br />
					<li><a href="http://php-html.net/tutorials/model-view-controller-in-php/" target ="_blank">Tutorial med bra förklaring</a><br />
					<li><a href="http://johnsquibb.com/tutorials/" target ="_blank">Tutorial enkelt och praktist</a><br />
					</ul>
					<p>bara för att nämna de mest relevanta.</p>
					
					<p>Slutligen skapade jag ett ramverk som är en lätt och enkel blandning utav alla tutorial som jag tittade på. Jag har valt att hålla det enkelt för att få en bra överblick på allt som sker, och vidare utveckla det senare i kursen. Därför har jag valt att inte använda mig av Reflection API, (där var där som min Lidya tutorial fastnade), eller utav andra coola template views. Jag hoppas att förbättra mitt ramverket i fortsättningen av kursen.
					
					Jag döpte mitt ramverk till "Square" för att det är lätt och enkelt och publicerade det sedan på gitHub, vilket inte riktigt var lika enkelt som att "lägga upp en bild i facebook". Jag använde en mac osx och programmet "Coda" för att skapa mina klasser/sidor. Jag har laddat ner och installerat "git" för mac och det gick ganska smidigt. Sen tänkte jag använda mig av programmet "Github" för att hantera mina repository, men det gick mindre smidigt. Programmet krånglade mycket med inloggnings uppgifterna och kopplingen till servern. Därför var jag tvungen att koppla mitt locala repo med github repo genom command-line. Det har varit en utmaning men samtidigt väldigt spännande.
					
					Jag vet att det finns stor marginal till förbättringar och jag hoppas att göra dessa i fortsättning av kursen</p>
					
					<ul>
						<li><a href="https://github.com/mirkominin/SquareMVC" target="_blank" title="github repository">Square MVC på github</a>
					</ul>'
					
					)
					,
	//tredje
	'redovisning3' => array(
					'title' => 'Kurs Moment 3',
					'content' => '<p>Momentet har varit igen mycket spännande och intressant. Lite mindre tidskrävande än förra momentet men jag kände som om mitt ramverk utvecklades och är lite mer funktionella.</p>
					
					<p>Jag har tittat igen på flera olika video och tutorial, men med erfarenhet av förra momentet, sökte jag mest de informationer som jag behövde för att utveckla mitt projekt. Jag har fått igen den förvirrande känsla då finns många sätt att göra något på ett fel sätt, men kanske ännu mer sätt att göra det på ett rätt sätt. Det är därför jag har valt mig att fortsätta med min egen interpretation av MVC,och lära genom att göra. </p> 
					
					<p>Videon jag har sett helt:</p><br />
					<ul>
					<li><a href="http://codeigniter.com/tutorials/watch/blog/ target ="_blank">(Video) Codeigniter - Create a Blog</a><br />
					</ul>
					<p>Förutom videon har jag hittat massor med informationer på nätet, den mest relevant och konsekvent på <a href="www.stackoverflow.com" target="_blank">Stackoverflow.com.</a></p>
					
					<p>Jag har försökt att implementera mitt ramverk med två Singelton klass för både Databas och ramverk hantering. Det jag ville göra var att skapa två objekt som skulle användas genom hela ramverk, men det funkade inte riktig som jag tänkte. Jag började med Databas klassen som jag byggde med de två magiska privata konstruktören och klon (constructor and clone()) och den "själv instans" för att skapa en unik objekt. Försökte instansiera klassen och skapa objektet i index.php och square.php men kunde inte använda den globala referes till objektet från nånstans. För tillfället är den databas klass är en Model och jag behöver att instansiera det varje gång jag vill ha tillgång till detta. Så länge har jag höll projetet enkelt och minimalist, det är säkert inte lika spännande och funktionella som codeigniter eller Zend eller vilken befintlig MVC som helst, men så länge har jag koll på vad är som händer inom ramverket i hela tiden. Jag tror att det är viktigare att jag förstår vad är som sker om jag vill lära mig något, istället av bara skriva kod utan att förstår vad är som kommer att hända om en liten ändring behövs.</p>
					
					<p>Jag har haft problem med omdirigera användare till en annan controller (blog sida) från insert controller. Det har jag löst, för tillfället, genom att visa en lämplig meddelande samt en länk till bloggen vid lickande infoga eller bara en meddelande vid misslyckande infoga. Det kommer jag säkert hitta lösningen till  det i fortsättningen av kursen.</p>
					
					<p>Det verkar som om mitt ramverk börjar når gränser i funktionalitet, och jag förmodligen kommer att över tänka hela projektet, men det har varit väldigt lärorikt att komma till denna punkt. Jag börjar förstå fördelarna av många grund aspekter av MVC-teknik.</p>
					
					<p>Mitt guestbook funkar och det går att lämna och visa meddelande. I database klass har jag lagt lite skydd mot sql injection och hanterade hela kopplingen processen</p>
					
					<ul>
						<li><a href="https://github.com/mirkominin/SquareMVC" target="_blank" title="github repository">Square MVC på github</a>
					</ul>'
					
					)
					,
	//Fjarde
	'redovisning4' => array(
					'title' => 'Kurs Moment 4',
					'content' => '<p>När jag började uppgiften hade jag inte fått det förra uppdraget bedömt ännu. 
					Jag hoppades verklige att det skulle vara godkänt, annars skulle förmodligen hela
					implementationen av detta uppdrag äventyras.</p>
					
					<p>Momentet gick lite smidigare än de andra momenten om MVC. Det är kanske för att jag har blivit 
					mer och mer van med strukturen i ramverket.</p>
					
					<p>För att implementera en login funktion i mitt ramverk upprepade jag i
					square.php script både en ob_start() och en session_start() funktion. Det gjorde det möjligt för 
					mig att hålla reda på uppgifter om den inloggade användaren genom hela ramverket. Jag sparade alla
					uppgifterna i de "session globala" variablerna. I square.php fil skapade 
					jag sedan två funktioner: __loggedin() för att kolla om $_SESSION[user_id] är på (vilket innebär 
					att användaren är autentikerat) och __admin() för att kolla om användaren tillhör grupp 0 
					(vilket innebär att den har administrationsbehörighet). Jag har valt att spara data på databasen 
					som en integer för att det blev lättare att genomföra i en if-sats. Jag hade tidigare använt en 
					varchar för att spara gruppen men av någon konstig anledning fungerade det inte när jag kollade 
					värdet i en kondition typ if($_SESSION[\'group\'] == \'admin\'). Istället fungerade det som 
					if($_SESSION[\'group\'] == 0). Genom att ha administrationsbehörighet är det möjligt för en användare 
					att registrera ett till administrationskonto. Om man registrerar sig utan att vara inloggad eller 
					om man är inloggad som en user kan man bara skapa ett liknande konto d.v.s. user konto (i view/newuser.php 
					presenterade jag två olika formulär beroende om __admin() returnerade sant eller falsk). Det var för 
					att täcka grupperingens krav.
</p> 
					
					<p>Jag har tittat lite på video och tutorial och den mest intressanta var den om Zend. 
					Jag tror att jag kommer att läsa lite mer om just detta ramverk.</p>
					
					<p>Som vanligt har jag hittat mycket värdefull information på nätet och speciellt 
					på <a href="www.stackoverflow.com" target="_blank">Stackoverflow.com.</a></p>
					
					<p>Jag har valt att fortsätta mitt försök att implementera mitt minimala ramverk 
					för att se hur länge det kan sträcka sig. Modellen som jag har använt mig mest av i uppgiften var 
					databasmodellen. Jag har igen försökt att förvandla den till en Singelton klass, 
					men det misslyckades. Så länge är jag nöjd med resultatet som jag har uppnått i ramverket 
					och jag ska fortsätta utveckla det. Inloggningen fungerar som den ska, det är möjligt att registrera nya användare 
					samt redigera sina uppgifter. Jag har skapat en redirect() funtion för att skicka användaren ut ur 
					formuläret efter "POST". Jag har löst problemet av omdirigering genom att skapa en funktion i square.php och 
					därifrån redigera användare. Funktionen tar en string som argument och argumentet innehåller kontrollets namn som 
					användaren ska skickas till. Det är väldigt enkelt gjort och kanske inte så elegant men det fungerar.</p>
					
					<p>Jag vill i fortsättningen använda mig av API reflection för att instanstiera alla klasser. Jag har inte 
					gjort detta än för att det känns som om det finns lite som jag fortfarande måste lära mig innan, men jag märker att det går framåt. 
					Att lära och metabolisera nya saker är viktigast för mig.</p>
					<ul>
						<li><a href="https://github.com/mirkominin/SquareMVC" target="_blank" title="github repository">Square MVC på github</a>
					</ul>'
					
					)
	);
	//funktionen som hämta en redovisning
	public function get_redovisning($redovisningName)
	{
		$redovisning = $this->redovisningar[$redovisningName];
		return($redovisning);
	}
	public function __construct()
	{}
}