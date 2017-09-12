

<div id="ViewLogistics" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                {{csrf_field()}}
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="ehmt">View Logistics</h4>
                <div class="modal-body">
                    <h5><p>Total Hymn: {{count($main_hymn) + count($app_hymn)}}</p></h5>
                    <h5><p>Main Hymn: {{count($main_hymn)}}</p></h5>
                    <h5><p>Appendix Hymn: {{count($app_hymn)}}</p></h5>
                    <br/>
                    <br/>
                </div>
                <div class="modal-footer student">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>