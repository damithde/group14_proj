function searccertificate(id){
    var output={};
    db.collection("certificates").where("school","==", id).where("sid","==")
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output[doc.id]=doc.data();
            // doc.data() is never undefined for query doc snapshots
            console.log(doc.id, " => ", doc.data());
        });
    })
    .catch(function(error) {
        alert('certificate not found');
        console.log("Error getting documents: ", error);
    });

}
