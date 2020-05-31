function upload() {
    var image = document.getElementById("image").files[0];

    var imageNmae = image.name;

    var storageRef = firebase.storage().ref('RedeemPic/' + imageNmae);

    var uploadTask = storageRef.put(image);

    uploadTask.on('state_changed', function (snapshot) {
        var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;

        console.log("upload is " + progress + "done");
    }, function (error) {

        console.log(error.message);
    }, function () {
        uploadTask.snapshot.ref.getDownloadURL().then(function (DownloadURL) {
            console.log(DownloadURL)
        })
    })
}