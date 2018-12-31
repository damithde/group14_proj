function uploadstudentpic(bucket){
    
    var uploader = document.getElementById('uploader');
    var fileButton = document.getElementById('myfile');
    fileButton.addEventListener('change', function(e){
    var file = e.target.files[0];
    console.log(file.name);
    var storageRef = firebase.storage().ref(bucket+'/'+file.name);
    var task = storageRef.put(file);
    task.on('state_changed', function progress(snapshot) {
    var percentage = (snapshot.bytesTransferred/snapshot.totalBytes)*100;
    uploader.value = percentage;
    }, function error(err) {

    },function complete() {
        storageRef.getDownloadURL().then(function(url) {
            // `url` is the download URL for 'images/stars.jpg'
            console.log("hello");
            // Or inserted into an <img> element:
            var img = document.getElementById('propic').src=url;
          }).catch(function(error) {
            // Handle any errors
        });
    });
    });  

}
