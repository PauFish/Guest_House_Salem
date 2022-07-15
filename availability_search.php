 <form  method="POST" action="index.php?p=booking">
<div id="availability-wrap" class="site-footer clr">
    <div id="footer" class="clr">
        <div id=" -wrap" class="clr">  
        

         <div class="col-lg-3"> <label class="block"><p>Availability Search</p></label></div>
         <div class="col-lg-9 ">
          <div class="row block">
              <div class="col-md-2 col-sm-2 s">.
            <div class="form-group input-group"> 
                      <label>Arrival</label> 
                      <input type="text" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" 
                               data-link-format="yyyy-mm-dd"
                               name="arrival" id="date_pickerfrom"  
                               value="<?php echo isset($_POST['arrival']) ? $_POST['arrival'] :date('m/d/Y');?>"
                                readonly="true" class="date_pickerfrom input-sm form-control">
                      <span class="input-group-btn">
                          <i class="fa  fa-calendar" ></i> 
                      </span>
                    </div>

           </div>
            <div class="col-md-2 col-sm-2 s">.
              <div class="form-group input-group"> 
                    <label>Departure</label> 
                    <input type="text" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" 
                           data-link-format="yyyy-mm-dd"
                           name="departure" id="date_pickerto" 
                           value="<?php echo isset($_POST['departure']) ? $_POST['departure'] : date('m/d/Y');?>" 
                            readonly="true" class="date_pickerto form-control  input-sm">
                    <span class="input-group-btn">
                        <i class="fa  fa-calendar" ></i> 
                    </span> 
                 </div>
           </div>
              
       
           <div class="col-md-1 col-sm-1 s">.
                <div  class="form-group input-group"> 
                   <button class="btn btn-primary btn-lg " name="checkAvail" type="submit" id="checkAvail" >Check Availability </button>
                  </div>
           </div>
          </div>
         
         </div>
 
            </div> 
                 
           
         </div>
    </div> 

 </form>
 