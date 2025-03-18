<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Administration</title>
    <link rel="stylesheet" href="../../css/admin_style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <?php
    include "../connection.php";
    if (isset($_GET['id'])) {
        $id = htmlspecialchars($_GET['id']);
        $sql = "DELETE FROM payment WHERE id = '$id'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            header("location: admin_payment.php");
        } else {
            echo "Data failed to be deleted";
        }
    }

    $search = isset($_POST['input']) ? mysqli_real_escape_string($conn, $_POST['input']) : "";
    $query = "SELECT * FROM payment WHERE full_name LIKE '%$search%' OR card_number LIKE '%$search%' OR payment_method LIKE '%$search%' ORDER BY date";
    $result = mysqli_query($conn, $query);
    ?>

    <div class="bg-all">
        <h1>Sales Order</h1>
        <hr>
        <div>
            <form method="post">
                <input type="text" id="search_text" name="input" autocomplete="off" class="tex" placeholder="Search Payment...">
            </form>
            <hr>
        </div>
        <table id="table-data">
            <thead>
                <tr class="ours">
                    <th>#</th>
                    <th>Date</th>
                    <th>Method</th>
                    <th>Name</th>
                    <th>Card Number</th>
                    <th>Expiration Date</th>
                    <th>CVV</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th colspan="2" style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $total_income = 0;
                if (mysqli_num_rows($result) > 0): ?>
                    <?php $i = 1; while ($data = mysqli_fetch_array($result)): ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $data["date"]; ?></td>
                            <td><?= $data["payment_method"]; ?></td>
                            <td><?= $data["full_name"]; ?></td>
                            <td><?= $data["card_number"]; ?></td>
                            <td><?= $data["expiration_month"] . "/" . $data["expiration_year"]; ?></td>
                            <td><?= $data["cvv"]; ?></td>
                            <td><?= number_format($data["price"], 2); ?></td>
                            <td><?= $data["status"]; ?></td>
                            <td><a href="#" onclick="editEntry(<?= htmlspecialchars($data['id']); ?>)"><ion-icon name="create-outline"></ion-icon></a></td>
                            <td><a href="<?= htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . htmlspecialchars($data['id']); ?>" onclick="return confirm('Delete the data?')"><ion-icon name="trash-outline"></ion-icon></a></td>
                        </tr>
                        <?php $total_income += $data["price"]; ?>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="11">No Data Found</td></tr>
                <?php endif; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7" style="text-align: right;background-color:white"><strong>Total Income:</strong></td>
                    <td colspan="4" style="background-color:white"><strong><?= number_format($total_income, 2); ?></strong></td>
                </tr>
            </tfoot>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#search_text').keyup(function() {
                var form_data = $(this).closest('form').serialize();
                $.ajax({
                    url: 'admin_payment.php', 
                    type: 'post',
                    data: form_data,
                    success: function(data) {
                        var startIndex = data.indexOf('<table'); 
                        var endIndex = data.indexOf('</table>') + 8; 
                        var tableData = data.substring(startIndex, endIndex); 
                        $('#table-data').replaceWith(tableData); 
                    }
                });
            });
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>
