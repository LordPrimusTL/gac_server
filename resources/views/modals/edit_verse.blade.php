<div id="EditVerse" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                {{csrf_field()}}
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="ehmt"></h4>
                <div class="modal-body">
                    {{Form::open(['class'=>'form-horizontal','role'=>'form'])}}
                    <div class="form-group hide_for_edit">
                        <label class="control-label col-sm-2" for="Hymn: ">Hymn: </label>
                        <div class="col-sm-10">
                            <input name="id" id="id" type="hidden" class="form-control" required="required"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="hymn_id">Hymn: </label>
                        <div class="col-sm-10">
                            <input type="number" name="hymn_id" id="hymn_id" class="form-control" disabled required="required"/>
                            <input type="hidden" name="main_hymn_id" id="main_hymn_id" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="verse_id">Verse: </label>
                        <div class="col-sm-10">
                            <input type="number" name="main_verse_id" id="main_verse_id" class="form-control" required/>
                            <input type="hidden" id="m_id" name="m_id"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="english">Word (English)</label>
                        <div class="col-sm-10">
                            <textarea rows="6" type="text" name="english" id="english" class="form-control" required="required"></textarea>
                            <input type="hidden" id="hymn_verse_type" name="hymn_verse_type"/>
                            <input type="hidden" id="m_id" name="m_id"/>
                            <input type="hidden" id="edvrs" name="edvrs"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="yoruba">Word (Yoruba)</label>
                        <div class="col-sm-10">
                            <textarea rows="6" type="text" name="yoruba" id="yoruba" class="form-control" required="required"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer student">
                        <button type="submit" class="btn actionBtn" id="addhymn">
                            <span id="result_footer_action_button" class="glyphicon glyphicon-save"></span> Submit
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span> Close
                        </button>
                    </div>

                    {{Form::close()}}
                </div>

            </div>
        </div>
    </div>
</div>