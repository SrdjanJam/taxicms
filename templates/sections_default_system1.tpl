<section class="about">
  <div class="container">
		{section name=pom loop=$data.sections_all}
    <div class="row">
      <div class="col-lg-6 itemheight about-home-image" style="background:url({$ROOT_WEB}{$data.sections_all[pom].slika})  center center / cover">
      </div>
			<div class="col-lg-6 itemheight">
			  <div class="about-content ps-5">
			        {$data.sections_all[pom].shorthtml}
              {$data.sections_all[pom].html}
			   </div>
			</div>
		</div>
		{/section}
  </div>
</section>
