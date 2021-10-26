<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar in vanila js</title>
    <link rel="stylesheet" href="public\css\calendar.css">
</head>
<body>

    <div id="container">
        <div id="header">
            <div id="monthDisplay"></div>
            <div id="but">
                <button id="backButton">Back</button>
                <button id="nextButton">Next</button>
            </div>
        </div>


        <div id="weekdays">
            <div>Sunday</div>
            <div>Monday</div>
            <div>Tuesday</div>
            <div>Wednesday</div>
            <div>Thursday</div>
            <div>Friday</div>
            <div>Saturday</div>
        </div>

        
        <div id="calendar">

        </div>
    </div>

    <div id="newEventModal">
        <h2>New Event</h2>

        <input id="eventTitleInput" placeholder="Event Title" />

        <button id="saveButton">Save</button>
        <button id="cancelButton">Cancel</button>
    </div>

    <div id="deleteEventModal">
        <h2>Event</h2>

        <p id="eventText"></p>

        <button id="deleteButton">Delete</button>
        <button id="closeButton">Close</button>
    </div>

    <div id="modalBackDrop"></div>

    <script src="public\js\calendar.js"></script>
</body>
</html>