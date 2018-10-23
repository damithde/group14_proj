var uname= document.getElementById("uname");
var pass= document.getElementById("pass");

var users=db.collection('users');
var querry =users.where("username","==","uname");
querry.get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            // doc.data() is never undefined for query doc snapshots
            if (doc.data().username==uname){
                if(doc.data().password==pass){

                }
            } 
            
            
            //console.log(doc.id, " => ", doc.data().username);
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });