function addexam(exam){
    db.collection("exam").doc(exam[0]).set({
        examId:exam[0],
        grade:exam[1],
        class:exam[2],
        subject:exam[3],
        date:exam[4],
        year:exam[5]
    })
    .then(function(docRef) {
        alert("exam added successfully");
       // console.log("Document written with ID: ", docRef.id);
    })
    .catch(function(error) {
        alert("Error adding document: ", error);
    });
}
