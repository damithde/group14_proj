
function logout(){
    firebase.auth().signOut().then(function() {
     alert('signed out');
     window.location.replace("../../../index.php");
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
    var error=false;
    firebase.auth().signInWithEmailAndPassword(uname, pass).catch(function(error) {
        var errorCode = error.code;
        var errorMessage = error.message;
        error=true;
        alert('Error :' + errorCode+ errorMessage);
    });
    if(error==false){
        firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                var loguser=firebase.auth().currentUser;
                if (loguser.emailVerified==false){//make this true
                  alertify.alert('Welcome!').setHeader('<em> Logged In </em> ');
                  getuserdata();//  a value based on that dirrect to user specific page
                }
                else{
                  alertify.alert('please verify ur email before logining in').setHeader('<em> Not Verified </em> ');
                }
              
            } 
          });
    }
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

function createuser(email,password,type,regno,school,NameTxt=null,DesignationTxt=null,EmailTxt=null){
    firebase.auth().createUserWithEmailAndPassword(email, password).then(function(){
        var user = firebase.auth().currentUser;
        var token=user.uid;//put this token in the user doc and relavent doc
        if (type=='student'){ 
            db.collection("users").doc(regno).set({
                school:school,
                regno:regno,
                type:"s",
                userid:token
            })
            .then(function(docRef) {
               // console.log("Document written with ID: ", docRef.id);
            })
            .catch(function(error) {
                alert("Error adding document: ", error);
            });
        }
        else if (type=='teacher'){
            db.collection("users").doc(regno).set({
                school:school,
                regno:regno,
                type:"t",
                userid:token
            })
            .then(function(docRef) {
             console.log("Document written with ID: ", docRef.id);
            })
            .catch(function(error) {
                alert("Error adding document: ", error);
            });
        }
        else if (type=='admin'){
            db.collection("users").doc(regno).set({
                school:school,
                type:"a",
                regno:regno,
                userid:token,
                adminname:NameTxt,
                adminDesignation:DesignationTxt,
                email:EmailTxt
            })
            .then(function(docRef) {
              alert("Admin added");
            })
            .catch(function(error) {
                alert("Error adding document: ", error);
            });
        }
        
        verifyemail();   
    })
    .catch(function(error) {
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorMessage);
        alert('Error occured',errorMessage);
        
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