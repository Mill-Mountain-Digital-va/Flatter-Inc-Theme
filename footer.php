
 
 
 </div> <!-- Close Content -->

 <div id="contact-extra" class="z-index-30">
<div id="contact-container">

    <div id="message-title-container">
       

       <h1>Let's Talk</h1>
       <p>Fill out the form below to speak with someone from our team</p>
       
       </div>

      <div class="form-text">   
       
        <form id="form-grid-container" action="<?php echo admin_url( 'admin-ajax.php' ); ?>" method="post">
            
                 <div id="form-grid-item" class="form-grid-item-1">
                     <input id="input-item" type="text" name="name" placeholder="Name">
                </div>
                <div id="form-grid-item" class="form-grid-item-2">
                    <input id="input-item" type="text" name="jobtype" placeholder="Job">
                    </div>
                <div id="form-grid-item" class="form-grid-item-3">
                   <input id="input-item" type="text" name="theemail" placeholder="Company Email">
                </div>
                <div id="form-grid-item" class="form-grid-item-4">
                    <input id="input-item" type="text" name="phone" placeholder="Phone Number">
                </div>
                <div id="form-grid-item" class="form-grid-item-5">
                    <input id="input-item" type="text" name="business" placeholder="Business"> 
                </div>
                <div id="form-grid-item" class="form-grid-item-6">
                   <textarea placeholder="How Can We Help?" name="message" ></textarea >
                     <?php wp_referer_field(true); ?>
            <input  type="hidden" name="action" value="process_contact_form">

            <input  type="text" name="honeyPot" style="display: none;">
          
<div id="submit-container" >
           
            <br />
            <input  type="submit" name="email_form" value="Let's Talk"/>
            </div>
              
               </div>
            </form>
        
       

 

        <br />
        <br />

</div>
      </div>
    
</div>
 <footer id="footer" role="contentinfo">

 



<a href='https://millmountaindigital.com'> <?php  esc_html_e( 'Designed by Mill Mountain Digital', 'millmountain' ) . '</a>'

?>

   
</footer>

  
   <?php wp_footer(); ?>
   </body> 
</html>
