function getschool(tagname) {
    var userid;
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            userid=user.uid;  
            console.log(userid);
            db.collection("users").where("userid","==",userid)
            .get()
            .then(function(querySnapshot) {
                querySnapshot.forEach(function(doc) {
                    var output=doc.data();
                    school=output.school;
                    // doc.data() is never undefined for query doc snapshots
                    //console.log(school);
                    document.getElementById(tagname).value=school;
                });
                
            })
            .catch(function(error) {
                console.log("Error getting documents: ", error);
            });
                
        }
         else {
        }
      
    });
    
}


function getstudentcount() {
    var user = firebase.auth().currentUser;
    var name, email, uid;var school;var count=0;
    if (user != null) {
    name = user.displayName;
    email = user.email;
    uid = user.uid; //get user id and match the record and direct to the specific land page then retireve the data relavent to that user 
    }
    db.collection("users").where("userid","==", uid)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            var output=doc.data();
            school=output.school;
            // doc.data() is never undefined for query doc snapshots
            //console.log(school);
            
        });
        
    db.collection("students").where("school","==",school)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            count++;
        });
        console.log(count);
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
    
    
}

function getteachercount() {
    var user = firebase.auth().currentUser;
    var name, email, uid;var school;var count=0;
    if (user != null) {
    name = user.displayName;
    email = user.email;
    uid = user.uid; //get user id and match the record and direct to the specific land page then retireve the data relavent to that user 
    }
    db.collection("users").where("userid","==", uid)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            var output=doc.data();
            school=output.school;
            // doc.data() is never undefined for query doc snapshots
            //console.log(school);
            
        });
        
    db.collection("teachers").where("school","==",school)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            count++;
        });
        console.log(count);
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
    console.log(count);   
}


