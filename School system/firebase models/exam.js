function addexam(exam){
    db.collection("exam").doc(exam[0]).set({
        grade:exam[3],
        class:exam[1],
        subject:exam[4],
        date:exam[2],
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
 