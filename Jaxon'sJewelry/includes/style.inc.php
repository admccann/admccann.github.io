<!-- This css style code defines how the page will look	 -->
	<style>/* border-box fix */
	html {
	  box-sizing: border-box;
	}
	*,
	*:before,
	*:after {
	  box-sizing: inherit;
	}

	/* this sets the style for everything in the body of the page, unless overridden */
	body {
	  margin-left: auto;
	  margin-right: auto;
	  font-family: "Open Sans", sans-serif;
	  padding: 0;
	  display: flex;
	  justify-content: center;
	}

	/* This styles the page headers */
	h1 {
	  font-family: "Cardo", serif;
	  text-align: center;
	  font-size: 35px;
      color: #F2E1C2;
      	}

	/* This styles the secondary headers */
	h2 {
	  font-weight: 100;
	  font-family: "Cardo", serif;
	  font-size: 30px;
	  padding-bottom: 20px;
	}
	h2.center {
	  text-align: center;
	}

	h3 {
	  font-family: "Cardo", serif;
	}

	/* this adjusts the line height for all list items  */
	li {
	  line-height: 1.5;
	}

	/* this creates a grid style, applied to the photos the shop now page */
	#product {
	  justify-content: center;
	  padding: 0px;
	  margin: 0px;
	  border: none;
	  display: grid;
	  grid-template-columns: 400px 400px;
	}

	/* this sets the paragraph font size and weight, margin and line height */
	p {
	  margin: 65px;
	  font-weight: lighter;
	  font-size: 20px;
	  line-height: 1.5;
	}

	/* Add padding to all of the .container child elements */
	.container > * {
	  padding: 20px;
	}
	/*!* this centers the text *!*/
	.center {
	  text-align: center;
	}

	/* this is an independent class to change the style */
	.container {
	  color: white;
	  display: flex;
	  flex-wrap: wrap;
	  max-width: 1600px;
	}

	/* the following styles the page overall and creates a flex box style */
	header {
	  background: white;
      height: 350px;
	  flex: 1 0 100%;
	  order: 1;
	}
	main {
	  background: #525050;
	  order: 3;
	  flex: 1 1 1100px;
	}
	nav {
	  background: #BF935E;
	  order: 2;
	  flex: 1 0 50px;
	}

	footer {
	  text-align: center;
	  color: #e2e1e2;
	  background: #242424;
	  flex: 1 0 100%;
	  order: 4;
	}

	/* these style the navigation buttons */
	nav ul li {
	  list-style-type: none;
	  line-height: 35px;
        padding: 2px;

	}

	nav li a {
	  display: block;
      padding: 8px 16px;
	  text-decoration: none;
	  background-color: #F2E1C2;
	  border-style: solid;
	  border-color: #545657;
	  border-width: 0.3px;
	  border-radius: 0.3px;
	  color: #545657;
	  box-sizing: border-box;
	  box-shadow: 3px 3px 3px #545657;
        font-size: 20px;

    	}

	/* this makes bullets in an unordered list square */

	/* mouse over link */
	nav a:hover {
	  color: black;
	  background-color: #F2F2F2;
	}

	/* these are styling for fields,
	buttons and checkbox forms  */
	form {
	  color: #545657;
	  font-family: "Open Sans", sans-serif;
	  width: 70%;
      /*height: 200px;*/
	  margin: auto;
	  padding: 10px;
	  background-color: #F2E1C2;
      font-weight: lighter;
      font-size: 20px;
      line-height: 1.5;
	}

	label,
	select {
	  display: inline-block;
	  margin-top: 10px;
	}

	input {
	  padding: 5px;
	  line-height: 1.5;
	}

	.radio {
	  width: 15px;
	}

	textarea {
	  margin: auto;
	  width: 100%;
	  height: 200px;
	}

	legend {
	  padding-top: 20px;
	}
	 /*this is the independent class .col for the images wrapped in div tags in the gallery page */
	.col {
	  justify-content: center;
	  background-color: white;
	  width: 94%;
	  overflow: hidden;
	  border-style: solid;
	  border-color: #545657;
	  border-width: 0.3px;
	  border-radius: 0.3px;
	  color: #545657;
	  box-sizing: border-box;
	  box-shadow: 3px 3px 3px #545657;
	  margin-bottom: 30px;
	}

	/*-------------------media queries to make page responsive for iphone or smaller--------------------------- */
	@media screen and (max-width: 375px) {
	  figure img {
	    width: 200px;
	    height: 200px;
	  }
	}
		</style>