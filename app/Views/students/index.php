<?= $this->extend('layout/app.php') ?>

<?= $this->section('content') ?>

<div class="container">
            <div class="row">
                <div class="col-lg-12 ">

                <?php
                    if(session()->getFlashdata('status'))
                    {
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
                            <strong>Heyy!</strong> <?= session()->getFlashdata('status');?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                             </button>
                    </div>

                    <?php
                    }
                ?>
                


                    <div class="card mt-5">
                        <div class="card-header bg-secondary ">
                            <div class="row">
                                <div class="col">
                                <h4 class="text-center" >Students</h4>
                                </div>
                               
                               <a href="<?= base_url('students/insert')?>"><button class="btn btn-sm float-right " style="background-color:aliceblue" >Add</button></a> 
                            </div>
                        </div>
                        <div class="card-body">
                          <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>NAME</td>
                                    <td>EMAIL</td>
                                    <td>PHONE</td>
                                    <td>ACTION</td>
                                    <td>Delete-method</td>
                                    <td>Delete-confirm</td>
                                </tr>
                            </thead>
                          
                          
                            <tbody>
                                <?php if($students): ?>
                                <?php foreach($students as $row): ?>
                                
                                <tr>
                                    <td><?php echo $row['id'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['phone'];?></td>
                                    <td>
                                        <a href="<?= base_url('students/edit/'.$row['id']);?>" class="btn btn-primary">Edit</a>
                                        <a href="<?= base_url('students/delete/'.$row['id']);?>" class="btn btn-danger">Delete</a>
                                    </td>
                                    <td>
                                        <form action="<?= base_url('students/delete-method/'.$row['id']) ?>" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger">delete</button>
                                        </form>
                                    </td>
                                    <td>
                                    <button type="submit" value="<?= $row['id'];?>" class="cnf_del btn btn-danger">delete</button>
                                    </td>
                                </tr>
                                    <?php endforeach;?>
                                <?php endif; ?>
                            </tbody>
                          </table>
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
</div>
 
  

<?= $this->endSection() ?>

<?= $this->section('scripts')?>
<script>
    $(document).ready(function () {
        $('.cnf_del').click(function (e) { 
            e.preventDefault();
            
            var id = $(this).val();

            if(confirm("Do you Want To Delete this data ?"))
            {
                // alert(id);
                $.ajax({
                    url: "/students/confirm-delete/"+id,
                    success: function (response) {
                        window.location.reload();
                        alert("Data deleted");
                    }
                });
            }
        });
    });
</script>
<?= $this->endSection() ?>
  