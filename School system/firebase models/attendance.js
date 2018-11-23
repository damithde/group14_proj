function getattendance(date,cls){
    var output={};
    db.collection("attendance").doc(date).collection("students").where("class","==",cls)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output[doc.id]=doc.data();
            //console.log(" => ", doc.data());
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
    return output;
}



function addattendance(student){
    db.collection("attendance").doc(getDate()).collection("students").set({
        regno: student[0],
        present: student[1],
        school: student[2],
        class: student[3]
    })
    .then(function(docRef) {
     //   console.log("Document written with ID: ", docRef.id);
    })
    .catch(function(error) {
        console.error("Error adding document: ", error);
    });
}


function getDate() {
    var d = new Date(),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('/');
}