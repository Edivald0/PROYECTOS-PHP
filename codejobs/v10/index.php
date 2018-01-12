<!DOCTYPE html>
<html>
<head>
	<title>Dependency Injection</title>
</head>
<body>
	<center>
		<header>
			<h1>Dependency Injection</h1>
		</header>
	</center>
	<section>
		<p>Es como si se estubiera inyectando la clase que se va a necesitar a nuestro constructor</p>
		<p>Parecido a trait</p>
	</section>
	<section>
		<center>
			<h2>Ejemplo</h2>
		</center>
		<h4><code>index.php</code></h4>
		<pre>
			<code>
	require 'post.php';
	require 'category.php';

	$post = new Post(new Category);
	$category = new Category();

	echo $post->getAll();
	echo $category->getAll();
	echo $post-><mark>getCategoriesFromPost();</mark>
			</code>
		</pre>
		<h4><code>post.php</code></h4>
		<pre>
			<code>
	class Post
	{
		protected $category;

		//En el constructor se este inyectando la clase category para empezar a usar sus metodos.
		public function __construct ( Category $category )
		{
			$this->category = $category;
		}
		public function getAll()
		{
			return "Todos los POST";
		}
		public function <mark>getCategoriesFromPost()</mark>
		{
			return $this->category-><mark>getAll2();</mark>
		}

	}
			</code>
		</pre>
		<h4><code>category.php</code></h4>
		<pre>
			<code>
	class Category
	{
		
		public function getAll()
		{
			return "Todos las CATEGORIAS";
		}
		public function <mark>getAll2()</mark>
		{
			return "Todos las CATEGORIAS 2";
		}
		
	}
			</code>
		</pre>


	</section>
	<section>
		<?php
			require 'post.php';
			require 'category.php';

			$post = new Post(new Category);
			$category = new Category();

			echo $post->getAll();
			echo "<br><br>";
			echo $category->getAll();
			echo "<br><br>";
			echo $post->getCategoriesFromPost();
		?>
	</section>
</body>
</html>