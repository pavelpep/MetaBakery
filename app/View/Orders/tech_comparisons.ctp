<!-- File: /app/View/Orders/lift_comparison.ctp -->
<h1> How does CakePHP match up against... </h1>
<div class ='comparison_label'>
	<h1>
		Lift
   	</h1>
	<div class='tech_comparison'>
		<p>
		Lift is an alternative web framework to CakePHP utilizing the scala language over PHP.  There are many benefits to using Scala over most web application frameworks due to Scala language. Scala was built for scalability in mind and is regarded by some as the next evolution of Java.  This scalability is proven through its use of thread safety and concurrency controls allowing Scala to fundamentally have a place in the web application domain. By borrowing characteristics from functional and object oriented programming it is able to scale better on multi core servers while still providing the code available through Java.
		</P>
		<p>
		CakePHP like many well used technologies has the strength of time and usage on its side. With PHP being a staple in web development languages, a large percent of developers are able to work with PHP and start working with CakePHP on day 1. This is in contrast to Lift, which uses a less well known language, Scala. In addition to a majority of developers knowing PHP over Scala, CakePHP is also well documented and has a large community base of support.
		 A large community of support is generally reflective of the technologies overall saturation in the web community and is directly proportional to the number of expects able to help out in forums. </p>
		 <p>
		Regardless of the overall marketshare, the sheer strength and code support through Java of Scala is rapidly gaining it support in new startups and agile enterprise level companies. Lift has many modules targeted towards important web 2.0 fundamentals such as Ajax and Comet. In addition to these additional modules, Lift has support for a number of popular large-scale databases such as MongoDB which has made it a popular choice amongst popular companies such as Foursquare.
		</p>
	</div>
</div>

<?php echo $this->Html->link('Back', array('controller' => 'orders', 'action' => 'index')); ?>