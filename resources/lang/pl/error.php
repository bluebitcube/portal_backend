<?php

return [

	/*
	|--------------------------------------------------------------------------
	| HTTP Error Handler Message
	|--------------------------------------------------------------------------
	*/

	"401" => "Nieautoryzowany dostęp – żądanie zasobu, który wymaga uwierzytelnienia!",
	"403" => "Zabroniony – serwer zrozumiał zapytanie lecz konfiguracja bezpieczeństwa zabrania mu zwrócić żądany zasób!",
	"404" => "Nie znaleziono – serwer nie odnalazł zasobu według podanego URL ani niczego co by wskazywało na istnienie takiego zasobu w przeszłości!",
	"408" => "Koniec czasu oczekiwania na żądanie – klient nie przesłał zapytania do serwera w określonym czasie!",
	"500" => "Wewnętrzny błąd serwera – serwer napotkał niespodziewane trudności, które uniemożliwiły zrealizowanie żądania!",
	"502" => "Błąd bramy – serwer – spełniający rolę bramy lub pośrednika – otrzymał niepoprawną odpowiedź od serwera nadrzędnego i nie jest w stanie zrealizować żądania klienta!",
	"503" => "Usługa niedostępna – serwer nie jest w stanie w danej chwili zrealizować zapytania klienta ze względu na przeciążenie!",
	"504" => "Przekroczony czas bramy – serwer – spełniający rolę bramy lub pośrednika – nie otrzymał w ustalonym czasie odpowiedzi od wskazanego serwera HTTP, FTP, LDAP itp. lub serwer DNS jest potrzebny do obsłużenia zapytania!",

];
