var count = 1;
var temp;

function changeSize(picture) {
  if (count == 1 ) {
    picture.style.zIndex = "1";
    picture.style.width = "300%";
    temp = picture;
    count *= -1;
  } else {
    temp.style.zIndex = "0";
    temp.style.width = "100%";
    count *= -1;
  }
}
