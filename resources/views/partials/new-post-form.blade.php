<div class="panel-body">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="sort">Post Title</label>
        <div class="col-sm-9">
            <input type="text" placeholder="Post Title" name="posttitle" value="" id="title" class="form-control">
        </div>
    </div>
    <p class="help-block">
        <strong>{{ $errors->first('posttitle') }}</strong>
    </p>
</div>
<div class="panel-body">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="sort">Post link</label>
        <div class="col-sm-9">
            <input type="text" placeholder="Post link" name="postlink" value="" id="link" class="form-control">
        </div>
    </div>
    <p class="help-block">
        <strong>{{ $errors->first('postlink') }}</strong>
    </p>
</div>       
<div class="panel-body">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="level3"></label>
        <div class="col-sm-9">
            <button class="btn btn-block btn-info" type="submit">Submit</button>
        </div>
    </div>
</div>