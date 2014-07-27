		var i =0; 
		var images = ['http://dl.dropboxusercontent.com/u/96099766/ChangeBackgroundJQuery/image2.png','http://dl.dropboxusercontent.com/u/96099766/ChangeBackgroundJQuery/image3.png','http://dl.dropboxusercontent.com/u/96099766/ChangeBackgroundJQuery/image1.png'];
		var image = $('#slideit');
		image.css('background-image', 'url(http://dl.dropboxusercontent.com/u/96099766/ChangeBackgroundJQuery/image1.png)');
		setInterval(function(){			
			image.fadeOut(1000, function () {
			image.css('background-image', 'url(' + images [i++] +')');
			image.fadeIn(1000);
			});
			if(i == images.length)
				i = 0;
		}, 5000);   
		
		