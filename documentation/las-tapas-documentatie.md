# Project Documentatie - Restaurant Systeem

**Inhoudsopgave**
1. [Structuur en Bestandsindeling](#1-structuur-en-bestandsindeling)
2. [Database (MySQLi)](#2-database-mysqli)
3. [Functionaliteit per Oplossing](#3-functionaliteit-per-oplossing)
4. [Frontend met HTML, CSS en JavaScript](#4-frontend-met-html-css-en-javascript)
5. [Projectbeheer en Testing](#5-projectbeheer-en-testing)
6. [Coding Conventions](#6-coding-conventions)

---

## 1. Structuur en Bestandsindeling

### Model-View-Controller (MVC) Structuur:
- **Controllers**: Voor verwerking van inkomende verzoeken, zoals:
  - `ReservationController`
  - `OrderController`
- **Models**: Voor database-interactie en gegevensverwerking:
  - `UserModel`
  - `MenuModel`
- **Views**: HTML-pagina's met gescheiden CSS en dynamische content in PHP:
  - Elke belangrijke functionaliteit heeft een eigen view-bestand, zoals `reservation.php` en `order.php`.

### Core Componenten:
- **Database**: Singleton-klasse voor de MySQLi-verbinding.
- **Router**: Voor het toewijzen van routes aan de juiste controllers.
- **Session Handling**: Voor veilig gebruikerssessiebeheer.
- **Helpers**: Handige functies voor herbruikbare code, bijvoorbeeld URL-verwerking, datumformattering en stringmanipulatie.

### File Structure
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
- **/tests**
    - Bevat PHPUnit tests voor controllers, models en andere functionaliteiten.
- `.htaccess` - Voor URL-herschrijvingen.
- `README.md` - Overzicht en uitleg van het project.

---

## 2. Database (MySQLi)

### Entiteiten en Relaties:
- **Klanten (Customers)**:
  - `customerId` (PK), `naam`, `email`, `telefoonnummer`, `registratiedatum`
- **Reserveringen (Reservations)**:
  - `reservationId` (PK), `customerId` (FK), `tafelnummer`, `datum`, `tijd`, `opmerkingen`
- **Bestellingen (Orders)**:
  - `orderId` (PK), `reservationId` (FK), `totaalprijs`, `status`, `tijd`
- **Menu Items**:
  - `menuId` (PK), `naam`, `prijs`, `beschrijving`, `categorie`
- **Voorraad (Inventory)**:
  - `inventoryId` (PK), `item`, `aantal`, `minimumNiveau`

### Database Klasse:
- **Singleton Klasse**: Voor het beheer van de MySQLi-verbinding.
- **Functies**: Methoden voor veelvoorkomende database-bewerkingen zoals `query`, `fetch`, en `prepare`.

---

## 3. Functionaliteit per Oplossing

### Reserveringssysteem
- **Classes**: `Reservation`, `ReservationController`, `ReservationModel`
- **Functionaliteiten**:
  - `createReservation` - Maakt een nieuwe reservering aan
  - `viewReservation` - Bekijkt bestaande reserveringen
  - `cancelReservation` - Annuleert een reservering

### Voorraadbeheer
- **Classes**: `Inventory`, `InventoryController`, `InventoryModel`
- **Functionaliteiten**:
  - `viewInventory` - Bekijkt huidige voorraad
  - `updateStock` - Werkt voorraad bij
  - `orderNewStock` - Bestelt nieuwe voorraad
  - Automatisch voorraad bijwerken op basis van verkochte items.

### Bestelsysteem met QR-code
- **Classes**: `Order`, `OrderController`, `OrderModel`
- **Functionaliteiten**:
  - `placeOrder` - Plaatst een bestelling
  - `viewOrder` - Bekijkt bestellingen
  - `updateOrderStatus` - Wijzigt de status van een bestelling
  - **QR-code**: Gebruik een JavaScript-bibliotheek voor QR-code generatie per tafel.

### Digitale Communicatie voor Personeel
- **Class**: `Message`, `MessageController`
- **Functionaliteiten**:
  - `sendMessage` - Stuurt berichten naar personeel
  - `receiveMessage` - Ontvangt berichten (Real-time berichten met basis-JavaScript)

### Betalingsverwerking
- **Classes**: `Payment`, `PaymentController`
- **Functionaliteiten**:
  - `processPayment` - Verwerkt betalingen
  - `viewTransaction` - Bekijkt transacties

---

## 4. Frontend met HTML, CSS en JavaScript

### CSS voor Styling
- **Gescheiden CSS-bestanden** voor een overzichtelijke styling.
- **Utility-klasse structuur** voor herbruikbare componenten.

### JavaScript voor Interacties
- Gebruik JavaScript voor dynamische onderdelen, zoals:
  - Bestelinterface
  - Statusupdates
  - Voorraadmeldingen

---

## 5. Projectbeheer en Testing

### Projectbeheer:
- **Tool**: Gebruik Trello of een vergelijkbaar hulpmiddel om taken en functionaliteiten op te splitsen.

### Testing:
- **PHP Unit Testing**: Voor belangrijke classes zoals `Reservation` en `Order`.
- **Manual Testing**: Test gebruikersflows (bijv. bestellingen en reserveringen) en zorg voor correcte database-updates.

---

## 6. Coding Conventions

### 6.1 PHP Coding Conventions

**Bestandsindeling en Structuur:**
- Elke klasse in een apart bestand, genoemd naar de klasse (bijv. `Reservation.php`).
- **Configuratiebestand**: `config.php` voor instellingen (bijv. databasegegevens).

**Naming Conventions:**
- **Classes**: PascalCase (bijv. `Customer`, `ReservationModel`).
- **Methods**: camelCase (bijv. `createReservation`, `updateInventory`).
- **Variables**: camelCase (bijv. `$totalPrice`, `$reservationList`).

**Commentaar en Documentatie:**
- Gebruik PHPDoc-stijl comments voor documentatie van klassen en methoden.

Voorbeeld:
```
Class for handling reservations.

class Reservation {
    /**
     * Creates a new reservation.
     *
     * @param int $customerId
     * @param int $tableNumber
     * @return bool
     */
    public function createReservation($customerId, $tableNumber) {
        // Implementatie hier...
    }
}
```

## Error Handling

- Gebruik `try-catch` voor database-interacties en log fouten naar een `error_log` bestand.

---

## 6.2 SQL Conventions (camelCase)

### Naming Conventions

- **Tabellen**: Gebruik beschrijvende namen zoals `customers`, `reservations`, `orders`.
- **Kolommen**: camelCase (bijv. `customerId`, `reservationDate`).
- **Primary Keys**: Gebruik `id` of een unieke naam (bijv. `customerId`).
- **Foreign Keys**: Gebruik entiteit + `Id` (bijv. `customerId` in `reservations`).

---

## 6.3 HTML Conventions

### Structuur en Indentatie

- Consistente indentatie (2 of 4 spaties per niveau).
- Sluit altijd tags af en zorg voor correcte nesting.

### Class Naming

- Gebruik kebab-case voor HTML-classes (bijv. `menu-item`, `reservation-form`).

---

## 6.4 CSS Conventions

### Naming en Structuur

- Gebruik kebab-case voor CSS-klassenamen, bijvoorbeeld `.header-menu`, `.order-summary`.
- Gebruik BEM (Block Element Modifier) structuur voor complexe UI-componenten (bijv. `.menu__item--active`).

### Organisatie

- Houd styling voor layout (flexbox) gescheiden van kleuren en fonts.

---

## 6.5 JavaScript Conventions

### Naming Conventions

- **Variables**: camelCase (bijv. `fetchReservations`, `orderTotal`).
- **Function Naming**: Gebruik werkwoorden in functienamen (bijv. `loadData`, `updateInventory`).

### Event Handlers

- Geef duidelijke namen zoals `handleSubmitOrder`.

### Modulariteit

- Houd functies klein en gericht op één taak. Creëer modules voor specifieke functionaliteiten.