# KFS RAVANGRAD - Evidencija Lige

## Opis
Ovaj projekat je web aplikacija razvijena u Laravelu za lokalni klub u gradu Somboru koji se bavi stonim fudbalom.
Aplikacija omogućava članovima kluba da pristupe informacijama o ligi, rezultatima kao i drugim administrativnim podacima i evidencijama.

## Instalacija
1. Klonirajte repozitorijum:
   git clone git@github.com:celiclazar/kfs-ravangrad.git

2. Pređite u direktorijum projekta:
   cd kfs-ravangrad

3. Instalirajte zavisnosti:
   composer install

4. Kopirajte `.env.example` u `.env` i konfigurišite potrebne varijable:
   cp .env.example .env

5. Generišite aplikacijski ključ:
   php artisan key:generate

6. Pokrenite migracije baze podataka:
   php artisan migrate

7. Pokrenite lokalni server:
   php artisan serve

## Korišćenje
Nakon pokretanja aplikacije, možete pristupiti aplikaciji na [http://localhost:8000](http://localhost:8000).

## Konfiguracija
U `.env` fajlu postavite konfiguracione opcije za bazu podataka i druge servise. Primer konfiguracije za bazu podataka:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ime_baze
DB_USERNAME=korisnik
DB_PASSWORD=lozinka

## Kako doprineti
Ovaj projekat je trenutno namenjen samo za interne potrebe kluba i sam ga održavam.
Ako se pojave bilo kakve sugestije ili potrebe za izmenama, možete ih poslati putem e-maila na [celic.lazaar@gmail.com](mailto:celic.lazaar@gmail.com).

## Licenca
Ovaj projekat je licenciran pod [MIT license](https://opensource.org/licenses/MIT).. Pogledajte LICENSE fajl za detalje.

## Kontakt
Za dodatna pitanja ili podršku, kontaktirajte me na [celic.lazaar@gmail.com](mailto:ecelic.lazaar@gmail.com).
