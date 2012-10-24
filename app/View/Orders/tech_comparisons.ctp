<!-- File: /app/View/Orders/lift_comparison.ctp -->
<h1> How does CakePHP match up against... </h1>
<div class ='comparison_label'>
	<h1>
		Lift
   	</h1>
   	<h6 class='reveal_text'>Please double-click to reveal comparison </h6>
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

<div class ='comparison_label'>
	<h1>
		Zend Framework
   	</h1>
   	<h6 class='reveal_text'>Please double-click to reveal comparison </h6>
	<div class='tech_comparison'>
		<p>
Zend Framework is an open source framework for developing web applications in PHP.  It is licensed by Open Source Initiative (OSI)-approved New BSD License.  Furthermore, the main sponsor of Zend Framework is Zend Technologies.  Companies like Google, Microsoft, IBM, StrikeIron, and Adobe Systems are also sponsors for developing the framework.  It started on March 2006.</p>
<p>
On the other hand, CakePHP is also an open source, free, rapid development web application framework for PHP.  It is licensed under MIT license.  In addition, it started on April 2005 by Michal Tatarynowicz.  CakePHP is based heavily on the concepts of Ruby on Rails and it was named “cake”.  Furthermore,it uses MVC software design pattern.  Moreover, many blogs and websites use CakePHP.</p>

<p>
Zend Frameworks is modular.  With other applications and frameworks, Zend Framework has puzzle-like building blocks that can be used piece by piece.  Also, it is very adaptable to the needs of the user.  Moreover, Zend Framework is developed to be a a high performing framework in building web applications.  Together with this idea, the framework is also secured.   It has security tools that can be used to make a secure web application.  The Official website also offers a community area, where in developers using this framework can get all the help they need.  Lastly, Zend Framework is also used by different companies in making web applications.</p>

<p>
Using CakePHP, a web application can be built quickly because of the code generation and scaffolding features.  It also uses MVC that will guide users in making their applications.  It has very strict naming and code organizations, while Zend Framework is a bit relaxed yet strict when it comes to using MVC.  Like Zend Framework, CakePHP has security tools that can be used like input validations, Form tampering protection, SQL injection prevention, and many more that will make the application secure.  The website also offers lots of documentations and help for beginners to advanced developers in making their applications successful.</p>
	</div>
</div>

<div class ='comparison_label'>
	<h1>
		Struts
   	</h1>
   	<h6 class='reveal_text'>Please double-click to reveal comparison </h6>
	<div class='tech_comparison'>
		
<p>
		Struts is a web application framework developed by Apache software in 2000. It, unlike cakephp, uses Java to develop web applications, so developers don¡¦t need to spend time learning a new language such as PHP for building website. Without using the Servlet, usually in a JavaServer Page is a mix of Java code and HTML. It could be a big problem for later debugging or maintaining, so Struts adopts MVC, Model-View-Controller, to reduce the complication. CakePHP, also has built-in MVC architecture to force the separation of code and HTML. By doing so, developers can easily perform different views for different clients from the same model.
		</p>
		<p>Both of Struts and CakePHP support common databases ¡V such as MySQL, Oracle and SQLite. They have feature about ORM (Object-Relational Mapping). However, CakePHP is using built-in ORM, Struts only has hibernate ORM. So, Struts requires first-use developer spend a bit longer on configuration. Besides, by entering the table¡¦s name, CakePHP already auto map the columns¡¦ names, and get the correct result. Apache Struts, on the other hand, requires developers map each column to a variable.
		</p>
		<p>Overall, Both CakePHP and Struts have similar functions and feature except they are using different languages. Due to they are open source applications, both have a community that supports each.
		</p>
	</div>
</div>

<div class ='comparison_label'>
	<h1>
		Code Igniter
   	</h1>
   	<h6 class='reveal_text'>Please double-click to reveal comparison </h6>
	<div class='tech_comparison'>

<p>
CodeIgniter is a PHP framework, very similar to CakePHP in its purpose. Both are used to quickly get a web-application up and running. The following is an overview of the similarities and differences between them.</p>

<p>
Both CodeIgniter and CakePHP are best suited for object oriented programming and support the Model View Controller architecture. CakePHP is considered better for its robustness and strictness of conventions; CodeIgniter is pretty loose in that you can call anything from anywhere if you want to. Less learning is necessary for a beginner using CodeIgniter; But an investment in learning CakePHP is more likely to pay off with more powerful and robust applications as an end result. </p>

<p>
The documentation for both CakePHP and CodeIgniter seems to be pretty clear and informative. The main difference being be their table of contents. The CakePHP Cookbook contains a few general topics, with nested subtopics that you have to click on to reveal. The Codeigniter documentation shows a list of general topics as well as all subtopics in one screen. The latter may may make it easier for a newbie to get a quick and precise overview. </p>

<p>
Both frameworks come with everything needed to get a site up and running, however CakePHP seems to include a few extra common libraries in the box. For example, access control and authentication are included with CakePHP, which could save time in coding or looking for off the shelf extensions. </p>
		
	</div>
</div>



<?php echo $this->Html->link('Back', array('controller' => 'orders', 'action' => 'index')); ?>