<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../../../framework/web/css/validation.css" />
<script type="text/javascript" src="../../../framework/web/js/validation.js"></script>
<script type="text/javascript" src="../../../web/js/edit_students.js"></script>

<div class="page-header">
    <h1>Students</h1>
</div>

<div class="table-hover">
    <table class="table">

        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
        </tr>
        </thead>

        <tbody>
        <?php

        if (isset($students)) {
            for ($i = 0;
                 $i < count($students);
                 $i++) {

                ?>

                <tr class='student_info valid-form' student_id='<?php echo $students[$i]->getId(); ?>'>

                    <td>
                        <p class="error-message" for="first_name"></p>
                        <p contenteditable='true' class="valid-param" name='first_name'>
                            <?php echo $students[$i]->getFirstName(); ?>
                        </p>
                    </td>
                    <td>
                        <p class="error-message" for="second_name"></p>
                        <p contenteditable='true' class="valid-param" name='second_name'>
                        <?php echo $students[$i]->getSecondName(); ?>
                        </p>
                    </td>
                    <td>
                        <p class="error-message" for="age"></p>
                        <p contenteditable='true' class="valid-param" name='age'>
                            <?php echo $students[$i]->getAge(); ?>
                        </p>
                    </td>

                    <td>
                        <p class="error-message" for="gender"></p>
                        <select class="valid-param" name='gender'>
                            <option <?php
                            if ($students[$i]->getGender() == "male") {
                                echo "selected";
                            } ?>
                                >male
                            </option>
                            <option <?php
                            if ($students[$i]->getGender() == "female") {
                                echo "selected";
                            } ?>
                                >female
                            </option>
                        </select>
                    </td>

                    <td>
                        <p class="error-message" for="address"></p>
                        <p contenteditable='true' class="valid-param" name='address'>
                        <?php echo $students[$i]->getAddress(); ?>
                        </p>
                    </td>
                    <td><a href='/students/delete?id=<?php echo $students[$i]->getId(); ?>'>[x]</a></td>
                </tr>
            <?php }
        }
        ?>
        </tbody>
    </table>
</div>

<br/>
<hr/>

<form role="form" class=" valid-form" action="/Students/add" method="post">

    <div class="row">
        <div class="col-xs-2">
            <label class="error-message" for="first_name"></label>
            <input type="text" class="form-control valid-param" name="first_name" placeholder="first name" value=""/>
            <br/>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2">
            <label class="error-message" for="second_name"></label>
            <input type="text" class="form-control valid-param" name="second_name" placeholder="second name" />
            <br/>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2">
            <label class="error-message" for="age"></label>
            <input type="text" class="form-control valid-param" name="age" placeholder="age" />
            <br/>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-xs-2">
            <label class="error-message" for="gender"></label>
            <select class="form-control valid-param" name="gender">
                <option selected>male</option>
                <option>female</option>
            </select>
            <br/>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-xs-2">
            <label class="error-message" for="address"></label>
            <input type="text" class="form-control valid-param" name="address" placeholder="address" />
            <br/>
        </div>
    </div>

    <input class="btn btn-default" type="submit" value="Add">
</form>
