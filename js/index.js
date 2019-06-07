/* Anfang Gallerie */

const galleryItem = document.getElementsByClassName("gallery-item");
const lightBoxContainer = document.createElement("div");
const lightBoxContent = document.createElement("div");
const lightBoxImg = document.createElement("img");
const lightBoxPrev = document.createElement("div");
const lightBoxNext = document.createElement("div");

lightBoxContainer.classList.add("lightbox");
lightBoxContent.classList.add("lightbox-content");
lightBoxPrev.classList.add("fa", "fa-angle-left", "lightbox-prev");
lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");

lightBoxContainer.appendChild(lightBoxContent);
lightBoxContent.appendChild(lightBoxImg);
lightBoxContent.appendChild(lightBoxPrev);
lightBoxContent.appendChild(lightBoxNext);

document.body.appendChild(lightBoxContainer);

let index = 1;

function showLightBox(n) {
    if (n > galleryItem.length) {
        index = 1;
    } else if (n < 1) {
        index = galleryItem.length;
    }
    let imageLocation = galleryItem[index-1].children[0].getAttribute("src");
    lightBoxImg.setAttribute("src", imageLocation);
}

function currentImage() {
    lightBoxContainer.style.display = "block";

    let imageIndex = parseInt(this.getAttribute("data-index"));
    showLightBox(index = imageIndex);
}
for (let i = 0; i < galleryItem.length; i++) {
    galleryItem[i].addEventListener("click", currentImage);
}

function slideImage(n) {
    showLightBox(index += n);
}
function prevImage() {
    slideImage(-1);
}
function nextImage() {
    slideImage(1);
}
lightBoxPrev.addEventListener("click", prevImage);
lightBoxNext.addEventListener("click", nextImage);

function closeLightBox() {
    if (this === event.target) {
        lightBoxContainer.style.display = "none";
    }
}
lightBoxContainer.addEventListener("click", closeLightBox);


/* Ende Gallerie */


/* Countdown */
function srvTime() {
  try {
    xmlHttp = new XMLHttpRequest();
  } catch (err1) {
    try {
      xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (err2) {
      try {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (err3) {
        console.warn("AJAX not supported");
      }
    }
  }
  xmlHttp.open("HEAD", window.location.href.toString(), false);
  xmlHttp.setRequestHeader("Content-Type", "text/html");
  xmlHttp.send("");
  return xmlHttp.getResponseHeader("Date");
}

function countDown() {
  console.log("fn countDown");
  var loaded = false;

  function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    if (t < 0) {
      var seconds = 0;
      var minutes = 7;
      var hours = 5;
      var days = 30;
    }
    return {
      total: t,
      days: days,
      hours: hours,
      minutes: minutes,
      seconds: seconds
    };
  }

  function initializeClock(className) {
    var st = srvTime();

    var deadline = new Date(st);
    var clock = document.querySelectorAll(className);

    Array.prototype.forEach.call(clock, function(el, i) {
      var daysSpan = el.querySelector(".js-days");
      var hoursSpan = el.querySelector(".js-hours");
      var minutesSpan = el.querySelector(".js-minutes");
      var secondsSpan = el.querySelector(".js-seconds");

      var dataYear = parseFloat(el.getAttribute("data-year"));
      var dataMonth = parseFloat(el.getAttribute("data-month") - 1);
      var dataDay = parseFloat(el.getAttribute("data-day"));
      var leadingZero = el.getAttribute("data-leading-zero");

      var st = srvTime();

      var deadline = new Date(st);

      if (dataYear) {
        deadline.setYear(dataYear);
      } else {
        console.warn("No Year set");
      }

      deadline.setMonth(6);
      deadline.setDate(5);
      deadline.setHours(30, 5, 5, 0);

      function updateClock() {
        var t = getTimeRemaining(deadline);
        function n(n) {
          if (leadingZero == "true") {
            return n > 9 ? "" + n : "0" + n;
          } else return n;
        }

        if (daysSpan) {
          daysSpan.innerHTML = n(t.days);
        }
        if (hoursSpan) {
          hoursSpan.innerHTML = n(t.hours);
        }
        if (minutesSpan) {
          minutesSpan.innerHTML = n(t.minutes);
        }
        if (secondsSpan) {
          secondsSpan.innerHTML = n(t.seconds);
        }

        loaded = true;
        el.classList.add("loaded");

        if (t.total <= 0) {
          clearInterval(timeinterval);
        }
      }

      updateClock();
      var timeinterval = setInterval(updateClock, 1000);
    });
  }

  initializeClock(".js-countdown");
}
countDown();

/* #### Accordion */

(function($) {
    $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

    $('.accordion a').click(function(j) {
        var dropDown = $(this).closest('li').find('p');

        $(this).closest('.accordion').find('p').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });
})(jQuery);
