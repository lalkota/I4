  @extends('app')


  @section('content')<!-- page content -->
        
            <from action="" method = "post" enctype="multipart/from-data">
            select image to uplaod
            <input type="file" name="file" id="file">
            <input type="submit" value="upload" name="submit">
            </from>
  @endsection