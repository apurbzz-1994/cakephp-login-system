<style>
     /* div{
            border: 0.5px solid magenta;
               
        }  */
        body{
            background-color: #e6edf2;
        }
</style>

<div class="container-fluid" style="background-color: #e6edf2">
    <div class="row">
        <div class = "col-12 col-md-12 col-lg-12">
            <div class="row justify-content-md-center pt-5">
                <div class = "col-12 col-md-6 col-lg-6" style="text-align: center;">
                    <h3>Thanks for choosing to register with Bob's construction. Before we begin...</h3>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-12 col-md-3 col-lg-3">
                
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="px-5 py-3" style="background-color: #1c1840; color: white; margin-top:1em">
                        <h4>Register as an Inspector</h4>
                        <p style="padding-top:1em;">Inspectors are primary responsible for doing site visits and generating correct assessments of a site or home. You
                        You may be required to pass certain exams and have aquired certificates for to be registered. You'll be reporting to Wendy.</p>
                        <button type="button" class="btn btn-secondary btn-lg">Register</button>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="px-5 py-3" style="background-color: #1c1840; color: white; margin-top:1em">
                        <h4>Register as a Contractor</h4>
                        <p style="padding-top:1em;">Contractors are primarily responsibe for being in charge of construction in various sites. You may also be
                        required to contact suppliers to get construction supplies and equipment. You'll be hanging out with Bob the most!</p>
                        <?= $this->Html->link("Register", ['controller'=>'Users', 'action' => 'addContractor'], ['class'=>'btn btn-secondary btn-lg']) ?>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                
                </div>
            </div>
        </div>
    </div>
</div>