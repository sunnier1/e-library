<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style2.css">
    <style>
    .back-button {
        position: relative;
        top: 20px;
    }

    .back-button a {
        display: flex;
        align-items: center;
        font-size: 16px;
        color: #333;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 5px;
    }

    .back-button a i {
        font-size: 20px;
        margin-right: 5px;
    }

    .back-button a:hover {
        background-color: whitesmoke;
    }
</style>

</head>
<body>
<?php include 'top-bar.php'; ?>
    <div class="menu-page">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="bookpage.php">Books</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>    
    </div>
    <div class="back-button">
        <a href="javascript:history.back()"><ion-icon name="arrow-back-outline"></ion-icon></a>
    </div>

    <?php include 'connection.php';
    if(isset($_GET['id'])) {
        $book_id = mysqli_real_escape_string($conn, $_GET['id']);
        $query = "SELECT * FROM books WHERE id = '$book_id'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            echo '<div class="preview-cover">';
            echo '<img src="' . $row['book_cover'] . '" alt="Book Cover">';
            echo '</div>';
            echo '<div class="preview-book">';
            echo '<h1>' . $row['title'] . '</h1>';
            echo '<h4>' . $row['author'] . '</h4>';
            echo '<ul class="preview-genre">';
            $genres = json_decode($row['genre']);
            echo '<ul>';
            foreach ($genres as $genre) {
                echo '<li>' . $genre . '</li>';
            }
            echo '</ul>';
            echo '<div class="synop"></div>';
            echo '<p>Synopsis :  '. $row['description'] . '</p>';
            echo '<button onclick="window.location.href=\'' . $row['full_book'] . '\'">Read</button>';
            echo '</div>';
        }
    }
?>

        <div>
            <p style="font-size: 26px; color: #FF8153; margin-left:40%;">Recomendation for Similiar Books</p>
        </div>
        <div class="fariz">
            <div class="book-fariz">
                <a href="page1.html" class="card-link">
                    <div class="cards12">
                        <div class="posterfariz">
                            <img src="../img/book6.png" alt="Book 1">
                        </div>
                        <div class="details-book">
                            <h4>Book 1 Title</h4>
                                <ul>
                                    <li>Physicological</li>
                                    <li>Business</li>
                                    <li>Genre3</li>
                                    <li>Genre3</li>
                                    <li>Genre3</li>
                                    <li>Genre3</li>
                                </ul>
                            <p>Synopsis: Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                            <p>Characters: Character1, Character2</p>
                        </div>
                    </div>
                    <h2>Book Title</h2>
                    <p>Author</p>
                    <h3>Status</h3>
                </a>
            </div>
            <div class="book-fariz">
                <a href="page1.html" class="card-link">
                    <div class="cards12">
                        <div class="posterfariz">
                            <img src="../img/books2.png" alt="Book 2">
                        </div>
                        <div class="details-book">
                            <h4>Book 2 Title</h4>
                                <ul>
                                    <li>Physicological</li>
                                    <li>Genre2</li>
                                    <li>Genre3</li>
                                </ul>
                            <p>Rating: 4.0</p>
                            <p>Synopsis: Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                            <p>Characters: Character3, Character4</p>
                        </div>
                    </div>
                    <h2>Book Title</h2>
                    <p>Author</p>
                    <h3>Status</h3>
                </a>
            
            </div>
            <div class="book-fariz">
                <a href="page1.html" class="card-link">
                    <div class="cards12">
                        <div class="posterfariz">
                            <img src="../img/books1.png" alt="Book 2">
                        </div>
                        <div class="details-book">
                            <h4>Book 3 Title</h4>
                                <ul>
                                    <li>Physicological</li>
                                    <li>Genre2</li>
                                    <li>Genre3</li>
                                </ul>
                            <p>Rating: 4.0</p>
                            <p>Synopsis: Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                            <p>Characters: Character3, Character4</p>
                        </div>
                    </div>
                    <h2>Book Title</h2>
                    <p>Author</p>
                    <h3>Status</h3>
                </a>
                </div>
                <div class="book-fariz">
                    <a href="page1.html" class="card-link">
                        <div class="cards12">
                            <div class="posterfariz">
                                <img src="../img/books2.png" alt="Book 2">
                            </div>
                            <div class="details-book">
                                <h4>Book 2 Title</h4>
                                    <ul>
                                        <li>Physicological</li>
                                        <li>Genre2</li>
                                        <li>Genre3</li>
                                    </ul>
                                <p>Rating: 4.0</p>
                                <p>Synopsis: Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                <p>Characters: Character3, Character4</p>
                            </div>
                        </div>
                        <h2>Book Title</h2>
                        <p>Author</p>
                        <h3>Status</h3>
                    </a>
                </div>
                <div class="book-fariz">
                    <a href="page1.html" class="card-link">
                        <div class="cards12">
                            <div class="posterfariz">
                                <img src="../img/books1.png" alt="Book 2">
                            </div>
                            <div class="details-book">
                                <h4>Book 3 Title</h4>
                                    <ul>
                                        <li>Physicological</li>
                                        <li>Genre2</li>
                                        <li>Genre3</li>
                                    </ul>
                                <p>Rating: 4.0</p>
                                <p>Synopsis: Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                <p>Characters: Character3, Character4</p>
                            </div>
                        </div>
                        <h2>Book Title</h2>
                        <p>Author</p>
                        <h3>Status</h3>
                    </a>
                    </div>
                    <div class="book-fariz">
                        <a href="page1.html" class="card-link">
                            <div class="cards12">
                                <div class="posterfariz">
                                    <img src="../img/books1.png" alt="Book 2">
                                </div>
                                <div class="details-book">
                                    <h4>Book 3 Title</h4>
                                        <ul>
                                            <li>Physicological</li>
                                            <li>Genre2</li>
                                            <li>Genre3</li>
                                        </ul>
                                    <p>Rating: 4.0</p>
                                    <p>Synopsis: Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                    <p>Characters: Character3, Character4</p>
                                </div>
                            </div>
                            <h2>Book Title</h2>
                            <p>Author</p>
                            <h3>Status</h3>
                        </a>
                        </div>
                        <div class="book-fariz">
                            <a href="page1.html" class="card-link">
                                <div class="cards12">
                                    <div class="posterfariz">
                                        <img src="../img/books2.png" alt="Book 2">
                                    </div>
                                    <div class="details-book">
                                        <h4>Book 2 Title</h4>
                                            <ul>
                                                <li>Physicological</li>
                                                <li>Genre2</li>
                                                <li>Genre3</li>
                                            </ul>
                                        <p>Rating: 4.0</p>
                                        <p>Synopsis: Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                        <p>Characters: Character3, Character4</p>
                                    </div>
                                </div>
                                <h2>Book Title</h2>
                                <p>Author</p>
                                <h3>Status</h3>
                            </a>
                        </div>
        </div>
</body>
</html>