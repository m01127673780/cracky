/*
 	scrollr - v0.0.1 
 	A plugin that replaces the default scrollbars in the browser with CSS scrollbars, without removing its natural behavior.
	by Robert Bue (@robert_bue)

 	Licensed under MIT
 */

;(function ( $, window, document, undefined ) {

    //"use strict";

    var pluginName = "scrollr",
        dataPlugin = "plugin_" + pluginName,
        
        // default options
        defaults = {
			offset : 0,
            fadeOnHover: true,
            fadeOnActive: true,
            autoHandle: true,
            minHandleHeight: 35,
            maxHandleHeight: 9999999
		};

    var Plugin = function ( element, options ) {

        this.element = element;
        this.settings = $.extend( {}, defaults, options );
        this._defaults = defaults;
        this._name = pluginName;
        this.build();
        this.events();
    };

    Plugin.prototype.build = function () {
        var self = this;
            
        self.settings = this.settings,
        self.target = $(self.element),
        self.targetWidth = self.target.width(),
        self.targetHeight = self.target.height(),
        self.ticker = 0,
        self.scrollbarTop = 0,
        self.scrolling = false,
        self.totalHeight = 0;
        self.timer = null;


        // Wheel events
        //self.wheelEvents = ( 'onwheel' in document || document.documentMode >= 9 ) ? ['wheel'] : ['mousewheel', 'DomMouseScroll', 'MozMousePixelScroll'];
        self.wheelEvents = ( 'onwheel' in document || document.documentMode >= 9 ) ? 'wheel' : 'mousewheel DOMMouseScroll MozMousePixelScroll';
        // webkitDirectionInvertedFromDevice

        // Key events
        //var hasKeyDown = 'onkeydown' in document;
        self.keyEvents = "keydown";
        //self.keyEvents = ( 'onkeydown' in document ) ? "onkeydown" : "keydown";

        // Mouse events
        //self.mouseEvents = "mousedown touchstart";
        self.mouseEvents = [
        'touchstart mousedown',
        'touchmove mousemove',
        'touchend touchcancel mouseup'];


        // Pointer events
        // var hasTouchWin = ( navigator.msMaxTouchPoints ) ? navigator.msMaxTouchPoints && navigator.msMaxTouchPoints > 1 : navigator.MaxTouchPoints && navigator.MaxTouchPoints > 1;
        // bodyTouchAction = document.body.style.msTouchAction;
        // document.body.style.msTouchAction = "none";

        //self.hasPointerEvents = window.navigator.pointerEnabled || window.navigator.msPointerEnabled;

        if ( window.PointerEvent ) {
            self.keyEvents = "pointerdown";
        } else if ( window.MSPointerEvent ) {
            self.keyEvents = "MSPointerDown";
        }

        // Touch events
        var hasTouch = 'ontouchstart' in window;
        self.mobileRegex = /mobile|tablet|ip(ad|hone|od)|android|silk/i;
        // check hammer.js - NO_MOUSEEVENTS
        if ( hasTouch && window.navigator.userAgent.match(self.mobileRegex) ) {
            return;
        }        

        // Add a scrollr class
        self.target.addClass('scrollr');

        // Build markup
        self.target.wrapInner('<div class="scrollr-inner"></div>').append('<div class="scrollr-scrollbar scrollr-scrollbar-y"><div class="scrollr-handle"></div></div>');

        self.target.scrollrInner = self.target.find('.scrollr-inner');
        self.target.scrollrBar = self.target.find('.scrollr-scrollbar-y');
        self.target.scrollrHandle = self.target.find('.scrollr-handle');

        // Set tabindex to 0 to allow keydown event
        self.target.scrollrInner.attr("tabindex", 0);

        // Get scrollbar width and sets padding
        // FIX THIS: DONT DO THIS EVERYTIME
        self.nativeScrollBarWidth = getScrollbarWidth();
        self.target.scrollrBar.Width = self.target.scrollrBar.outerWidth(true);
        //self.target.scrollrBar.Width = self.target.scrollrBar.width();

        //self.target.scrollrBar.hide();

        // Get padding of element so we can add it to scrollr-inner
        var padding = {
            paddingTop: parseInt(self.target.css('paddingTop')),
            paddingRight: parseInt(self.target.css('paddingRight')),
            paddingBottom: parseInt(self.target.css('paddingBottom')),
            paddingLeft: parseInt(self.target.css('paddingLeft'))
        };
        // Requires jQuery 1.9 - use this in the future?
        // var padding = self.target.css([ "paddingTop", "paddingRight", "paddingBottom", "paddingLeft" ]);

        
        // Remove paddding to element
        // Because we will apply it to the scroll-inner instead
        self.target.css({padding: 0});

        // Native scrollbar dosent take any space - osx
        if ( self.nativeScrollBarWidth === 0 ) {

            // Setting: Scrollbar over content
            if ( self.settings.overlayed ) {
                innerCSSValues = {
                    right: -(self.nativeScrollBarWidth + self.target.scrollrBar.Width),
                    paddingRight: (self.nativeScrollBarWidth + self.target.scrollrBar.Width),
                    paddingTop: padding.paddingTop,
                    paddingBottom: padding.paddingBottom,
                    paddingLeft: padding.paddingLeft
                };
            } else {
                
                innerCSSValues = {
                    right: -(self.nativeScrollBarWidth + self.target.scrollrBar.Width),
                    paddingRight: self.nativeScrollBarWidth + (self.target.scrollrBar.Width * 2),
                    paddingTop: padding.paddingTop,
                    paddingBottom: padding.paddingBottom,
                    paddingLeft: padding.paddingLeft
                };

            }
        }
        else {
    
            // Setting: Scrollbar over content
            if ( self.settings.overlayed ) {
                innerCSSValues = {
                    right: -(self.nativeScrollBarWidth + (self.target.scrollrBar.Width * 2)),
                    paddingRight: (self.nativeScrollBarWidth + self.target.scrollrBar.Width),
                    paddingTop: padding.paddingTop,
                    paddingBottom: padding.paddingBottom,
                    paddingLeft: padding.paddingLeft
                };
            } else {
                innerCSSValues = {
                    right: -(self.nativeScrollBarWidth),
                    paddingRight: self.target.scrollrBar.Width,
                    paddingTop: padding.paddingTop,
                    paddingBottom: padding.paddingBottom,
                    paddingLeft: padding.paddingLeft
                };
            }
        }

        // Sets padding-right after the scrollbar width
        if (innerCSSValues != null) {
            self.target.scrollrInner.css(innerCSSValues);
        }

        // Add classes from settings
        if ( self.settings.overlayed ) {    
            self.target.addClass('scrollr-overlayed');
        }

        if ( self.settings.fadeOnHover ) {    
            self.target.addClass('scrollr-fade-hover');
        }

        if ( self.settings.fadeOnActive ) {    
            self.target.addClass('scrollr-fade');
        }
        

        // Checks if the browser support transform property
        // FIX THIS: IS EXECUTED EVERY TIME
        if ( !self.transformProperty ) {
            if ( $.support.transform && $.support.transform !== "transform" ) {
                // Checks if browser support translate3d
                // If so we'll use translate3d because its faster, right?
                if ( isTranslate3dSupported() ) {
                    self.transformProperty = "translate3d"
                } else {
                    self.transformProperty = "translate";
                }
            } else {
                self.transformProperty = "top";
            }
        }

        this.update();
    }

    Plugin.prototype.events = function () {
        
        var self = this;

        // Mousewheel
        //self.target.on(self.wheelEvents + " " + self.keyEvents + " " + self.mouseEvents[0], function(event) {
        self.target.on(self.wheelEvents + " " + self.keyEvents, function(event) {         
            self.eventTrigger(); 
        });

        var mouse = {}, 
            start = {}, 
            handle = {};

        // Click scrollbar track
        self.target.scrollrBar.on(self.mouseEvents[0], function(event) {
   
            self.eventTrigger();
            mouse.offsetTop = self.target.scrollrBar.offset().top;
            mouse.toTop = event.pageY - mouse.offsetTop;

            self.scrollbarTop = Math.round(((mouse.toTop) / (self.scrollrBarHeight + self.scrollrHandleHeight)) * (self.totalHeight));
            //console.log(event.pageY);

            self.target.scrollrInner.scrollTop(self.scrollbarTop);    
        });

        // Select text
        self.target.scrollrInner.on(self.mouseEvents[0], function(event) {
   
            //event.stopPropagation();
            self.dragging = true;
            self.selectText = true;
            self.scrollTop = self.target.scrollrInner.scrollTop();

            self.eventTrigger();

            self.handleDragging = setInterval(function() {
                self.eventTrigger();
            }, 400);
        });

        // Drag handle
        self.target.scrollrHandle.on(self.mouseEvents[0], function(event) {          
            event.preventDefault();
            event.stopPropagation();
            
            self.dragging = true;
            self.scrollTop = self.target.scrollrInner.scrollTop();

            self.eventTrigger();

            self.handleDragging = setInterval(function() {
                self.eventTrigger();
            }, 400);

            //self.target.addClass('scrolling');

            handle.x = getHandlePosition('x', self);
            handle.y = getHandlePosition('y', self);
            start.x = event.pageX;
            start.y = event.pageY;
            
        });

        $(document).on(self.mouseEvents[1], function(event) { 
            if ( self.dragging && !self.selectText ) {
                event.preventDefault();

                mouse.moveX = event.pageX - start.x;
                mouse.moveY = event.pageY - start.y;        

                self.scrollTop = handle.y + mouse.moveY;
                self.scrollTop = Math.round(self.scrollTop * (self.totalHeight - self.scrollrInnerHeight) / (self.scrollrBarHeight - self.scrollrHandleHeight));
            }
        });

        $(document).on(self.mouseEvents[2], function() {
            self.dragging = false;
            self.selectText = false;
            clearInterval(self.handleDragging);
            //self.target.removeClass('scrolling');
        });

        // Update on window load and resize
        $(window).on("load resize", function(event) {
            self.update();
            console.log('reisze');
        });

        // Update when images load
        $('img').on('load', function() {
            self.update();
        });
    }

    Plugin.prototype.update = function () {
        var self = this;

        //self.scrollrInnerHeight = self.target.scrollrInner.height();
        self.scrollrInnerHeight = self.target.scrollrInner.outerHeight(true);
        self.scrollrBarHeight = self.target.scrollrBar.height();
        self.scrollrHandleHeight = self.target.scrollrHandle.height();
        self.totalHeight = self.target.scrollrInner[0].scrollHeight;

        //console.log("self.scrollrInnerHeight: " + self.scrollrBarHeight);

        // Set the height of the handle from the content height vs visible height ratio
        if ( self.settings.autoHandle ) {
            self.scrollrHandleHeight = Math.round((self.scrollrBarHeight / self.totalHeight) * self.scrollrBarHeight);

            self.scrollrHandleHeight = Math.min(self.scrollrHandleHeight, self.settings.maxHandleHeight);
            self.scrollrHandleHeight = Math.max(self.scrollrHandleHeight, self.settings.minHandleHeight);

            self.target.scrollrHandle.height(self.scrollrHandleHeight);
        }

        if ( self.totalHeight < self.scrollrInnerHeight ) {
            //if ( self.settings.fadeOnHover ) { 
                self.target.scrollrBar.hide();
            //}
        } else {
            //if ( !self.settings.fadeOnHover ) { 
                self.target.scrollrBar.show();
            //}
        }


        self.scrollbarPosition();
    }

    Plugin.prototype.scrollbarPosition = function () {
        var self = this;

        if ( self.dragging && !self.selectText  ) {
            self.target.scrollrInner.scrollTop(self.scrollTop);
            self.scrollbarTop = self.scrollTop;
        } else {
            self.scrollLeft = self.target.scrollrInner.scrollLeft();
            self.scrollbarTop = self.target.scrollrInner.scrollTop();
        }

        self.scrollbarTop = Math.round((self.scrollbarTop / (self.totalHeight - self.scrollrInnerHeight)) * (self.scrollrBarHeight - self.scrollrHandleHeight));
        
        self.scrollbarTop = Math.min(self.scrollbarTop, (self.scrollrBarHeight - self.scrollrHandleHeight));
        self.scrollbarTop = Math.max(self.scrollbarTop, 0);
        
        //element.target.scrollrHandle.css({"top": self.scrollbarTop});
        //self.target.scrollrHandle.css({ transform: "translateY(" + self.scrollbarTop + "px)" });
        self.target.scrollrHandle.css(
            cssValues(0, self.scrollbarTop, self.transformProperty)
        );

        
    }

    Plugin.prototype.eventTrigger = function () {
        var self = this;

        // Add focus for keydown event
        // FIX THIS: JUMPS TO THIS WHEN ALREADY SCROLLED DOWN ON SITE
        // self.target.scrollrInner.focus();

        //console.log(event);

        clearTimeout(self.timer);

        if ( !self.scrolling ) {
            self.start(self);
        }

        self.scrolling = true;

        self.timer = setTimeout(function(){
            self.stop(self);
        }, 500);
    }

    Plugin.prototype.loop = function (self) {
        //console.log('loop')
        var self = this;
        this.scrollbarPosition();

        this.ticker = requestAnimationFrame(function(){
            self.loop()
        });

        // ES5
        //requestAnimationFrame(this.update.bind(this)});
        
    }

    Plugin.prototype.start = function () {
        this.loop();
        this.target.addClass('scrollr-active');
    }

    Plugin.prototype.stop = function () {
        if ( self.dragging ) {
           return; //is this needed?
        }

        cancelAnimationFrame(this.ticker);
        this.ticker = null;
        this.scrolling = false;
        this.target.removeClass('scrollr-active');
    }

    Plugin.prototype.destroy = function () {
        // $this.unbind(eventClassName);
        // $(window).unbind(eventClassName);
        // $(document).unbind(eventClassName);
        // $this.data('perfect-scrollbar', null);
        // $this.data('perfect-scrollbar-update', null);
        // $this.data('perfect-scrollbar-destroy', null);
        // $scrollbarX.remove();
        // $scrollbarY.remove();
        // $scrollbarXRail.remove();
        // $scrollbarYRail.remove();
        this.element.data( dataPlugin, null );
    }
 
    // Get the position of the handle
    function getHandlePosition(axis, self) {
        console.log(axis)
        if ( self.transformProperty == "top" ) {
            handle = ( axis == "x" ) ? parseInt(self.target.scrollrHandle.css('left')) : parseInt(self.target.scrollrHandle.css('top'));
        } else {
            handle = self.target.scrollrHandle.css('transform');
            handle = handle.match(/(-?[0-9\.]+)/g);
            handle = ( axis == "x" ) ? parseInt(handle[2]) : parseInt(handle[5]);
        }

        return handle;
    }

    // Formats css values
    function cssValues(x, y, property) {
        
        if ( property == "translate" ) {
            cssValue = {
                transform: "translate(" + x + "px, " + y + "px)"
            };
        }

        else if ( property == "translate3d" ) {
            cssValue = {
                transform: "translate3d(" + x + "px, " + y + "px, 0)"
            };
        }

        else {
            cssValue = {
                left: x + "px",
                top: y + "px"
            };
        }

        return cssValue;
    }

    function getScrollbarWidth() {
        var div, divStyle, scrollbarWidth;
        div = document.createElement('div');
        divStyle = div.style;
        divStyle.position = 'absolute';
        divStyle.width = '100px';
        divStyle.height = '100px';
        divStyle.overflow = "scroll";
        divStyle.top = '-9999px';
        document.body.appendChild(div);
        scrollbarWidth = div.offsetWidth - div.clientWidth;
        document.body.removeChild(div);
        
        return scrollbarWidth;
    }

    // Testing for CSS 3D Transforms Support
    // optimize this - already got vendor prefixes from cssPropertyCheck
    function isTranslate3dSupported() {
        var el = document.createElement('div'),
        has3d,
        transforms = {
            'webkitTransform':'-webkit-transform',
            'OTransform':'-o-transform',
            'msTransform':'-ms-transform',
            'MozTransform':'-moz-transform',
            'transform':'transform'
        };
     
        // Add it to the body to get the computed style
        document.body.insertBefore(el, null);
     
        for(var t in transforms){
            if( el.style[t] !== undefined ){
                el.style[t] = 'translate3d(1px,1px,1px)';
                has3d = window.getComputedStyle(el).getPropertyValue(transforms[t]);
            }
        }
     
        document.body.removeChild(el);
     
        return (has3d !== undefined && has3d.length > 0 && has3d !== "none");
    }

    function cssPropertyCheck( prop ) {
        var vendorProp, supportedProp,
        capProp = prop.charAt( 0 ).toUpperCase() + prop.slice( 1 ),
        prefixes = [ "Moz", "Webkit", "O", "ms" ],
        div = document.createElement( "div" );

        if ( prop in div.style ) {
            supportedProp = prop;
        } else {
            for ( var i = 0; i < prefixes.length; i++ ) {
            vendorProp = prefixes[ i ] + capProp;
                if ( vendorProp in div.style ) {
                    supportedProp = vendorProp;
                    break;
                }
            }
        }

        div = null;
        $.support[ prop ] = supportedProp;
        return supportedProp;
    }

    var transform = cssPropertyCheck("transform");


    // requestAnimationFrame polyfill
    // https://gist.github.com/paulirish/1579671    
    (function() {
        var lastTime = 0;
        var vendors = ['ms', 'moz', 'webkit', 'o'];
        for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
            window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
            window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] 
                                       || window[vendors[x]+'CancelRequestAnimationFrame'];
        }
     
        if (!window.requestAnimationFrame)
            window.requestAnimationFrame = function(callback, element) {
                var currTime = new Date().getTime();
                var timeToCall = Math.max(0, 16 - (currTime - lastTime));
                var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
                  timeToCall);
                lastTime = currTime + timeToCall;
                return id;
            };
     
        if (!window.cancelAnimationFrame)
            window.cancelAnimationFrame = function(id) {
                clearTimeout(id);
            };
    }());

    $.fn[pluginName] = function (option) {
        return this.each(function () {
            var $this = $(this);
            var data = $this.data(pluginName);
            var options = typeof option == 'object' && option;
            if (!data) {
                $this.data(pluginName, (data = new Plugin(this, options)));
            }
            if (typeof option == 'string') {
                data[option]();
            }
        })
    }

}(jQuery, window, document));