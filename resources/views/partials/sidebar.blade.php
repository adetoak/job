<div class="col-lg-3 sidebar">
  <div class="row">
    <div class="list-group">
    </div>    
  </div>
  <div class="row">                  
    <div class="list-group">
      <div class="panel-heading list-group-item active">
        <h3 class="panel-title list-group-item-heading">SHORTCUTS</h3>
      </div>
        <a href="{{ url('dashboard') }}" class="list-group-item">
         <span class="glyphicon glyphicon-home">&nbsp;</span> Dashboard
        </a>
        <a href="{{ url('my-bookings') }}" class="list-group-item">
         <span class="glyphicon glyphicon-user">&nbsp;</span> Users
        </a>          
        <a href="{{ url('my-listings')}}" data-toggle= "modal" class="list-group-item">
         <span class="glyphicon glyphicon-th-list">&nbsp;</span> Transactions
        </a>
        <a href="{{ url('new-listing') }}" class="list-group-item">
          <span class="glyphicon glyphicon-plus">&nbsp;</span> Services
        </a>
        <a href="{{ url('#') }}" class="list-group-item">
          <span class="glyphicon glyphicon-envelope">&nbsp;</span> Messages
        </a>
        <a href="{{ url('#') }}" class="list-group-item stable">
          <span class="glyphicon glyphicon-tags">&nbsp;</span> Feedbacks
        </a>
        <a href="{{ url('logout') }}" class="list-group-item">
         <span class="glyphicon glyphicon-off">&nbsp;</span> Logout
        </a>
    </div>
  </div>    
</div>