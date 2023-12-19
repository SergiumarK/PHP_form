<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
            include "./styles.css"
        ?>
    </style>
</head>
<body>
        <div class="form-holder">
            <form action="./admin.php" method="post">
                <div>
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" placeholder="Title" minlength="3" maxlength="50" required>
                </div>
                <div>
                    <label for="category">Category</label>
                    <select name="category" id="category" required>
                        <option value=""></option>
                        <option value="gadgets">Gadgets</option>
                        <option value="clothes">Clothes</option>
                        <option value="cars">Cars</option>
                    </select>
                </div>
                <div>
                    <label for="options">Options</label>
                    <label for="new">
                        <input type="checkbox" name="options[]" value="new" id="new">
                        <span>New</span>
                    </label>
                    <label for="sh">
                        <input type="checkbox" name="options[]" value="sh" id="sh">
                        <span>Second Hand</span>
                    </label>
                    <label for="sale">
                        <input type="checkbox" name="options[]" value="sale" id="sale">
                        <span>Sale</span>
                    </label>
                </div>
                <div>
                    <label for="location">Location</label>
                    <label for="worldwide">
                        <input type="radio" name="location" id="worldwide" value="worldwide">
                        <span>worldwide</span>
                    </label>
                    <label for="moldova">
                        <input type="radio" name="location" id="moldova" value="moldova">
                        <span>Moldova</span>
                    </label>
                    <label for="chisinau">
                        <input type="radio" name="location" id="chisinau" value="chisinau">
                        <span>Chisinau</span>
                    </label>
                </div>
                <div class="file-input">
                    <label for="images" class="file-selector">
                        <img src="upload.svg" alt="Upload">
                        <label for="images">Choose images</label>
                    </label>
                    <input type="file" name="images" id="images" required accept="image/*">
                </div>
                <button>Add listing</button>
            </form>
        </div>
</body>
</html>