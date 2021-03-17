var gallery = {
  hide: function () {
    $("#lbOuter").removeClass("show");
  },
  show: function (img) {
    var clone = img.cloneNode(),
      front = $("#lbInner"),
      back = $("#lbOuter");
    front.html("");
    front.append(clone);
    back.addClass("show");
  },
};

function previewFile(input) {
  var file = $("input[type=file]").get(0).files[0];

  if (file) {
    var reader = new FileReader();

    reader.onload = function () {
      $("#previewImg").attr("src", reader.result);
    };

    reader.readAsDataURL(file);
  }
}
