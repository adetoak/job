<input type="hidden" name="serviceid" value="{{ str_shuffle('0123456789') }}">
<div class="panel-body">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="sort">For User</label>
        <div class="col-sm-9">
            <select name="userid" class="form-control">
                @foreach ($clients as $client)
                <option value="{{ $client->id}}">{{ $client->username }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <p class="help-block">
        <strong>{{ $errors->first('userid') }}</strong>
    </p>
</div>
<div class="panel-body">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="sort">Service Title</label>
        <div class="col-sm-9">
            <input type="text" placeholder="Service Title" name="title" value="" id="title" class="form-control">
        </div>
    </div>
    <p class="help-block">
        <strong>{{ $errors->first('title') }}</strong>
    </p>
</div>
<div class="panel-body">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="sort">Sevice Category</label>
        <div class="col-sm-9">
            <select name="category" class="form-control">
                @foreach ($servicecategories as $servicecategorie)
                <option value="{{ $servicecategorie->id}}">{{ $servicecategorie->title }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <p class="help-block">
        <strong>{{ $errors->first('category') }}</strong>
    </p>
</div>
<div class="panel-body">
    <div id="description" class="panel-body">
        <div class="form-group">
            <label class="col-sm-3 control-label" for="description">Description</label>
            <div class="col-sm-9">
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
        </div>
    </div>
    <p class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
    </p>    
</div>
<div class="panel-body">
    <div class="form-group">
      <label for="deliveryduration" class="col-sm-3 control-label">Duration for Service delivery</label>
      <div class="col-sm-9">
        <input name="deliveryduration" id="deliveryduration" class="form-control" type="text">
      </div>
    </div>
    <p class="help-block">
        <strong>{{ $errors->first('deliveryduration') }}</strong>
    </p>
</div>
<div class="panel-body">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="price">Price</label>
        <div class="col-sm-9">
            <input type="text" placeholder="eg 1200" name="price" value="" id="price" class="form-control">
        </div>
    </div>
    <p class="help-block">
            <strong>{{ $errors->first('price') }}</strong>
    </p>
</div>
<div id="requirement" class="panel-body">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="requirement">Requirement</label>
        <div class="col-sm-9">
            <textarea class="form-control" id="requirement" name="requirement"></textarea>
        </div>
    </div>
    <p class="help-block">
            <strong>{{ $errors->first('requirement') }}</strong>
    </p>
</div>
<div class="panel-body">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="level1">Images</label>
        <div class="col-sm-9">
            <input type="file" placeholder="eg 1200" name="serviceimg">
        </div>
    </div>
    <p class="help-block">
            <strong>{{ $errors->first('serviceimg') }}</strong>
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