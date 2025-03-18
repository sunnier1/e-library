<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookpage</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <style>
    .detail p {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
    </style>
</head>
<body>
<?php include 'top-bar.php'; ?>

    <div class="menu-page">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="bookpage.php" style="color:#ED553B;">Books</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>    
    </div>
    <div class="filter">
        <form>
            <div class="category-filter" onclick="toggleDisplay('statusOptions')">Status</div>
        <div id="statusOptions" class="options">
            <label for="free"> Free</label><input type="checkbox" id="free" name="status" value="Free">
            <label for="premium"> Premium</label><input type="checkbox" id="premium" name="status" value="Premium">
        </div>
        <div class="category-filter" onclick="toggleDisplay('genreOptions')">Genre</div>
        <div id="genreOptions" class="options">
            <label for="fiction"> Fiction</label><input type="checkbox" id="fiction" name="genre" value="Fiction"></br>
            <label for="nonfiction"> Non-Fiction</label><input type="checkbox" id="nonfiction" name="genre" value="Non-Fiction"></br>
            <label for="education"> Education</label><input type="checkbox" id="education" name="genre" value="Education"></br>
            <label for="medical"> Medical</label><input type="checkbox" id="medical" name="genre" value="Medical"></br>
            <label for="engineering"> Engineering</label><input type="checkbox" id="engineering" name="genre" value="Engineering"></br>
            <label for="business"> Business</label><input type="checkbox" id="business" name="genre" value="Business"></br>
            <label for="humanities"> Humanities</label><input type="checkbox" id="humanities" name="genre" value="Humanities"></br>
            <label for="technology"> Technology</label><input type="checkbox" id="technology" name="genre" value="Technology"></br>
            <label for="law"> Law</label><input type="checkbox" id="law" name="genre" value="Law"></br>
            <label for="biography"> Biography</label><input type="checkbox" id="biography" name="genre" value="Biography"></br>
        </div>
        <div class="category-filter" onclick="toggleDisplay('levelOptions')">Educational Level</div>
        <div id="levelOptions" class="options">
            <label for="elementary"> Elementary-Education</label><input type="radio" id="elementary" name="educationLevel" value="Elementary-Education"><br>
            <label for="secondary"> Secondary-Education</label><input type="radio" id="secondary" name="educationLevel" value="Secondary-Education"><br>
            <label for="higher"> Higher-Education</label><input type="radio" id="higher" name="educationLevel" value="higher-Education"><br>
        </div>
       
        <button type="button" onclick="applyFilters()">Filter</button> 
        </form>
    </div>

    <div class="btn1">
        <div class="filtering">
            <select type="select" id="filter-sequence"name="abjad-filter" placeholder="Sort by : Alphabetically, A-Z">
                <option value="" disabled selected hidden>Sort by : Alphabelically, A-Z </option>
                <option value="Up">A - Z</option>
                <option value="Down">Decrease</option>
            </select>
        </div>
        <div class="btn2">
            <button class="book-pg" style="background-color: #553991;"> Book</button>
            <button class="journal-pg" onclick="window.location.href = 'journalpage.php';"> Journal</button>
        </div>       
    </div>       
    <div class="content-BJ">
    <?php
    include "connection.php";

    $query = "SELECT * FROM books where upload_type ='book' ";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="super-card">';
            echo '<a href="preview.php?id=' . $row['id'] . '">';
            echo '<div class="cards">';
            echo '<div class="cover">';
            echo '<img src="' . $row['book_cover'] . '">';
            echo '</div>';
            echo '<div class="detail">';
            echo '<h4>' . $row['title'] . '</h4>';
            $genres = json_decode($row['genre']);
            echo '<ul>';
            foreach ($genres as $genre) {
                echo '<li>' . $genre . '</li>';
            }
            echo '</ul>';
            echo '<p>Synopsis: ' . $row['description'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<h2>' . $row['title'] . '</h2>';
            echo '<p>' . $row['author'] . '</p>';
            echo '<h3>' . $row['status'] . '</h3>';
            echo '</a>';
            echo '</div>';
        }
    } else {
        echo '<p>No books found.</p>';
    }

    mysqli_close($conn);
    ?>
    </div>
    <script>

        function toggleDisplay(optionId) {
            var optionsDiv = document.getElementById(optionId);
            if (optionsDiv.style.display === 'none' || optionsDiv.style.display === '') {
                optionsDiv.style.display = 'block';
            } else {
                optionsDiv.style.display = 'none';
            }
        }

        function applyFilters() {
            alert('Filtering based on selections...');
        }
    </script>
    

</body>
</html>