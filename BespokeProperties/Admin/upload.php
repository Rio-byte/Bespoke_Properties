<?php
include "../Admin/processUpload.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Admin/css/uploads.css">
    <script src="script.js" async defer></script>

</head>

<body>
    <div class="header">
        <h2>Property uploads</h2>
    </div>
    <div class="errors">

    </div>
    <div class="upload-form">
        <form action="../Admin/Prod.php" method="POST" enctype="multipart/form-data">
            <?php
            $errors = array();
            include "../errors.php"; ?>
            <div style="width:300px;height:300px;margin-left:100px">
                <label class="picture" for="picture__input" tabIndex="0">
                    <span class="picture__image"></span>
                </label>
                <input type="file" name="picture__input" id="picture__input" required accept="png,jpeg,jpeg">
                <br>
            </div>
            <label for="" class="input-field">
                <input type="text" name="name" id="" placeholder="" required>
                <span class="placeholder">Property name</span>
            </label>
            <label for="" class="input-field">
                <input type="number" name="price" id="" placeholder="" required>
                <span class="placeholder">Price</span>
            </label><br>
            <label for="" class="input-field">
                <input type="text" name="location" id="" placeholder="" required>
                <span class="placeholder">Location</span>
            </label>
            <label for="" class="input-field">
                <select name="type" class="input-field">
                    <option disabled selected>Type</option>
                    <option value="any">Any</option>
                    <option value="houses">Houses</option>
                    <option value="apartments">Apartments</option>
                    <option value="villa">Villa</option>
                    <option value="town home">Town Home</option>
                    <option value="bungalow">Bungalow</option>
                    <option value="loft">Loft</option>
                </select>
            </label></br>
            <label for="" class="input-field">
                <input type="number" name="size" id="" placeholder="" required>
                <span class="placeholder">Size</span>
            </label>
            <label for="" class="input-field">
                <input type="number" name="bedrooms" id="" placeholder="" required>
                <span class="placeholder">Bedrooms</span>
            </label></br>
            <label for="" class="input-field">
                <select name="power" id="">
                    <option disabled selected value="">Power</option>
                    <option value="grid">Main grid</option>
                    <option value="solar">Solar</option>
                </select>
            </label>
            <label for="" class="input-field">
                <select name="water" id="">
                    <option disabled selected>Water</option>
                    <option value="borehole">Borehole</option>
                    <option value="tap">Tap</option>
                    <option value="Other">Other</option>
                </select>
            </label></br>
            <label for="" class="input-field">
                <input type="number" name="year" id="" placeholder="" min="1950" max='2024' required>
                <span class="placeholder">Year of Construction</span>
            </label>
            <label for="" class="input-field">
                <input type="number" name="baths" id="" placeholder="" required>
                <span class="placeholder">Baths</span>
            </label><br>
            <button type="submit" name="submit" class="button"
                style="margin-top:30px ;margin-left:200px;">Upload</button>
        </form>
    </div>
    <script>
        const inputFile = document.querySelector("#picture__input");
        const pictureImage = document.querySelector(".picture__image");
        const pictureImageTxt = "Choose an image";
        pictureImage.innerHTML = pictureImageTxt;

        inputFile.addEventListener("change", function (e) {
            const inputTarget = e.target;
            const file = inputTarget.files[0];

            if (file) {
                const reader = new FileReader();

                reader.addEventListener("load", function (e) {
                    const readerTarget = e.target;

                    const img = document.createElement("img");
                    img.src = readerTarget.result;
                    img.classList.add("picture__img");

                    pictureImage.innerHTML = "";
                    pictureImage.appendChild(img);
                });

                reader.readAsDataURL(file);
            } else {
                pictureImage.innerHTML = pictureImageTxt;
            }
        });

    </script>
</body>

</html>