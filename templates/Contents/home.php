<style>
     /* div{
            border: 0.5px solid magenta;
               
        }  */
</style>

<div class="container-fluid">
    <!--jumbotron message-->
    <div class="row px-5 py-5" style="background-color: #e6edf2;">
        <div class="col-12 col-md-6 col-lg-6 px-5 py-2">
            <h1 style="font-size: 3.5em;">Bob's Construction Company</h1>
            <div style="font-size: 1.5em; margin-top: 1em;">
                <p>Best service money can buy...</p>
            </div>
            <div style="margin-top:5em;">
                <button type="button" class="btn btn-primary btn-lg">Join our team!</button>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 px-5 py-2">
            <?= $this->Html->image('main_img.png', ['alt' => 'Bob saying hello', 'class' => 'img-fluid']) ?>
        </div>
    </div>
    <!--About us-->
    <div class="row px-5 py-5">
        <div class="col-12 col-md-12 col-lg-12 px-5 py-2">
        <h1>About Us</h1>
        <p style="margin-top:2em;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
        </div>
    </div>
    <!--join team-->
    <div class="row px-5 py-5" style="background-color: #1c1840; color: white;">
        <div class="col-12 col-md-6 col-lg-6 px-5 py-2">
            <h1>Join as an Inspector</h1>
            <p style="margin-top:2em;">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
            <button type="button" class="btn btn-secondary btn-lg">Learn more</button>
        </div>
        <div class="col-12 col-md-6 col-lg-6 px-5 py-2">
            <h1>Join as a Contractor</h1>
            <p style="margin-top:2em;">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
            <?= $this->Html->link("Learn More", ['controller'=>'Users', 'action' => 'addContractor'], ['class'=>'btn btn-secondary btn-lg']) ?>
        </div>
    </div>
    <!--brand image-->
    <div class="row px-5 py-5" style="color: white; background-image: url(/img/two.jpg);
        background-position: center; 
        background-repeat: no-repeat;
        height: 600px;
        background-size: cover;">
        <div class="col-12 col-md-12 col-lg-12 px-5 py-2" style="text-align: center;">
            <h1 style="background-color:#1c1840; padding: 1em; margin: 1em 1em 1em 1em;">The Team</h1>
        </div>
    </div>
</div>