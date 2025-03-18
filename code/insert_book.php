<?php
include 'top-bar.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "connection.php";

    $upload_type = mysqli_real_escape_string($conn, $_POST['upload_type']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $publication_year = mysqli_real_escape_string($conn, $_POST['publication_year']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $genre = json_encode($_POST['genre']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $edu_level = mysqli_real_escape_string($conn, $_POST['edu_level']);

    $targetDir = "./uploads/";
    $bookCoverName = basename($_FILES["book_cover"]["name"]);
    $bookCoverPath = $targetDir . $bookCoverName;
    $fullBookName = basename($_FILES["full_book"]["name"]);
    $fullBookPath = $targetDir . $fullBookName;

    $sql = "INSERT INTO books (upload_type, title, author, publication_year, city, state, description, genre, status, edu_level, book_cover, full_book) 
            VALUES ('$upload_type', '$title', '$author', '$publication_year', '$city', '$state', '$description', '$genre', '$status', '$edu_level', '$bookCoverPath', '$fullBookPath')";
    
    if (mysqli_query($conn, $sql)) {
        move_uploaded_file($_FILES["book_cover"]["tmp_name"], $bookCoverPath);
        move_uploaded_file($_FILES["full_book"]["tmp_name"], $fullBookPath);
        header("location:bookpage.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Book</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .upload-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .checkbox-group {
            margin-bottom: 10px;
        }

        .checkbox {
            margin-right: 5px;
        }

        .radio-group {
            margin-bottom: 10px;
        }

        .radio {
            margin-right: 5px;
        }

        .file-input {
            margin-top: 10px;
            display: block;
        }

        .upload-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .upload-button:hover {
            background-color: #0056b3;
        }

        @media screen and (max-width: 768px) {
            .container {
                width: 90%;
            }

            .upload-form {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upload Book</h2>
        <form action="insert_book.php" method="post" enctype="multipart/form-data" class="upload-form">
            <label for="upload_type">Type Book:</label>
            <select name="upload_type" id="upload_type" class="input-field">
                <option value="" disabled selected hidden>Book or Journal</option>
                <option value="book">Book</option>
                <option value="journal">Journal</option>
            </select>
            
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" class="input-field" required>
            
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" class="input-field" required>
            
            <label for="publication_year">Publication Year:</label>
            <input type="text" id="publication_year" name="publication_year" class="input-field" required>
            
            <label for="city">City:</label>
            <input type="text" id="city" name="city" class="input-field" required>
            
            <label for="state">State:</label>
            <input type="text" id="state" name="state" class="input-field" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" class="input-field" required></textarea>
            
            <label for="field_genre">Genres:</label>
            <div class="checkbox-group">
                <input type="checkbox" id="fiction" name="genre[]" value="Fiction" class="checkbox">
                <label for="fiction">Fiction</label>
                <input type="checkbox" id="nonfiction" name="genre[]" value="Non-Fiction" class="checkbox">
                <label for="nonfiction">Non-Fiction</label>
                <input type="checkbox" id="education" name="genre[]" value="Education" class="checkbox">
                <label for="education">Education</label>
                <input type="checkbox" id="biography" name="genre[]" value="Biography" class="checkbox">
                <label for="biography">Biography</label>
                <input type="checkbox" id="business" name="genre[]" value="Business" class="checkbox">
                <label for="business">Business</label>
                <input type="checkbox" id="sains" name="genre[]" value="Science-and-Technology" class="checkbox">
                <label for="sains">Science and Technology</label>
                <input type="checkbox" id="medicine" name="genre[]" value="Medicine-and-Health" class="checkbox">
                <label for="medicine">Medicine and Health</label>
                <input type="checkbox" id="law" name="genre[]" value="Law" class="checkbox">
                <label for="law">Law</label>
                <input type="checkbox" id="economy" name="genre[]" value="Economy" class="checkbox">
                <label for="economy">Economy</label>
            </div>
            
            <label>Status:</label>
            <div class="radio-group">
                <input type="radio" id="free" name="status" value="Free" class="radio">
                <label for="free">Free</label>
                <input type="radio" id="premium" name="status" value="Premium" class="radio">
                <label for="premium">Premium</label>
            </div>

            <label>Educational Level:</label>
            <div class="radio-group">
                <input type="radio" id="elementary" name="edu_level" value="Elementary" class="radio">
                <label for="elementary">Elementary</label>
                <input type="radio" id="secondary" name="edu_level" value="Secondary" class="radio">
                <label for="secondary">Secondary</label>
                <input type="radio" id="higher_edu" name="edu_level" value="Higher-Education" class="radio">
                <label for="higher_edu">Higher Education</label>
            </div>
            
            <label for="book_cover">Book Cover:</label>
            <input type="file" id="book_cover" name="book_cover" class="file-input">
            
            <label for="full_book">Full Book:</label>
            <input type="file" id="full_book" name="full_book" class="file-input">
            
            <div style="margin-top: 20px; text-align: center;">
                <button type="submit" style="background-color: #393280; color: white; padding: 15px 100px; border: none; border-radius: 8px; font-size: 18px; cursor: pointer; display: inline-block; margin-left: 90%">Upload</button>
            </div>
        </form>
    </div>
</body>
</html>