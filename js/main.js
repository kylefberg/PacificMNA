$(function() {
// navigation for the elevator function with links
  var homeNav = document.getElementById("nav-home");
  var projectsNav = document.getElementById("nav-projects");
  var aboutNav = document.getElementById("nav-about");
  var contactNav = document.getElementById("nav-contact");

  new Elevator({
    element: homeNav,
    targetElement: document.querySelector('#home'),
  });

  new Elevator({
    element: projectsNav,
    targetElement: document.querySelector('#projects'),
  });

  new Elevator({
    element: aboutNav,
    targetElement: document.querySelector('#about'),
  });

  new Elevator({
    element: contactNav,
    targetElement: document.querySelector('#contact'),
  });
});



