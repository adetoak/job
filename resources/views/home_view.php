<!--Widget-4 -->
<?php if ($this->session->flashdata('errors')): ?>
<div class="alert alert-danger alert-danger" role="alert">
  <button type="button" style="margin-top: -18px;" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
  <strong>Error!</strong> <?php echo $this->session->flashdata('errors'); ?>
</div>
<?php endif; ?>

<?php if ($this->session->flashdata('success')): ?>
<div class="alert alert-success alert-success" role="alert">
  <button type="button" style="margin-top: -18px;" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
  <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>
<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Domain TLDs</h3>
    </div>
    <div class="panel-body">
        <a href="<?php echo base_url(); ?>tld/pull" class="btn btn-danger"  style="margin-bottom: 20px;"> Pull New Data</a>

        <a href="<?php echo base_url(); ?>tld/update" style="margin-bottom: 20px;" class="btn btn-primary"> Update existing data</a>

        <button id="idppadd" style="margin-bottom: 20px;" class="btn btn-primary">ID Protection Price</button>

        <div id="idpp" style="display: none; margin-bottom: 20px">
            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>tld/idprotect">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="price">ID Protection Price</label>
                        <div class="col-sm-9">
                            <input type="text" value="<?php echo $idpprice->price ?>" name="price" id="price" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-right">
                    <button class="btn btn-info" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <table id="demo-dt-basic" class="table table-striped table-bordered" style="width: 100%">
            <thead>
                <tr>
                    <th class="all">S/N</th>
                    <th class="all">Domains</th>
                    <th class="min-tablet">ID Protection</th>
                    <th class="min-tablet">Type</th>
                    <th class="min-desktop">Country</th>
                    <th class="min-desktop">Transfer</th>
                    <th class="none">1 year</th>
                    <th class="none">2 years</th>
                    <th class="none">3 years</th>
                    <th class="none">4 years</th>
                    <th class="none">5 years</th>
                    <th class="none">Discount</th>
                    <th class="none">Reseller Level 1</th>
                    <th class="none">Reseller Level 2</th>
                    <th class="none">Reseller Level 3</th>
                    <th class="min-desktop">Action</th>
                </tr>
            </thead>
            <tbody>                
                <tr>
                    <td>1</td>
                    <td>ddd</td>
                    <td>On</td>
                    <td>sdsd</td>
                    <td><?php echo $tld->countryName; ?></td>
                    <td>₦<?php echo ($tld->transfer <= 0)? 0.00 : number_format($tld->transfer); ?></td>
                    <td>₦<?php echo ($tld->yr1 <= 0)? 0.00 : number_format($tld->yr1); ?></td>
                    <td>₦<?php echo ($tld->yr2 <= 0)? 0.00 : number_format($tld->yr2); ?></td>
                    <td>₦<?php echo ($tld->yr3 <= 0)? 0.00 : number_format($tld->yr3); ?></td>
                    <td>₦<?php echo ($tld->yr4 <= 0)? 0.00 : number_format($tld->yr4); ?></td>
                    <td>₦<?php echo ($tld->yr5 <= 0)? 0.00 : number_format($tld->yr5); ?></td>
                    <td>₦<?php echo ($tld->discount1 <= 0)? 0.00 : number_format($tld->discount1); ?></td>
                    <td>₦<?php echo ($tld->level1 <= 0)? 0.00 : number_format($tld->level1); ?></td>
                    <td>₦<?php echo ($tld->level2 <= 0)? 0.00 : number_format($tld->level2); ?></td>
                    <td>₦<?php echo ($tld->level3 <= 0)? 0.00 : number_format($tld->level3); ?></td>
                    <td><a href="<?php echo base_url(); ?>tld/edit/<?php echo $tld->id; ?>" class="btn btn-primary">Edit</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!--===================================================-->
<!-- End Striped Table -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete existing data and pull a fresh data from WHMCS?.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <a href="<?php echo base_url(); ?>tld/pull" class="btn btn-primary">Yes</a>
      </div>
    </div>
  </div>
</div>
