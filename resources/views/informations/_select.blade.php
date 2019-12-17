<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">数据筛选</h4>
      </div>
      <div class="modal-body">
        <form method="get" action="{{route('informations.index')}}" id="form1">
          <div class="form-group">
            <label for="recipient-name" class="control-label">小区名称:</label>
            <input type="text" class="form-control" name="present_address">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">楼:</label>
            <input type="text" class="form-control" name="building">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">门:</label>
            <input type="text" class="form-control" name="door">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">户:</label>
            <input type="text" class="form-control" name="no">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">姓名:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">身份证:</label>
            <input type="text" class="form-control" name="id_number">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">手机号:</label>
            <input type="text" class="form-control" name="phone">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">现居住地:</label>
            <input type="text" class="form-control" name="present_address">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary" onclick="document.getElementById('form1').submit();">提交</button>
      </div>
    </div>
  </div>
</div>