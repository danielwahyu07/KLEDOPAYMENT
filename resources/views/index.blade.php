
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
      <form runat="server" role="form" action="{{ route('post')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label>Payments Name</label>
                  <input type="text" class="form-control" name="pn" id="pn" placeholder="Nama Menu" required>
                </div>
              <div class="footer">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>
            </form>
    </body>
</html>
