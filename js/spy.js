// Cache selectors
var lastId,
    topMenu = $(".spy"),
    topMenuHeight = topMenu.outerHeight()-15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({
      scrollTop: offsetTop
  }, 1000);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";

   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }
});


$(document).ready(function () {
        //if submit button is clicked
        $('#submit').click(function () {
                $('.error').fadeOut('slow');

                //Get the data from all the fields
                var name = $('input[name=name]');
                var email = $('input[name=email]');
                var emailAddress = $('input[name=email]').val();
                var website = $('input[name=website]');
                var comment = $('textarea[name=comment]');
                var anti42 = $('input[name=anti42]');
                function isValidEmailAddress(emailAddress) {
                        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
                        return pattern.test(emailAddress);
                };
                //Simple validation to make sure user entered something
                //If error found, add highlight class to the text field
                if (name.val() == '') {
                        name.addClass('highlight');
                        $('.error').replaceWith('<div class="error">Please enter your name!</div>');
                        $('.error').fadeIn('slow');
                        $(name).focus();
                        return false;
                } else {
                        name.removeClass('highlight');
                        $('.error').hide();
                }

                if (email.val() == '') {
                        email.addClass('highlight');
                        $('.error').replaceWith('<div class="error">Please enter an email!</div>');
                        $('.error').fadeIn('slow');
                        $(email).focus();
                        return false;
                } else if (!isValidEmailAddress(emailAddress)) {
                        email.addClass('highlight');
                        $('.error').replaceWith('<div class="error">Please enter a valid email!</div>');
                        $('.error').fadeIn('slow');
                        $(email).focus();
                        return false;
                } else {
                        email.removeClass('highlight');
                        $('.error').hide();
                }

                if (comment.val() == '') {
                        comment.addClass('highlight');
                        $('.error').replaceWith('<div class="error">Please enter a message!</div>');
                        $('.error').fadeIn('slow');
                        $(comment).focus();
                        return false;
                } else {
                        comment.removeClass('highlight');
                        $('.error').hide();
                }

                if (anti42.val() == '') {
                        anti42.addClass('highlight');
                        $('.error').replaceWith('<div class="error">Bad anti-spam answer!</div>');
                        $('.error').fadeIn('slow');
                        $(anti42).focus();
                        return false;
                } else {
                        name.removeClass('highlight');
                        $('.error').hide();
                }

                //organize the data properly
                var data = 'name=' + name.val() + '&email=' + email.val() + '&website='
                        website.val() + '&comment=' + encodeURIComponent(comment.val())
            '&anti42=' + anti42.val();

                //disabled all the text fields
                $('.text').attr('disabled', 'true');

                //show the loading sign
                $('.loading').show();

                //start the ajax
                $.ajax({
                        //this is the php file that processes the data and send mail
                        url : "process.php",
                        //GET method is used
                        type : "GET",
                        //pass the data
                        data : data,
                        //Do not cache the page
                        cache : false,
                        //success
                        success : function (html) {
                                //if process.php returned 1/true (send mail success)
                                if (html == 1) {
                                        //hide the form
                                        $('.form').fadeOut('slow');

                                        //show the success message
                                        $('.done').fadeIn('slow');

                                        //if process.php returned 0/false (send mail failed)
                                } else
                                        //show the errror
                                        $('.error').replaceWith('<div class="error">' + html + '</div>');
                                        $('.error').fadeIn('slow');
                        }
                });

                //cancel the submit button default behaviours
                return false;
        });
});
