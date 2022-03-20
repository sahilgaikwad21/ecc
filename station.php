
<?php include 'navbar.php'?>
<?php include 'header.php'?>


<style>
    .row{
        padding-right: 0!important;
        padding-left: 0!important;
    }
    li#Stations {
        background: #2574a9!important;
    }
</style>

<div class="content-container">
<div class="row no-gutters justify-content-center bg-primary mb-3 ">
    <h4 class="text-white">Station List</h4>
</div>

    <div class="row no-gutters justify-content-end mx-2 my-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
           Add new charging Station
        </button>
    </div>
    <div class="container-fluid">

        <!-- Main component for a primary marketing message or call to action -->

        <table id="example" class="table table-striped  mx-3" style="width:98%">
            <thead>
            <tr>
                <th>Station Name</th>
                <th>city</th>
                <th>state</th>
                <th>spots</th>
                <th>available</th>
                <th>From Time</th>
                <th>To time</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Green wood </td>
                <td>badlapur</td>
                <td>Mharastra</td>
                <td>5</td>
                <td>1</td>
                <td>9 am</td>
                <td>11 pm</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                       Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>sri ganesh car charging Station </td>
                <td>badlapur</td>
                <td>Mharastra</td>
                <td>5</td>
                <td>1</td>
                <td>9 am</td>
                <td>11 pm</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>new Charge</td>
                <td>badlapur</td>
                <td>Mharastra</td>
                <td>5</td>
                <td>1</td>
                <td>9 am</td>
                <td>11 pm</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>Charge it </td>
                <td>badlapur</td>
                <td>Mharastra</td>
                <td>5</td>
                <td>1</td>
                <td>9 am</td>
                <td>11 pm</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>Green wood </td>
                <td>badlapur</td>
                <td>Mharastra</td>
                <td>5</td>
                <td>1</td>
                <td>9 am</td>
                <td>11 pm</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>sri ganesh car charging Station </td>
                <td>badlapur</td>
                <td>Mharastra</td>
                <td>5</td>
                <td>1</td>
                <td>9 am</td>
                <td>11 pm</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>new Charge</td>
                <td>badlapur</td>
                <td>Mharastra</td>
                <td>5</td>
                <td>1</td>
                <td>9 am</td>
                <td>11 pm</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>Charge it </td>
                <td>badlapur</td>
                <td>Mharastra</td>
                <td>5</td>
                <td>1</td>
                <td>9 am</td>
                <td>11 pm</td>
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
                        <h5 class="modal-title" id="exampleModalLabel">Station Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row no-gutters justify-content-around">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="StaionName">Station Name</label>
                                        <input type="text" class="form-control" id="StaionName" placeholder="Station Name">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="Spots">Spots</label>
                                        <input type="number" class="form-control" id="Spots" placeholder="Spots">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="City">City</label>
                                        <input type="text" class="form-control" id="City" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="State">State</label>
                                        <input type="text" class="form-control" id="State" placeholder="State">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="From-time">From time</label>
                                        <input type="text" class="form-control" id="From-time" placeholder="From-time">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="To-time">To time</label>
                                        <input type="text" class="form-control" id="To-time" placeholder="To-time">
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

