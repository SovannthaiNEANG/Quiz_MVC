
   
   
   <div class="container">
   <div class="row">
   <div class="col col-md-4"></div>
   <div class="col col-md-4"> 
   <div class="card bg-warning">
       <div class="card-header text-center bg-info">
           <h1>Update Data</h1>
       </div>
       <div class="card-body">
           <div class="form-group">
               <a href="index.php?action=view"><button type="button" class="btn btn-warning">Back</button></a> 
           </div>
           <?php
           include "connection.php";
           $value=array();
            foreach ($data['employee_data'] as $item) {
            $value=$item;
            // var_dump($value);
           ?>
           <form action="index.php?action=edit&id=<?php echo $value['id']; ?>" method="post">
               <div class="form-group">
                   <label for="">Firstname</label>
                   <input type="text" value="<?php echo $value['firstname'] ?>" name="firstname" placeholder="Put your firstname" class="form-control">
               </div>
               <div class="form-group">
               <label for="">Lastname</label>
                   <input type="text" value="<?php echo $value['lastname'] ?>" name="lastname" placeholder="Put your lastname" class="form-control">
               </div>
               
               <div class="form-group">
               <label for="">Age</label>
                   <input type="number" value="<?php echo $value['age'] ?>" name="age" placeholder="Put your age" class="form-control">
               </div>
               <div class="form-group">
               <label for="">Salary</label>
                   <input type="number" value="<?php echo $value['salary'] ?>" name="salary" placeholder="Put your salary" class="form-control">
               </div>
               <div class="form-group">
                   <button type="submit" name="btn-submit" class="btn btn-success">Save</button>
               </div>
           </form>
       </div>
   </div>
   </div>
   <div class="col col-md-4"></div>
   
   </div>
</div>

<?php
 }

