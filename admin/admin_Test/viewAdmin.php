<?php
include('connect.php');
$select=mysqli_query($bd, "SELECT * FROM admin_details order by id desc");
$i=1;
while($userrow=mysqli_fetch_array($select))
{
    $id=$userrow['id'];
    $username=$userrow['username'];
    $usermail=$userrow['emailid'];
    $usermobile=$userrow['mobileno'];
    $created=$userrow['created']
    ?>

    <div class="display">
        <div> USER NAME : <span><?php echo $username; ?></span>
            <a href="deleteAdmin.php?id=<?php echo $id; ?>"
               onclick="return confirm('Are you sure you wish to delete this Record?');">
                <span class="delete" title="Delete"> X </span></a>
        </div>
        <br />
        <div> EMAIL ID : <span><?php echo $usermail; ?></span>
            <a href="editAdmin.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a>
        </div>
        <br />
        <div> MOBILE NO : <span><?php echo $usermobile; ?></span>
        </div>
        <br />
        <div> CREATED ON : <span><?php echo $created; ?></span>
        </div>
        <br />
    </div>
<?php } ?>