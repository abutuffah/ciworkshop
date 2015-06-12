  <?php

  if($this->session->flashdata('operation_success')!='')
  {
    ?>
    <div class="alert alert-success" role="alert">
      <?=$this->session->flashdata('operation_success')?></div>
      <?php
    }

    if($this->session->flashdata('operation_fail')!='')
    {
      ?>
      <div class="alert alert-danger" role="alert">
        <?=$this->session->flashdata('operation_fail')?></div>
        <?php
      }
      ?>
      <h1 class="page-header"><?=$title?></h1>

      <div class="row">
        <div class="col-sm-1">
          <a type="button" href="<?=base_url('backend/dashboard/createForm')?>" class="btn btn-primary">Add User</a>
        </div>
      </div>

      <div class="row">
      <div class="col-md-12">
      <div class="table-responsive">
        <table id="example" class="table table-striped">
          <thead>
            <tr>
              <th>id</th>
              <th>email</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
                  if(isset($users)){  //check whether users variable exist
                    foreach($users as $key=>$value)
                    {
                      ?> 
                      <tr>
                        <td><?=$value->user_id?></td>
                        <td><?=$value->user_email?></td>
                        <td><?=$value->user_firstname?></td>
                        <td><?=$value->user_lastname?></td>
                        <td>
                          <div class="col-sm-1">
                            <a href="<?=base_url('backend/dashboard/editUserForm/'.$value->user_id)?>">
                              Edit</a>
                            </div>
                            <div class="col-sm-1">
                              <a href="<?=base_url('backend/dashboard/deleteUser/'.$value->user_id)?>">
                                Delete</a>
                              </div>


                            </td>
                          </tr>
                          <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                </div>
                </div>