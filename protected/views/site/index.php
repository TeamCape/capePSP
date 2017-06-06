<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<section>
          <!-- Swiper-->
          <div data-height="43%" data-loop="true" data-dragable="false" data-min-height="480px" data-slide-effect="true" class="swiper-container swiper-slider">
             <div class="swiper-wrapper">
              <div data-slide-bg="images/bg1.jpg" style="background-position: 80% center " height="100px" width="100px" class="swiper-slide">
                <div class="swiper-slide-caption"></div>
              </div>
              <div data-slide-bg="images/sunipun2.jpg" style="background-position: 80% center" class="swiper-slide">
                <div class="swiper-slide-caption"></div>
              </div>
              <div data-slide-bg="images/sunipun3.png" style="background-position: 80% center" class="swiper-slide">
                <div class="swiper-slide-caption"></div>
              </div>
                <div data-slide-bg="images/bg2.jpg" style="background-position: 80% center" class="swiper-slide">
                <div class="swiper-slide-caption"></div>
              </div>
            </div>
            <!--<div class="swiper-wrapper">
              <div data-slide-bg="images/fghghgh-300x200.png" style="background-position: 80% center" class="swiper-slide">
                <div class="swiper-slide-caption"></div>
              </div>
              <div data-slide-bg="images/gfg-300x200.png" style="background-position: 80% center" class="swiper-slide">
                <div class="swiper-slide-caption"></div>
              </div>
              <div data-slide-bg="images/gfddfr.png" style="background-position: 80% center" class="swiper-slide">
                <div class="swiper-slide-caption"></div>
              </div>
                <div data-slide-bg="images/sunipon-page-300x200.png" style="background-position: 80% center" class="swiper-slide">
                <div class="swiper-slide-caption"></div>
              </div>
            </div>-->
            <div class="jumbotron-custom">
              <div class="shell">
                <div class="range range-xs-center">
                  <div class="cell-md-9 text-center cell-xs-10">
                    <div>
                        <h1><span class="text-primary view-animate fadeInUp delay-08 duration-1 animated">SUNYPUN &nbsp;</span><span class="text-white view-animate fadeInDown delay-08 duration-1 animated">ORGANICS LIMITED</span></h1>
                        <p>(A Sister Concern of Spectra Group)</p>
                    </div>
                    <div class="offset-top-20 view-animate fadeInUpSmall delay-16 duration-1">
                      <p class="h6 text-white font-default text-light text-transform-none">  We are the pioneer in exporting ENA to Overses  Countries</p>
                    </div>
                    <div class="offset-top-20 offset-lg-top-50 view-animate zoomInSmall delay-2 duration-1"><a href="index.php?r=site/about" class="btn btn-success">Find Out More</a></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
          </div>
        </section>
        <!--section features-->
        <section class="section-60 section-md-top-122 section-md-bottom-122">
          <div class="shell">
            <div class="range range-xs-center range-xs-bottom features-list">
              <div class="cell-sm-6 cell-md-3 wow fadeInUp delay-04 duration-1">
                <div class="thumbnail-features">
                  <!--<div class="unit unit-vertical unit-spacing-sm">
                    <div class="unit-left"><span class="icon">
                        <svg x="0px" y="0px" width="62px" height="62px" viewbox="0 0 62 62" class="icon-primary-fill">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M14.112,20.095c-0.535,0-0.97-0.435-0.97-0.97  c0-0.535,0.435-0.97,0.97-0.97h10.01c0.534,0,0.97,0.435,0.97,0.97c0,0.535-0.435,0.97-0.97,0.97H14.112z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.086,24.13c0,0.535-0.435,0.97-0.97,0.97  c-0.535,0-0.97-0.435-0.97-0.97V14.121c0-0.534,0.435-0.97,0.97-0.97c0.534,0,0.97,0.435,0.97,0.97V24.13z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M37.885,20.095c-0.535,0-0.97-0.435-0.97-0.97  c0-0.535,0.435-0.97,0.97-0.97h10.009c0.535,0,0.97,0.435,0.97,0.97c0,0.535-0.435,0.97-0.97,0.97H37.885z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M10.983,31.981c-0.535,0-0.97-0.435-0.97-0.97  c0-0.535,0.435-0.97,0.97-0.97h40.039c0.534,0,0.97,0.436,0.97,0.97c0,0.535-0.435,0.97-0.97,0.97H10.983z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M31.973,51.031c0,0.534-0.435,0.97-0.97,0.97  c-0.535,0-0.97-0.435-0.97-0.97V10.993c0-0.535,0.436-0.97,0.97-0.97c0.534,0,0.97,0.435,0.97,0.97V51.031z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M56.026,1.952H5.979c-1.11,0-2.121,0.455-2.848,1.183L3.126,3.14  C2.399,3.867,1.944,4.878,1.944,5.987v50.048c0,1.108,0.454,2.118,1.181,2.85l0.004,0.005c0.732,0.728,1.741,1.181,2.849,1.181  h50.048c1.108,0,2.118-0.454,2.85-1.181l0.005-0.005c0.728-0.732,1.181-1.742,1.181-2.85V5.987c0-1.107-0.453-2.117-1.181-2.848  l-0.005-0.005C58.145,2.406,57.134,1.952,56.026,1.952L56.026,1.952z M5.979,0.013h50.048c1.641,0,3.135,0.673,4.217,1.754  l0.005,0.005c1.081,1.082,1.754,2.575,1.754,4.215v50.048c0,1.641-0.673,3.135-1.754,4.217l-0.005,0.004  c-1.082,1.081-2.576,1.754-4.217,1.754H5.979c-1.641,0-3.134-0.674-4.216-1.754l-0.005-0.004c-1.081-1.082-1.754-2.576-1.754-4.217  V5.987c0-1.636,0.671-3.128,1.753-4.212L1.76,1.773l0.002-0.002l0.002-0.002C2.847,0.685,4.342,0.013,5.979,0.013z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M56.997,51.031c0,0.534-0.436,0.97-0.97,0.97  c-0.534,0-0.97-0.435-0.97-0.97V6.957H6.949v48.108h49.078c0.535,0,0.97,0.435,0.97,0.97c0,0.535-0.436,0.97-0.97,0.97H6.004H5.979  c-0.535,0-0.97-0.435-0.97-0.97V6.012V5.987c0-0.534,0.435-0.97,0.97-0.97h50.022h0.025c0.535,0,0.97,0.435,0.97,0.97V51.031z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M14.27,43.987c-0.534,0-0.97-0.435-0.97-0.969  c0-0.535,0.435-0.97,0.97-0.97h9.694c0.535,0,0.97,0.435,0.97,0.97c0,0.534-0.435,0.969-0.97,0.969H14.27z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M17.177,39.622c-0.535,0-0.97-0.435-0.97-0.97  c0-0.535,0.435-0.97,0.97-0.97h1.941c0.534,0,0.97,0.435,0.97,0.97c0,0.535-0.435,0.97-0.97,0.97H17.177z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M19.118,48.35c-0.535,0-0.97-0.435-0.97-0.97  c0-0.534,0.435-0.969,0.97-0.969h1.939c0.535,0,0.97,0.435,0.97,0.969c0,0.535-0.435,0.97-0.97,0.97H19.118z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M37.885,41.075c-0.535,0-0.97-0.435-0.97-0.97  c0-0.535,0.435-0.97,0.97-0.97h10.009c0.535,0,0.97,0.435,0.97,0.97c0,0.534-0.435,0.97-0.97,0.97H37.885z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M37.885,46.887c-0.535,0-0.97-0.435-0.97-0.97  c0-0.535,0.435-0.97,0.97-0.97h10.009c0.535,0,0.97,0.435,0.97,0.97c0,0.534-0.435,0.97-0.97,0.97H37.885z"></path>
                        </svg></span></div>
                    <div class="unit-body">
                      <h6 class="offset-top-10">Calculate your Savings</h6><a href="index.html#" class="btn btn-xs btn-default offset-top-30">Open calculator</a>
                    </div>
                  </div>-->
                </div>
              </div>
              <div class="cell-sm-6 cell-md-3 wow fadeInDown delay-04 duration-1 offset-top-55 offset-sm-top-0">
                <div class="thumbnail-features">
                  <div class="unit unit-vertical unit-spacing-sm">
                    <div class="unit-left"><span class="icon">
                        <svg x="0px" y="0px" width="62px" height="62px" viewbox="0 0 62 62" class="icon-primary-fill">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M4.837,36.8c-0.532,0-0.965-0.432-0.965-0.964  c0-0.531,0.432-0.964,0.965-0.964l4.774,0.008l8.052-9.358c0.347-0.405,0.957-0.452,1.362-0.105c0.064,0.055,0.12,0.117,0.166,0.183  l6.994,8.738L40.92,17.76c0.354-0.399,0.967-0.434,1.366-0.08l0.079,0.079l8.82,8.811l3.22-4.83c0.296-0.443,0.897-0.56,1.34-0.264  c0.443,0.296,0.561,0.897,0.264,1.34l-3.848,5.772c-0.038,0.063-0.086,0.124-0.141,0.179c-0.375,0.377-0.989,0.379-1.366,0.004  l-8.969-8.96L26.87,36.479l-0.002-0.002c-0.037,0.04-0.076,0.077-0.119,0.112c-0.415,0.332-1.022,0.264-1.354-0.151L18.37,27.66  l-7.583,8.813l-0.001-0.001c-0.177,0.207-0.439,0.337-0.732,0.337L4.837,36.8L4.837,36.8z M42.324,17.719l0.041,0.041L42.324,17.719  z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M30.026,5.812c0.534,0,0.969,0.434,0.969,0.969  c0,0.535-0.435,0.969-0.969,0.969H1.932v34.885h58.121V7.75H33.896c-0.534,0-0.969-0.434-0.969-0.969  c0-0.534,0.435-0.969,0.969-0.969h27.101h0.025c0.534,0,0.969,0.434,0.969,0.969v36.798v0.025c0,0.535-0.435,0.969-0.969,0.969  H0.988H0.963c-0.534,0-0.969-0.434-0.969-0.969V6.807V6.781c0-0.534,0.435-0.969,0.969-0.969H30.026z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M29.058,0.966c0-0.532,0.433-0.964,0.964-0.964  c0.532,0,0.964,0.432,0.964,0.964l0.002,5.812c0,0.532-0.433,0.964-0.964,0.964c-0.532,0-0.964-0.432-0.964-0.964L29.058,0.966z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M29.061,47.461c0-0.532,0.432-0.965,0.964-0.965  c0.532,0,0.965,0.432,0.965,0.965l-0.003,9.691c0,0.532-0.432,0.964-0.964,0.964c-0.532,0-0.964-0.432-0.964-0.964L29.061,47.461z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.529,47.197c0.145-0.514,0.681-0.811,1.195-0.666  c0.513,0.145,0.81,0.681,0.665,1.194l-3.866,13.563c-0.145,0.514-0.681,0.811-1.194,0.666c-0.514-0.145-0.811-0.68-0.666-1.194  L15.529,47.197z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M42.656,47.725c-0.145-0.514,0.152-1.049,0.666-1.194  c0.514-0.145,1.049,0.152,1.194,0.666l3.872,13.563c0.145,0.514-0.152,1.049-0.666,1.194c-0.514,0.145-1.049-0.152-1.194-0.666  L42.656,47.725z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M0.963,48.449c-0.534,0-0.969-0.435-0.969-0.969  c0-0.534,0.435-0.969,0.969-0.969h60.059c0.534,0,0.969,0.435,0.969,0.969c0,0.533-0.435,0.969-0.969,0.969H0.963z"></path>
                        </svg></span></div>
                    <div class="unit-body">
                      <h6 class="offset-top-10">How it Works?</h6><a href="#" class="btn btn-xs btn-default offset-top-30">Learn more</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-3 wow fadeInUp delay-04 duration-1 offset-top-55 offset-md-top-0">
                <div class="thumbnail-features">
                  <div class="unit unit-vertical unit-spacing-sm">
                    <div class="unit-left"><span class="icon">
                        <svg x="0px" y="0px" width="62px" height="62px" viewbox="0 0 62 62" class="icon-primary-fill">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.988,21.655c0.972,0,1.907,0.194,2.763,0.546  c0.886,0.365,1.683,0.898,2.344,1.554c1.305,1.295,2.114,3.089,2.114,5.069c0,0.965-0.195,1.892-0.55,2.742l-0.021,0.046  c-0.368,0.863-0.896,1.64-1.544,2.282c-0.659,0.653-1.458,1.186-2.346,1.551v0.001c-0.855,0.352-1.79,0.546-2.762,0.546  c-0.972,0-1.906-0.194-2.762-0.546l-0.047-0.02c-0.87-0.366-1.651-0.891-2.298-1.533c-1.306-1.296-2.115-3.09-2.115-5.07  c0-0.965,0.196-1.892,0.55-2.741l0.021-0.046c0.368-0.866,0.899-1.639,1.545-2.281c0.658-0.652,1.455-1.187,2.344-1.552v-0.001  C19.081,21.85,20.015,21.655,20.988,21.655L20.988,21.655z M23.009,23.972c-0.616-0.253-1.3-0.394-2.022-0.394  c-0.722,0-1.404,0.141-2.021,0.394v-0.001l-0.003,0.001c-0.638,0.262-1.221,0.656-1.712,1.143c-0.478,0.475-0.868,1.038-1.132,1.653  l-0.02,0.05c-0.255,0.612-0.397,1.289-0.397,2.006c0,1.449,0.592,2.761,1.548,3.71c0.479,0.475,1.045,0.86,1.665,1.123l0.05,0.019  c0.616,0.253,1.299,0.394,2.021,0.394c0.722,0,1.404-0.14,2.021-0.394v0.001l0.003-0.001c0.638-0.262,1.221-0.654,1.713-1.142  c0.479-0.476,0.867-1.039,1.131-1.654l0.019-0.05c0.255-0.612,0.397-1.29,0.397-2.006c0-1.449-0.593-2.761-1.547-3.709  C24.234,24.629,23.651,24.237,23.009,23.972z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M21.956,37.514c0,0.53-0.435,0.962-0.969,0.962  c-0.534,0-0.969-0.432-0.969-0.962v-2.483c0-0.53,0.435-0.962,0.969-0.962c0.534,0,0.969,0.431,0.969,0.962V37.514z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M48.502,27.863c0.534,0,0.969,0.431,0.969,0.961  c0,0.53-0.434,0.961-0.969,0.961H35.995c-0.534,0-0.969-0.431-0.969-0.961c0-0.53,0.435-0.961,0.969-0.961H48.502z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M48.502,21.655c0.534,0,0.969,0.432,0.969,0.962  c0,0.531-0.434,0.962-0.969,0.962H35.995c-0.534,0-0.969-0.431-0.969-0.962c0-0.53,0.435-0.962,0.969-0.962H48.502z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M48.502,34.07c0.534,0,0.969,0.431,0.969,0.962  c0,0.53-0.434,0.961-0.969,0.961H35.995c-0.534,0-0.969-0.431-0.969-0.961c0-0.53,0.435-0.962,0.969-0.962H48.502z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.988,25.38c0.958,0,1.827,0.387,2.454,1.009l0.064,0.07  c0.589,0.616,0.952,1.451,0.952,2.365c0,0.947-0.39,1.808-1.019,2.433l0.002,0.002c-0.627,0.622-1.496,1.009-2.454,1.009  c-0.958,0-1.827-0.387-2.454-1.009c-0.627-0.622-1.016-1.484-1.016-2.435c0-0.947,0.389-1.808,1.016-2.432l0.004-0.005  C19.166,25.766,20.034,25.38,20.988,25.38L20.988,25.38z M22.072,27.749c-0.277-0.275-0.661-0.446-1.084-0.446  c-0.424,0-0.808,0.169-1.084,0.44l-0.005,0.005c-0.273,0.275-0.444,0.655-0.444,1.076c0,0.42,0.173,0.801,0.448,1.075  c0.277,0.275,0.661,0.446,1.084,0.446c0.423,0,0.807-0.171,1.084-0.446l0.002,0.003l0.002-0.003  c0.275-0.271,0.445-0.652,0.445-1.075c0-0.402-0.154-0.766-0.405-1.034L22.072,27.749L22.072,27.749z M23.506,26.46l-0.064,1.29  C23.796,27.397,23.818,26.836,23.506,26.46z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M8.481,52.072c0.534,0,0.969,0.431,0.969,0.961  c0,0.53-0.435,0.962-0.969,0.962h-2.5c-0.534,0-0.969-0.431-0.969-0.962c0-0.53,0.435-0.961,0.969-0.961H8.481z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M56.005,52.072c0.534,0,0.969,0.431,0.969,0.961  c0,0.53-0.435,0.962-0.969,0.962h-2.502c-0.534,0-0.969-0.431-0.969-0.962c0-0.53,0.434-0.961,0.969-0.961H56.005z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M5.981,8h50.024c1.643,0,3.137,0.668,4.218,1.74  c1.081,1.073,1.753,2.558,1.753,4.187v29.796c0,1.63-0.674,3.112-1.754,4.185c-1.081,1.073-2.574,1.741-4.216,1.741H5.981  c-1.641,0-3.137-0.668-4.218-1.74c-1.08-1.073-1.753-2.555-1.753-4.187V13.927c0-1.625,0.671-3.108,1.753-4.182l0.002-0.002  l0.002-0.002L1.77,9.738C2.852,8.665,4.344,8,5.981,8L5.981,8z M56.005,9.923H5.981c-1.109,0-2.121,0.451-2.847,1.173L3.129,11.1  c-0.727,0.721-1.181,1.726-1.181,2.827v29.796c0,1.099,0.455,2.101,1.186,2.827c0.731,0.725,1.742,1.177,2.847,1.177h50.024  c1.105,0,2.116-0.453,2.846-1.178c0.731-0.725,1.187-1.729,1.187-2.826V13.927c0-1.098-0.455-2.101-1.186-2.827  C58.122,10.375,57.112,9.923,56.005,9.923z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M56.974,38.756c0,0.53-0.435,0.961-0.969,0.961  c-0.534,0-0.969-0.431-0.969-0.961V14.889H6.949v27.873h49.056c0.534,0,0.969,0.432,0.969,0.962c0,0.53-0.435,0.962-0.969,0.962  H6.006H5.981c-0.534,0-0.969-0.432-0.969-0.962V13.952v-0.025c0-0.53,0.435-0.962,0.969-0.962H55.98h0.025  c0.534,0,0.969,0.432,0.969,0.962V38.756z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M21.956,22.617c0,0.531-0.435,0.962-0.969,0.962  c-0.534,0-0.969-0.431-0.969-0.962v-2.482c0-0.53,0.435-0.962,0.969-0.962c0.534,0,0.969,0.431,0.969,0.962V22.617z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M29.742,27.863c0.534,0,0.969,0.431,0.969,0.961  c0,0.53-0.434,0.961-0.969,0.961h-2.502c-0.534,0-0.969-0.431-0.969-0.961c0-0.53,0.434-0.961,0.969-0.961H29.742z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M14.734,27.863c0.534,0,0.969,0.431,0.969,0.961  c0,0.53-0.434,0.961-0.969,0.961h-2.501c-0.534,0-0.968-0.431-0.968-0.961c0-0.53,0.434-0.961,0.968-0.961H14.734z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M27.863,34.289c0.377,0.375,0.377,0.986,0,1.36  c-0.377,0.375-0.993,0.375-1.37,0l-1.768-1.755c-0.377-0.375-0.377-0.986,0-1.36c0.377-0.375,0.993-0.375,1.37,0L27.863,34.289z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M17.251,23.755c0.377,0.375,0.377,0.986,0,1.36  c-0.377,0.375-0.993,0.375-1.37,0l-1.769-1.756c-0.377-0.375-0.377-0.985,0-1.36c0.377-0.375,0.993-0.375,1.37,0L17.251,23.755z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.478,35.649c-0.377,0.372-0.99,0.37-1.365-0.005  c-0.375-0.374-0.373-0.983,0.005-1.355l1.769-1.755c0.377-0.373,0.99-0.37,1.365,0.004c0.375,0.374,0.373,0.983-0.004,1.355  L15.478,35.649z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M26.095,25.115c-0.377,0.375-0.993,0.375-1.37,0  c-0.377-0.374-0.377-0.985,0-1.36L26.494,22c0.377-0.375,0.993-0.375,1.37,0c0.377,0.375,0.377,0.985,0,1.36L26.095,25.115z"></path>
                        </svg></span></div>
                    <div class="unit-body">
                      <h6 class="offset-top-10">Our Warranty <br class="visible-lg-inline"> Policy</h6><a href="#" class="btn btn-xs btn-default offset-top-30">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cell-sm-6 cell-md-3 wow fadeInDown delay-04 duration-1 offset-top-55 offset-md-top-0">
                <div class="thumbnail-features">
                  <!--<div class="unit unit-vertical unit-spacing-sm">
                    <div class="unit-left"><span class="icon">
                        <svg x="0px" y="0px" width="62px" height="62px" viewbox="0 0 62 62" class="icon-primary-fill">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M11.62,59.973c0.534,0,0.969,0.434,0.969,0.967  c0,0.533-0.435,0.966-0.969,0.966c-3.204,0-6.108-1.3-8.212-3.401c-2.102-2.099-3.403-4.998-3.403-8.195  c0-2.993,1.156-5.757,3.06-7.833c1.901-2.07,4.552-3.459,7.542-3.71c0.532-0.043,0.999,0.352,1.043,0.883  c0.044,0.531-0.354,0.997-0.885,1.041c-2.489,0.21-4.696,1.363-6.277,3.085c-1.584,1.727-2.545,4.032-2.545,6.534  c0,2.67,1.085,5.088,2.835,6.838C6.527,58.892,8.946,59.973,11.62,59.973z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M47.447,59.973c0.534,0,0.968,0.434,0.968,0.967  c0,0.533-0.435,0.966-0.968,0.966H11.409c-0.534,0-0.968-0.433-0.968-0.966c0-0.533,0.435-0.967,0.968-0.967H47.447z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M18.281,40.819c0.436,0.303,0.542,0.904,0.238,1.339  c-0.304,0.435-0.906,0.541-1.342,0.237c-0.499-0.348-1.044-0.656-1.62-0.911l-0.076-0.038c-0.537-0.233-1.107-0.419-1.695-0.554  c-0.624-0.143-1.27-0.226-1.919-0.242c-0.624-0.015-1.27,0.032-1.929,0.147c-0.526,0.091-1.026-0.26-1.118-0.785  c-0.092-0.525,0.26-1.025,0.786-1.116c0.766-0.134,1.54-0.187,2.306-0.169c0.788,0.02,1.561,0.118,2.303,0.287  c0.693,0.159,1.376,0.386,2.035,0.671l0.085,0.033C17.01,40.016,17.666,40.387,18.281,40.819z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.885,50.31c0,0.534-0.435,0.967-0.969,0.967  c-0.534,0-0.968-0.434-0.968-0.967c0-0.378,0.04-0.758,0.117-1.136H6.062c0.073-0.368,0.19-0.736,0.341-1.092  c0.148-0.35,0.324-0.679,0.523-0.973c0.209-0.31,0.448-0.599,0.704-0.854c0.256-0.256,0.546-0.494,0.857-0.703  c0.294-0.197,0.623-0.375,0.974-0.522c0.279-0.118,0.565-0.214,0.851-0.285l0.039-0.008c0.284-0.067,0.566-0.117,0.841-0.139  c0.532-0.046,1.002,0.348,1.047,0.879c0.045,0.53-0.349,0.999-0.881,1.045c-0.194,0.017-0.377,0.048-0.546,0.085l-0.038,0.009  c-0.199,0.049-0.391,0.113-0.565,0.186c-0.215,0.09-0.432,0.21-0.64,0.35c-0.199,0.133-0.391,0.293-0.568,0.47  c-0.178,0.178-0.337,0.369-0.471,0.567c-0.14,0.207-0.258,0.424-0.35,0.64c-0.093,0.218-0.168,0.462-0.22,0.722H7.958l-0.001,0.005  C7.91,49.785,7.885,50.04,7.885,50.31z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M47.447,61.906c-0.534,0-0.969-0.433-0.969-0.966  c0-0.533,0.435-0.967,0.969-0.967c0.872,0,1.713-0.085,2.51-0.245c0.83-0.166,1.632-0.416,2.393-0.737  c0.737-0.312,1.45-0.701,2.125-1.155c0.666-0.449,1.295-0.966,1.871-1.541c0.575-0.574,1.094-1.202,1.544-1.867  c0.455-0.675,0.845-1.387,1.157-2.122c0.322-0.759,0.572-1.559,0.739-2.387c0.16-0.795,0.246-1.635,0.246-2.503  c0-0.87-0.086-1.706-0.246-2.499c-0.167-0.83-0.419-1.63-0.739-2.392c-0.312-0.736-0.702-1.449-1.156-2.121  c-0.451-0.667-0.971-1.295-1.545-1.868c-0.574-0.573-1.204-1.092-1.871-1.54c-0.675-0.454-1.389-0.843-2.125-1.155  c-0.761-0.322-1.563-0.572-2.393-0.738c-0.797-0.16-1.638-0.246-2.51-0.246c-0.871,0-1.71,0.086-2.504,0.246  c-0.832,0.167-1.634,0.417-2.398,0.738c-0.738,0.312-1.453,0.7-2.126,1.153c-0.668,0.45-1.298,0.969-1.872,1.542  c-0.378,0.376-0.993,0.376-1.37,0c-0.378-0.377-0.378-0.991,0-1.367c0.654-0.653,1.381-1.249,2.16-1.774  c0.759-0.51,1.584-0.958,2.46-1.327c0.882-0.37,1.808-0.66,2.768-0.853c0.943-0.19,1.908-0.291,2.882-0.291  c0.974,0,1.942,0.101,2.887,0.291c0.96,0.193,1.886,0.482,2.764,0.853c0.875,0.369,1.699,0.817,2.459,1.328  c0.779,0.524,1.505,1.12,2.159,1.773c0.654,0.653,1.252,1.378,1.778,2.155c0.511,0.758,0.96,1.581,1.33,2.454  c0.371,0.88,0.66,1.804,0.854,2.763c0.191,0.942,0.292,1.904,0.292,2.876c0,0.971-0.102,1.937-0.292,2.88  c-0.193,0.957-0.482,1.882-0.854,2.756c-0.371,0.872-0.819,1.697-1.331,2.456c-0.524,0.778-1.123,1.502-1.777,2.154  c-0.654,0.653-1.38,1.25-2.159,1.774c-0.759,0.511-1.584,0.958-2.459,1.328c-0.878,0.371-1.804,0.66-2.764,0.853  C49.389,61.804,48.421,61.906,47.447,61.906z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M45.702,28.711c0.34,0.408,0.284,1.015-0.125,1.354  c-0.408,0.339-1.018,0.283-1.357-0.125c-0.747-0.898-1.578-1.725-2.473-2.466c-0.895-0.74-1.856-1.393-2.866-1.948  c-0.467-0.256-0.638-0.843-0.382-1.31c0.256-0.467,0.845-0.637,1.312-0.381c1.115,0.613,2.177,1.333,3.168,2.153  C43.952,26.794,44.866,27.706,45.702,28.711L45.702,28.711z M16.807,26.196c0.405-0.344,1.013-0.296,1.357,0.108  c0.344,0.404,0.296,1.01-0.108,1.354C16.979,28.573,16,29.62,15.15,30.782c-0.826,1.125-1.531,2.359-2.085,3.683  c-0.204,0.491-0.771,0.723-1.263,0.52c-0.492-0.203-0.725-0.769-0.521-1.259c0.614-1.466,1.394-2.834,2.311-4.083  C14.523,28.372,15.607,27.215,16.807,26.196z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M54.225,47.414c0,0.534-0.435,0.966-0.969,0.966  c-0.534,0-0.969-0.433-0.969-0.966c0-0.342-0.033-0.665-0.092-0.963V46.45l-0.003,0.001c-0.065-0.328-0.161-0.639-0.28-0.919  c-0.117-0.275-0.268-0.55-0.446-0.814l-0.022-0.035c-0.161-0.234-0.356-0.467-0.574-0.685l-0.05-0.055  c-0.205-0.2-0.429-0.382-0.666-0.54c-0.26-0.174-0.537-0.325-0.818-0.445c-0.28-0.119-0.59-0.214-0.92-0.279l-0.073-0.018  c-0.278-0.051-0.579-0.078-0.895-0.078c-0.534,0-0.969-0.434-0.969-0.966s0.435-0.966,0.969-0.966c0.418,0,0.841,0.043,1.259,0.121  l0.087,0.014c0.436,0.087,0.872,0.224,1.29,0.4c0.407,0.172,0.793,0.381,1.146,0.618c0.34,0.227,0.66,0.488,0.949,0.771l0.062,0.056  c0.282,0.282,0.549,0.604,0.79,0.953l0.039,0.053c0.236,0.348,0.446,0.736,0.62,1.147c0.177,0.421,0.314,0.854,0.401,1.289  l-0.003,0.001C54.176,46.52,54.225,46.97,54.225,47.414z"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M32.923,18.291h4.253c0.534,0,0.969,0.434,0.969,0.966  c0,0.177-0.048,0.341-0.13,0.484l-10.4,23.346c-0.215,0.485-0.784,0.704-1.27,0.489c-0.359-0.158-0.573-0.51-0.573-0.878h-0.006  V25.433h-4.252c-0.534,0-0.969-0.433-0.969-0.966c0-0.177,0.048-0.341,0.13-0.484L31.074,0.636c0.215-0.485,0.784-0.704,1.27-0.489  c0.359,0.159,0.573,0.51,0.573,0.879h0.006V18.291L32.923,18.291z M35.692,20.225H31.98h-0.025c-0.533,0-0.968-0.434-0.968-0.967  V5.567L22.999,23.5h3.711h0.025c0.534,0,0.968,0.434,0.968,0.967v13.692L35.692,20.225z"></path>
                        </svg></span></div>
                    <div class="unit-body">
                      <h6 class="offset-top-10">Additional Power for your needs</h6><a href="index.html#" class="btn btn-xs btn-default offset-top-30">Free guide</a>
                    </div>
                  </div>-->
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--quote-->
        <section>
          <!-- RD Parallax-->
          <div data-on="false" data-md-on="true" class="rd-parallax">
            <div data-speed="0.35" data-type="media" data-url="images/parallax-01.jpg" class="rd-parallax-layer"></div>
            <div data-speed="0.15" data-type="html" class="rd-parallax-layer">
              <div class="shell section-75 section-md-bottom-105">
                <div class="range range-xs-center">
                  <div class="cell-sm-10">
                    <div class="jumbotron-custom-variant-1">
                      <h3 class="text-white">
                           To be the significant leader in every segment of our businesses within the country, and competitive globally.
                      </h3>
                    </div><a href="index.php?r=site/contact" class="btn btn-success offset-top-35">GET A QUOTE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- why greentech-->
        <section class="section-65 section-md-top-125 section-md-bottom-183 text-sm-left bg-section-3">
          <div class="shell">
            <div class="range range-xs-center range-md-left">
              <div class="cell-sm-7 cell-md-5">
                <h2><span data-wow-delay=".4s" class="wow fadeInUp duration-1">Why &nbsp;</span><span data-wow-delay=".4s" class="wow fadeInDown duration-1 text-primary">SUNY</span><span data-wow-delay=".4s" class="wow fadeInUp duration-1">PUN?</span></h2>
                <div class="offset-top-35">
                  <p class="h6 font-default text-transform-none text-light text-base view-animate fadeInUpSmall delay-06 duration-1">After years of experience our products, we think the choice is really obvious here!</p>
                </div>
                <div class="offset-top-35 offset-md-top-65 view-animate zoomInSmall delay-1 duration-1"><a href="index.php?r=site/about" class="btn btn-primary-transparent">READ more about us</a></div>
              </div>
            </div>
          </div>
        </section>
        <!--testimonials-->
        <section class="section-65 section-md-bottom-80">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-sm-10 cell-md-8">
                <h3><span>Our customers rely on</span><br class="visible-lg-inline"><span data-wow-delay=".4s" class="text-primary wow fadeInUp duration-1">Products </span><span>&nbsp; of Sunypun.</span></h3>
                <hr class="divider divider-sm">
                <div class="offset-top-40 offset-top-50">
                  <div class="unit unit-vertical unit-spacing-md text-center">
                    <div class="unit-left"><img src="images/home-02-120x120.jpg" alt="" width="120" height="120" class="img-circle"/>
                    </div>
                    <div class="unit-body">
                      <blockquote class="quote-1 offset-top-20">
                        <p>
                          <cite>Hira</cite>
                        </p>
                        <p class="text-italic text-light offset-top--3"><span class="text-lighter">Member</span><span class="text-primary">TeamCAPE</span></p>
                        <p class="offset-top-15 offset-sm-top-45">
                          <q>I am satisfied after purchasing their products, These products are pretty good  and using these products was a great decision!</q>
                        </p>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="hr offset-top-40 offset-sm-top-70">
        <!--    <div class="range range-xs-center">
              <div class="cell-sm-6 cell-md-4 view-animate fadeInLeftSm delay-06">
                <blockquote class="quote-2 text-left">
                  <div class="unit unit-horizontal unit-spacing-sm unit-middle">
                    <div class="unit-left"><img src="images/home-03-70x70.jpg" alt="" width="70" height="70" class="img-circle"/>
                    </div>
                    <div class="unit-body">
                      <p>
                        <cite>Markus Breitbart</cite>
                      </p>
                      <p class="text-italic text-light cite-job"><span class="text-lighter">Freelance  Photographer</span><span class="text-primary"></span></p>
                    </div>
                  </div>
                  <div class="bg-gray-light quote-body offset-top-15 offset-sm-top-30">
                    <p>
                      <q>I have a pretty big house that consumes a sizable amount of energy each month. With the help of these solar panels, I’ve been able to make great cuts to my monthly bills!</q>
                    </p>
                  </div>
                </blockquote>
              </div>
              <div class="cell-sm-6 cell-md-4 view-animate fadeInLeftSm delay-08">
                <blockquote class="quote-2 text-left">
                  <div class="unit unit-horizontal unit-spacing-sm unit-middle">
                    <div class="unit-left"><img src="images/home-04-70x70.jpg" alt="" width="70" height="70" class="img-circle"/>
                    </div>
                    <div class="unit-body">
                      <p>
                        <cite>Thomas Johnson</cite>
                      </p>
                      <p class="text-italic text-light cite-job"><span class="text-lighter">CEO at </span><span class="text-primary">BigInfoDev</span></p>
                    </div>
                  </div>
                  <div class="bg-gray-light quote-body offset-top-15 offset-sm-top-30">
                    <p>
                      <q>Installing a solar panel atop of our office building was a great decision! We’ve managed to cover all our office needs (which houses 50 computers). All thanks to a pair of powerful (320W) solar panels, manufactured by Green Tech!</q>
                    </p>
                  </div>
                </blockquote>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-sm-top-30 offset-md-top-0 view-animate fadeInLeftSm delay-1">
                <blockquote class="quote-2 text-left">
                  <div class="unit unit-horizontal unit-spacing-sm unit-middle">
                    <div class="unit-left"><img src="images/home-05-70x70.jpg" alt="" width="70" height="70" class="img-circle"/>
                    </div>
                    <div class="unit-body">
                      <p>
                        <cite>Jane Nicholson</cite>
                      </p>
                      <p class="text-italic text-light cite-job"><span class="text-lighter">Web Designer</span><span class="text-primary"></span></p>
                    </div>
                  </div>
                  <div class="bg-gray-light quote-body offset-top-15 offset-sm-top-30">
                    <p>
                      <q>Everyone I dealt with at the Green Tech company, from a salesperson and office staff to the installation crew has been incredibly helpful and enthusiastic. I will definitely be recommending GreenTech to all of my friends and colleagues!</q>
                    </p>
                  </div>
                </blockquote>
              </div>
            </div>-->
          </div>
        </section>
        <!-- support-->
  <!--      <section class="section-65 section-md-bottom-90">
          <div class="shell">
            <h3><span class="wow fadeInUp duration-1">More &nbsp;</span><span class="text-primary wow fadeInDown duration-1">Useful</span><span class="wow fadeInUp duration-1">&nbsp; Info</span></h3>
          </div>
        
          <div data-arrows="true" data-loop="true" data-dots="false" data-swipe="false" data-autoplay="true" data-items="1" data-lg-items="3" data-center-mode="true" data-center-padding="0.50" class="slick-slider carousel-center-mode offset-sm-top-25">
            <div class="item">
              <div class="image-thumbnail"><img src="images/carousel-01-570x380.jpg" alt="" width="570" height="380" class="img-responsive"/>
                <div class="caption">
                  <h5><a href="#">Will solar panels look good on my roof?</a></h5>
                  <p>Absolutely! Our set of contemporary designed, low-profile and premium front trim panels will integrate beautifully into your home's or office building's exterior, adding a stylish touch of futurism to it....</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="image-thumbnail"><img src="images/carousel-02-570x380.jpg" alt="" width="570" height="380" class="img-responsive"/>
                <div class="caption">
                  <h5><a href="#">How does solar power work?</a></h5>
                  <p>In short, our panels absorb the sun’s energy, then channelling it through discreetly placed wires to an inverter. There it is being converted to electricity which eventually powers your home or office...</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="image-thumbnail"><img src="images/carousel-01-570x380.jpg" alt="" width="570" height="380" class="img-responsive"/>
                <div class="caption">
                  <h5><a href="#">Will solar panels look good on my roof?</a></h5>
                  <p>Absolutely! Our set of contemporary designed, low-profile and premium front trim panels will integrate beautifully into your home's or office building's exterior, adding a stylish touch of futurism to it....</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="image-thumbnail"><img src="images/carousel-03-570x380.jpg" alt="" width="570" height="380" class="img-responsive"/>
                <div class="caption">
                  <h5><a href="#">What is solar power and how is it used?</a></h5>
                  <p>Solar power is the conversion of sunlight into electricity, either directly using photovoltaics (PV), or indirectly using concentrated solar power. It may serve as an additional source of energy.</p>
                </div>
              </div>
            </div>
          </div>
        </section>-->
            <section class="section-65 section-md-bottom-90">
          <div class="shell">
            <h3><span class="wow fadeInUp duration-1">More &nbsp;</span><span class="text-primary wow fadeInDown duration-1">Useful</span><span class="wow fadeInUp duration-1">&nbsp; Info</span></h3>
          </div>
          <!-- Slick Carousel-->
          <div data-arrows="true" data-loop="true" data-dots="false" data-swipe="false" data-autoplay="true" data-items="1" data-lg-items="3" data-center-mode="true" data-center-padding="0.50" class="slick-slider carousel-center-mode offset-sm-top-25">
            <div class="item">
              <div class="image-thumbnail"><img src="images/DDGS-US-Grains-Council-strives-to-keep-Vietnamese-market-open_strict_xxl.jpg" alt="" width="570" height="380" class="img-responsive"/>
                <div class="caption">
                  <h5><a href="#">Grains</a></h5>
                  <p>* Vietnam says to suspend US DDGS imports from mid-December

* Says is taking step due to worries over beetle contamination<br>

* Vietnam is No.3 importer of US distillers' grain<br>

* Suspension could drag on global prices for the animal feed (Adds comment from Vietnam trader, detail)</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="image-thumbnail"><img src="images/Extra-Neutral-Alcohol (1).jpg" alt="" width="570" height="380" class="img-responsive"/>
                <div class="caption">
                  <h5><a href="#">Extra Neutral alcohol</a></h5>
                  <p>The Extra Neutral alcohol or ENA is a high distillated alcohol without any impurities and others destinated to be used in the high cosmetic industry, perfumeries as well as for the production of alcoholic beverages such as whisky, vodka, gin, cane, liqueurs and alcoholic fruit beverages and aperitifs</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="image-thumbnail"><img src="images/ethanol for cosmetics.jpg" alt="" width="570" height="380" class="img-responsive"/>
                <div class="caption">
                  <h5><a href="#">ethanol for cosmetics</a></h5>
                  <p>Cosmetics are substances or products used to enhance or alter the appearance or fragrance of the body. Many cosmetics are designed for use of applying to the face and hair.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="image-thumbnail"><img src="images/rectified-spirit-smallthumb.jpg" alt="" width="570" height="380" class="img-responsive"/>
                <div class="caption">
                  <h5><a href="#">Rectified spirit</a></h5>
                  <p>Rectified spirit, also known as neutral spirits, rectified alcohol, or ethyl alcohol of agricultural origin is highly concentrated ethanol which has been purified by means of repeated distillation, a process that is called rectification</p>
                </div>
              </div>
            </div>
          </div>
        </section>