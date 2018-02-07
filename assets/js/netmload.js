$(document).ready(function() {

  // Switchery
  var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
  $('.js-switch').each(function() {
      new Switchery($(this)[0], $(this).data());
  });

  $.validate({
    lang: 'en',
    modules : 'security'
  });

    $('#idbtn-reject').click(function(){
      $(this).removeClass("btn-outline");
      $('#idbtn-accept').addClass("btn-outline");
      $('.rejectCOL').removeClass('hidden');
      $('.acceptCOL').addClass('hidden');
    });
    $('#idbtn-accept').click(function(){
      $(this).removeClass("btn-outline");
      $('#idbtn-reject').addClass("btn-outline");
      $('.acceptCOL').removeClass('hidden');
      $('.rejectCOL').addClass('hidden');
    });

    $('.passwords').slideUp();
    $('#accemail').change(function(){

        $('#password, #password_confirm').val('');
        $('#accfeedback').val('');

      if ($(this).is(':checked')) {
        $('#accfeedback').prop('required', true);
        $('.passwords').slideUp();
        $('#password, #password_confirm').removeAttr('required');
        $('#accfeedback').parent().parent().slideDown();
      }
      else {
        $('#password, #password_confirm').prop('required', true);
        $('#accfeedback').parent().parent().slideUp();
        $('.passwords').slideDown();
        $('#accfeedback').removeAttr('required');
      }

    });

  $('#rejemail').change(function(){

    if ($(this).is(':checked')) {
      $('#rejfeedback').prop('required', true);
      $('.rejfeedbackform').slideDown();
    }
    else {
      $('.rejfeedbackform').slideUp();
      $('#rejfeedback').removeAttr('required');
    }

  });

  $("#print").click(function() {
      var mode = 'iframe'; //popup
      var close = mode == "popup";
      var options = {
          mode: mode,
          popClose: close
      };
      $("div.printableArea").printArea(options);
  });

  $('#myTable').DataTable( {
      responsive: true,
      "language": {
        "search": "Search for member, business name or city"
      }
  } );

  $('#emTable').DataTable( {
      responsive: true,
      "language": {
        "search": "Search.."
      }
  });

  $('#execTypeForm').ajaxForm({
      dataType:  'json',
      beforeSend: function() {
      },
      success: function(data) {

        if(data.position_name) {
          swal('Oops...', data.position_name, 'error');
        }
        if(data.position) {
          swal('Success', 'You have successfully added : ' + data.position, 'success');


          document.getElementById("execTypeForm").reset();
          $('#myModal').modal('hide');

          var htmlRadio = '<div class="col-xs-3"><div class="checkbox checkbox-primary"><input checked name="ecmt_'+ data.ecmt_id +'" value="1" type="checkbox"><label> '+ data.position +' </label></div></div>';
          $('.positionsRow').append(htmlRadio);
        }

      }
  });

  $('.loadForm').submit(function(){
    swal({
      imageUrl: "http://www.via-sl.com/wms/img/load-2.gif",
      imageSize: '120x120',
      title: 'Please wait...',
      text: 'Your information is uploading..., it may take a while',
      showConfirmButton: false
    });
  });

  $('.fb-check-box').change(function(){
    swal({
      imageUrl: "http://via-sl.com/wms/img/load-2.gif",
      imageSize: '120x120',
      title: 'Please wait...',
      text: 'Your information is processing..., it may take a while',
      showConfirmButton: false
    });
  });

  setTimeout(function(){
    $('.alert-autohd').animateCss('bounceOut', function() {
      $('.alert-autohd').slideUp();
    });
  }, 2000);

  $('#keyword').keypress(function(event){

    var text = $(this).val();
    var keycode = (event.keyCode ? event.keyCode : event.which);
    var lastChar = text.slice(-1);

    if(keycode == '13'){
        event.preventDefault();
        if(lastChar != ",")
        $(this).val($.trim(text) + ",")
    }
  });


  $('[data-toggle="datepicker"]').datepicker({
    inline : true,
    autoHide : true,
    format: 'yyyy-mm-dd'
  });

  hashOperationLogin();
  $('.select2').select2();

  $(window).on( 'hashchange', function( e ) {
    hashOperationLogin();
  });

  $(".up-img-single").change(function() {

    var size = this.files[0].size;
    var files = this.files;
    var sizeKB = Number((size/1024).toFixed(2));
    var fileNameExt = $(this).val().split('\\').pop();
    var fileExt = fileNameExt.split('.').pop().toLowerCase();
    var fileName = fileNameExt.replace(fileExt, '').slice(0,-1);
    var allowedFiles = ["jpg", "png", "jpeg"];
    var fileExtOk =  $.inArray(fileExt, allowedFiles) >= 0;
    var fileSizeOk = sizeKB <= 4000;
    var processOk = fileExtOk && fileSizeOk;

    if(processOk) {
      if($(this).val().length > 0) {
        readURLForClassSingle(this, $(this));
      }
      else {
        //$('.up-img-tag').attr('src', 'https://placehold.it/400x200/?text=No+Image');
        netmstaDebugDude('profile-img changed but no value');
      }
    }
    else {
      if(!fileSizeOk) {
        swal("Wait !", "The file size is too big !", "error");
      }
      else if(!fileExtOk) {
        swal("Wait !", "The file type is not allowed  !", "error");
      }
      $(this).val('');
    }
  });

  $(".up-img").change(function() {

    var size = this.files[0].size;
    var files = this.files;
    var sizeKB = Number((size/1024).toFixed(2));
    var fileNameExt = $(this).val().split('\\').pop();
    var fileExt = fileNameExt.split('.').pop().toLowerCase();
    var fileName = fileNameExt.replace(fileExt, '').slice(0,-1);
    var allowedFiles = ["jpg", "png", "jpeg"];
    var fileExtOk =  $.inArray(fileExt, allowedFiles) >= 0;
    var fileSizeOk = sizeKB <= 4000;
    var processOk = fileExtOk && fileSizeOk;

    if(processOk) {
      if($(this).val().length > 0) {
        readURLForClass(this, $(this));
      }
      else {
        $('.up-img-tag').attr('src', 'https://placehold.it/400x200/?text=No+Image');
        netmstaDebugDude('profile-img changed but no value');
      }
    }
    else {
      if(!fileSizeOk) {
        swal("Wait !", "The file size is too big !", "error");
      }
      else if(!fileExtOk) {
        swal("Wait !", "The file type is not allowed  !", "error");
      }
      $(this).val('');
    }
  });



  $(".up-img-mul").change(function() {

    var size = this.files[0].size;
    var files = this.files;
    var sizeKB = Number((size/1024).toFixed(2));
    var fileNameExt = $(this).val().split('\\').pop();
    var fileExt = fileNameExt.split('.').pop().toLowerCase();
    var fileName = fileNameExt.replace(fileExt, '').slice(0,-1);
    var allowedFiles = ["jpg", "png", "jpeg"];
    var fileExtOk =  $.inArray(fileExt, allowedFiles) >= 0;
    var fileSizeOk = sizeKB <= 4000;
    var processOk = fileExtOk && fileSizeOk;

    if(processOk) {
      //$(this).parent().find('.ib-title-offile').removeAttr('disabled');
      //$(this).parent().find('.ib-title-offile').focus();
      //$(this).parent().find('.ib-title-offile').val(fileName);

      if($(this).val().length > 0) {
        readURLForClassMul(this, $(this));
      }
      else {
        $(this).closest('.modal-body').find('.up-img-tag').attr('src', 'https://placehold.it/400x200/?text=No+Image+Selected');
      }

    }
    else {
      if(!fileSizeOk) {
        swal("Wait !", "The file size is too big !", "error");
      }
      else if(!fileExtOk) {
        swal("Wait !", "The file type is not allowed  !", "error");
      }
      $(this).val('');
    }


  });



  // $('#hpMsgForm').ajaxForm({
  //     dataType:  'json',
  //     beforeSend: function() {
  //
  //     },
  //     success: function(data) {
  //       if(data.u_status == 1) {
  //         swal({
  //           position: 'top-right',
  //           type: 'success',
  //           title: 'Your work has been saved',
  //           showConfirmButton: false,
  //           timer: 1000
  //         });
  //       }
  //       else {
  //         swal('Oops...', data.u_msgs, 'error')
  //       }
  //     },
  //     complete: function(xhr, msg, el) {  }
  // });
  //
  // var hash = window.location.hash;
  // hash && $('ul.nav a[href="' + hash + '"]').tab('show');
  //
  // $('.nav-tabs a').click(function (e) {
  //   $(this).tab('show');
  //   var scrollmem = $('body').scrollTop() || $('html').scrollTop();
  //   window.location.hash = this.hash;
  //   $('html,body').scrollTop(scrollmem);
  // });
  //
  // if(window.location.hash) {
  //   var url = window.location.href;
  //   var activeTab = url.substring(url.indexOf("#") + 1);
  //   $(".tab-pane").removeClass("active in");
  //   $("#" + activeTab).addClass("active in");
  // }
  //
  // // external js: isotope.pkgd.js, imagesloaded.pkgd.js
  //
  // // external js: isotope.pkgd.js
  //
  // /*$('.fbVisibleForm').ajaxForm({
  //     dataType:  'json',
  //     beforeSend: function() {
  //     },
  //     success: function(data) {
  //       //alert('');
  //     }
  // });*/
  //
  // $('.editHeaderForm').ajaxForm({
  //     dataType:  'json',
  //     beforeSend: function(arr, $form, options){
  //
  //       $('.slider-prog').parent().removeClass('hidden');
  //       $('.slider-prog').css('width','0%');
  //
  //
  //     },
  //     uploadProgress: function(event, position, total, percentComplete) {
  //         $('.slider-prog').css('width', percentComplete + '%');
  //         $('.slider-prog').text('Uploading - ' + percentComplete + '%');
  //     },
  //     success: function(data, statusText, xhr,  form) {
  //         $('.slider-prog').parent().addClass('hidden');
  //         if(data.u_status == 1) {
  //           //$(".sliderForm")[0].reset();
  //           //$("#profile-img-tag").addClass('hidden');
  //           //$("").modal('hide');
  //           swal({
  //             title: 'Success',
  //             text: "Successfully Uploaded",
  //             type: 'success',
  //             showCancelButton: false,
  //             confirmButtonText: 'Reload Page'
  //           }).then((result) => {
  //             if (result.value) {
  //               location.reload();
  //             }
  //           })
  //
  //         }
  //         else {
  //           swal('Error', data.u_msgs, 'error');
  //         }
  //         //$('.slider-prog').html('');
  //     },
  //     complete: function(xhr, data) {
  //         //$('#upFormProgress').text('Upload successfully completed');
  //         //$('.slider-prog').append(data.u_msgs);
  //         console.log(xhr.responseText);
  //     }
  // });
  //
  // $('.sliderFormNew').ajaxForm({
  //     dataType:  'json',
  //     beforeSend: function() {
  //
  //         $('.slider-prog').parent().removeClass('hidden');
  //         $('.slider-prog').css('width','0%');
  //     },
  //     uploadProgress: function(event, position, total, percentComplete) {
  //         $('.slider-prog').css('width', percentComplete + '%');
  //         $('.slider-prog').text('Uploading - ' + percentComplete + '%');
  //     },
  //     success: function(data) {
  //         $('.slider-prog').parent().addClass('hidden');
  //         if(data.u_status == 1) {
  //           //$(".sliderForm")[0].reset();
  //           //$("#profile-img-tag").addClass('hidden');
  //           $("#newHeaderImageModal").modal('hide');
  //           swal({
  //             title: 'Success',
  //             text: "Successfully Uploaded",
  //             type: 'success',
  //             showCancelButton: false,
  //             confirmButtonText: 'Reload Page'
  //           }).then((result) => {
  //             if (result.value) {
  //               location.reload();
  //             }
  //           })
  //
  //         }
  //         else {
  //           swal('Error', data.u_msgs, 'error');
  //         }
  //         //$('.slider-prog').html('');
  //     },
  //     complete: function(xhr, data) {
  //         //$('#upFormProgress').text('Upload successfully completed');
  //         //$('.slider-prog').append(data.u_msgs);
  //     }
  // });
  //
  //
  // $(".fbVisibleForm").change(function() {
  //   $(this).closest(".fbVisibleForm").submit();
  // });
  //
  //
  // // init Isotope
  // var $grid = $('.grid').isotope({
  //   // options
  // });
  // // filter items on button click
  // $('.filter-button-group').on( 'click', 'button', function() {
  //   var filterValue = $(this).attr('data-filter');
  //   $grid.isotope({ filter: filterValue });
  // });
  //
  //
  // /*$('.reorder_link').on('click',function(){
  //     $("div.reorder-photos-list").sortable({
  //       tolerance: 'pointer',
  //       start: function(event, ui) {
  //
  //          },
  //        change: function(event, ui) {
  //            /*var start_pos = ui.item.data('start_pos');
  //            var index = ui.placeholder.index();
  //            console.log('Change ' + start_pos);*/
  //
  //        //},
  //        //update: function(event, ui) {
  //
  //          //alert(ui.placeholder.index());
  //          //var start_pos = ui.item.index();
  //          //console.log('Update ' + start_pos);
  //
  //          //var id = $(ui.item).attr('cur-id');
  //          //var cp = $(ui.item).attr('cur-pos', start_pos+1);
  //
  //          /*$.get("http://localhost/admin/staff/ajax_order/"+id+"/"+$(ui.item).attr('cur-pos'), function(data, status){
  //                  alert("Data: " + data + "\nStatus: " + status);
  //          });
  //
  //          //$(ui.item).addClass('animated bounceIn');
  //
  //          console.log(ui.sender);
  //
  //          console.log("ID " + $(ui.item).attr('cur-id') + "Pos " + $(ui.item).attr('cur-pos'));
  //
  //        }
  //
  //
  //      });
  // });*/
  //
  // /*$('.form-prayers').ajaxForm({
  //     dataType:  'json',
  //     beforeSend: function() {
  //
  //     },
  //     success: function(data) {
  //
  //       if(data.status.code == 1) {
  //         swal('Success', 'OK', 'success');
  //       }
  //       else {
  //         swal('Oops...', data.status.validation, 'error')
  //       }
  //     }
  // });*/
  //
  // //$('#dTable').DataTable();
  //
  //
  // //iCheck for checkbox and radio inputs
  // $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
  //   checkboxClass: 'icheckbox_square-blue',
  //   radioClass: 'iradio_minimal-blue'
  // });
  // //Red color scheme for iCheck
  // $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
  //   checkboxClass: 'icheckbox_minimal-red',
  //   radioClass: 'iradio_minimal-red'
  // });
  // //Flat red color scheme for iCheck
  // $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
  //   checkboxClass: 'icheckbox_flat-red',
  //   radioClass: 'iradio_flat-red'
  // });
  // //Flat Green color scheme for iCheck
  // $('input[type="checkbox"].flat-green, input[type="radio"].flat-green').iCheck({
  //   checkboxClass: 'icheckbox_flat-green',
  //   radioClass: 'iradio_flat-green'
  // });
  // //Flat Purple color scheme for iCheck
  // $('input[type="checkbox"].flat-purple, input[type="radio"].flat-purple').iCheck({
  //   checkboxClass: 'icheckbox_flat-purple',
  //   radioClass: 'iradio_flat-purple'
  // });
  // //Flat Orange color scheme for iCheck
  // $('input[type="checkbox"].flat-orange, input[type="radio"].flat-orange').iCheck({
  //   checkboxClass: 'icheckbox_flat-orange',
  //   radioClass: 'iradio_flat-orange'
  // });
  //
  // $('#authorToggleModify').change(function(){
  //   if($(this).prop('checked')) {
  //     if($("#author_position_modify").hasClass('hidden'))
  //     $("#author_position_modify").removeClass('hidden');
  //   }
  //   else {
  //     if(!$("#author_position_modify").hasClass('hidden'))
  //     $("#author_position_modify").addClass('hidden');
  //   }
  // });
  //
  // $('#authorToggle').change(function(){
  //   $("#author_position input").val('');
  //   if($(this).prop('checked')) {
  //     $("#author_position").removeClass('hidden');
  //   }
  //   else {
  //     $("#author_position").addClass('hidden');
  //   }
  // });
  //
  // $('.togglePublication').bootstrapToggle({
  //   on: 'Visible',
  //   off: 'Invisible',
  //   size: 'mini'
  // });
  //
  // $('.togglePublicationInside').bootstrapToggle({
  //   on: 'Visible',
  //   off: 'Invisible',
  //   size: 'small'
  // });
  //
  // $('.togglePublicationHomePage').bootstrapToggle({
  //   on: 'Homepage',
  //   off: 'Not Homepage',
  //   size: 'small'
  // });
  //
  // $('.toggleNewsHomePage').bootstrapToggle({
  //   on: 'Homepage',
  //   off: 'Not Homepage',
  //   size: 'small'
  // });
  //
  // $('.togglePatron').bootstrapToggle({
  //   on: 'Yes',
  //   off: 'No',
  //   size: 'small'
  // });
  //
  // $('.select2-select').select2();
  //
  // $('.form-prayers').ajaxForm({
  //     dataType:  'json',
  //     beforeSend: function() {
  //
  //     },
  //     success: function(data) {
  //       if(data.status.code == 1) {
  //         //swal('Success', 'OK', 'success');
  //         /*$("#prayer_" + data.id).animateCss('bounceOut', function () {
  //           $("#prayer_" + data.id).hide();
  //         });*/
  //         $("#prayer_" + data.id).slideUp();
  //         //swal('Success', '', 'success');
  //         setTimeout(window.location.reload(), 1000);
  //       }
  //       else {
  //         swal('Oops...', data.status.validation, 'error')
  //       }
  //     },
  //     complete: function(xhr, msg, el) {  }
  // });
  //
  // $('.pubVisibleForm').ajaxForm({
  //     dataType:  'json',
  //     beforeSend: function() {
  //     },
  //     success: function(data) {
  //       //alert('');
  //     }
  // });
  //
  // $(".pubVisibleForm").change(function() {
  //   $(this).closest(".pubVisibleForm").submit();
  // });
  //
  // var droppableParent;
  // var autoDropAs;
  //
  // $('.reorder-photos-list .widget-user').draggable({
  //   revert: 'invalid',
  //   revertDuration: 200,
  //   start: function () {
  //     droppableParent = $(this).parent();
  //     droppableParent.addClass('being-dragged');
  //
  //   },
  //   stop: function () {
  //     autoDropAs = droppableParent;
  //     droppableParent.removeClass('being-dragged');
  //   }
  // });
  //
  // $('.reorder-photos-list .col-md-4').droppable({
  //   hoverClass: 'drop-hover',
  //   drop: function (event, ui) {
  //
  //     var draggable = $(ui.draggable[0]),
  //       draggableOffset = draggable.offset(),
  //       container = $(event.target),
  //       containerOffset = container.offset();
  //
  //       //draggable.addClass('animated shake');
  //
  //       setTimeout(function(){
  //         var pos = draggable.parent().index();
  //         var cid = draggable.attr('cid');
  //         var ctype = draggable.attr('ctype');
  //         var posFinal = pos + 1;
  //         var aUrl = "";
  //         var old_user = autoDropAs.find('.widget-user').attr('cid');
  //
  //         //alert("cid : " + cid + " pos : " + posFinal);
  //
  //         //alert(cid + ' ' + old_user);
  //
  //
  //
  //         /*netmstaDebugDude('Before setTimeout');
  //         netmstaDebugDude('Current Staff ID : ' + cid + ' | Position : ' posFinal);
  //         netmstaDebugDude('------------------');
  //         netmstaDebugDude('After setTimeout');
  //         netmstaDebugDude('Current Staff ID : ' + cid + ' | Position : ' posFinal);
  //         netmstaDebugDude('**************************************************************');*/
  //         draggable.find('.overlay').removeClass('hidden');
  //
  //         if(ctype == "staff") { aUrl = "http://localhost/admin/staff/ajax_order/"+cid+"/"+old_user;  }
  //         if(ctype == "patron") { aUrl = "http://localhost/admin/patron/ajax_order/"+cid+"/"+old_user;  }
  //         if(ctype == "homepage_notice") { aUrl = "http://localhost/admin/news/ajax_order/"+cid+"/"+old_user;  }
  //         if(ctype == "homepage_publication") { aUrl = "http://localhost/admin/publications/ajax_order/"+cid+"/"+old_user;  }
  //         if(ctype == "homepage_imgs") { aUrl = "http://localhost/admin/homepage/img_ajxorder/"+cid+"/"+old_user;  }
  //
  //         $.get(aUrl, function(data, status){
  //               //alert("Data: " + data + "\nStatus: " + status);
  //               $(".overlay").addClass('hidden');
  //
  //               if(ctype == 'homepage_publication') {
  //                 $('.PubLClass .widget-user').each(function(index){
  //                   var imgPosNo = index + 1;
  //                   $(this).find('.img-circle').attr('src', 'https://placehold.it/128x128/000000/fffff?text=' + imgPosNo);
  //                 });
  //               }
  //
  //               if(ctype == 'homepage_imgs') {
  //                 //alert(aUrl);
  //                 $('.HMClass .widget-user').each(function(index){
  //                   var imgPosNo = index + 1;
  //                   $(this).find('.img-circle').attr('src', 'https://placehold.it/128x128/000000/fffff?text=' + imgPosNo);
  //                 });
  //               }
  //
  //         });
  //
  //       }, 500);
  //
  //
  //
  //     $('.widget-user', event.target).appendTo(droppableParent).css({opacity: 0}).animate({opacity: 1}, 200);
  //
  //     draggable.appendTo(container).css({left: draggableOffset.left - containerOffset.left, top: draggableOffset.top - containerOffset.top}).animate({left: 0, top: 0}, 200);
  //   }
  // });
  //
  // $('.reorder-photos-list .widget-user').draggable( "disable" );
  // $('.reorder-photos-list .col-md-4').droppable("disable");
  //
  //
  // var t = 2;
  // $(".reorder_link").click(function(){
  //   if (t % 2 === 0) {
  //     $('.reorder-photos-list .widget-user').draggable( "enable" );
  //     $('.reorder-photos-list .col-md-4').droppable("enable");
  //     $('.widget-user-header').css("cursor","move");
  //     $(this).html('<i class="fa fa-check"></i> &nbsp; Close Order');
  //   }
  //   else {
  //     $('.reorder-photos-list .widget-user').draggable( "disable" );
  //     $('.reorder-photos-list .col-md-4').droppable("disable");
  //     $('.widget-user-header').css("cursor","auto");
  //     $(this).html('<i class="fa fa-arrows"></i> &nbsp; Rearrange');
  //   }
  //   t++;
  // });
  //
  //
  //  //- ------------------------------------------------
  //
  //
  //
  // $('.callout-close').addClass('animated bounceIn');
  // setTimeout(function() {
  //   $('.callout-close').addClass('bounceOut');
  //   setTimeout(function() {
  //     $(".callout-close").slideUp();
  //   }, 1000);
  // }, 10000);
  //
  //
  // $('#adminSchBtn').keyup(function(){
  //   filterAdmins();
  // });
  //
  // $('#patronSchBtn').keyup(function(){
  //
  //     var query = $.trim($(this).val()).toLowerCase();
  //     $('div.filterBOX .filterNAME').each(function(){
  //          var $this = $(this);
  //          if($this.text().toLowerCase().indexOf(query) === -1)
  //               //$this.closest('div.filterBOX').removeClass();
  //              $this.closest('div.filterBOX').fadeOut('slow');
  //         else $this.closest('div.filterBOX').fadeIn('slow');
  //     });
  //
  // });
  //
  // filterTableNet("authorTable", "authorsSchBtn");
  //
  // var oHTML145 = $('#adminPasswordFormSub').html();
  // var canSubmit145 = false;
  // $('#adminPasswordForm').ajaxForm({
  //     dataType:  'json',
  //     beforeSend: function() {
  //       if($('#adminPasswordFormNew').val() == $('#adminPasswordFormConf').val()) {
  //           $('#adminPasswordFormSub').html('<i class="fa fa-spin fa-spinner">');
  //           canSubmit145 = true;
  //       }
  //       else {
  //         $('#adminPasswordFormNew').focus();
  //         $('#adminPasswordFormConf').val('');
  //         $('#adminPasswordFormNew').val('');
  //         swal('Oops...', 'Passwords did not match', 'error');
  //       }
  //       return canSubmit145;
  //     },
  //     success: function(data) {
  //       $('#adminPasswordFormSub').html(oHTML145);
  //       if(data.status.code == 1) {
  //         swal('Success', 'OK', 'success');
  //         $('#adminPasswordFormNew').val('');
  //         $('#adminPasswordFormConf').val('');
  //
  //         $('#adminPasswordFormNew').hide();
  //         $('#adminPasswordFormSub').hide();
  //         $('#adminPasswordFormConf').hide();
  //         $('#adminPasswordFormLab').hide();
  //         $('#adminPasswordFormBtn').show();
  //       }
  //       else {
  //         $('#adminPasswordFormNew').focus();
  //         $('#adminPasswordFormConf').val('');
  //         $('#adminPasswordFormNew').val('');
  //         swal('Oops...', data.status.validation, 'error')
  //       }
  //     }
  // });
  //
  // $('#adminPasswordFormNew').hide();
  // $('#adminPasswordFormSub').hide();
  // $('#adminPasswordFormConf').hide();
  // $('#adminPasswordFormLab').hide();
  //
  // $('#adminPasswordFormBtn').click(function(){
  //
  //   $('#adminPasswordFormBtn').hide();
  //   $('#adminPasswordFormSub').show();
  //   $('#adminPasswordFormLab').show();
  //   $('#adminPasswordFormConf').show();
  //   $('#adminPasswordFormNew').show();
  //   $('#adminPasswordFormNew').focus();
  // });
  //
  // $(document).on('click', 'a', function (e) {
  //   if(window.location == $(this).attr('href')) {
  //     e.preventDefault();
  //   }
  // });
  //
  // $("#profile-img").change(function(){
  //   if($(this).val().length > 0) {
  //     $('#profile-img-tag').removeClass('hidden');
  //     readURL(this);
  //     netmstaDebugDude('profile-img changed value = ' + $(this).val());
  //   }
  //   else {
  //     $('#profile-img-tag').addClass('hidden');
  //     netmstaDebugDude('profile-img changed but no value');
  //   }
  // });
  //
  // $(".profile-img").change(function(){
  //   if($(this).val().length > 0) {
  //     readURLForClass(this, $(this));
  //   }
  //   else {
  //     netmstaDebugDude('profile-img changed but no value');
  //   }
  // });
  //
  // $("#testi-img").change(function(){
  //   if($(this).val().length > 0) {
  //     $('#testi-img-src').removeClass('hidden');
  //     if (this.files && this.files[0]) {
  //         var reader = new FileReader();
  //         reader.onload = function (e) {
  //             $('#testi-img-src').attr('src', e.target.result);
  //         }
  //         reader.readAsDataURL(this.files[0]);
  //     }
  //     netmstaDebugDude('testi-img-src changed value = ' + $(this).val());
  //   }
  //   else {
  //     $('#testi-img-src').addClass('hidden');
  //     netmstaDebugDude('testi-img-src changed but no value');
  //   }
  // });
  //
  //
  // $.fn.extend({
  //     animateCss: function (animationName, callback) {
  //         var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
  //         this.addClass('animated ' + animationName).one(animationEnd, function() {
  //             $(this).removeClass('animated ' + animationName);
  //             if (callback) {
  //               callback();
  //             }
  //         });
  //         return this;
  //     }
  // });

});
