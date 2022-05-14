const
	body = document.body,
	navBtn = document.getElementById('spNavBtn'),
	closeBtn = document.getElementById('closeBtn');

navBtn.addEventListener('click', function () {
	if (body.classList.contains('isOpen')) {
		body.classList.remove('isOpen');
		body.classList.add('isClose');
	} else {
		body.classList.add('isOpen');
		body.classList.remove('isClose');
	}
});


closeBtn.addEventListener('click', function () {
	body.classList.remove('isOpen');
	body.classList.add('isClose');
});