<?php
    session_start(); 
?>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.3.3/firebase-app.js"></script>

<!-- Include FIREBASE database -->
<script src="https://www.gstatic.com/firebasejs/8.3.3/firebase-database.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.3.3/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyDHIsdFmpmxOm0W0-kxAtA6hMG4ElrPNfQ",
    authDomain: "piese-dodge.firebaseapp.com",
    projectId: "piese-dodge",
    storageBucket: "piese-dodge.appspot.com",
    messagingSenderId: "85173674840",
    appId: "1:85173674840:web:5af811663ef47e40fa7b2d",
    measurementId: "G-EPGH8JLJMJ"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

  var myName = prompt("Enter your name");
</script>


<!-- create a form to send message -->
<form onsubmit="return sendMessage();">
    <input id="message" placeholder="Enter message" autocomplete="off">
 
    <input type="submit">
</form>
     
<script>
    function sendMessage() {
        // get message
        var message = document.getElementById("message").value;
 
        // save in database
        firebase.database().ref("messages").push().set({
            "sender": myName,
            "message": message
        });
 
        // prevent form from submitting
        return false;
    }
</script>

<!-- create a list -->
<ul id="messages"></ul>
     
<script>
    // listen for incoming messages
    firebase.database().ref("messages").on("child_added", function (snapshot) {
        var html = "";
        // give each message a unique ID
        html += "<li id='message-" + snapshot.key + "'>";
        // show delete button if message is sent by me
        if (snapshot.val().sender == myName) {
            html += "<button data-id='" + snapshot.key + "' onclick='deleteMessage(this);'>";
                html += "Delete";
            html += "</button>";
        }
        html += snapshot.val().sender + ": " + snapshot.val().message;
        html += "</li>";
 
        document.getElementById("messages").innerHTML += html;
    });
    function deleteMessage(self) {
        // get message ID
        var messageId = self.getAttribute("data-id");
    
        // delete message
        firebase.database().ref("messages").child(messageId).remove();
    }
    
    // attach listener for delete message
    firebase.database().ref("messages").on("child_removed", function (snapshot) {
        // remove message node
        document.getElementById("message-" + snapshot.key).innerHTML = "This message has been removed";
    });
</script>
