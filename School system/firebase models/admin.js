function getschool() {
    var user = firebase.auth().currentUser;
    var name, email, uid;
    if (user != null) {
    name = user.displayName;
    email = user.email;
    uid = user.uid; //get user id and match the record and direct to the specific land page then retireve the data relavent to that user 
    }
    db.collection("users").where("userid","==", uid)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output=doc.data();
            var school=output.school;
            // doc.data() is never undefined for query doc snapshots
            console.log(doc.id, " => ", doc.data());
            return school;
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
    
}