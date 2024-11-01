   <!-- search area start -->
   <div class="search-popup">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="search-wrapper">
                  <div class="search-top d-flex justify-content-between align-items-center">
                     <div class="search-logo">
                        <?php header_search_logo(); ?>
                     </div>
                     <div class="search-close">
                        <button type="button" class="search-close-btn search-close-btn">
                           <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                              <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </div>
                  </div>
                  <div class="search-form">
                     <form action="/" method="get">
                        <div class="search-input">
                           <input class="search-input-field" name="s" value="<?php the_search_query(); ?>" type="text" placeholder="<?php echo esc_attr__('Type here to search...','aidzone'); ?>">
                           <span class="search-focus-border"></span>
                           <button type="submit">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                 <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- search area start -->
