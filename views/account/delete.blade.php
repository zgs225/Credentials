<div id="delete_account" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">确认删除账户吗？</h4>
            </div>
            <div class="modal-body">
                <p>您正在删除您的账户和账户下的所有资料，这个操作将无法被恢复。</p>
                <p>确认要继续吗？</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger" href="{!! URL::route('account.profile.delete') !!}" data-token="{!! Session::getToken() !!}" data-method="DELETE">确认</a>
                <button class="btn btn-default" data-dismiss="modal">取消</button>
            </div>
        </div>
    </div>
</div>
