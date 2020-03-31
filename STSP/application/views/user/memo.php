<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Sticky Notes board</title>
		<meta name="description" content="Sticky Notes by Edmond Ko">
    <meta name="author" content="Edmond Ko">
 		<link href='https://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
	<style>
	.hidden {
	display: none !important;
	visibility: hidden;
}

/* * Hide only visually, but have it available for screenreaders: h5bp.com/v */
.visuallyhidden {
	border: 0;
	clip: rect(0 0 0 0);
	height: 1px;
	margin: -1px;
	overflow: hidden;
	padding: 0;
	position: absolute;
	width: 1px;
}

/* * Extends the .visuallyhidden class to allow the element to be focusable * when navigated to via the keyboard: h5bp.com/p */

.visuallyhidden.focusable:active,
.visuallyhidden.focusable:focus {
	clip: auto;
	height: auto;
	margin: 0;
	overflow: visible;
	position: static;
	width: auto;
} /* * Hide visually and from screenreaders, but maintain layout */

.invisible {
	visibility: hidden;
}

.clearfix:before,
.clearfix:after {
	content: " "; /* 1 */
	display: table; /* 2 */
}

.clearfix:after {
	clear: both;
}
.noflick {
	perspective: 1000;
	backface-visibility: hidden;
	transform: translate3d(0,0,0);
}
/* ==========================================================================
   Base styles: opinionated defaults
   ========================================================================== */
* {
	box-sizing: border-box;
}
html,
button,
input,
select,
textarea {
	color: #000000;
}

body {
	font-size: 1em;
	line-height: 1;
	background-color: rgba(255,255,255,1);
	background: linear-gradient(135deg, rgba(255,255,255,1) 0%, rgba(235,235,235,1) 47%, rgba(222,222,222,1) 100%);
}

::selection {
	background: #B3D4FC;
	text-shadow: none;
}
a:focus {
	outline: none;
}
::-webkit-input-placeholder {
	color: rgba(0,0,0,.7);
}

:placeholder {
	/* Firefox 18- */
	color: rgba(0,0,0,.7);
}

/* ==========================================================================
   Author's custom styles
   ========================================================================== */

#board {
	padding: 100px 30px 30px;
	margin-top: 40px;
	overflow-y: visible;
	@extend .noflick;
}
.note {
	float: left;
	display: block;
	position: relative;
	padding: 1em;
	width: 300px;
	min-height: 300px;
	margin: 0 30px 30px 0;
	background: linear-gradient(top, rgba(0,0,0,.05), rgba(0,0,0,.25));
	background-color: #FFFD75;
	box-shadow: 5px 5px 10px -2px rgba(33,33,33,.3);
	transform: rotate(2deg);
	transform: skew(-1deg,1deg);
	transition: transform .15s;
	z-index: 1;
	@extend .noflick;

	&:hover {
		cursor: move;
	}
	&.ui-draggable-dragging:nth-child(n) {
		box-shadow: 5px 5px 15px 0 rgba(0,0,0,.3);
		transform: scale(1.125) !important;
		z-index: 100;
		cursor: move;
		transition: transform .150s;
	}

	textarea {
		background-color: transparent;
		border: none;
		resize: vertical;
		font-family: "Gloria Hallelujah", cursive;
		width: 100%;
		padding: 5px;
		&:focus {
			outline: none;
			border: none;
			box-shadow: 0 0 5px 1px rgba(0,0,0,.2) inset;
		}
		&.title {
			font-size: 24px;
			line-height: 1.2;
			color: #000000;
			height: 64px;
			margin-top: 20px;
		}
		&.cnt {
			min-height: 200px;
		}
	}
	&:nth-child(2n) {
		background: #FAAACA;
	}
	&:nth-child(3n) {
		background: #69F098;
	}
}

/* Button style  */
.button {
	font: bold 16px Helvetica, Arial, sans-serif;
	color: #FFFFFF;
	padding: 1em 2em;
	background: linear-gradient(top, rgba(0,0,0,.15), rgba(0,0,0,.3));
	background-color: #00CC00;
	border-radius: 3px;
	box-shadow: 1px 1px 3px rgba(0,0,0,.3),inset 0 -1px 2px -1px rgba(0,0,0,.5), inset 0 1px 2px 1px rgba(255,255,255,.3);
	text-shadow: 0 -1px 0 rgba(0,0,0,.3), 0 1px 0 rgba(255,255,255,.3);
	text-decoration: none;
	transition: transform .150s, background .01s;
	@extend .noflick;

	&:hover {
		background-color: #00EE00;
		box-shadow: 
      0 0 0 0 rgba(0,0,0,.3),
      inset 0 -1px 2px -1px rgba(0,0,0,.5), 
      inset 0 1px 2px 1px rgba(255,255,255,.3);
	}

	&:active {
		background: linear-gradient(bottom, rgba(0,0,0,.15), rgba(0,0,0,.3));
		background-color: #00CC00;
		text-shadow: 0 1px 0 rgba(0,0,0,.3), 0 -1px 0 rgba(255,255,255,.3);
		box-shadow: inset 0 1px 2px rgba(0,0,0,.3), inset 0 -1px 2px rgba(255,255,255,.3);
		outline: none;
	}

	&.remove {
		position: absolute;
		top: 5px;
		right: 5px;
		width: 36px;
		height: 36px;
		border-radius: 50%;
		background-color: #E01C12;
		text-align: center;
		line-height: 16px;
		padding: 10px;
		border-color: #B30000;
		font-style: 1.6em;
		font-weight: bolder;
		font-family: Helvetica, Arial, sans-serif;

		&:hover {
			background-color: #EF0005;
		}
	}
}

#add_new {
	position: fixed;
	top: 20px;
	right: 20px;
	z-index: 100;
}

.author {
	position: absolute;
	top: 20px;
	left: 20px;
}
	</style>
	</head>
	<body>
		<a href="javascript:;" class="button" id="add_new">Add New Note</a>
		<div id="board">
			
		</div>
		
		
	</body>
	<script>
	(function($)
{
    /**
     * Auto-growing textareas; technique ripped from Facebook
     *
     https://github.com/jaz303/jquery-grab-bag/tree/master/javascripts/jquery.autogrow-textarea.js
     */
    $.fn.autogrow = function(options)
    {
        return this.filter('textarea').each(function()
        {
            var self         = this;
            var $self        = $(self);
            var minHeight    = $self.height();
            var noFlickerPad = $self.hasClass('autogrow-short') ? 0 : parseInt($self.css('lineHeight')) || 0;

            var shadow = $('<div></div>').css({
                position:    'absolute',
                top:         -10000,
                left:        -10000,
                width:       $self.width(),
                fontSize:    $self.css('fontSize'),
                fontFamily:  $self.css('fontFamily'),
                fontWeight:  $self.css('fontWeight'),
                lineHeight:  $self.css('lineHeight'),
                resize:      'none',
                'word-wrap': 'break-word'
            }).appendTo(document.body);

            var update = function(event)
            {
                var times = function(string, number)
                {
                    for (var i=0, r=''; i<number; i++) r += string;
                    return r;
                };

                var val = self.value.replace(/</g, '&lt;')
                                    .replace(/>/g, '&gt;')
                                    .replace(/&/g, '&amp;')
                                    .replace(/\n$/, '<br/>&nbsp;')
                                    .replace(/\n/g, '<br/>')
                                    .replace(/ {2,}/g, function(space){ return times('&nbsp;', space.length - 1) + ' ' });

                // Did enter get pressed?  Resize in this keydown event so that the flicker doesn't occur.
                if (event && event.data && event.data.event === 'keydown' && event.keyCode === 13) {
                    val += '<br />';
                }

                shadow.css('width', $self.width());
                shadow.html(val + (noFlickerPad === 0 ? '...' : '')); // Append '...' to resize pre-emptively.
                $self.height(Math.max(shadow.height() + noFlickerPad, minHeight));
            }

            $self.change(update).keyup(update).keydown({event:'keydown'},update);
            $(window).resize(update);

            update();
        });
    };
})(jQuery);


var noteTemp =  '<div class="note">'
				+	'<a href="javascript:;" class="button remove">X</a>'
				+ 	'<div class="note_cnt">'
				+		'<textarea class="title" placeholder="Enter note title"></textarea>'
				+ 		'<textarea class="cnt" placeholder="Enter note description here"></textarea>'
				+	'</div> '
				+'</div>';

var noteZindex = 1;
function deleteNote(){
    $(this).parent('.note').hide("puff",{ percent: 133}, 250);
};

function newNote() {
  $(noteTemp).hide().appendTo("#board").show("fade", 300).draggable().on('dragstart',
    function(){
       $(this).zIndex(++noteZindex);
    });
 
	$('.remove').click(deleteNote);
	$('textarea').autogrow();
	
  $('.note')
	return false; 
};



$(document).ready(function() {
    
    $("#board").height($(document).height());
    
    $("#add_new").click(newNote);
    
    $('.remove').click(deleteNote);
    newNote();
	  
    return false;
});
	</script>
</html>