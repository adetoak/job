<form id="demo-form2" class="form-horizontal form-label-left" method="post" action="{{ url('sendmail') }}">
		{{ csrf_field() }}
		<div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">Subject<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="subject" id="subject" name="subject" required="required" class="form-control col-md-7 col-xs-12">
            <p class="help-block">
		        <strong>{{ $errors->first('subject') }}</strong>
		    </p>
            </div>
      	</div>
		<div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">Body<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="message" name="message" required="required" class="form-control col-md-7 col-xs-12" row="4"></textarea>
                <p class="help-block">
			        <strong>{{ $errors->first('message') }}</strong>
			    </p>
            </div>
        </div>		           	    		 		    		 	

      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
          <a href="profile" class="btn btn-primary">Cancel</a>
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
</form>