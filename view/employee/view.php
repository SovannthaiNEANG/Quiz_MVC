
<div id="users">
    <div class="col-md-12">
        <div class="pull-left">
            <input class="search" placeholder="Search" />
        </div>

        <div class="pull-right">
            <a href="index.php?action=add"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a> &nbsp;
            
        </div> 
    </div>
    <form action="employee.php" method="POST">
        <table class="table-bordered col-md-12">
            <th class="sort text-center">ID</th>
            <th class="sort text-center" data-sort="fname">Student Name</th>
            <th class="sort text-center" data-sort="age">Age</th>
            <th class="sort text-center" data-sort="salary">Salary</th>
            <th class="sort text-center">Action</th>
            <!-- IMPORTANT, class="list" have to be at tbody -->
<tbody class="list">
    <?php 
        include_once 'connection.php';
        $i=1;
        foreach($data['employee_data'] as $value):
    ?>
    <tr> 
            <td><?php echo $i ; ?></td>
            <td><?php echo $value['firstname']." ".$value['lastname']; ?></td>
            <td><?php echo $value['age']; ?></td>
            <td><?php echo $value['salary']; ?></td>
            <td><a href="index.php?action=delete&id=<?php echo $value['id']; ?>"><i class="glyphicon glyphicon-trash" style="font-size:20px; color:red"></i></a>&nbsp;
                <a href="index.php?action=update&id=<?php echo $value['id']; ?>"><i class="glyphicon glyphicon-pencil" style="font-size:20px; color:blue;"></i></a>&nbsp;
                <a href="index.php?action=detial&id=<?php echo $value['id']; ?>"><i class="glyphicon glyphicon-eye-open" style="font-size:20px; color:green;"></i></a>&nbsp;
            </td>
            
    </tr>
        <?php
    $i++;
    endforeach; ?>
</tbody>
        </table>
    </form>
</div>

<script>
    var options = {
        valueNames: ['id', 'fname', 'age', 'salary']
    };

    var userList = new List('users', options);
</script>