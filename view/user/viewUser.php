 
<div id="users">
    <div class="col-md-12">
        <div class="pull-right">
            <a href="index.php?action=addUser"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a> &nbsp;
            
        </div> 
    </div>
    <form action="employee.php" method="POST">
        <table class="table-bordered col-md-12">
            <th class="sort text-center">ID</th>
            <th class="sort text-center" data-sort="fname">User Name</th>
            <th class="sort text-center" data-sort="name">Name</th>
            <th class="sort text-center" data-sort="salary">Password</th>
            <th class="sort text-center">Action</th>
            <!-- IMPORTANT, class="list" have to be at tbody -->
<tbody class="list">
    <?php 
        include_once 'connection.php';
        $i=1;
        foreach($data['user_data'] as $value):
    ?>
    <tr> 
            <td><?php echo $i ; ?></td>
            <td><?php echo $value['username'] ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['password']; ?></td>
            <td><a href="index.php?action=deleteUser&id=<?php echo $value['id']; ?>"><i class="glyphicon glyphicon-trash" style="font-size:20px; color:red"></i></a>&nbsp;
                <a href="index.php?action=updateUser&id=<?php echo $value['id']; ?>"><i class="glyphicon glyphicon-pencil" style="font-size:20px; color:blue;"></i></a>&nbsp;
            </td>
            
    </tr>
        <?php
    $i++;
    endforeach; ?>
</tbody>
        </table>
    </form>
</div>