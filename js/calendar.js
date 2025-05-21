// Client ID and API key from Google Cloud Console
const CLIENT_ID = '349466891170-8cr6pqpcb3cakubc55o39rurof5ira51.apps.googleusercontent.com'; // Replace with your Client ID
const API_KEY = 'AIzaSyCgOFW-AAXbVE0ejMb8dijn1O8dvUVkb08'; // Replace with your API Key

// Initialize Google API with discovery docs and scope
const DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest"];
const SCOPES = "https://www.googleapis.com/auth/calendar.readonly";

// Function to load Google Calendar API after authentication
function loadCalendarAPI() {
  gapi.client.setApiKey(API_KEY);
  gapi.client.load('calendar', 'v3').then(() => {
    initializeCalendar();
  }).catch(error => console.error("Error loading Google Calendar API:", error));
}

// Initialize the FullCalendar with events from Google Calendar
function initializeCalendar() {
  const calendarEl = document.getElementById('calendar');
  const calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    events: function(fetchInfo, successCallback, failureCallback) {
      gapi.client.calendar.events.list({
        'calendarId': 'primary',
        'timeMin': fetchInfo.startStr,
        'timeMax': fetchInfo.endStr,
        'showDeleted': false,
        'singleEvents': true,
        'orderBy': 'startTime'
      }).then(response => {
        const events = response.result.items.map(event => ({
          title: event.summary,
          start: event.start.dateTime || event.start.date,
          end: event.end.dateTime || event.end.date
        }));
        successCallback(events);
      }).catch(error => {
        console.error("Error fetching events:", error);
        failureCallback(error);
      });
    }
  });
  calendar.render();
}

// Initialize Google Identity Services and handle authentication
function initializeGIS() {
  google.accounts.id.initialize({
    client_id: CLIENT_ID,
    callback: handleCredentialResponse
  });
  google.accounts.id.prompt(); // Automatically prompts the user to sign in
}

// Handle the user's sign-in response
function handleCredentialResponse(response) {
  const tokenClient = google.accounts.oauth2.initTokenClient({
    client_id: CLIENT_ID,
    scope: SCOPES,
    callback: (tokenResponse) => {
      gapi.load("client", loadCalendarAPI);
    }
  });
  tokenClient.requestAccessToken();
}

// Load GIS on page load
document.addEventListener('DOMContentLoaded', () => {
  initializeGIS();
});
