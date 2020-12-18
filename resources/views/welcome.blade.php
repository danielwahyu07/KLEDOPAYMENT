<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <div class="box-body table-responsive">
              <table id="menue" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Checklist</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 0;?>
                    @foreach ($p as $pn)
                <?php $no++ ;?>
                <tr>
                  <td>{{ $no }}</td>
                  <td>{{ $pn->pn }}</td>
                  <td><<input type="checkbox" id="cek" name="cek"></td>
                </tr>
                  @endforeach
                </tbody>
              </table>
               <div class="footer">
                <a href="/delete" type="button" id="cek" class="btn btn-danger">Batal</a>
              </div>
            </div>
    </body>
</html>
