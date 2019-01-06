function getClassTimeTable(){
    var output;
    db.collection("timetable").where("classNo","==","12M3")
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output=doc.data();
            document.getElementById('classNo').value = output.classNo;
            document.getElementById('classTeacher').value = output.classTeacher;//document.getElementById("mytext").value = "My value";
           
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
   
    
    
    
    alert("get time table sucess fully ",output);
    return output;
}

