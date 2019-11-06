<style>
    tr, th {
        text-align: center;
    }
    .mid_table thead th {
        vertical-align: middle;
    }
    .mid_table tbody td {
        vertical-align: middle;
    }
</style>
<div class="col-md-12">
    <div class="row" >
        <div class="col-md-12">
            <h4 style="text-align:center;">Leave Application List</h4>
            <br><br>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-4">
                    <label class="col-form-label pull-left">Section/Wing:</label>
                </div>
                <div class="col-md-8"> 
                    <input type="text" class="form-control" id="" placeholder="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-5">
                    <label class="col-form-label pull-right">ID:</label>
                </div>
                <div class="col-md-7">                              
                    <input type="text" class="form-control" id="" placeholder="">
                </div>                  
            </div> 
        </div>
        <div class="col-md-12" style="margin-bottom:20px;">
            <button type="button" class="btn btn-primary pull-left" onclick="location.href ='/cedp/Administrator/leave_info'">Apply</button>
            <button type="button" class="btn btn-primary pull-right">Search</button>
            <br><br><hr>
        </div>
    </div>
</div>
<div class="dt-responsive table-responsive">
    <table id="datalist" class="table table-striped table-bordered nowrap mid_table" cellspacing="0"  style="width:100%">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Name<br>ID</th>
                <th>Section/Wing.</th>
                <th>Designation</th>
                <th>Phone</th>
                <th>Type of Leave</th>
                <th>Total</th>
                <th>Purpose</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>