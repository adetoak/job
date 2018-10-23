@extends('layouts.app')
@section('content')
<div class="alert alert-danger alert-danger" role="alert">
  <button type="button" style="margin-top: -18px;" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
  <strong>Error!</strong> 
</div>
<div class="alert alert-success alert-success" role="alert">
  <button type="button" style="margin-top: -18px;" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
  <strong>Success!</strong> 
</div>

<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Edit </h3>
    </div>
    <!--Horizontal Form-->
    <!--===================================================-->
    <form class="form-horizontal" method="post" action="">        
        @include('partials.post-job-form');
    </form>
        

        <br>
        

        
        
        </div>
        <!-- <div class="panel-footer text-right">
            
        </div> -->
    <!--===================================================-->
    <!--End Horizontal Form-->
</div>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=m1vs4k0l7f00qlvmimzwyv70m90djmkfwimuvuir45ual6qh"></script>
<script type="text/javascript">
    tinymce.init({
      selector: 'textarea',
      height: 200,
      plugins: 'image media codesample imagetools link',
      toolbar: 'link image media codesample',
      image_caption: true,
      media_live_embeds: true,
      imagetools_cors_hosts: ['tinymce.com', 'codepen.io'],
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.css',
        '//www.tinymce.com/css/codepen.min.css'    
      ]
    });
</script>
@stop