<?php
/* Smarty version 4.5.5, created on 2026-03-12 22:32:29
  from 'module:ps_specialsviewstemplateshookps_specials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69b33efd9ee645_99651589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69eca6f7099f96303240f391e6c6743858b25719' => 
    array (
      0 => 'module:ps_specialsviewstemplateshookps_specials.tpl',
      1 => 1750078354,
      2 => 'module',
    ),
    'd406fae3949f13d1323633970369b6224a3219b8' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/components/section-title.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
    '479484f03757e9bc99ab986acb6b6d71172fc289' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/catalog/_partials/productlist.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
    '98437dc18b083b5462418d39da99c609f2c47346' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
    '2c9b6a5b423d8795aa110426efd423a8b892a0bb' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/catalog/_partials/product-flags.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
    '85bd82ee12f29a4d3595fd3ca8f7abe4aa05cb94' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/components/qty-input.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_69b33efd9ee645_99651589 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/hummingbird/modules/ps_specials/views/templates/hook/ps_specials.tpl -->
<section class="sale-products mt-3">
    <div class="container">
        

  <h2 class="h2 section-title">On sale</h2>

        
<div class="products row">
      

  <article
    class="product-miniature js-product-miniature col-12 col-xs-6 col-lg-4 col-xl-3"
    data-id-product="2"
    data-id-product-attribute="9"
  >
    <div class="card">
      <a href="http://localhost:8080/2-9-brown-bear-printed-sweater.html#/1-size-s" class="product-miniature__link">
        
  <ul class="product-flags js-product-flags">
          <li class="badge discount">-20%</li>
          <li class="badge new">New</li>
      </ul>


        
          <div class="product-miniature__image-container thumbnail-container">
                          <picture>
                
                
                <img
                  class="product-miniature__image card-img-top"
                  srcset="
                    http://localhost:8080/21-default_xs/brown-bear-printed-sweater.jpg 120w,
                    http://localhost:8080/21-default_m/brown-bear-printed-sweater.jpg 200w,
                    http://localhost:8080/21-default_md/brown-bear-printed-sweater.jpg 320w,
                    http://localhost:8080/21-product_main/brown-bear-printed-sweater.jpg 720w"
                  sizes="(min-width: 1300px) 320px, (min-width: 768px) 120px, 50vw"
                  src="http://localhost:8080/21-default_md/brown-bear-printed-sweater.jpg"
                  width="320"
                  height="320"
                  loading="lazy"
                  alt="Brown bear printed sweater"
                  title="Brown bear printed sweater"
                  data-full-size-image-url="http://localhost:8080/21-home_default/brown-bear-printed-sweater.jpg"
                >
              </picture>
            
            
              <button class="product-miniature__quickview_touch btn js-quickview" data-link-action="quickview">
                <i class="material-icons">&#xE417;</i>
              </button>
            
          </div>
        
      </a>

      
        <div class="product-miniature__infos card-body">
          
            <div class="product-miniature__quickview">
              <button class="product-miniature__quickview_button btn btn-link js-quickview btn-with-icon" data-link-action="quickview">
                <i class="material-icons" aria-hidden="true">&#xE417;</i>
                Quick view
              </button>
            </div>
          

          <div class="product-miniature__infos__top">
            
              <a href="http://localhost:8080/2-9-brown-bear-printed-sweater.html#/1-size-s"><p class="product-miniature__title">Hummingbird printed sweater</p></a>
            
          </div>

          <div class="product-miniature__infos__bottom">
            
              <div class="product-miniature__variants">
                              </div>
            

            
              
<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- begin /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="2" data-url="http://localhost:8080/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

            

            <div class="product-miniature__prices">
              
                                  

                  <span class="product-miniature__price" aria-label="Price">
                                                              MAD34.46
                                      </span>

                  

                  
                              

              
                                  <div class="product-miniature__discount-price">
                                          

                      <span class="product-miniature__regular-price" aria-label="Regular price">MAD43.08</span>
                                      </div>
                              
            </div>

                          <form action="http://localhost:8080/cart" method="post" class="d-flex flex-wrap flex-md-nowrap gap-3 align-items-center mt-3">
                <input type="hidden" value="2" name="id_product">

                <input type="hidden" name="token" value="05e40820fec557d3b908ee1526dabc07" />

                <div class="quantity-button js-quantity-button w-100 w-sm-auto">
                  

    
<div class="input-group flex-nowrap mb-0">
  <button role="button" aria-label="decrement" class="btn decrement js-decrement-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE15B;</i>
    <i class="material-icons confirmation d-none">&#xE5CD;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>

  <input
          id="quantity_wanted_2"
          value="1"
          min="1"
              class="form-control"
      name="qty"
      aria-label="Quantity"
      type="text"
      inputmode="numeric"
      pattern="[0-9]*"
      value="1"
      min="1"
      />

  <button role="button" aria-label="increment" class="btn increment js-increment-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE145;</i>
    <i class="material-icons confirmation d-none">&#xE5CA;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>
</div>
                </div>

                <button data-button-action="add-to-cart" class="btn btn-primary flex-grow-1 flex-md-grow-0">
                  <i class="material-icons" aria-hidden="true">&#xe854;</i>
                  <span class="visually-hidden">Add to cart</span>
                </button>
              </form>
                      </div>
        </div>
      
    </div>
  </article>

      

  <article
    class="product-miniature js-product-miniature col-12 col-xs-6 col-lg-4 col-xl-3"
    data-id-product="1"
    data-id-product-attribute="1"
  >
    <div class="card">
      <a href="http://localhost:8080/1-1-hummingbird-printed-t-shirt.html#/1-size-s/8-color-white" class="product-miniature__link">
        
  <ul class="product-flags js-product-flags">
          <li class="badge discount">-20%</li>
          <li class="badge new">New</li>
      </ul>


        
          <div class="product-miniature__image-container thumbnail-container">
                          <picture>
                
                
                <img
                  class="product-miniature__image card-img-top"
                  srcset="
                    http://localhost:8080/1-default_xs/hummingbird-printed-t-shirt.jpg 120w,
                    http://localhost:8080/1-default_m/hummingbird-printed-t-shirt.jpg 200w,
                    http://localhost:8080/1-default_md/hummingbird-printed-t-shirt.jpg 320w,
                    http://localhost:8080/1-product_main/hummingbird-printed-t-shirt.jpg 720w"
                  sizes="(min-width: 1300px) 320px, (min-width: 768px) 120px, 50vw"
                  src="http://localhost:8080/1-default_md/hummingbird-printed-t-shirt.jpg"
                  width="320"
                  height="320"
                  loading="lazy"
                  alt="Hummingbird printed t-shirt"
                  title="Hummingbird printed t-shirt"
                  data-full-size-image-url="http://localhost:8080/1-home_default/hummingbird-printed-t-shirt.jpg"
                >
              </picture>
            
            
              <button class="product-miniature__quickview_touch btn js-quickview" data-link-action="quickview">
                <i class="material-icons">&#xE417;</i>
              </button>
            
          </div>
        
      </a>

      
        <div class="product-miniature__infos card-body">
          
            <div class="product-miniature__quickview">
              <button class="product-miniature__quickview_button btn btn-link js-quickview btn-with-icon" data-link-action="quickview">
                <i class="material-icons" aria-hidden="true">&#xE417;</i>
                Quick view
              </button>
            </div>
          

          <div class="product-miniature__infos__top">
            
              <a href="http://localhost:8080/1-1-hummingbird-printed-t-shirt.html#/1-size-s/8-color-white"><p class="product-miniature__title">Hummingbird printed t-shirt</p></a>
            
          </div>

          <div class="product-miniature__infos__bottom">
            
              <div class="product-miniature__variants">
                                  <div class="variant-links">
      <a href="http://localhost:8080/1-3-hummingbird-printed-t-shirt.html#/2-size-m/8-color-white"
       class="color"
       title="White"
       aria-label="White"
       style="background-color: #ffffff"    ></a>
      <a href="http://localhost:8080/1-2-hummingbird-printed-t-shirt.html#/1-size-s/11-color-black"
       class="color"
       title="Black"
       aria-label="Black"
       style="background-color: #434A54"    ></a>
  
  <span class="js-count count"></span>
</div>
                              </div>
            

            
              
<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- begin /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="1" data-url="http://localhost:8080/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

            

            <div class="product-miniature__prices">
              
                                  

                  <span class="product-miniature__price" aria-label="Price">
                                                              MAD22.94
                                      </span>

                  

                  
                              

              
                                  <div class="product-miniature__discount-price">
                                          

                      <span class="product-miniature__regular-price" aria-label="Regular price">MAD28.68</span>
                                      </div>
                              
            </div>

                          <form action="http://localhost:8080/cart" method="post" class="d-flex flex-wrap flex-md-nowrap gap-3 align-items-center mt-3">
                <input type="hidden" value="1" name="id_product">

                <input type="hidden" name="token" value="05e40820fec557d3b908ee1526dabc07" />

                <div class="quantity-button js-quantity-button w-100 w-sm-auto">
                  

    
<div class="input-group flex-nowrap mb-0">
  <button role="button" aria-label="decrement" class="btn decrement js-decrement-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE15B;</i>
    <i class="material-icons confirmation d-none">&#xE5CD;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>

  <input
          id="quantity_wanted_1"
          value="1"
          min="1"
              class="form-control"
      name="qty"
      aria-label="Quantity"
      type="text"
      inputmode="numeric"
      pattern="[0-9]*"
      value="1"
      min="1"
      />

  <button role="button" aria-label="increment" class="btn increment js-increment-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE145;</i>
    <i class="material-icons confirmation d-none">&#xE5CA;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>
</div>
                </div>

                <button data-button-action="add-to-cart" class="btn btn-primary flex-grow-1 flex-md-grow-0">
                  <i class="material-icons" aria-hidden="true">&#xe854;</i>
                  <span class="visually-hidden">Add to cart</span>
                </button>
              </form>
                      </div>
        </div>
      
    </div>
  </article>

  </div>
        <div class="sale-products-footer text-center">
            <a class="all-product-link btn btn-outline-primary" href="http://localhost:8080/prices-drop">
                All sale products<i class="material-icons rtl-flip" aria-hidden="true">&#xE315;</i>
            </a>
        </div>
    </div>
</section>
<!-- end /var/www/html/themes/hummingbird/modules/ps_specials/views/templates/hook/ps_specials.tpl --><?php }
}
