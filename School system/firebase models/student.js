function addstudent(student,parent){
    db.collection("students").doc(student[0]).set({
        regno: student[0],
        Fname: student[1],
        Lname: student[2],
        contact: student[3],
        dob: student[4],
        nationality: "SriLankan",
        address:student[5],
        religion: student[6],
        school: student[7],
        grade: student[8],
        class: student[9],
        email: student[10],
        profileimg:student[11],
        stuid:student[12],
        parent: parent

    })
    .then(function(docRef) {
        alert("student added successfully");
       // console.log("Document written with ID: ", docRef.id);
    })
    .catch(function(error) {
        alert("Error adding document: ", error);
    });
}

   

function getstudentsfromname(fname,lname){
    var output={};
    db.collection("schools").doc(student[8]).collection("classes").doc(student[10]).collection("students").where("Fname","==",fname).where("Lname","==",lname)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output[doc.id]=doc.data();
            //console.log(doc.id, " => ", doc.data());
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
    return output;

}


function getstudentsfromreg(reg){
    var output;
    db.collection("students").where("schoolid","==",school).where("regno","==",reg)
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
        console.log("Document successfully updated!");
    }); 

}

function promotestudent(idlist,tograde,toclass,year,subjects){
    idlist.forEach(function(stid){
        db.collection("students").where("regno","==",stid)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                //archive data
                    db.collection("archive").doc(year).collection("Students").add(doc.data())
                    .then(function() {
                            console.log("Document successfully added to archive!");
                    }).catch(function(error) {
                            console.error("Error removing document: ", error);
                    }); 
                //update data to promote students
                //get the subjects 

                    db.collection("students").doc(doc.id).update({
                        grade:tograde,
                        class:toclass,
                        currentsubjects:subjects
                    })
                    .then(function() {
                            console.log("Document successfully updated!");
                    }).catch(function(error) {
                            console.error("Error removing document: ", error);
                    });      
                    
                    
                });

            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });    

}


function promotestudentspecial(idlist,tograde,toclass,year,subjects){
    idlist.forEach(function(stid){
        db.collection("students").where("regno","==",stid)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                //archive data
                    db.collection("archive").doc(year).collection("Students").add(doc.data())
                    .then(function() {
                            console.log("Document successfully added to archive!");
                    }).catch(function(error) {
                            console.error("Error removing document: ", error);
                    }); 

                    db.collection("students").doc(doc.id).update({
                        grade:tograde,
                        class:toclass
                    })
                    .then(function() {
                            console.log("Document successfully updated!");
                    }).catch(function(error) {
                            console.error("Error removing document: ", error);
                    });      
                    
                    
                });

            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });    

}
    


