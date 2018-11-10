function addstudent(student,parent){
    db.collection("students").doc(student[0]).set({
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
        parent: parent

    })
    .then(function(docRef) {
        db.collection("schools").doc(student[8]).collection("classes").doc(student[10]).collection("students").doc(student[0]).set({
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
            parent: parent
        })

       // console.log("Document written with ID: ", docRef.id);
    })
    .catch(function(error) {
        console.error("Error adding document: ", error);
    });
}

   

function getstudentsfromname(fname,lname){
    db.collection("schools").doc(student[8]).collection("classes").doc(student[10]).collection("students").where("Fname","==",fname).where("Lname","==",lname)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
        
            console.log(doc.id, " => ", doc.data());
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });

}

function getstudentsfromreg(reg){
    db.collection("students").where("regno","==",reg)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            
            console.log(doc.id, " => ", doc.data());
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });

}


function updatestudent(regno,student,parent){
    db.collection("students").doc(regno).update({
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
        db.collection("schools").doc(student[8]).collection("classes").doc(student[10]).collection("students").doc(regno).update({
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
            parent: parent
        })        
        console.log("Document successfully updated!");
    }); 

}

function promotestudent(student,id){

    db.collection("students").doc(id).update({
        "grade": student[0],
        "class": student[1]
    })
    .then(function() {
        db.collection("schools").doc(student[8]).collection("classes").doc(student[10]).collection("students").doc(id).delete().then(function() {
            console.log("Document successfully deleted!");
        }).catch(function(error) {
            console.error("Error removing document: ", error);
        });      
        
        
    });

    db.collection("students").where("regno","==",id)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            var st= doc.data();
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });    
    
    db.collection("schools").doc(student[8]).collection("classes").doc(student[10]).collection("students").doc(student[0]).set({
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
        parent: parent
    })

   // console.log("Document written with ID: ", docRef.id);
.catch(function(error) {
    console.error("Error adding document: ", error);
});

}


