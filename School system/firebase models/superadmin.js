function createschool(school) {
    db.collection("schools").doc(school[0]).set({
        schoolid: school[0],
        Name: school[1],
        location: school[2],
        contact: school[3],
        principal: school[4],
   
    })
    .then(function(docRef) {
        alert('School added sucessfully');
    })
    .catch(function(error) {
        alert("Error adding document: ", error);
    });
}

function createadmin(schoolid,admin) {
    db.collection("users").add({
        schoolid: schoolid,
        Name: admin[0],
        Designation: admin[1],
        contact: admin[2],
        NIC: admin[3],
   
    })
    .then(function(docRef) {
        alert('admin added sucessfully');
    })
    .catch(function(error) {
        alert("Error adding document: ", error);
    });
    
}

function viewadmins(params) {
    var output;
    db.collection("users").where("type","==","a")
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output=doc.data();
           //console.log(doc.id, " => ", doc.data());
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });

    
}

function getschoolids(params) {
    db.collection("schools").get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            doc.data().schoolid;
            
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
}