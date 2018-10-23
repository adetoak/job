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
                        
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b><?php echo $title ?></b> Order tracking</h3>
                            </div>
                            <div class="panel-body">

                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="all">Item</th>
                                            <th class="all">Counts</th>
                                            <?php
                                                $invs = $this->conversion_model->getInvoiceTypes();
                                            ?>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                    <?php $cats = array(); $in = array(); if (!empty($convs2)): ?>
                                    <?php 

                                    $in["Domains"] = 1;
                                    foreach ($invs as $inv){
                                        $k = $inv['type'];
                                        $in["$k"] = 1;
                                    }

                                     foreach ($convs3 as $cornt) {
                                         $nm = preg_replace('/\s+/', '', $cornt->name);
                                       $in["$nm"] = 1;
                                    }
                                        //die(var_dump($convs2));
                                    ?>

                                    <?php foreach ($convs2 as $corn){ 
                                        
                                        $coss = $this->conversion_model->getInvoiceType($corn->invoiceid);
                                        // die(var_dump($co));
                                        foreach ($coss as $co) {
                                        if ($co->type == "Hosting") {
                                            $rl = $this->conversion_model->getPackage($co->relid);
                                            $nm = preg_replace('/\s+/', '', $rl->name);

                                            $cats["$nm"] = $in["$nm"]++;
                                            continue;
                                        }

                                        if ($co->type == "DomainTransfer" || $co->type == "Domain" || $co->type == "DomainRegister" || $co->type == "DomainRenewal") {
                                            $cats["Domains"] = $in["Domains"]++;
                                            continue;
                                        }
                                        $cats["$co->type"] = $in["$co->type"]++;
                                        }
                                     } 

                                     // foreach ($convs3 as $cornt) {
                                     //    $nm = preg_replace('/\s+/', '', $cornt->name);
                                     //    $cats["$nm"] = $in["$nm"]++;
                                     // }

                                     ?>
                                    
                                    <?php



                                    foreach($cats as $x => $x_value) {
                                        echo "<tr><td>".$x."</td>
                                        <td>".$x_value."</td></tr>";
                                    }
                                    ?>
                                    
                                    <?php endif ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <br>

                        <!-- Basic Data Tables -->
                        <!--===================================================-->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Invoices</h3>
                            </div>
                            <div class="panel-body">

                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="all">S/N</th>
                                            <th class="all">Details</th>
                                            <th class="all">Invoice Number</th>
                                            <th class="all">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                    <?php if (!empty($convs)): ?>
                                    <?php $x=1; foreach ($convs as $conv) { ?>
                                        <?php $invs = $this->conversion_model->trackInvoices($conv->invoiceid); foreach ($invs as $inv): ?>
                                            <tr>
                                                <td><?php echo $x++; ?></td>
                                                <td><?php echo $inv->description; ?></td>
                                                <td><?php echo $conv->invoiceid; ?></td>
                                                <td><?php echo (date('Y', strtotime($conv->paidinvoicedate)) == -0001)? "Unpaid" : date('d M, Y', strtotime($conv->paidinvoicedate)); ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                     <?php } ?>  
                                    <?php endif ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--===================================================-->
                        <!-- End Striped Table -->
                    
                