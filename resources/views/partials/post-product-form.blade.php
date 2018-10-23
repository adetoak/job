<input type="hidden" name="productid" value="{{ str_shuffle('0123456789') }}">
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
        <label class="col-sm-3 control-label" for="sort">Product Title</label>
        <div class="col-sm-9">
            <input type="text" placeholder="Product Title" name="title" id="title" class="form-control">
        </div>
    </div>
    <p class="help-block">
        <strong>{{ $errors->first('title') }}</strong>
    </p>
</div>
<div class="panel-body">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="sort">Product Category</label>
        <div class="col-sm-9">
            <select name="category" class="form-control">
                @foreach ($productcategories as $productcategorie)
                <option value="{{ $productcategorie->id}}">{{ $productcategorie->title }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <p class="help-block">
        <strong>{{ $errors->first('category') }}</strong>
    </p>
</div>
<div id="description" class="panel-body">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="description">Description</label>
        <div class="col-sm-9">
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
    </div>
    <p class="help-block">
        <strong>{{ $errors->first('description') }}</strong>
    </p>
</div>
<div class="panel-body">
    <div class="form-group">
      <label for="deliveryduration" class="col-sm-3 control-label">Duration for product delivery</label>
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
            <input type="text" placeholder="eg 1200" name="price" id="price" class="form-control">
        </div>
    </div>
    <p class="help-block">
        <strong>{{ $errors->first('price') }}</strong>
    </p>
</div>
<div class="panel-body">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="qtyavailable">Quantity Available</label>
        <div class="col-sm-9">
            <input type="number" name="qtyavailable" id="qtyavailable" class="form-control">
        </div>
    </div>
    <p class="help-block">
        <strong>{{ $errors->first('qtyavailable') }}</strong>
    </p>
</div>
<div class="panel-body">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="level1">Images</label>
        <div class="col-sm-9">
            <input type="file" name="productimg">
        </div>
    </div>
    <p class="help-block">
        <strong>{{ $errors->first('productimg') }}</strong>
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