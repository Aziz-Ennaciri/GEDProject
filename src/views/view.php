<?php
require_once(__DIR__.'/../controllers/addSQL.php');
?>


<head>
    <link rel="stylesheet" href="../assests/css/pop-up.css">
    <link rel="stylesheet" href="../assests/css/style2.css">
</head>

<body>
    <div class="panel">
        <div class="title">
            <h5 class="font-semibold text-lg">List of Users</h5>
        </div>
        
        <div class="action-buttons add">
            <a href="#" class="add-button" id="addButton"><img src="../assests/images/plus.png" alt=""></a>
        </div>
        <table id="myTable" class="simple-table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>City</th>
                    <th>Gender</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM users";
                $result = mysqli_query($connection, $query);
                if (!$result) {
                    die("Query failed: " . mysqli_error($connection));
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $row['fname']; ?></td>
                            <td><?php echo $row['lname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['number']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td>
                            <button class="view-file-button" onclick="viewFile('<?php echo $row['file_path']; ?>')">View File</button>
                            </td>
                            <td class="action-buttons">
                                <a href="../views/edit.php?id=<?php echo $row["id"]; ?>" class="edit-button"><img src="../assests/images/edit.png" alt="Edit"></a>
                                <a href="../views/delete.php?id=<?php echo $row["id"]; ?>" class="delete-button"><img src="../assests/images/trash.png" alt="Delete"></a>
                            </td>

                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>


        <!-- pop-up form -->

        <?php include('./pop-up/pop-up.php'); ?>




        <!-- end of this pop-up -->
        

    </div>
    

</body>
<script >function viewFile(filePath) {
    window.open(filePath, '_blank');
}
</script>