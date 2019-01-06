//var clzNo="12M3";
function getClassTimeTable(clzNo){
    var output;
    db.collection("timetable").where("classNo","==",clzNo)
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
   
    
    
    
    //alert("get time table sucess fully ",output);
    return output;
}


function getTimeSlot(timeLine,dayLine,subCode,lecCode){
    
    var output;
    db.collection("timetable").where("time","==",timeLine).where("date","==",dayLine)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output=doc.data();
            document.getElementById(subCode).value = output.subjectCode;
            document.getElementById(lecCode).value = output.regNo;
           
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
    
}

