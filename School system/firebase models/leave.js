function addleave(leave){
    //console.log("absbj");
    db.collection("leaves").add({
        schools:leave[0],
        name: leave[1],
        TeachId: leave[2],
        Ldays: leave[3],
        startdate: leave[4],
        endingdate: leave[5],
        Ltype: leave[6],
        reason: leave[7]

    })
    .then(function(docRef) {
        alert("leave added successfully");
        console.log("Document written with ID: ", docRef.id);
    })
    .catch(function(error) {
            //console.error("Error adding document: ", error);
    });



}