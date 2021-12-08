<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 ">
            <?php

            if ($this->session->flashdata('status')) {
                echo " <div class=\"alert alert-success\">";
                echo $this->session->flashdata('status');
                echo "</div>";
            }
            ?>

            <?php	
			echo form_open('Home/AddStudent');?>
            <form method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone" pattern="[0-9]{10}" maxlength="10">
                </div>
                <div class="mb-3">
                    <label for="Email1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="Email">
                </div>
                <div class="mb-3">
                    <label for="Password1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php echo form_close(); ?>

        </div>

    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                </tr>
                <?php
				foreach ($fletchData->result() as $data){
			?>
                <tr>
                    <td><?php echo $data->id?></td>
                    <td><?php echo $data->name?></td>
                    <td><?php echo $data->phone_number?></td>
                    <td><?php echo $data->email?></td>
                </tr>
                <?php }?>
            </table>
        </div>
    </div>
</body>

</html>