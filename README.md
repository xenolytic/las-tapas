# Restaurant Management Systeem

**Een gebruiksvriendelijk systeem om reserveringen, bestellingen, voorraad en communicatie voor restaurants efficiënt te beheren.**

## Functionaliteiten

- **Reserveringsbeheer**: 
  - Eenvoudig reserveringen maken, bekijken en annuleren.
- **Bestelverwerking**: 
  - Klanten kunnen bestellingen plaatsen via een QR-gebaseerd systeem.
- **Voorraadbeheer**: 
  - Automatische updates van voorraad op basis van verkochte items.
- **Personeelscommunicatie**: 
  - Real-time berichtenuitwisseling om de samenwerking te verbeteren.
- **Betalingsverwerking**: 
  - Naadloze integratie voor veilige betalingen.

## Technologieën

- **Backend**: PHP (OOP, MVC-architectuur)
- **Frontend**: HTML, CSS, JavaScript (voor interactieve elementen)
- **Database**: MySQL (via MySQLi)
- **Extra Tools**: AJAX voor soepele interacties en een QR-codebibliotheek voor klantenervaring.

## Projectstructuur

- **/app**
    - **/controllers**
        - `drinkController.php` - Beheert logica voor drankfunctionaliteit.
        - `guestController.php` - Beheert logica voor gastfunctionaliteit.
        - `kitchenController.php` - Beheert logica voor keukenfunctionaliteit.
        - `erpController.php` - Beheert logica voor ERP-functionaliteit.
        - `waiterController.php` - Beheert logica voor obersysteemfunctionaliteit.
        - `tableController.php` - Beheert logica voor tafelsysteemfunctionaliteit.
        - `adminController.php` - Beheert logica voor beheerdersfunctionaliteit.
        - `paymentController.php` - Beheert logica voor betalingen.
    - **/models**
        - `drinkModel.php` - Model voor drankgegevens.
        - `guestModel.php` - Model voor gastgegevens.
        - `kitchenModel.php` - Model voor keukenbeheer.
        - `erpModel.php` - Model voor ERP-beheer.
        - `waiterModel.php` - Model voor obergegevens.
        - `tableModel.php` - Model voor tafelsysteem.
        - `adminModel.php` - Model voor beheerdersgegevens.
        - `paymentModel.php` - Model voor betalingen.
    - **/views**
        - `drinkView.php` - Weergave voor drankfunctionaliteit.
        - `guestView.php` - Weergave voor gastfunctionaliteit.
        - `kitchenView.php` - Weergave voor keukenfunctionaliteit.
        - `erpView.php` - Weergave voor ERP-functionaliteit.
        - `waiterView.php` - Weergave voor obersysteemfunctionaliteit.
        - `tableView.php` - Weergave voor tafelsysteemfunctionaliteit.
        - `adminView.php` - Weergave voor beheerdersfunctionaliteit.
        - `paymentView.php` - Weergave voor betalingen.
- **/config**
    - `config.php` - Bevat configuraties voor de database en andere instellingen.
- **/helpers**
    - `urlHelper.php` - Functies voor URL-verwerking.
    - `dateHelper.php` - Functies voor datumformattering.
    - `stringHelper.php` - Functies voor stringmanipulatie.
- **/public**
    - `index.php` - Hoofdingang van de applicatie.
    - **/js**
        - JavaScript-bestanden.
    - **/css**
        - CSS-bestanden.
- **/routes**
    - `web.php` - Bevat alle gedefinieerde routes voor de applicatie.
- **/core**
    - `Router.php` - Voor routering van URL-verzoeken naar de juiste controllers.
    - `Database.php` - Beheert de database-verbinding.
    - `Session.php` - Voor sessiebeheer.
- **/documentation**
    - `las-tapas-documentation.md` - Documentatie van het project.

## Live Gebruik

Dit project wordt gehost op een webserver en vereist geen installatie door eindgebruikers. Alle bestanden zijn vooraf geconfigureerd en klaar om live te draaien.  

1. **Toegang tot het systeem**:  
   - Bezoek de URL die door het restaurant wordt verstrekt.  

2. **Onderhoud en updates**:  
   - Wijzigingen kunnen worden aangebracht via een beveiligde adminomgeving of rechtstreeks op de server.  

3. **Back-ups**:  
   - Regelmatige databaseback-ups zijn aanbevolen om gegevensverlies te voorkomen.

---

**Gebouwd met ❤️ om Las Tapas te innoveren!**
