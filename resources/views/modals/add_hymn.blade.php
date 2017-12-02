<div id="AddHymnModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                {{csrf_field()}}
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add/Edit Hymn</h4>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="Email">Email Address: </label>
                            <div class="col-sm-10">
                                <input name="Email" id="Email" type="email" class="form-control" required="required"/>
                            </div>
                        </div>
                        <div class="form-group hide_for_add">
                            <label class="control-label col-sm-2" for="id">Action: </label>
                            <div class="col-sm-10">
                                <select id="Action" name="Action" class="form-control">
                                    <option value="0">Add Hymn</option>
                                    <option value="1">Edit Hymn</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group hide_for_add">
                            <label class="control-label col-sm-2" for="id">Hymn Type </label>
                            <div class="col-sm-10">
                                <select id="HymnType" name="HymnType" class="form-control">
                                    <option value="0">Main Hymn</option>
                                    <option value="1">Appendix</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="HymnNumber">Hymn Number: </label>
                            <div class="col-sm-10">
                                <input name="HymnNumber" id="HymnNumber" type="number" class="form-control" required="required"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="verses">Verses </label>
                            <div class="col-sm-10">
                                <textarea name="verses" id="verses" class="form-control" row="8" required="required"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer student">
                    <button type="button" class="btn actionBtn" id="addhymn">
                        <span id="result_footer_action_button" class="glyphicon"></span> Submit
                    </button>
                    <button type="button" class="btn btn-warning">
                        <span class="glyphicon glyphicon-remove"></span> Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>