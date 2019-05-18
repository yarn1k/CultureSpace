function authorize() {	
	const username = document.getElementById('username').value;
	const password = document.getElementById('password').value;
	
	const url = 'http://www.mocky.io/v2/5ce00303330000242d608b7b' + '?username=' + username + '&password=' + password;
	
	fetch(url, {mode: 'no-cors'}).then(function(response) {
		return response.json();
	}).then(function(data) {
		if (data.success) {
			window.open("index.php", "_self");
		} else {
			alert('Не удалось авторизоваться');
		}
	}).catch(function() {
		console.log("Authorization error");
	});
}