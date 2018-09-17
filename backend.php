<?php

require 'connectdb.php';

if(isset($_REQUEST['submit_form'])){
    $name= mysqli_real_escape_string($connect, strip_tags($_REQUEST['name']));
    $email=mysqli_real_escape_string($connect, strip_tags($_REQUEST['email']));
    $num=mysqli_real_escape_string($connect, strip_tags($_REQUEST['number']));
    $insert_query="INSERT INTO user (u_name,u_email,u_number) VALUES ('$name','$email','$num')";
    $run_insert= mysqli_query($connect, $insert_query);
}

if(isset($_REQUEST['del_id'])){
    $del_query="DELETE FROM user Where u_id='$_REQUEST[del_id]'";
    $run_del= mysqli_query($connect, $del_query);
}

if(isset($_REQUEST['edit_user'])){
    echo 'found';
    $name= mysqli_real_escape_string($connect, strip_tags($_REQUEST['name']));
    $email=mysqli_real_escape_string($connect, strip_tags($_REQUEST['email']));
    $num=mysqli_real_escape_string($connect, strip_tags($_REQUEST['number']));
    $insert_query="INSERT INTO user (u_name,u_email,u_number) VALUES ('$name','$email','$num')";
    $update_query="UPDATE user SET u_name='$_REQUEST[name]',u_email='$_REQUEST[email]',u_number='$_REQUEST[number]' where u_id='$_REQUEST[u_id]'";
    $run_update= mysqli_query($connect, $update_query);
}

$select="SELECT * from user";
$var=1;
$run_select= mysqli_query($connect, $select);
while ($row= mysqli_fetch_assoc($run_select)){
    echo "<tr>
                        <td>$var</td>
                        <td>$row[u_id]</td>    
                        <td>$row[u_name]</td>
                        <td>$row[u_email]</td>
                        <td>$row[u_number]</td>
                        <td><button class='btn btn-success' data-toggle='modal' data-backdrop='static' data-target='#edit_user$row[u_id]'>Edit</button>
                        <button class='btn btn-danger'onclick='del_func($row[u_id])'>Delete</button>
                            <div class='modal fade' id='edit_user$row[u_id]' role='dialog'>
                                <div class='modal-dialog'>
                                    <div class='modal-content' >
                                        <div class='modal-header'>
                                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                        <h4 class='modal-title'>Edit user details</h4>
                                        </div>
                                        <div class='modal-body'>
                                        <form onsubmit='return edit_user($row[u_id]);' id='edit_form'>
                                            <div class='form-group '>
                                                <input type='text' placeholder='Enter Name' id='euname$row[u_id]' value='$row[u_name]'  class='form-control' >
                                            </div>
                                            <div class='form-group'>
                                                <input type='email' placeholder='Enter Email' id='euemail$row[u_id]' value='$row[u_email]'  class='form-control'>
                                            </div>
                                            <div class='form-group'>
                                                 <input type='text' placeholder='Enter Contact No.' id='eunumber$row[u_id]' value='$row[u_number]'  class='form-control'>
                                             </div>
                                            <div class='form-group'>
                                                <button class='btn btn-info btn-block'>Update</button> 
                                            </div>
                              
                                        </form>


                                        </div>
                                        <div class='modal-footer'>
                                        <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
                                        </div>
                                    </div>
                                </div>
                             </div></td>
</tr>";
    $var++;
}
?>