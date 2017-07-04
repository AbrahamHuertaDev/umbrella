<!-- * DOZ - Creative 404 Pages
*
* This is a premium product available exclusively at this address http://themeforest.net/user/madeon08/portfolio
*
* The demo files are minified/crypted for copyright reasons, you will find them, expanded, commented and coded accurately in your download pack.
*
* Thanks for your support!
*
* -->
<!DOCTYPE html>
<html lang="en-us" class="no-js">

<head>
    <meta charset="utf-8">
    <title>404 - FLAT</title>
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Madeon08">
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
    html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section,main{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font-family:Montserrat,"Helvetica Neue","Lucida Grande",Arial,Verdana,sans-serif;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;-webkit-overflow-scrolling:touch;overflow:auto;position:static;z-index:-2;padding:0;margin:0;background:#421dff}p,a{margin:10px 0;font-size:18px;color:white}a{-webkit-transition:all 0.2s cubic-bezier(0.42, 0, 0.58, 1);-moz-transition:all 0.2s cubic-bezier(0.42, 0, 0.58, 1);-ms-transition:all 0.2s cubic-bezier(0.42, 0, 0.58, 1);-o-transition:all 0.2s cubic-bezier(0.42, 0, 0.58, 1);transition:all 0.2s cubic-bezier(0.42,0,0.58,1);cursor:pointer;text-decoration:none;color:rgba(255,29,77,0.6)}a:hover{color:#ff1d4d !important;text-decoration:none !important;outline:none !important}a:active,a:focus{outline:none !important;text-decoration:none !important;color:rgba(255,29,77,0.6)}#container{background:#20232d;border:30px solid #421dff;position:absolute;height:100%;width:100%;left:0;top:0}#container .overlay{position:absolute;background-repeat:repeat;opacity:0.1;width:100%;height:100%}#container .item-title{position:absolute;z-index:0;left:0;padding:0;top:50vh;width:100%;padding:0 5%;-webkit-transition:all 0.3s cubic-bezier(0, 0, 0.58, 1);-moz-transition:all 0.3s cubic-bezier(0, 0, 0.58, 1);-ms-transition:all 0.3s cubic-bezier(0, 0, 0.58, 1);-o-transition:all 0.3s cubic-bezier(0, 0, 0.58, 1);transition:all 0.3s cubic-bezier(0, 0, 0.58, 1);-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);transform:translateY(-50%);-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;opacity:1;visibility:visible}#container .item-title #message{max-width:600px;min-height:300px;margin:0 auto}#container .item-title #message p:first-child{font-size:90px;font-weight:700}#container .item-title .link-bottom{margin:0 auto;max-width:600px}#container .item-title .link-bottom .link-icon{margin-right:10px;font-size:22px}@media only screen and (max-width: 480px){#container{min-height:100%;height:auto}#container .overlay{min-height:100%;height:auto}#container .item-title{padding:100px 5%;position:relative;top:0;-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}#container .item-title #message{min-height:240px}#container .item-title #message p:first-child{font-size:50px;font-weight:700}}
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
</head>

<body>
    <div id="container">
        <div class="overlay"></div>
        <div class="item-title">
            <div id="message"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>

    $(window).load(function() {

        (function () {
        var $animate, $container, $message, $paragraph, MESSAGES, animate, initialise, scramble;
        MESSAGES = [];
        MESSAGES.push({
            delay: 0,
            text: 'WHOOPS PAGINA NO ENCONTRADA'
        });
        MESSAGES.push({
            delay: 800,
            text: 'ERROR 404.'
        });
        $container = $('#container');
        $message = $('#message');
        $animate = $('#animate');
        $paragraph = null;
        scramble = function (element, text, options) {
            var $element, addGlitch, character, defaults, ghostCharacter, ghostCharacters, ghostLength, ghostText, ghosts, glitchCharacter, glitchCharacters, glitchIndex, glitchLength, glitchProbability, glitchText, glitches, i, k, letter, object, order, output, parameters, ref, results, settings, shuffle, target, textCharacters, textLength, wrap;
            defaults = {
                probability: 0.2,
                glitches: '-|/\\',
                blank: '',
                duration: text.length * 40,
                ease: 'easeInOutQuad',
                delay: 0
            };
            $element = $(element);
            settings = $.extend(defaults, options);
            shuffle = function () {
                if (Math.random() < 0.5) {
                    return 1;
                } else {
                    return -1;
                }
            };
            wrap = function (text, classes) {
                return '<span class="' + classes + '">' + text + '</span>';
            };
            glitchText = settings.glitches;
            glitchCharacters = glitchText.split('');
            glitchLength = glitchCharacters.length;
            glitchProbability = settings.probability;
            glitches = function () {
                var j, len, results;
                results = [];
                for (j = 0, len = glitchCharacters.length; j < len; j++) {
                    letter = glitchCharacters[j];
                    results.push(wrap(letter, 'glitch'));
                }
                return results;
            }();
            ghostText = $element.text();
            ghostCharacters = ghostText.split('');
            ghostLength = ghostCharacters.length;
            ghosts = function () {
                var j, len, results;
                results = [];
                for (j = 0, len = ghostCharacters.length; j < len; j++) {
                    letter = ghostCharacters[j];
                    results.push(wrap(letter, 'ghost'));
                }
                return results;
            }();
            textCharacters = text.split('');
            textLength = textCharacters.length;
            order = function () {
                results = [];
                for (var j = 0; 0 <= textLength ? j < textLength : j > textLength; 0 <= textLength ? j++ : j--) {
                    results.push(j);
                }
                return results;
            }.apply(this).sort(this.shuffle);
            output = [];
            for (i = k = 0, ref = textLength; 0 <= ref ? k < ref : k > ref; i = 0 <= ref ? ++k : --k) {
                glitchIndex = Math.floor(Math.random() * (glitchLength - 1));
                glitchCharacter = glitches[glitchIndex];
                ghostCharacter = ghosts[i] || settings.blank;
                addGlitch = Math.random() < glitchProbability;
                character = addGlitch ? glitchCharacter : ghostCharacter;
                output.push(character);
            }
            object = { value: 0 };
            target = { value: 1 };
            parameters = {
                duration: settings.duration,
                ease: settings.ease,
                step: function () {
                    var index, l, progress, ref1;
                    progress = Math.floor(object.value * (textLength - 1));
                    for (i = l = 0, ref1 = progress; 0 <= ref1 ? l <= ref1 : l >= ref1; i = 0 <= ref1 ? ++l : --l) {
                        index = order[i];
                        output[index] = textCharacters[index];
                    }
                    return $element.html(output.join(''));
                },
                complete: function () {
                    return $element.html(text);
                }
            };
            return $(object).delay(settings.delay).animate(target, parameters);
        };
        animate = function () {
            var data, element, index, j, len, options;
            for (index = j = 0, len = MESSAGES.length; j < len; index = ++j) {
                data = MESSAGES[index];
                element = $paragraph.get(index);
                element.innerText = '';
                options = { delay: data.delay };
                scramble(element, data.text, options);
            }
        };
        initialise = function () {
            var index, j, len, text;
            $animate.click(animate);
            for (index = j = 0, len = MESSAGES.length; j < len; index = ++j) {
                text = MESSAGES[index];
                $message.append('<p>');
            }
            $paragraph = $container.find('p');
            animate();
        };
        initialise();
    }.call(this));

    });</script>
    <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
</body>

</html>
