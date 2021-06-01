$(document).ready(function () {

	function setTransformSubtitle() {
		const cat_subtitle = $('.item-cat__subtitle');
		cat_subtitle.each(function (i, el) {
			$(el).closest('.item-cat__text').css('transform', `translateY(${$(el).innerHeight()}px)`);
		})
	}

	const asideOpen = $('.archive__aside-open');
	const asideClose = $('.aside__close');
	const aside = $('.aside');

	asideOpen.click(function (ev) {
		aside.addClass('aside--active')
	})

	asideClose.click(function (ev) {
		aside.removeClass('aside--active')
	})

	window.onload = function () {
		if ($(window).innerWidth() >= 1201) {
			setTransformSubtitle()
			$(window).resize(function () {
				setTransformSubtitle()
			});
			if (document.querySelector('.consalt__right')) {

				const image = $('.consalt__image')
				const offsetBlock = image.offset().top;

				const image2 = $('.about__image')
				const offsetBlock2 = image2.offset().top;

				function parallax() {
					// let scrollPos = 0;
					let offsetScroll = $(document).scrollTop();

					const start = offsetBlock - $(window).innerHeight() / 2;
					const finish = offsetBlock + $(window).innerHeight() / 3;
					const raznica = finish - start;
					const index = 0.2 / raznica;

					if (offsetScroll >= start && offsetScroll < finish) {

						let value = offsetScroll - offsetBlock + $(window).innerHeight() / 2;
						let ratio = 1;
						image.css('transform', `scale(${1 + (value * index)})`)
					}
				}

				function parallax2() {
					// let scrollPos = 0;
					let offsetScroll = $(document).scrollTop();

					const start = offsetBlock2 - $(window).innerHeight() / 2;
					const finish = offsetBlock2 + $(window).innerHeight() / 3;
					const raznica = finish - start;
					const index = 0.2 / raznica;

					if (offsetScroll >= start && offsetScroll < finish) {

						let value = offsetScroll - offsetBlock2 + $(window).innerHeight() / 2;
						let ratio = 1;
						image2.css('transform', `scale(${1 + (value * index)})`)
					}
				}



				$(window).on('scroll', function () {
					parallax()
					parallax2()
				});
			}
		}
	};

	if (document.querySelector('.categories__btn-item')) {
		if ($(window).innerWidth() >= 1201) {
			const round = $('.round');
			const roundBtn = $('.round__btn');
			const border1 = $('.round__el--1');
			const border2 = $('.round__el--2');
			const border3 = $('.round__el--3');
			const border4 = $('.round__el--4');
			const border5 = $('.round__el--5');
			const height = round.innerHeight() / 2;
			const width = round.innerWidth() / 2;

			round.mousemove(function (event) {

				var x = event.offsetX - width;
				var y = event.offsetY - height;

				roundBtn.css('transform', `translate(${x / 10}px, ${y / 10}px)`);
				border1.css('transform', `translate(${x / 2}px, ${y / 2}px)`);
				border2.css('transform', `translate(${x / 2}px, ${y / 2}px)`);
				border3.css('transform', `translate(${x / 2}px, ${y / 2}px)`);
				border4.css('transform', `translate(${x / 2}px, ${y / 2}px)`);
				border5.css('transform', `translate(${x / 2}px, ${y / 2}px)`);
			});

			round.mouseleave(function () {
				roundBtn.css('transform', 'translate(0px, 0px)');
				border1.css('transform', 'translate(0px, 0px)');
				border2.css('transform', 'translate(0px, 0px)');
				border3.css('transform', 'translate(0px, 0px)');
				border4.css('transform', 'translate(0px, 0px)');
				border5.css('transform', 'translate(0px, 0px)');
			})

			if (document.querySelector('.decor-waves')) {
				const tl_1 = new TimelineMax({ repeat: -1 });
				const tl_2 = new TimelineMax({ repeat: -1 });
				const tl_3 = new TimelineMax({ repeat: -1 });
				const tl_4 = new TimelineMax({ repeat: -1 });

				tl_1.to(".start-1", 7, { morphSVG: ".second-1", shapeIndex: 7, ease: 'linear' })
				// .to(".start-1", 11, { morphSVG: ".second-4", shapeIndex: 7, ease: 'linear' });

				tl_2.to(".start-2", 7, { morphSVG: ".second-2", shapeIndex: 3, ease: 'linear' })
				// .to(".start-2", 9, { morphSVG: ".second-1", shapeIndex: 1, ease: 'linear' });

				tl_3.to(".start-3", 7, { morphSVG: ".second-3", ease: 'linear' })
				// .to(".start-3", 7, { morphSVG: ".second-2", ease: 'linear' });

				tl_4.to(".start-4", 7, { morphSVG: ".second-4", ease: 'linear' })
				// .to(".start-4", 4, { morphSVG: ".second-3", ease: 'linear' });

			}
		}
	}



	if (document.querySelector('.decor-waves')) {
		if ($(window).innerWidth() >= 1921) {
			$('.decor-waves__svg').attr({
				'preserveAspectRatio': 'none',
			})
		}
	}

	const burger = $('.burger');
	const mobMenu = $('.mob-menu');
	let menuItemDelay = 0.03;

	$('.mob-menu__nav li').each(function (i, el) {
		menuItemDelay += 0.03;
		$(el).css('transition-delay', `${menuItemDelay}s`)
	})


	// $('.irs-grid-text').each(function (id, el) {
	// 	if ($(el).text() === '0') {
	// 		$(el).css({
	// 			'opacity': '0',
	// 			'visibility': 'hidden'
	// 		});
	// 		$(el).prev('.irs-grid-pol').css('transform', 'scale(0.7)')
	// 	}

	// })



	const slider_partners = new Swiper('.partners__slider', {
		slidesPerView: 5,
		spaceBetween: 40,
		loop: true,
		loopedSlides: 6,
		slidesPerGroup: 3,
		speed: 1000,
		autoplay: {
			delay: 4000,
		},
		navigation: {
			nextEl: '.partners__next',
			prevEl: '.partners__prev',
		},
		breakpoints: {
			320: {
				slidesPerView: 1,
				spaceBetween: 20,
				loopedSlides: 1,
				slidesPerGroup: 1,
				speed: 400,
			},
			375: {
				slidesPerView: 2,
				spaceBetween: 20,
				loopedSlides: 2,
				slidesPerGroup: 2,
				speed: 500,
			},
			576: {
				slidesPerView: 3,
				spaceBetween: 40,
				loopedSlides: 6,
				slidesPerGroup: 3,
				speed: 1000,
			},
			768: {
				slidesPerView: 4,
				spaceBetween: 40,
			},
			993: {
				slidesPerView: 5,
				spaceBetween: 40,
			},
		}
	});



	objectFitImages();

	// Табы
	function tabs(buttonsList, wrapper, tabBlock) {
		$(buttonsList).on('click', 'li:not(.active)', function () {
			$(this).addClass('active').siblings().removeClass('active')
				.closest(wrapper).find(tabBlock).removeClass('active').eq($(this).index()).addClass('active');
		})
	}

	tabs('.tabs-product__list', '.tabs-product', '.tabs-product__block')

	$('.tabs-product__list li').eq(0).addClass('active')


	$('.product__to-descr').click(function (ev) {
		ev.preventDefault()
		$('.descr-tab').addClass('active').siblings().removeClass('active')
		$('.tabs-descr').addClass('active').siblings().removeClass('active')
		$('html, body').animate({
			scrollTop: $('.tabs-product').offset().top
		}, 600);
	});

	const slider_with = new Swiper('.with__slider', {
		slidesPerView: 4,
		spaceBetween: 60,
		// loop: true,
		autoplay: {
			delay: 4000,
		},
		pagination: {
			el: '.with__pagination',
			type: 'bullets',
			clickable: true
		},
		navigation: {
			nextEl: '.partners__next',
			prevEl: '.partners__prev',
		},
		watchOverflow: true,
		breakpoints: {
			320: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			375: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			561: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
			769: {
				slidesPerView: 3,
				spaceBetween: 40,
			},
			956: {
				slidesPerView: 4,
				spaceBetween: 40,
			},
			1300: {
				slidesPerView: 4,
				spaceBetween: 60,
			},
		}
	});

	// function toggleTabs(top, bottom, topActive) {
	// 	$(top).on('click', function (ev) {
	// 		let text = $(this).next(bottom);

	// 		if ($(this).hasClass(topActive)) {
	// 			text.stop().slideUp();
	// 			$(this).removeClass(topActive)
	// 		}
	// 		else {
	// 			$(this).addClass(topActive)
	// 			text.stop().slideDown();
	// 		}
	// 	})
	// }

	if (document.querySelector('.toggle-archive')) {
		$('.toggle-archive__open').on('click', function () {
			$('.toggle-archive__top').addClass('active')
			$('.toggle-archive__bot').stop().slideDown();
		})

		$('.toggle-archive__close').on('click', function () {
			$('.toggle-archive__top').removeClass('active')
			$('.toggle-archive__bot').stop().slideUp();
		})
	}




	// function mobileSlider() {
	// 	if ($(window).innerWidth() <= 1100) {
	// 		slider_product_main = new Swiper('.new__slider', {
	// 			slidesPerView: 2,
	// 			spaceBetween: 40,
	// 			navigation: {
	// 				nextEl: '.new-slider--prev',
	// 				prevEl: '.new-slider--next',
	// 			},
	// 			breakpoints: {
	// 				320: {
	// 					slidesPerView: 1,
	// 					spaceBetween: 45,
	// 				},
	// 				376: {
	// 					slidesPerView: 1,
	// 					spaceBetween: 45,
	// 				},
	// 				630: {
	// 					slidesPerView: 2,
	// 					spaceBetween: 45,
	// 				},
	// 			}
	// 		});
	// 	}

	// 	else {
	// 		if ($('.new__slider').hasClass('swiper-container-initialized')) {
	// 			slider_catalog.destroy();
	// 		}
	// 	}
	// }

	// Fancy-box

	$('[data-src="#modal-polit"]').fancybox({
		touch: false,
		smallBtn: false,
		buttons: '',
	});

	$('[data-src="#modal-call"]').fancybox({
		touch: false,
		smallBtn: false,
		buttons: '',
	});

	$('[data-src="#modal-product"]').fancybox({
		touch: false,
		smallBtn: false,
		buttons: '',
	});

	$('[data-src="#modal-vk-1"]').fancybox({
		touch: false,
		smallBtn: false,
		buttons: '',
	});

	if ($('.product__title')) {
		$('.product-title').val($('.product__title').html())
	}

	// $('[data-fancybox="gal"]').fancybox({
	// backFocus: false,
	// autoFocus: false,
	// hash: false,
	// });

	// Input-mask
	$('input[type="tel"]').inputmask({ "mask": "+7 (999)-999-99-99" });


	const mobMenuNav = $('.mob-menu__nav');



	let isCooldown = false;
	// Menu-burger
	burger.click(function () {

		if (isCooldown) {
			return
		}
		isCooldown = true;

		if (mobMenu.hasClass('active')) {
			mobMenuNav.removeClass('active')
			setTimeout(function () {
				document.body.style.paddingRight = '0px';
				$(document.body).removeClass('disable-scroll')
				mobMenu.removeClass('active');
			}, 650)

		} else {
			let paddingOffset = window.innerWidth - document.body.offsetWidth + 'px';
			document.body.style.paddingRight = paddingOffset;
			mobMenu.addClass('active')
			$(document.body).addClass('disable-scroll')
			setTimeout(function () {
				mobMenuNav.addClass('active')
			}, 900)

		}

		$(this).toggleClass('active')
		$(document).scrollTop(0)

		setTimeout(function () {
			isCooldown = false
		}, 600)


	})

	$(document).click(function (ev) {
		if (!ev.target.closest('.burger') && !ev.target.closest('.mob-menu')) {

			setTimeout(function () {
				document.body.style.paddingRight = '0px';
				$(document.body).removeClass('disable-scroll');
				mobMenu.removeClass('active')
			}, 650)

			mobMenuNav.removeClass('active')
			burger.removeClass('active')

		}

		if (!ev.target.closest('.aside') && !ev.target.closest('.archive__aside-open')) {
			aside.removeClass('aside--active')
		}
	})



	// burger.click(function () {
	// 	clearTimeout(this.timeout);

	// 	this.timeout = setTimeout(function () {
	// 		if (mobMenu.hasClass('active')) {
	// 			mobMenuNav.removeClass('active')
	// 			setTimeout(function () {
	// 				document.body.style.paddingRight = '0px';
	// 				$(document.body).removeClass('disable-scroll')
	// 				mobMenu.removeClass('active');
	// 			}, 650)

	// 		} else {
	// 			let paddingOffset = window.innerWidth - document.body.offsetWidth + 'px';
	// 			document.body.style.paddingRight = paddingOffset;
	// 			mobMenu.addClass('active')
	// 			$(document.body).addClass('disable-scroll')
	// 			setTimeout(function () {
	// 				mobMenuNav.addClass('active')
	// 			}, 650)

	// 		}

	// 		$(this).toggleClass('active')
	// 		$(document).scrollTop(0)
	// 	}, 5000);
	// })

	// $(document).click(function (ev) {
	// 	if (!ev.target.closest('.burger') && !ev.target.closest('.mob-menu')) {

	// 		setTimeout(function () {
	// 			document.body.style.paddingRight = '0px';
	// 			$(document.body).removeClass('disable-scroll');
	// 			mobMenu.removeClass('active')
	// 		}, 650)

	// 		mobMenuNav.removeClass('active')
	// 		burger.removeClass('active')

	// 	}

	// 	if (!ev.target.closest('.aside') && !ev.target.closest('.archive__aside-open')) {
	// 		aside.removeClass('aside--active')
	// 	}
	// })

	// Яндекс карта
	if (document.querySelector('.contacts__map')) {
		ymaps.ready(function () {
			var myMap = new ymaps.Map('map', {
				center: [59.23477938932527, 39.88845959265133],
				zoom: 15
			});

			var myPlacemark = new ymaps.Placemark([59.23306406158493, 39.89275112707517], {
				hintContent: 'г. Вологда',
				balloonContent: 'г. Вологда'
			},
				{
					preset: 'islands#redIcon',
					iconLayout: 'default#image',
					iconImageHref: '/wp-content/themes/starter/assets/svg/map.svg',
					iconImageSize: [24, 35],
					// iconImageOffset: [-19, -52]
				});

			myMap.geoObjects.add(myPlacemark);
		});
	}


	// Alertify
	alertify.set('notifier', 'position', 'bottom-right');
	alertify.set('notifier', 'delay', 10);

	document.addEventListener('wpcf7mailsent', function (event) {
		alertify.success(event.detail.apiResponse.message)
	}, false);

	document.addEventListener('wpcf7invalid', function (event) {
		alertify.warning(event.detail.apiResponse.message);
	}, false);

	document.addEventListener('wpcf7mailfailed', function (event) {
		alertify.error(event.detail.apiResponse.message);
	}, false);

	$(document).on('click', '.wpcf7-submit', function (e) {
		if ($('.ajax-loader').hasClass('is-active')) {
			e.preventDefault();
			return false;
		}
	});


	function jsCompanyHistory() {
		$(".js-company-history").each((function (e, n) {
			var i = $(n),
				slider = i.find(".js-company-history-slider"),
				dot = i.find(".js-company-history-dot"),
				dotsContainer = i.find(".js-company-history-dots"),
				dragger = i.find(".js-company-history-dragger"),
				imgWrapper = i.find(".js-company-history-info"),
				yearUnderImg = $(".company__history-year"),
				figure = $(".company__history-figure-img"),
				d = 0;
			dotsContainer.length > 0 && (d = dotsContainer[0].scrollWidth, $(window).resize((function () {
				d = dotsContainer[0].scrollWidth
			})));
			var h = [];
			dot.each((function (t, e) {
				h.push(e.offsetLeft)
			})),
				$(window).resize((function () {
					h = [],
						dot.each((function (t, e) {
							h.push(e.offsetLeft)
						}))
				})),
				slider.on("translated.owl.carousel", (function (t) {
					var activeSlide = i.find(".active").first(),
						activeSlideIndex = activeSlide.index(),
						slideContent = activeSlide.find(".company__history-slide"),
						yearUndexImgText = parseInt(yearUnderImg.text()),
						slideConteantDataYearNum = parseInt(slideContent.data("year")),
						slideConteantDataYear = slideContent.data("year"),
						slideConteantDataImg = slideContent.data("img");
					if (slideConteantDataYearNum > 0 && (yearUnderImg.html(slideConteantDataYear), imgWrapper.animate({
						opacity: 1
					}, 150), figure.one("load", (function () {
						imgWrapper.stop().animate({
							opacity: 1
						}, 150)
					})), figure.attr("src", slideConteantDataImg)), !g && !m) {
						dragger.stop().animate({
							left: h[activeSlideIndex]
						}, 150);
						var v = h[activeSlideIndex] < document.documentElement.clientWidth / 2 ? 0 : h[activeSlideIndex] - document.documentElement.clientWidth / 2;
						dotsContainer.css({
							transform: "translateX(".concat(-v, "px)")
						})
					}
				})),
				slider.owlCarousel({
					dots: !0,
					loop: !1,
					items: 1,
					margin: 64,
					responsive: {
						768: {
							// autoWidth: !0,
							// margin: 64
						},
						1392: {
							// autoWidth: !0,
							// margin: 120
						}
					}
				});
			var f = $(".js-history-slider-arrow-prev");
			$(".js-history-slider-arrow-next").on("click", (function () {
				var t = i.find(".active").first().index();
				(t += 1) >= dot.length && (t = dot.length - 1),
					slider.trigger("to.owl.carousel", [t])
			})),
				f.on("click", (function () {
					var t = i.find(".active").first().index();
					(t -= 1) < 0 && (t = 0),
						slider.trigger("to.owl.carousel", [t])
				})),
				dot.click((function (e) {
					var n = $(e.currentTarget).index() - 1;
					slider.trigger("to.owl.carousel", [n])
				}));
			var p, g = !1,
				m = !1;
			if (dragger.length > 0) {
				var v = new Hammer(dragger[0]),
					y = 0;
				v.add(new Hammer.Pan({
					direction: Hammer.DIRECTION_ALL,
					threshold: 0
				})),
					v.on("pan", (function (t) {
						var e = dragger[0];
						g || (g = !0, y = e.offsetLeft);
						var n = t.deltaX + y;
						if (n >= 0 && n <= d) {
							var i = dragger.offset().left;
							e.style.left = n + "px",
								(i >= document.documentElement.clientWidth - 20 || i <= 20) && (p || (p = setInterval((function () {
									!0,
										i = dragger.offset().left;
									var t = dotsContainer.css("transform").split(/[()]/)[1],
										n = t ? parseFloat(t.split(",")[4]) : 0;
									if (i >= document.documentElement.clientWidth - 20) {
										var r = e.offsetLeft + 16;
										r <= d ? (y += 16, e.style.left = r + "px", dotsContainer.css({
											transform: "translateX(".concat(n - 16, "px)")
										})) : r <= d + 16 && dotsContainer.css({
											transform: "translateX(".concat(n - 16, "px)")
										})
									} else if (i <= 20) {
										var o = e.offsetLeft - 16;
										o > 0 ? (y -= 16, e.style.left = o + "px", dotsContainer.css({
											transform: "translateX(".concat(n + 16, "px)")
										})) : n < 16 && dotsContainer.css({
											transform: "translateX(".concat(n + 16, "px)")
										})
									} else !1,
										clearInterval(p),
										p = ""
								}), 24)));
							for (var o = 0, l = 0; l < h.length && n > h[l]; l++) o = l;
							slider.trigger("to.owl.carousel", [o])
						}
						if (t.isFinal) {
							g = !1;
							for (var c = 0, u = 0, f = 0; f < h.length; f++) {
								if (!(n >= h[f])) {
									u = f;
									break
								}
								c = f
							}
							var v = Math.abs(n - h[c]),
								_ = 0;
							_ = Math.abs(n - h[u]) <= v ? u : c,
								m = !0,
								dragger.stop().animate({
									left: h[_]
								}, 150, (function () {
									m = !1
								})),
								slider.trigger("to.owl.carousel", [_]),
								p && (!1, clearInterval(p), p = "")
						}
					})),
					$(window).resize((function () {
						y = 0,
							dragger.css("left", 0),
							dotsContainer.css({
								transform: "translateX(".concat(0, "px)")
							}),
							slider.trigger("to.owl.carousel", [0])
					}))
			}
		}))
	}

	if (document.querySelector('.company__history')) {
		jsCompanyHistory()

		$('.js-company-history-dragger').css('left', '13px')
	}

	if (document.querySelector('.feed')) {
		$.ajax({
			url: 'https://www.googleapis.com/youtube/v3/playlistItems',
			type: "get",
			data: {
				key: 'AIzaSyAcIRHHh3eVJJ9IaBYu5QN07N52Q4biO58',
				part: 'snippet, contentDetails',
				playlistId: 'UU5gXhjTta7Jwv1CV9wPPFTw',
				maxResults: 4
			},
			success: function (data) {
				$('.feed-item__grid--youtube .content-feed__image img').each(function (i, el) {
					$(el).attr('src', data.items[i].snippet.thumbnails.high.url)
				})

				$('.feed-item__grid--youtube .content-feed').each(function (i, el) {
					$(el).attr('href', 'https://www.youtube.com/watch?v=' + data.items[i].contentDetails.videoId + '&autoplay=1&rel=0&controls=0&showinfo=0')
				})
			}
		});

		$.ajax({
			url: 'https://graph.facebook.com/agrosnabsz/feed',
			type: "get",
			data: {
				limit: 5,
				access_token: '500528067775990|0d36cdb87029646ab8f196786346e492',
			},
			success: function (data) {
				console.log(data)
			}
		});
	}


	// AIzaSyCfltX_s6CPtq6TAcT7EKZsXKTv0-Z2DvE



	// $.ajax({
	// 	url: 'https://graph.facebook.com/101661648722111',
	// 	type: "get",
	// 	data: {
	// 		fields: 'access_token',
	// 		access_token: '972577436884020|924217657110cf77cd94cdfc696f8d0e',
	// 	},
	// 	success: function (data) {
	// 		console.log(data)
	// 	}
	// });


});







