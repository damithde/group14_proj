function addteacher(teacher){
    db.collection("teachers").add({
        regno: teacher[0],
        Fname: teacher[1],
        Lname: teacher[2],
        country: teacher[3],
        contact: teacher[4],
        dob: teacher[5],
        nationality: teacher[6],
        religion: teacher[7],
        school: teacher[8],
        grade: teacher[9],
        class: teacher[10],

    })
    .then(function(docRef) {
        db.collection("schools").doc(teacher[8]).collection("class").doc(teacher[10]).add({
            regno: teacher[0],
            Fname: teacher[1],
            Lname: teacher[2],
            country: teacher[3],
            contact: teacher[4],
            dob: teacher[5],
            nationality: teacher[6],
            religion: teacher[7],
            school: teacher[8],
            grade: teacher[9],
            class: teacher[10],
    
        })
        console.log("Document written with ID: ", docRef.id);
    })
    .catch(function(error) {
        console.error("Error adding document: ", error);
    });
}


function getteachers(){
    db.collection("teachers")
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            // doc.data() is never undefined for query doc snapshots
            console.log(doc.id, " => ", doc.data());
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });

}

function searchteacher(id){
    db.collection("teachers").where("Fname", "==", id)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            // doc.data() is never undefined for query doc snapshots
            console.log(doc.id, " => ", doc.data());
        });
    })
    .catch(function(error) {
        alert('teacher not found');
        console.log("Error getting documents: ", error);
    });

}


function updateteacher(id,teacher){
    db.collection("teachers").doc(id).update({
        "regno": teacher[0],
        "Fname": teacher[1],
        "Lname": teacher[2],
        "country": teacher[3],
        "contact": teacher[4],
        "dob": teacher[5],
        "nationality": teacher[6],
        "religion": teacher[7],
        "school": teacher[8],
        "grade": teacher[9],
        "class": teacher[10],
        "parent": parent
    })
    .then(function() {
        console.log("Document successfully updated!");
    }); 

}


