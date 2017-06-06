<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
?>
<section class="section-top-75 section-md-top-135">
          <div class="shell">
            <h3>Contact Us</h3>
            <hr class="hr offset-top-35">
            <div class="range range-xs-center offset-top-0 features-list-variant-2 section-top-70 section-bottom-80">
              <div class="cell-xs-8 cell-sm-10 cell-lg-6 text-sm-left">
                <div class="unit unit-sm-horizontal unit-spacing-sm">
                  <div class="unit-left"><img src="images/home-08-270x180.jpg" alt="" width="270" height="180" class="img-responsive img-rounded img-fullwidth"/>
                  </div>
                  <div class="unit-body">
                    <h6 class="offset-top-10 text-transform-none">Corporate Office</h6>
                    <p class="text-regular line-height-21 offset-top-8">House: 17, Road: 106, Block: CEN(F) <br class="visible-lg-inline"> Gulshan-2, Dhaka-1212, Bangladesh</p>
                    <dl class="dl-horizontal-variant-1 offset-sm-top-25 text-sm-left">
                      <dt class="text-bold text-dark">Tel:</dt>
                      <dd><a href="#" class="text-base text-regular">880-2-9888049</a></dd>
                      <dd><a href="#" class="text-base text-regular"> 880-2-5508816192</a></dd>
                      <dd><a href="#" class="text-base text-regular"> 880-2-8831718</a></dd>
                      <dd><a href="#" class="text-base text-regular">88-2-8832759</a></dd>
                      <dd><a href="#" class="text-base text-regular">880-2-8833515</a></dd>
                      <dd><a href="#" class="text-base text-regular">880-2-9856849</a></dd>
                      <dd><a href="#" class="text-base text-regular">880-2-9892597</a></dd>
                    </dl>
                    <dl class="dl-horizontal-variant-1 text-sm-left">
                      <dt class="text-bold text-dark">Fax:</dt>
                      <dd><a href="#" class="text-base text-regular">880-2-55059996</a></dd>
                    </dl>
                    <dl class="dl-horizontal-variant-1 text-sm-left">
                      <dt class="text-bold text-dark">Web:</dt>
                      <dd><a href="#" class="text-base text-regular">www.spectragroup.com.bd</a></dd>
                    </dl>
                  </div>
                </div>
                <div class="unit unit-sm-horizontal unit-spacing-sm offset-top-60 offset-sm-top-30">
                  <div class="unit-left"><img src="images/home-09-270x180.jpg" alt="" width="270" height="180" class="img-responsive img-rounded img-fullwidth"/>
                  </div>
                  <div class="unit-body">
                    <h6 class="offset-top-10 text-transform-none">Factory Office</h6>
                    <p class="text-regular line-height-21 offset-top-8">Uttar Daulatdia, Goalandha,  <br class="visible-lg-inline"> Rajbari, Bangladesh</p>
                    <dl class="dl-horizontal-variant-1 offset-sm-top-25 text-sm-left">
                      <dt class="text-bold text-dark">Tel:</dt>
                      <dd><a href="#" class="text-base text-regular">880-6432-56310</a></dd>
                    </dl>
                    <dl class="dl-horizontal-variant-1 offset-sm-top-25 text-sm-left">
                      <dt class="text-bold text-dark">Cell:</dt>
                      <dd><a href="#" class="text-base text-regular">+8801711-465220</a></dd>
                      <dd><a href="#" class="text-base text-regular">01971-465220</a></dd>
                    </dl>
                    <dl class="dl-horizontal-variant-1 text-sm-left">
                      <dt class="text-bold text-dark">E-mail:</dt>
                      <dd><a href="#" class="text-base text-regular">sunypun@gmail.com</a></dd>
                      <dd><a href="#" class="text-base text-regular">jahangiralamtalukder@gmail.com</a></dd>
                    </dl>
                  </div>
                </div>
              </div>
              <div class="cell-sm-10 cell-lg-6 offset-top-50 offset-lg-top-0">
                  <div id="googleMap" style="width:100%;height:300px;"></div>
                  <br>
                <div class="inset-lg-left-110">
                  <h5>Get a pricing quote for a Sunypun product</h5>
                  <!-- RD Mailform-->
                  <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.htm" class="rd-mailform text-center offset-top-30">
                    <div class="form-group">
                      <label for="contact-name" class="form-label">Your Name</label>
                      <input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="contact-email" class="form-label">Email</label>
                      <input id="contact-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="contact-phone" class="form-label">Phone</label>
                      <input id="contact-phone" type="text" name="phone" data-constraints="@Numeric @Required" class="form-control">
                    </div>
                    <div class="form-group">
                      <!--Select 2-->
                      <select data-placeholder="Do you need a residental or commercial system?" data-minimum-results-for-search="Infinity" data-constraints="@Required" class="form-control select-filter">
                        <option>Which product do you want?</option>
                        <option value="1">Denatured Spirit (DS)</option>
                        <option value="2">Rectified Spirit (RS)</option>
                         <option value="3">Extra Neutral Alcohol (ENA)</option>
                        <option value="4">Industrial Methylated Spirit (IMS)</option>
                         <option value="5">Ethanol BP 96%</option>
                        <option value="6">Absolute Ethanol</option>
                         <option value="7">Distillery Dried Grain Soluble (DDGS)</option>
                      </select>
                    </div>
                   <!-- <div class="form-group">
                      <!--Select 2--
                      <select data-placeholder="What is your average electricity bill?" data-minimum-results-for-search="Infinity" data-constraints="@Required" class="form-control select-filter">
                        <option>What is your average electricity bill?</option>
                        <option value="2">100</option>
                        <option value="3">200</option>
                        <option value="4">300</option>
                      </select>
                    </div>-->
                    <button type="submit" class="btn btn-primary offset-top-30">GET A QUOTE</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
<script>
function myMap() {
    var myLatLng = {lat: 23.791440, lng: 90.421308};
    var map = new google.maps.Map(document.getElementById('googleMap'), {
          zoom: 15,
          center: myLatLng
        });
/*var mapProp= {
    center:new google.maps.LatLng(23.8103,90.4125),
    zoom:10
};*/
var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Sunypun Organics Ltd.'
        });
//var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiWgWvjUqwQiR2yeX4TY3I41MtffE92Fs&callback=myMap"></script>