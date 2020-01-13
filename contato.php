<?php include_once 'header.php' ?>

<style>
  #contato{
    padding-top: 100px;
    background-color: #00558A;
  }

  #contato h2{
    color: #09C7CE;
  }
</style>

  <!--==========================
    Intro Section
  ============================-->
  <section id="contato" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">

        <div class="col-md-12 intro-info order-md-first order-last align-self-start">
          <h2>Como você prefere falar com a gente?</h2>
        </div>


        <!--FORM-->

        <div class="col-md-12">
        <div class="row">
        <div class="col-lg-6">

          <div class="form">
            
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">

                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Mensagem" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <!--<div id="sendmessage">Your message has been sent. Thank you!</div>-->
              <div id="errormessage"></div>

              <div class="text-center"><button class="btn btn-outline-light" type="submit" title="Send Message">Send Message</button></div>
            </form>
          </div>

          </div>
        </div>
      </div>

      <!-- FORM -->
  
      </div>



    </div>
  </section><!-- #intro --> 

  <section id="map">
    <div class="row">
    <div style="overflow:hidden;width: 100%;position: relative;"><iframe width="100%" height="440" src="https://maps.google.com/maps?height=440&amp;hl=en&amp;q=Ed.%20Trend%20Office%20Home%20Residencial+(Forza%20Consultoria)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/it/">https://embedgooglemaps.com/it/</a> & <a href="https://rechargevodafone.co.uk">https://rechargevodafone.co.uk/vodafone-rewards/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
    </div>
  </section>



  <?php include_once 'footer.php'; ?>