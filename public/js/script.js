// banner slider
var slideImg = document.getElementById("slideImg");

var images = new Array(
  "./public/images/1.jpg",
  "./public/images/2.jpg",
  "./public/images/3.jpg",
  "./public/images/4.jpg"
);

var len = images.length;
var i = 0;
 function slider(){
   if(i > len-1){
     i = 0;
   }
   slideImg.src = images[i];
   i++;
   setTimeout('slider()',3000);
 }
// banner slider close
var owl=$('.team-carousel');
owl.owlCarousel({
  items:4,
  margin:0,

  loop:true,
  autoplay:true,
  smartSpeed:500,

  //nav:false,
  //navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],

  dots:false,
  autoplayHoverPause:true,

  responsiveClass:true,
    responsive:{
      0:{
        items:1
      },
      640:{
        items:2
      },
      768:{
        items:3
      },
      992:{
        items:4
      }
    }


});


// filterSelection("all")
// function filterSelection(c) {
//   var x, i;
//   x = document.getElementsByClassName("filterDiv");
//   if (c == "all") c = "";
//   for (i = 0; i < x.length; i++) {
//     w3RemoveClass(x[i], "show");
//     if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
//   }
// }
//
// function w3AddClass(element, name) {
//   var i, arr1, arr2;
//   arr1 = element.className.split(" ");
//   arr2 = name.split(" ");
//   for (i = 0; i < arr2.length; i++) {
//     if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
//   }
// }
//
// function w3RemoveClass(element, name) {
//   var i, arr1, arr2;
//   arr1 = element.className.split(" ");
//   arr2 = name.split(" ");
//   for (i = 0; i < arr2.length; i++) {
//     while (arr1.indexOf(arr2[i]) > -1) {
//       arr1.splice(arr1.indexOf(arr2[i]), 1);
//     }
//   }
//   element.className = arr1.join(" ");
// }
//
// // Add active class to the current button (highlight it)
// var btnContainer = document.getElementById("myBtnContainer");
// var btns = btnContainer.getElementsByClassName("btn");
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function(){
//     var current = document.getElementsByClassName("active");
//     current[0].className = current[0].className.replace(" active", "");
//     this.className += " active";
//   });
// }
