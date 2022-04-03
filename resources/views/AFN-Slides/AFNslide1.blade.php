<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>reveal.js</title>

		<link rel="stylesheet" href="assets/dist/reset.css">
		<link rel="stylesheet" href="assets/dist/reveal.css">
		<link rel="stylesheet" href="assets/dist/theme/black.css">

		<!-- Theme used for syntax highlighted code -->
		<link rel="stylesheet" href="assets/plugin/highlight/monokai.css">
	</head>
	<body>
		<div class="reveal">
			<div class="slides">
				<section>Slide 1</section>
				<section>Slide 2</section>
				<section>Slide 6</section>
				<section>Slide 3</section>
				<section>Slide 5</section>

			</div>
		</div>

		<script src="assets/dist/reveal.js"></script>
		<script src="assets/plugin/notes/notes.js"></script>
		<script src="assets/plugin/markdown/markdown.js"></script>
		<script src="assets/plugin/highlight/highlight.js"></script>
		<script>
			// More info about initialization & config:
			// - https://revealjs.com/initialization/
			// - https://revealjs.com/config/
			Reveal.initialize({
				hash: true,

				// Learn about plugins: https://revealjs.com/plugins/
				plugins: [ RevealMarkdown, RevealHighlight, RevealNotes ]
			});
		</script>
	</body>
</html>
