if (!!$.prototype.justifiedGallery) { // if justifiedGallery method is defined
  var options = {
    rowHeight: 140,
    margins: 4,
    lastRow: 'justify'
  };
  $('.article-gallery').justifiedGallery(options);
}

$(document).ready(function () {
  $("#menu > #nav").show();
  $("#menu-icon, #menu-icon-tablet").click(function () {
    if ($('#menu').css('visibility') == 'hidden') {
      $('#menu').css('visibility', 'visible');
      $('#menu-icon, #menu-icon-tablet').addClass('active');

      var topDistance = $("#menu > #nav").offset().top;

      if ($('#menu').css('visibility') != 'hidden' && topDistance < 50) {
        $("#menu > #nav").show();
      } else if ($('#menu').css('visibility') != 'hidden' && topDistance > 100) {
        $("#menu > #nav").hide();
      }
      return false;
    } else {
      $('#menu').css('visibility', 'hidden');
      $('#menu-icon, #menu-icon-tablet').removeClass('active');
      return false;
    }
  });

  /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
  $("#header > #nav > ul > .icon").click(function () {
    $("#header > #nav > ul").toggleClass("responsive");
  });

  if ($("#menu").length) {
    $(window).on('scroll', function () {
      var topDistance = $("#menu > #nav").offset().top;

      if ($('#menu').css('visibility') != 'hidden' && topDistance < 50) {
        $("#menu > #nav").show();
      } else if ($('#menu').css('visibility') != 'hidden' && topDistance > 100) {
        $("#menu > #nav").hide();
      }

      if (!$("#menu-icon").is(":visible") && topDistance < 50) {
        $("#menu-icon-tablet").show();
        $("#top-icon-tablet").hide();
      } else if (!$("#menu-icon").is(":visible") && topDistance > 100) {
        $("#menu-icon-tablet").hide();
        $("#top-icon-tablet").show();
      }
    });
  }

  if ($("#footer-post").length) {
    var lastScrollTop = 0;
    $(window).on('scroll', function () {
      var topDistance = $(window).scrollTop();

      if (topDistance > lastScrollTop) {
        // downscroll code
        $("#footer-post").hide();
      } else {
        // upscroll code
        $("#footer-post").show();
      }
      lastScrollTop = topDistance;

      $("#nav-footer").hide();
      $("#toc-footer").hide();
      $("#share-footer").hide();

      if (topDistance < 50) {
        $("#actions-footer > ul > #top").hide();
        $("#actions-footer > ul > #menu").show();
      } else if (topDistance > 100) {
        $("#actions-footer > ul > #menu").hide();
        $("#actions-footer > ul > #top").show();
      }
    });
  }
});

if ($('.toc').length > 0) {
    var headerEl = 'h2,h3,h4,h5',  //headers 
        content = '.content',//文章容器
        idArr = {};  //标题数组以确定是否增加索引id
    //add #id
 
    $(content).children(headerEl).each(function () {
        //去除空格以及多余标点
        var headerId = $(this).text().replace(/[\s|\~|`|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\_|\+|\=|\||\|\[|\]|\{|\}|\;|\:|\"|\'|\,|\<|\.|\>|\/|\?|\：|\，|\。]/g, '');
 
        headerId = headerId.toLowerCase();
        if (idArr[headerId]) {
            //id已经存在
            $(this).attr('id', headerId + '-' + idArr[headerId]);
            idArr[headerId]++;
        }
        else {
            //id未存在
            idArr[headerId] = 1;
            $(this).attr('id', headerId);
        }
    });
 
    tocbot.init({
        // Where to render the table of contents.
        tocSelector: '.toc',
        // Where to grab the headings to build the table of contents.
        contentSelector: content,
        // Which headings to grab inside of the contentSelector element.
        headingSelector: headerEl,
        scrollSmooth: true,
        scrollSmoothOffset: 0,
        headingsOffset: 100
    });
}
