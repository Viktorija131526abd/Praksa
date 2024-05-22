# Viktorija Kitanović Laravel 11 Projekat - Sistem za Upravljanje Studentima

Ovaj projekat je razvijen u **Laravel 11** framework-u i realizuje se kao deo prakse u firmi **StankovicSoft**.

## Opis Projekta

Sistem za upravljanje studentima je web aplikacija koja omogućava efikasno upravljanje informacijama o studentima i obaveštenjima unutar obrazovne institucije.

## Funkcionalnosti

### Korisnik (role:admin):
- **Komandna tabla**: Pregled ukupnog broja odeljenja, studenata, obaveštenja vezana za odeljenja i javnih obaveštenja.
- **Odeljenja**: Dodavanje, ažuriranje i brisanje informacija o odeljenjima.
- **Studenti**: Upravljanje studentima (dodavanje, ažuriranje, brisanje).
- **Obaveštenja**: Kreiranje, ažuriranje i brisanje obaveštenja za odeljenja.
- **Javna Obaveštenja**: Upravljanje obaveštenjima koja su namenjena široj javnosti.
- **Stranice**: Upravljanje stranicama 'O nama' i 'Kontakt' administracije.
- **Pretraga**: Pretraga studenata po studentskom ID-u.
- **Izveštaji**: Prikaz statistike registrovanih studenata u određenom periodu.
- **Profil**: Ažuriranje profila, promena lozinke i oporavak lozinke.

### Korisnik (role:student):
- **Komandna tabla**: Dobrodošlica za studente.
- **Pregled Obaveštenja**: Pregled obaveštenja koja su objavljena od strane administratora.
- **Profil**: Pregled profila, promena lozinke i oporavak lozinke.

### Korisnik (bez role):
- **Početna**: Dobrodošlica za korisnike.
- **O Nama**: Pregled informacija o instituciji.
- **Kontakt**: Informacije za kontaktiranje institucije.

## Instalacija i Pokretanje

Da biste pokrenuli ovu aplikaciju, potrebno je da na svom računaru imate:

- **PHP** verzija 8.0 ili novija
- - **WAMP, MAMP, LAMP ili XAMPP** 
- **Composer**
- **Laravel 11**

Nakon instalacije neophodnih alata, izvršite sledeće korake:

1. Instalirajte WAMP, MAMP, LAMP ili XAMPP
2. Klonirajte repozitorijum.
3. Uđite u direktorijum projekta i pokrenite `composer install`.
4. Kopirajte `.env.example` u `.env` i podesite svoje postavke.
5. Pokrenite `php artisan migrate`.
6. Pokrenite `php artisan serve`.

Aplikacija bi trebalo da bude dostupna na `localhost:8000`.
