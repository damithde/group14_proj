// function addexam(exam){
//     db.collection("exam").doc(exam[0]).set({
//         grade:exam[3],
//         class:exam[1],
//         subject:exam[4],
//         date:exam[2],
//         term:exam[5]
//     })
//     .then(function(docRef) {
//         alert("exam added successfully");
//        // console.log("Document written with ID: ", docRef.id);
//     })
//     .catch(function(error) {
//         alert("Error adding document: ", error);
//     });
// }


function addexam(exams,result){
    var x= student[8]+student[9];
    db.collection("exam").doc(exams[2]).set({
        school: exams[0],
        term:exams[1],
        examid: exams[2],
        date:exams[3],
        grade: exams[4],
        class: exams[5],
        subject: exams[6],
        result:result

    })
    .then(function(docRef) {
        alert("exam results added successfully");
    // console.log("Document written with ID: ", docRef.id);
    })
    .catch(function(error) {
        alert("Error adding document: ", error);
    });
}
 