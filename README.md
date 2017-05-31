Prosze nie oczekiwac ładnego interfejsu. Aplikacja ma jedynie prezentowac backend sklepu internetowego.
Instrukcja:
Aplikacja korzysta z bazy danych postgresql takze potzrebna jest zainstalowana ta wlasnie baza danych. Ja korzystałem z phppgadmin i tez bym tak polecil a plik dump-2.sql(wyeksportowana przeze mnie baza) otworzyłbym, skopiowal zawartosc i wpisal w seskcji sql w celu utworzenia bazy danych. Wlascicilelem bazy jest user 'ziom' z haslem 'ziomek'.
co do serweru to ja korzystalem z apache. Jesli Państwo też to wystarczy tylko w konfiguracji ustawic sciezke dostepu DocumentRoot na plik public(w srodku jest plik index.php ktory przy ustawianiach domyslnych sam sie wlączy)

Shop i shop(mysql) to ta sama aplikacja tylko inna baza.
