function createschool(params) {
    db.collection("schools").doc(school[0]).set({
        schoolid: school[0],
        Name: school[1],
        location: school[2],
        contact: school[3],
        dob: school[4],
   
    })
    .then(function(docRef) {
        
    })
    .catch(function(error) {
        alert("Error adding document: ", error);
    });
}

function createadmin(params) {

    
}

function viewadmins(params) {
    
}