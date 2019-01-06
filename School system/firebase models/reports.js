{/* <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"> </script> */}
// var canvas = document.getElementById('myChart');
// var data = {
//     labels: ["January", "February", "March", "April", "May", "June", "July"],
//     datasets: [
//         {
//             label: "My First dataset",
//             backgroundColor: "rgba(255,99,132,0.2)",
//             borderColor: "rgba(255,99,132,1)",
//             borderWidth: 2,
//             hoverBackgroundColor: "rgba(255,99,132,0.4)",
//             hoverBorderColor: "rgba(255,99,132,1)",
//             data: [65, 59, 30, 81, 56, 55, 40],
//         }
//     ]
// };
// var option = {
//     animation: {
//         duration:5000
//     }

// };


// var myBarChart = Chart.Bar(canvas,{
//     data:data,
//     options:option
// });



function addreport(student) {
    //console.log("Document written with ID");
    db.collection("reports").doc(student[0]).set({
        regno: student[0],
        name: student[1],
        school: student[2],
        class: student[3],
        grade: student[4],
        year: student[5],
        termno: student[6],
        sub1: student[7],
        sub2: student[8],
        sub3: student[9],
        sub4: student[10],
        sub5: student[11],
        sub6: student[12],
        sub7: student[13],
        sub8: student[14],
        sub9: student[15],
        totalmarks: student[16],
        position: student[17],
    
    })
    .then(function (docRef) {
            alert("report added successfully");
            // console.log("Document written with ID: ", docRef.id);
    })
    .catch(function (error) {
            alert("Error adding document: ", error);
    });

    db.collection("terms").doc(student[0]).set({
        school: student[2],
        class: student[3],
        grade: student[4],
        year: student[5],
        termno: student[6],
    })
}

function getreports(Regno,Class,Grade,Year,Term) {
    var output = {};
    db.collection("terms").where("school", "==",School ).where("regno", "==", Regno).where("class", "==", Class).where("grade", "==", Grade).where("year", "==", Year).where("termno", "==", Term)
        .get()
        .then(function (querySnapshot) {
            querySnapshot.forEach(function (doc) {
                output[doc.id] = doc.data();
                //console.log(doc.id, " => ", doc.data());

            });
        })
        .catch(function (error) {
            console.log("Error getting documents: ", error);
        });
    return output;

}
function updatestudent(regno,student,parent) {
    db.collection("students").doc(regno).update({
        "regno": student[0],
        "name": student[1],
        "school": student[2],
        "class": student[3],
        "grade": student[4],
        "year": student[5],
        "termno": student[6],
        "sub1": student[7],
        "sub2": student[8],
        "sub3": student[9],
        "sub4": student[10],
        "sub5": student[11],
        "sub6": student[12],
        "sub7": student[13],
        "sub8": student[14],
        "sub9": student[15],
        "totalmarks": student[16],
        "position": student[17],
    })
        .then(function () {
            console.log("Document successfully updated!");
        });
}