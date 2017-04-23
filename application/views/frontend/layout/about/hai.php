<style type="text/css">
	#soup-nav {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 32px;
  z-index: 9002;
  font-size: 64px;
}

.soup-title {
  font-size: 32px;
}

.soup-desc {
  font-size: 16px;
}

html, body {
  width: 100%;
  height: 100%;
  background-color: #EEE;
  color: #111;
  text-align: center;
  font-family: 'Open Sans', sans-serif;
}

#soup-container {
  width: 100%;
  height: 100%;
  min-width: 320px;
  min-height: 480px;
  position: relative;
}

.letters-wrap {
  position: absolute;
  overflow: hidden;
  display: inline-block;
}
.letters-wrap.mutable {
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}
.letters-wrap.mutable .letter {
  position: absolute;
  left: 0;
  top: 0;
  transition: left 2s, top 2s, color 2s;
  color: "#AAA";
}
.letters-wrap.mutable .letter.active {
  color: "#111";
  z-index: 9001;
}
.letters-wrap.position-data {
  top: 50%;
  left: 50%;
  /*opacity: 0.1;*/
  visibility: hidden;
  transform: translate(-50%, -50%);
}

.segment {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.letter {
  /*display: inline-block;*/
}

button {
  z-index: 9001;
  position: relative;
}
</style>

<div id="loader"></div>
  <div id="soup-container">
    <div id="segments">
    </div>
    <div id="soup-nav">
      <span id="soup-prev"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></span>
      <span id="soup-next"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>
    </div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
  /*
   * Main variables
   */
  var content = [{
    title: "Hai! Badriyatul Muawannah.",
    desc: "Sudah semakin dewasa yah, Tepat hari ini bertambah 1 tahun usiamu :D"
  }, {
    title: "Hai! Badriyatul Muawannah.",
    desc: "Dihari ulang tahunmu aku ucapkan dan aku berharap, yang terbaik untukmu."
  }, {
    title: "Happy Birth Day 21th",
    desc: "Kemarian merupakan hari yang sudah berlalu maka kamu tidak perlu mengenangnya. besok adalah masa depan maka kamu perlu pikirkan bagaimana membangun kesuksesanmu.semoga tuhan mewujudkannya, Amin. Ingin sekali aku nikmati setiap tahun kedepan denganmu penuh harapan serta do'a dan sekaligus aku ucapkan selamat ulang tahun, semoga tuhan selalu menjagamu :* amin."
  }, {
    desc: "Aku Hanya Ingin Meperhatikan dan Menjagamu, Rangkai harapanmu dihari ini.. momen yang tidak terlupakan untuk mu sebuah kado menyerupai do'a maaf jika hanya sebuah ucapan yang bisa kuberikan, bukan sebuah materi yang dapat selalu kamu kenang saat kamu gunakan atau teringat saat kamu melihatnya, Mohon maaf hanya sebatas ini.",
    title: [
      "Aku Yang Selalu Kekanak-kanakan", " '----'".split("")
    ]
  }];
  var currentPage = 0;
  //generate content
  for (var i = 0; i < content.length; i++) {
    //split content letters to array
    for (var obj in content[i]) {
      //if string
      if (typeof content[i][obj] === "string") {
        content[i][obj] = content[i][obj].split("");
        continue;
      }
      //if array (grouped text)
      else if (typeof content[i][obj] === "object") {
        var toPush = [];
        for(var j = 0; j < content[i][obj].length; j++) {
          for(var k = 0; k < content[i][obj][j].length; k++) {
            toPush.push(content[i][obj][j][k]);
          }
        }
        content[i][obj] = toPush;
      }
    }
    //set text to 
    $("#segments").append("<div class=\"letters-wrap mutable\"><div class=\"soup-title\"></div><div class=\"soup-desc\"></div></div>");
    setText();
    //clone to data
    $("#segments").append("<div class=\"letters-wrap position-data\"><div class=\"soup-title\"></div><div class=\"soup-desc\"></div></div>");
    setText();
  }
  //initial arrangement
  arrangeCurrentPage();
  scrambleOthers();
  /*
   * Event handlers
   */
  $(window).resize(function() {
    arrangeCurrentPage();
    scrambleOthers();
  });
  $("#soup-prev").hide();
  $("#soup-prev").click(function() {
    $("#soup-next").show();
    currentPage--;
    if (currentPage === 0) {
      $("#soup-prev").hide();
    }
    arrangeCurrentPage();
    scrambleOthers();
  });
  $("#soup-next").click(function() {
    $("#soup-prev").show();
    currentPage++;
    if (currentPage === content.length - 1) {
      $("#soup-next").hide();
    }
    arrangeCurrentPage();
    scrambleOthers();
  });
  /*
   * Functions
   */
  function arrangeCurrentPage() {
    for (var i = 0; i < content[currentPage].title.length; i++) {
      $(".mutable:eq(" + currentPage + ") > .soup-title > .letter").eq(i).css({
        left: $(".position-data:eq(" + currentPage + ") > .soup-title > .letter").eq(i).offset().left + "px",
        top: $(".position-data:eq(" + currentPage + ") > .soup-title > .letter").eq(i).offset().top + "px",
        color: "#111",
        zIndex: 9001
      });
    }
    for (var i = 0; i < content[currentPage].desc.length; i++) {
      $(".mutable:eq(" + currentPage + ") > .soup-desc > .letter").eq(i).css({
        left: $(".position-data:eq(" + currentPage + ") > .soup-desc > .letter").eq(i).offset().left + "px",
        top: $(".position-data:eq(" + currentPage + ") > .soup-desc > .letter").eq(i).offset().top + "px",
        color: "#111",
        zIndex: 9001
      });
    }
  }

  function setText() {
    var j;
    for (j = 0; j < content[i].title.length; j++) {
      $(".soup-title").last().append("<span class=\"letter\">" + content[i].title[j] + "</span>");
    }
    for (j = 0; j < content[i].desc.length; j++) {
      $(".soup-desc").last().append("<span class=\"letter\">" + content[i].desc[j] + "</span>");
    }
  }

  function scrambleOthers() {
    for (var i = 0; i < content.length; i++) {
      //don't scramble currentPage
      if (currentPage === i)
        continue;
      var parts = [
        ["title", ".soup-title"],
        ["desc", ".soup-desc"]
      ];
      //apply to .title h1s and .desc ps
      for (var j = 0; j < parts.length; j++) {
        for (var k = 0; k < content[i][parts[j][0]].length; k++) {
          //define random position on screen
          var randLeft = Math.floor(Math.random() * $(window).width());
          var randTop = Math.floor(Math.random() * $(window).height());
          //defining boundaries
          var offset = $(".position-data").eq(currentPage).offset();
          var bounds = {
            left: offset.left,
            top: offset.top,
            right: $(window).width() - offset.left,
            bottom: $(window).height() - offset.top
          };
          var middleX = bounds.left + $(".position-data").eq(currentPage).width() / 2;
          var middleY = bounds.top + $(".position-data").eq(currentPage).height() / 2;
          //finally, apply all the scrambles
          $(".mutable:eq(" + i + ") > " + parts[j][1] + " > .letter").eq(k).css({
            left: randLeft,
            top: randTop,
            color: "#DDD",
            zIndex: "initial"
          });
        }
      }
    }
  }
});
</script>