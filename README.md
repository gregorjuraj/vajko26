# Webová aplikácia pre pneuservis a recykláciu vozidiel

Juraj Gregor

5ZYI31

## Stručný opis projektu
Webová aplikácia je určená zákazníkom a majitelovi firmy, ktorá poskytuje pneuservis, doplnkové služby a recykláciu vozidiel. Jej hlavným účelom je umožniť zákazníkom rezervovať si termín návštevy a elektronicky odoslať žiadosť o odovzdanie vozidla na recykláciu. Firma získa spoločný prehľad rezervácií a žiadostí.

V časti pneuservisu si zákazník vyberie vozidlo, hlavnú službu, prípadné doplnkové služby a dostupný termín. Kalendár zobrazí voľné a obsadené termíny bez osobných údajov ostatných zákazníkov. Rezervácia sa po úspešnom vytvorení automaticky potvrdí a zákazník príde v dohodnutom čase. Pri recyklácii zákazník uvedie stav vozidla, pridá opis a fotografie a následne sleduje priebeh vybavenia žiadosti až po zrecyklovanie vozidla.



## Role v projekte
**Návštevník:** Má prístup k verejným informáciám o firme, službách, cenníku, recyklácii vozidiel a dostupnosti termínov. Môže sa zaregistrovať alebo prihlásiť.

**Zákazník:** Prihlásený používateľ, ktorý spravuje svoje vozidlá, vytvára a ruší vlastné rezervácie a odosiela žiadosti o recykláciu. Má prístup iba k vlastným údajom a prílohám.

**Administrátor:** Spravuje ponuku služieb, ceny, dostupnosť termínov, rezervácie a žiadosti o recykláciu. Aktualizuje priebeh vybavenia žiadostí a spravuje ich fotografie a poznámky.



## Prípady použitia podľa rolí

### Návštevník
+ Návštevník si prezrie ponuku služieb a cenník.
+ Návštevník si prečíta postup odovzdania vozidla na recykláciu.
+ Návštevník si pozrie dostupnosť termínov pneuservisu.
+ Návštevník si zobrazí kontakt a otváracie hodiny firmy.
+ Návštevník si vytvorí zákaznícky účet alebo sa prihlási.

### Zákazník
+ Zákazník pridá vozidlo do svojho účtu, zobrazí jeho údaje, upraví ich alebo vozidlo odstráni, ak nemá nadväzujúce záznamy.
+ Zákazník vyberie vozidlo, hlavnú službu a prípadné doplnkové služby, napríklad výmenu oleja.
+ Zákazník si vyberie voľný deň a čas a vytvorí rezerváciu.
+ Zákazník si zobrazí vlastné rezervácie a pred návštevou môže rezerváciu zrušiť.
+ Zákazník odošle žiadosť o recykláciu svojho vozidla s opisom jeho stavu a prípadnou požiadavkou na odvoz.
+ Zákazník k žiadosti nahrá fotografie, prezrie si ich alebo ich odstráni, kým žiadosť čaká na spracovanie.
+ Zákazník sleduje aktuálny stav žiadosti a poznámky administrátora.
+ Zákazník na základe požiadavky administrátora doplní údaje alebo fotografie.

### Administrátor
+ Administrátor pridá službu, zobrazí ju, upraví jej názov, opis, cenu alebo trvanie a odstráni ju, ak nie je použitá v rezerváciách. Používanú službu môže deaktivovať pre nové rezervácie.
+ Administrátor nastaví dostupné termíny a zablokuje čas, počas ktorého firma neprijíma rezervácie.
+ Administrátor si zobrazí rezervácie na konkrétny deň a filtruje ich podľa dátumu alebo služby.
+ Administrátor v prípade potreby zruší rezerváciu a uvedie dôvod, ktorý zákazník uvidí v jej detaile.
+ Administrátor si zobrazí žiadosť o recykláciu vrátane opisu vozidla a fotografií.
+ Administrátor aktualizuje stav žiadosti a pridá poznámku, napríklad dohodnutý termín prevzatia alebo požiadavku na doplnenie údajov.
+ Administrátor spravuje fotografie priložené k žiadostiam.


## Plánované entity

### Používateľ
Predstavuje zákazníka alebo administrátora firmy.
+ **Hlavné atribúty:** ID, meno, e-mail, hash hesla, telefón, rola.
+ **Vzťahy:** Používateľ môže vlastniť viac vozidiel, vytvárať rezervácie a odosielať žiadosti o recykláciu.

### Vozidlo
Uchováva údaje o vozidle zákazníka.
+ **Hlavné atribúty:** ID, značka, model, rok výroby, EČV.
+ **Vzťahy:** Vozidlo patrí jednému používateľovi a môže byť priradené k rezerváciám a žiadostiam o recykláciu.

### Služba
Predstavuje ponúkané služby, napríklad prezutie kolies, vyváženie alebo výmenu oleja.
+ **Hlavné atribúty:** ID, názov, opis, cena, trvanie, aktívnosť.
+ **Vzťahy:** Služba môže byť súčasťou viacerých rezervácií.

### Rezervácia
Predstavuje objednanie vozidla na vybrané služby v konkrétnom termíne.
+ **Hlavné atribúty:** ID, dátum a čas začiatku, čas konca, poznámka, stav.
+ **Vzťahy:** Rezervácia patrí jednému používateľovi, týka sa jedného vozidla a obsahuje jednu alebo viac služieb.

### Žiadosť o recykláciu
Predstavuje požiadavku zákazníka na odovzdanie vozidla na recykláciu a eviduje priebeh jej vybavenia.
+ **Hlavné atribúty:** ID, opis stavu vozidla, požiadavka na odvoz, dátum vytvorenia, stav, poznámka admina.
+ **Vzťahy:** Žiadosť patrí jednému používateľovi, týka sa jedného vozidla a môže obsahovať viac fotografií.

### Fotografia
Predstavuje fotografiu vozidla priloženú k žiadosti o recykláciu.
+ **Hlavné atribúty:** ID, názov súboru, cesta k súboru.
+ **Vzťahy:** Fotografia patrí jednej žiadosti o recykláciu.

Vzťah medzi rezerváciami a službami bude realizovaný spojovacou tabuľkou, pretože jedna rezervácia môže obsahovať viac služieb a jedna služba sa môže nachádzať vo viacerých rezerváciách.



## Vzťahy medzi entitami

+ **Používateľ - Vozidlo (1:N):** Jeden používateľ môže vlastniť viac vozidiel. Každé vozidlo patrí jednému používateľovi.
+ **Používateľ - Rezervácia (1:N):** Jeden používateľ môže vytvoriť viac rezervácií. Každá rezervácia patrí jednému používateľovi.
+ **Vozidlo - Rezervácia (1:N):** Jedno vozidlo môže mať viac rezervácií v rôznych termínoch. Každá rezervácia sa týka jedného vozidla.
+ **Rezervácia - Služba (M:N):** Jedna rezervácia môže obsahovať viac služieb a jedna služba môže byť súčasťou viacerých rezervácií. Vzťah bude realizovaný spojovacou tabuľkou.
+ **Používateľ - Žiadosť o recykláciu (1:N):** Jeden používateľ môže odoslať viac žiadostí. Každá žiadosť patrí jednému používateľovi.
+ **Vozidlo - Žiadosť o recykláciu (1:1):** Vozidlo môže mať najviac jednu žiadosť o recykláciu. Každá žiadosť sa týka práve jedného vozidla. Po zrecyklovaní vozidla už nie je možné podať ďalšiu žiadosť.
+ **Žiadosť o recykláciu - Fotografia (1:N):** Jedna žiadosť môže obsahovať viac fotografií. Každá fotografia patrí jednej žiadosti.



## Hlavné stránky aplikácie

1. **Úvodná stránka:** Predstavenie firmy a jej služieb.
2. **Pneuservis a rezervácia:** Cenník, výber služieb a rezervácia voľného termínu.
3. **Moje rezervácie:** Prehľad vlastných rezervácií s možnosťou zrušenia.
4. **Moje vozidlá:** Pridávanie, zobrazenie, úprava a odstránenie vozidiel.
5. **Recyklácia vozidiel:** Informácie o recyklácii a odoslanie žiadosti s fotografiami.
6. **Moje žiadosti o recykláciu:** Prehľad žiadostí, ich detail a priebeh vybavenia.
7. **Administrácia:** Správa služieb, rezervácií, dostupnosti a žiadostí o recykláciu.
8. **Registrácia a prihlásenie:** Vytvorenie účtu a prihlásenie používateľa.
9. **Kontakt:** Kontaktné údaje a otváracie hodiny.



## Rozdelenie funkcionality

### Základné funkcie

+ Registrácia, prihlásenie a odhlásenie používateľov.
+ Rozlíšenie oprávnení zákazníka a administrátora. Zákazník má prístup iba k vlastným údajom.
+ Pridávanie, zobrazovanie, úprava a odstraňovanie vozidiel a služieb.
+ Výber hlavnej služby a prípadných doplnkových služieb pri rezervácii.
+ Zobrazenie voľných a obsadených termínov bez osobných údajov ostatných zákazníkov.
+ Vytvorenie rezervácie s automatickým potvrdením a možnosťou jej zrušenia.
+ Zohľadnenie trvania vybraných služieb a zabránenie prekrývaniu rezervácií.
+ Nastavenie dostupnosti a blokovanie termínov administrátorom.
+ Načítanie dostupných termínov a odoslanie rezervácie pomocou AJAX.
+ Odoslanie žiadosti o recykláciu s opisom stavu vozidla a prípadnou požiadavkou na odvoz.
+ Nahrávanie, zobrazovanie a odstraňovanie fotografií pri žiadosti o recykláciu.
+ Sledovanie priebehu recyklácie a zobrazovanie poznámok administrátora.
+ Kontrola vstupov na klientovi aj serveri, bezpečné ukladanie hesiel.
+ Spustenie aplikácie cez Docker s automatickým importom ukážkových dát.

### Rozširujúce funkcie

+ Ponuka náhradných dielov s fotografiami a možnosťou odoslať dopyt.
+ Dopyty na objednanie pneumatík alebo diskov a následná cenová ponuka firmy.
+ Evidencia uskladnených sezónnych pneumatík zákazníkov.
+ E-mailové potvrdenia a pripomienky rezervácií.
+ Jednoduché štatistiky rezervácií a vybavených žiadostí o recykláciu.