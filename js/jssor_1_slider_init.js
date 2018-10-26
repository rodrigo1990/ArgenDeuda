 jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:0,d:400,x:-247,y:103,r:40},{b:400,d:400,x:155,y:43,r:40},{b:800,d:400,x:-136,y:56,r:-40},{b:1200,d:660,x:143,y:56,r:-20},{b:1860,d:240,x:-106,y:42,r:-20}],
              [{b:0,d:800,x:143,y:352,r:-40},{b:800,d:1300,x:-34,y:176}],
              [{b:0,d:2100,x:-14,y:396,r:40}],
              [{b:-1,d:1,r:8},{b:0,d:2100,x:211,y:283,r:82}],
              [{b:0,d:2100,x:-459,y:299,r:360}],
              [{b:0,d:1020,x:-24,y:167,r:90},{b:1020,d:1080,x:199,y:12}],
              [{b:1800,d:300,x:489,y:54}],
              [{b:0,d:2100,x:-73,y:721}],
              [{b:0,d:2100,x:670,y:938}],
              [{b:0,d:2100,x:-523,y:736}],
              [{b:0,d:2100,x:869,y:812}],
              [{b:0,d:2000,x:1792,y:115}],
              [{b:0,d:2000,x:-1600,y:-4}],
              [{b:0,d:2000,x:-9,y:1252}],
              [{b:0,d:1980,x:-170,y:18},{b:1980,d:200,x:176,y:-417}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = window.innerWidth;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };











        