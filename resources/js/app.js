/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./components/Example');

//Navbar
var pathname = window.location.pathname;
$(".border border-light rounded mx-2").css('font-size', "18px")
              .removeClass("border border-light rounded mx-3");
switch (pathname) {
  case "/home":
    $("#aHome").addClass("border border-light rounded mx-2");
    $("#aHome").css('font-size', "18px")
    break;
  case "/my-skills":
    $("#aSkills").addClass("border border-light rounded mx-2");
    $("#aSkills").css('font-size', "18px")

    break;
  case "/my-projects":
    $("#aProjects").addClass("border border-light rounded mx-2");
    $("#aProjects").css('font-size', "18px")

    break;
  case "/about":
    $("#aAbout").addClass("border border-light rounded mx-2");
    $("#aAbout").css('font-size', "18px")

    break;
  case "/contact":
    $("#aContact").addClass("border border-light rounded mx-2");
    $("#aContact").css('font-size', "18px")

    break;
  default:

}
// 
// $(document).ready(function(){
//
// });
