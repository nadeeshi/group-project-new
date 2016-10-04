<?php
include('connect.php');
$select=mysqli_query($bd,"SELECT * FROM researcher_details order by id desc");
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
        <p> RESEARCHER NAME : <span><?php echo $username; ?></span>
            <a href="deleteResearchers.php?id=<?php echo $id; ?>"
               onclick="return confirm('Are you sure you wish to delete this Record?');">
                <span class="delete" title="Delete"> X </span></a>
        </p>
        <br />
        <p> EMAIL ID : <span><?php echo $usermail; ?></span>
            <a href="editResearchers.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> E </span></a>
        </p>
        <br />
        <p> MOBILE NO : <span><?php echo $usermobile; ?></span>
        </p>
        <br />
        <p> CREATED ON : <span><?php echo $created; ?></span>
        </p>
        <br />
    </div>
<?php } ?>