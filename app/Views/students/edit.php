<?= $this->extend('layout/app.php') ?>

<?= $this->section('content') ?>

<div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="card mt-5">
                        <div class="card-header bg-secondary ">
                            <div class="row">
                                <div class="col">
                                <h4 class="text-center" >Edit Students</h4>
                            </div>
                                <a href="<?= base_url('/students')?>"><button class="btn btn-sm float-right " style="background-color:red; color:white;">back</button></a> 

                               
                            </div>
                        </div>
                        <div class="card-body">
                         
                        <form action="<?=base_url('students/update/'.$student['id'])?>" method="post">

                        <!-- <input type="hidden" name="_method" value="PUT" /> -->
                            
                            <div class="form-group">
                                <label for="inputname">NAME </label>
                                <input type="text" name="name" id="inputname" class="form-control" value="<?= $student['name']?>" required="required">
                            </div>

                            <div class="form-group">
                                <label for="inputemail">EMAIL </label>
                                <input type="text" name="email" id="inputemail" class="form-control" value="<?= $student['email']?>" required="required">
                            </div>

                            <div class="form-group">
                                <label for="inputphone">PHONE </label>
                                <input type="text" name="phone" id="inputphone" class="form-control" value="<?= $student['phone']?>" required="required">
                            </div>
                    
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary"> update</button>
                            </div>

                          </form>
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
</div>
 


<?= $this->endSection() ?>