<div class="container">
    <div class="row">
    <div class="col col-md-4"></div>
    <div class="col col-md-4">
    <div class="card bg-warning">
        <div class="card-header text-center bg-info">
            <h1>Insert Data</h1>
        </div>
        <div class="card-body">
            <form action="#" method="post">
            <div class="form-group">
                <a href="index.php?action=view"><button type="button" class="btn btn-warning">Back</button></a> 
            </div>
                <div class="form-group">
                    <label for="">Firstname</label>
                    <input type="text" name="firstname" placeholder="Put your firstname" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Lastname</label>
                    <input type="text" name="lastname" placeholder="Put your lastname" class="form-control">
                </div>
                
                <div class="form-group">
                <label for="">Age</label>
                    <input type="number" name="age" placeholder="Put your age" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Salary</label>
                    <input type="number" name="salary" placeholder="Put your salary" class="form-control">
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
   
?>