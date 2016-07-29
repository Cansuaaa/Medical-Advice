</div>
		
		<div class="footer-container">
		
			
		
			<footer class="details">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							
						</div>
						
						<div class="col-sm-4">
							
						</div>
						
						<div class="col-sm-4">
							<h1>Social Profiles</h1>
							<ul class="social-icons">
								<li>
									<a href="#">
										<i class="icon social_twitter"></i>
									</a>
								</li>
								
								<li>
									<a href="#">
										<i class="icon social_facebook"></i>
									</a>
								</li>
								
								<li>
									<a href="#">
										<i class="icon social_instagram"></i>
									</a>
								</li>
								
								<li>
									<a href="#">
										<i class="icon social_dribbble"></i>
									</a>
								</li>
								
								<li>
									<a href="#">
										<i class="icon social_tumblr"></i>
									</a>
								</li>
								
								<li>
									<a href="#">
										<i class="icon social_pinterest"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					
					
				</div>
			</footer>
		</div>
				
        <script src="/js/jquery.min.js"></script>
        <script src="/js/jquery.plugin.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.flexslider-min.js"></script>
        <script src="/js/smooth-scroll.min.js"></script>
        <script src="/js/skrollr.min.js"></script>
        <script src="/js/spectragram.min.js"></script>
        <script src="/js/scrollReveal.min.js"></script>
        <script src="/js/isotope.min.js"></script>
        <script src="/js/twitterFetcher_v10_min.js"></script>
        <script src="/js/lightbox.min.js"></script>
        <script src="/js/jquery.countdown.min.js"></script>
        <script src="/js/scripts.js"></script>
        <script src="/js/bootstrap-editable.js"></script>
        {% for js in javascript %}
            <script src="{{js}}"></script>
        {% endfor %}
        
    </body>
</html>