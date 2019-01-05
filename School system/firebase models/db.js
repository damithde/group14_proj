// Initialize Firebase call this db.js script in ur html file to connet to ur db
var config = {
    apiKey: "AIzaSyADepCBKJ8-gSMFrJgKCzrH-QHwmUbAb-I",
    authDomain: "group-project-14.firebaseapp.com",
    databaseURL: "https://group-project-14.firebaseio.com",
    projectId: "group-project-14",
    storageBucket: "group-project-14.appspot.com",
    messagingSenderId: "845098797813"
  };
firebase.initializeApp(config);
const db=firebase.firestore();
const storage = firebase.storage();
db.settings({timestampsInSnapshots: true});

//include these in the html file to connect firebase support files
{/* <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
<script src="../../../firebase models/db.js"></script> */}

