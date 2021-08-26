window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 60) {
    document.getElementById("navbar").style.top = "0";
  } else {
  }
}