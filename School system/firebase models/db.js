// Initialize Firebase
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
db.settings({timestampsInSnapshots:true});

//include these in the html file
{/* <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script> */}
