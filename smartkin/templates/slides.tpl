<br><br><div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0"></li>
        {foreach $slides as $imagen}
          
            <li data-target="#carousel-example-generic" data-slide-to="0"></li>
          
        {/foreach}
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    
    <div class="item active">
      <img src="./images/images-sys/slide-default.jpg" alt="..." class="img-thumbnail" />
      <div class="carousel-caption">
      </div>
    </div>
  
    
  {foreach $slides as $imagen}
          
    <div class="item">
      <img width="100%" src="./images/{$imagen['img_slide']}" class="img-thumbnail" id="{$slide['id_slide']}"/>
      <div class="carousel-caption">
      </div>
    </div>    
        {/foreach}
  

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div>