Instrukcja:
Aplikacja korzysta z bazy danych postgresql takze potzrebna jest zainstalowana ta wlasnie baza danych. Ja korzystałem z phppgadmin i tez bym tak polecil a plik dump-2.sql(wyeksportowana przeze mnie baza) otworzyłbym, skopiowal zawartosc i wpisal w seskcji sql w celu utworzenia bazy danych. Wlascicilelem bazy jest user 'ziom' z haslem 'ziomek'.
co do serweru to ja korzystalem z apache. Jesli Państwo też to wystarczy tylko w konfiguracji ustawic sciezke dostepu DocumentRoot na plik public(w srodku jest plik index.php ktory przy ustawianiach domyslnych sam sie wlączy)

Sam osobisie mialem problem z postgresem na windowsie(raczej jestem linuxowcem, a na windowsie chcialem tylko sprawdzic działanie) (stad wyslalem jeszce to samo tylko ze z baza mysql), ale teoretycznie na poprawnie zainstalowanej bazie powinno pzrebiegac wszystko analogicznie.
