<?php 
$title = "<title>CIS 233 About Page</title>";
$custom_css = '<link rel="stylesheet" type="text/css" href="resources/css/about.css">';
require('inc/header.php') 
?>
<div class="content">
		<h1 class="title">Technologies Used</h1>
		<p>This page is information on the technologies I used throught the websites for CIS 233</p>
		<p>TIP: If you hover over the images it will display a message :)</p>
		<p>If you're using a touchscreen device without a mouse there may be a problem. Don't panic it will be fixed.</p>
		<div class="container">
			<h4>Languages</h4>
			<div class="card">
				<img src="resources/images/html5.png" alt="htm5 logo">
				<h4 class="tech-name">HTML5</h4>
				<p class="tech-info">HTML is the technology used to add content to a web page.</p>
				<button type="button" class="btn btn-info"><a href="https://www.w3.org/TR/html5/" target="_blank">Learn More</a></button>
			</div>
			<div class="card">
				<img src="resources/images/css3.png" alt="css3 logo">
				<h4 class="tech-name">CSS3</h4>
				<p class="tech-info">CSS is the technology used to add styles to the contents of a web page.</p>
				<button type="button" class="btn btn-info"><a href="https://www.w3.org/TR/CSS/" target="_blank">Learn More</a></button>
			</div>
			<div class="card">
				<img src="resources/images/js.png" alt="javascript logo">
				<h4 class="tech-name">JavaScript</h4>
				<p class="tech-info">I used JavaScript to add more interactivity to the website such as changing the color of items when the mouse hovers over them.</p>
				<button type="button" class="btn btn-info"><a href="http://www.w3schools.com/js/default.asp" target="_blank">Learn More</a></button>
			</div>
			<div class="card">
				<img src="resources/images/php.png" alt="php logo">
				<h4 class="tech-name">PHP</h4>
				<p class="tech-info">PHP is used to add content to a web page dynamically. It is a server side language that allows me to interact with a database.</p>
				<button type="button" class="btn btn-info"><a href="http://php.net" target="_blank">Learn More</a></button>
			</div>
			<h4>Frameworks / Libraries</h4>
			<div class="card">
				<img src="resources/images/laravel.png" alt="laravel logo">
				<h4 class="tech-name">Laravel</h4>
				<p class="tech-info">Laravel is a framework for PHP. I used Laravel for it's security and because I wanted to learn more about it.</p>
				<button type="button" class="btn btn-info"><a href="https://laravel.com" target="_blank">Learn More</a></button>
			</div>
			<div class="card">
				<img src="resources/images/jquery.png" alt="jquery logo">
				<h4 class="tech-name">jQuery</h4>
				<p class="tech-info">jQuery is a JavaScript library that allows the user to write code faster and makes manipulation of the DOM a lot easier and intuitive.</p>
				<button type="button" class="btn btn-info"><a href="http://jquery.com" target="_blank">Learn More</a></button>
			</div>
			<div class="card">
				<img src="resources/images/bootstrap.png" alt="bootstrap logo">
				<h4 class="tech-name">Bootstrap</h4>
				<p class="tech-info">Bootstrap is a CSS library. It has a lot of prewritten code for things like the navigation bar on the pages. It's my library of choice when I want to make a web site in a short amount of time.</p>
				<button type="button" class="btn btn-info"><a href="http://getbootstrap.com" target="_blank">Learn More</a></button>
			</div>
			<h4>Tools</h4>
			<div class="card">
				<img src="resources/images/git.png" alt="git logo">
				<h4 class="tech-name">GIT</h4>
				<p class="tech-info">GIT is a for version control. If you want to be a programmer, you will have to use GIT at some point in your career because it makes working with a team a lot easier.</p>
				<button type="button" class="btn btn-info"><a href="https://git-scm.com" target="_blank">Learn More</a></button>
			</div>
			<div class="card">
				<img src="resources/images/github.png" alt="github logo">
				<h4 class="tech-name">GitHub</h4>
				<p class="tech-info">GitHub is an online repository for your code. You use GIT to interact with it. It holds your code and it's great for open source projects. If you want to see my code for this class just click on this card.</p>
				<button type="button" class="btn btn-info"><a href="https://github.com/alexander-alegre/cis233" target="_blank">Learn More</a></button>
			</div>
			<div class="card">
				<img src="resources/images/iterm.png" alt="iterm logo">
				<h4 class="tech-name">iTerm</h4>
				<p class="tech-info">iTerm is a replacement for terminal the default Mac terminal. I like iTerm because you can have different tabs open at the same time which i can use one to spin up a server and another one to add new files or run composer commands.</p>
				<button type="button" class="btn btn-info"><a href="https://www.iterm2.com/" target="_blank">Learn More</a></button>
			</div>
			<div class="card">
				<img src="resources/images/dyberduck.png" alt="cyberduck logo">
				<h4 class="tech-name">Cyberduck</h4>
				<p class="tech-info">Cyberduck is an FTP software. I used this to upload my files to the server. Cyberduck is made for MAC and supports a wide range of connections such as FTP and SFTP like we are using in class.</p>
				<button type="button" class="btn btn-info"><a href="https://cyberduck.io/?l=en" target="_blank">Learn More</a></button>
			</div>
			<div class="card">
				<img src="resources/images/mamp.png" alt="mamp logo">
				<h4 class="tech-name">MAMP</h4>
				<p class="tech-info">MAMP allows you to spin up an Apache server and MySql server with the click of a button. It also comes with PHPMyAdmin which is great for creating and managing databases. If you are scared of the command line to boot up servers, I highly recommend MAMP.</p>
				<button type="button" class="btn btn-info"><a href="https://www.mamp.info/en/" target="_blank">Learn More</a></button>
			</div>
			<div class="card">
				<img src="resources/images/ps.png" alt="potoshop logo">
				<h4 class="tech-name">Photoshop</h4>
				<p class="tech-info">I used Photoshop to resize and edit photos. I am still learning how to use Photoshop and I try to use it every chance I get to try and get better. With that being said, if you see a terrible image I apologize :)</p>
				<button type="button" class="btn btn-info"><a href="https://www.adobe.com/products/photoshop.html?sdid=KKQIN&mv=search&s_kwcid=AL!3085!3!155836184321!e!!g!!photoshop&ef_id=WCD@KgAAAEpkYkeO:20170127090612:s" target="_blank">Learn More</a></button>
			</div>
			<h4>Database</h4>
			<div class="card">
				<img src="resources/images/mysql.png" alt="mysql logo">
				<h4 class="tech-name">MySQL</h4>
				<p class="tech-info">MySql is a database. I used this one because it works fantastic with PHP and it is very easy to use. </p>
				<button type="button" class="btn btn-info"><a href="https://www.mysql.com/" target="_blank">Learn More</a></button>
			</div>
			<div class="card">
				<img src="resources/images/sequelpro.png" alt="sequel pro logo">
				<h4 class="tech-name">Sequel Pro</h4>
				<p class="tech-info">Sequel Pro is a software used to manage databases. I am not a fan of PHPMyAdmin so this is what I use.</p>
				<button type="button" class="btn btn-info"><a href="https://www.sequelpro.com/" target="_blank">Learn More</a></button>
			</div>
			<h4>Text Editor</h4>
			<div class="card">
				<img src="resources/images/sublime.png" alt="sublime text logo">
				<h4 class="tech-name">Sublime Text</h4>
				<p class="tech-info">Sublime Text is a text editor that supports many languages. I've tried many text editors and I prefer Sublime over any others. It's fast, has a lot of plugins and I love using commands and snippets for faster coding.</p>
				<button type="button" class="btn btn-info"><a href="https://www.sublimetext.com/" target="_blank">Learn More</a></button>
			</div>
			<h4>Operating System</h4>
			<div class="card">
				<img src="resources/images/apple.png" alt="mac logo">
				<h4 class="tech-name">MacBook Pro</h4>
				<p class="tech-info">I am a huge Apple fan. I use an OLD 2011 MacBook Pro that i love! It's super fast since I upgraded the RAM to 16GB and an SSD should be next. </p>
				<button type="button" class="btn btn-info"><a href="http://www.apple.com/mac/" target="_blank"></a></button>
			</div>
		</div>
	</div>


<?php 
$custom_js = '<script src="resources/js/about.js" type="text/javascript"></script>';
require('inc/footer.php') 
?>