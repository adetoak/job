<div class="form-group">
    <label><span class="fa fa-telephone">&nbsp;</span> Telephone:</label>
    <input class="form-control" name="telephone" value="{{ $user->telephone }}" />            
</div>
<div class="form-group">
    <label><span class="fa fa-pencil">&nbsp;</span> Full Name:</label>
    <input class="form-control" name="fullname" value="{{ $user->full_name }}" />            
</div>
<div class="form-group">
    <label><span class="fa fa-user">&nbsp;</span> Username:</label>
    <input class="form-control" name="username" value="{{ $user->username }}" />            
</div>
<div class="form-group">
    <label><span class="fa fa-envelope">&nbsp;</span> Email:</label>
    <input class="form-control" name="email" value="{{ $user->email }}" />            
</div>
<div class="form-group text-right">    
    <button type="submit" class="btn btn-primary">Update</button>            
</div>
