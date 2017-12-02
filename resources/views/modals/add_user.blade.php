<div id="AddUserModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                {{csrf_field()}}
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add User</h4>
                <div class="modal-body">
                    {{Form::open()}}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="username">Username: </label>
                            <div class="col-sm-10">
                                <input name="username" id="username" type="text" class="form-control" required="required"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="password">Password: </label>
                            <div class="col-sm-10">
                                <input name="password" id="password" type="password" class="form-control" required="required"/>
                            </div>
                        </div>

                        <div class="modal-footer student pull-right">
                            <button type="submit" class="btn actionBtn" id="adduser">
                                <span id="result_footer_action_button" class="glyphicon"></span> Submit
                            </button>
                            <button type="submit" class="btn btn-warning" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span> Close
                            </button>
                        </div>
                    {{Form::close()}}
                </div>

            </div>
        </div>
    </div>
</div>