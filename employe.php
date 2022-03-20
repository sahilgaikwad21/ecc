
<?php include 'navbar.php'?>
<?php include 'header.php'?>


<style>
    .row{
        padding-right: 0!important;
        padding-left: 0!important;
    }
    li#Employee{
        background: #2574a9!important;
    }
</style>

<div class="content-container">
    <div class="row no-gutters justify-content-center bg-primary mb-3 ">
        <h4 class="text-white">Employee List</h4>
    </div>

    <div class="row no-gutters justify-content-end mx-2 my-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add new Employee
        </button>
    </div>
    <div class="container-fluid">

        <!-- Main component for a primary marketing message or call to action -->

        <table id="example" class="table table-striped  mx-3" style="width:98%">
            <thead>
            <tr>
                <th> Employee Name</th>
                <th>Station Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Ashish Gharge</td>
                <td>vikas</td>
                <td>aagharge44@gmail.com</td>
                <td>9999234398</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>Suraj</td>
                <td>vikas</td>
                <td>Suraj@gmail.com</td>
                <td>9999234398</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>Sahil</td>
                <td>new light</td>
                <td>Sahil@gmail.com</td>
                <td>9999234398</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>Smikar parab</td>
                <td>bright</td>
                <td>Smikar4@gmail.com</td>
                <td>9999234398</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>Mukta</td>
                <td>Charge It</td>
                <td>Mukta@gmail.com</td>
                <td>9999234398</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>Klyani</td>
                <td>vikas</td>
                <td>Klyani@gmail.com</td>
                <td>9999234398</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Edit
                    </button>
                </td>
            </tr>

            </tbody>
            <!--            <tfoot>-->
            <!--            <tr>-->
            <!--                <th>Station Name</th>-->
            <!--                <th>city</th>-->
            <!--                <th>state</th>-->
            <!--                <th>spots</th>-->
            <!--                <th>available</th>-->
            <!--                <th>From Time</th>-->
            <!--                <th>To time</th>-->
            <!--                <td>-->
            <!--                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">-->
            <!--                        Edit-->
            <!--                    </button>-->
            <!--                </td>-->
            <!--            </tr>-->
            <!--            </tfoot>-->
        </table>
        <!--// model equipment-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Employee Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row no-gutters justify-content-around">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="Employee">Employee Name</label>
                                        <input type="text" class="form-control" id="Employee" placeholder="Employee Name">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="email">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="Contact">Contact</label>
                                        <input type="number" class="form-control" id="Contact" maxlength="10" placeholder="Spots">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Station name</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Suraj</option>
                                            <option>new Light</option>
                                            <option>green Wood</option>
                                            <option>life hack</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Active</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'?>

