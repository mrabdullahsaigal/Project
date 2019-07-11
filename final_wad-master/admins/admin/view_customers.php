<div class="row">
    <div class="col-sm-12">
        <h1>Customers</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $get_cust = "select * from customers";
            $run_cust = mysqli_query($con,$get_cust);
            $count_cust = mysqli_num_rows($run_cust);
            if($count_cust==0){
                echo "<h2> No Customer found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_cust = mysqli_fetch_array($run_cust)) {
                    $cust_id = $row_cust['cust_id'];
                    $cust_name = $row_cust['cust_name'];
                    $cust_email = $row_cust['cust_email'];
                    $cust_contact = $row_cust['cust_contact'];
                    $cust_address = $row_cust['cust_address'];
                    ?>
                    <tr>
                        <th scope="row"><?php echo ++$i; ?></th>
                        <td><?php echo $cust_name; ?></td>
                        <td><?php echo $cust_email; ?></td>
						<td><?php echo $cust_contact; ?></td>
						<td><?php echo $cust_address; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>