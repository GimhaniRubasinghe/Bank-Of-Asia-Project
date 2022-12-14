<?php
include_once ("config/db_connect.php");

$conn = connect();

$sql = "SELECT * FROM foreign_accounts_per_cus";
$result = mysqli_query($conn, $sql);
$views = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);

?>

<div class="container" style="padding: 30px">
    <h5 class="text-center">Foreign accounts per customer</h5>
    <div class="row" style="margin-top: 50px">
        <div class="col-md-6 offset-md-3">
            <div class="card" style="width: 100%; padding: 10px">
                <table id="view" class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th>Customer ID</th>
                        <th>Number of Accounts</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($views as $view) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($view["customer_id"]);?></td>
                            <td><?php echo htmlspecialchars($view["no_of_accounts"]);?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
