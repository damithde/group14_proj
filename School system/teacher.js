function addteacher(teacher){
    db.collection("teachers").add({
        regno: student[0],
        Fname: student[1],
        Lname: student[2],
        country: student[3],
        contact: student[4],
        dob: student[5],
        nationality: student[6],
        religion: student[7],
        school: student[8],
        grade: student[9],
        class: student[10],

    })
    .then(function(docRef) {
        db.collection("schools").doc(student[8]).collection("class").doc(student[10])
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


function updateteacher(id,teacher){
    db.collection("students").doc(id).update({
        "regno": student[0],
        "Fname": student[1],
        "Lname": student[2],
        "country": student[3],
        "contact": student[4],
        "dob": student[5],
        "nationality": student[6],
        "religion": student[7],
        "school": student[8],
        "grade": student[9],
        "class": student[10],
        "parent": parent
    })
    .then(function() {
        console.log("Document successfully updated!");
    }); 

}


