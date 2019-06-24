<?php

#This class is used to handle all issues related to "home" Displayings

class HomeDisplayer
{

	public static function ReturnTheTitle(){
		return "Accueil";
	}

	public static function ReturnTheMetaDescription(){
		return "Bienvenue sur kody";
	}

	public static function ReturnTheContent(){
		return "</div><div class='card-content card-panel teal darken-4 center-align white-text'>
	<b><i>KODY APP</i></b>
	</div>


<div class='row'>

	<div class='col s12 m6 l3 hoverable'>
		 <div class='card'>
        <div class='card-image'>
          <img src='libs/pics/home/blessing.jpg'>
          <span class='card-title'>TITLE 1</span>
        </div>
        <div class='card-content grey darken-4 white-text'>
          <p>La page test.php
ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class='card-action'>
          <a href='#' class='btn white-text teal darken-4 hoverable' title='Découvrez'>Button</a>
        </div>
      </div>
	</div>


	<div class='col s12 m6 l3 hoverable'>
		 <div class='card'>
        <div class='card-image'>
          <img src='libs/pics/home/witness.jpg'>
          <span class='card-title'>TITLE 2</span>
        </div>
        <div class='card-content grey darken-4 white-text'>
          <p>La page test.php
ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class='card-action'>
          <a href='#' class='btn white-text teal darken-4 hoverable' title='Découvrez'>Button</a>
        </div>
      </div>
	</div>


	<div class='col s12 m6 l3 hoverable'>
		 <div class='card'>
        <div class='card-image'>
          <img src='libs/pics/home/news.jpg'>
          <span class='card-title'>TITLE 3</span>
        </div>
        <div class='card-content grey darken-4 white-text'>
          <p>La page test.php
ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class='card-action'>
          <a href='#' class='btn white-text teal darken-4 hoverable' title='Découvrez'>BUTTON</a>
        </div>
      </div>
	</div>

	<div class='col s12 m6 l3 hoverable'>
		 <div class='card'>
        <div class='card-image'>
          <img src='libs/pics/home/news.jpg'>
          <span class='card-title'>TITLE 4</span>
        </div>
        <div class='card-content grey darken-4 white-text'>
          <p>La page test.php
ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class='card-action'>
          <a href='#' class='btn white-text teal darken-4 hoverable' title='Découvrez'>BUTTON</a>
        </div>
      </div>
	</div>
	<div class='container'";
	}

	public static function ReturnTheImage(){
		return "</div><img src='libs/pics/home/kody-home-image.JPG' alt='Image accueil de kody' title='Image accueil de kody' id='kody-home-image'/><div class='container'>";
	}
}