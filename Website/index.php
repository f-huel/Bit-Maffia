<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | BIT FCM</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav>
        <ul>
            <li><img src="images/bit-fcm.png" alt="" width="130" height="130"></li>
            <li><a href="#home">HOME</a></li>
            <li><a href="#team">TEAM</a></li>
            <li><a href="#events">EVENTS</a></li>
            <li><a href="#ideas">IDEAS</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
    </nav>

    <div class="section" id="home">
        <h1>HOME</h1>
    </div>

    <div class="section" id="team">
        <h1>TEAM</h1>
        <h5 class="text">
            Wij zijn een groepje studenten die de beste tijd uit de opleiding willen halen.
            <br>
            Het idee is ontstaan omdat het ons leuk leek om verschillende uitjes en feestjes met de opleiding te doen.
            <br>
            We zullen alles organiseren, ieder uitje en feestje.
            <br>
            Wij hopen dat jullie het net zo leuk als ons gaan vinden!
        </h5>

        <h1 class="text">Here Goes Team Image</h1>

        <h5 class="text">
            We noemen ons Bit Mafia, de meest gevaarlijke groep van Bit Academy.
            <br>
            Grapje! Wij zijn er om alles te organiseren en voor de gezeligheid.
            <br>
            Wij zijn Felix, Chelsea, Mehdi en Dylan; het hart van de Bit feestcommissie.
        </h5>
    </div>

    <div class="section" id="events">
        <h1>EVENTS</h1>
        <br>
        <div class="container-event">
            <div class="upcoming">
                <h3>Events die we gaan organiseren:</h3>
                <table class="event-table">
                    <tr>
                        <th class="event-th">Event</th>
                        <th class="event-th">Datum</th>
                        <th class="event-th">Tijd</th>
                        <th class="event-th">Info</th>
                    </tr>
                    <tr>
                        <td class="event-td">naam</td>
                        <td class="event-td">01/01/2023</td>
                        <td class="event-td">18:00</td>
                        <td class="event-td"><a href="#">Zie Meer</a></td>
                    </tr>
                </table>
            </div>

            <div class="happened">
                <h3>Events die zijn georganiseerd:</h3>
                <table class="event-table">
                    <tr>
                        <th class="event-th">Event</th>
                        <th class="event-th">Datum</th>
                        <th class="event-th">Tijd</th>
                        <th class="event-th">Info</th>
                    </tr>
                    <tr>
                        <td class="event-td">naam</td>
                        <td class="event-td">01/01/2023</td>
                        <td class="event-td">18:00</td>
                        <td class="event-td"><a href="#">Zie Meer</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="section" id="ideas">
        <h1>IDEAS</h1>
        <br>
        <h3>Ideeën? Vul het formulier in en misschien gebruiken we jouw idee!</h3>
        <br>
        <div class="ideas-form">
            <form method="post">
                <label for="name">Naam:</label>
                <input type="text" name="name" placeholder="Naam" required>
                <label for="idea">Idee:</label>
                <textarea name="idea" placeholder="Idee" required></textarea>
                <input type="submit" value="SEND" name="add">
            </form>
        </div>
    </div>

    <div class="section" id="contact">
        <h1>CONTACT</h1>
        <br>
        <h3>Wil je contact? Stuur ons een mailtje/dm of vul ons contact formulier in!</h3>
        <div class="container-contact">
            <div class="contact-info">
                <table class="contact-table">
                    <tr>
                        <th class="contact-th">Name:</th>
                        <td class="contact-td">BIT FCM</td>
                    </tr>
                    <tr>
                        <th class="contact-th">Email:</th>
                        <td class="contact-td"><a href="mailto:bitfcm23@gmail.com" class="link">bitfcm23@gmail.com</a>
                        </td>
                    </tr>
                    <tr>
                        <th class="contact-th">Instagram:</th>
                        <td class="contact-td"><a href="https://www.instagram.com/bit_fcm/" class="link">bit_fcm</a>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="contact-form">
                <form action="send.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" placeholder="Naam" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                    <label for="message">Bericht:</label>
                    <textarea name="message" id="bericht" placeholder="Bericht" required></textarea>
                    <input type="submit" value="SEND" name="add">
                </form>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>