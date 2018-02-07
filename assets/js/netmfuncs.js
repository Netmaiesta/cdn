var debug = true;

function openPOPEmail(url) {

  window.open(url, "_blank");

  var windowSize = {
      width: 700,
      height: 700,
  };
  var windowLocation = {
      left:  (window.screen.availLeft + (window.screen.availWidth / 2)) - (windowSize.width / 2),
      top: (window.screen.availTop + (window.screen.availHeight / 2)) - (windowSize.height / 2)
  };
  window.open(url, '_blank', 'width=' + windowSize.width + ', height=' + windowSize.height + ', left=' + windowLocation.left + ', top=' + windowLocation.top);

  // window.open(url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=20,left=0,width=700,height=700");
}

$.fn.extend({
    animateCss: function (animationName, callback) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
            if (callback) {
              callback();
            }
        });
        return this;
    }
});

function readURLForClass(input, th) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.up-img-tag').attr('src', e.target.result);
            //th.parent().parent().parent().find('.up-img-tag').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readURLForClassSingle(input, th) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            //$('.up-img-tag').attr('src', e.target.result);
            th.parent().find('.up-img-single-tag').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readURLForClassMul(input, th) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            th.closest('.modal-body').find('.up-img-tag').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function netmstaDebugDude(data = 'Purnodaya', func = function(){}) {
  if(debug) {
    func();
    console.log('%c netmstaDebugDude : ' + data, 'background: #222; color: #bada55; font-size: 12pt');
  }
}

function hashOperationLogin () {
  var hash = window.location.hash;
  if(hash == "#forgot") {
    $('#loginform').slideUp();
    $('#recoverform').slideDown();
  }
  else {
    $('#loginform').slideDown();
    $('#recoverform').slideUp();
  }
}
