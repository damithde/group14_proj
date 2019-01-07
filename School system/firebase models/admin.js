function getschool(tagname) {
    var userid;
    //console.log("hello");
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            userid=user.uid;  
           // console.log(userid);
            db.collection("users").where("userid","==",userid)
            .get()
            .then(function(querySnapshot) {
                querySnapshot.forEach(function(doc) {
                    var output=doc.data();
                    // doc.data() is never undefined for query doc snapshots
                    console.log(output.school);
                    document.getElementById(tagname).value=output.school;
                    //console.log(document.getElementById(tagname).value);
                });
                
            })
            .catch(function(error) {
                console.log("Error getting documents: ", error);
            });       
        }  
    });
    
}

function saveconfig(grade,classes,subjects,schoolid){
    db.collection("schools").doc(schoolid).collection("grades").add({
       classes:classes,
       grade:grade,
       subjects:subjects
      

    })
    .then(function(docRef) {
        console.log("student added successfully");
       // console.log("Document written with ID: ", docRef.id);
    })
    .catch(function(error) {
        alert("Error adding document: ", error);
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


