
function logout(){
    firebase.auth().signOut().then(function() {
     alert('signed out');
    }).catch(function(error) {
        alert('error');
    });
}


function login(){
    
    var uname= document.getElementById("uname").value;
    var pass= document.getElementById("pass").value;
    //function log(){alert(uname);};
    // var users=db.collection('users');
    // var querry =users.where("username","==","admin");
    // console.log(querry.data());
    firebase.auth().signInWithEmailAndPassword(uname, pass).catch(function(error) {
        var errorCode = error.code;
        var errorMessage = error.message;
        alert('Error :' + errorCode+ errorMessage);
    });
};



function getuserdata(){
    var user = firebase.auth().currentUser;
    var name, email, uid, emailVerified;

    if (user != null) {
    name = user.displayName;
    email = user.email;
    uid = user.uid; //get user id and match the record and direct to the specific land page then retireve the data relavent to that user 
    }
    var type;
    
    var userdata=db.collection("users").where("userid", "==", uid);
    userdata.get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {

            // doc.data() is never undefined for query doc snapshots
            //console.log(doc.data().type);   
            if  ((doc.data().type)=='a'){
                window.location.replace("pages/adminforms/admindashboard/admindashboard.php");
            }
            else if((doc.data().type)=='t'){
                window.location.replace("pages/teacherforms/teacherdashboard/teacherdashboard.php");
            }
            else{
                window.location.replace("pages/studentforms/studentdashboard/studentdashboard.php");
            }
            
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
    

}

function createuser(email,password,type,regno){
    //verifty account details

    firebase.auth().createUserWithEmailAndPassword(email, password).then(function(){
        var user = firebase.auth().currentUser;
        var token=user.getToken();//put this token in the user doc and relavent doc
        if (type=='student'){
            db.collection("students").doc(regno).set({
                usertoken:token
            },{merge:true})
            .then(function(docRef) {
                console.log("Document written with ID: ", docRef.id);
            })
            .catch(function(error) {
                alert("Error adding document: ", error);
            });
        }
        else{
            db.collection("teachers").doc(regno).set({
                usertoken:token
            },{merge:true})
            .then(function(docRef) {
             console.log("Document written with ID: ", docRef.id);
            })
            .catch(function(error) {
                alert("Error adding document: ", error);
            });

        }
        verifyemail();   
        alert('Account created sucessfully, Please confirm your email');

    })
    
    .catch(function(error) {
        alert('Error occured');
        var errorCode = error.code;
        var errorMessage = error.message;
        // ...
      });

}

function verifyemail(){
    var user = firebase.auth().currentUser;
    user.sendEmailVerification().then(function() {
      return true;
    }).catch(function(error) {
      return false;
    });
}