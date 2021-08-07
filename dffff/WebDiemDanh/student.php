<?php
$html = "";
if (!isset($_GET['id'])) {
    // header('location:index.php');
} else {
    if (!isset($_COOKIE['ID'])) {
        // setcookie('ID', $_GET['id'], time() + 5);
        // $html = 'display:flex;';
    } else {
        // $html = "display:none;";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="vendor/fontawesome-free-5.14.0-web/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="icon" href="images/attendance-icon-7.jpg">
</head>

<body>

    <div class="formStudent grid-fullwidth ">


        <form style="<?php echo $html ?>" action="attendance.php" class="form modalForgotPass" data-aos="fade-up" id="formfeedback" method="POST">


            <h2 class=""><img src="images/attendance-icon-7.jpg" style="width: 60px;" alt="" srcset=""></h2>
            <h2 class="">Attendance</h2>
            <div class=" form-div">
                <input class="input" type="text" name="name" required>
                <label for="user" class="form-label">
                    <span class="label-content">Full name</span>
                </label>
                <span class="input-error "></span>
            </div>
            <div class=" form-div">
                <input class="input" type="text" id="idstudent" name="idstudent" required>
                <label for="user" class="form-label">
                    <span class="label-content">ID</span>
                </label>
                <span class="input-error "></span>
            </div>
            <div class=" form-div">
                <input class="input" type="text" id="idclass" name="idclass" value="<?php echo $_GET['id'] ?>" required>
                <label for="user" class="form-label">
                    <span class="label-content">ID Class</span>
                </label>
                <span class="input-error "><?php
                                            if (isset($_GET['err'])) {
                                                echo $_GET['err'];
                                            }
                                            ?></span>
            </div>

            <div class="faceaps">
                <button type="button" class="btn-getstarted " style="background-color: #3db5ad;color: white;" onclick="init()">Xác minh</button>
                <div id="webcam-container"></div>
                <div id="label-container"></div>
                <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.3.1/dist/tf.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@0.8/dist/teachablemachine-image.min.js"></script>
                <script type="text/javascript">
                    // More API functions here:
                    // https://github.com/googlecreativelab/teachablemachine-community/tree/master/libraries/image

                    // the link to your model provided by Teachable Machine export panel
                    const URL = "https://teachablemachine.withgoogle.com/models/Y34LucEOv/";

                    let model, webcam, labelContainer, maxPredictions;

                    // Load the image model and setup the webcam
                    async function init() {
                        const modelURL = URL + "model.json";
                        const metadataURL = URL + "metadata.json";

                        // load the model and metadata
                        // Refer to tmImage.loadFromFiles() in the API to support files from a file picker
                        // or files from your local hard drive
                        // Note: the pose library adds "tmImage" object to your window (window.tmImage)
                        model = await tmImage.load(modelURL, metadataURL);
                        maxPredictions = model.getTotalClasses();

                        // Convenience function to setup a webcam
                        const flip = true; // whether to flip the webcam
                        webcam = new tmImage.Webcam(200, 200, flip); // width, height, flip
                        await webcam.setup(); // request access to the webcam
                        await webcam.play();
                        window.requestAnimationFrame(loop);

                        // append elements to the DOM
                        document.getElementById("webcam-container").appendChild(webcam.canvas);
                        labelContainer = document.getElementById("label-container");
                        for (let i = 0; i < maxPredictions; i++) { // and class labels
                            labelContainer.appendChild(document.createElement("div"));
                        }

                    }

                    async function loop() {
                        webcam.update(); // update the webcam frame
                        await predict();
                        window.requestAnimationFrame(loop);
                    }

                    // run the webcam image through the image model
                    async function predict() {
                        // predict can take in an image, video or canvas html element
                        const prediction = await model.predict(webcam.canvas);
                        for (let i = 0; i < maxPredictions; i++) {
                            const classPrediction =
                                prediction[i].className + ": " + prediction[i].probability.toFixed(2);
                            if (prediction[i].probability.toFixed(2) ==1)
                                if(document.querySelector("#idstudent").value== prediction[i].className){
                                    stu = document.querySelector("#idstudent").value
                                    cls = document.querySelector("#idclass").value
                                    window.location="attendance.php?idstudent="+stu+"&idclass="+cls;
                                    
                                    console.log(prediction[i].className);
                                }
                            }
                    }
                </script>

            </div>

        </form>

    </div>
</body>

</html>