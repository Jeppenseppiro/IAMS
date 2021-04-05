<!---------------------------------
-----------------------------------
   Add Item Modal
-----------------------------------
---------------------------------->

    <div class="modal fade" id="add_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header" >
                    <h5 class="modal-title"><b><i class="fas fa-plus-circle"></i>&nbsp;&nbsp; N O N &nbsp; - &nbsp; C O N S U M A B L E &nbsp;  I T E M </b></h5> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span style="font-size: 12px"><b>LABELED AS (<i style="color: red;"> * </i>) IS A REQUIRED FIELD</b></span>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form id="add_item_form" method="post" action="../config/item/save/save-item.php">
                    <div class="modal-body">

                        <div class="form-group row">
                            <div class="col-sm-2">
                               <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> Company</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <select name="companies" class="browser-default custom-select form-control" required="true">
                                     <option value="" selected disabled>Please Select ...</option>
                                        <?php
                                           company();                                    
                                         ?>   
                                </select>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> Received Date</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="date" class="form-control form-control-user" name="received_date" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> Item Type</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                               <select name="item_type" id="item_type" class="browser-default custom-select form-control" required="true">
                                     <option value="" selected disabled>Please Select ...</option>
                                        <?php
                                            item_type();
                                         ?> 
                                </select>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                 <p style="text-align: right; font-size: 20px;">Receiving No.</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="receiving_no">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> Asset ID</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                               <input type="text" class="form-control form-control-user" name="equipment_code" id="equipment_code" required="true">
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                 <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> Supplier</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="supplier" oninput="this.value = this.value.toUpperCase()" required="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> Brand</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                               <input type="text" class="form-control form-control-user" name="brand" oninput="this.value = this.value.toUpperCase()" required="">
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                 <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> Purchase No.</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="purchase_no" oninput="this.value = this.value.toUpperCase()" required="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> Model</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                               <input type="text" class="form-control form-control-user" name="model" oninput="this.value = this.value.toUpperCase()" required="">
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                 <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> Purchase Date</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="date" class="form-control form-control-user" name="purchase_date" required="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> Serial No.</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                               <input type="text" class="form-control form-control-user" name="serial_no" oninput="this.value = this.value.toUpperCase()" required="true">
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                 <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> Item Amount</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="amount" oninput="this.value = this.value.toUpperCase()" required="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> Status</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                               <select name="status" class="browser-default custom-select form-control" required="true">
                                     <option value="ACTIVE" selected> ACTIVE</option>
                                     <option value="AVAILABLE" > AVAILABLE</option>
                                </select>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">    
                                <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> Location</p>                     
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">   
                                <input type="text" class="form-control form-control-user" name="locations" required="true">                     
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> Operating System</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                               <select name="os" id="os" class="browser-default custom-select form-control" required="true">
                                     <option value="" selected disabled>Please Select</option>
                                     <option value="WIN 10 PR0" > WIN 10 PRO</option>
                                     <option value="WIN 7" > WIN 7</option>
                                     <option value="N/A" > N/A</option>
                                </select>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">  
                                <p style="text-align: right; font-size: 20px;">Warranty</p>                            
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">   
                                <input type="text" class="form-control form-control-user" name="warranty">                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> Processor</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                               <input type="text" class="form-control form-control-user" name="processor" id="processor" oninput="this.value = this.value.toUpperCase()" required="true">
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                 <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> Invoice No.</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="invoice" oninput="this.value = this.value.toUpperCase()" required="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <ul class="nav nav-tabs" id="desktop_componentsTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="ram-tab" data-toggle="tab" href="#ram" role="tab" aria-controls="ram"
                                        aria-selected="true">RAM</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="storage-tab" data-toggle="tab" href="#storage" role="tab" aria-controls="storage"
                                        aria-selected="true">Storage</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="videocard-tab" data-toggle="tab" href="#videocard" role="tab" aria-controls="videocard"
                                        aria-selected="false">Video Card</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="motherboard-tab" data-toggle="tab" href="#motherboard" role="tab" aria-controls="motherboard"
                                        aria-selected="false">Motherboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="psu-tab" data-toggle="tab" href="#psu" role="tab" aria-controls="psu"
                                        aria-selected="false">Power Supply</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="desktop_components"><br>
                                    <div class="tab-pane fade show active" id="ram" role="tabpanel" aria-labelledby="ram-tab">
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Serial Number</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">   
                                                <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="ram_serialnumber">                        
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Brand</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">   
                                                <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="ram_brand">                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Model</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">   
                                                <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="ram_model">                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Item Amount</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">
                                                <div class="form-group">
                                                     <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="ram_amount">
                                                </div>                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Description</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">
                                                <div class="form-group">
                                                    <textarea class="form-control rounded-0" oninput="this.value = this.value.toUpperCase()" name="ram_description" rows="3"></textarea>
                                                </div>                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="storage" role="tabpanel" aria-labelledby="storage-tab">
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Serial Number</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">   
                                                <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="storage_serialnumber">                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Brand</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">   
                                                <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="storage_brand">                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Model</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">   
                                                <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="storage_model">                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Item Amount</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">
                                                <div class="form-group">
                                                     <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="storage_amount">
                                                </div>                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Description</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">
                                                <div class="form-group">
                                                    <textarea class="form-control rounded-0" oninput="this.value = this.value.toUpperCase()" name="storage_description" rows="3"></textarea>
                                                </div>                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="videocard" role="tabpanel" aria-labelledby="videocard-tab">
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Serial Number</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">   
                                                <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="videocard_serialnumber">                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Brand</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">   
                                                <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="videocard_brand">                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Model</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">   
                                                <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="videocard_model">                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Item Amount</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">
                                                <div class="form-group">
                                                     <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="videocard_amount">
                                                </div>                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Description</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">
                                                <div class="form-group">
                                                    <textarea class="form-control rounded-0" oninput="this.value = this.value.toUpperCase()" name="videocard_description" rows="3"></textarea>
                                                </div>                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="motherboard" role="tabpanel" aria-labelledby="motherboard-tab">
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Serial Number</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">   
                                                <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="board_serialnumber">                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Brand</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">   
                                                <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="board_brand">                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Model</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">   
                                                <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="board_model">                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Item Amount</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">
                                                <div class="form-group">
                                                     <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="board_amount">
                                                </div>                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Description</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">
                                                <div class="form-group">
                                                    <textarea class="form-control rounded-0" oninput="this.value = this.value.toUpperCase()" name="board_description" rows="3"></textarea>
                                                </div>                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="psu" role="tabpanel" aria-labelledby="psu-tab">
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Serial Number</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">   
                                                <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="psu_serialnumber">                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Brand</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">   
                                                <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="psu_brand">                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Model</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">   
                                                <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="psu_model">                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Item Amount</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">
                                                <div class="form-group">
                                                     <input type="text" class="form-control form-control-user" oninput="this.value = this.value.toUpperCase()" name="psu_amount">
                                                </div>                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">  
                                                <p style="text-align: right; font-size: 20px;">Description</p>                            
                                            </div>
                                            <div class="col-sm-8 mb-3 mb-sm-0">   
                                                <div class="form-group">
                                                    <textarea class="form-control rounded-0" oninput="this.value = this.value.toUpperCase()" name="psu_description" rows="3"></textarea>
                                                </div>                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                 <p style="text-align: right; font-size: 20px;"><span style="color: red;">*</span> RF No.</p>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="rf" oninput="this.value = this.value.toUpperCase()" required="">
                            </div>
                        </div>
                    </div>              
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary" id="save_item" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>


<!---------------------------------
-----------------------------------
   Account Settings Modal
-----------------------------------
---------------------------------->

    <div class="modal fade" id="account_settings_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header" >
                    <h5 class="modal-title"><b><i class="fas fa-cogs"></i>  &nbsp; A C C O U N T &nbsp;  S E T T I N G S </b></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid"><br>
                        <h6 class="text-center"><b>UPDATE NEW PERSONAL INFORMATION</b></h6><br>
                        <form class="form-inline mr-auto w-100">
                            <span>&nbsp;&nbsp;Name</span>
                            <div class="input-group" style="width: 100%;">
                                <input type="text" class="form-control bg-light border-1 small"
                                    placeholder="Name" oninput="this.value = this.value.toUpperCase()"
                                    aria-describedby="basic-addon2" id="name" autocomplete="off" 
                                    value="<?php  
                                    user_info();
                                    echo $name; 
                                    ?>"><br><br>
                            </div>                          
                            <span>&nbsp;&nbsp;Username</span>
                            <div class="input-group" style="width: 100%;">
                                <input type="text" class="form-control bg-light border-1 small"
                                    placeholder="Username"
                                    aria-describedby="basic-addon2" id="username"
                                    value="<?php  
                                    user_info();
                                    echo $uname; 
                                    ?>"><br><br>
                            </div>
                            <span>&nbsp;&nbsp;Enter New Password</span>
                            <div class="input-group" style="width: 100%;">
                                <input type="password" class="form-control bg-light border-1 small"
                                    placeholder="Password"
                                    aria-describedby="basic-addon2" id="pass">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" onclick="view_password()">
                                        <i class="fas fa-eye fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>                   
                    </div>                         
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" id="update_user">Update</a>
                </div>
            </div>
        </div>
    </div>   


<!---------------------------------
-----------------------------------
    Item History Modal
-----------------------------------
---------------------------------->

    <div class="modal fade" id="history_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header" >
                    <h5 class="modal-title"><b><i class="fas fa-history"></i>  &nbsp; I T &nbsp; A S S E T &nbsp;  H I S T O R Y &nbsp; R E C O R D</b></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div><br>
                    <input type="hidden" id="history_itemid">
                        <table border="1" width="100%">
                            <tr>
                                <td>
                                    <!-- <h6><b>COMPANY &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_company"></span></b></h6> -->
                                    <h6><b>&nbsp;&nbsp;ASSET ID &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_code"></span></b></h6>
                                </td>
                                <td colspan="2">
                                </td>
                                <td>
                                    <!-- <h6><b>ITEM STATUS &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_status"></span></b></h6> -->
                                    <h6><b>&nbsp;&nbsp;ASSET TYPE &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_item_type"></span></b></h6>
                                </td>
                            </tr> 
                            <tr style="background-color: #e2efda;" class="text-center"> 
                                <td colspan="4">
                                    <h6><b>BASIC INFORMATION</b></h6>
                                </td>
                            </tr> 
                            <tr>
                                <td colspan="2">
                                    <h6><b>&nbsp;&nbsp;BRAND &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_brand"></span></b></h6>
                                </td>
                                <td>
                                    <h6><b>&nbsp;&nbsp;MODEL &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_model"></span></b></h6>
                                </td>
                                <td>
                                    <h6><b>&nbsp;&nbsp;S / N &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_sn"></span></b></h6>
                                </td>
                            </tr> 
                            <tr>
                                <td colspan="2">
                                    <h6><b>&nbsp;&nbsp;SUPPLIER &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_supplier"></span></b></h6>
                                </td>
                                <td>
                                    <h6><b>&nbsp;&nbsp;AMOUNT &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_amount"></span></b></h6>
                                </td>
                                <td>
                                    <h6><b>&nbsp;&nbsp;INVOICE # &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_invoice"></span></b></h6>
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <h6><b>&nbsp;&nbsp;REQUISITION # &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_rf"></span></b></h6>
                                </td>
                                <td>
                                    <h6><b>&nbsp;&nbsp;PO # &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_ponum"></span></b></h6>
                                </td>
                                <td>
                                    <h6><b>&nbsp;&nbsp;PURCHASED DATE &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_podate"></span></b></h6>
                                </td>
                                <td>
                                    <h6><b>&nbsp;&nbsp;RECEIVED DATE &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_receivedate"></span></b></h6>
                                </td>
                            </tr> 
                             <tr>
                                <td colspan="3">
                                    <h6><b>&nbsp;&nbsp;LOCATION &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_location"></span></b></h6>
                                </td>
                                <td>
                                    <h6><b>&nbsp;&nbsp;ITEM WARRANTY &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_warranty"></span></b></h6>
                                </td>
                            </tr>        
                        </table>
                    </div><br>
                    <hr>
                    <div>
                       <a class="btn btn-primary btn-icon-split btn-md" onclick="hide_show()">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Entry Record to History</span>
                        </a>
                        <a class="btn btn-primary btn-icon-split btn-md" id="history_print">
                            <span class="icon text-white-50">
                                <i class="fas fa-print"></i>
                            </span>
                            <span class="text">Preview History Record</span>
                        </a>
                    </div>  <br>
                    <div id="history_record_div" style="display: none;" class="animated fadeIn">
                        <table width="100%">
                            <tr>
                                <td width="10%">  
                                    <h6><b>&nbsp;&nbsp;<span style="color: red;"><b>*</b></span> DATE &nbsp;&nbsp;</b></h6>                              
                                </td>
                                <td width="30%">
                                    <input type="date" class="form-control form-control-user" id="history_date">       
                                </td>
                                <td width="20%" class="text-right">   
                                    <h6><b>&nbsp;&nbsp; SRF #&nbsp;&nbsp;</b></h6>                           
                                </td>
                                <td width="20%" colspan="2">
                                    <input type="text" class="form-control form-control-user" id="history_srf">  
                                </td>
                            </tr> 
                            <tr >
                                <td width="10%">  
                                    <h6><b>&nbsp;&nbsp;<span style="color: red;"><b>*</b></span> PROBLEM</b></h6>                              
                                </td>                            
                                <td width="30%" colspan="4" > 
                                    <div class="autocomplete md-form">
                                        <input type="text" class="form-control" id="history_problem"> 
                                    </div>      
                                </td>
                            </tr>      
                            <tr>
                                <td width="10%">  
                                    <h6><b>&nbsp;&nbsp;<span style="color: red;"><b>*</b></span> SOLUTION / RECOMMENDATION &nbsp;&nbsp;</b></h6>                              
                                </td>
                                <td width="30%" colspan="4"> 
                                    <input type="text" class="form-control form-control-user" id="history_solution">       
                                </td>
                            </tr>   
                            <tr>
                                <td width="10%">  
                                    <h6><b>&nbsp;&nbsp;<span style="color: red;"><b>*</b></span> REMARKS &nbsp;&nbsp;</b></h6>                              
                                </td>
                                <td width="30%">
                                    <input type="text" class="form-control form-control-user" id="history_remarks">       
                                </td>
                                <td width="20%" class="text-right">                        
                                </td>
                                <td width="20%" colspan="2">
                                </td>
                            </tr>      
                            <tr>
                                <td width="10%">  
                                    <h6><b>&nbsp;&nbsp;<span style="color: red;"><b>*</b></span> CHECKED BY &nbsp;&nbsp;</b></h6>                              
                                </td>
                                <td width="30%">
                                    <input type="text" class="form-control form-control-user" id="history_checkedby" value="<?php user_info(); echo $name; ?>">       
                                </td>
                                <td width="20%" class="text-right">                        
                                </td>
                                <td width="20%" colspan="2">
                                </td>
                            </tr> 
                            <tr>
                                <td width="10%">     
                                <h6><b>&nbsp;&nbsp; &nbsp;&nbsp;</b></h6>                                                           
                                </td>
                                <td width="30%">    
                                </td>
                                <td width="20%" class="text-right">                        
                                </td>
                                <td width="20%" colspan="2">
                                </td>
                            </tr> 
                            <tr>
                                <td colspan="5">   
                                    <a class="btn btn-success btn-icon-split btn-md" id="history_save">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-save"></i>
                                        </span>
                                        <span class="text">Save Record</span>
                                    </a>                                                                              
                                </td>
                            </tr> 
                                           
                        </table>                            
                    </div>                      
                </div>
                <div class="modal-footer">
                  <!--   <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" id="update_user">Update</a> -->
                </div>
            </div>
        </div>
    </div>  

    <!-- Addonn Item History Modal -->

    <div class="modal fade" id="history_modal_addon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header" >
                    <h5 class="modal-title"><b><i class="fas fa-history"></i>  &nbsp; A D D - O N &nbsp; H I S T O R Y &nbsp; R E C O R D</b></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div><br>
                    <input type="hidden" id="history_itemid">
                        <table border="1" width="100%">
                            <tr>
                                <td>
                                    <!-- <h6><b>COMPANY &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_company"></span></b></h6> -->
                                    <h6><b>&nbsp;&nbsp;ASSET ID ASSIGNED &nbsp;&nbsp;&nbsp;<span style="color: red;" id="addon_display_code"></span></b></h6>
                                </td>
                                <td colspan="2">
                                </td>
                                <td>
                                    <!-- <h6><b>ITEM STATUS &nbsp;&nbsp;&nbsp;<span style="color: red;" id="display_status"></span></b></h6> -->
                                    <h6><b>&nbsp;&nbsp;ASSET TYPE &nbsp;&nbsp;&nbsp;<span style="color: red;" id="addon_display_addon_type"></span></b></h6>
                                </td>
                            </tr> 
                            <tr style="background-color: #e2efda;" class="text-center"> 
                                <td colspan="4">
                                    <h6><b>BASIC INFORMATION</b></h6>
                                </td>
                            </tr> 
                            <tr>
                                <td colspan="2">
                                    <h6><b>&nbsp;&nbsp;BRAND &nbsp;&nbsp;&nbsp;<span style="color: red;" id="addon_display_brand"></span></b></h6>
                                </td>
                                <td>
                                    <h6><b>&nbsp;&nbsp;MODEL &nbsp;&nbsp;&nbsp;<span style="color: red;" id="addon_display_model"></span></b></h6>
                                </td>
                                <td>
                                    <h6><b>&nbsp;&nbsp;S / N &nbsp;&nbsp;&nbsp;<span style="color: red;" id="addon_display_sn"></span></b></h6>
                                </td>
                            </tr> 
                            <tr>
                                <td colspan="2">
                                    <h6><b>&nbsp;&nbsp;SUPPLIER &nbsp;&nbsp;&nbsp;<span style="color: red;" id="addon_display_supplier"></span></b></h6>
                                </td>
                                <td>
                                    <h6><b>&nbsp;&nbsp;AMOUNT &nbsp;&nbsp;&nbsp;<span style="color: red;" id="addon_display_amount"></span></b></h6>
                                </td>
                                <td>
                                    <h6><b>&nbsp;&nbsp;INVOICE # &nbsp;&nbsp;&nbsp;<span style="color: red;" id="addon_display_invoice"></span></b></h6>
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    <h6><b>&nbsp;&nbsp;REQUISITION # &nbsp;&nbsp;&nbsp;<span style="color: red;" id="addon_display_rf"></span></b></h6>
                                </td>
                                <td>
                                    <h6><b>&nbsp;&nbsp;PO # &nbsp;&nbsp;&nbsp;<span style="color: red;" id="addon_display_ponum"></span></b></h6>
                                </td>
                                <td>
                                    <h6><b>&nbsp;&nbsp;PURCHASED DATE &nbsp;&nbsp;&nbsp;<span style="color: red;" id="addon_display_podate"></span></b></h6>
                                </td>
                                <td>
                                    <h6><b>&nbsp;&nbsp;RECEIVED DATE &nbsp;&nbsp;&nbsp;<span style="color: red;" id="addon_display_receivedate"></span></b></h6>
                                </td>
                            </tr> 
                             <tr>
                                <td colspan="3">
                                    <h6><b>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<span style="color: red;" id="addon_display_location"></span></b></h6>
                                </td>
                                <td>
                                    <h6><b>&nbsp;&nbsp;ITEM WARRANTY &nbsp;&nbsp;&nbsp;<span style="color: red;" id="addon_display_warranty"></span></b></h6>
                                </td>
                            </tr>        
                        </table>
                    </div><br><br>
                    <div>
                       <a class="btn btn-primary btn-icon-split btn-md" onclick="hide_showAddon()">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Entry Record to History</span>
                        </a>
                        <a class="btn btn-primary btn-icon-split btn-md" id="history_print">
                            <span class="icon text-white-50">
                                <i class="fas fa-print"></i>
                            </span>
                            <span class="text">Preview History Record</span>
                        </a>
                    </div>  <br>
                    <div id="addon_record_div" style="display: none;" class="animated fadeIn">
                        <table width="100%">
                            <tr>
                                <td width="10%">  
                                    <h6><b>&nbsp;&nbsp;<span style="color: red;"><b>*</b></span> DATE &nbsp;&nbsp;</b></h6>                              
                                </td>
                                <td width="30%">
                                    <input type="date" class="form-control form-control-user" id="history_date">       
                                </td>
                                <td width="20%" class="text-right">   
                                    <h6><b>&nbsp;&nbsp; SRF #&nbsp;&nbsp;</b></h6>                           
                                </td>
                                <td width="20%" colspan="2">
                                    <input type="text" class="form-control form-control-user" id="history_srf">  
                                </td>
                            </tr> 
                            <tr>
                                <td width="10%">  
                                    <h6><b>&nbsp;&nbsp;<span style="color: red;"><b>*</b></span> PROBLEM / REQUEST</b></h6>                              
                                </td>
                                <td width="30%" colspan="4"> 
                                    <input type="text" class="form-control form-control-user" id="history_problem">       
                                </td>
                            </tr>      
                            <tr>
                                <td width="10%">  
                                    <h6><b>&nbsp;&nbsp;<span style="color: red;"><b>*</b></span> SOLUTION / RECOMMENDATION &nbsp;&nbsp;</b></h6>                              
                                </td>
                                <td width="30%" colspan="4"> 
                                    <input type="text" class="form-control form-control-user" id="history_solution">       
                                </td>
                            </tr>   
                            <tr>
                                <td width="10%">  
                                    <h6><b>&nbsp;&nbsp;<span style="color: red;"><b>*</b></span> REMARKS &nbsp;&nbsp;</b></h6>                              
                                </td>
                                <td width="30%">
                                    <input type="text" class="form-control form-control-user" id="history_remarks">       
                                </td>
                                <td width="20%" class="text-right">                        
                                </td>
                                <td width="20%" colspan="2">
                                </td>
                            </tr>      
                            <tr>
                                <td width="10%">  
                                    <h6><b>&nbsp;&nbsp;<span style="color: red;"><b>*</b></span> CHECKED BY &nbsp;&nbsp;</b></h6>                              
                                </td>
                                <td width="30%">
                                    <input type="text" class="form-control form-control-user" id="history_checkedby" value="<?php user_info(); echo $name; ?>">       
                                </td>
                                <td width="20%" class="text-right">                        
                                </td>
                                <td width="20%" colspan="2">
                                </td>
                            </tr> 
                            <tr>
                                <td width="10%">     
                                <h6><b>&nbsp;&nbsp; &nbsp;&nbsp;</b></h6>                                                           
                                </td>
                                <td width="30%">    
                                </td>
                                <td width="20%" class="text-right">                        
                                </td>
                                <td width="20%" colspan="2">
                                </td>
                            </tr> 
                            <tr>
                                <td colspan="5">   
                                    <a class="btn btn-success btn-icon-split btn-md" id="history_save">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-save"></i>
                                        </span>
                                        <span class="text">Save Record</span>
                                    </a>                                                                              
                                </td>
                            </tr> 
                                           
                        </table>                            
                    </div>                      
                </div>
                <div class="modal-footer">
                  <!--   <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" id="update_user">Update</a> -->
                </div>
            </div>
        </div>
    </div>  

<script>
    function view_password() {
        var w = document.getElementById("pass");
        if (w.type === "password") {
            w.type = "text";
        } else {
            w.type = "password";
        }
    }

    function hide_show() {
        $('#history_save').attr('disabled', false);
        var x = document.getElementById("history_record_div");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

   /* function hide_showAddon() {
    var y = document.getElementById("addon_record_div");
        if (y.style.display === "none") {
            y.style.display = "block";
        } else {
            y.style.display = "none";
        }
    }*/

</script>

