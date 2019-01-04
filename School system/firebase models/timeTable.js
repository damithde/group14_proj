function addTimeTable(timeTableList){
    db.collection("timeTable").doc(timeTableList[0]).set({
        regno: timeTableList[0],
        Fname: timeTableList[1],
        Mname:timeTableList[13],
        Lname: timeTableList[2],
        contact: timeTableList[3],
        dob: timeTableList[4],
        nationality: "SriLankan",
        address:timeTableList[5],
        religion: timeTableList[6],
        school: timeTableList[7],
        grade: timeTableList[8],
        class: timeTableList[9],
        email: timeTableList[10],
        profileimg:timeTableList[11],
        stuid:timeTableList[12],
        medium:timeTableList[14],
        parent: timeTableList[7]

    })
    .then(function(docRef) {
        alert("student added successfully");
       // console.log("Document written with ID: ", docRef.id);
    })
    .catch(function(error) {
        alert("Error adding document: ", error);
    });
}